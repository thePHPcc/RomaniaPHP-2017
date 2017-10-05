<?php declare(strict_types = 1);

use Slim\App;

class Application {

    /** @var Factory */
    private $factory;

    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory) {
        $this->factory = $factory;
    }

    public function run() {
        $app = $this->bootstrap();
        $app->run();
    }

    /**
     * @return App
     *
     * @throws \InvalidArgumentException
     */
    private function bootstrap(): App {
        $app = new App;
        $app->get('/', [$this->factory->createHomeQuery(), 'run']);
        $app->post('/pledge', [$this->factory->createPledgeCommand(), 'run']);
        return $app;
    }
}
