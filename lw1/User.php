<?php

class User
{
    public string $username;
    public string $password;
    public DateTime $birthday;

    public function __construct(string $username, string $password, string $birthday)
    {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = new DateTime($birthday);
    }
}
