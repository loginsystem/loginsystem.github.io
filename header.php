<?php 
    session_start();
    ?>

<html> 
<head> 
<title> header </title>
</head>

<body> 
<header>

<div class="header-login">

<?php 

if (isset($_SESSION['userId'])) {

    echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit"> logout </button>
    </form>';
    
    }
    
    else {
    
        echo '<form action="includes/login.inc.php" method="post">

        <input type="text" name="mailuid" placeholder="Username/email">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="login-submit"> login </button>
        </form>
        
        <a href="signup.php" class="header-signup"> signup </a> ';
    
    }
    
?>



</div>


</header>


