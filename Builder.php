<?php

interface builder
{
    public function build();
}

class SbbolBuilder implements builder
{
    public function build()
    {
        echo 'Sbbol builder build a request';
    }
}

class SberIdBuilder implements builder
{
    public function build()
    {
        echo 'SberId builder build a request';
    }
}

class Manager
{
    public function __construct(
        private builder $builder
    )
    {}

    public function getRequest()
    {
        $this->builder->build();
    }
}

//$builder = new SbbolBuilder();
$builder = new SberIdBuilder;
$manager = new Manager($builder);
var_dump($manager);
$manager->getRequest();
