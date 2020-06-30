<?php

namespace App\Post;

use App\Core\AbstractController;
use App\User\LoginService;
use App\Post\PostsAdminService;

class PostsAdminController extends AbstractController
{

  public function __construct(
    PostsRepository $postsRepository,
    LoginService $loginService,
    PostsAdminService $postsAdminService
  )
  {
    $this->postsRepository = $postsRepository;
    $this->loginService = $loginService;
    $this->postsAdminService = $postsAdminService;
  }

  public function index()
  {
    $this->loginService->check();
    
    $all = $this->postsRepository->all();
    $this->render("post/admin/index", [
      'all' => $all
    ]);
  }

  public function edit()
  {
    $this->loginService->check();

    $id = $_GET['id'];
    $entry = $this->postsRepository->find($id);

    $savedSuccess = false;
    if (!empty($_POST['title']) AND !empty($_POST['content'])) {
      $entry->title = $_POST['title'];
      $entry->content = $_POST['content'];
      $this->postsRepository->update($entry);
      $savedSuccess = true;
    }

    $this->render("post/admin/edit", [
      'entry' => $entry,
      'savedSuccess' => $savedSuccess
    ]);
  }

  public function create(){
    $this->loginService->check();
    
    if (!empty($_POST['title']) AND !empty($_POST['content'])) {
      $title = $_POST['title'];
      $content = $_POST['content'];
     
      $this->postsAdminService->attempt($title, $content);
      header("Location: index");
      return;

    }
    
    $this->render("post/admin/create", [
     
    ]);
  }

  public function delete()
  {
    /*
    $this->loginService->check();

    $id = $_GET['id'];
    $entry = $this->postsRepository->find($id);
    
    $savedSuccess = false;
   
      $this->postsRepository->delete($entry);
      $savedSuccess = true;
    
    

      header("Location: index");
      return;
      */
  }
}
 ?>
