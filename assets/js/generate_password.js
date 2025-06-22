function generatePassword() {
  const type = document.getElementById("password-type").value;
  if (!type) {
    alert("Veuillez sélectionner un type de mot de passe");
    return;
  }

  fetch("includes/generate_password.php?type=" + type)
    .then((response) => response.text())
    .then((password) => {
      document.getElementById("register-password").value = password;
    })
    .catch((error) => {
      console.error("Erreur lors de la génération :", error);
    });
}


function togglePasswordVisibility() {
  const pwdField = document.getElementById('register-password');
  if (pwdField.type === 'password') {
    pwdField.type = 'text';
  } else {
    pwdField.type = 'password';
  }
}