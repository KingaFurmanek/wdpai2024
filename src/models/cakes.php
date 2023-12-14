
<?php

class Cake {
    // Properties
    private $flavor;
    private $frosting;
    private $size;

    // Constructor
    public function __construct($flavor, $frosting, $size) {
        $this->flavor = $flavor;
        $this->frosting = $frosting;
        $this->size = $size;
    }

    // Getter methods
    public function getFlavor() {
        return $this->flavor;
    }

    public function getFrosting() {
        return $this->frosting;
    }

    public function getSize() {
        return $this->size;
    }

    // Setter methods
    public function setFlavor($flavor) {
        $this->flavor = $flavor;
    }

    public function setFrosting($frosting) {
        $this->frosting = $frosting;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    // Method to display cake information
    public function displayCake() {
        echo "Cake Information:\n";
        echo "Flavor: {$this->flavor}\n";
        echo "Frosting: {$this->frosting}\n";
        echo "Size: {$this->size}\n";
    }
}
