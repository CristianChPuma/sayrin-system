<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Product;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    /*public function index()
    {

      // you can fetch the EntityManager via $this->getDoctrine()
              // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
              $entityManager = $this->getDoctrine()->getManager();

              $product = new Product();
              $product->setName("Food");
              $product->setPrice(1999);
              $product->setDescription('Ergonomic and stylish!');

              // tell Doctrine you want to (eventually) save the Product (no queries yet)
              $entityManager->persist($product);

              // actually executes the queries (i.e. the INSERT query)
              $entityManager->flush();


        return $this->render('product/index.html.twig', [
            'product_name' => $product->getName(),
            'product_id' => $product->getId(),
        ]);
    }*/

    /**
 * @Route("/products/{id}", name="product_show")
 */
public function show($id)
{
    $product = $this->getDoctrine()
        ->getRepository(Product::class)
        ->find($id);

    if (!$product) {
      /*  throw $this->createNotFoundException(
            'No product found for id '.$id
        );*/
          return $this->render('product/notfound.html.twig', []);
    }

    return $this->render('product/showcaser.html.twig', ['product' => $product]);

}

/**
 * @Route("/products", name="allproducts")
 */


public function showallproducts(){

   $repository = $this->getDoctrine()->getRepository(Product::class);

   $products = $repository->findAll();

   return $this->render('product/allproducts.html.twig',[
     'listProducts' => $products,
   ]);

}


}
