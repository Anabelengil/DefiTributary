<?php
/**
 * Tests for DefiTributary
 */

use PHPUnit\Framework\TestCase;
use Defitributary\Defitributary;

class DefitributaryTest extends TestCase {
    private Defitributary $instance;

    protected function setUp(): void {
        $this->instance = new Defitributary(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defitributary::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
