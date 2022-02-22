<?php

namespace App\Controller;

use App\Core\Controller\AbstractController;

class AppController extends AbstractController
{

    /**
     * @param $i
     * @return string
     */
    public function index($i = null): string
    {
        if(null === $i) return "Du hast keine Nummer eingegeben.";
        return "Deine Nummer lautet: {$i}";
    }

}
