<?php


namespace app\controllers;



use ishop\App;
use ishop\Cache;

class MainController extends AppController
{


	public function indexAction()
	{
		$posts = \R::findAll('test');
		$this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевые слова');
		$name = 'Alexandr';
		$age = '33';
		$names = ['Test', 'Yest'];
		$cache = Cache::instance();
		//$cache->set('test', $names);
		$cache->delete('test');
		$data = $cache->get('test');
		if (!$data){
			$cache->set('test', $names);
		}
		$this->set(compact('name', 'age', 'posts'));
	}
}
