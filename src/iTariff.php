<?php

interface iTariff
{
	public function countPrice():int;
	public function addServices(iService $service);
	public function getMinutes():int;
	public function getDistance():int;
}
