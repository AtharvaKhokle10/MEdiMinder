<?php
require_once("config.php");
$pr1 = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM scheduling WHERE id = 1"));
$pr2 = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM scheduling WHERE id = 2"));
$pr3 = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM scheduling WHERE id = 3"));
$pr4 = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM scheduling WHERE id = 4"));

$hour = date('g');
$minute = (int)date('i');
$ampm = date('a');

if($pr1['hour'] == $hour && $pr1['minutes'] == $minute && $pr1['ampm'] == $ampm)
{
echo "1";
}
else
{
echo "0";
}


if($pr2['hour'] == $hour && $pr2['minutes'] == $minute && $pr2['ampm'] == $ampm)
{
echo "1";
}
else
{
echo "0";
}


if($pr3['hour'] == $hour && $pr3['minutes'] == $minute && $pr3['ampm'] == $ampm)
{
echo "1";
}
else
{
echo "0";
}


if($pr4['hour'] == $hour && $pr4['minutes'] == $minute && $pr4['ampm'] == $ampm)
{
echo "1";
}
else
{
echo "0";
}
?>