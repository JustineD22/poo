<?php

class User
{
    private string $userName;
    private string $userFirstname;
    private string $email;
    private string $birthDate;
    private int $role;

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName()
    {

    }
}
