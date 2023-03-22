<?php

namespace liuxiaoyucc\timekeeper;

/**
 * 计时器
 */
class TimeKeeper
{
	public $startTime = 0;
	public $endTime = 0;
	public $consume = 0;

	public function __construct()
	{

	}

	private function init()
	{
		$this->consume = $this->endTime = $this->startTime = 0;
	}

	/**
	 * 计时开始
	 */
	public function start()
	{
		$this->init();
		return $this->startTime = microtime(1);
	}

	/**
	 * 计时结束调用
	 */
	public function end()
	{
		return $this->endTime = microtime(1);
	}

	/**
	 * 总用时
	 */
	public function consumeTime()
	{
		if (!$this->startTime) {
			return 0;
		}
		$this->endTime = $this->endTime ?: microtime(1);
		return $this->consume = bcsub($this->endTime, $this->startTime, 10) * 1000;
	}
}
