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
            <h2>My YouTube Channel, SALM Code!</h2>
            <br>
            <iframe src="https://www.youtube.com/embed/InSrn0-ooFQ">
            </iframe>
            <br>
            <p>This is my YouTube channel, here I share some of my programming knowledge and projects with the world.</p>
            <p><b>NOTE:</b> I only upload videos in Spanish.</p>
            <br>
            <a class="yt-visit-button" href="https://www.youtube.com/channel/UC8ltIHgVCIk4200XXcaHJYg" target="_blank">Visit YT Channel</a>
        </div>
    </section>

</main>

<?php require('./layouts/footer.php') ?>