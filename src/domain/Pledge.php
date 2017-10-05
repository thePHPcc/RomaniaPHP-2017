<?php declare(strict_types = 1);

class Pledge {

    /** @var  PledgeLevel */
    private $pledgeLevel;

    /**
     * @var Project
     */
    private $project;

    /**
     * @param PledgeLevel $pledgeLevel
     * @param Project     $project
     * @param Pledger     $pledger
     *
     * @throws Exception
     */
    public function __construct(PledgeLevel $pledgeLevel, Project $project, Pledger $pledger) {
        if ($project->isCreatedBy($pledger)) {
            throw new \Exception("Sorry, I can't do that Dave...");
        }
        $this->pledgeLevel = $pledgeLevel;
        $this->project = $project;
    }

    public function getLevel(): PledgeLevel {
        return $this->pledgeLevel;
    }

}
