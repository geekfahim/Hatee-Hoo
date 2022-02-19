<?php

declare (strict_types = 1);

namespace App\Tests;

use App\Matcher\DividesBy;
use App\Task\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * @dataProvider dataProviderForGenerateTesting
     */
    public function testGenerate(int $start, int $end, string $glue, $configs, string $expected): void
    {
        // arrange
        $task = new Task();
        // act
        $output = $task->generate($start, $end, $glue, $configs);
        // assert
        $this->assertSame($expected, $output);
    }

    public function dataProviderForGenerateTesting(): array
    {
//        $dividesBy = new DividesBy();
        return [
            [1, 15, '-', '1-hatee-3-hatee-5-hatee-ho-hatee-9-hatee-11-hatee-13-hateeho-15'],
        ];
    }
}

?>
