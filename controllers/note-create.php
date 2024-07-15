<?php

//how to submit a form 
//how to also grab the form 
//howw to validate the form and save it to the db

$heading = 'Create Note';

//dd($_SERVER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  dd($_POST);
}




require 'views/note-create.view.php';