<? include "../includes/header_article.php" ?>
<?php include "../includes/connect.php" ?>

<script src="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"></script>

<style>
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container:hover {
  background-color: #81d4fa;
}

.container input:checked {
    background-color: #4dd0e1;
}

:checked + label {     background-color: #4dd0e1; }
h2 {
    text-align: center;
    color: #0d47a1;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 1;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}


/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background-color: white;
}
input[type=submit] {
    width: 100%;
    background-color: #0d47a1;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #0d47a1;
  }

#reset {

    background-color: #ff8a65;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  #reset:hover {
    background-color: red;
    opacity: 0.8;
  }

  .good_answer {
    background-color: #a5d6a7;

  }
.good_answer h2{
    color: #288C2C !important;
}

.bad_answer {
        background-color: #ef9a9a;
    }

    
.bad_answer h2{
    color: #b71c1c !important;
}

.bad_answer label:hover {
    background-color: #ef9a9a !important;
}

.bad_answer input:checked ~ .checkmark {
  background-color: #E94F4F;
}


.good_answer label:hover {
    background-color: #a5d6a7 !important;
}

.good_answer input:checked ~ .checkmark {
  background-color: #65DE69;
}


    
</style>

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
    <h1><b><span style="color:#0d47a1;"><i class="bi bi-question-diamond"></i> Quizz</span></b></h1>
</header>


<div class="w3-row ">
  <div class="w3-col w3-container" style="width:20%"></div>
  <div class="w3-col" style="width:60%">
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">

          <div class="w3-container">
                <h5 style="text-align: center;">Vous allez passer un quizz sur les bases de la programmation web.</h5>
                <h5 style="text-align: center;">Ce quizz est celui qui a été fait en classe, mais vous pouvez vous entrainer.</h5>
          </div>
      </div>
  </div>


  <?php
if(isset($_POST["submit"])){
    $_SESSION["quizz_done"] = 1;
    $conn = bdd_connect();
    $sql = "SELECT * FROM quizz";
    $result = $conn->query($sql);
    $score = 0;
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $reponse = $row['reponse'];

        if(isset($_POST[$id])){
            $_SESSION[$id] = $_POST[$id];
            $reponse_user = $_POST[$id];
            if($reponse_user == $reponse){
                $score++;
            }
        }
    }
    $_SESSION["score"] = $score;

    echo '<div class="w3-row ">';
    echo '<div class="w3-col w3-container" style="width:20%"></div>';
    echo '<div class="w3-col" style="width:60%">';
    echo '<div class="w3-card-4 w3-margin w3-white">';
    echo '<div class="w3-container">';
    if ($score < 10) {
        echo '<h2 style="text-align: center;color:red;">Vous avez obtenu un score de '.$score.'/'.$result->num_rows.'<br> <i class="bi bi-emoji-frown"></i></h2>';
    }
    elseif ($score >= 10 && $score < 20) {
        echo '<h2 style="text-align: center;">Vous avez obtenu un score de '.$score.'/'.$result->num_rows.' <br><i class="bi bi-emoji-smile"></i></h2>';
        echo '<h2 style="text-align: center;">Vous avez réussi le quizz !</h2>';
    }
    else {

        echo '<h2 style="text-align: center;">Vous avez obtenu un score de '.$score.'/'.$result->num_rows.'<br><i class="bi bi-emoji-laughing"></i></h2>';
        echo '<h2 style="text-align: center;">Vous avez réussi le quizz !</h2>';
    }?>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <input type="submit" value="Recommencer le quizz" name="reset" id="reset">
</form>
<?php if(isset($_POST['reset'])){
    $_SESSION['score'] = 0;
    $_SESSION['quizz_done'] = 0;
    for ($i=1; $i <= $result->num_rows; $i++) { 
        unset($_SESSION[$i]);
    }
  
} ?>
    <?php
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<hr></div>';

}
  ?>


  <?php
    $conn = bdd_connect();
    $sql = "SELECT * FROM quizz";
    $result = $conn->query($sql);
    ?>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <?php
    while($row = $result->fetch_assoc()) {
        $question = $row['question'];
        $proposition1 = $row['proposition1'];
        $proposition2 = $row['proposition2'];
        $proposition3 = $row['proposition3'];
        $proposition4 = $row['proposition4'];
        $reponse = $row['reponse'];
        $id = $row['id'];

        echo '<div class="w3-row ">';
        echo '<div class="w3-col w3-container" style="width:20%"></div>';
        echo '<div class="w3-col" style="width:60%">'; ?>
        <div class="w3-card-4 w3-margin w3-white" >
        
        <div <?php if(isset($_SESSION[$id]) && $_SESSION[$id] == $reponse) { ?> class="w3-container good_answer" <?php } elseif(isset($_SESSION[$id]) && $_SESSION[$id] != $reponse) { ?> class="w3-container bad_answer" <?php } else {?> class="w3-container" <?php } ?>>
        <?php
        echo '<h2 style="text-align: center;">'.$id.'. '.$question.'</h2>';
        echo '<hr>';
        ?>
        
    <div >
    <?php if($proposition1 != "") { ?> 
    <label class="container" id="proposition1"><code><?php echo $proposition1; ?></code>
    <input type="radio"  name="<?php echo $id; ?>" value="proposition1"
     <?php if($_SESSION["quizz_done"]) {?> disabled <?php } ?> <?php if($_SESSION[$id] == "proposition1"){ ?> checked <?php } ?>>
    <span class="checkmark"></span>
    </label>
    <?php } ?>

    <?php if($proposition2 != ""){ ?>
    <label class="container" id="proposition2"><code><?php echo $proposition2; ?></code>
    <input type="radio" name="<?php echo $id; ?>" value="proposition2"
     <?php if($_SESSION["quizz_done"]) {?> disabled <?php } ?> <?php if($_SESSION[$id] == "proposition2"){ ?> checked <?php } ?> >
    <span class="checkmark"></span>
    </label>
    <?php } ?>

    <?php if($proposition3 != ""){ ?>
    <label class="container" id="proposition3" ><code><?php echo $proposition3; ?></code>
    <input type="radio" name="<?php echo $id; ?>" value="proposition3"
     <?php if($_SESSION["quizz_done"]) {?> disabled <?php } ?> <?php if($_SESSION[$id] == "proposition3"){ ?> checked <?php } ?> >
    <span class="checkmark"></span>
    </label>
    <?php } ?>

    <?php if($proposition4 != ""){ ?>
    <label class="container" id="proposition4" ><code><?php echo $proposition4; ?></code>
    <input type="radio" name="<?php echo $id; ?>" value="proposition4"
     <?php if($_SESSION["quizz_done"]) {?> disabled <?php } ?> <?php if($_SESSION[$id] == "proposition4"){ ?> checked <?php } ?> >
    <span class="checkmark"></span>
    </label>
    <?php } ?>
        
    <?php
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<hr></div>';
    }
  ?>

<div class="w3-row ">
    <div class="w3-col w3-container" style="width:20%"></div>
    <div class="w3-col" style="width:60%">
                <input type="submit" value="Valider votre questionnaire !" name="submit">
    </div>
</div>
  </form>
