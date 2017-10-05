<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

/**
 * @covers Pledge
 */
class PledgeTest extends TestCase {

    public function testCanBeMade() {
        $pledge = new Pledge();
        $this->assertInstanceOf(Pledge::class, $pledge);
    }

    public function testHasPledgeLevel() {
        $pledge = new Pledge();
        $this->assertEquals(new PledgeLevel(), $pledge->getLevel());
    }
}
