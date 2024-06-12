<html>
    <head>
    </head>
    <body>
        <form method="post">
        Nhập chuỗi:
        <input type="text" name="input">
        <button type="submit">Sắp xếp</button>
        </form>
        <?php
            $inputString=($_POST["input"]);
            //BT3
            $character=[];
            $odd=[];
            $even=[];
            for($i=0;$i<strlen($inputString);$i++){
                if(is_numeric($inputString[$i])){
                    if($inputString[$i]%2==0){
                        array_push($even,$inputString[$i]);
                    }
                    else{
                        array_push($odd,$inputString[$i]);
                    }
                }
                else{
                    array_push($character,$inputString[$i]);
                }
            }
            sort($odd);
            sort($even);
            sort($character);
            echo "Chuỗi đã sắp xếp: ".implode($even).implode($odd).implode($character);
        ?>  
    </body>  
</html>
