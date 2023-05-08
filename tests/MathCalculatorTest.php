<?php
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

require_once '../mathCalculator.php';

class MathCalculatorTest extends TestCase {
    
    public function testAdd() {
        $logger = $this->createMock(LoggerInterface::class);
        
        $logger->expects($this->once())
               ->method('info')
               ->with($this->stringContains('Adding'));
        
        $calculator = new MathCalculator($logger);
        
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract() {
        $logger = $this->createMock(LoggerInterface::class);
        
        $logger->expects($this->once())
               ->method('info')
               ->with($this->stringContains('Subtracting'));
        
        $calculator = new MathCalculator($logger);
        
        $result = $calculator->subtract(5, 3);

        $this->assertEquals(2, $result);
    }
}