<?php
require "header.php";

?>


<main>

<div class="wrapper-main">
<section class="section-default">

<h1> signup </h1>
<?php 

if(isset($_GET['error'])) {

if ($_GET['error'] == "emptyfields") {

    echo '<p class="signuperror"> full in all fields!</p>'; 

}

else if ($_GET['error'] == "invaliduidmail") {

    echo '<p class="signuperror"> Invalid username and e-mail!</p>'; 
}

else if ($_GET['error'] == "invaliduid") {

    echo '<p class="signuperror"> Invalid username!</p>'; 
}

else if ($_GET['error'] == "invalidmail") {

    echo '<p class="signuperror"> Invalid e-mail!</p>'; 
}

else if ($_GET['error'] == "passwordcheck") {

    echo '<p class="signuperror"> your passwords do not match!</p>'; 
}
 
else if ($_GET['error'] == "usertaken") {

    echo '<p class="signuperror"> username is already taken!</p>'; 
}

}
    else if ($_GET['signup'] == "success") {

        echo '<p class="signupsuccess"> signup successful!</p>'; 
    

}

?>



<form action="includes/signup.inc.php" method="post">

<input type="text" name="uid" placeholder="username">
<input type="text" name="mail" placeholder="Email">
<input type="password" name="pwd" placeholder="password">
<input type="password" name="pwd-repeat" placeholder="repeat password">

<button type="submit" name="signup-submit"> signup </button>

</form>

<a href="reset-password.php"> forgot your password? </a>


</main>


<?php
    require "footer.php";

    ?>



    