<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
	<form action="stopprocess.php" method="post">
    	<p>
        	是否停權:<input type="radio" value="1" name="stop" checked="checked" />是
        	   	   <input type="radio" value="0" name="stop" />否
       </p>
       <input type="hidden" name="id"  value=<?php echo $_GET['id']; ?>/>
       <input type="submit" />
    </form>
</body>
</html>