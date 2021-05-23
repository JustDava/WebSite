<?php 
    class WaterMark {    

        function addWM($img) {

            $additional_img = imagecreatefrompng('img/controller.png');        
    
            $color = imagecolorallocate ($img, 100, 100, 100);
    
            imagettftext($img, 35, 0, 25, 35, $color, 'D:\STUDENT\3_Kurs\2_semestr\TCS\domains\ActiveBox\content\font\MyriadPro-Regular.ttf', toUnicodeEntities('Do u know what madness is?'));
            imagecopymerge($img, $additional_img, 45, 1000, 0, 0, 150, 150, 100);
       
            imagedestroy($additional_img);
            return $img;
        }
    }
?>