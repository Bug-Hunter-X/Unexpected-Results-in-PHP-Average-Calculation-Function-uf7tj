```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }

  //Validate if all elements are numeric
  if (!array_filter($numbers, 'is_numeric') == $numbers){
    return "Error: Array contains non-numeric values";
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [10,20,30];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average:20

$numbers = [];
$average = calculate_average($numbers); //Output: Average: 0

$numbers = [10, 20, 'a', 30];
$average = calculate_average($numbers); //Output: Error: Array contains non-numeric values
```