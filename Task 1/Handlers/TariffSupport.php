<?php

class TariffSupport extends SupportHandler
{
    public function handle(int $choice): bool
    {
        if ($choice === 3) {
            echo "[Support]: Відділ лояльності допоможе обрати кращий тариф!\n";
            return true;
        }
        return $this->nextHandler ? $this->nextHandler->handle($choice) : false;
    }
}