<?php

namespace Lottery\Domain\Lottery;

abstract class LotteryGame
{
    protected string $name;
    protected int $minNumber;
    protected int $maxNumber;
    protected int $numbersToGenerate;

    public function getName(): string
    {
        return $this->name;
    }

    public function getMinNumber(): int
    {
        return $this->minNumber;
    }

    public function getMaxNumber(): int
    {
        return $this->maxNumber;
    }

    public function getNumbersToGenerate(): int
    {
        return $this->numbersToGenerate;
    }
}
