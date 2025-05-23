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

  <?php include 'navbar.php'; ?>

    <main class="container py-5">

   <div class="container-sm mb-5> 
  <h3 class="mt-4">🎥 En Sevdiğim 5 Film</h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Esaretin Bedeli (The Shawshank Redemption)</strong> – Umudun özgürleştirici gücünü anlatan efsanevi bir yapım.</li>
    <li class="list-group-item"><strong>Başlangıç (Inception)</strong> – Rüya içinde rüya konseptiyle gerçeklik kavramını sorgulatan bir Nolan klasiği.</li>
    <li class="list-group-item"><strong>Yıldızlararası (Interstellar)</strong> – Zaman ve mekânın ötesinde, insan sevgisinin sınırlarını araştıran epik bir bilim kurgu.</li>
    <li class="list-group-item"><strong>Parazit (Parasite)</strong> – Sınıf çatışmasını çarpıcı biçimde ele alan, sürükleyici bir sosyal gerilim.</li>
    <li class="list-group-item"><strong>Prestij (The Prestige)</strong> – Rekabet ve takıntı temalarıyla şaşırtıcı bir final sunan çifte hikâye.</li>
  </ul>

</div>

<!-- === OYUNLAR === -->
<section class="container-sm mb-5">
  <h2>🎮 Oyun Tutkum</h2>
  <p>Video oyunları, stratejik düşünme, hızlı karar alma ve takım çalışmasını bir araya getiren interaktif deneyimlerdir. Rekabetçi ortamda kendimi test etmeyi ve sürekli gelişmeyi seviyorum. Özellikle çevrim içi çok oyunculu oyunlar, hem sosyal etkileşim sağlıyor hem de reflekslerimi ve problem çözme becerilerimi keskinleştiriyor.</p>

  <!-- CS2 -->
  <div class="card mb-4">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsiX1_rHgNAUuTeAvyhWtM_OwRHNAYg04iBQ&s" class="img-fluid rounded-start" alt="Counter‑Strike 2 görseli">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">Counter‑Strike 2 (CS2)</h3>
          <p class="card-text">Counter‑Strike serisi, 1999 yılında <em>Half‑Life</em> oyunu için geliştirilen bir mod olarak doğdu ve kısa sürede kendi ayakları üzerinde duran bir e-spor fenomenine dönüştü. 2012’de <em>Global Offensive</em> sürümünün çıkmasıyla kitlesini katlayan seri, 2023’te Source 2 motoruna taşınarak <strong>Counter‑Strike 2</strong> adıyla yeniden doğdu. CS2, gelişmiş duman mekaniği, zenginleştirilmiş haritalar ve iyileştirilmiş ağ kodu sayesinde çok daha akıcı ve rekabetçi bir deneyim sunuyor. Takım tabanlı oynanışı ve stratejik derinliği, oyunu benim için vazgeçilmez kılıyor.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Age of Empires IV -->
  <div class="card">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/08/Age_of_Empires_IV_Cover_Art.png/250px-Age_of_Empires_IV_Cover_Art.png" class="img-fluid rounded-start" alt="Age of Empires IV görseli">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">Age of Empires IV (AoE4)</h3>
          <p class="card-text">Gerçek zamanlı strateji türünün efsanelerinden <strong>Age of Empires</strong>, 1997’de Ensemble Studios tarafından başlatıldı. Serinin dördüncü ana oyunu <strong>AoE4</strong>, 2021’de Relic Entertainment tarafından geliştirildi ve Orta Çağ’dan Rönesans’a uzanan sekiz farklı medeniyetle oyuncuları tarihin tozlu sayfalarına taşıdı. Oyunda kaynak yönetimi, teknoloji ağacı geliştirme ve büyük çaplı ordular kurma üzerine odaklanan klasik oyun mekaniği, modern grafikler ve detaylı tarih anlatılarıyla harmanlanıyor. Çok oyunculu rekabetçi modları ise stratejik planlama becerilerimi maksimum düzeyde zorluyor.</p>
        </div>
      </div>
    </div>
  </div>
</section>


    <h1 class="mb-4 text-center">Favori Konu → Sinema</h1>
    <p class="text-center mb-5">TMDB’de şu an <strong>en popüler</strong> filmler</p>

    <!-- Filmlerin geleceği alan -->
    <div id="movieRow" class="row gy-4"></div>
  </main>

  <script src="filmler.js" defer></script>



</body>
</html>
