<?php

namespace App\Core\Controller;

class AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            'content' => 'This is the abstract controller class.'
        ];
    }
}