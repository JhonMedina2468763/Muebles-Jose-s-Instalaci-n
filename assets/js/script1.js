let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();// llamando a la función (opcional)
});

// siguiente es el código para cambiar el botón de la barra lateral (opcional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");// reemplazando la clase de iconos
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");// reemplazando la clase de iconos 
 }
}
