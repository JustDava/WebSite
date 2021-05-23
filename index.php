<?php
    session_start();
    require_once 'vendor/connect.php';
?>

<!Doctype html>
<html>

<?php require 'head.php'; ?>
<title>ActiveBox</title>
<body>
<!--Sprite
-------------------> 
<?php require 'svg.php'?>
      
<!--Header
------------------->    
<?php require 'header.php'; ?>
<?php require 'authorize.php'; ?>

<!--Intro
------------------->
<section id="Intro">
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Your Favorite One Page
                    Multi Purpose Template</h1>
                    <h2 class="intro__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna
                    vel scelerisque nisl consectetur et. </h2>
                    <a class="btn  btn--red" href="content/about.php">Find Out More</a>     
            </div>          
        </div>
        <div class="intro__formLink">
            <a id="intro__formLink">Subscribe to us!</a>            
        </div>        
            <div class="intro__form" id="introForm">

<?php
if ($_SESSION['valid_message'] == "ok")
{
    echo '<p font-size: 18px; style="color: green;">Subscribe success!</p>';
    echo '<script>document.querySelector("#introForm").classList.add("active")</script>';
}
else if ($_SESSION['email'] == 'error' || $_SESSION['phone'] == 'error')
{
    echo '<script>document.querySelector("#introForm").classList.add("active")</script>';
}
?>

                <form action="validation.php" method="post" class="form" id="form">
                    <h1 class="form__title">Input your contacts</h1>
        
                    <div class="form__group">
                        <input name="email" class="form__input" id="email" value="<?=(($_SESSION['email']) != "error" ? $_SESSION['email'] : 'incorrect email')?>" placeholder=" " <?php if (($_SESSION['email'])=="error") echo 'style="background-color: rgba(255, 0, 0, 0.7);"'; ?> />
                        <label class="form__label">Email</label>

                    </div> 
                    <div class="form__group">
                        <input name="phone" class="form__input" id="phone" value="<?=(($_SESSION['phone']) !="error" ? $_SESSION['phone'] : 'incorrect phone')?>" placeholder=" "
                        <?php if (($_SESSION['phone']) == "error") echo 'style="background-color: rgba(255, 0, 0, 0.7);"'; ?> />
                        <label class="form__label">Phone</label>
                    <div>                                          
                    <button type="submit" name="button" class="form__button" id="formButton">Subscribe</button>
                </form> 
            </div>

    </div>
</section>

<?php
unset($_SESSION['valid_message']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
?>
<!--Features
------------------->
<section id="Features">
    <div class="container">
        <div class="features">

            <?php 
                $result = mysqli_query($connect, "SELECT * FROM `content` WHERE `web_page` = 'index.php' AND `place_insert` = 'features__item'");

                for ($data = []; $features__item = mysqli_fetch_assoc($result); $data[] = $features__item);

                foreach($data as $item)
                {
                    echo $item['text_page'];
                }
            ?>

            <!-- <div class="features__item">
                <img class="features__icon" src="../images/features/feature-1.png" alt="">
                <h4 class="features__title">Easily Customised</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="../images/features/feature-2.png" alt="">
                <h4 class="features__title">Responsive Ready</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="../images/features/feature-3.png" alt="">
                <h4 class="features__title">Modern Design</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>         

            <div class="features__item">
                <img class="features__icon" src="../images/features/feature-4.png" alt="">
                <h4 class="features__title">Ready to Ship</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="../images/features/feature-5.png" alt="">
                <h4 class="features__title">Ready to Ship</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="../images/features/feature-6.png" alt="">
                <h4 class="features__title">Download for Free</h4>
                <div class="features__text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</div>
            </div>        -->
        </div><!--/.features-->
</div><!--/.container-->
</section>

<!--Works
------------------->
<section id="Works">
    <div class="works">
        <div class="works__item">
            <img class="works__photo" src="images/Works/work-1.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-2.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>  

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-3.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-4.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-5.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-6.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-7.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="images/Works/work-8.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Project Name</div>
                <div class="works__text">User Interface Design</div>
            </div>
        </div>
</div><!--/.works-->
</section>


<!--Reviews
------------------->
<section id="Reviews">
    <div class="reviews">
        <div class="container">

            <div id="reviewsSlider">
                <div class="slick__item">
                    <div class="reviews__item">
                        <div class="reviews__photo">
                            <img class="reviews__img" src="./images/reviews/review1.jpg" alt="">
                        </div>
                        <div class="reviews__content">
                            <div class="reviews__text">
                            <q>Lorem ipsum dolor, sit amet consectetur adipisicing.</q>
                            </div>
                            <div class="reviews__author">
                            Susan Sims, Interaction Designer at XYZ
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick__item">
                    <div class="reviews__item">
                        <div class="reviews__photo">
                            <img class="reviews__img" src="./images/reviews/review2.jpg" alt="">
                        </div>
                        <div class="reviews__content">
                            <div class="reviews__text">
                            <q>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, tempora!</q>
                            </div>
                            <div class="reviews__author">
                            Joseph Clark, Senior Developer
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--Download
------------------->
<section id="Download">
   <div class="download">
    <div class="container">
        <h3 class="download__title">Are you Ready To Start? Download Now For Free!</h3>
        <div class="download__text">
        <p>Fusce dapibus, tellus ac cursus commodo</p>
        </div>
        <button type="button" class="btn btn--red btn--long" href="#">Download Here</a>
    </div>
</div> 
</section>
   

<!--Footer
------------------->
<?php require 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="app.js"></script>

</body>    
</html>