<?php
require_once __DIR__."/controllers/HelloController.php";
require_once __DIR__."/presenters/HelloPresenter.php";
require_once __DIR__."/generators/HelloGenerator.php";

use Controllers\HelloController;
use Presenters\HelloPresenter;
use Generators\HelloGenerator;

$requester = new HelloGenerator();
$presenter = new HelloPresenter();
$controller = new HelloController($presenter, $requester);
$request = array(
    "name" => "John"
);
$controller->render($request);
