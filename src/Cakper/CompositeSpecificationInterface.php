<?php

namespace Cakper;

interface CompositeSpecificationInterface extends SpecificationInterface
{
    /**
     * @param SpecificationInterface $specification
     *
     * @return CompositeSpecificationInterface
     */
    public function andSatisfies(SpecificationInterface $specification);

    /**
     * @param SpecificationInterface $specification
     *
     * @return CompositeSpecificationInterface
     */
    public function orSatisfies(SpecificationInterface $specification);

    /**
     * @return CompositeSpecificationInterface
     */
    public function notSatisfies();
} 
