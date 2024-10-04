<?php
namespace Controllers;

use Entity\User;

class LoginController
{
    private $username;
    private $password;

    private User $user;

    public function __construct($username, $password, User $user) {
        $this->user = $user;
    }

    public function login() {

    }
}