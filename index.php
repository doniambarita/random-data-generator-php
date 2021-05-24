<?php
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create('id_ID');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Generator</title>
  </head>
  <body>
      <div class="container">
        <h1>Generate Data</h1>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nomor HP</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i=1;$i<=10;$i++): ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $faker->name(); ?></td>
              <td><?= $faker->address(); ?></td>
              <td><?= $faker->phoneNumber(); ?></td>
            </tr>
            <?php endfor; ?>
          </tbody>
        </table>
        <br>
        <div class="alert alert-dark" role="alert">
          Klik <a href="http://localhost:3000/index.php" class="alert-link">Di Sini</a> Untuk Memuat Data Baru.
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>