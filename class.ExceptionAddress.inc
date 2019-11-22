<?php

/**
 * Custom exception handler
 */
class ExceptionAddress extends Exception {
    /**
     * Magic __toString()
     * @return string
     */
    public function __toString() {
        return __CLASS__. ": [{$this->code}]: {$this->message}\n";
    }

}