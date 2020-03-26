<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цалапов Александр Михайлович. 191-322. Лабораторная работа №2, Вариант №1 (31 по списку).</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="images/mospolytech-logo-white.png" alt="">
    </header>
    <main>
        <?php
            //Объявляем переменные
            $encounting = 30;
            $step = 5;
            $numbers_array = array();
            $min_value = INF;
            $max_value=0;
            $x=10;
            $array_sum = 0;
            $array_middle_num = 0;
            echo "<ul>";
            
            //Выполнение неравенства
            for($i = 0; $x < $encounting; $i++) {
                if ($x <= 10) 
                    $f = 10*$x - 5;
                elseif ($x > 10 AND $x < 20)
                    $f = ($x+3)*$x**2;
                elseif ($x === 25)
                        $f = 'error';
                elseif ($x>=20)
                    $f = 3/($x-25)+2;
                if(is_int($f) OR is_float($f))
                    array_push($numbers_array, $f);
                    $f = round($f,3);
                if ($x === 25)
                    $f = 'error';
                echo "<li>f($x) = $f</li>";
                $x += $step;


            }
            echo "</ul>";

            //Нахождение минимального элемента
            for ($i=0; $i < count($numbers_array); $i++) {
                if ($numbers_array[$i] > $max_value)
                    $max_value = $numbers_array[$i];
                else
                if ($numbers_array[$i] <= $min_value)
                    $min_value = $numbers_array[$i];
                $array_sum+=$numbers_array[$i];
            }

            //Нахождение среднего элемента
            $array_middle_num = round($array_sum / count($numbers_array), 3);
            $array_sum = round($array_sum,3);

            //Нахождение среднего элемнта 
            echo '<h2>Минимальный элемент: ',$min_value,'</h2>';
            echo '<h2>Максимальный элемент: ',$max_value,'</h2>';
            echo '<h2>Сумма элементов: ',$array_sum,'</h2>';
            echo '<h2>Средний элемент: ',$array_middle_num,'</h2>';
                
        ?>
    </main>
    <footer>
        <h2>Тип вёрстки: B</h2>
    </footer>

</body>

</html>