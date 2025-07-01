document.addEventListener('DOMContentLoaded', () => {
  window.submitLogin = function () {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const actualMethod = document.getElementById('actualMethod').value;

    console.log('actualMethod:', actualMethod);

    fetch('/RentalTopGear/User/checkLoginAuto', {
      method: 'POST',
      credentials: 'include',
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
  };
});