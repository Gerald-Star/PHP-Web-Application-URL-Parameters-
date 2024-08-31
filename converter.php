<?php

class CryptoConverter {
    // properties
    public string $currencyCode;
    
    // constructor PHP uses the __construct() function to create a constructor
    // uses the $this keyword to refer to the current object
    // uses the thin arrow (->) to access the properties and methods of a class
    // uses the double colon (::) to access the static properties and methods of a class
    // uses the double arrow (=>) to assign values to the keys of an array
    
    public function __construct(string $currencyCode) {
        $this->currencyCode = $currencyCode;
        
    }
    
    public function convert(float $value) {
        
        
    }
}

// create an object of the class

$c = new CryptoConverter("BTC"); // (currencyCode: "BTC); both are the same

?>