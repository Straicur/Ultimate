<?php

$content1 = "abc33 TASK-152 31rer";
$content2 = "abc33 31rer task-15";
//TASK-152 i task-15
$content3 = "abc33 TAS-142 31rer";

$content4 = "abc33 TASK+162 31rer";

$content5 = "abc33 TASK 152 31rer";

$content6 = "abc33 TASK152 31rer";

preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content1,$c);

print_r($c);
preg_match('/(TASK|TASK)(-)*([0-9]{1,3})/', $content2,$c);

print_r($c);
preg_match('/(TASK|TASK)(-)*([0-9]{1,3})/', $content3,$c);

print_r($c);
preg_match('/(TASK|TASK)(-)*([0-9]{1,3})/', $content4,$c);

print_r($c);
preg_match('/(TASK|TASK)(-)*([0-9]{1,3})/', $content5,$c);

print_r($c);
preg_match('/(TASK|TASK)(-)*([0-9]{1,3})/', $content6,$c);

print_r($c);
