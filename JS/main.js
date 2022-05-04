const hamburguerButton = document.getElementById("hamburguer-menu"),
    menu = document.getElementById("menu");

let randomBackgrounds = [];

randomBackgrounds[0] = '../assets/backgrounds/bkg1.jpg';
randomBackgrounds[1] = '../assets/backgrounds/bkg2.jpg';
randomBackgrounds[2] = '../assets/backgrounds/bkg3.jpg';
randomBackgrounds[3] = '../assets/backgrounds/bkg4.jpg';

window.onload = ()=> {
    let setRandomBackground = Math.floor(Math.random() * randomBackgrounds.length);
    document.body.style.backgroundImage = `url(${randomBackgrounds[setRandomBackground]})`;
}

hamburguerButton.addEventListener('click', ()=> {

    // Alternate styles for the menu
    menu.classList.toggle("active-menu");
    document.body.classList.toggle("opacity-menu");

});
