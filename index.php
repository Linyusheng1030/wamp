<?php

if(!isset ($_GET['ooo'])||!is_numeric ($_GET['ooo']))
{
echo"參數錯誤";
exit;
}
else
	$a=$_GET['ooo'];
echo "$a";
