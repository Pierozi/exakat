<?php

$a = 1;
$a ?: $a;
$a ?: $b;

$a->a ?: $a->a;
$a->a ?: $b->b;

A::$B ?: A::$B;
A::$B ?: B::$B;

$a[1] ?: $a[1];
$a[1] ?: $b[1];
$a[1] ?: $a[2];

?>