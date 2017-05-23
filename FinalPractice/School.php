<?php

class School implements ISchool{
    
    var $color = "red";
    var $size = 650;
    var $location = "Andromeda";
    
    //make a constructor
    
    public function display() {
        
        //probably has to return a string
        
        $arr = array(this.$color, this.$size, this.$location);
        
        return $arr;
    }
    
    public function getColor($colorIn) {
        this.$color = $colorIn;
        
        $colorData = "The school is " . this.$color;
        return $colorData;
    }
    
    public function getSize() {
        
        $sizeData = "The school is " . this.$size . " square feet";
        
        return $sizeData;
    }
}