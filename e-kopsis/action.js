var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('.inputbox');
var $username = document.getElementById('username');
var $password = document.getElementById('password');


function addError(message) {
  $error.innerHTML = message;
  $error.style.display = 'block';
}

function removeError() {
  $error.innerHTML = '';
  $error.style.display = 'hidden';
}

var myArkasiID = [
  {
    username : 'admin@tkj.student.smkn1pungging.sch.id',
    password : 'admin123',
  },
  {
    username : 'admin@titl.student.smkn1pungging.sch.id',
    password : 'admin123',
  },
  {
    username : 'ktyudha@it.smkn1pungging.sch.id',
    password : 'ktyudha123',
  }
];

function loginKopsis(){
  var username = document.getElementsById('username').value;
  var password = document.getElementsById('password').value;
}

function validate(event) {
  // event.preventDefault() untuk tidak menjalankan fungsi form apabila di submit, yaitu mengirim data ke 'action'.
  event.preventDefault();
  $error.style.display = 'none';
 
  for(i = 0; i < myArkasiID.length; i++){
   if ($username.value !== myArkasiID[i].username || $password.value !== myArkasiID[i].password) {
     addError('Email atau password salah');
    } else {
      removeError();
      sessionStorage.setItem("username", $username.value);
      location.href="/loginvsga/e-kopsis/formOrder/index.html";
      return;
    }
 }
}
$form.addEventListener('submit', validate);