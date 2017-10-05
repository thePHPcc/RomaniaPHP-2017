<?php declare(strict_types = 1);

class Project {

    /** @var Creator */
    private $creator;

    /**
     * @param Creator $creator
     */
    public function __construct(Creator $creator) {
        $this->creator = $creator;
    }

    /**
     * @return Creator
     */
    public function getCreator(): Creator {
        return $this->creator;
    }

    public function isCreatedBy(Pledger $pledger): bool {
        return $pledger->hasSameIdentity($this->creator);
    }

}

