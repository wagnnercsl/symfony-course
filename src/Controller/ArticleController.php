<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
	public function homepage()
	{

		return new Response('OK!');
	}

	public function show($slug)
	{
		return new Response(sprintf('Future page to show the article : %s',
			$slug

		));
	}

}