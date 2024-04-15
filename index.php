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

$option_parking = $_GET['optionParking'];
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

    <!-- Form per filtrare hotel da mostrare -->
    <form action="index.php" method="GET">
      <label class="form-label" for="optionParking">Filtra per disponibilità parcheggio:</label>
      <select class="form-select mb-4" name="optionParking" id="optionParking">
        <option value="all">Tutti</option>
        <option value="true">Con parcheggio</option>
        <option value="false">Senza parcheggio</option>
      </select>
      <button type="submit" class="btn btn-primary mb-4">Ricerca</button>
    </form>
    <!-- /Form -->

    <div class="row row-cols-5">
      <?php foreach ($hotels as $hotel) : ?>
        <!-- Condizione sulla card: a) mostrare se il filtro del parcheggio non è stato impostato, b) se è stato impostato ed è pari ad 'all', oppure c) se è stato impostato ed il valore è uguale a quello nella card specifica -->
        <?php if (!isset($option_parking) || $option_parking === 'all' || (var_export($hotel['parking'], true) == $option_parking)) : ?>
          <div class="col">
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
        <?php endif ?>
      <?php endforeach ?>
    </div>
  </div>



</body>

</html>