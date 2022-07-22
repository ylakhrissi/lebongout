<?php

namespace App\Classes\Controllers;

class RecipeController
{
    public function index() {
        echo " liste des recettes";
    }

    public function add(){
        echo " Ajouter une recette";
    }
    public function delete($id = null){
        echo "Supprimer la recette :" ;
        var_dump($id);
    }

    public function update($id = null) {
        echo "Mise à jour de la recette :" ;
        var_dump($id);
    }

}
