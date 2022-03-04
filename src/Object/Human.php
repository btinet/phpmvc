<?php
/*
 * Copyright (c) 2022. Benjamin Wagner
 */

namespace App\Object;

class Human
{

    private string $name;

    private bool $isTired = true;

    private int $lastState;

    public function __construct(string $name = null)
    {
        $this->name = ($name) ?? $name;
    }
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isTired(): bool
    {
        return $this->isTired;
    }

    /**
     * @param bool $isTired
     */
    public function setIsTired(bool $isTired): void
    {
        $this->isTired = $isTired;
    }

    /**
     * @return int
     */
    public function getLastState(): int
    {
        return $this->lastState;
    }

    /**
     * @param int $lastState
     */
    public function setLastState(int $lastState): void
    {
        $this->lastState = $lastState;
    }

}
