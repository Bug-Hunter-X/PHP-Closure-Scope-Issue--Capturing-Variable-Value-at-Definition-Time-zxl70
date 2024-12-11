In PHP, a common yet subtle issue arises when dealing with variable scope within closures (anonymous functions).  If a closure references a variable from its surrounding scope, it captures the *value* of that variable at the time the closure is *defined*, not when it's *executed*. This can lead to unexpected behavior if the outer variable's value changes before the closure is called.

```php
$x = 10;
$functions = [];
for ($i = 0; $i < 5; $i++) {
  $functions[] = function () use ($x) {
    return $x;
  };
  $x++;
}
foreach ($functions as $func) {
  echo $func() . " "; // Outputs 10 five times instead of 10, 11, 12, 13, 14 
}
```