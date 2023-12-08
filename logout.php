<?php

  // Inclusão de arquivo
  require_once("templates/header7.php");

  if($userController) {
    $userController->destroyToken();
  }