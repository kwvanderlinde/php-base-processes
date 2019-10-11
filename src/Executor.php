<?php
declare(strict_types=1);

namespace Base\Processes
{
class Executor
{
	/**
	 * Execute a command.
	 *
	 * @param $cmd
	 *   The name of the command to execute.
	 * @param $args
	 *   The tokens to pass to the command.
	 */
	public function exec(string $cmd, string... $args): ExecResult
	{
		$cmd = escapeshellcmd($cmd);
		$args = array_map('escapeshellarg', $args);

		$commandLine = $cmd . ' ' . implode(' ', $args);

		$outputLines = [];
		\exec(
			$commandLine,
			$outputLines,
			$returnValue
		);

		return new ExecResult($returnValue, $outputLines);
	}
}
}
