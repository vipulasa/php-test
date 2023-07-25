<?php

class Application
{

    public array $request;

    public string $route;

    public array $router = [
        'home', 
        'about', 
        'gallery', 
        'contact'
    ];

    public function __construct() {
        $this->route = $_GET['page'] ?? 'home';
        $this->request = $_REQUEST;
    }

    public function run()
    {
        $page = $this->route;
        $pages = $this->router;

        if (!in_array($page, $pages)) {
            $page = '404';
        }

        $title = ucfirst($page);

        $content = '';

        // This is where you can dynamically load content

        $content = 'lorem ipsum dolor sit amet';

        return [
            'page' => $page,
            'title' => $title,
            'content' => $content
        ];
    }

    public static function test(){
        return 'ela';
    }

}
