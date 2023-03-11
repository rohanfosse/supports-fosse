<? include "includes/header.html" ?>
    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>Contactez-moi !</b></h1>
            <p>Des questions ou des remarques ? N'hésitez pas à me contacter avec le formulaire ci-dessous.</p>
        </header>

        <?php if (isset($_POST["submit"])) { ?>
            <div class="w3-row ">
            <div class="w3-card-4 w3-margin w3-green w3-center w3-padding-16">
                                <h3>Merci !</h3>
                <p>Votre message a bien été envoyé.</p>
            </div>
            </div>
            <?php } 
        ?>

        <form class="contact-form" action="<?php $_PHP_SELF ?>" method="post">
  <div class="name">
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" />
  </div>  
  <div class="email">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" />
  </div>
  <div class="message">
    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
  </div>
  <div class="submit">
    <input type="submit" name="submit" value="Envoyer" class="button" />
  </div>
</form>
    <hr>

    <?php
try {
        // Try Connect to the DB with new MySqli object - Params {hostname, userid, password, dbname}
        $link = new mysqli("localhost", "rfosse", "m4hLMs5sf7wpuZCq", "rfosse");
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` (`nom`,`email`,`message`) VALUES ('$name','$email','$message')";

    if ($link->query($sql) === TRUE) {
        $send = true;
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
mail("rohan.fosse@labri.fr", "Nouveau message de votre site",$message,"From: $email");

}

    
    mysqli_close($link); // finally, close the connection
?>

<?php include 'includes/footer.html'; ?>
<style>
    
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
* {
  margin: 0;
  padding: 0;
}

input, textarea {
  border: none;
  outline: none;
  resize: none;
  width: 100%;
  -moz-appearance: none;
  -webkit-appearance: none;
}

label:hover {
  cursor: text;
}

.credit {
  bottom: 40px;
  color: #949ea4;
  font-size: 12px;
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
  z-index: 99;
}
.credit a {
  color: #6c7880;
  text-decoration: none;
}
.credit a:hover {
  color: #1a1a1a;
}
.credit a:active {
  color: #343434;
}

.contact-form {
  background: #ffffff;
  height: auto;
  margin: 100px auto;
  max-width: 500px;
  overflow: hidden;
  width: 65%;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: rgba(26, 26, 26, 0.1) 0 1px 3px 0;
  -webkit-box-shadow: rgba(26, 26, 26, 0.1) 0 1px 3px 0;
  box-shadow: rgba(26, 26, 26, 0.1) 0 1px 3px 0;
}
@media (max-width: 500px) {
  .contact-form {
    margin: 0 0 100px;
    width: 100%;
  }
}
.contact-form .email, .contact-form .message, .contact-form .name {
  position: relative;
}
.contact-form .email input:focus, .contact-form .email textarea:focus, .contact-form .message input:focus, .contact-form .message textarea:focus, .contact-form .name input:focus, .contact-form .name textarea:focus {
  background: #f4f5f6;
}
.contact-form .email label, .contact-form .message label, .contact-form .name label {
  color: #cbd0d3;
  left: 23px;
  position: absolute;
  top: 23px;
  -moz-transition: all, 150ms;
  -o-transition: all, 150ms;
  -webkit-transition: all, 150ms;
  transition: all, 150ms;
}
.contact-form .email.typing label, .contact-form .message.typing label, .contact-form .name.typing label {
  color: #3498db;
  font-size: 10px;
  top: 7px;
}
.contact-form .email, .contact-form .name {
  width: calc(50% - 1px);
}
@media (max-width: 500px) {
  .contact-form .email, .contact-form .name {
    width: 100%;
  }
}
.contact-form .email input, .contact-form .name input {
  padding: 23px 0 8px 23px;
}
.contact-form .email {
  border-left: 1px #e6e6e6 solid;
  float: right;
}
@media (max-width: 500px) {
  .contact-form .email {
    border-left: none;
    border-top: 1px #e6e6e6 solid;
  }
}
.contact-form .message {
  border-bottom: 1px #e6e6e6 solid;
  border-top: 1px #e6e6e6 solid;
  clear: both;
}
.contact-form .message textarea {
  height: 200px;
  padding: 23px;
}
.contact-form .name {
  float: left;
}
.contact-form .submit {
  background: #f4f5f6;
  display: block;
  overflow: hidden;
  padding: 23px;
}
.contact-form .submit .button {
  background: #3498db;
  border: 1px #3498db solid;
  color: #ffffff;
  float: right;
  padding: 9px 0;
  width: 100px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}
@media (max-width: 500px) {
  .contact-form .submit .button {
    float: none;
  }
}
.contact-form .submit .button:hover {
  background: #4aa3df;
}
.contact-form .submit .button:active {
  background: #258cd1;
}
.contact-form .submit .button:focus {
  border-color: #b6daf2;
  -moz-box-shadow: #75b9e7 0 0 4px 1px, #75b9e7 0 0 4px 1px inset;
  -webkit-box-shadow: #75b9e7 0 0 4px 1px, #75b9e7 0 0 4px 1px inset;
  box-shadow: #75b9e7 0 0 4px 1px, #75b9e7 0 0 4px 1px inset;
}
.contact-form .submit .user-message {
  float: left;
  padding-top: 22px;
}
@media (max-width: 500px) {
  .contact-form .submit .user-message {
    float: none;
    padding: 0 0 10px;
  }
}

</style>
<script>

$('#name').keyup(function(){
  $('.name').addClass('typing');
  if( $(this).val().length == 0 ) {
      $('.name').removeClass('typing');
  }
});
$('#email').keyup(function(){
  $('.email').addClass('typing');
  if( $(this).val().length == 0 ) {
      $('.email').removeClass('typing');
  }
});
$('#message').keyup(function(){
  $('.message').addClass('typing');
  if( $(this).val().length == 0 ) {
      $('.message').removeClass('typing');
  }
});

</script>