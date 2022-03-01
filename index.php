<?php

session_start();
date_default_timezone_set('Europe/Paris');

spl_autoload_register(function($className){
    include './classes/' . $className . '.php';
});

// $test = new Admin();
// // $test->setUserName("Mister");
// // $test->setUserFirstame("Toto");
// //$test->setUserEmail("toto@toto.com");
// // $test->setBirthDate("1975-03-19");

// $connexion = new Sql();

// var_dump($test->delete($connexion, "toto@toto.com"));
