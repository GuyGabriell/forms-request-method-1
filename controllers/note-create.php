<?php

//how to submit a form 
//how to also grab the form 
//howw to validate the form and save it to the db

$heading = 'Create Note';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  ($_POST);
}

require 'views/note-create.view.php';