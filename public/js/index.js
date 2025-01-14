const menuItems = document.querySelectorAll(".menu-item");
const hoverBar = document.querySelector(".hover-bar");
const activeItem = document.querySelector(".menu-item.active");

// Función para mover la barra
const moveHoverBar = (target) => {
  const { offsetLeft, offsetWidth } = target;
  hoverBar.style.width = `${offsetWidth}px`;
  hoverBar.style.transform = `translateX(${offsetLeft}px)`;
};

// Inicializar en el elemento activo
if (activeItem) {
  moveHoverBar(activeItem);
}

// Animar la barra al hacer hover
menuItems.forEach((item) => {
  item.addEventListener("mouseenter", (e) => {
    moveHoverBar(e.target);
  });
});

// Regresar a la posición activa al salir del menú
document.querySelector(".menu").addEventListener("mouseleave", () => {
  if (activeItem) {
    moveHoverBar(activeItem);
  } else {
    hoverBar.style.width = `0`;
  }
});