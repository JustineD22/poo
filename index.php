<?php

session_start();
date_default_timezone_set('Europe/Paris');

spl_autoload_register(function($className){
    include './classes/' . $className . '.php';
});

// $test = new User();
// $test->setUserName("Donnadieu");
// $test->setUserFirstame("Justine");
// $test->setUserEmail("juju.donnadieu@hotmail.fr");
// $test->setBirthDate("2002-03-22");

// $connexion = new Sql();

// var_dump($test->inscription($connexion));
