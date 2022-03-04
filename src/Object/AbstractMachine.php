<?php
/*
 * Copyright (c) 2022. Benjamin Wagner
 */

namespace App\Object;

abstract class AbstractMachine
{
    /**
     * @var bool machine power state
     */
    private bool $isSwitchedOn = false;

    /**
     * @var bool machine plugin state
     */
    private bool $isPlugged = false;

    /**
     * @return bool
     */
    public function isSwitchedOn(): bool
    {
        return $this->isSwitchedOn;
    }

    /**
     * @param bool $isSwitchedOn
     */
    public function setIsSwitchedOn(bool $isSwitchedOn): void
    {
        $this->isSwitchedOn = $isSwitchedOn;
    }

    /**
     * @return bool
     */
    public function isPlugged(): bool
    {
        return $this->isPlugged;
    }

    /**
     * @param bool $isPlugged
     */
    public function setIsPlugged(bool $isPlugged): void
    {
        $this->isPlugged = $isPlugged;
    }

}
