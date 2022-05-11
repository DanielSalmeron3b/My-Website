<?php require('./layouts/header.php') ?>


<main>

    <div class="window main-window--header">
        <h1>SALMERÓN ALVARADO</h1>
    </div>
    <section class="window main-window--body">
        <div class="window-body--header">
            <div class="window--icons">
                <img class="icon-close" src="./assets/img/close-icon.png">
                <img class="icon-minimize" src="./assets/img/minimize-icon.png">
                <img class="icon-open" src="./assets/img/icon-open.png">
            </div>
        </div>
        <hr>
        <div class="window-body--content">
            <h2>Hi I'm Salmerón 👋, a web developer</h2>
            <img src="./assets/img/dogwifhat.jpg" class="main-photo" alt="Photo of myself">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita amet molestiae obcaecati facilis non. Molestiae autem doloribus iure earum quis.</p>
        </div>
    </section>

</main>

<article class="window window--body">
    <div class="window-body--header">
        <h2>Technologies</h2>
        <div class="window--icons">
            <img class="icon-close" src="./assets/img/close-icon.png">
            <img class="icon-minimize" src="./assets/img/minimize-icon.png">
            <img class="icon-open" src="./assets/img/icon-open.png">
        </div>
    </div>
    <hr>
    <div class="second-window--body window-body--content">

        <h2>Backend</h2>

        <div class="second-window--backend">
            <div class="window-backend--django">
                <h3>Django 🤠</h3>
                <img src="./assets/img/mint-Django-Logo.png" alt="Django">
            </div>
            <div class="window-backend--php">
                <h3>PHP 🐘</h3>
                <img src="./assets/img/php-purple-logo.png" alt="PHP">
            </div>
        </div>

        <h2>Frontend</h2>

        <div class="second-window--frontend">
            <div class="window-frontend--js">
                <h3>JavaScript 🌐</h3>
                <img src="./assets/img/js-pink-logo.png" alt="JavaScript">
            </div>
            <div class="window-frontend--html_css">
                <h3>HTML & CSS 💻</h3>
                <img src="./assets/img/html_css-mint.png" alt="html and CSS">
            </div>
        </div>

        <h2>CMS</h2>

        <div class="second-window--cms">
            <div class="window-cms--wordpress">
                <h3>WordPress 📝</h3>
                <img src="./assets/img/WordPress-pint-logo.png" alt="WordPress">
            </div>
            <div class="window-cms--wordpress">
                <h3>WordPress 📝</h3>
                <img src="./assets/img/WordPress-pint-logo.png" alt="WordPress">
            </div>
        </div>

    </div>
</article>

<article class="window window--body">
    <div class="window-body--header">
        <h2>Github projects</h2>
        <div class="window--icons">
            <img class="icon-close" src="./assets/img/close-icon.png">
            <img class="icon-minimize" src="./assets/img/minimize-icon.png">
            <img class="icon-open" src="./assets/img/icon-open.png">
        </div>
    </div>
    <hr>
    <div class="third-window--body window-body--content">
        <div class="window-body--cards">
            <div class="body-card--github">
                <div class="left-card--github">
                    <h3>My-Website</h3>
                    <p>This is my Website, where you can find
                        everything about me and what I do 👨🏽‍💻</p>
                </div>
                <div class="right-card--github">
                    <p>⭐ 0</p>
                    <p>🍴 0</p>
                </div>
            </div>

            <div class="body-card--github">
                <div class="left-card--github">
                    <h3>weather-app-django</h3>
                    <p>This is my first app using django 🥳.
                        You just have to write the city of which you want to know
                        its climate.</p>
                </div>
                <div class="right-card--github">
                    <p>⭐ 0</p>
                    <p>🍴 0</p>
                </div>
            </div>

            <div class="body-card--github">
                <div class="left-card--github">
                    <h3>SCB</h3>
                    <p>This is my Website, where you can find
                        everything about me and what I do 👨🏽‍💻</p>
                </div>
                <div class="right-card--github">
                    <p>⭐ 0</p>
                    <p>🍴 0</p>
                </div>
            </div>
        </div>
    </div>
</article>


<?php require('./layouts/footer.php') ?>