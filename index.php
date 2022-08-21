<?php
require "classes/Farm.php";
require "classes/Cow.php";
require "classes/Chicken.php";

$farm=new Farm(10, 20);

echo "Добро пожаловать на ферму!"."\n\n";
echo "Коров: " . count($farm->cows) . " голов." . "\n";
echo "Кур: " . count($farm->chicks) . " голов." . "\n\n";

for($i=1; $i<=7; $i++)
{
    $farm->claimMilk();
    $farm->claimEggs();
}

echo "Собрано молока за первые 7 дней: " . $farm->getMilk() . " литров." . "\n";
echo "Собрано яиц за первые 7 дней: " . $farm->getEggs() . " штук." . "\n\n";

$farm->addCows(1);
$farm->addChicks(5);

echo "Коров после покупки: " . count($farm->cows) . " голов." . "\n";
echo "Кур после покупки: " . count($farm->chicks) . " голов." . "\n\n";

for($i=1; $i<=7; $i++)
{
    $farm->claimMilk();
    $farm->claimEggs();
}

echo "Собрано молока за последующие 7 дней: " . $farm->getMilk() . " литров." . "\n";
echo "Собрано яиц за последующие 7 дней: " . $farm->getEggs() . " штук." . "\n\n";


