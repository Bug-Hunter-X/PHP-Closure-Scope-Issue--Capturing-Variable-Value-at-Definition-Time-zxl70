# PHP Closure Scope Issue

This repository demonstrates a common issue in PHP related to variable scope within closures.  When a closure references a variable from its surrounding scope, it captures the value of that variable at the time the closure is *defined*, not when it's *executed*. This can lead to unexpected behavior if the outer variable's value changes before the closure is called.

The `bug.php` file contains code that exhibits this problem.  The `bugSolution.php` file demonstrates how to correctly address this issue using the `use` keyword and the `&` operator to capture variables by reference.