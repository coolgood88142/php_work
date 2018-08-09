<html>
<html>
<head>
<title>cookie and session</title>
</head>
<body>
<div class="main">
    <form action="<?php echo "cookie.php" ?>" method="post">
        <input type="submit" name="cookie" value="cookie" ><br / >
    </form>
    <form action="<?php echo "session.php" ?>" method="post">
        <input type="hidden" name="count" 
        value=<?php 
            if(!empty($_POST['count'])){
                echo $_POST['count'];
            }else{ 
                echo 1;
            } 
            ?> 
        />
        <br / >
        <input type="submit" name="session" value="session" /><br / >
    </form>
    
</div>
</body>
</html>