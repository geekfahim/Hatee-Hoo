<?php
declare(strict_types=1);

namespace App;

class TaskTwo {

    public function generate($max_num = 15) {
        $output = [];
        for ($number = 1; $number <= $max_num; $number++) {
            if (0 === $number % 2 && 0 === $number % 7) {
                array_push($output, 'hateehoo');
            } elseif (0 === $number % 2) {
                array_push($output, 'hatee');
            } elseif (0 === $number % 7) {
                array_push($output, 'ho');

            } else {
                array_push($output, $number);
            }

        }

        echo implode("-", $output) . PHP_EOL ."\n";
    }

}

// $obj = new TaskTwo();

// $obj->generate();
