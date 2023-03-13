<?php

class ServiceDriver implements iService
{

	private $priceDriver;

	public function __construct(int $priceDriver)
	{
		$this->priceDriver = $priceDriver;
	}

	public function apply(iTariff $tariff, &$price)
	{

		$price += $this->priceDriver;
	}



}
