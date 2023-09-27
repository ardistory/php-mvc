<?php

namespace ardiStory\Php\Mvc\App;

class View
{
    public static function render(string $view, mixed $model): void
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }
}
