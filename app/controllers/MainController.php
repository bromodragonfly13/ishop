<?php


namespace app\controllers;



use ishop\App;

class MainController extends AppController
{


	public function indexAction()
	{
		$posts = \R::findAll('test');
		$this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова');
		$name = 'Alexandr';
		$age = '33';
		$this->set(compact('name', 'age', 'posts'));
	}
}
