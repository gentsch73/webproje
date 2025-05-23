<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


  <link
  href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
  rel="stylesheet"
  />

  <link rel="stylesheet" href="styles.css">

  <title>Ana Sayfa</title>
</head>
<body>
    <aside class="cv-menu">
  <div>
    <nav aria-label="Sayfa içi menü">
      <ul class="list-unstyled">
        <li><a href="#education">Eğitim</a></li>
        <li><a href="#experience">Deneyim</a></li>
        <li><a href="#skills">Yetenekler</a></li>
        <li><a href="#activities">Etkinlikler</a></li>
        <li><a href="#contact">İletişim</a></li>
      </ul>
    </nav>
    </div>
</aside>
  <?php include 'navbar.php'; ?>

  <header class="container-sm text-center">
    <h1>Berkay Genç</h1>
    <p>Bilgisayar Mühendisliği Öğrencisi</p>

  </header>

 <main class="ozgecmis text-center">

<!-- ======== 1. EĞİTİM ======== -->
<section id="education" class="container-sm" aria-labelledby="title-edu">
  <h2 id="title-edu">Eğitim</h2>
  <article>
    <h3>Bilgisayar Mühendisliği (BSc)</h3>
    <p><strong>Sakarya Üniversitesi</strong></p>
    <p>2. Dönem</p>
    <p>GPA: 3.60/4</p>
    <p>Üniversite eğitimimde algoritmalar, veri yapıları ve gömülü sistemler üzerine yoğunlaşarak özellikle ROS2, OpenCV ve dronelar için görüntü işleme teknolojileri üzerine çeşitli akademik ve kişisel projeler geliştirdim. Bu projelerde hem teorik bilgimi pekiştirdim hem de pratik deneyimler kazanarak gerçek dünya problemlerine çözümler üretme fırsatı buldum.</p>
  </article>
  <article>
    <p><strong>Maltepe Kültür Lisesi</strong></p>
    <p>2014 - 2018</p>
    <p>Lise yıllarımda matematik ve fen bilimlerine olan ilgim beni bilgisayar mühendisliği alanına yönlendirdi. Ayrıca robotik kulübünde aktif olarak görev aldım, çeşitli robotik yarışmalarına katılarak takım çalışması, proje yönetimi ve mühendislik prensipleri konusunda önemli deneyimler edindim.</p>
  </article>
</section>

<!-- ======== 2. DENEYİM ======== -->
<section id="experience" class="container-sm" aria-labelledby="title-exp">
  <h2 id="title-exp">Deneyim</h2>
  <article>
    <h3>Yazılım Geliştirici &mdash; <span>Saerotech</span></h3>
    <ul class="list-unstyled">
      <li>ROS 2 tabanlı otonom drone sistemleri üzerine çalışıyorum. Drone'un çevreyi algılama, navigasyon ve otonom karar verme yeteneğini geliştiren yazılımlar üzerinde görev alıyorum.</li>
      <li>C++ ve OpenCV kullanarak gerçek zamanlı görüntü işleme algoritmaları geliştiriyorum. Nesne tespiti, sınıflandırma ve takip algoritmaları üzerine detaylı çalışmalar yürütüyorum.</li>
      <li>MAVROS ve ROS2 entegrasyonu ile drone'un uçuş kontrol sistemlerini optimize ediyor, uçuş sırasında alınan verileri analiz ederek sistem performansını artıracak güncellemeler yapıyorum.</li>
    </ul>
  </article>
</section>

<!-- ======== 3. YETENEKLER ======== -->
<section id="skills" class="container-sm" aria-labelledby="title-skill">
  <h2 id="title-skill">Yetenekler</h2>
  <ul class="list-unstyled">
    <li>C, C++, Python gibi güçlü programlama dillerinde profesyonel yetkinlik</li>
    <li>ROS 2, OpenCV ve MAVROS gibi ileri seviye otonom sistemler ve görüntü işleme kütüphanelerinde uygulamalı tecrübe</li>
    <li>OpenGL, SDL gibi grafik ve oyun geliştirme kütüphaneleri ile etkileşimli ve grafik yoğun projeler geliştirme yeteneği</li>
    <li>Takım çalışması, problem çözme ve etkin iletişim yetenekleri</li>
    <li>Gerçek zamanlı sistemler ve gömülü yazılımlar konusunda detaylı bilgi ve uygulamalı deneyim</li>
  </ul>
</section>

<!-- ======== 4. ETKİNLİKLER ======== -->
<section id="activities" class="container-sm">
  <h2>Etkinlikler</h2>
  <article>
    <h3>E-Spor Kariyeri</h3>
    <p>Profesyonel olarak Counter-Strike ve Age of Empires IV oyunlarıyla ilgileniyorum. Ulusal ve uluslararası turnuvalarda aktif olarak yer alıyor ve takım çalışması, stratejik düşünme yeteneklerimi geliştiriyorum.</p>
  </article>
  <article>
    <h3>Teknofest İHA Yarışması</h3>
    <p>Teknofest İHA Yarışması'na hazırlanan ekibimde aktif olarak görev alıyorum. Yarışma için otonom uçuş sistemleri ve görüntü işleme üzerine çalışmalar yaparak, teknik yetkinliklerimi sahada uygulamalı olarak geliştirme fırsatı buluyorum.</p>
  </article>
</section>

<!-- ======== 5. İLETİŞİM ======== -->
<aside id="contact" class="container-sm">
  <h2>İletişim</h2>
  <a href="iletisim.php">Iletisim Formu</a>
  <address>
    E-posta: <a href="mailto:berkay@example.com">berkaygench@gmail.com</a><br />
    Telefon: +90 546 219 74 73<br />
    Konum: Sakarya / Türkiye
  </address>
</aside>

  </main>

  <footer>
    <!-- site alt bilgisi -->
  </footer>


</body>
</html>
