<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HEADER -->
<!-- php -->
<?php 
include '../header.php' ;
?>

<div class="content home">
	<div class="start">
	<h2 style="color:red">Check out our latest movies!</h2>
	<p>Welcome to our Movies and Series database!</p>
	</div>
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
			//MAKE A LINK bn watch noe and trailer page!!!
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="#" class="watch" style="text-decoration:none; color:red" title="Watch"><i class="fas fa-tv fa-2x" style="margin:10; color:red"></i> Watch Now</a>
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
</body>


</html>