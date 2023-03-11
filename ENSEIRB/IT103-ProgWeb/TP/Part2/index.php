<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
  <h2>Blog Name</h2>
</div>
<?php
include("includes/menu.php");
?>
<div class="row">
  <div class="leftcolumn">
    <!-- Create article with the database -->
    <?php
    //connexion to the database
    include "includes/connexion.php"; // Inclure le fichier
    $conn = connect();
    $sql = "SELECT * FROM new_post ORDER BY date DESC" ;
    $result = mysqli_query($conn, $sql);
    //Get the author id
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="card">';
      echo '<h2>' . $row['Titre'] . '</h2>';
      echo '<h5>Auteur: ' . $row['Auteur'] . '</h5>';
      echo '<h6>Date: ' . $row['Date'] . '</h6>';
      echo '<img src="https://picsum.photos/800/300" width="100%">';
      echo '<p>' . $row['Contenu'] . '</p>';
      echo '</div>';
    }
    ?>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
