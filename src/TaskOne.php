<?php

declare (strict_types = 1);

namespace App;

class TaskOne {

    public $output = [];

    public function TaskOne(int $start = 1, int $end = 20) {
        for ($start = 1; $start <= $end; $start++) {
            if (0 === $start % 3 && 0 === $start % 5) {
                array_push($this->output, 'Papow');
            } elseif (0 === $start % 3) {
                array_push($this->output, 'Pa');
            } elseif (0 === $start % 5) {
                array_push($this->output, 'Pow');

            } else {
                array_push($this->output, $start);
            }

        }

        echo implode(" ", $this->output);
    }

}

$obj = new TaskOne();

$obj->TaskOne();
