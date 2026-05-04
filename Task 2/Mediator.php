<?php

interface Mediator
{
    public function requestLanding(Aircraft $aircraft): bool;
    public function requestTakeOff(Aircraft $aircraft): void;
}