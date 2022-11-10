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
      case 'http://127.0.0.1:5500/build/img/pediatria.jpg':
         titulo.textContent = "pediatria";
         descripcion.textContent = "La pediatría es la especialidad médica encargada de la salud física, mental y emocional de los/as niños/as desde el nacimiento hasta la adolescencia.";
      break;
      case 'http://127.0.0.1:5500/build/img/neumonologia.jpg':
         titulo.textContent = "Neumonologia";
         descripcion.textContent = "La neumonologia se ocupa del tratamiento y las enfermedades de los pulmones y las vías respiratorias.";
         break;
      case 'http://127.0.0.1:5500/build/img/cardiologia.jpg':
         titulo.textContent = "Cardiologia";
         descripcion.textContent = "La cardiologia se encarga del estudio, prevención, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio.";
         break;
      case 'http://127.0.0.1:5500/build/img/traumatologia.jpg':
         titulo.textContent = "Traumatologia";
         descripcion.textContent = "La traumatologia se dedica al estudio de las lesiones del aparato locomotor (como es el caso de huesos y músculos). La especialidad es tratar, diagnosticar y prevenir aquellas enfermedades directamente relacionadas con los huesos, músculos o articulaciones.";
         break;
      case 'http://127.0.0.1:5500/build/img/ginecologia.jpg':
         titulo.textContent = "Ginecologia";
         descripcion.textContent = "La ginecologia se especializa en la atención de las mujeres durante el embarazo y el parto, y en el diagnóstico y tratamiento de enfermedades de los órganos reproductivos femeninos.";
         break;
      case 'http://127.0.0.1:5500/build/img/dermatologia.jpg':
         titulo.textContent = "Dermatologia";
         descripcion.textContent = "La dermatologia se especializa en el diagnóstico, tratamiento y manejo de las enfermedades y desórdenes de la piel.";
         break;
      case 'http://127.0.0.1:5500/build/img/urologia.jpg':
         titulo.textContent = "Urologia";
         descripcion.textContent = "La urología es la especialidad médico-quirúrgica que se ocupa del estudio, diagnóstico y tratamiento de las patologías que afectan al aparato urinario, glándulas suprarrenales y retroperitoneo de ambos sexos, y el aparato reproductor masculino.";
         break;
      case 'http://127.0.0.1:5500/build/img/nutricion.jpg':
         titulo.textContent = "Nutricion";
         descripcion.textContent = "Un nutricionista, dietista-nutricionista, nutriólogo, dietista o dietólogo es un profesional sanitario experto en alimentación, nutrición y dietética.";
         break;
    }
 }

