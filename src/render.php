<?php declare(strict_types = 1);

require __DIR__ . '/autoload.php';
require __DIR__ . '/../vendor/autoload.php';

$viewModel = new ProjectViewModel();

$html = Templado\Engine\Templado::loadHtmlFile(
    new \Templado\Engine\FileName(__DIR__ . '/../templates/project.xhtml')
);

$html->applyViewModel($viewModel);

echo $html->asString();
