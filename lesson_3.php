<!-- Урок 3. -->

<!-- Задание 1.
С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. -->

<?php
echo '<br> Задание 1. <br>';
$i = 0;
while ($i <= 100) {
  if (($i % 3) == 0) {
    echo("$i ");
  }
  $i++;
}
echo '<br>';
?>

<!-- Задание 2. 
С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число. -->

<?php
echo '<br> Задание 2. <br>';
$i = 0;
do {
  if ($i == 0) {
    echo ("$i – ноль.<br>");
  } elseif (($i % 2) == 0) {
    echo ("$i – четное число.<br>");
  } else {
    echo ("$i – нечетное число.<br>");
  }
  $i++;
} while ($i <= 10);
echo '<br>';
?>

<!-- Задание 3. 
Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
а в качестве значений – массивы с названиями городов из соответствующей области. 
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru) -->

<?php
echo '<br> Задание 3. <br>';
$regions = [
  "Московская область" => [
    "Москва", "Зеленоград", "Клин"
  ],
  "Ленинградская область" => [
    "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
  ],
  "Рязанская область" => [
    "Рязань", "Касимов", "Скопин"
  ]
];
foreach ($regions as $region => $cities){
  echo("$region:<br>");
  foreach ($cities as $city){
    echo("$city, ");
  };
  echo("<br>");
}
echo '<br>';
?>

<!-- Задание 4. 
Объявить массив, индексами которого являются буквы русского языка, 
а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. -->

<?php
echo '<br> Задание 4. <br>';

function translit ($str) {
  $alphabet = [
    "а" => "a", 
    "б" => "b", 
    "в" => "v", 
    "г" => "g", 
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "j",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "x",
    "ц" => "cz",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shh",
    "ъ" => "''",
    "ы" => "y'",
    "ь" => "'",
    "э" => "e'", 
    "ю" => "yu", 
    "я" => "ya"
  ];
  $str_out = "";
  for ($i = 0; $i < mb_strlen($str); $i++){
    $str_out .= $alphabet[mb_substr($str, $i, 1)];
  }
  return $str_out;
};

echo translit("привет");

echo '<br>';
?>

<!-- Задание 5. 
Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. -->

<?php
echo '<br> Задание 5. <br>';

function convert ($str) {
  return $str = str_replace(" ","_",$str);
};

echo convert("привет мир");

echo '<br>';
?>

<!-- Задание 6. 
В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
Необходимо представить пункты меню как элементы массива и вывести их циклом. 
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. -->

<?php
echo '<br> Задание 6. <br>';

$menu = [
  "menu1" => ["item1", "item2", "item3"],
  "menu2" => ["item1", "item2", "item3"],
  "menu3" => ["item1", "item2", "item3"],
];

foreach ($menu as $ul => $items){
  echo "<ul> $ul";
  foreach ($items as $li){
    echo "<li> $li </li>";
  }
  echo "</ul>";
}
echo '<br>';
?> 