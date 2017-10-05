<?php declare(strict_types = 1);

class Pledge {

    public function getLevel(): PledgeLevel {
        return new PledgeLevel();
    }
}
