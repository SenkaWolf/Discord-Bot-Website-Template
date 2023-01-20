<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
		include("includes/header.php");
	?>

    <title>Aris Bot | 404 Error</title>
</head>

<body>

    <?php 
		include("includes/nav.php");
	?>


    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                The page you’re looking for doesn’t exist.
                </p>
            <a href="index" class="btn btn-accent">Go Home</a>
        </div>
    </div>



    <?php 
	    include("includes/footer.php");
    ?>

    <?php 
        include("includes/javascript.php");
    ?>
</body>

</html>