<?php
include "src/iService.php";
include "src/iTariff.php";
include "src/ServiceDriver.php";
include "src/ServiceGPS.php";
include "src/Tariff.php";
include "src/TariffBasic.php";
include "src/TariffHour.php";
include "src/TariffStudent.php";

/** @var iTariff $tariff */
$tariff = new TariffBasic(3, 60);
$tariff->addServices(new ServiceGPS(15));
$tariff->addServices(new ServiceDriver(100));
echo "1. Тариф базовый (км: 3, мин: 60) <br> - Добавлена услуга GPS <br> - Добавлена услуга личный водитель  <br>";
echo "Стоимость тарифа базовый: " . $tariff->countPrice() . "<br><br>";

$tariff = new TariffHour(3, 10);
$tariff->addServices(new ServiceGPS(15));
$tariff->addServices(new ServiceDriver(100));
echo "2. Тариф почасовой (км: 3, мин: 60) <br> - Добавлена услуга GPS <br> - Добавлена услуга личный водитель  <br>";
echo "Стоимость тарифа почасовой: " . $tariff->countPrice() . "<br><br>";

$tariff = new TariffStudent(3, 60);
$tariff->addServices(new ServiceGPS(15));
echo "3. Тариф студенческий (км: 3, мин: 60) <br> - Добавлена услуга GPS <br>";
echo "Стоимость тарифа студенческий: " . $tariff->countPrice() . "<br>";
