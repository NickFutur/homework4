<?php

class ServiceGPS implements iService
{
	private $priceOneHour;

	public function __construct(int $priceOneHour)
	{
		$this->priceOneHour = $priceOneHour;
	}

	public function apply(iTariff $tariff, &$price)
	{
		$hours = ceil($tariff->getMinutes()/60);
		$price += $this->priceOneHour * $hours;
	}

}
