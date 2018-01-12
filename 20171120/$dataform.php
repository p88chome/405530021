<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$dataform</title>
</head>

<body>
        <?php
        $data=array(
            array("Name","Stock","Sold"),
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)  
        );
        $a;
        $b;
        echo "<table border='1'>";
        for($a=0; $a<5; $a++) {
                echo "<tr>";
            for($b=0; $b<3; $b++) {
                if($a==0){
                  echo "<th>". $data[$a][$b]."</th>";
                }
                else{
                  echo "<td>". $data[$a][$b]."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table><br>";

        $st=0;
        echo "<table border='1'>";
        foreach ($data as $key) {
            echo "<tr>";
            if($st==0){
                foreach ($key as $value) {
                  echo "<th>". $value."</th>";
                 }
            }
            else{
                foreach ($key as $value) {
                echo "<td>". $value."</td>";
                }
            }
            $st=1;
            echo "</tr>";
        }
        echo "</table><br>";

        echo "<table border='1'>";
        function table($str){
        $i= join("</td><td>",$str);
        $j = "<tr><td>".$i."</td></tr>";
           return $j;
        }
        $result=[];
        $result=array_map("table",$data);
        for($b=0;$b<5;$b++){
            echo $result[$b];
        }
        echo "</table><br>";
        ?>
</body>

</html>