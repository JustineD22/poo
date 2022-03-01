<?php

abstract class User
{
    private string $userName = "";
    private string $userFirstname = "";
    private string $userEmail = "";
    private string $birthDate = "";
    private int $role;

    public function getUserName(): string|bool
    {
        // if (isset($this->userName)) {
        // return $this->userName;
        // }
        // else {
        //     return false; }

        return isset($this->userName) ? $this->userName : false;
    }

    public function setUserName(string $name): void
    {
        $this->userName = $name;
    }

    public function getUserFirstname(): string|bool
    {
        return isset($this->userFirstname) ? $this->userFirstname : false;
    }

    public function setUserFirstame(string $firstname): void
    {
        $this->userFirstname = $firstname;
    }

    public function getUserEmail(): string|bool
    {
        return isset($this->userEmail) ? $this->userEmail : false;
    }

    public function setUserEmail(string $email): bool
    {   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->userEmail = $email;
            return true;
        }
        else {
            return false;
        }
        
    }

    public function getBirthDate(): string|bool
    {
        return isset($this->birthDate) ? $this->birthDate : false;
    }

    public function setBirthDate(string $bdate): void
    {
        $this->birthDate = $bdate;
    }

    public function inscription(Sql $c)
    {
        $requete = "INSERT INTO users (username, userfirstname, useremail, userbirthdate, id_role)
        VALUE ('$this->userName', '$this->userFirstname', '$this->userEmail', '$this->birthDate', 2)";

        $c->insertion($requete);
    }

}
