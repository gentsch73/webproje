/* iletisim-js.js – Vanilla JavaScript doğrulama + özet sayfasına yönlendirme */

/* Özet sayfasına veri aktar ve yönlendir */
function showSummary(form) {
  const obj = {},
        fd  = new FormData(form);

  fd.forEach((v, k) => {            // checkbox - radio dizilerini yakala
    obj[k] = obj[k] ? [].concat(obj[k], v) : v;
  });
  if (form.cv && form.cv.files.length) obj.cv = form.cv.files[0].name; // dosya adı

  localStorage.setItem('contactData', JSON.stringify(obj));
  window.location.assign('summary.html');
}

document.addEventListener('DOMContentLoaded', () => {
  const f   = document.getElementById('contactForm');
  const btn = document.getElementById('validateJS');
  if (!f || !btn) return;           // form veya buton yoksa çık

  /* RegEx kalıpları */
  const emailR = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;
  const phoneR = /^\d{10,11}$/;

  /* Yardımcılar */
  const clear = () =>
    f.querySelectorAll('.error').forEach(e => (e.textContent = ''));

  const set = (name, msg) => {
    const el = f[name] instanceof RadioNodeList ? f[name][0] : f[name];
    el.closest('[class*="col"]').querySelector('.error').textContent = msg;
  };

  /* Buton tıklama – ana doğrulama */
  btn.addEventListener('click', () => {
    clear();
    let ok = true;

    if (!f.fullname.value.trim())              { set('fullname', 'Ad soyad boş');        ok = false; }
    if (!emailR.test(f.email.value.trim()))    { set('email',   'E-posta yanlış');       ok = false; }
    if (!phoneR.test(f.phone.value.replace(/\D/g, '')))
                                               { set('phone',   'Tel 10-11 rakam');      ok = false; }
    if (!f.city.value)                         { set('city',    'Şehir?');               ok = false; }
    if (!f.querySelector('[name="gender"]:checked'))
                                               { set('gender',  'Cinsiyet?');            ok = false; }
    if (!f.querySelector('[name="hobby"]:checked'))
                                               { set('hobby',   'Hobi?');                ok = false; }
    if (!f.cv.files.length)                    { set('cv',      'CV gerekli');           ok = false; }
    if (f.message.value.trim().length < 20)    { set('message', 'Mesaj ≥20 kr.');        ok = false; }

    if (ok) showSummary(f);                    // tüm denetimler geçtiyse özet sayfasına git
  });
});
