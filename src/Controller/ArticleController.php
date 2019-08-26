<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
	public function homepage()
	{

		return new Response('OK!');
	}

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