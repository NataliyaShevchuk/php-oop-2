<?php
require_once __DIR__ . "./Product";

class Food extends Product{
    public $ingredients = [];
    public $ageRange;

    function __construct($_name, $_price, $_category, $_ingredients, $_ageRange)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setIngredients($_ingredients);
        $this->setAgeRange($_ageRange);
    }


    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of ageRange
     */ 
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * Set the value of ageRange
     *
     * @return  self
     */ 
    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;

        return $this;
    }
}