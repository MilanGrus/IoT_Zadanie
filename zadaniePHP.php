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

<article>
      
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Meno:</label>
        <input type="text" id="name" placeholder="Jakub" autofocus>
        <span class="error">* <?php echo $nameErr;?></span>
        

        <label for="name">Priezvisko:</label>
        <input type="text" id="surname" placeholder="Lovec" autofocus>
        <span class="error">* <?php echo $nameErr;?></span>

        <br> <br>

        <label for="name">Mobil:</label>
        <input type="text" id="tel_num" placeholder="0988 888 882" autofocus>
        <span class="error">* <?php echo $nameErr;?></span>
      
        <br> <br>

        <label for="name">Mail:</label>
        <input type="text" id="email" placeholder="jakublovec@gmail.com" autofocus>
        <span class="error">* <?php echo $nameErr;?></span>
    </form>
      
      
</article>

</body>

</html>
