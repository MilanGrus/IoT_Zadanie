<?php
    

    $cislo1 = $operator1 = $cislo2 = $operator2 = $cislo3 = "";

    $cislo1 = $_POST["cislo1"];
    $operator1 = $_POST["operator1"];
    $cislo2 = $_POST["cislo2"];
    $operator2 = $_POST["operator2"];
    $cislo3 = $_POST["cislo3"];
 

    if(isset($_POST['submit'])){
        $file1 = fopen("output.txt","w") or die("Unable to open file!");

        $vysledok1 = 0;
        $vysledok2 = 0;


        if($operator1 == "+")
            $vysledok1 = $cislo1 + $cislo2;
        else if($operator1 == "-")
            $vysledok1 = $cislo1 - $cislo2;
        else if($operator1 == "*")
            $vysledok1 = $cislo1 * $cislo2;
        else if($operator1 == "/")
            $vysledok1 = $cislo1 / $cislo2;

        if($operator2 == "+")
            $vysledok2 = $vysledok1 + $cislo3;
        else if($operator2 == "-")
            $vysledok2 = $vysledok1 - $cislo3;
        else if($operator2 == "*")
            $vysledok2 = $vysledok1 * $cislo3;
        else if($operator2 == "/")
            $vysledok2 = $vysledok1 / $cislo3;

        
        echo "Vysledok = " . $vysledok2;

    }

    
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
        
        <label>Cislo1:</label>
        <input type="text" name="cislo1">

        <label>Operator1:</label>
        <input type="text" name="operator1">

        <label>Cislo2:</label>
        <input type="text" name="cislo2">

        <label>Operator2:</label>
        <input type="text" name="operator2">

        <label>Cislo3:</label>
        <input type="text" name="cislo3">

        <br> <br>
        
        <input type="submit" name="submit" value="Odoslať">  

    </form>
      
      
</article>

</body>

</html>