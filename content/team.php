<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<?php require '../head.php'; ?>
<title>Our Team</title>

<!--Sprite
-------------------> 
<?php require '../svg.php'?>

<!--Header
------------------->
<?php require 'header.php'; ?>
<?php require '../authorize.php'; ?>
 
<!--Team
------------------->
<section id="Team">
    <div class="team">
        <div class="container">
            <div class="team__inner">

                <div class="team__item">
                    <img src="../images/team/team-1.jpg" alt="">
                    <div class="team__name">Ruth Woods</div>
                    <div class="team__prof">Founder, CEO</div>
                    <div class="team__text">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>

                    <div class="social">                  
                        <a class="social__item" href="https://vk.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="vk_icon">
                                      <use xlink:href="#vk"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://web.telegram.org" target="_blank">
                            <svg class="social__icon">
                                  <svg id="tg_icon">
                                      <use xlink:href="#tg"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://www.instagram.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="inst_icon">
                                      <use xlink:href="#inst"></use>
                                  </svg>        
                            </svg>
                        </a>                   
                    </div>

                </div>

                <div class="team__item">
                    <img src="../images/team/team-2.jpg" alt="">
                    <div class="team__name">Timothy Reed</div>
                    <div class="team__prof">Co-Founder, Developer</div>
                    <div class="team__text">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>

                    <div class="social">                  
                        <a class="social__item" href="https://vk.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="vk_icon">
                                      <use xlink:href="#vk"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://web.telegram.org" target="_blank">
                            <svg class="social__icon">
                                  <svg id="tg_icon">
                                      <use xlink:href="#tg"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://www.instagram.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="inst_icon">
                                      <use xlink:href="#inst"></use>
                                  </svg>        
                            </svg>
                        </a>                   
                    </div>

                </div>

                <div class="team__item">
                    <img src="../images/team/team-3.jpg" alt="">
                    <div class="team__name">Victoria Valdez</div>
                    <div class="team__prof">UI Designer</div>
                    <div class="team__text">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>

                    <div class="social">                  
                        <a class="social__item" href="https://vk.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="vk_icon">
                                      <use xlink:href="#vk"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://web.telegram.org" target="_blank">
                            <svg class="social__icon">
                                  <svg id="tg_icon">
                                      <use xlink:href="#tg"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://www.instagram.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="inst_icon">
                                      <use xlink:href="#inst"></use>
                                  </svg>        
                            </svg>
                        </a>                   
                    </div>

                </div>

                <div class="team__item">
                    <img src="../images/team/team-4.jpg" alt="">
                    <div class="team__name">Beverly Little</div>
                    <div class="team__prof">Data Scientist</div>
                    <div class="team__text">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    </div>

                    <div class="social">                  
                        <a class="social__item" href="https://vk.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="vk_icon">
                                      <use xlink:href="#vk"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://web.telegram.org" target="_blank">
                            <svg class="social__icon">
                                  <svg id="tg_icon">
                                      <use xlink:href="#tg"></use>
                                  </svg>        
                            </svg>
                        </a>

                        <a class="social__item" href="https://www.instagram.com" target="_blank">
                            <svg class="social__icon">
                                  <svg id="inst_icon">
                                      <use xlink:href="#inst"></use>
                                  </svg>        
                            </svg>
                        </a>                   
                    </div>

                </div>
            </div><!--/.team__inner-->  
        </div><!--/.container-->
</div><!--/.team-->
</section>

<!--Footer
------------------->
<?php require '../footer.php'; ?>
  
<script src="../app.js"></script>

</body>
</html>