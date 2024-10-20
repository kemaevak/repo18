<?php
// Задание 1: Определение простой функции и возвращаемые значения
function multiply($a, $b) {
    return $a * $b;
}
echo "Задание 1: multiply(3, 4) = " . multiply(3, 4) . "<br>"; // Ожидаемый результат: 12

echo "<br>";

// Задание 2: Область видимости переменных
$globalVar = 50;
function sumGlobal() {
    global $globalVar;
    $localVar = 100;
    return $globalVar + $localVar;
}
echo "Задание 2: sumGlobal() = " . sumGlobal() . "<br>"; // Ожидаемый результат: 150

echo "<br>";

// Задание 3: Рекурсия
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo "Задание 3: factorial(5) = " . factorial(5) . "<br>"; // Ожидаемый результат: 120

echo "<br>";

// Задание 4: Анонимные функции
$array = ["apple", "banana", "cherry"];
$result = array_map(function($item) {
    return strtoupper($item);
}, $array);
echo "Задание 4: array_map() результат: <br>";
print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]

echo "<br><br>";

// Задание 5: Стрелочные функции
$sum = fn($a, $b) => $a + $b;
echo "Задание 5: sum(3, 4) = " . $sum(3, 4) . "<br>"; // Ожидаемый результат: 7

echo "<br>";

// Задание 6: Замыкания / Closure
function counter() {
    $count = 0;
    return function() use (&$count) {
        $count++;
        return $count;
    };
}
$myCounter = counter();
echo "Задание 6: " . $myCounter() . "<br>"; // Ожидаемый результат: 1
echo $myCounter() . "<br>"; // Ожидаемый результат: 2

echo "<br>";

// Задание 7: Генераторы и оператор yield
function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}
$generator = generateNumbers();
echo "Задание 7: ";
foreach ($generator as $number) {
    echo $number . " "; // Ожидаемый результат: 1 2 3 4 5
}

echo "<br><br>";

// Задание 8: Использование встроенных функций
$array = [3, 7, 2, 8, 4, 10, 1];
$minValue = min($array);
$maxValue = max($array);
echo "Задание 8: Минимум: " . $minValue . "<br>"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . $maxValue . "<br>"; // Ожидаемый результат: Максимум: 10
?>
