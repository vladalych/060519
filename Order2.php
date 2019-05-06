<!DOCTYPE html>
<html>

<head>
    <title>ROBOTS</title>
 <?php include("head.php"); ?>
</head>

<body>
    <?php include("topbar.php"); ?>

    <div class="row">

        <input class="form-control col-lg-8 offset-lg-2 mt-3 col-10 offset-1" type="search" placeholder="Адрес" aria-label="Имя">

        <div class="card mb-3 col-lg-4 offset-lg-2 my-3 col-7 offset-1">
            <div class="row no-gutters">
                <div class="col-4">
                    <img src="pictures/new-style.jpg" class="card-img" alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">Робот-X</h5>
                        <p class="card-text">Робот, выбранный вами ранее.</p>
                    </div>
                </div>

            </div>
        </div>
          
  </div>

 <div class="col-lg-8 offset-lg-2 mt-3 col-12 offset-0">
<div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQxkOzDX2lCk4Rm9h1LS2_8qwA5GYh5_U&callback=initMap"
    async defer></script>
  </div>

  <?php include("bottombar.php"); ?>


</body>
</html>