<?php

namespace Cakper;

abstract class Specification implements CompositeSpecificationInterface
{
    /**
     * @param SpecificationInterface $specification
     *
     * @return CompositeSpecificationInterface
     */
    public function andSatisfies(SpecificationInterface $specification)
    {
        return new AndSpecification($this, $specification);
    }

    /**
     * @param SpecificationInterface $specification
     *
     * @return CompositeSpecificationInterface
     */
    public function orSatisfies(SpecificationInterface $specification)
    {
        return new OrSpecification($this, $specification);
    }

    /**
     * @return CompositeSpecificationInterface
     */
    public function notSatisfies()
    {
        return new NotSpecification($this);
    }
}
