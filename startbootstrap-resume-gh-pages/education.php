
<html lang="ru">
<hr class="m-0">
		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
			<div class="w-100">
				<h2 class="mb-5">Оброзование</h2>

		<?php while ($row = $educations->fetch_array()){ ?>
				
			
				<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
					<div class="resume-content">
						<h3 class="mb-0"><?php echo $row["name"]."<br>"; ?></h3>
						<div class="subheading mb-3"><?php echo $row["specialization"]; ?></div>
						
						<div><?php echo $row["profession"]; ?></div>
						</div>
					<div class="resume-date text-md-right">
						<span class="text-primary"><?php echo $row["start date"]."<br>"; 
						echo $row["end of study"]."<br>";?></span>
					</div>
				</div>

		<?php } ?>

			</div>
		</section>
</html>