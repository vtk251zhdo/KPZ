<?php

class Aircraft
{
    public string $name;
    private Mediator $mediator;

    public function __construct(string $name, Mediator $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function land(): void
    {
        echo "Aircraft {$this->name}: Checking runway via Command Centre...\n";
        if ($this->mediator->requestLanding($this)) {
            echo "Aircraft {$this->name} has landed.\n";
        } else {
            echo "Aircraft {$this->name}: Could not land, the runway is busy\n";
        }
    }

    public function takeOff(): void
    {
        echo "Aircraft {$this->name} is taking off.\n";
        $this->mediator->requestTakeOff($this);
        echo "Aircraft {$this->name} has took off.\n";
    }
}