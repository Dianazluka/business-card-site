<html lang="ru">
<hr class="m-0">
		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
			<div class="w-100">
				<h2 class="mb-5">Оброзование</h2>

		<?php  $educations = get_educations();
			foreach ($educations as $education):?>
				
			
				<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
					<div class="resume-content">
						<h3 class="mb-0"><?php echo $education["name"]; ?></h3>
						<div class="subheading mb-3"></div>
						<div><?php echo $education["specialization"]; ?></div>
						</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $education["start date"]; 
						echo $education["end of study"];?></span>
					</div>
				</div>

		<?php endforeach;?>

			</div>
		</section>
</html>