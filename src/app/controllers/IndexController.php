<?php

declare(strict_types=1);

namespace MyApp\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction() : array
    {
        return array('Hello world!!');
    }

    
}
