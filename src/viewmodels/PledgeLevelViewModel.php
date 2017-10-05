<?php declare(strict_types = 1);

class PledgeLevelViewModel {

    public function getName(): string {
        return 'Level 1';
    }

    public function getDescription(): string {
        return 'This is the base perk';
    }

    public function getAmount(): string {
        return '10 RON';
    }

}
