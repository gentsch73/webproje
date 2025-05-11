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

  <header>
    <h1>Berkay Genç</h1>
    <p>Bilgisayar Mühendisliği Öğrencisi</p>

    <!-- Site içi basit gezinme (istersen navbar yerine üstte bırak) -->
  <div class="cv-menu">
    <nav aria-label="Sayfa içi menü">
      <ul class="list-unstyled">
        <li><a href="#education">Eğitim</a></li>
        <li><a href="#experience">Deneyim</a></li>
        <li><a href="#skills">Yetenekler</a></li>
        <li><a href="#contact">İletişim</a></li>
      </ul>
    </nav>
    </div>
  </header>

 <main class="ozgecmis text-center">

    <!-- ======== 1. EĞİTİM (semantic section + article + time) ======== -->
    <section id="education" aria-labelledby="title-edu">
      <h2 id="title-edu">Eğitim</h2>

      <!-- Lisans -->
      <article>
        <h3>Bilgisayar Mühendisliği (BSc)</h3>
        <p><strong>Karadeniz Teknik Üniversitesi</strong></p>
        <time datetime="2023-09">Eylül 2023</time> –
        <time datetime="2027-06">Haziran 2027</time>
        <p>GPA : 3.45/4 &nbsp;|&nbsp; İlgili dersler: Veri Yapıları, Gömülü Sistemler</p>
      </article>

      <!-- Lise -->
      <article>
        <h3>Fen Lisesi</h3>
        <p><strong>Samsun Fen Lisesi</strong></p>
        <time datetime="2019-09">2019</time> 
        <time datetime="2023-06">2023</time>
        <p> Mezuniyet Derecesi : 90/100</p>
      </article>
    </section>

    <!-- ======== 2. DENEYİM ======== -->
    <section id="experience" aria-labelledby="title-exp">
      <h2 id="title-exp">Deneyim</h2>

      <article>
        <h3>Yazılım Stajyeri &mdash; <span>XYZ Teknoloji</span></h3>
        <ul class="list-unstyled">
          <li>ROS 2 tabanlı otonom drone yazılımı geliştirdim.</li>
          <li>C++ kod incelemesi ve birim testleri yazdım.</li>
        </ul>
      </article>
    </section>

    <!-- ======== 3. YETENEKLER ======== -->
    <section id="skills" aria-labelledby="title-skill">
      <h2 id="title-skill">Yetenekler</h2>
      <ul class="list-unstyled">
        <li>C, C++, Python</li>
        <li>ROS 2, OpenCV, MAVROS</li>
        <li>OpenGL, SDL</li>
      </ul>
    </section>

    <!-- ======== 4. İLETİŞİM (aside + address) ======== -->
    <aside id="contact">
      <h2>İletişim</h2>
      <address>
        E‑posta : <a href="mailto:berkay@example.com">berkay@example.com</a><br />
        Telefon : +90 555 123 45 67<br />
        Konum  : Trabzon / Türkiye
      </address>
    </aside>

  </main>

  <footer>
    <!-- site alt bilgisi -->
  </footer>


</body>
</html>
