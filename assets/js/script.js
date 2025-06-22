// Ouvre toutes les modales Connexion
document.querySelectorAll('.login-button').forEach(button => {
  button.addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('login-modal').classList.remove('hidden');
  });
});

// Ouvre toutes les modales Inscription
document.querySelectorAll('.register-button').forEach(button => {
  button.addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('register-modal').classList.remove('hidden');
  });
});

// Ferme les modales au clic sur la croix
document.querySelectorAll('.close-modal').forEach(btn => {
  btn.addEventListener('click', function () {
    document.querySelectorAll('.modal, .modal-first').forEach(modal => {
      modal.classList.add('hidden');
    });
  });
});

// Ferme les modales au clic en dehors
window.addEventListener('click', function (event) {
  const loginModal = document.getElementById('login-modal');
  const registerModal = document.getElementById('register-modal');
  if (event.target === loginModal) loginModal.classList.add('hidden');
  if (event.target === registerModal) registerModal.classList.add('hidden');
});
