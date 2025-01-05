<?php

namespace Lottery\Application;

use Lottery\Domain\Generator\NumberGenerator;
use Lottery\Domain\Lottery\LotteryGame;
use Lottery\Domain\Lottery\MegaSena;
use Lottery\Domain\Lottery\Lotofacil;

class LotteryService
{
    private NumberGenerator $generator;

    public function __construct()
    {
        $this->generator = new NumberGenerator();
    }

    public function generateNumbers(string $gameType): array
    {
        $game = $this->createGame($gameType);
        $numbers = $this->generator->generate($game);
        sort($numbers);

        return [
            'game' => $game->getName(),
            'numbers' => $numbers
        ];
    }

    private function createGame(string $gameType): LotteryGame
    {
        return match (strtolower($gameType)) {
            'megasena' => new MegaSena(),
            'lotofacil' => new Lotofacil(),
            default => throw new \InvalidArgumentException('Jogo não suportado')
        };
    }
}
