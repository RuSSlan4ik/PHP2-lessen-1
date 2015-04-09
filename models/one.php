<?php
require __DIR__ . '/../functions/db.php';
function addNews($author_name, $title, $text_news)
{
  dbConnect();
  $author_name = mysql_real_escape_string($author_name);
  $title = mysql_real_escape_string($title);
  $text_news = mysql_real_escape_string($text_news);
  $query = "INSERT INTO news (author_name, title, text_news) VALUES ('$author_name', '$title', '$text_news')";
  return mysql_query($query);
}