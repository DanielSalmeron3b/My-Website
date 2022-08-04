const GITHUB_API_URL = "https://api.github.com/repos",
    // REQUEST_API_TOKEN = "ghp_",
        navBorgarButton = document.getElementById("hamburguer-menu"),
        menu = document.getElementById("hamburguer-nav");


navBorgarButton.addEventListener('click', ()=> {
    // Alternate styles for the menu
    menu.classList.toggle("active-menu");
    document.body.classList.toggle("opacity-menu");
});


async function loadMyWebsiteData() {
    const res = await fetch(`${GITHUB_API_URL}/DanielSalmeron3b/My-Website`
    // ,{
    //     headers: {
    //         'Authorization': `token ${REQUEST_API_TOKEN}`
    //     },
    // }
    );

    const myWebsiteRepoData = await res.json();
    
    // console.log("My-Website data loaded");
    // console.log(myWebsiteRepoData);

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
    const res = await fetch(`${GITHUB_API_URL}/DanielSalmeron3b/weather-app-django`
    );

    const weatherAppRepoData = await res.json();
    
    // console.log("weather-app-django data loaded");
    // console.log(weatherAppRepoData);

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
    const res = await fetch(`${GITHUB_API_URL}/Crea-J2021/salesianoscoffeebreak`);

    const SCBRepoData = await res.json();
    // console.log("SCB data loaded");
    // console.log(SCBRepoData);

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

// YouTube API, Yay!

//https://www.googleapis.com/youtube/v3/search?key=xdddddddddddddd&channelId=UC8ltIHgVCIk4200XXcaHJYg&part=snippet,id&order=date&maxResults=5

let ytApiURL = "https://www.googleapis.com/youtube/v3/search?key=xdddddddddddddd&channelId=UC8ltIHgVCIk4200XXcaHJYg&part=snippet,id&order=date&maxResults=5"

async function loadYouTubeData(ApiURL) {
    const res = await fetch(ApiURL);
    const ytData = await res.json();
    console.log(ytData);
}
/*{
  "kind": "youtube#searchListResponse",
  "etag": "v75cTFTXk-fCSkr-hLqTOtYwx8k",
  "nextPageToken": "CAMQAA",
  "regionCode": "SV",
  "pageInfo": {
    "totalResults": 5,
    "resultsPerPage": 3
  },
  "items": [
    {
      "kind": "youtube#searchResult",
      "etag": "fgw5voXxnH4Im9-iBJu0i2oLAhI",
      "id": {
        "kind": "youtube#video",
        "videoId": "t4tiaN-szvc"
      },
      "snippet": {
        "publishedAt": "2022-04-26T01:31:41Z",
        "channelId": "UC8ltIHgVCIk4200XXcaHJYg",
        "title": "Cómo obtener el HTML de una página web con Python 🐍",
        "description": "shorts #programacion #software #python \u200d   Puedes ver el código aquí: soon... Puedes echarle un vistazo a mis redes y ...",
        "thumbnails": {
          "default": {
            "url": "https://i.ytimg.com/vi/t4tiaN-szvc/default.jpg",
            "width": 120,
            "height": 90
          },
          "medium": {
            "url": "https://i.ytimg.com/vi/t4tiaN-szvc/mqdefault.jpg",
            "width": 320,
            "height": 180
          },
          "high": {
            "url": "https://i.ytimg.com/vi/t4tiaN-szvc/hqdefault.jpg",
            "width": 480,
            "height": 360
          }
        },
        "channelTitle": "SALM Code",
        "liveBroadcastContent": "none",
        "publishTime": "2022-04-26T01:31:41Z"
      }
    },
    {
      "kind": "youtube#searchResult",
      "etag": "QUNc_RFgpfnsTFnWdU1bbbydJyE",
      "id": {
        "kind": "youtube#video",
        "videoId": "InSrn0-ooFQ"
      },
      "snippet": {
        "publishedAt": "2022-04-05T18:00:06Z",
        "channelId": "UC8ltIHgVCIk4200XXcaHJYg",
        "title": "Cómo hacer un background aleatorio con JavaScript | Desarrollo Web con JS",
        "description": "En este video te muestro cómo mostrar un background aleatorio cada vez que se recarga una página web usando JavaScript.",
        "thumbnails": {
          "default": {
            "url": "https://i.ytimg.com/vi/InSrn0-ooFQ/default.jpg",
            "width": 120,
            "height": 90
          },
          "medium": {
            "url": "https://i.ytimg.com/vi/InSrn0-ooFQ/mqdefault.jpg",
            "width": 320,
            "height": 180
          },
          "high": {
            "url": "https://i.ytimg.com/vi/InSrn0-ooFQ/hqdefault.jpg",
            "width": 480,
            "height": 360
          }
        },
        "channelTitle": "SALM Code",
        "liveBroadcastContent": "none",
        "publishTime": "2022-04-05T18:00:06Z"
      }
    },
    {
      "kind": "youtube#searchResult",
      "etag": "FS3wC1shSURY-mLmD2A0O1-Ve_c",
      "id": {
        "kind": "youtube#video",
        "videoId": "AneFek5wkuw"
      },
      "snippet": {
        "publishedAt": "2022-03-26T18:00:08Z",
        "channelId": "UC8ltIHgVCIk4200XXcaHJYg",
        "title": "Cómo cambiar estilos CSS en JavaScript | Introducción",
        "description": "En este video te muestro una introducción al cambio de estilos CSS usando JavaScript. El presente está enfocado a personas ...",
        "thumbnails": {
          "default": {
            "url": "https://i.ytimg.com/vi/AneFek5wkuw/default.jpg",
            "width": 120,
            "height": 90
          },
          "medium": {
            "url": "https://i.ytimg.com/vi/AneFek5wkuw/mqdefault.jpg",
            "width": 320,
            "height": 180
          },
          "high": {
            "url": "https://i.ytimg.com/vi/AneFek5wkuw/hqdefault.jpg",
            "width": 480,
            "height": 360
          }
        },
        "channelTitle": "SALM Code",
        "liveBroadcastContent": "none",
        "publishTime": "2022-03-26T18:00:08Z"
      }
    }
  ]
} */
loadMyWebsiteData();
loadWeatherAppData();
loadSCBData();