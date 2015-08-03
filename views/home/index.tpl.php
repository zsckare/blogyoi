<section>
	<?php foreach ($values as $row) {?>
		<div class="card padding-largo">
			<div class="row">
				<div class="col s4 m4 l4">
					<a href="/post/read/?id_post=<?=$row["id_post"]; ?>">
						<img src="<?=$row["cover_post"]; ?>" alt="" class="responsive-img">
					</a>
				</div>
				<div class="col s8 m8 l8">
					<div class="row">
						<a href="/post/read/?id_post=<?=$row["id_post"]; ?>"><h4 class=""><?=$row["title_post"]; ?></h4></a>
					</div>
					<div class="row">
						<p class="truncate" ><?=$row["content_post"]; ?></p>
					</div>
					<div class="row">
						<a href="/post/read/?id_post=<?=$row["id_post"]; ?>" class="right">Ver Mas...</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</section>