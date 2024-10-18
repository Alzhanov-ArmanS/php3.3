<?php

// Задание 1: Определение четности чисел
echo "<h2>Задание 1: Определение четности чисел</h2>";
$numbers1 = [10, 15, 22, 33, 44];
foreach ($numbers1 as $number) {
    if ($number % 2 == 0) {
        echo "Число $number — четное<br>";
    } else {
        echo "Число $number — нечетное<br>";
    }
}

// Задание 2: Подсчет положительных и отрицательных чисел
echo "<h2>Задание 2: Подсчет положительных и отрицательных чисел</h2>";
$numbers2 = [3, -1, 4, -2, 0, 5, -7];
$positiveCount = 0;
$negativeCount = 0;

foreach ($numbers2 as $number) {
    if ($number > 0) {
        $positiveCount++;
    } else {
        $negativeCount++;
    }
}
echo "Положительных чисел: $positiveCount<br>";
echo "Отрицательных чисел: $negativeCount<br>";

// Задание 3: Таблица умножения
echo "<h2>Задание 3: Таблица умножения</h2>";
$number = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$number * $i = " . ($number * $i) . "<br>";
}

// Задание 4: Условное отображение оценок студентов
echo "<h2>Задание 4: Условное отображение оценок студентов</h2>";
$students = ["Иван" => 85, "Мария" => 74, "Алексей" => 90];
foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал экзамен!<br>";
    } else {
        echo "$name не сдал экзамен!<br>";
    }
}

// Задание 5: Поиск минимального и максимального значений
echo "<h2>Задание 5: Поиск минимального и максимального значений</h2>";
$numbers3 = [12, 45, 3, 67, 23, 89, 1, 56];
$min = $numbers3[0];
$max = $numbers3[0];

foreach ($numbers3 as $number) {
    if ($number < $min) {
        $min = $number;
    }
    if ($number > $max) {
        $max = $number;
    }
}
echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";

?>
