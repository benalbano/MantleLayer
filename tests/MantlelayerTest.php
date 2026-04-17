<?php
/**
 * Tests for MantleLayer
 */

use PHPUnit\Framework\TestCase;
use Mantlelayer\Mantlelayer;

class MantlelayerTest extends TestCase {
    private Mantlelayer $instance;

    protected function setUp(): void {
        $this->instance = new Mantlelayer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mantlelayer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
