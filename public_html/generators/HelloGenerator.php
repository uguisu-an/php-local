<?php
namespace Generators;

class HelloGenerator {
    // Generate Response from Request
    public function request(array $request) {
        $response = array(
            "msg" => "Hello, {$request["name"]}!"
        );
        return $response;
    }
}
