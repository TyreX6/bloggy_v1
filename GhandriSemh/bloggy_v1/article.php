<?php require_once("header.inc.php");
	require_once('classes/Article.php');
	$c = new Article();
	$article = $_GET['id'];
	$c->getArticle($article);

?>
<h2 class="page-title"><?php echo $c->_titre; ?></h2>
<div class="row" id="content">
	<div class="col-md-9" id="content_text">
		<?php echo $c->_texte; ?>
	</div>
	<div class="col-md-3 hidden-xs" id="sidebar">
		<?php echo $c->_d_ajout ?>
	</div>
</div>

<?php

	require_once("footer.inc.php"); ?>
