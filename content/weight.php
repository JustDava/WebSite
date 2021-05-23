<?php
    session_start();
    if (empty($_SESSION['user']))
    {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
<?php require '../head.php';?>
<title>Sizeof</title>
<body>

<?php
$str;
function getFilesSize($path)
{
    $fileSize = 0;
    if(file_exists($path))
    {
        $dir = scandir($path);
        foreach($dir as $file)
        {
            if (($file!='.') && ($file!='..'))
            {
                if(is_dir($path . '/' . $file))
                    $fileSize += getFilesSize($path. '/' .$file);
                else
                    $fileSize += filesize($path . '/' . $file);
            }
        }
        return $fileSize;
    }
}
if (isset($_GET['send']))
{
    if(!empty($_GET['dir']))
    {
        $filename = $_SERVER['DOCUMENT_ROOT'] .'/'. $_GET['dir'];
        if(is_file($filename))
        {       
            $str = "Файл. Размер: ".filesize($filename) ." байт";
        }            
        else if(is_dir($filename))
            $str = "Каталог. Размер: ".getFilesSize($filename) ." байт";
    }
    else
        $str = "Введите название файла";
}
?>

<?php require '../svg.php'?>

<?php require "header.php"?>
<div class="content__form">
<form class='form' action="" method='get'>
    <table>
        <tr>
            <td colspan='2'>
                <label for='dir'>Введите имя и путь до файла:</label>
                <input type='text' name='dir' />
            </td>
            <td colspan='2'>

            </td>
        </tr>
        <tr>
            <td colspan='4'>
                <button class='form__button' name='send' type='submit'>Определить размер файла</button>
            </td>
        </tr>
        <tr>
            <td colspan='6'>
            <label><?php print($str)?></label>
            </td>
        </tr>
    </table>
</form>
</div>


<?php require '../footer.php'; ?>

</body>
</html>