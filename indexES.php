<?php require('./layouts/header.php') ?>


<main>

    <div class="window main-window--header">
        <h1>SALMERÓN ALVARADO</h1>
    </div>
    <section class="window main-window--body">
        <div class="window-body--header">
            <?php require('./layouts/window-icons.php') ?>
        </div>
        <hr>
        <div class="window-body--content">
            <h2>Hola soy Salmerón 👋, un desarrollador web</h2>
            <img src="./assets/img/dogwifhat.jpg" class="main-photo" alt="Photo of myself">
            <p>Soy un programador autodidacta
                y mi sueño es impactar la vida de las personas para mejor
                a través de mi código 🌐.
                <br>
                Mis principales lenguajes de programación son JavaScript y Python.
                Pero estoy probando otros lenguajes 😄.
            </p>
        </div>
    </section>

</main>

<article class="window window--body">
    <div class="window-body--header">
        <h2>Tecnologías</h2>
        <?php require('./layouts/window-icons.php') ?>
    </div>
    <hr>
    <div class="second-window--body window-body--content">

        <h2>Backend</h2>

        <div class="second-window--backend second-window--tech">
            <div class="window-backend--django">
                <h3>Django 🤠</h3>
                <img src="./assets/img/django-mint-logo.png" alt="Django">
            </div>
            <div class="window-backend--php">
                <h3>PHP 🐘</h3>
                <img src="./assets/img/php-purple-logo.png" alt="PHP">
            </div>
        </div>

        <h2>Frontend</h2>

        <div class="second-window--frontend second-window--tech">
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

        <div class="second-window--cms second-window--tech">
            <div class="window-cms--wordpress">
                <h3>WordPress 📝</h3>
                <img src="./assets/img/WordPress-purple-logo.png" alt="WordPress">
            </div>
            <!-- <div class="window-cms--wordpress">
                <h3>WordPress 📝</h3>
                <img src="./assets/img/WordPress-pint-logo.png" alt="WordPress">
            </div> -->
        </div>

        <h2>Commits</h2>

        <div class="second-window--commits second-window--tech">
            <div class="window-commits--git">
                <h3>Git 🖇️</h3>
                <img src="./assets/img/git-pink-logo.png" alt="">
            </div>
            <div class="window-commits--github">
                <h3>Github 🐱‍💻</h3>
                <img src="./assets/img/github-mint-logo.png" alt="">
            </div>
            <div class="window-commits--gitlab">
                <h3>GitLab 🦊</h3>
                <img src="./assets/img/gitlab-purple-logo.png" alt="">
            </div>
        </div>

    </div>
</article>

<article class="window window--body">
    <div class="window-body--header">
        <h2>Proyectos en GitHub</h2>
        <?php require('./layouts/window-icons.php') ?>
    </div>
    <hr>
    <div class="third-window--body window-body--content">
        <div class="window-body--cards">
            <div class="body-card--github">
                <div class="left-card--github">
                    <h3 id="myWebsiteGitHubTitle"></h3>
                    <p id="myWebsiteGitHubDesc"></p>
                </div>
                <div class="right-card--github">
                    <p id="myWebsiteGitHubStars"></p>
                    <p id="myWebsiteGitHubForks"></p>
                </div>
            </div>

            <div class="body-card--github">
                <div class="left-card--github">
                    <h3 id="wheaterAppGitHubTitle"></h3>
                    <p id="wheaterAppGitHubDesc"></p>
                </div>
                <div class="right-card--github">
                    <p id="wheaterAppGitHubStars"></p>
                    <p id="wheaterAppGitHubForks"></p>
                </div>
            </div>

            <div class="body-card--github">
                <div class="left-card--github">
                    <h3 id="SCBGitHubTitle"></h3>
                    <p id="SCBGitHubDesc"></p>
                </div>
                <div class="right-card--github">
                    <p id="SCBGitHubStars"></p>
                    <p id="SCBGitHubForks"></p>
                </div>
            </div>
        </div>
    </div>
</article>


<?php require('./layouts/footerES.php') ?>