<?php

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{

  public function __construct(LoginService $loginService)
  {
    $this->loginService = $loginService;
  }

  public function dashboard()
  {
    $this->loginService->check();
    $this->render("user/dashboard", []);
  }

  public function logout()
  {
    $this->loginService->logout();
    //setcookie('inputEmail', "", time() - 3600); 
    header("Location: login");
  }

  public function login()
  {
    if(isset($_COOKIE['inputEmail'])){
      $this->render("user/dashboard", [
        
      ]);
      return true;
    }
    $error = false;
    if (!empty($_POST['inputEmail']) AND !empty($_POST['password'])) {
	  
	  $inputEmail = $_POST['inputEmail'];
    $password = $_POST['password'];

      if ($this->loginService->attempt($inputEmail, $password)) {
        if( ($_POST['remember']==1) || ($_POST['remember']=='on')) {
          $hour = time()+3600 *24 * 30;
          setcookie('inputEmail', $inputEmail, $hour);
          }
        header("Location: dashboard");
        return;
      } else {
        $error = true;
      }
    }

    $this->render("user/login", [
      'error' => $error
    ]);
  }
}
 ?>
