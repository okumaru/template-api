<?php

declare(strict_types=1);

namespace MyApp\Controllers;

class testController extends ControllerBase
{

    public function testAction() : array
    {
        return array('Welcome to my world');
    }

    
}
