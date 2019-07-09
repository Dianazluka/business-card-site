<?php require 'db.php'; ?>
<hr class="m-0">

		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
			<div class="w-100">
				<h2 class="mb-5">Навыки</h2>
				
				<div class="subheading mb-3">Языки программирования </div>
				<ul class="list-inline dev-icons">
					<li class="list-inline-item">
						<i class="fab fa-html5"></i>
					</li>
					<li class="list-inline-item">
						<i class="fab fa-css3-alt"></i>
					</li>
					<li class="list-inline-item">
						<i class="fab fa-js"></i>
					</li>
										<li class="list-inline-item">
						<i class="fab fa-java"></i>
					</li>
					<li class="list-inline-item">
						<i class="fab fa-c#"></i>
					</li>
					<li class="list-inline-item">
						<i class="fab fa-my-sql"></i>
					</li>
					<li class="list-inline-item">
						<i class="fab fa-php"></i>
					</li>
				</ul>

<h6>JS, Bootstrap</h6>
<div class="progress" >
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">Эх, надо учить и понимать </div>
</div>
<h6>С++, С#, Java</h6>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Вот, что то писала и получалось</div>
</div>
<h6>My Sql</h6>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Если повторить, то что-то сделаю</div>
</div>

<h6>HTML,CSS</h6>
<div class="progress">
  <div class="progress-bar progress-bar-striped  progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Вот, что то знаю, но не все</div>
</div>
	<h6>PHP</h6>
 <div class="progress ">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" >Вот, что то знаю, но не все </div>
</div>
<p></p>   
<br>
				<div class="subheading mb-3">Умения</div><?php while ($row = $skill->fetch_array()){ ?>
			<table>
						
					<ul class="fa-ul mb-0">

					<li>
						<i class="fa-li fa fa-check"></i>
					<?php echo $row["name"] ?>
				</li>
					
				</ul></table><?php } ?>
			</div>
		</section>