<?php
session_start();
$_SESSION['submit']=="";

session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="adminlogin.php";
</script>
