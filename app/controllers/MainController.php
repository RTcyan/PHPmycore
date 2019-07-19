<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{


    public function indexAction()
    {
        $posts = \R::findAll('test');
        $this->setMeta('Главная страница', 'Самая главная страница', 'страница, сайт, главная');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane'];
        $cache = Cache::instance();
        $cache->delete('text');
        $data = $cache->get('text');
        if(!$data){
//            $cache->set('text', $names);
        }
        debug($data);
        $this->set(compact('name','names', 'age', 'posts'));
    }


}