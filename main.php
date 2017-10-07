<?php
    include 'session.php';
?>
<!--ส่วนของเนื้อหา-->
<body>

	<!-- Header -->
	<?php include("header.php"); ?>

	<!-- Container -->
    <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
	<div class="uk-grid" data-uk-grid-margin>

                <div class="uk-width-medium-4">
                    <h2>Home</h2>
                    <hr>
                    <article class="uk-article">

                        <h1 class="uk-article-title">
                        </h1>
                        <?php include("note_it.php"); ?>

                    </article>
            </div>

    </div>
    </div>
<br><br><br>

	<!-- Footer -->
	<?php include("footer.php"); ?>

</body>
</html>
