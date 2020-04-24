<?php
function findOddEvenPair(array $numbers): int
{
    $answer = [];
    $firstElement = $numbers[0];
    $lastElement = $numbers[count($numbers) - 1];
    $totalRuns = (count($numbers) % 2 === 1) ? count($numbers) - 1 : count($numbers);

    if (($firstElement % 2 === 0 && $lastElement % 2 === 0) ||
        ($firstElement % 2 === 1 && $lastElement % 2 === 1)) {
        echo "Invalid array!";
    } else {
        for ($i = 0; $i < $totalRuns; $i++) {
            if ($numbers[$i] % 2 == 0 && $numbers[$i + 1] % 2 !== 0 ||
                $numbers[$i] % 2 !== 0 && $numbers[$i + 1] % 2 == 0) {
                $answer[] = $i;
            }
        }
    }
    return end($answer);
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
    $possibleCombinations = count($splitString) - 2;

    for ($i = 0; $i <= $possibleCombinations; $i++) {
        $combination = $splitString[$i] . $splitString[$i + 1];
        if (in_array($combination, $combinations) === true) {
            $result [] = $splitString[$i];
            $answer [] = implode("", $result);
            $result = [];
            $combinations = [];
        } else {
            $combinations [] = $combination;
            $result [] = $splitString[$i];
            if ($i === $possibleCombinations) {
                $result [] = $splitString[$i + 1];
                $answer [] = implode("", $result);
            }
        }
    }

    $lengths = array_map('strlen', $answer);
    $maxLength = max($lengths);
    $index = array_search($maxLength, $lengths);
    return $answer[$index];
}


