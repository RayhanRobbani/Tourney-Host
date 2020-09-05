var loginform = document.getElementById('login');
var here = document.getElementById('here');
// loginform.addEventListener('', loginfunc);

function loginfunc (e){
  // e.preventDefault();

  here.style.display = 'none';

  var email = document.createElement('input');
  email.className = 'input';
  email.type = 'email';
  email.id = 'hostemail';
  email.name = 'hostemail';
  email.placeholder = 'E-mail';
  email.setAttribute('required','');
  loginform.appendChild(email);

  var password = document.createElement('input');
  password.className = 'input';
  password.type = 'password';
  password.id = 'password';
  password.name = 'password';
  password.placeholder = 'Password';
  password.setAttribute('required','');
  loginform.appendChild(password);

  var br1 = document.createElement('br');
  loginform.appendChild(br1);
  var br2 = document.createElement('br');
  loginform.appendChild(br2);

  var newDiv = document.createElement('div');

  var button = document.createElement('input');
  button.className = 'button';
  button.type = 'submit';
  button.value = 'Login';
  newDiv.appendChild(button);

  loginform.appendChild(newDiv);
}
