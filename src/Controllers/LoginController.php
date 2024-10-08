<?php
namespace Oslovie\FieldReport\Controllers;

use Oslovie\FieldReport\Entity\User;

class LoginController
{
    private User $user;

    public function __construct($username, $password, User $user) {
        $this->user = $user;
    }

    public function login(string $username, string $password): void
    {
        if ($username !== $this->user->getEmail()){

        }
    }
}