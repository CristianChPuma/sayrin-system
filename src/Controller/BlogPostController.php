<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\BlogPost;

class BlogPostController extends Controller
{
  /**
       * @Route("admin/posts", name="posts")
       * @Route("admin/posts/{page}", name="posts", requirements={"page"="\d+"})
             */

  public function index($page = 1){

    $repository = $this->getDoctrine()->getRepository(BlogPost::class);
    $posts = $repository->findAll();

          $limit = 5;
          $postsQuantity = count($posts);
          $offset = ($page - 1) * $limit;
          $pagesQuantity = ceil($postsQuantity / $limit);


          $pagination_array = array_slice($posts, $offset, ($limit));

            return $this->render('dashboard/posts.html.twig', array(
                 "posts" => $pagination_array,
                 "pagesQuantity" => $pagesQuantity,
                 'currentPage' => $page,
                 "log" => count($pagination_array),
            ));
  }

  /**
  * @Route("admin/posts/edit/{postid}", name="editpost", requirements={"page"="\d+"})
  * @Route("")
  */

  public function editPost(){

    return $this->render('dashboard/editpost.html.twig', array(
        
    ));

  }

}
