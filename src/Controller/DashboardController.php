<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Product;


class DashboardController extends Controller{


  /**
  *@Route("admin/gallery",name="gallery")
  *@Route("admin/gallery/{page}", name="gallery", requirements={"page"="\d+"})
  */

  public function showGalleryPanel($page = 1){

   $files = array(
     array(
       "cover" => "https://images.unsplash.com/photo-1516692935701-4f35bff8b9f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e8b07db9ad1b8626288bbbf77471558&auto=format&fit=crop&w=1350&q=80",
       "title" => "Eastern Sierras",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1512847179643-f1794c3e0ac8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a6fdb8d121a8fb6867beb0d9e1d1ea96&auto=format&fit=crop&w=674&q=80",
       "title" => "Traveling Around The World",
       "download_counter" => "560",
       "size" => random_int(10, 900),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1496749843252-699a989877a1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe5da9650707e5a93c8c3cf164c2e74b&auto=format&fit=crop&w=1375&q=80",
       "source" => "https://quirksmode.org/html5/videos/big_buck_bunny.mp4",
       "title" => "Colorful Butterflies",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "video"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "download_counter" => random_int(10, 900),
       "source" => "/uploads/1/Ser Amigos.m4a",
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1516692935701-4f35bff8b9f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e8b07db9ad1b8626288bbbf77471558&auto=format&fit=crop&w=1350&q=80",
       "title" => "Eastern Sierras",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1512847179643-f1794c3e0ac8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a6fdb8d121a8fb6867beb0d9e1d1ea96&auto=format&fit=crop&w=674&q=80",
       "title" => "Traveling Around The World",
       "download_counter" => "560",
       "size" => random_int(10, 900),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1513223848047-2456e15b4f7d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ebc05061b3e2a4fb76d2552cd94308a0&auto=format&fit=crop&w=1350&q=80",
       "source" => "https://www.youtube.com/watch?v=evsQEqSTGzQ",
       "title" => "Colorful Butterflies",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "video"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "source" => "/uploads/1/Invierno.m4a",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1516692935701-4f35bff8b9f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e8b07db9ad1b8626288bbbf77471558&auto=format&fit=crop&w=1350&q=80",
       "title" => "Eastern Sierras",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1512847179643-f1794c3e0ac8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a6fdb8d121a8fb6867beb0d9e1d1ea96&auto=format&fit=crop&w=674&q=80",
       "title" => "Traveling Around The World",
       "download_counter" => "560",
       "size" => random_int(10, 900),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1496749843252-699a989877a1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe5da9650707e5a93c8c3cf164c2e74b&auto=format&fit=crop&w=1375&q=80",
       "source" => "https://www.youtube.com/watch?v=evsQEqSTGzQ",
       "title" => "Colorful Butterflies",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "video"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "source" => "/uploads/1/Ser Amigos.m4a",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1516692935701-4f35bff8b9f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e8b07db9ad1b8626288bbbf77471558&auto=format&fit=crop&w=1350&q=80",
       "title" => "Eastern Sierras",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1512847179643-f1794c3e0ac8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a6fdb8d121a8fb6867beb0d9e1d1ea96&auto=format&fit=crop&w=674&q=80",
       "title" => "Traveling Around The World",
       "download_counter" => "560",
       "size" => random_int(10, 900),
       "type" => "image"
     ),
     array(
       "cover" => "https://img.youtube.com/vi/evsQEqSTGzQ/mqdefault.jpg",
       "source" => "https://www.youtube.com/watch?v=evsQEqSTGzQ",
       "title" => "Colorful Butterflies",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "video"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "source" => "/uploads/1/Ser Amigos.m4a",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "source" => "/uploads/1/Ser Amigos.m4a",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1516692935701-4f35bff8b9f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e8b07db9ad1b8626288bbbf77471558&auto=format&fit=crop&w=1350&q=80",
       "title" => "Eastern Sierras",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1512847179643-f1794c3e0ac8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a6fdb8d121a8fb6867beb0d9e1d1ea96&auto=format&fit=crop&w=674&q=80",
       "title" => "Traveling Around The World",
       "download_counter" => "560",
       "size" => random_int(10, 900),
       "type" => "image"
     ),
     array(
       "cover" => "https://img.youtube.com/vi/evsQEqSTGzQ/mqdefault.jpg",
       "source" => "https://www.youtube.com/watch?v=evsQEqSTGzQ",
       "title" => "Colorful Butterflies",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "video"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1520087619250-584c0cbd35e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=46133220eb9fb8b0d0f308e6c2d501ca&auto=format&fit=crop&w=685&q=80",
       "title" => "Ashes",
       "source" => "/uploads/1/Ser Amigos.m4a",
       "download_counter" => random_int(10, 900),
       "size" => random_int(10, 100),
       "type" => "audio"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef83ecf505188d03ab8002e57706b285&auto=format&fit=crop&w=1267&q=80",
       "title" => "Best Concert",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
     array(
       "cover" => "https://images.unsplash.com/photo-1499391247846-a1039816ee83?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aca7845e9084a951857ee80a9a43e7f1&auto=format&fit=crop&w=750&q=80",
       "title" => "Some Flowers",
       "download_counter" => random_int(10, 9100),
       "size" => random_int(10, 100),
       "type" => "image"
     ),
   );

   $log = "Just a Test";

   $limit = 20;
   $postsQuantity = count($files);
   $offset = ($page - 1) * $limit;
   $pagesQuantity = ceil($postsQuantity / $limit);


   $pagination_array = array_slice($files, $offset, $limit);

    return $this->render('dashboard/gallery.html.twig', array(
         "files" => $pagination_array,
         "pagesQuantity" => $pagesQuantity,
         'currentPage' => $page,
         "log" => $log,
    ));

  }

  /**
  *@Route("admin/products",name="products")
  */

  public function showProductsPanel(){

    $repository = $this->getDoctrine()->getRepository(Product::class);

    $products = $repository->findAll();

    return $this->render('dashboard/products.html.twig', array(
      'title' => "Products",
      'listProducts' => $products
    ));

  }




}

 ?>
