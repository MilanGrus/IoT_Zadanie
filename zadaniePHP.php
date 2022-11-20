<?php
    $file1 = fopen("output.txt","w") or die("Unable to open file!");



    fclose($file1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS.css" type="text/css">
    <link rel="shortcut icon" href="image-bonfire-icon.png" type="image/icon type">
    <title>IoT Zadanie 2</title>
</head>

<body>

<header>
   
   <h1 class="b">Dotazník</h1>
      
</header>

<div>
      
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Meno:</label>
        <input type="text" id="name" name="name" placeholder="Jakub" autofocus>
        <span class="error">* <?php echo $nameErr;?></span>
        

        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
      
    </form>
      
      
</div>

</body>

</html>
