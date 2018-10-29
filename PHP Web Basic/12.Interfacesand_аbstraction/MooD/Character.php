<?php

abstract class Character
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $level;

    /**
     * @var string
     */
    private $type;


    /**
     * Character constructor.
     * @param string $username
     * @param int $level
     * @param string $type
     */
    public function __construct(string $username, int $level, string $type)
    {
        $this->setUsername($username);
        $this->setLevel($level);
        $this->setType($type);
    }

    /**
     * @return string
     */
    protected function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    private function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    protected function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    protected function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    protected function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    private function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    protected function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    private function setType(string $type): void
    {
        $this->type = $type;
    }


    public abstract function passwordHash():void;
}