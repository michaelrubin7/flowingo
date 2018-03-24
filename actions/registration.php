<?php
  // var_dump($_POST);
  require_once('../models/user_model.php');
  $model = new UserModel();
  $model -> createBy($_POST);
?>
