
/**
 * Gestione del login con AJAX
 */



document.addEventListener('DOMContentLoaded', () => {
  const box = document.getElementById('login-box');

  if (isLogged) {
    box.innerHTML = `
      <span class="mr-2">Benvenuto, <strong>${username}</strong></span>
      <a href="/WebApp/User/logout" class="btn btn-sm btn-outline-danger">Logout</a>
    `;
  } else {
    box.innerHTML = `
      <button id="show-login-form" class="btn btn-sm btn-outline-primary">Login</button>
      <form id="login-form" style="display: none; margin-top: 10px;">
        <input type="text" id="username" placeholder="Username" class="form-control mb-1" required>
        <input type="password" id="password" placeholder="Password" class="form-control mb-1" required>
        <button type="button" onclick="submitLogin()" class="btn btn-sm btn-primary btn-block">Accedi</button>
        <div id="login-message" class="text-danger mt-1"></div>
      </form>
    `;

    document.getElementById('show-login-form').addEventListener('click', () => {
      document.getElementById('login-form').style.display = 'block';
    });
  }
});

function submitLogin() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  fetch('/WebApp/User/checkLoginRentAjax.php', {
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