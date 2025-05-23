<!-- contact.html – form sayfası  -->
<!DOCTYPE html>
<html lang="tr" ng-app="contactApp" ng-controller="FormCtrl as vm">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>İletişim Formu</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="styles.css">
  <style>.error{color:#dc3545;font-size:.875rem}</style>
</head>
<body class="bg-light">
  <?php include 'navbar.php'; ?>
  <div class="container-sm py-5">
    <h1 class="mb-4 text-center">İletişim Formu</h1>

    <form id="contactForm" novalidate class="bg-white p-4 rounded shadow-sm">
      <div class="row gy-3">
        <!-- Ad Soyad -->
        <div class="col-md-6">
          <label class="form-label">Ad Soyad</label>
          <input name="fullname" type="text" class="form-control" />
          <small class="error"></small>
        </div>
        <!-- E-posta -->
        <div class="col-md-6">
          <label class="form-label">E-posta</label>
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
          <label class="form-label">Doğum Tarihi</label>
          <input name="birth" type="date" class="form-control" />
          <small class="error"></small>
        </div>
        <!-- Şehir -->
        <div class="col-md-6">
          <label class="form-label">Şehir</label>
          <select name="city" class="form-select">
            <option value="">Seçiniz…</option>
            <option>İstanbul</option><option>Ankara</option><option>İzmir</option>
          </select>
          <small class="error"></small>
        </div>
        <!-- Renk -->
        <div class="col-md-3">
          <label class="form-label">Favori Renk</label>
          <input name="color" type="color" class="form-control form-control-color" />
        </div>
        <!-- CV -->
        <div class="col-md-9">
          <label class="form-label">CV Yükle (PDF)</label>
          <input name="cv" type="file" accept=".pdf" class="form-control" />
          <small class="error"></small>
        </div>
        <!-- Cinsiyet -->
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
        <!-- İlgi Alanları -->
        <div class="col-12">
          <label class="form-label d-block">İlgi Alanları</label>
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
        <!-- Gönder Butonları -->
        <div class="mt-4">
          <button type="button" class="btn btn-success me-2" ng-click="vm.validate()">Gönder (AngularJS)</button>
          <button type="button" id="validateJS" class="btn btn-primary">Gönder (JS)</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Kütüphaneler -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular.min.js"></script>

  <!-- Doğrulama dosyaları -->
  <script src="iletisim-angular.js"></script> <!-- AngularJS doğrulama -->
  <script src="iletisim-js.js"></script>      <!-- Vanilla JS doğrulama -->
</body>
</html>