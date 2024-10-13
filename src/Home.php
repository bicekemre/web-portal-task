<?php
namespace App;

class Home
{
    /**
     * @view index.twig
     */
    public function index()
    {
        $viewPath = dirname(__DIR__) . '/../views/index.twig';
        return $viewPath;
    }
}