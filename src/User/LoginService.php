<?php

namespace App\User;

class LoginService
{
  public function __construct(UsersRepository $usersRepository)
  {
    $this->usersRepository = $usersRepository;
  }

  public function check()
  {
    if (isset($_SESSION['login'])) {
      return true;
    } else {
      header("Location: login");
      die();
    }
  }

  public function attempt($inputEmail, $password)
  {
    $user = $this->usersRepository->findByInputEmail($inputEmail);
    if (empty($user)) {
      return false;
    }

    if (password_verify($password, $user->password)) {
      $_SESSION['login'] = $user->inputEmail;
      session_regenerate_id(true);
      
      return true;
    } else {
      return false;
    }
  }

  public function logout()
  {
    unset($_SESSION['login']);
    session_regenerate_id(true);
  }
}
 ?>
