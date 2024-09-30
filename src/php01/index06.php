<?php
function calc_tri($parm1, $parm2)
{
  $area_of_tri = ($parm1 * $parm2) / 2;
  return $area_of_tri;
}

function calc_sq($parm1, $parm2)
{
  $area_of_sq = $parm1 * $parm2;
  return $area_of_sq;
}

function calc_trpz($parm1, $parm2, $parm3)
{
  $area_of_trpz = (($parm1 + $parm2) * $parm3) / 2;
  return $area_of_trpz;
}

echo '三角形の面積：' . (calc_tri(10, 4)) . '<br />';
echo '四角形の面積：' . (calc_sq(10, 4)) . '<br />';
echo '台形の面積：' . (calc_trpz(10, 4, 4));
