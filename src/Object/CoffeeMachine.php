<?php
/*
 * Copyright (c) 2022. Benjamin Wagner
 */

namespace App\Object;

class CoffeeMachine extends AbstractMachine
{

    /**
     * @var int
     */
    private int $waterVolume;

    /**
     * @var int
     */
    private int $coffeeVolume;

    /**
     * @var int
     */
    private int $state;

    /**
     * @return int
     */
    public function getWaterVolume(): int
    {
        return $this->waterVolume;
    }

    /**
     * @param int $waterVolume
     */
    public function setWaterVolume(int $waterVolume): void
    {
        $this->waterVolume = $waterVolume;
    }

    /**
     * @return int
     */
    public function getCoffeeVolume(): int
    {
        return $this->coffeeVolume;
    }

    /**
     * @param int $coffeeVolume
     */
    public function setCoffeeVolume(int $coffeeVolume): void
    {
        $this->coffeeVolume = $coffeeVolume;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state): void
    {
        $this->state = $state;
    }


}
