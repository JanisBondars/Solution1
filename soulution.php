<?php

function findOddEvenPair(array $numbers): int
{
    $answer = [];

    $firstElement = $numbers[0];
    $lastElement = $numbers[count($numbers) - 1];

    if (($firstElement % 2 === 0 && $lastElement % 2 === 0) ||
        ($firstElement % 2 === 1 && $lastElement % 2 === 1)) {
        throw new \http\Exception\InvalidArgumentException("Not a valid value");
    } else {
        $numbersToCheck = array_chunk($numbers, 2);
        $index = 0;
        foreach ($numbersToCheck as $numbers) {
            if ((($numbers[0] % 2 === 0 && $numbers[0] < 0) && ($numbers[1] === 0) && $numbers[1] < 0) ||
                (($numbers[0] % 2 === 1 && $numbers[0] < 0) && ($numbers[1] === 1) && $numbers[1] < 0)) {
                throw new \http\Exception\InvalidArgumentException("Not a valid value");
            } else {
                $answer [] = $index;
                $index++;
            }
        }
    }
    return count($answer);
}

//#######################################################################################


class SummationService
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        return array_sum(array_slice($this->data, $a, $b - $a + 1));
    }

}


//#######################################################################################


function longestSubstr(string $text)
{
    $splitString = str_split($text);
    $combinations = [];
    $result = [];
    $answer = [];

    for ($i = 0; $i <= count($splitString) - 2; $i++) {
        $combination = $splitString[$i] . $splitString[$i + 1];
        if (in_array($combination, $combinations) === true) {
            $result [] = $splitString[$i];
            $answer [] = implode("", $result);
            $result = [];
            $i++;
        }
        $combinations [] = $combination;
        $result [] = $splitString[$i];
        if ($i === count($splitString) - 2){
            $result [] = $splitString[$i+1];
            $answer [] = implode("", $result);
        }

    }

    $lengths = array_map('strlen', $answer);
    $maxLength = max($lengths);
    $index = array_search($maxLength, $lengths);
    return $answer[$index];
}

