<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$sel_set = htmlspecialchars($_POST['sel_set'], ENT_QUOTES);
$buy_val = htmlspecialchars($_POST['buy_val'], ENT_QUOTES);

print "私の名前は、" . $name . '<br />';
print "ご希望の商品は、" . $sel_set . '<br />';
print "注文数は、" . $buy_val;
