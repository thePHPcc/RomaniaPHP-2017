<?php declare(strict_types = 1);

class Factory {

    public function createApplication(): Application {
        return new Application($this);
    }

    public function createHomeQuery(): HomeQuery {
        return new HomeQuery();
    }

    public function createPledgeCommand(): PledgeCommand {
        return new PledgeCommand();
    }

}
