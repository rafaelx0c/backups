document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const errorMessage = document.getElementById('error-message');

  if (username === 'admin' && password === '1234') {
    window.location.href = 'index.html'; // Redirect to the dashboard page
  } else {
    errorMessage.textContent = 'The username or password is incorrect. Please try again.';
  }
});
