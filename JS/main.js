const hamburguerButton = document.getElementById("hamburguer-menu"),
    menu = document.getElementById("menu");

let randomBackgrounds = [];

randomBackgrounds[0] = '../assets/img/pexels-daniel-perez-sea.png';
randomBackgrounds[1] = '../assets/img/conchalio-beach-1.png';
randomBackgrounds[2] = '../assets/img/el-palmarcito-beach.png';
randomBackgrounds[3] = '../assets/img/conchalio-beach-2.png';
randomBackgrounds[4] = '../assets/img/soyapango-sky.png';

window.onload = ()=> {
    let setRandomBackground = Math.floor(Math.random() * randomBackgrounds.length);
    document.body.style.backgroundImage = `url(${randomBackgrounds[setRandomBackground]})`;
}

hamburguerButton.addEventListener('click', ()=> {

    // Alternate styles for the menu
    menu.classList.toggle("active-menu");
    document.body.classList.toggle("opacity-menu");

});
