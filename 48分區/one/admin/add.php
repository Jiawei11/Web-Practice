<link href="jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<?php
	session_start();
	include_once('../link.php');
	if($_SESSION['power'] != "管理者")
	{
		echo "<script>alert('1');</script>";
		header("location:adlogin.html");
}?>
<form action="adding.php" method="post">
    <p>Account:<br>
    <input type="text" name="user" requried/>
    <br>
            Password:<br>
            <input type="password"  name="pwd" requried/>
            <br />
      Power:<br />
      <select name="power">
          <option>一般使用者</option>
          <option>管理者</option>
      </select>
      <P>
        <input type="submit" class="ui-button">
        <input type="reset" class="ui-button">
</form>