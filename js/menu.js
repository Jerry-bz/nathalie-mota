document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu__icon");
  const menuHamburger = document.querySelector(".icon__hamburger");
  const menuClose = document.querySelector(".icon__close");
  const menuList = document.querySelector(".header__list");

  menuToggle.addEventListener("click", function () {
    // Basculer la classe pour afficher ou masquer le menu
    menuList.classList.toggle("is-active");

    // Alterner entre les icônes
    const isMenuOpen = menuList.classList.contains("is-active");
  
    
    menuHamburger.style.display = isMenuOpen ? "none" : "inline";
    menuClose.style.display = isMenuOpen ? "inline" : "none";
  });
});
