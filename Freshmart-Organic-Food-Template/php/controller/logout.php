    <?php
    session_start();
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        setcookie($_SESSION['login'], $_SESSION['pss']);
        unset($_SESSION['login']);
        unset($_SESSION['pass']);
        
    }

    session_destroy();
   
    header('location:../../../index.php');

    ?>