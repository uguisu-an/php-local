<?php
namespace Controllers;

class HelloController {
    private $presenter;
    private $requester;

    public function __construct($presenter, $requester) {
        $this->presenter = $presenter;
        $this->requester = $requester;
    }

    public function render($request) {
        $response = $this->requester->request($request);
        $this->presenter->render($response);
    }
}
