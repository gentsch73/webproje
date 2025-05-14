/* iletisim.js  – sadece Vue doğrulaması  */

/* DOM zaten yüklü (defer sayesinde) – yine de güvenli olsun */
document.addEventListener('DOMContentLoaded', () => {

  const { createApp, reactive } = Vue;
  const emailR = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;

  createApp({
    setup(){
      const errs = reactive({});        // hata mesajları objesi
      const form = document.getElementById('contactForm');

      /* Doğrulama işlevi */
      function validate(){
        Object.keys(errs).forEach(k => delete errs[k]);      // reset
        clearDomErrors();

        if(!form.fullname.value.trim())  addErr('fullname','Ad soyad boş');
        if(!emailR.test(form.email.value.trim()))
          addErr('email','E‑posta yanlış');
        if(!/^\d{10,11}$/.test(form.phone.value.trim()))
          addErr('phone','Telefon 10‑11 rakam');
        if(!form.city.value)             addErr('city','Şehir?');
        if(!form.querySelector('[name="gender"]:checked'))
          addErr('gender','Cinsiyet?');
        if(!form.querySelector('[name="hobby"]:checked'))
          addErr('hobby','Hobi?');
        if(!form.cv.files.length)        addErr('cv','CV gerekli');
        if(form.message.value.trim().length < 20)
          addErr('message','Mesaj ≥20 karakter');

        // Hata yoksa başarı
        if(Object.keys(errs).length === 0){
          alert('✔ Vue doğrulama başarılı!');
        }else{
          // DOM'a hataları bas
          for(const name in errs) setDomError(name, errs[name]);
        }
      }

      /* Yardımcılar */
      function addErr(name,msg){ errs[name]=msg; }
      function clearDomErrors(){
        form.querySelectorAll('.error').forEach(e=>e.textContent='');
      }
      function setDomError(name,msg){
        form[name]
          .closest('.col-12,.col-md-6,.col-md-9,.form-group')
          .querySelector('.error').textContent = msg;
      }

      // Butona bağla
      document.getElementById('btnVue').addEventListener('click', validate);

      // Vue template kullanılmadığı için return gerekmiyor
      return{};
    }
  }).mount(document.body);   // sadece reaktif mantık, görünür template yok
});
