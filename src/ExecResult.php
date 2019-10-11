<?php
declare(strict_types=1);

namespace Base\Processes
{
class ExecResult
{
	private $returnValue;
	private $outputLines;

	/**
	 * @param string[] $outputLines

	 */
	public function __construct(int $returnValue, array $outputLines)
	{
		$this->returnValue = $returnValue;
		$this->outputLines = $outputLines;
	}

	public function getReturnValue(): int
	{
		return $returnValue;
	}

	/**
	 * @return string[]
	 */
	public function getOutputLines(): array
	{
		return $outputLines;
	}
}
}
