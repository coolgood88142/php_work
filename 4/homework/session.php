<html>
<html>
<head>
<title>Encode Software</title>
</head>
<body>
<div class="main">
    <form action="<?php echo "query.php" ?>" method="post">
        <input type="hidden" name="count" 
        value=<?php 
            if(!empty($_POST['count'])){
                $count = $_POST['count'];
                 echo ++$count;
            }
            ?> /><br / >
        <input type="submit" name="session" value="back" /><br / >
    </form>
    <?php
    
    session_start();
    $count = $_POST['count'];

    $_SESSION['total'] = ++$count;
    echo "點進session.php" .var_dump($_SESSION['total'] . "次");
    session_unset();
    
?>
</div>
</body>
</html>
