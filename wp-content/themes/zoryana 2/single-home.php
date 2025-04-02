<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>


<!-- Підключаємо файл header.php -->
<?php get_header(); ?>


    
<?php
echo '<br/>';

 get_bloginfo('name'); // Виводимо назву сайту

echo '<br/>';

echo get_bloginfo('description'); // Виводимо опис сайту

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h1 style='margin-bottom: 80px;'><?php echo CFS()->get('heading');?><br></h1>
            <h2 class='h2description' style='margin-bottom: 80px;'><?php echo CFS()->get('description');?><br></h2>
           
       <!-- start modal from gpt -->

<!-- Кнопка для відкриття модального вікна -->
<button type="button" class="btn zoryana_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <span>Замовити послугу</span>
</button>

<!-- Модальне вікно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"  >Замовити послугу</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Вставка шорткоду Contact Form 7 -->
        <?php echo do_shortcode('[contact-form-7 id="e713535" title="ЗАМОВИТИ ПОСЛУГУ"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
      </div>
    </div>
  </div>
</div>




       <!-- end modal code -->
            </div>
        <div class="col-lg-4 col-md-12 text-center">
          <img src=" <?php echo CFS()->get('main_image');?>" alt="">
        </div>    
    </div>  
    <div class="row">
        <div class="col">
            <h2 style='margin-bottom: 30px;'><?php echo CFS()->get('about_me');?><br></h2>
            <p><?php echo CFS()->get('about_description');?><br></p>
        </div>
    </div>
    <div class="row rowfreespace dosyagnennya">
         <h2 style='margin-bottom: 30px;'><?php  echo CFS()->get('achievements_name'); ?><br></h2>
       
            <?php
                foreach(CFS()->get('achievements') as $achievement) {  ?>
                  <div class="col-lg-3 col-md-6">  
                        <p><?php  echo $achievement['achievements_top'];?></p>
                        <span class="bignumber"><?php  echo $achievement['achievements_heading'];?></span> 
                         <p><?php  echo $achievement['achievements_text'];?></p> 
                  </div> 
                   <?php   } 
            ?>
     </div>

<div class="row rowfreespace portfolio">
      <h2 style='margin-bottom: 60px;'><?php echo CFS()->get('portfolio_heading');?><br></h2>
       <?php
                foreach(CFS()->get('portfolios') as $portfolio) {  ?>
                  <div class="col-lg-4 col-md-12 portfolioblock">  
                     <?php  echo $portfolio['portfolio']; ?><br>
                    <p><?php  echo $portfolio['potrfolio_description']; ?></p>
                  </div> 
                   <?php   } 
        ?>
</div>




<div class="row rowfreespace vidguk">
      <h2 style='margin-bottom: 60px;'><?php echo CFS()->get('customer_reviews');?><br></h2>
       <?php
                foreach(CFS()->get('reviews') as $review) {  ?>
                  <div class="col-lg-4 col-md-12">  
                     <?php  echo $review['review']; ?><br>
                     <p><?php  echo $review['review_description']; ?></p>
                  </div> 
                   <?php   } 
        ?>
</div>

  <div class="row rowfreespace">
         <h2 style='margin-bottom: 60px;'><?php  echo CFS()->get('service_packages_name'); ?><br></h2>
       
            <?php
                foreach(CFS()->get('service_packages') as $service_package) {  ?>
                  <div class="col-lg-4 col-md-12">  
                        <h3><?php  echo $service_package['package_name'];?></h3> 
                         <p><?php  echo $service_package['list_of_services'];?></p> 
                  </div> 
                   <?php   } 
            ?>
     </div>

 <div class="row rowfreespace">
        <div class="col">
            <h2 style='margin-bottom: 30px;'><?php echo CFS()->get('cooperation_security_heading');?><br></h2>
            <p><?php echo CFS()->get('cooperation_security_text');?><br></p>
        </div>
    </div>


</div><!-- "container-fluid" -->
<!-- Підключаємо файл footer.php -->
<?php get_footer(); 