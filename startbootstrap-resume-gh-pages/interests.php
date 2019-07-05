
		<hr class="m-0">

		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
			<div class="w-100">
				<h2 class="mb-5">Интересы</h2>
				<?php  $interests = get_interests();
			foreach ($interests as $interest):?>
				<em><?php echo $interest["text"]; ?></em>
				<?php endforeach;?>
			</div>
		</section>