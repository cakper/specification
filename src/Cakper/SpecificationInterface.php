<?php

namespace Cakper;

interface SpecificationInterface 
{
    /**
     * @param mixed $object
     *
     * @return boolean
     */
    public function isSatisfiedBy($object);
} 
