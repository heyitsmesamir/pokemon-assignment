i<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">
      <h1 class="text-white">Get your Pokemon!</h1>
      <div class="d-flex justify-content-end">
  <button class="btn btn-primary me-2">
    <i class="fa fa-sign-in"></i> Login
  </button>
  <button class="btn btn-primary">
    <i class="fa fa-user" aria-hidden="true"></i> Register
  </button>
</div>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Species</th>
          <th scope="col">Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Height</th>
          <th scope="col">Action</th>
          <th scope="col">Audio</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Load the JSON file
          $json = file_get_contents('data.json');
          // Decode the JSON data into an array
          $pokemons = json_decode($json, true);

          // Loop through each Pokemon and create a table row
          foreach ($pokemons as $pokemon) {
            echo '<tr>';
            echo '<td><img src="' . $pokemon['image']['sprite'] . '" alt="' . $pokemon['name']['english'] . '"></td>';
            echo '<td>' . strtoupper($pokemon['name']['english']) . '</td>';
            echo '<td>' . $pokemon['species'] . '</td>';
            echo '<td>' . $pokemon['description'] . '</td>';
            echo '<td>' . $pokemon['profile']['weight'] . '</td>';
            echo '<td>' . $pokemon['profile']['height'] . '</td>';
            echo '<td><button class="btn btn-success"><i class="fa fa-archive" aria-hidden="true"></i></i</button>Collect</td>';
            echo '<td><button class="btn btn-success"><i class="fa fa-volume-up" aria-hidden="true"></i>Play</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>
