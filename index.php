<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>faq</title>
  </head>
  <body>
    <div class="all-page">
      <nav>
        <div class="logo-title">
          <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="nav-logo">
          <h1>Privacy e termini</h1>
        </div>
        <div class="menu">
          <span>Introduzione</span>
          <span>Norme sulla privacy</span>
          <span>Termini di servizio</span>
          <span>Tecnologie</span>
          <span class="selected">Domande frequenti</span>
        </div>
      </nav>
      <?php
      include "database.php";
      echo "<main>";
      foreach ($questions as $question) {
        echo "<section>";
        foreach ($question as $quest => $ans) {
          if ($quest == "question") {
            echo "<h2 class='question'>$ans</h2>";
          }
          if ($quest == "answer") {
            echo "<p class='answer'>$ans</p>";
          }
        }
        echo "</section>";
      }
      echo "</main>";
      ?>
    </div>
  </body>
</html>
