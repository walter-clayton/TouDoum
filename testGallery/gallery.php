<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FontAwesome link -->
    <script src="https://kit.fontawesome.com/23325f0d76.js" crossorigin="anonymous"></script>
    <!-- Call JQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- icons library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23325f0d76.js"></script>
    <!-- Bootsrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style2.css">
    <title>TouDoum - Watch Your Favourite Series & Movies Online</title>
</head>

<body>

</body>
<!-- php -->
<?php 
include '../header.php' ;
?>



<!-- PHP -->
<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HEADER -->
<!-- < ?=template_header('Gallery')?> -->

<div class="content home">
	<h2>Gallery</h2>
	<p>Welcome to the gallery page, you can view the list of images below.</p>
	<a href="upload.php" class="upload-image">Upload Image</a>
	<div class="images">
		<?php foreach ($images as $image): ?>
		<a href="#">
			<img src="<?=$image['path']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
			<span><?=$image['description']?></span>
		</a>
		<?php endforeach; ?>
	</div>
</div>
<div class="image-popup"></div>

<!-- JS -->
<script>
// Container we'll use to show an image
let image_popup = document.querySelector('.image-popup');
// Loop each image so we can add the on click event
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container if user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>


<!-- FOOTER PHP-->
<!-- < ?=template_footer()?> -->


<!-- FOOTER PHP -->
<?php
include '../footer.php';
?>

</html>