<?php
    session_start();
    require '../vendor/connect.php';
    if (empty($_SESSION['user']))
    {
        header("Location: ../index.php");
    }
?>

<?
include_once $_SERVER['DOCUMENT_ROOT'] . './content/watermark_class.php';

    $str;
	$DIR = $_SERVER['DOCUMENT_ROOT'].'/content/img/';

	if (isset($_POST['upload']) && $_POST['upload'] == 'Загрузить') 
	{
		if (isset($_FILES['uploadimg']) && $_FILES['uploadimg']['error'] === UPLOAD_ERR_OK)
		{
			$file_tmp = $_FILES['uploadimg']['tmp_name'];
			$file_name = $_FILES['uploadimg']['name'];
			$wm = new WaterMark();

			$img = imagecreatefrompng($file_tmp);
			$new_img = $wm->addWM($img);
			imagepng($img,$file_tmp);
			imagedestroy($img);

			$file_path = $DIR.$file_name;
            
            $query = "INSERT INTO `images(watermark)`(`img_name`, `img_path`) VALUES ('$file_name','$file_path')";
			if (move_uploaded_file($file_tmp, './img/'.$file_name))
			{
                mysqli_query($connect, $query) or die(mysqli_error($connect));
                $str = "<a href=download.php?path=$file_path> Скачать картинку </a>";
			}
			else $str = "Не удалось загрузить файл";

		}
	}

	function toUnicodeEntities($text, $from="w")
        {   
            $text = convert_cyr_string($text, $from, "i");
            $uni = "";
            for ($i=0, $len=strlen($text); $i<$len; $i++) {
                $char = $text{$i};
                $code = ord($char);
                $uni .= ($code>175)? "&#" . (1040+($code-176)) . ";" : $char;
            }
            return $uni;
        }
    
?>
<?php require '../head.php';?>
<title>WaterMark</title>

<?php require '../svg.php'?>

<?php require "header.php"?>

<div class="content__form">

    <form class="form" action="" method="post" enctype="multipart/form-data">

        <input type="file" name="uploadimg" class ="form__inputfile">
        
        <input type="submit" name="upload" value="Загрузить" class = 'form__button'>
        <?php 
            if (!empty($str))
            {
                echo "<p>$str</p>";
            }
        ?>
    </form>

</div>



<?php require "../footer.php"?>
