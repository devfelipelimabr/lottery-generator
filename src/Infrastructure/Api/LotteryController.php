<?php

namespace Lottery\Infrastructure\Api;

use Lottery\Application\LotteryService;

class LotteryController
{
    private LotteryService $service;

    public function __construct()
    {
        $this->service = new LotteryService();
    }

    public function generate(): void
    {
        try {
            $gameType = $_GET['game'] ?? '';
            $quantity = (int)($_GET['quantity'] ?? 0);

            if (empty($gameType)) {
                throw new \InvalidArgumentException('Tipo de jogo não especificado');
            }

            if ($quantity <= 0) {
                throw new \InvalidArgumentException('Quantidade de números não especificada');
            }

            $result = $this->service->generateNumbers($gameType, $quantity);

            header('Content-Type: application/json');
            echo json_encode($result);
        } catch (\Exception $e) {
            http_response_code(400);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
