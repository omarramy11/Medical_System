<?php

// conguration the project settings
// اي شي يخص المشروع يتم تعريفه هنا

session_start(); // سيشن واحده مش بتتكرر

// defination Links
define("BURL", "http://localhost/Projects%20PHP/Medical%20Students/Medical_Serv/");
define("BURLA", "http://localhost/Projects%20PHP/Medical%20Students/Medical_Serv/admins/");
define("ASSETS", "http://localhost/Projects%20PHP/Medical%20Students/Medical_Serv/assets/");

//directory
define ("BL", __DIR__. '/');
define ("BLA", __DIR__. '/admins/');

// connect to database
require_once(BL. 'functions/db.php');

?>