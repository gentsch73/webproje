<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/css/styles.css" />

  <link
  href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
  rel="stylesheet"
  />

  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Ana Sayfa</title>
</head>
<body>

  <?php include 'navbar.php'; ?>

    <main class="container py-5">
    <h1 class="mb-4 text-center">Favori Konu → Sinema</h1>
    <p class="text-center mb-5">TMDB’de şu an <strong>en popüler</strong> filmler</p>

    <!-- Filmlerin geleceği alan -->
    <div id="movieRow" class="row gy-4"></div>
  </main>

  <script src="filmler.js" defer></script>



</body>
</html>
