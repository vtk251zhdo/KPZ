<?php

class CommandCentre implements Mediator
{
    private array $runways = [];
    private array $assignments = [];

    public function addRunway(Runway $runway): void
    {
        $this->runways[] = $runway;
    }

    public function requestLanding(Aircraft $aircraft): bool
    {
        foreach ($this->runways as $runway) {
            if (!$runway->isBusy()) {
                $runway->setBusy(true);
                $this->assignments[spl_object_id($aircraft)] = $runway;
                return true;
            }
        }
        return false;
    }

    public function requestTakeOff(Aircraft $aircraft): void
    {
        $aircraftId = spl_object_id($aircraft);
        if (isset($this->assignments[$aircraftId])) {
            $runway = $this->assignments[$aircraftId];
            $runway->setBusy(false);
            unset($this->assignments[$aircraftId]);
        }
    }
}