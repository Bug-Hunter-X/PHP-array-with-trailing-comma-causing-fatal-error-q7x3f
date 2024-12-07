```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; //This will output 15

$numbers2 = [10,20,30,0,]; // extra comma at the end
$average2 = calculateAverage($numbers2); //this will result in a fatal error because of the extra comma
echo "Average: " . $average2;
```