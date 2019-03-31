<?php
include 'header.html';
?>

<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">Топ афіш</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".graphic">Найпопулярніші</a></li>
                         <!--  <li><a href="#" class="opc-main-bg" data-filter=".template"></a></li> -->
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Обмежена кількість квитків</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">Cкоро</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/1.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/2.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box template graphic col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/3.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/4.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                               <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/5.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="../images/6.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Six</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                            </div>
                        </div>

               </div>
             <h1><a name="ar"></a>Усі заходи</h1>

<?php
   include '../includes/helpers/main_table.php';
?>

</div>

      </div>
   </div>
    
</section>

<?php
   include 'footer.html';
   include 'script.html';
?>