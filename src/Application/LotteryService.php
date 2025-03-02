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

    public function generateNumbers(string $gameType, int $quantity): array
    {
        $game = $this->createGame($gameType);

        if (!$game->validateQuantity($quantity)) {
            throw new \InvalidArgumentException(
                "Quantidade inválida. O {$game->getName()} aceita de " .
                    "{$game->getMinNumbersToSelect()} a {$game->getMaxNumbersToSelect()} números."
            );
        }

        $numbers = $this->generator->generate($game, $quantity);
        sort($numbers);

        return [
            'game' => $game->getName(),
            'quantity' => $quantity,
            'numbers' => $numbers,
            'limits' => [
                'min' => $game->getMinNumbersToSelect(),
                'max' => $game->getMaxNumbersToSelect()
            ]
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
