<?php
namespace z;
include 'namespace.php';
include 'namespace2.php';
use aa as a;
use bb as b;

 a\A::hello();
 b\B::hello();


?> 