<!-- PHP -->
<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

?>
<!-- /PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>PHP Hotel</title>
</head>

<body>
  <h1 class="text-center my-5">PHP Hotel</h1>
  <div class="container">
    <div class="row row-cols-5">
      <?php foreach ($hotels as $hotel) : ?>
        <div class="col ">
          <div class="card h-100 text-bg-info">
            <div class="card-body">
              <h5 class="card-title text-center mb-3"><?php echo $hotel['name'] ?></h5>
              <h6 class="card-subtitle mb-3 text-body-secondary text-center"><?php echo $hotel['description'] ?></h6>
              <p class="card-text">Parcheggio: <?php echo $hotel['parking'] ? 'Sì' : 'No' ?></p>
              <p class="card-text">Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km</p>
              <p class="card-text">Voto: <?php echo $hotel['vote'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>



</body>

</html>