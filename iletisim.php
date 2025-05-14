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

    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>

  <!-- KENDİ Doğrulama Dosyan -->
  <script src="iletisim.js"></script>

  <title>Ana Sayfa</title>
</head>
<body>

  <?php include 'navbar.php'; ?>
<div class="p-4">
    <h1 class="mb-4">İletişim Formu</h1>

  <!-- ==== FORM ==== -->
  <form id="contactForm" novalidate>
    <div class="row gy-3"><!-- Bootstrap satır -->

      <!-- Ad Soyad -->
      <div class="col-md-6">
        <label class="form-label">Ad Soyad</label>
        <input name="fullname" type="text" class="form-control" />
        <small class="error"></small>
      </div>

      <!-- E‑posta -->
      <div class="col-md-6">
        <label class="form-label">E‑posta</label>
        <input name="email" type="text" class="form-control" />
        <small class="error"></small>
      </div>

      <!-- Telefon -->
      <div class="col-md-6">
        <label class="form-label">Telefon</label>
        <input name="phone" type="text" class="form-control" />
        <small class="error"></small>
      </div>

      <!-- Doğum Tarihi -->
      <div class="col-md-6">
        <label class="form-label">Doğum Tarihi</label>
        <input name="birth" type="date" class="form-control" />
        <small class="error"></small>
      </div>

      <!-- Şehir (select) -->
      <div class="col-md-6">
        <label class="form-label">Şehir</label>
        <select name="city" class="form-select">
          <option value="">Seçiniz…</option>
          <option>İstanbul</option><option>Ankara</option><option>İzmir</option>
        </select>
        <small class="error"></small>
      </div>

      <!-- Renk (color) -->
      <div class="col-md-3">
        <label class="form-label">Favori Renk</label>
        <input name="color" type="color" class="form-control form-control-color" />
      </div>

      <!-- CV (file) -->
      <div class="col-md-9">
        <label class="form-label">CV Yükle (PDF)</label>
        <input name="cv" type="file" accept=".pdf" class="form-control" />
        <small class="error"></small>
      </div>

      <!-- Cinsiyet (radio) -->
      <div class="col-12">
        <label class="form-label d-block">Cinsiyet</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Kadın" />
          <label class="form-check-label">Kadın</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Erkek" />
          <label class="form-check-label">Erkek</label>
        </div>
        <small class="error d-block"></small>
      </div>

      <!-- İlgi Alanları (checkbox) -->
      <div class="col-12">
        <label class="form-label d-block">İlgi Alanları</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="hobby" value="Spor" />
          <label class="form-check-label">Spor</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="hobby" value="Müzik" />
          <label class="form-check-label">Müzik</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="hobby" value="Kitap" />
          <label class="form-check-label">Kitap</label>
        </div>
        <small class="error d-block"></small>
      </div>

      <!-- Mesaj -->
      <div class="col-12">
        <label class="form-label">Mesaj</label>
        <textarea name="message" rows="4" class="form-control"></textarea>
        <small class="error"></small>
      </div>

    <div class="mt-3">
      <button id="btnVue" type="button" class="btn btn-success">Gönder (Vue)</button>
    </div>

    </div>
  </form>
</div>

</body>
</html>
