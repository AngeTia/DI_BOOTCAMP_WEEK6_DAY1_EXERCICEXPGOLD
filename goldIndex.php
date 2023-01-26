<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>EXERCICE XP_GOLD</h1>
        <h2>Exercise 1 : Length Of The String</h2>
        
        <?php 
        # Function to give the length
        function Length($str){
            return strlen($str);
        }
        $helloMessage = "Hello World";
        echo " the length of \" ".$helloMessage." \" is : ".Length($helloMessage);
        ?>

        <h2>Exercise 2 : Count The Words In The String</h2>
        <?php 
        # Function to count variable word
        function countWord($word){
            print_r(str_word_count($word,1));
        }
        echo countWord($helloMessage);
        ?>

        <h2>Exercise 3 : Convert To Uppercase</h2>
        <?php 
        # Function to convert in Uppercase
        function variableUppercase($word){
            return strtoupper($word);
        }
        echo variableUppercase($helloMessage);
        ?>
    </body>
</html>