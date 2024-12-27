document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("contact-modal");
  const contactMenuItem = document.querySelector(
    "#menu-header li:last-child a"
  );
  const body = document.body;

  // Ouvrir la modale au clic sur le lien "Contact" et rediriger normalement
  contactMenuItem.addEventListener("click", () => {
    // Ici, la redirection se fera naturellement, aucune prévention
    console.log("Redirection vers la page Contact.");
  });

  // Vérifier si nous sommes sur la page de Contact et afficher la modale
  if (window.location.pathname === "/contact/") {
    modal.classList.add("is-active");
    body.classList.add("modal__overlay"); // Ajoute une classe pour gérer le background
  }

  // Fermer la modale au clic en dehors de son contenu
  modal.addEventListener("click", (e) => {
    if (!e.target.closest(".modal__content")) {
      modal.classList.remove("is-active"); // Ferme la modale
      body.classList.remove("modal__overlay"); // Supprime l'overlay
    }
  });
});
