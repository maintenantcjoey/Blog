<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;


class BlogController extends AbstractController
{

    /**
     * @Route("/blog/page/{page}", name="blog_list", requirements = {"page" = "\d+"})
     */
    public function list($page = 1)
    {
        return $this->render('index.html.twig', ['page' => $page]);
    }


    /**
     * Getting a article with a formatted slug for title
     *
     * @param string $slug The slugger
     *
     * @Route("/blog/{slug<^[a-z0-9-]+$>}", name="blog_show")
     *  @return Response A response instance
     */
    public function show($slug = "javascript-vs-php") : Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('No slug has been sent to find an article in article\'s table.');
        }

        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );

        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findOneBytitle(mb_strtolower($slug));

        if (!$article) {
            throw $this->createNotFoundException(
                'No article with '.$slug.' title, found in article\'s table.'
            );
        }

        return $this->render(
            'show.html.twig',
            [
                'article' => $article,
                'slug' => $slug,
            ]
        );
    }

    /**
     *
     * @Route("/category/{category}", name="blog_show_category")
     * @return Response A response instance
     */
    public function showByCategory($category) : Response
    {
        $categ = $this->getDoctrine()
            ->getRepository(category::class)
            ->findOneByName($category);
        $articles= $this->getDoctrine()
            ->getRepository(Article::class)
            ->findBy(['category' => $categ->getId()]);

        if (!$category) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }

        return $this->render(
            'blog/category.html.twig',
            ['articles' => $articles]
        );
    }

    /**
     * Show all row from article's entity
     *
     * @Route("/", name="blog_index")
     * @return Response A response instance
     */
    public function index() : Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        if (!$articles) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }

        return $this->render(
            'index.html.twig',
            ['articles' => $articles]
        );
    }


}
