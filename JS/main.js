const GITHUB_API_URL = "https://api.github.com/repos",
    REQUEST_API_TOKEN = "ghp_",
        navBorgarButton = document.getElementById("hamburguer-menu"),
        menu = document.getElementById("hamburguer-nav"),
        githubCard1 = document.getElementById("githubCard1"),
        githubCard2 = document.getElementById("githubCard2"),
        githubCard3 = document.getElementById("githubCard3");


navBorgarButton.addEventListener('click', ()=> {
    // Alternate styles for the menu
    menu.classList.toggle("active-menu");
    document.body.classList.toggle("opacity-menu");
});


async function loadMyWebsiteData() {
    const res = await fetch(`${GITHUB_API_URL}/DanielSalmeron3b/My-Website`,{
        headers: {
            'Authorization': `token ${REQUEST_API_TOKEN}`
        },
    });

    const myWebsiteRepoData = await res.json();
    
    console.log("My-Website data loaded");
    console.log(myWebsiteRepoData);

    // Writing on the GitHub card 🐱‍💻
    const h3Title = document.querySelector("#myWebsiteGitHubTitle");
    const titleText = document.createTextNode(myWebsiteRepoData.name);
    h3Title.appendChild(titleText);

    const pDesc= document.querySelector("#myWebsiteGitHubDesc");
    const descText = document.createTextNode(myWebsiteRepoData.description);
    pDesc.appendChild(descText);

    const pStars = document.querySelector("#myWebsiteGitHubStars");
    const starsText = document.createTextNode(`⭐ ${myWebsiteRepoData.stargazers_count}`);
    pStars.appendChild(starsText);

    const pForks = document.querySelector("#myWebsiteGitHubForks");
    const forksText = document.createTextNode(`🍴 ${myWebsiteRepoData.forks}`);
    pForks.appendChild(forksText);
};


async function loadWeatherAppData() {
    const res = await fetch(`${GITHUB_API_URL}/DanielSalmeron3b/weather-app-django`,{
        headers: {
            'Authorization': `token ${REQUEST_API_TOKEN}`
        },
    });

    const weatherAppRepoData = await res.json();
    
    console.log("weather-app-django data loaded");
    console.log(weatherAppRepoData);

    // Writing on the GitHub card 🐱‍💻
    const h3Title = document.querySelector("#wheaterAppGitHubTitle");
    const titleText = document.createTextNode(weatherAppRepoData.name);
    h3Title.appendChild(titleText);

    const pDesc= document.querySelector("#wheaterAppGitHubDesc");
    const descText = document.createTextNode(weatherAppRepoData.description);
    pDesc.appendChild(descText);

    const pStars = document.querySelector("#wheaterAppGitHubStars");
    const starsText = document.createTextNode(`⭐ ${weatherAppRepoData.stargazers_count}`);
    pStars.appendChild(starsText);

    const pForks = document.querySelector("#wheaterAppGitHubForks");
    const forksText = document.createTextNode(`🍴 ${weatherAppRepoData.forks}`);
    pForks.appendChild(forksText);
};


async function loadSCBData() {
    const res = await fetch(`${GITHUB_API_URL}/Crea-J2021/salesianoscoffeebreak`,{
        headers: {
            'Authorization': `token ${REQUEST_API_TOKEN}`
        },
    });

    const SCBRepoData = await res.json();
    
    console.log("SCB data loaded");
    console.log(SCBRepoData);

    // Writing on the GitHub card 🐱‍💻
    const h3Title = document.querySelector("#SCBGitHubTitle");
    const titleText = document.createTextNode(SCBRepoData.name);
    h3Title.appendChild(titleText);

    const pDesc= document.querySelector("#SCBGitHubDesc");
    const descText = document.createTextNode(SCBRepoData.description);
    pDesc.appendChild(descText);

    const pStars = document.querySelector("#SCBGitHubStars");
    const starsText = document.createTextNode(`⭐ ${SCBRepoData.stargazers_count}`);
    pStars.appendChild(starsText);

    const pForks = document.querySelector("#SCBGitHubForks");
    const forksText = document.createTextNode(`🍴 ${SCBRepoData.forks}`);
    pForks.appendChild(forksText);
};


loadMyWebsiteData();
loadWeatherAppData();
loadSCBData();