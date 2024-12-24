# PHP Average Calculation Function Bug

This repository demonstrates a bug in a PHP function designed to calculate the average of numbers in an array. The function works correctly for numeric arrays but fails when non-numeric values are present.

## Bug Description
The `calculate_average` function does not explicitly check for non-numeric data types within the input array. If the array contains strings or other non-numeric values, `array_sum()` will produce unexpected results, leading to an inaccurate average or errors.  The function correctly handles empty arrays, preventing division by zero.

## Solution
The solution involves adding input validation to ensure that all elements in the array are numeric before performing the calculation. This prevents unexpected behavior and ensures the function's accuracy.

## How to Reproduce
1. Clone the repository.
2. Run `bug.php`. Observe the output which is correct for numeric arrays but fails for arrays with non-numeric values.
3. Run `bugSolution.php`. Observe the correct handling of both numeric and non-numeric arrays.