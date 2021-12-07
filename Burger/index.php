<!-- debut header-->
<?php require './navbar.php'; ?>
<!-- fin header-->
<div class="container"><!--------------------Container Géneral  ------------------------------->
          
   <div class="row"><!---------------------ROW BOOTSTRAP ---------->
            <div class="col"><!-----------Column bootstrap --------------->

<!-- debut caroussel-->
<?php require './caroussel.php'; ?>
<!-- fin caroussel-->
  
      
    </div> 
  </div> 

  <div class="row row-content">


      <!-----------LISTE CARD-------------->

       <?php 
    require('./data/data.php');
   foreach($items as $item){
     echo '
     <div class="col-12 col-sm-6 col-md-4">
      <!-----------CARD-------------->
      <div class="card mycard">
        <img class="card-img-top photo" src="./img/'. $item['image'] .'" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">'. $item['titre'] .'</h5>
          <p class="card-text contentcard">'. $item['contenu'] .'</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal">
            <span class="fa fa-sign-in"></span>  <a href="./detail.php?titre='. $item['titre'] . ' &image='. $item['image'] . '&contenu='. $item['contenu'] . '&commentaire='. $item['commentaire'] . '&prix='. $item['Prix'] . ' "> Voir </a> </button>
          <!----------------------------------------------->
        </div>
      </div>
      <!----------END CARD ------------------>

  </div>
     
     ';
   }
   ?>

      <!----------END LISTE CARD ------------------>


  
  </div>

</div> 



</div>
    </body>
<!-- debut footer-->
<?php require './footer.php'; ?>
<!-- fin footer-->

      
</html>