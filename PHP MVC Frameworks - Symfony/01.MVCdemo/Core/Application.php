<?php

namespace Core;


use Core\Mvc\MvcContext;

class Application
{
    /** @var string[]  */
    private $dependencies = [];

    /** @var object[]  */
    private $resolvedDependencies = [];


    /** @var MvcContext */
    private $mvcContext;

    public function __construct(MvcContext $mvcContext)
    {
        $this->mvcContext = $mvcContext;
    }

    public function registerDependency(string $abstraction, string $implementation)
    {
        $this->dependencies[$abstraction] = $implementation;
    }

    public function start()
    {
        $controllerFullQualifiedName = 'Controllers\\'.ucfirst($this->mvcContext->getControllerName());
        $controller = new $controllerFullQualifiedName;


        call_user_func_array([$controller, $this->mvcContext->getActionName()], $this->mvcContext->getParams());
    }


}