<hr class="m-0">
		<section class="resume-section p-5" id="portfolio">
				
	 <div class="table-responsive">
	 	<h2 class="mb-5">Портфолио</h2>
				
	 	<table class="table table-sm">
	 		<thead class="thead-dark">
	 			<tr>
	 				<th>Название проекта</th>
	 				<th>Описание проекта</th>
	 				<th>Ссылка на проект</th>
	 				<th>Внешний вид проекта</th>
	 			</tr>
	 		</thead>

	 		<tbody>
	 			<?php  $portfolio = get_portfolio();
			foreach ($portfolio as $portfoli):?>
	 			<tr>
	 				<td><?php echo $portfoli["Project_name"]; ?></td>
					<td><?php echo $portfoli["description_of _he_project"]; ?></td>

						<td><a href="">	<?php echo $portfoli["reference_to_the_project"]; ?>
	 					</a>
	 					</td>

	 				<td>
	 					<a  id="portfo"><img id="portfo" src="<?php echo $portfoli["appearance_to_the_project"]; ?>" class="img-fluid"></a></td>
	 					
	 		<!--			<a href="img/gor1.png" id="portfo"><img id="portfo" src="img/gor1.png" class="img-fluid"></a>
	 					</td>-->
	 			</tr>
<!--
	 			<tr>
	 				<td>База данных Спорт клуб</td>
					<td>База данных с фреймворком и запросами</td>
	 				<td>	<a href="img/bd.png" id="portfo"><img id="portfo" src="img/bd.png" class="img-fluid"></a>
	 					<a href="img/bd1.png" id="portfo"><img id="portfo" src="img/bd1.png" class="img-fluid"></a>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>Приложение калькулятор на С# и Java</td>
					<td>Операясь на методичку и сайты сделать приложение калькулятор, и провести тестирование на ошибки которые могут появится во время работы </td>
	 				<td>	<a href="img/calc.png" id="portfo"><img id="portfo" src="img/calc.png" class="img-fluid"></a>
	 					<a href="img/calc1.png" id="portfo"><img id="portfo" src="img/calc1.png" class="img-fluid"></a>
	 					
	 				</td>
	 			</tr>-->
	 		</tbody><?php endforeach;?>
	 	</table>
</div>        
</section>