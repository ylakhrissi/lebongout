<?php

namespace App\Classes\Controllers;

use App\Classes\User;

class UserController
{

    public function index() {
        echo "Liste des utilisateurs";
    }

    public function add() {
        echo "Ajouter un utilisateur";

        $user = new User('Kader', 'TafTaf', 'Taf@hotmail.com', 'klklklklklk');

        echo $user->getEmail();

    }

}
