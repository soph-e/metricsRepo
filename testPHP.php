<?php

require_once __DIR__."/library/globals.php";
require_once LIBRARY."cls_MySmarty.php";

$smarty = new MySmarty;

$output = array();
exec(PYTHON."./test.py", $output, $return_var);

$toParse = trim($output[0], "[]");
$strCreateArray = "array(" . $toParse . ");";
$metrics = eval("return " . $strCreateArray . ";");

$toParse = trim($output[1], "[]");
$toParse = str_replace("_", " ", $toParse);
$strCreateArray = "array(" . $toParse . ");";
$landscapes = eval("return " . $strCreateArray . ";");


//$whatever = "array('Test','Blah')";
//$parsed = eval("return " . $whatever . ";");
//echo $parsed[1]; //This will be "Blah"

//$find[] = '[\'';
//$find[] = '\',';
//$find[] = ' \'';
//$find[] = ']';
//$replace[] = "\"";
//$replace[] = "\"";
//$replace[] = " \"";
//$replace[] = "";
//$testString = str_replace($find, $replace, $testString);
////preg_replace('/\'/', '', $testString);
//print_r($testString);



//$smarty->assign('pythonOutput', $output);
$smarty->assign('metricsArr', $metrics);
$smarty->assign('landscapessArr', $landscapes);

$smarty->display("index.tpl");

//exec('python ./port.py"' . addslashes($body) . '"');
//exec('python ./port.py ?file=defaultset.csv');

?>

