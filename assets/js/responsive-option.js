document.addEventListener("DOMContentLoaded", function () {
  const burger = document.getElementById("burger-menu");
  const nav = document.getElementById("mobile-nav");
  const burgerIcon = document.getElementById("burger-icon");

  function closeMenu() {
    nav.classList.remove("active");
    burger.classList.remove("open");
  }

  if (burger && nav) {
    burger.addEventListener("click", () => {
      nav.classList.toggle("active");
      burger.classList.toggle("open");
    });

    // Clique en dehors du menu
    document.addEventListener("click", (e) => {
      const clickedInside = nav.contains(e.target) || burger.contains(e.target);
      if (!clickedInside) {
        closeMenu();
      }
    });
  }
});
