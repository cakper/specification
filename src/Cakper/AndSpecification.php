<?php

namespace Cakper;

class AndSpecification extends Specification
{
    /**
     * @var SpecificationInterface
     */
    private $firstSpecification;

    /**
     * @var SpecificationInterface
     */
    private $secondSpecification;

    /**
     * @param SpecificationInterface $firstSpecification
     * @param SpecificationInterface $secondSpecification
     */
    public function __construct(SpecificationInterface $firstSpecification, SpecificationInterface $secondSpecification)
    {
        $this->firstSpecification = $firstSpecification;
        $this->secondSpecification = $secondSpecification;
    }

    /**
     * @param mixed $object
     *
     * @return bool
     */
    public function isSatisfiedBy($object)
    {
        return $this->firstSpecification->isSatisfiedBy($object) && $this->secondSpecification->isSatisfiedBy($object);
    }
}
