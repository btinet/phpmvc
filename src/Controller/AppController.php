<?php

namespace App\Controller;

use Core\Controller\AbstractController;

class AppController extends AbstractController
{

    /**
     * @param int|null $i number given from the route
     * @return string
     */
    public function index(int $i = null): string
    {
        $luckyNumber = rand(1, 99);

        /**
         * Meta-Werte werden überschrieben, sollte der Key bereits existieren.
         */
        $this->meta->add('description', 'Neuer Titel');
        /**
         * Du kannst aber auch den String an das Original anhängen.
         */
        $this->meta->append('description', 'Seitenüberschrift', '-');

        $number = null !== $i ? $i : false;

        /**
         * Meta-Daten müssen nicht manuell der render-Methode übergeben werden.
         * Diese werden automatisch mit der abstrakten Controller-Klasse übergeben.
         */
        return $this->render('lucky_number/index.html', [
            'number' => $number,
            'luckyNumber' => $luckyNumber
        ]);
    }

}
