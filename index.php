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

    // var_dump($hotels);

    // hotel filtrati con select
    $filtered_hotels = array_filter($hotels, function ($var) {
      return $var['parking'] === true;
    });
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Table of hotels with search functionality">
    <!-- Title -->
    <title>Hotels site</title>
    <!-- Links -->
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font awesome cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet"></script>
    <link href="./style/style.css" rel="stylesheet">
  </head>
  <body>

    <main>
      <div class="container-md">
        <h1 class="py-4">HOTELS WEBPAGE</h1>

        <!-- Form -->
        <form class="py-3" action="">
          <label for="h-carpar" class="">Parking presence</label>
          <select class="form-select form-select-sm w-25 pe-auto" name="h-carpar" id="">
            <option selected disabled value="no-select"></option>
            <option value="true">present</option>
          </select>
        </form>

        <!-- Section including hotels list -->
        <section class="hotels-table">
          <!-- Tabella      -->
          <table class="table table-striped">
            <thead class="table-secondary">
              <tr class="text-center">
                <th class="hotel-index" scope="col">#</th>
                <th class="hotel-name" scope="col">Name</th>
                <th class="hotel-description" scope="col">Description</th>
                <th class="hotel-parking" scope="col-1">Parking presence</th>
                <th class="hotel-vote" scope="col-1">Vote</th>
                <th class="hotel-disto-center" scope="col-2">Distance to center</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <?php foreach ($hotels as $hotelNum => $hotel) { ?>
              <tr class="text-center">
                <th scope="row"><?= $hotelNum + 1; ?></th>
                <td><?= $hotel['name']; ?></td>
                <td class="text-start"><?= $hotel['description']; ?></td>
                <td><?= $hotel['parking'] ? '<i class="fa-regular fa-circle-check"></i>' : '' ?></td>
                <td><?= $hotel['vote']; ?></td>
                <td><?= $hotel['distance_to_center']; ?></td>
              </tr>
              <?php } ; ?>
            </tbody>
          </table>    
        </section>
      </div>
    </main>
  </body>
</html>
