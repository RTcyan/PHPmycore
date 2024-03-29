<?php


namespace ishop\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $layout;
    public $prefix;
    public $data = [];
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
    }

    public function getView()
    {
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }
}