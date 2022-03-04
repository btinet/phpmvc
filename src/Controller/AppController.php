<?php

namespace App\Controller;

use App\Object\CoffeeMachine;
use App\Object\Human;
use Core\Controller\AbstractController;

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

    public function drinkCoffeeIfTired(string $name, $isTired = true)
    {
       $human = new Human($name);
       if(!$isTired) $human->setIsTired(false);
       echo "Mensch erstellt ({$human})<br>";
       echo "Prüfern, ob {$human} müde ist...<br>";
       if($human->isTired()){
           echo "Ja, {$human} ist müde.<br>";
           echo "Kaffeemaschine zur Hand nehmen.<br><br><br>";
           $coffeeMachine = new CoffeeMachine();
       } else {
           echo "{$human} ist nicht müde.";
       }

    }

    public function create(): string
    {
        $this->drinkCoffeeIfTired('Ben');
        $this->drinkCoffeeIfTired('David');
        $this->drinkCoffeeIfTired('Herr Cassens', false);

        $throws = 60000;
        $count = [
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 0,
            10 => 0,
            11 => 0,
            12 => 0,
        ];
        $min = 1;
        $max = 6;
        $sum_min = 2;
        $sum_max = 12;
        for($i = 1; $i <= $throws; $i++)
        {
            $random_a = rand($min,$max);
            $random_b = rand($min,$max);
            for($k = $sum_min; $k <= $sum_max; $k++)
            {
                $random = $random_a+$random_b;
                if($random == $k) $count[$k]++;
            }
        }
        echo "<h2>Anzahl der Würfe: {$throws}</h2>";
        echo "<h3>Häufigkeit der gewürfelten Zahlen</h3>";
        echo "<div style='width: 100%;background-color: lightblue'>";
        foreach ($count as $number => $amount)
        {
            $abs = $amount;
            $amount = round($amount/$throws*100,2);
            echo '<div style="height: 40px; width: '.$amount.'%; background-color:blue; color:white;padding:5px;margin-bottom:2px;">'.$number.' ('.$abs.'Würfe)</div>';
        }
        echo "</div>";
        return $this->view->render('base.html',['name' => 'Ben']);

    }


}
