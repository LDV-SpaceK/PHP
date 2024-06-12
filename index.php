<html>
    <head>
        <title>
            Triangle
        </title>
    </head>
    <body>
        <form method="post">
        <input type="number" name="input" min="1" max="9">
        </form>
        <?php
        if(isset($_POST["input"])){
            $inputValue=intval($_POST["input"]);
            //BT1
                for($i=1;$i<=$inputValue;$i++){
                    echo str_repeat($i,$i)."<br>";
                }
          
        }   
        ?>  
    </body>  
</html>