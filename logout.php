<?php
session_start();
$_SESSION["is_login"] = true;
session_unset();
session_destroy();
?>

<script type="text/javascript">
    location.replace('index.php');
</script>