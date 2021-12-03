<?php
	// this is for the functionality of the game	

session_start();

// dice variables
    $_SESSION["dieOne"] = 0;
	$_SESSION["dieTwo"] = 0;
	$_SESSION["dieThree"] = 0;
	$_SESSION["dieFour"] = 0;
	$_SESSION["dieFive"] = 0;
	$_SESSION["dieSix"] = 0;
	
	
// Page Setup
	
function page() {

    echo <<< HERE
        <input type = "submit" name = "button" value = "Roll All">
        <br>
        <input type = "submit" name = "button" value = "Roll Die One">
        <input type = "submit" name = "button" value = "Roll Die Two">
        <input type = "submit" name = "button" value = "Roll Die Three">
        <input type = "submit" name = "button" value = "Roll Die Four">
        <input type = "submit" name = "button" value = "Roll Die Five">
        <input type = "submit" name = "button" value = "Roll Die Six">
    
HERE;

}
	
// Roll Die Functions
	
function rollAll(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix) {

    $dieOne = rand(1,6);
    $dieTwo = rand(1,6);
    $dieThree = rand(1,6);
    $dieFour = rand(1,6);
    $dieFive = rand(1,6);
    $dieSix = rand(1,6);
    
}

function rolldieOne(&$dieOne){
    $dieOne = rand(1,6);
}

function rolldieTwo(&$dieTwo){
    $dieTwo = rand(1,6);
}

function rolldieThree(&$dieThree){
    $dieThree = rand(1,6);
}

function rolldieFour(&$dieFour){
    $dieFour = rand(1,6);
}

function rolldieFive(&$dieFive){
    $dieFive = rand(1,6);
}

function rolldieSix(&$dieSix){
    $dieSix = rand(1,6);
}
	
function outputDie(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix){

    echo "<br>Die 1: $dieOne <br> Die 2: $dieTwo <br> Die 3: $dieThree <br> Die 4: $dieFour <br> Die 5: $dieFive <br> Die 6: $dieSix";

}
	
?>

<html>
    <header>
        <meta charset ="utf-8">
        <title>Farkle</title>
        <link rel="stylesheet" href = farkle.css">
    </header>
    <body>
        
        
    
        <form action = "farkle.php" method = "POST">
            <?php
                extract($_REQUEST);
                    
                if ($button == "Roll All")
                {
                    rollAll($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die One"){
                
                    rolldieOne($dieOne);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Two"){
                
                    rolldieTwo($dieTwo);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Three"){
                
                    rolldieThree($dieThree);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Four"){
                
                    rolldieFour($dieFour);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Five"){
                
                    rolldieFive($dieFive);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Six"){
                
                    rolldieSix($dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                }
                
                page();
                              
                //echo "<HR>";
                //highlight_file("index.php");
            ?>
        </form>
    
    </body>
</html>
