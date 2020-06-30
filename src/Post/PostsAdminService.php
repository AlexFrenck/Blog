<?php
namespace App\Post;

class PostsAdminService
{
  public function __construct(PostsRepository $postsRepository)
  {
    $this->postsRepository = $postsRepository;
   
  }
  public function attempt($title, $content)
  {
  
    $this->postsRepository->createPost($title, $content);

    return true;
  }
}