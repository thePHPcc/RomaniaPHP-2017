<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeQuery {

    public function run(Request $request, Response $response) {
        $viewModel = new ProjectViewModel();

        $html = Templado\Engine\Templado::loadHtmlFile(
            new \Templado\Engine\FileName(__DIR__ . '/../../templates/project.xhtml')
        );

        $html->applyViewModel($viewModel);

    	$response->getBody()->write($html->asString());

	    return $response;
    }
}

