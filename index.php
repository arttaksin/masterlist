<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MasterList</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<link href="css/uikit.css" rel="stylesheet">
<script src="../vendor/jquery.js"></script>
<script src="js/uikit.js"></script>
<script src="js/uikit.min.js"></script>
</head>

<body>
  <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

	<!-- Header -->
	<?php include("header.php"); ?>

	<!-- Container -->
	<?php
	switch ($_GET["page"]) {
	case "home":
		include("page_home.php");
		break;
	case "RRDO";
		include("page_RRDO.php");
		break;
	case "masterlist":
		include("page_masterlist.php");
		break;
	case "softwarelist":
		include("page_softwarelist.php");
		break;
	case "DO":
		include("page_DO.php");
		break;
    case "register":
      include("page_register.php");
      break;
	default:
		echo "home";
		include("page_home.php");
	}
	?>

	</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">

	<!-- Footer -->
	<?php include("footer.php"); ?>

	</div></td>
  </tr>
</table>
</div>
</body>
</html>
