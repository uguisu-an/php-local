<?php
namespace Presenters;

class HelloPresenter {
    // Render View from Response
    public function render(array $v) {
        require __DIR__."/../views/Hello.php";
    }
}
