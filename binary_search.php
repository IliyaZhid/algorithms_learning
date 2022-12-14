<?php
/**
 * @param array $searchArray
 * @param int $searchValue
 * @return int|null
 */
function binary_search(array $searchArray, int $searchValue): int|null
{
    $low = 0;
    $high = count($searchArray) - 1;
    while ($low <= $high) {
        $mid = ceil(($low + $high) / 2);

        if ($searchArray[$mid] == $searchValue) {
            return $mid;
        }

        if ($searchValue < $searchArray[$mid]) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}
