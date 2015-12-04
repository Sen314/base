<div class="row">
	<div class="col-md-8 col-lg-offset-2">
		<?php
		/* Test class News*/
		$news = new App_Model_News();
		$news= $news->getNews();
		var_dump($news);
		?>
	</div>
</div>
