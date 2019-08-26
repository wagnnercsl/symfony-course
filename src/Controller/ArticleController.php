<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage()
	{

		return $this->render('article/homepage.html.twig');
	}

	/**
	 * @Route("/show/{slug}", name="article_show")
	*/
	public function show($slug)
	{
		$comments = [
			'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
		];

		return $this->render('article/show.html.twig',[
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments
		]);
	}

}