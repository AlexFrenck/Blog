<?php
namespace App\Post;

use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository
{

  public function getTableName()
  {
    return "posts";
  }

  public function getModelName()
  {
    return "App\\Post\\PostModel";
  }

  public function update(PostModel $model)
  {
    $table = $this->getTableName();

    $stmt = $this->pdo->prepare("UPDATE `{$table}` SET `content` = :content, `title` = :title WHERE `id` = :id");
    
    $stmt->execute([
      'content' => $model->content,
      'title' => $model->title,
      'id' => $model->id
    ]);
  }

  public function createPost($title, $content){
    $table = $this->getTableName();
	
	  $stmt = $this->pdo->prepare("INSERT INTO `{$table}` SET `title` = :title, `content` = :content");
	  $stmt->execute([
      'title' => $title,
      'content' => $content
    ]);
  }

  public function delete(PostModel $model)
  {
    $table = $this->getTableName();
  
    $stmt = $this->pdo->prepare("DELETE FROM `{$table}` WHERE `id` = :id");
    var_dump($model);
    var_dump($stmt);
    //die();
    
    var_dump($stmt->execute([]));
    die();
  }
}

?>
