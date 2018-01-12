<?php
if($_POST["height"]==NULL||$_POST["weight"]==NULL){
    echo "全部填一填啦幹ㄋ"."<br>";  
}
else{
    echo "height: ".$_POST["height"]."<br>";
    echo "weight: ".$_POST["weight"]."<br>";
    $height=$_POST["height"];
    $weight=$_POST["weight"];
    echo "BMI: ".$weight/($height*$height)."<br>";
}
$subfile=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
if(empty($_FILES["file"]["tmp_name"])){
    echo "沒照片喔這我哪知道你是誰";
}
else if($subfile!='bmp' && $subfile!='jpg' && $subfile!='jpeg' && $subfile!='gif' && $subfile!='tif' && $subfile!='tiff' && $subfile!='png' && $subfile!='wmf' ){
    echo "上傳照片好嗎= =ㄋ";
}
else{
    $filename=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo '<img src="upload/'.$filename.'"/>';
}    
?>