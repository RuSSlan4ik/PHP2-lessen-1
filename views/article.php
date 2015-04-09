<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<h1>Новость</h1>
<?php foreach ($news as $article) : ?>
  <article>
    <h3>
      <?php echo $article['title']; ?>
    </h3>

    <div><?php echo $article['text_news']; ?></div>
  </article>
<?php endforeach; ?>
<br/>
<div><a href="../">Назад</a></div>
</body>
</html>