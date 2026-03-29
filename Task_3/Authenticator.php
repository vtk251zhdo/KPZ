<?php

class Authenticator
{
    private static ?Authenticator $instance = null;

    private array $users = [];

    private function __construct()
    {
        echo "Authenticator створено" . PHP_EOL;
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new Exception("Не можна десеріалізувати Singleton");
    }

    public static function getInstance(): Authenticator
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function login(string $username): void
    {
        $this->users[] = $username;
        echo "Користувач {$username} увійшов в систему" . PHP_EOL;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}