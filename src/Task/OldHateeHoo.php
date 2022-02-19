<?php

declare (strict_types = 1);

namespace App\Task;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\TaskThree;
use App\TaskTwo;

class HateeHoo {

    public function generate(int $start = 1, int $end = 20): string
    {
        $output = [];
        for ($i = $start; $i <= $end; $i++) {
            $buffer = '';
            if ($i % 3 === 0) {
                $buffer .= 'Pa';
            }
            if (0 === $i % 5) {
                $buffer .= 'Pow';
            }
            $output[] = $buffer === '' ? $i : $buffer;
        }

        return 'fffff';
    }

}

$item = new HateeHoo();
$item->generate(1,20);

// $item = new TaskTwo();
// $item->generate(15);

// $item = new TaskThree();
// $item->generate(5);
