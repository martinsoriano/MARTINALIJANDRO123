<?php 
    if(isset($_POST['upload'])){
        $maxsize=1033414;
        $format=array('image/jpeg');
    if($_FILES['file_upload']['size']>=$maxsize){
        $error_1='File Size too large';
        echo '<script>alert("'.$error_1.'")</script>';
    }
    elseif($_FILES['file_upload']['size']==0){
        $error_2='Invalid File';
        echo '<script>alert("'.$error_2.'")</script>';
    }
    elseif(!in_array($_FILES['file_upload']['type'],$format)){
        $error_3='Format Not Supported.Only .jpeg files are accepted';
        echo '<script>alert("'.$error_3.'")</script>';
        }

        else{
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
            if(move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)){ 
            echo "The file ". basename($_FILES["file_upload"]["name"]). " has been uploaded.";
            }
            else{
                echo "sorry";
                }
            }
    }
?>