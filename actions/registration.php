<?php
  require_once('../models/user_model.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  session_start();
    if (isset($email) && isset($password) && isset($confirm_password)){
      if (!empty($email) && !empty($password) && !empty($confirm_password)){
        if ($password == $confirm_password) {
          $user_data = ['email' => $email, 'password' => $password];
          $model = new UserModel();
          $model -> createBy($user_data);
        }
      }else{
        $_SESSION['error'] = 'Email, password and confirm password cant be empty!';
      }
    }else{
      $_SESSION['error'] = 'Request with wrong params';
    }
?>
