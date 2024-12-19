<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    <title>Rock Peper sisor Game</title>
</head>
<body>

    <form method="POST">
        <button type="submit" name="button" value="0">Rock</button>
        <button type="submit" name="button" value="2">paper</button>
        <button type="submit" name="button" value="2">sisor</button>
    </form>

    <?php
  
    if (isset($_POST['button'])) {
        
        $buttonValue = $_POST['button'];
        echo "<p>You clicked Button $buttonValue</p>";
    }
    $comp=rand(-1,3);
    echo"Computer chose $comp";

    if ($comp===$buttonValue{
        echo"It's a tie";

    }elseif($comp=-1 && $buttonValue=1){
        echo"You win";
    }

    ?>

</body>
</html>
