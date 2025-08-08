<!DOCTYPE html>
<html lang="en">
<!-- head-->
    @include("front/head")
<!--fin head -->
  <body>
<!--nabar-->
  <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:#337AB7;">
      <a href="/" class="navbar-brand">CENTRE DE SANTE</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
        </div>
        <div class="navbar-nav">
          <a href="/" class="nav-item nav-link">Accueil</a>
        </div>
      </div>
    </nav>
  </div>
<!--fin navbar-->
<br>


  
<!-- header-->
    @include("front/header")
<!--fin header -->
    <!-- Start your project here-->
    
    <!-- End your project here-->

     <!--Main layout-->
 @include("front/content")
 <!--Main layout-->

<!--Footer-->
@include("front/footer")
<!--Footer-->

<!-- js-->
    @include("front/js")
<!--fin js -->
  </body>
</html>
