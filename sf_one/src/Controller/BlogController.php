<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use App\Form\ArticlesType;
use App\Entity\Comment;
use App\Form\CommentType;



class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticlesRepository $repo)
    {

        // $article = $repo->find(12);
        // $article = $repo->findOneByTitle('Titre de l\'article');
        // $articles = $repo->findByTitle('Titre de l\'article');
        $articles = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'articles' => $articles
        ]);
    }
    /**
    *@Route("/", name="home")
    */ 
    public function home() {
    	return $this->render('blog/home.html.twig', ['title' => "Bienvenue ici les amis", 'age' => 31
        ]);
    }

    /**
     * @Route("/blog/new" , name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */

    public function form(Articles $article = null, Request $request, EntityManagerInterface $manager) {

        if(!$article){
            $article = new Articles();

        }
        // Maniere de créer un formulaire avec un le fichier ArticlesType avec le details du form ! evite de dupliquer du code si on a beosin d'un autre formulaire ou plus 
        $form = $this->createForm(ArticlesType::class, $article);
        
        // Création d'un formulaire
        // $form = $this->createFormBuilder($article)//$article : relier une entité
        //              ->add('title')
        //              ->add('content')
        //              ->add('image')
        //              ->getForm();

        // formulaire analyse la requête
        $form->handleRequest($request); // analyse la requete HTTP via le formulaire

        // si le form est soumis est valide on execute des fonctions
        if($form->isSubmitted() && $form->isValid()) {
            if(!$article->getId()){
            $article->setCreatedAt(new \DateTime());
            }

            // envoi dans bdd
            $manager->persist($article);
            $manager->flush();

            // redirection vers la page pour voir l'aarticle en details
            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formArticles' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);

    }




    // La route pour éxécuter la fonction en dessous

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Articles $article, Request $request, EntityManagerInterface $manager) {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                    ->setArticle($article);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }


}
