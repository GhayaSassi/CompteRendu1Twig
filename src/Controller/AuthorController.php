<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/showAuthor', name: 'app_author')]
    public function list()
    {
        $title = 'List of authors' ;
        $totalBooks = 0;
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => ' Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => 'William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);

        foreach ($authors as $author) { 
            $totalBooks += $author['nb_books'];
         }
        return $this->render('author/list.html.twig', [ 'title' => $title , 'AUthors' => $authors , 'totalBooks' => $totalBooks ]);
    }

    #[Route('/showAuthorDetails/{id}', name: 'app_author_Details')]
    public function auhtorDetails($id)
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => ' Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => 'William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);


        return $this->render('author/showAuthor.html.twig', [ 'id' => $id , 'Auth' => $authors ]);
    }
}
