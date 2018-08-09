<html>
<html>
<head>
<title>Encode Software</title>
</head>
<body>
<div class="menu">
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a> - 
</div>
<div class="main">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="input" size="67"><br / >
<input type="submit" value="New" name="op">
<input type="submit" value="Load" name="op">
<input type="submit" value="Encode" name="op">
<input type="submit" value="Decode" name="op">
<input type="submit" value="Clean" name="op">
<input type="text" value="<?php echo "123"?>">
</form>
</div>
<div class="display">
<?php
    echo 'test';
?>
</div>
</body>
</html>