<?php declare(strict_types = 1);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class PledgeCommand {

    public function run(Request $request, Response $response) {
        $pledge = new Pledge(
            new PledgeLevel(),
            new Project(new Creator('foo')),
            new Pledger($request->getParsedBody()['pledger'])
        );
        $response->getBody()->write(sprintf('%s pledged', $pledge->getPledger()->getName()));
    }
}
