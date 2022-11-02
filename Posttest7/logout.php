<?php
    ob_start();
    session_start();
    ob_end_clean();
    session_destroy();
    header("Location: index.php")
?>