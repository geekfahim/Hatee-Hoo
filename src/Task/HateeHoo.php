<?php

declare (strict_types = 1);

namespace App\Task;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\TaskThree;
use App\TaskTwo;

class HateeHoo {

    public function generate($max_num = 20) {
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

        echo implode(" ", $output) . PHP_EOL . "\n";

    }

}

$item = new HateeHoo();
$item->generate(20);

$item = new TaskTwo();
$item->generate(15);

$item = new TaskThree();
$item->generate(5);