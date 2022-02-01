<?php

namespace App;

class TaskVOne {

    public $output = [];

    public function TaskOne($max_num = 20) {
        for ($number = 1; $number <= $max_num; $number++) {
            if (0 === $number % 3 && 0 === $number % 5) {
                array_push($this->output, 'Papow');
            } elseif (0 === $number % 3) {
                array_push($this->output, 'Pa');
            } elseif (0 === $number % 5) {
                array_push($this->output, 'Pow');

            } else {
                array_push($this->output, $number);
            }

        }

        echo implode(" ", $this->output);
    }


}

$obj = new TaskVOne();

$obj->TaskOne();
