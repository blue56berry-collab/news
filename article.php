<?php
$id = $_GET['id'] ?? 0;
$articles = [
  1 => ["title" => "Global Summit 2025", "content" => "World leaders unite to address climate change in a groundbreaking summit."],
  2 => ["title" => "Historic Football Victory", "content" => "The underdogs shocked the world with a stunning victory."],
  3 => ["title" => "AI Breakthroughs", "content" => "Experts reveal how AI is reshaping industries worldwide."],
  4 => ["title" => "Blockbuster Movie", "content" => "A new film dominates the box office with record-breaking numbers."],
];
$article = $articles[$id] ?? ["title" => "Article Not Found", "content" => "Sorry, this article does not exist."];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $article['title']; ?> - CNN Clone</title>
  <style>
    body{margin:0;font-family:Arial, sans-serif;background:#f4f4f4;}
    header{background:#cc0000;color:white;padding:15px;text-align:center;font-size:24px;font-weight:bold;}
    nav{background:#222;padding:10px;text-align:center;}
    nav a{color:white;margin:0 15px;text-decoration:none;font-weight:bold;cursor:pointer;}
    nav a:hover{color:#ffcccb;}
    .container{padding:20px;max-width:800px;margin:auto;background:white;box-shadow:0 2px 6px rgba(0,0,0,0.2);}
    h2{color:#cc0000;}
    footer{background:#222;color:white;text-align:center;padding:15px;margin-top:30px;}
  </style>
</head>
<body>
  <header>CNN Clone</header>
  <nav>
    <a href="index.php">Home</a>
  </nav>
 
  <div class="container">
    <h2><?php echo $article['title']; ?></h2>
    <p><?php echo $article['content']; ?></p>
    <h3>Related News</h3>
    <ul>
      <li><a href="article.php?id=2">Sports: Football Victory</a></li>
      <li><a href="article.php?id=3">Tech: AI Breakthroughs</a></li>
      <li><a href="article.php?id=4">Entertainment: Blockbuster Movie</a></li>
    </ul>
  </div>
 
  <footer>&copy; 2025 CNN Clone</footer>
</body>
</html>
 
