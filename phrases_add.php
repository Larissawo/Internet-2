<?php
include('config.php');
if (isset($_GET['btn-save']))
$link = mysqli_connect("localhost", "root", "", "i218s_phrase_live");
 $text = "I say YES to! ". $_GET["Phrase"]."\n";
 $text = urldecode($text);
 $fname = $_GET['fname'];
 $sql = "INSERT INTO phrases (phrase,recipient) 
 VALUES ('$text','$fname')";
if (mysqli_query($link,$sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}















?>
<!DOCTYPE html>
<html>
  <head>

    <title>Add phrase</title>
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
      .container div {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
          <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3" name="Phrase_01">I say YES! to ...</h1>

          </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    

<form method="get">
   
<select class="costum-select" name="Phrase">
    <option selected>Open this select menue!</option>
    <option value="ChickenMcNuggets" \n> ChickenMcnuggets</option>
    <option value="Hdm" \n>Hdm</option>
    <option value="Ketchup">Ketchup</option>
    </select>
     <input type="text" name="fname"></input>
<button type="submit" class="btn-default" value="1" name="btn-save">Say YES</button>
      </form>

  </body>
</html>