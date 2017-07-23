<?php 

class Response
{
    public $topOutput;
    public $notices;

    function __construct($top, $notifications) {
       $this->topOutput = $top;
       $this->notices = $notifications;
   }
}

$topOutput = shell_exec('top -l 1');

// get notifications
$lines = explode("\n", $topOutput);
$notices = "";

$loadAvgOf15Min = (float)explode(",", $lines[2])[2];

$cpuUsage = explode(",", $lines[3])[2];
$idxLastPercent = strrpos($cpuUsage, "%");
$cpuUsageIdle = (float)substr($cpuUsage, 0, $idxLastPercent);

if ($loadAvgOf15Min > 3.7)
	$notices = "Too much value of load average for 15 min!";
if ($cpuUsageIdle < 30)
	$notices .= ";Too much CPU load!";

$response = new Response($topOutput, $notices);
echo json_encode($response);

//echo "<pre>" , print_r($lines) , "</pre>";