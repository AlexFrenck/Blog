<?php

namespace App\User;

use App\Core\AbstractController;

class RegisterController extends AbstractController
{
 
public function __construct(RegisterService $registerService)
  {
    $this->registerService = $registerService;
  }
  public function register()
  {
    $error = false;
    if (!empty($_POST['inputEmail']) AND !empty($_POST['password'])) {
    	  
	  $inputEmail = $_POST['inputEmail'];
    $password = $_POST['password'];

    if ($this->registerService->attempt($inputEmail, $password)) {
        header("Location: login");
        return;
      } else {
        $error = true;
      }
    }

    $this->render("user/register", [
      'error' => $error
    ]);
  }
}
 ?>
