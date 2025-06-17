// Ouvre la modale de connexion
document.querySelector('.login-button').onclick = function() {
  document.getElementById('login-modal').classList.remove('hidden');
};

// Ouvre la modale d'inscription
document.querySelector('.register-button').onclick = function() {
  document.getElementById('register-modal').classList.remove('hidden');
};

// Ferme les modales quand on clique sur la croix
document.querySelectorAll('.close-modal').forEach(btn => {
  btn.onclick = function() {
    // Ferme la modale parente
    this.closest('.modal, .modal-first').classList.add('hidden');
  };
});

//Ferme la modale si on clique en dehors du contenu
window.onclick = function(event) {
  const loginModal = document.getElementById('login-modal');
  const registerModal = document.getElementById('register-modal');
  if (event.target === loginModal) loginModal.classList.add('hidden');
  if (event.target === registerModal) registerModal.classList.add('hidden');
};