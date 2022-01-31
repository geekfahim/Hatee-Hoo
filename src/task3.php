<?php

namespace App;

class Task {

    public $output = [];

    public function TaskThree($max_num = 10) {
        for ($number = 1; $number <= $max_num; $number++) {
            if ((1 === $number ||4 === $number || 9 === $number) && 5 < $number ) {
                array_push($this->output, 'jofftchoff');
            } elseif (1 === $number ||4 === $number || 9 === $number  ) {
                array_push($this->output, 'joff');
            } elseif (5 < $number ) {
                array_push($this->output, 'tchoff');

            } else {
                array_push($this->output, $number);
            }

        }
        echo implode("-", $this->output);
    }

}

$obj = new Task();

$obj->TaskThree();
