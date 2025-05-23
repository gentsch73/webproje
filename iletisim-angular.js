/* iletisim-angular.js – AngularJS doğrulama ve özet sayfasına yönlendirme */

// Özet sayfasına veri aktarıp yönlendiren ortak yardımcı
function showSummary(form) {
  const obj = {}, fd = new FormData(form);
  fd.forEach((v, k) => { obj[k] = obj[k] ? [].concat(obj[k], v) : v; });
  if (form.cv && form.cv.files.length) obj.cv = form.cv.files[0].name; // dosya adı
  localStorage.setItem('contactData', JSON.stringify(obj));
  window.location.assign('summary.html');
}

// AngularJS uygulaması ve doğrulama denetçisi
angular.module('contactApp', [])
  .controller('FormCtrl', ['$scope', function ($scope) {
    const f = document.getElementById('contactForm');
    const emailR = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;
    const phoneR = /^\d{10,11}$/;

    const clear = () => f.querySelectorAll('.error').forEach(e => e.textContent = '');
    const set   = (n, msg) => {
      const el = f[n] instanceof RadioNodeList ? f[n][0] : f[n];
      el.closest('[class*="col"]').querySelector('.error').textContent = msg;
    };

    this.validate = () => {
      clear();
      let ok = true;
      if (!f.fullname.value.trim())               { set('fullname', 'Ad soyad boş');            ok = false; }
      if (!emailR.test(f.email.value.trim()))     { set('email', 'E‑posta yanlış');             ok = false; }
      if (!phoneR.test(f.phone.value.replace(/\D/g, ''))) { set('phone', 'Tel 10‑11 rakam'); ok = false; }
      if (!f.city.value)                          { set('city', 'Şehir?');                      ok = false; }
      if (!f.querySelector('[name="gender"]:checked')) { set('gender', 'Cinsiyet?');          ok = false; }
      if (!f.querySelector('[name="hobby"]:checked'))  { set('hobby', 'Hobi?');              ok = false; }
      if (!f.cv.files.length)                     { set('cv', 'CV gerekli');                   ok = false; }
      if (f.message.value.trim().length < 20)     { set('message', 'Mesaj ≥20 kr.');           ok = false; }

      if (ok) showSummary(f); // Doğrulama geçtiyse özet sayfasına git
    };
}]);