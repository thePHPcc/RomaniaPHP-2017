<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase {

    public function testHasCreator() {
        $creator = new Creator('Creator');
        $project = new Project($creator);
        $this->assertEquals($creator, $project->getCreator());
    }
}
