<?php

use Psr\Log\LoggerInterface;

class MathCalculator {
    
    private $logger;
    
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }
    
    public function add($a, $b) {
        $this->logger->info("Adding $a and $b");
        return $a + $b;
    }
    
    public function subtract($a, $b) {
        $this->logger->info("Subtracting $b from $a");
        return $a - $b;
    }
}
