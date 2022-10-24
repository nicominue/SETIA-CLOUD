const hamburguer = document.querySelector('.hamburguesa');
const menu = document.querySelector('.menu-navegation');


hamburguer.addEventListener('click', ()=>{
    menu.classList.toggle("spread");
})

window.addEventListener('click', e=>{
    if(menu.classList.contains('spread')
            && e.target != menu && e.target != hamburguer){
                menu.classList.toggle("spread")
    }
})