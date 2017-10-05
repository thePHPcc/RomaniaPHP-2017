<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

/**
 * @covers Pledge
 */
class PledgeTest extends TestCase {

    /** @var  Pledge */
    private $pledge;

    /** @var  PledgeLevel */
    private $pledgeLevel;

    protected function setUp() {
        $this->pledgeLevel = new PledgeLevel();
        $this->pledge = new Pledge(
            $this->pledgeLevel,
            new Project(new Creator('Creator')),
            new Pledger('Pledger')
        );
    }

    public function testCanBeMade() {
        $this->assertInstanceOf(Pledge::class, $this->pledge);
    }

    public function testHasPledgeLevel() {
        $this->assertSame($this->pledgeLevel, $this->pledge->getLevel());
    }

    public function testCreatorCannotPledge() {
        $this->expectException(Exception::class);
        new Pledge(
            $this->pledgeLevel,
            new Project(new Creator('CreatorName')),
            new Pledger('CreatorName')
        );
    }
}
