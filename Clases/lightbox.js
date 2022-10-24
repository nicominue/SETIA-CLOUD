const image = document.querySelectorAll('.img-gallery');
const imageneslight = document.querySelector('.agregar-imagen');
const contenedorlight = document.querySelector('.imagen-light');
const hamburguer1 = document.querySelector('.hamburguesa');

 image.forEach(imagen => {
    imagen.addEventListener('click', ()=>{
      aparecerImagen(imagen.getAttribute('src'))
    })
 })

 contenedorlight.addEventListener('click', (e)=>{
    if(e.target != imageneslight){
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
 }