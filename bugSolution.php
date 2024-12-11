To fix this, use the `use` keyword and pass the variable by reference using the `&` operator:

```php
$x = 10;
$functions = [];
for ($i = 0; $i < 5; $i++) {
  $functions[] = function () use (&$x) {
    return $x++;
  };
  $x++;
}
foreach ($functions as $func) {
  echo $func() . " "; // Outputs 10 12 14 16 18
}
```

By using `&$x`, the closure now captures a reference to the `$x` variable, so it always reflects the current value when executed.