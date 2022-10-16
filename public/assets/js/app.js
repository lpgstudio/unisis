function menuToggle(){
    icon = document.querySelector('.navigation');
    icon.classList.toggle('active');
    main = document.querySelector('.main');
    main.classList.toggle('active');
    toggle = document.querySelector('.toggle');
    toggle.classList.toggle('active');
}

function TogglerForm(){
    section = document.querySelector('section');
    container = document.querySelector('.container-login');
    container.classList.toggle('active');
    section.classList.toggle('active');
}

// Abrir submenus
function toggleSideMenu(id){
    var ativos = document.querySelectorAll('.accordion');
    var ativosDiv = document.querySelectorAll('.sidebar-menu');
    if(ativos.length > 0 ){
        for(i = 0; i < ativos.length; i++){
            if (id !== ativos[i].id) {
                ativos[i].classList.remove('activeMenu');
                ativosDiv[i].classList.remove('activeMenu');
            }
            if (id == ativos[i].id) {
                ativosDiv[i].classList.toggle('activeMenu');
                ativos[i].classList.toggle('activeMenu');
            }
        }
    }
}
