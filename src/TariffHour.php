<?php

class TariffHour extends Tariff
{
	protected $kilometerPrice = 0;
	protected $minutePrice = 200 / 60;

	public function __construct(int $kilometers, int $minutes)
	{
		parent::__construct($kilometers, $minutes);
		$this->minutes = $this->minutes - $this->minutes % 60 + 60;
	}
}
