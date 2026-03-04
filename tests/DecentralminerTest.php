<?php
/**
 * Tests for DecentralMiner
 */

use PHPUnit\Framework\TestCase;
use Decentralminer\Decentralminer;

class DecentralminerTest extends TestCase {
    private Decentralminer $instance;

    protected function setUp(): void {
        $this->instance = new Decentralminer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentralminer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
