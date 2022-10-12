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

function redirectProduct(){
    addEventListener('click', function(){
        window.location.replace('product.php')
    })
}

function redirectList(){
    addEventListener('click', function(){
        window.location.replace('list_buy.php')
    })
}

function toggleSideMenu(id){
    console.log('click')
    // var ativos = document.querySelectorAll('.activeMenu');
    // if(ativos.length > 0){
    //     for(i = 0; i < ativos.length; i++){
    //     if (id !== ativos[i].id) {
    //         ativos[i].classList.remove('activeMenu')
    //     }
    //     }
    // }
    // var selected = document.getElementById(id);
    // selected.classList.toggle('activeMenu');
}
