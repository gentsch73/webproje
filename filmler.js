/* filmler.js  – TMDB “popüler filmler” çekme */

const API_KEY   = "303eb0ff19e22fe74f207bebc19daea8";
const API_URL   = `https://api.themoviedb.org/3/movie/popular?api_key=${API_KEY}&language=tr-TR&page=1`;
const IMG_ROOT  = "https://image.tmdb.org/t/p/w500";
const movieRow  = document.getElementById('movieRow');

/* sayfa açıldığında veriyi çek */
fetch(API_URL)
  .then(r => r.json())
  .then(data => {
    const top10 = data.results.slice(0, 10);
    top10.forEach(film => movieRow.appendChild(createCard(film)));
  })
  .catch(err => {
    movieRow.innerHTML = `<p class="text-danger">Film verileri yüklenemedi 🤷‍♂️</p>`;
    console.error(err);
  });

/* Bootstrap kartını üret */
function createCard(f) {
  const col   = document.createElement('div');
  col.className = "col-12 col-sm-6 col-lg-4";

  const card = `
    <div class="card h-100 shadow-sm">
      <img src="${IMG_ROOT + f.poster_path}" class="card-img-top" alt="${f.title}">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">${f.title}</h5>
        <p class="card-text small text-muted flex-grow-1">
          Çıkış: ${f.release_date}<br> Puan: ${f.vote_average}
        </p>
        <a href="https://www.themoviedb.org/movie/${f.id}" target="_blank"
           class="btn btn-sm btn-primary mt-auto">Detay ›</a>
      </div>
    </div>`;

      const card = `
    <div class="card h-100 shadow-sm">
      <img src="${IMG_ROOT + f.poster_path}" class="card-img-top" alt="${f.title}">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">${f.title}</h5>
        <p class="card-text small text-muted flex-grow-1">
          Çıkış: ${f.release_date}<br> Puan: ${f.vote_average}
        </p>
        <a href="https://www.themoviedb.org/movie/${f.id}" target="_blank"
           class="btn btn-sm btn-primary mt-auto">Detay ›</a>
      </div>
    </div>`;

      const card = `
    <div class="card h-100 shadow-sm">
      <img src="${IMG_ROOT + f.poster_path}" class="card-img-top" alt="${f.title}">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">${f.title}</h5>
        <p class="card-text small text-muted flex-grow-1">
          Çıkış: ${f.release_date}<br> Puan: ${f.vote_average}
        </p>
        <a href="https://www.themoviedb.org/movie/${f.id}" target="_blank"
           class="btn btn-sm btn-primary mt-auto">Detay ›</a>
      </div>
    </div>`;
  col.innerHTML = card;
  return col;
}
