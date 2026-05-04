<?php

class OperatorSupport extends SupportHandler
{
    public function handle(int $choice): bool
    {
        if ($choice === 4) {
            echo "[Support]: З'єднуємо з живим оператором. Будь ласка, зачекайте 30 хвилин...\n";
            return true;
        }
        return $this->nextHandler ? $this->nextHandler->handle($choice) : false;
    }
}