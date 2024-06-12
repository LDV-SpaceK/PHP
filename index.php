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
//BT2
$s="";
for($i=1;$i<=$inputValue;$i++){
    $s.=$i;
    echo $s.strrev(substr(($s),0,-1))."<br>";
}
          
        }   
        ?>  
    </body>  
</html>