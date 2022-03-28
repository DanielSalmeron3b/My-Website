const hamburguerButton = document.getElementById("hamburguer-menu"),
    menu = document.getElementById("menu");

hamburguerButton.addEventListener('click', ()=> {

    // Alternate styles for the menu
    menu.classList.toggle("active-menu");
    document.body.classList.toggle("opacity-menu");

    // const routeMenu = e.target.getAttribute('src');

    // if(routeMenu == 'assets/img/menu-icon.png'){
    //     e.target.setAttribute('src', 'assets/img/menu-icon.png')
    // }else{
    //     e.target.setAttribute('src', 'assets/img/menu-icon.png')
    // }
});