<?php
declare (strict_types = 1);

namespace App;

class TaskTwo {

    public function generate(int $start = 1, int $end = 15) {
        $output = [];
        for ($start = 1; $start <= $end; $start++) {
            if (0 === $start % 2 && 0 === $start % 7) {
                array_push($output, 'hateehoo');
            } elseif (0 === $start % 2) {
                array_push($output, 'hatee');
            } elseif (0 === $start % 7) {
                array_push($output, 'ho');

            } else {
                array_push($output, $start);
            }

        }

        echo implode("-", $output) . PHP_EOL . "\n";
    }

}

$obj = new TaskTwo();

$obj->generate();

