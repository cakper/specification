<?php

namespace spec\Cakper;

use Cakper\SpecificationInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NotSpecificationSpec extends ObjectBehavior
{
    function let(SpecificationInterface $specificationInterface)
    {
        $this->beConstructedWith($specificationInterface);
    }

    function it_returns_negated_result_of_specification_constructed_with(SpecificationInterface $specificationInterface, \StdClass $object)
    {
        $specificationInterface->isSatisfiedBy($object)->willReturn(true);

        $this->isSatisfiedBy($object)->shouldReturn(false);
    }
}
