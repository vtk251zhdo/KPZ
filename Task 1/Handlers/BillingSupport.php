<?php

class BillingSupport extends SupportHandler
{
    public function handle(int $choice): bool
    {
        if ($choice === 2) {
            echo "[Support]: Перенаправляємо до фінансового консультанта.\n";
            return true;
        }
        return $this->nextHandler ? $this->nextHandler->handle($choice) : false;
    }
}