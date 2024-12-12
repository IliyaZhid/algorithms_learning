<?php

namespace AlgorithmsLearning;

class BinarySearch
{
    private array $haystack;
    private int $needle;

    public function __construct($haystack,$needle)
    {
        $this->haystack = $haystack;
        $this->needle = $needle;
    }

    public function run()
    {
        $low = 0;
        $high = count($this->haystack) - 1;

        if ($high < 0) {
            return null;
        }

        while ($low <= $high) {
            $middle = round($low + $high);

            if ($this->haystack[$middle] == $this->needle) {
                return $middle;
            }

            if ($this->haystack[$middle] > $this->needle) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }
        }

        return null;
    }
}
