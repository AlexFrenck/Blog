<?php

namespace App\User;

use App\Core\AbstractRepository;
use PDO;

class UsersRepository extends AbstractRepository
{

  public function getModelName()
  {
    return "App\\User\\UserModel";
  }

  public function getTableName()
  {
    return "users";
  }

  public function findByInputEmail($inputEmail)
  {
    $table = $this->getTableName();
    $model = $this->getModelName();
    $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE inputEmail = :inputEmail");
    $stmt->execute(['inputEmail' => $inputEmail]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
    $user = $stmt->fetch(PDO::FETCH_CLASS);

    return $user;
  }
  
  public function registUser($inputEmail, $password){
	$table = $this->getTableName();
	
	$stmt = $this->pdo->prepare("INSERT INTO `{$table}` SET `inputEmail` = :inputEmail, `password` = :password");
	$stmt->execute([
      'inputEmail' => $inputEmail,
      'password' => $password
    ]);
    
  }
 
}
 ?>
