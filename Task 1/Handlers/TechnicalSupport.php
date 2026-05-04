<?php

class TechnicalSupport extends SupportHandler
{
    public function handle(int $choice): bool
    {
        if ($choice === 1) {
            echo "[Support]: Вас переключено на технічний відділ. Очікуйте...\n";
            return true;
        }
        return $this->nextHandler ? $this->nextHandler->handle($choice) : false;
    }
}