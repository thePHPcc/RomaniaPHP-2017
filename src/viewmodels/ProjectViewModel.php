<?php declare(strict_types = 1);

class ProjectViewModel {

    public function getTitle(): string {
        return 'The project title';
    }

    public function getDescription(): string {
        return 'My first project';
    }

    public function getGoal(): string {
        return '1.000 RON';
    }

    public function getLevel(): array {
        return [
            new PledgeLevelViewModel(),
            new PledgeLevelViewModel()
        ];
    }
}
