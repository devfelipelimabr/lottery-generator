<?php

namespace Lottery\Domain\Generator;

use Lottery\Domain\Lottery\LotteryGame;

class NumberGenerator
{
    public function generate(LotteryGame $game): array
    {
        $numbers = range($game->getMinNumber(), $game->getMaxNumber());
        shuffle($numbers);

        return array_slice($numbers, 0, $game->getNumbersToGenerate());
    }
}
