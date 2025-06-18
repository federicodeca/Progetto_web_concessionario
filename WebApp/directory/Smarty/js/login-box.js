/**
 * Gestione del login 
 */



document.addEventListener('DOMContentLoaded', () => {
  const box = document.getElementById('login-box');  //cerca nel tpl e gli passa il cotenuto

if (isLogged) {
    box.innerHTML = `
      <span class="mr-2">Benvenuto, <strong>${username}</strong></span>
      <a href="/WebApp/User/logout" class="btn btn-sm btn-outline-danger">Logouto</a>
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

  fetch('/WebApp/User/checkLoginAuto.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      window.location.href = data.redirect || '/WebApp/User/home';
    } else {
      document.getElementById('login-message').innerText = data.message || 'Login fallito.';
    }
  })
  .catch(() => {
    document.getElementById('login-message').innerText = 'Errore di connessione.';
  });
}