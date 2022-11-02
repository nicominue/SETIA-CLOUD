

const nombre = document.getElementById("name1");
const email = document.getElementById("email");
const pass = document.getElementById("password");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

form.addEventListener('submit', e => {
    e.preventDefault();
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    parrafo.innerHTML=""
    if(nombre.value.length < 4){
        warnings +=`El nombre no es valido <br>`
        entrar=true
    }
    
    if(!regexEmail.test(email.value)){
        warnings +=`El Email no es valido <br>`
        entrar=true
    }

    if(pass.value.length < parseInt(4)){
        warnings +=`La contraseña es demasiado corta <br>`
        entrar=true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "¡¡Se Registro con Exito!!"
    }
})