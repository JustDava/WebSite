<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<?php require '../head.php'; ?>
<title>About us</title>
    
<!--Sprite
-------------------> 
<?php require '../svg.php'?>
    
<!--Header
------------------->    
<?php require 'header.php'; ?>
<?php require '../authorize.php'; ?>  

<div class="info">
    <div class="container">  
        <div class="info__inner">
            <div class="info__title">
                <h3>About us</h3>
            </div>
            <div class="info__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, non sequi nulla nisi rerum eos, modi quasi. Fugiat cupiditate accusantium obcaecati repellat officiis nihil consectetur dolores qui ut tenetur, veniam harum quis alias quam id mollitia architecto. Eligendi, distinctio, possimus magni, velit voluptas corporis eos iste placeat totam sequi vitae at alias dolore architecto expedita ratione sapiente vel quas voluptatem harum dolor esse, quos. Doloribus quibusdam ab porro iure optio dolores officia maxime quis velit magnam accusamus excepturi dolorem neque magni atque, praesentium veritatis assumenda. Natus, aut, nulla dolor, corporis eligendi temporibus sequi ducimus quasi iste blanditiis fugit dolorum. Tempora ad sequi facere inventore quas sapiente minus sunt libero at mollitia quis debitis perspiciatis, ipsam earum. Ad ipsa molestias eos! Ab eius ex quia optio, perferendis, repellendus id rem sint itaque quos voluptatem modi magni dolorum totam voluptates commodi soluta ducimus suscipit in possimus molestiae quisquam impedit. Consectetur dolores ut, repellendus architecto autem temporibus quos quasi expedita, odit quibusdam explicabo laudantium ipsum dolorem porro voluptate voluptas voluptates harum nostrum. Aperiam quod fugiat iste, eaque alias maxime cum delectus mollitia dolores inventore expedita assumenda totam, enim ratione excepturi consectetur molestiae, voluptatum nesciunt doloribus sit modi placeat porro nam accusantium. Possimus eveniet placeat esse, totam fugit repudiandae aut assumenda rem dolor dolores, eos vero veritatis illo quidem a ducimus, et, ipsa nam! Explicabo nesciunt harum sint cum eos at officia maxime assumenda vero sit quia ducimus, officiis ratione culpa voluptas ipsam ullam obcaecati itaque, excepturi asperiores cupiditate? Commodi molestias, repudiandae deserunt quidem.</p>
            </div>

            <table>
                <caption id="tableTitle">Our Works</caption>                
                    <tr>
                        <td><img class="table__photo" src="../images/about/templ-1.jpg" alt=""></td>
                        <td><img class="table__photo" src="../images/about/templ-2.jpg" alt=""></td>
                        <td><img class="table__photo" src="../images/about/templ-3.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>Creative Design Agency template</td>
                        <td>K!sbag: Free minimal portfolio template</td>
                        <td>MI Talent: A website template for agencies</td>
                    </tr>
                
            </table>            

            <div class="templs">
                <div class="templs__item">
                   <img class="templs__photo" src="../images/about/templ-1.jpg" alt="">
                   <div class="templs__subtext">Creative Design Agency template</div>
                </div>
               
                <div class="templs__item">
                   <img class="templs__photo" src="../images/about/templ-2.jpg" alt="">
                   <div class="templs__subtext">K!sbag: Free minimal portfolio template</div>
                </div>
                
                <div class="templs__item">
                   <img class="templs__photo" src="../images/about/templ-3.jpg" alt="">
                   <div class="templs__subtext">MI Talent: A website template for agencies</div>
                </div>                
            </div>                
        </div>     
    </div>
</div>  

<!--Footer
------------------->
<?php require '../footer.php'; ?>

<script src="../app.js"></script>

</body>
</html>