<?php

namespace Lottery\Domain\Lottery;

abstract class LotteryGame
{
    protected string $name;
    protected int $minNumber;
    protected int $maxNumber;
    protected int $minNumbersToSelect;
    protected int $maxNumbersToSelect;

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

    public function getMinNumbersToSelect(): int
    {
        return $this->minNumbersToSelect;
    }

    public function getMaxNumbersToSelect(): int
    {
        return $this->maxNumbersToSelect;
    }

    public function validateQuantity(int $quantity): bool
    {
        return $quantity >= $this->minNumbersToSelect &&
            $quantity <= $this->maxNumbersToSelect;
    }
}
