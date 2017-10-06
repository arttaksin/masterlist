<?php
    include 'session.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MasterList</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link href="css/uikit.min.css" rel="stylesheet">
<link href="css/uikit.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/uikit.js"></script>
<script src="js/uikit.min.js"></script>
</head>

<body>

	<!-- Header -->
	<?php include("header.php"); ?>

	<!-- Container -->
    <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
	<div class="uk-grid" data-uk-grid-margin>

                <div class="uk-width-medium-4">
                    <h2>Home</h2>
                    <article class="uk-article">

                        <h1 class="uk-article-title">
                        </h1>
                        <?php include("note_it.php"); ?>

                    </article>
            </div>

    </div>
    </div>


	<!-- Footer -->
	<?php include("footer.php"); ?>

</body>
</html>
