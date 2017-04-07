<?php

/**
 * Description of Harvest
 *
 * @author ZRuzicka
 */
class Harvest {
    
    var $odate;
    
    var $idate;
    
    var $price;
    
    function toString() {
        return "Harvest[price: ". $this->price ."; odate: ". $this->odate ."; idate: ".$this->idate."]";
    }
    
}
