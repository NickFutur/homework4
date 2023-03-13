<?php

abstract class Tariff implements iTariff
{

	protected $kilometerPrice;
	protected $minutePrice;
	protected $kilometers;
	protected $minutes;

	/** @var iService[] */
	protected $services = [];

	public function __construct(int $kilometers, int $minutes)
	{
		$this->kilometers = $kilometers;
		$this->minutes = $minutes;
	}

	public function countPrice(): int
	{
		$price = $this->kilometers * $this->kilometerPrice + $this->minutes * $this->minutePrice;
			if($this->services){
				foreach ($this->services as $service)
				{
					$service->apply($this, $price);
				}
			}

		return $price;
	}

	public function addServices(iService $service): static
	{
		array_push($this->services, $service);
		return $this;
	}

	public function getMinutes(): int
	{
		return $this->minutes;
	}

	public function getDistance(): int
	{
		return $this->kilometers;
	}

}
