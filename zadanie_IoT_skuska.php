<?php
    

    $cislo1 = $operator1 = $cislo2 = $operator2 = $cislo3 = "";

    $cislo1 = $_POST["name"];
    $operator1 = $_POST["surname"];
    $cislo2 = $_POST["tel_num"];
    $operator2 = $_POST["email"];
    $cislo3 = $_POST["gender"];
 
/*
    if(isset($_POST['submit'])){
        $file1 = fopen("output.txt","w") or die("Unable to open file!");
        fwrite($file1, "Meno: ".$_POST['name'].PHP_EOL);
        fwrite($file1, "Priezvisko: ".$_POST['surname'].PHP_EOL);
        fwrite($file1, "Telefonne cislo: ".$_POST['tel_num'].PHP_EOL);
        fwrite($file1, "E-mail: ".$_POST['email'].PHP_EOL);
        fwrite($file1, "Pohlavie: ".$_POST['gender'].PHP_EOL);
        fwrite($file1, "Socialny status: ".$_POST['status'].PHP_EOL);
        fwrite($file1, "Je God Gamer?: ".$_POST['gamer'].PHP_EOL);
        fclose($file1);
    }
*/
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Skuska</title>
</head>

<body>

<header>
   
      
</header>

<article>
      
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <label>Meno:</label>
        <input type="text" name="name">

    </form>
      
      
</article>



</body>

</html>