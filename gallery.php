<?php
include './inc/db.php';
include './inc/functionsGallery.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM film ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- SearchBAR -->
<?php
$articles = $pdo->prepare('SELECT title, id FROM film ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $pdo->prepare('SELECT title, id FROM film WHERE title LIKE "%'.$q.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $pdo->query('SELECT title, id FROM film WHERE CONCAT(title) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>

<!-- HEADER -->
<!-- php -->
<?php 
include './header.php' ;
?>


<!-- section-->
<div class="content home">
	<div class="start">
	<form class="form-inline my-2 my-lg-0" style="margin-right:100">
        <input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form><br>
	</div>
		<?php
		if (isset($q)){
		if($articles->rowCount() > 0) { ?>
   		<ul>
   		<?php while($a = $articles->fetch()) { ?>
      	<li><p><a href="comments.php?id=<?php echo $a['id']?>"><?php echo $a['title']?></a></p></li>
   		<?php } ?>
   		</ul>
		<?php } else { ?>
		Aucun résultat pour: <?php echo $q ?>...
		<?php }}?>
	<div class="images">
		<?php
			foreach ($images as $image): ?>
			<a href="comments.php?id=<?php echo $image['id'] ?>">
			<img src="<?=$image['path']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>"></a>
		<?php endforeach;?>
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
			//MAKE A LINK bn watch now and trailer page!!!
			image_popup.innerHTML = `

<h3>${img_meta.dataset.title}</h3>
<p>${img_meta.alt}</p>

<!-- FOOTER PHP -->
<?php
include './footer.php';
?>