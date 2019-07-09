
		<hr class="m-0">

		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
			<div class="w-100">
				<h2 class="mb-5">Интересы</h2>
				<?php while ($row = $interests->fetch_array()){ ?>
				<em><?php echo $row["text"]; ?></em>
				<?php } ?>
			</div>
		</section>