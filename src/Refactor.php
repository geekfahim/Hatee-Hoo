<?php

declare (strict_types = 1);

namespace App;

class HateeHoo {

    public function taskOne($max_num = 20) {
        $output = [];
        for ($number = 1; $number <= $max_num; $number++) {
            if (0 === $number % 3 && 0 === $number % 5) {
                array_push($output, 'Papow');
            } elseif (0 === $number % 3) {
                array_push($output, 'Pa');
            } elseif (0 === $number % 5) {
                array_push($output, 'Pow');

            } else {
                array_push($output, $number);
            }

        }

        echo implode(" ", $output);

        echo PHP_EOL . "\n";
    }
    public function taskTwo($max_num = 15) {
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

        echo implode("-", $output) . PHP_EOL . "\n";

    }
    public function taskThree($max_num = 10) {
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

        echo implode("-", $output) . PHP_EOL;

    }
}

$item = new HateeHoo();
$item->taskOne(20);
$item->taskTwo(20);
$item->taskThree(20);
