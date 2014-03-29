<?php

namespace spec\Cakper;

use Cakper\SpecificationInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpecificationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('\spec\Cakper\Fixtures\Specification');
    }

    function it_is_a_specification()
    {
        $this->shouldImplement('\Cakper\SpecificationInterface');
    }

    function it_is_a_composite_specification()
    {
        $this->shouldImplement('\Cakper\CompositeSpecificationInterface');
    }

    function it_returns_and_specification(SpecificationInterface $specification)
    {
        $this->andSatisfies($specification)->shouldReturnAnInstanceOf('\Cakper\AndSpecification');
    }

    function it_returns_or_specification(SpecificationInterface $specification)
    {
        $this->orSatisfies($specification)->shouldReturnAnInstanceOf('\Cakper\OrSpecification');
    }

    function it_returns_not_specification()
    {
        $this->notSatisfies()->shouldReturnAnInstanceOf('\Cakper\NotSpecification');
    }
}
