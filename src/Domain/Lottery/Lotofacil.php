<?php

namespace Lottery\Domain\Lottery;

class Lotofacil extends LotteryGame
{
    public function __construct()
    {
        $this->name = 'Lotofácil';
        $this->minNumber = 1;
        $this->maxNumber = 25;
        $this->minNumbersToSelect = 15;
        $this->maxNumbersToSelect = 20;
    }
}
