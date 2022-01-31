<?php

namespace App;

class Task {

    public $output = [];

    public function TaskTwo($max_num = 15) {
        for ($number = 1; $number <= $max_num; $number++) {
            if (0 === $number % 2 && 0 === $number % 7) {
                array_push($this->output, 'hateehoo');
            } elseif (0 === $number % 2) {
                array_push($this->output, 'hatee');
            } elseif (0 === $number % 7) {
                array_push($this->output, 'ho');

            } else {
                array_push($this->output, $number);
            }

        }

        echo implode("-", $this->output);
    }

}

$obj = new Task();

$obj->TaskTwo();
