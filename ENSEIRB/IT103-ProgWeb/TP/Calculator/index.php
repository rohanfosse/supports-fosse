<?php
include "../../includes/header_article.php";
include "../Part1/includes/connexion.php";
$conn = connect();

?>
<?php
if(isset($_POST['sub']) && !empty($_POST['n1']) )
{
	$txt1=$_POST['n1'];
    if(!empty($_POST['n2'])){
	    $txt2=$_POST['n2'];
    }
    else{
        $txt2=0;
    }
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$res=$txt1+$txt2;
	else if($oprnd=="-")
		$res=$txt1-$txt2;
	else if($oprnd=="x")
		$res=$txt1*$txt2;
	else if($oprnd=="cos")
		$res=cos($txt1);
	else if($oprnd=="sin")
		$res=sin($txt1);
	else if($oprnd=="tan")
		$res=tan($txt1);
	else if($oprnd=="e")
		$res=exp($txt1);
	else if($oprnd=="log")
		$res=log($txt1);
	else if($oprnd=="pi")
		$res=pi($txt1);
	else if($oprnd=="pow")
		$res=pow($txt1,$txt2);
	else if($oprnd=="sqrt")
		$res=sqrt($txt1);
	else if($oprnd=="max")
		$res=max($txt1,$txt2);
	else if($oprnd=="min")
		$res=min($txt1,$txt2);
	echo "";

    $_SESSION['result'] = $res;
	$sql = "INSERT INTO `calculator` (`id`, `number1`, `number2`, `operator`, `result`) VALUES (NULL, '$txt1', '$txt2', '$oprnd', '$res' ) ";
	if ($conn->query($sql) === TRUE) { ?>
    <br>
    <br>
        <div class="alert success">
        <span class="closebtn">&times;</span>  
        <strong>Bravo!</strong> Le calcul a bien été enregistré dans la base de données.
      </div>
    <?php
    } 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}

?>
<html>
    
<head>
<meta charset="UTF-8">
	<style type="text/css">
		.container
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 10%;
 		 	background-color: #00BFFF;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}

#data {
  			width: 100%;
 		 	background-color: #00BFFF;
  			color: white;
            text-align: center;
}

#empty {
  			width: 100%;
 		 	background-color: #f44336;
  			color: white;
            text-align: center;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

#res {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  text-align: center;
}

#res td, #res th {
  border: 1px solid #ddd;
  padding: 8px;
}

#res tr:nth-child(even){background-color: #CDCDCD;}

#res tr:hover {background-color: #ddd;}

#res th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #00BFFF;
  color: white;
}

	</style>
</head>

	<div class="container">
    <p style="text-align:center;">
<a href="../TP2.php">Revenir au sujet du TP</a>
</p>
<form method="post" action="">
<h1>Calculatrice</h1>
<p style="text-align:center;"><b>Entrez les deux nombres puis choissisez l'opérande. <br>Entrez juste le premier nombre pour cos, sin.</b></p>
<br>
Premier nombre <input name="n1" value="">
<br>
Second nombre <input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<input type="submit" name="sub" value="cos">
<input type="submit" name="sub" value="sin">
<input type="submit" name="sub" value="tan">
<input type="submit" name="sub" value="e">
<br>
<input type="submit" name="sub" value="log">
<input type="submit" name="sub" value="pi">
<input type="submit" name="sub" value="pow">
<input type="submit" name="sub" value="sqrt">
<br>
<input type="submit" name="sub" value="max">
<input type="submit" name="sub" value="min">

<br>Résultat  <input type='text' value="<?php if(isset($res)) {echo $res;} ?>" disabled ><br>
</form>
</div>
<div class="button" action="#id" >
<form method="post">
	<input  type="submit" id="data" name="ans" value="Historique des calculs">
</form>
</div>

</body>
</html>
<?php
if(isset($_POST['ans']))
{
$sql = "SELECT * FROM calculator";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
        echo "<table id='res' style='margin-left: auto;margin-right: auto;'>";
            echo "<tr>";
                echo "<th>Premier Nombre</th>";
                echo "<th>Deuxième Nombre</th>";
                echo "<th>Opérateur</th>";
                echo "<th>Résultat</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['number1'] . "</td>";
                echo "<td>" . $row['number2'] . "</td>";
                echo "<td>" . $row['operator'] . "</td>";
                echo "<td>" . $row['result'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <div class="button" >
<form method="post">
	<input  type="submit" id="empty" name="empty" value="Vider l'historique">
</form>
</div>
<?php 
        mysqli_free_result($result);
    } else{
        echo "L'histoire est vide pour le moment";
    }
}

// DROP TABLE
if(isset($_POST['empty']))
{
$sql = "TRUNCATE TABLE calculator";
if ($conn->query($sql) === TRUE) { ?>
        <div class="alert success">
        <span class="closebtn">&times;</span>  
        <strong>Bravo!</strong> L'historique a bien été vidé.
      </div>
    <?php
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>