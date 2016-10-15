<?php

require 'libs/Smarty.class.php';
function getSmarty(){
 $smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

return $smarty;
}

