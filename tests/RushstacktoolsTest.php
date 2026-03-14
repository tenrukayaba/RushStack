<?php
/**
 * Tests for RushStackTools
 */

use PHPUnit\Framework\TestCase;
use Rushstacktools\Rushstacktools;

class RushstacktoolsTest extends TestCase {
    private Rushstacktools $instance;

    protected function setUp(): void {
        $this->instance = new Rushstacktools(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Rushstacktools::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
