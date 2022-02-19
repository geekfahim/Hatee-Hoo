<?php

declare (strict_types = 1);

namespace App;

class TaskThree {

    public function generate($max_num = 10) {
        $output = [];
        for ($number = 1; $number <= $max_num; $number++) {
            if ((1 === $number || 4 === $number || 9 === $number) && 5 < $number) {
                array_push($output, 'jofftchoff');
            } elseif (1 === $number || 4 === $number || 9 === $number) {
                array_push($output, 'joff');
            } elseif (5 < $number) {
                array_push($output, 'tchoff');

            } else {
                array_push($output, $number);
            }

        }
        return implode("-", $output) . PHP_EOL . "\n";
    }

}

$obj = new TaskThree();

$obj->generate();
