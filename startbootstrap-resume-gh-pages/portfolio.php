<hr class="m-0">
		<section class="resume-section p-5" id="portfolio">
				  <link rel="stylesheet" href="gal.css">
	 <div class="table-responsive">
	 	<h2 class="mb-3">Портфолио</h2>
				
	 	<table class="table table-sm">
	 		<thead class="thead-dark">
	 			<tr>
	 				<th>Название проекта</th>
	 				<th>Описание проекта</th>
	 				<th>Ссылка на проект</th>
	 			
	 			</tr>
	 			
	 		</thead>
	 		<tbody>
	 			<?php while ($row = $portfolio->fetch_array()){ ?>
					
	 			<tr>
	 				<td><?php echo $row["Project_name"]."<br>"; ?></td>
					<td><?php echo $row["description_of _he_project"]."<br>"; ?></td>

						<td><a href="<?php echo $row["reference_to_the_project"] ?>">	<?php echo $row["reference_to_the_project"]."<br>"; ?>
	 					</a>
	 					</td>
   

	 				
	 					
	 					<!---<a href="<?php  echo $value ?>" id="portfo"><img id="portfo"  class="img-fluid" src="<?php  echo $value ?>"></a>
	 					<a href="" id="portfo"><img id="portfo"  class="img-fluid" src="img/1.png"></a>-->

	 				
	 					
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
	 		</tbody> <?php }  ?>
	 	</table>
	 	</div> 
	 	<div class="slideshowe-containere">

  <!-- Full-width images with number and caption text -->
  <div class="mySlide">
    <div class="numbertexte">1 / 8</div>
    <img src="img/1.png" style="width:100%">
  <div class="texte">Справочник гороскопов - вывод данных по дате рождения </div>
  </div>

  <div class="mySlide">
    <div class="numbertexte">2 / 8</div>
    <img src="img/2.png" style="width:100%">
  <p class="texte">Справочник гороскопов - Описание данных по дате рождения</p>
  </div>

  <div class="mySlide">
    <div class="numbertexte">3 / 8</div>
    <img src="img/3.png" style="width:100%">
    <div class="texte">Таблица видов спорта</div>  

    </div>
  <div class="mySlide">
    <div class="numbertexte">4 / 8</div>
    <img src="img/4.png" style="width:100%">
    <div class="texte">База данных Спорт клуб</div>  

  </div>

  <div class="mySlide">
    <div class="numbertexte">5 / 8</div>
    <img src="img/5.png" style="width:100%">
     <div class="texte">Приложение калькулятор на С# </div>
   
  </div>

  <div class="mySlide">
    <div class="numbertexte">6 / 8</div>
    <img src="img/7.png" style="width:100%">
    <div class="texte">Приложение калькулятор на  Java
</div>
  </div>
  <a class="preve" onclick="plusSlidess(-1)">&#10094;</a>
  <a class="nexte" onclick="plusSlidess(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dote" onclick="currentSlides(1)"></span> 
  <span class="dote" onclick="currentSlides(2)"></span> 
  <span class="dote" onclick="currentSlides(3)"></span> 
  <span class="dote" onclick="currentSlides(4)"></span> 
  <span class="dote" onclick="currentSlides(5)"></span> 
  <span class="dote" onclick="currentSlides(6)"></span> 
  
</div>


<script src="galler.js"></script>
      
</section>