<?php get_header(); ?>
<div class="container">
    <div class="row">
         <div class="col">
            <form method="get" action="#" id="form">
                <h1>ЗАМОВИТИ ПОСЛУГУ</h1>
                <div class="mb-3 polevvodu">
                   <input type="text" name="Imya" class="form-control _req" placeholder="Імʼя*" aria-label="Імʼя">
               </div>
               <div class="mb-3 polevvodu">
                   <input type="tel" name="telef" id="typePhone" class="form-control" placeholder="Номер телефону" />  
               </div>
               <div class="mb-3 polevvodu">
                   <input type="email" name="poshta" class="form-control _req _email"  placeholder="E-mail*" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               <div class="form-floating">
                    <textarea name="komentar" class="form-control polevvodu" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 265px"></textarea>
                    <label for="floatingTextarea2">Коментар</label>
                 </div>
               <button type="submit" class="btn btn-dark nadislaty"><span>Надіслати</span></button>
            </form>
        </div>
     </div>
</div>

            <!--end forma-->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <?php get_footer(); ?>





           