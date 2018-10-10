
<!DOCTYPE html>
<html lang="en">
<head>
<title>index</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/chart-1.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter|Charmonman|Indie+Flower" rel="stylesheet">
  <body>

    <?php require_once("header.php");?>

    <div class="d-flex justify-content-center mt-5">
      <div class="cont-tit container">
        <h1 class="pt-4 display-4 titulo text-center">Campamento Juvenil Nacional</h1>
        <div class="">
          <div class="col-lg-6 info-campa">
            <p><span class="icon-info"></span><i class="fa fa-calendar"></i>Los días 10 al 12 de enero 2019</p>
            <p><span class="icon-info"></span><i class="fa fa-map-marker pl-1"></i>Nuevo Paraíso Tuxtepec Oaxaca</p>
            <p><span class="icon-info"></span><i class="fa fa-map-marker pl-1"></i>Nuevo Paraíso Tuxtepec Oaxaca</p>
          </div>
        </div>
      </div>
      <div>
        
      </div>
    </div>
    <section class="d-flex">
      <div class="container d-flex justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp.jpg" alt="First slide">
              <!-- <img class="d-block img-fluid hidden-sm-up" src="images/camp.jpg" width="440"  alt="First slide"> -->
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp1.jpg" alt="Second slide">
              <!-- <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/tech/sepia" alt="Second slide"> -->
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp2.jpg" alt="Third slide">
              <!-- <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/arch/grayscale" alt="Third slide"> -->
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp3.jpg" alt="Third slide">
              <!-- <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/arch/grayscale" alt="4 slide"> -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
   
<?php require_once("footer.php");?>
      <script  src="js/jquery-3.2.1.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.buttons.min.js"></script>
      <script src="js/buttons.flash.min.js"></script>
      <script src="js/jszip.min.js"></script>
      <script src="js/pdfmake.min.js"></script>
      <script src="js/vfs_fonts.js"></script>
      <script src="js/buttons.html5.min.js"></script>
      <script src="js/buttons.print.min.js "></script>
      <script type="text/javascript" src="js/chart-1.js"></script>
      <script type="text/javascript" src="js/chart-2.js"></script>
      <script type="text/javascript" src="js/chart-3.js"></script>
      <script type="text/javascript" src="js/chart-4.js"></script>
      <script type="text/javascript" src="js/fabric.min.js"></script>
      <script type="text/javascript" src="js/FileSaver.min.js"></script>
      <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
      <script type="text/javascript" src="js/ctk.js"></script>
      <script type="text/javascript" src="js/sweetalert.min.js"></script>

    <script>
    $(document).ready(function() {
     $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });


     $('.tablas').on('click','button.btn-tabla', function(ev){
      var $this = $(this);
      var concurso = $this.attr('data-tipo');
       $('#titulo-concur').html(concurso);

     });
    } );
    </script>
  </body>

  </html>
