<?php
// echo date("l, D-M-Y", time()+172800);
echo date("l, D-M-Y", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo time();
echo "<br>";
echo date("l", mktime(0, 0, 0, 9, 12, 2001));
// strtotime
echo "<br>";
echo date("l", strtotime("12 Desember 2001"));