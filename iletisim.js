/* AngularJS doğrulama */
angular.module('contactApp', [])
.controller('FormCtrl', ['$scope', function ($scope) {
  const f = document.getElementById('contactForm');
  const emailR = /^[\w-.]+@([\w-]+\.)+[\w-]{2,}$/;

  function clearErr(){ f.querySelectorAll('.error').forEach(e=>e.textContent=''); }
  function setErr(name,msg){
    f[name].closest('[class*="col"]').querySelector('.error').textContent = msg;
  }

  this.validate = () =>{
    clearErr(); let ok = true;
    if(!f.fullname.value.trim())            { setErr('fullname','Ad soyad boş'); ok=false; }
    if(!emailR.test(f.email.value.trim()))  { setErr('email','E‑posta yanlış');  ok=false; }
    if(!/^\d{10,11}$/.test(f.phone.value))  { setErr('phone','Tel 10‑11 rakam'); ok=false; }
    if(!f.city.value)                       { setErr('city','Şehir?');           ok=false; }
    if(!f.querySelector('[name="gender"]:checked'))
                                            { setErr('gender','Cinsiyet?');      ok=false; }
    if(!f.querySelector('[name="hobby"]:checked'))
                                            { setErr('hobby','Hobi?');           ok=false; }
    if(!f.cv.files.length)                  { setErr('cv','CV gerekli');         ok=false; }
    if(f.message.value.trim().length<20)    { setErr('message','Mesaj ≥20 kr.'); ok=false; }
    if(ok) alert('✔ Başarılı!');
  };
}]);
