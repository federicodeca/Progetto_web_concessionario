/**
 * Gestione del login 
 */



document.addEventListener('DOMContentLoaded', () => {
  const box = document.getElementById('login-box');  //cerca nel tpl e gli passa il cotenuto


if (isLogged) {
    box.innerHTML = ` <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMore" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                benvenuto ${username} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMore">
                  <a class="dropdown-item" href="team.html">Patente</a>
                  <a class="dropdown-item" href="/WebApp/User/logout">Esci</a>
                </div>
              </li>
     
    `;

  } else {
    box.innerHTML = `
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="loginDropdown" style="min-width: 250px;">
          <form id="login-form">
            <input type="text" id="username" placeholder="Username" class="form-control mb-2" required>
            <input type="password" id="password" placeholder="Password" class="form-control mb-2" required>
            <button type="button" onclick="submitLogin()" class="btn btn-primary btn-block">Accedi</button>
            <button type="button" onclick='window.location.href="/WebApp/User/showRegistrationForm"' class="btn btn-primary btn-block">Registrati</button>
            <div id="login-message" class="text-danger mt-2"></div>
          </form>
        </div>
      </li>
`;
  }
});

function submitLogin() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const actualMethod = document.getElementById('actualMethod').value;
 console.log('actualMethod:', actualMethod);
  fetch('/WebApp/User/checkLoginAuto', {
  method: 'POST',
  headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
  body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}&actualMethod=${encodeURIComponent(actualMethod)}`
})
.then(response => {
  if (!response.ok) throw new Error('Network response was not ok');
  return response.json();
})
.then(data => {
  if (data.success) {
    window.location.href = '/' + data.redirect;
  } else {
    document.getElementById('login-message').innerText = data.message;
  }
})
.catch(error => {
  console.error('Fetch error:', error);
  document.getElementById('login-message').innerText = 'Errore di connessione o risposta non valida.';
});
}