<?php
$category = $_GET['cat'] ?? "General";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $category; ?> News - CNN Clone</title>
  <style>
    body{margin:0;font-family:Arial, sans-serif;background:#f4f4f4;}
    header{background:#cc0000;color:white;padding:15px;text-align:center;font-size:24px;font-weight:bold;}
    nav{background:#222;padding:10px;text-align:center;}
    nav a{color:white;margin:0 15px;text-decoration:none;font-weight:bold;cursor:pointer;}
    nav a:hover{color:#ffcccb;}
    .container{padding:20px;max-width:1200px;margin:auto;}
    .card{background:white;padding:15px;box-shadow:0 2px 6px rgba(0,0,0,0.15);margin-bottom:20px;cursor:pointer;}
    .card h3{margin:10px 0;color:#333;}
    footer{background:#222;color:white;text-align:center;padding:15px;margin-top:30px;}
  </style>
  <script>
    function goToArticle(id) {
      window.location.href = "article.php?id=" + id;
    }
  </script>
</head>
<body>
  <header><?php echo $category; ?> News</header>
  <nav>
    <a href="index.php">Home</a>
  </nav>
 
  <div class="container">
    <div class="card" onclick="goToArticle(101)">
      <h3><?php echo $category; ?> Headline 1</h3>
      <p>Short description of news 1...</p>
    </div>
    <div class="card" onclick="goToArticle(102)">
      <h3><?php echo $category; ?> Headline 2</h3>
      <p>Short description of news 2...</p>
    </div>
    <div class="card" onclick="goToArticle(103)">
      <h3><?php echo $category; ?> Headline 3</h3>
      <p>Short description of news 3...</p>
    </div>
  </div>
 
  <footer>&copy; 2025 CNN Clone</footer>
</body>
</html>
 
