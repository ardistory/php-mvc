<?php

namespace ardiStory\Php\Mvc\Controller;

use ardiStory\Php\Mvc\App\View;

class HomeController
{
    function index()
    {
        $model = [
            'title' => 'PHP MVC Ardi Story',
            'content' => 'Selamat datang!'
        ];

        View::render('Home/index', $model);
    }
    function hello()
    {
        echo "HomeController.hello()";
    }

    function world()
    {
        echo "HomeController.world()";
    }

    function about()
    {
        echo "Author : Ardi Putra";
    }
}
