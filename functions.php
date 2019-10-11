<?php
declare(strict_types=1);

namespace Base\Processes
{
function exec(string $cmd, string... $args) {
	$cmd = escapeshellcmd($cmd);
	$args = array_map('escapeshellarg', $args);

	$commandLine = $cmd . ' ' . implode(' ', $args);
	var_dump("Execing '$commandLine'");

	$outputArray = [];
	\exec(
		$commandLine,
		$outputArray,
		$returnValue
	);
	return [$returnValue, $outputArray];
}
}
