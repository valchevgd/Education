<?php

namespace Core;



use Core\Mvc\MvcContextInterface;

class Application
{
    /** @var string[]  */
    private $dependencies = [];

    /** @var object[]  */
    private $resolvedDependencies = [];


    /** @var MvcContextInterface */
    private $mvcContext;

    public function __construct(MvcContextInterface $mvcContext)
    {
        $this->mvcContext = $mvcContext;
        $this->dependencies[MvcContextInterface::class] = get_class($mvcContext);
        $this->resolvedDependencies[get_class($mvcContext)] = $mvcContext;
    }

    public function registerDependency(string $abstraction, string $implementation)
    {
        $this->dependencies[$abstraction] = $implementation;
    }

    public function resolve($className)
    {
        if (array_key_exists($className, $this->resolvedDependencies)){
            return $this->resolvedDependencies[$className];
        }

        $refClass = new \ReflectionClass($className);
        $constructor = $refClass->getConstructor();

        if ($constructor === null){
            $object = new $className;

            $this->resolvedDependencies[$className] = $object;

            return $object;
        }

        $parameters = $constructor->getParameters();

        $arguments = [];

        foreach ($parameters as $parameter){

            $dependencyInterface = $parameter->getClass();

            $dependencyClass = $this->dependencies[$dependencyInterface->getName()];

            $arguments[] = $this->resolve($dependencyClass);
        }

        $object = $refClass->newInstanceArgs($arguments);

        $this->resolvedDependencies[$className] = $object;

        return $object;
    }

    public function start()
    {
        $controllerFullQualifiedName = 'Controllers\\'.ucfirst($this->mvcContext->getControllerName());
        $controller = $this->resolve($controllerFullQualifiedName);

        $refMethod = new \ReflectionMethod($controller, $this->mvcContext->getActionName());
        $refParams = $refMethod->getParameters();
        $count = count($this->mvcContext->getParams());

        $params = [];

        foreach ($this->mvcContext->getParams() as $param) {
            $params[] = $param;
        }

        for ($i = $count; $i < count($refParams); $i++){
            $argument = $refParams[$i];
            $argumentInterface = $argument->getClass();
            $argumentClass = $this->dependencies[$argumentInterface->getName()];
            $params[] = $this->resolve($argumentClass);
        }

        call_user_func_array([$controller, $this->mvcContext->getActionName()], $params);
    }
}