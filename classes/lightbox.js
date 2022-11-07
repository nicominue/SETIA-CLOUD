const image = document.querySelectorAll('.img-gallery');
const imageneslight = document.querySelector('.agregar-imagen');
const contenedorlight = document.querySelector('.imagen-light');
const hamburguer1 = document.querySelector('.hamburguesa');
const titulo = document.querySelector(".agregar-titulo");
const descripcion = document.querySelector(".agregar-descripcion");
const boton = document.querySelector('.btn-turno');

 image.forEach(imagen => {
    imagen.addEventListener('click', ()=>{
      aparecerImagen(imagen.getAttribute('src'))
    })
 })

 contenedorlight.addEventListener('click', (e)=>{
    if(e.target != imageneslight && e.target != boton){
        contenedorlight.classList.toggle('show')
    imageneslight.classList.toggle('showImage')
    hamburguer1.style.opacity = '1';
    }
 })


 const aparecerImagen = (imagen)=>{
    imageneslight.src = imagen;
    contenedorlight.classList.toggle('show')
    imageneslight.classList.toggle('showImage')
    hamburguer1.style.opacity = '0';
    const valorsrc = imageneslight.src;
    switch (valorsrc){
      case 'http://127.0.0.1:5500/build/img/family.jpg':
         titulo.textContent = "pediatra";
         descripcion.textContent = "tratamos con niños, los ayudamos bla bla bla";
      break;
      case 'http://127.0.0.1:5500/build/img/family2.jpg':
         titulo.textContent = "psicologo";
         descripcion.textContent = "tratamos todos los problemas, los ayudamos bla bla bla";
         break;
      case 'http://127.0.0.1:5500/build/img/family3.jpg':
         titulo.textContent = "terapeuta";
         descripcion.textContent = "tratamos todos los sintomas, los ayudamos bla bla bla";
         break;
      case 'http://127.0.0.1:5500/build/img/destacada.jpg':
         titulo.textContent = "traumatologo";
         descripcion.textContent = "tratamos todos los huesos, los ayudamos bla bla bla";
         break;
    }
 }

