<?php

namespace Lottery\Domain\Lottery;

class MegaSena extends LotteryGame
{
    public function __construct()
    {
        $this->name = 'Mega-Sena';
        $this->minNumber = 1;
        $this->maxNumber = 60;
        $this->minNumbersToSelect = 6;
        $this->maxNumbersToSelect = 15;
    }
}
