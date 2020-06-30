<?php

namespace App\User;

class RegisterService
{
  public function __construct(UsersRepository $usersRepository)
  {
    $this->usersRepository = $usersRepository;
   
  }
  public function attempt($inputEmail, $password)
  {
    $user = $this->usersRepository->findByInputEmail($inputEmail);
    if (!empty($user)) {
      return false;
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $this->usersRepository->registUser($inputEmail, $hashedPassword);

    return true;
  }
}
