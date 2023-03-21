<?php

  include '../database/Database.php';

  $obj = new Database();

  print_r($obj->getResult());

?>