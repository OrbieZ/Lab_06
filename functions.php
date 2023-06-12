<?php
session_start(); // Початок сесії

// Функція для відображення списку коментарів
function generate_comments($page) {
   // Підключення до бази даних або відкриття текстового файлу для отримання коментарів конкретної сторінки
   // Отримання коментарів для поточної сторінки
   $comments = array(
      array('name' => 'John', 'date' => '2023-01-01', 'comment' => 'Коментар 1'),
      array('name' => 'Jane', 'date' => '2023-01-02', 'comment' => 'Коментар 2'),
      array('name' => 'Mike', 'date' => '2023-01-03', 'comment' => 'Коментар 3')
   );

   // Генерація HTML для списку коментарів
   echo '<ul>';
   foreach($comments as $comment) {
      echo '<li>';
      echo '<strong>' . $comment['name'] . '</strong>';
      echo '<span>' . $comment['date'] . '</span>';
      echo '<p>' . $comment['comment'] . '</p>';
      echo '</li>';
   }
   echo '</ul>';
}

// Функція для додавання коментаря
function add_comment($page, $name, $comment) {
   // Перевірка, чи користувач має сесію (тобто, чи він зареєстрований)
   if (isset($_SESSION['username'])) {
      // Отримання даних з форми (назва коментаря, текст коментаря)
      // Додавання коментаря до бази даних або текстового файлу
   } else {
      echo 'Ви повинні увійти, щоб залишити коментар!';
   }
}
?>
