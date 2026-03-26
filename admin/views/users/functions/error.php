<?php
function error($error) {
    if(isset($_SESSION["errors"][$error])) {
        $msg = $_SESSION["errors"][$error];
        echo "<p style='color: red'> $msg </p>";
    }
}

?>
