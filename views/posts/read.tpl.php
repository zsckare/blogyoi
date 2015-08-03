<article class="card" >
	<?php foreach ($values as $row) { ?>
	
		<div class="row" style="">
			<div class="col s12 m12 l12">
				<img src="<?=$row["cover_post"]; ?>" alt="" class="max-tam">
			</div>
		</div>
		<div class="row">
			<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
				<div class="row">
					<h4><?=$row["title_post"]; ?></h4>
				</div>
				<div class="row">
					<?=$row["content_post"]; ?>
				</div>
			</div>
		</div>
	
	
	<?php } ?>
</article>