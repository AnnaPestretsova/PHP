<!-- Урок 4. -->

<!-- Задание 1. -->
<!-- Задание 2. -->

<?php
echo '<br> Задание 1,2. <br>';

$files = scandir('./images');
$images = [];
foreach ($files as $file) {
  if ($file == '*.jpg') { //($file !== '.' && $file !== '..')
    if (is_file($file)) {
      $images = $file;
    }
  }
}

foreach ($images as $image) {
  echo '<a target="_blank" href="' . $image . '"><img src="' . $image . '"></a>';
}

echo '<br>';
?>
