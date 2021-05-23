<?php
session_start();
?>
<header class="header" id="header">
   <div class="container">
       <div class="header__inner">
           <div class="header__logo">
                <a href="#Intro"><img src="images/ActiveBox_Logo.png" alt=""></a>
           </div>
           
           <nav class="nav" id="nav">
               <a class="nav__link" href="#Features">Features</a>
               <a class="nav__link" href="#Works">Works</a>
               <a class="nav__link" href="../content/team.php">Our Team</a>
               <a class="nav__link" href="#Reviews">Reviews</a>
               <a class="nav__link" href="#Download">Download</a>
               <!-- <a class="nav__link" href="../content/weight.php">SizeOf</a>  
               <a class="nav__link" href="../content/watermark.php">WaterMark</a>                             -->
           </nav>
           <div class="log__panel">
            <div class="header__login">
            <!--Log panel
            ------------------->

            <?php 
            if($_POST['exit_btn']) {
                unset($_SESSION['user']);
            }
            ?>

            <?php 
            if ($_SESSION['user']['role'] == 'admin') {
                echo "
                <div class='log__panel-content'>
                        <div class='panel__inner'>
                            <a href='admin/admin_panel_pages.php'>Content manager</a>
                        </div>
                        
                        <div class='panel__inner'>
                            <a href='admin/admin_panel_users.php'>User manager</a>
                        </div>

                        <div class='panel__inner'>
                            <a href='../content/weight.php'>Size of</a>
                        </div>

                        <div class='panel__inner'>
                            <a href='../content/watermark.php'>WaterMark</a>
                        </div>

                        <form action='' method='POST'>
                        <div class='panel__inner' id='exit'>
                            <input type='submit' value='Exit' name='exit_btn'>
                        </div>
                        </form>
                    </div>
                </div>";
            } 
            else if ($_SESSION['user']['role'] == 'user') {
                echo "
                <div class='log__panel-content'>
                        <div class='panel__inner'>
                            <a href='../content/weight.php'>Size of</a>
                        </div>

                        <div class='panel__inner'>
                            <a href='../content/watermark.php'>WaterMark</a>
                        </div>
                        <form action='' method='POST'>
                        <div class='panel__inner' id='exit'>
                            <input type='submit' value='Exit' name='exit_btn'>
                        </div>
                        </form>
                    </div>
                </div>";
            } 
            ?>
            
            <?php 
                $img_src;
                if  (isset($_SESSION['user']['avatar'])) {
                    $img_src = $_SESSION['user']['avatar'];
                }
                else $img_src = 'images/ActiveBox_login.png';
            ?>

               <img src="<?=$img_src?>"alt="Log In" title="Log In" id="header__login">
           </div>
        
           
           <button class="burger" type="button" id="navToggle">
               <span class="burger__item">Menu</span>
           </button>
           
       </div>
   </div>
</header>  