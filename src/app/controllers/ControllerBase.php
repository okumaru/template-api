<?php

declare(strict_types=1);

namespace MyApp\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Response;

class ControllerBase extends Controller
{

	public function beforeExecuteRoute(Dispatcher $dispatcher)
	{
		#....
	}

	protected function initialize()
	{
		#....
	}

	public function afterExecuteRoute(Dispatcher $dispatcher) : Object
	{
		$content = $dispatcher->getReturnedValue();
		
  //       // some logic for prematurely generated content (debugs/warnings)
  //       // ...

        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setJsonContent($content);
        return $this->response->send();

	}

}
