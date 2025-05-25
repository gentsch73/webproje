<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Giriş Yap</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
  <form id="loginForm" action="login_process.php" method="post" class="p-4 border rounded" style="min-width:300px;">
    <h2 class="mb-3 text-center">Üye Girişi</h2>

    <div class="mb-3">
      <label for="username" class="form-label">Kullanıcı Adı (e-posta)</label>
      <input type="email" id="username" name="username"
             class="form-control" placeholder="b1812100001@sakarya.edu.tr" required>
      <div class="invalid-feedback">Geçerli bir e-posta giriniz.</div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Şifre</label>
      <input type="password" id="password" name="password"
             class="form-control" placeholder="Öğrenci Numaranız" required>
      <div class="invalid-feedback">Şifre boş bırakılamaz.</div>
    </div>

    <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
  </form>

  <script>
    (() => {
      const form = document.getElementById('loginForm');
      form.addEventListener('submit', e => {
        if (!form.checkValidity()) {
          e.preventDefault();
          e.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    })();
  </script>
</body>
</html>
