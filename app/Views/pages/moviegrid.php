	<div class="hero common-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-ct">
						<h1>Os Melhores Filmes só Aqui.</h1>
						<ul class="breadcumb">
							<li class="active"><a href="#">Inicio</a></li>
							<li> <span class="ion-ios-arrow-right"></span> Lista de Filmes</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="topbar-filter fw">
						<p>Encontrados <span>21 Filmes</span></p>
						<label>Classificação :</label>
						<select>
							<option value="popularity">Comédia</option>
							<option value="popularity">Romance</option>
							<option value="rating">Aventura</option>
							<option value="rating">Ação</option>
							<option value="date">Terror</option>
							<option value="date">Suspense</option>
						</select>
						<a href="movielist.html" class="list"><i class="ion-ios-list-outline "></i></a>
						<a href="moviegridfw.html" class="grid"><i class="ion-grid active"></i></a>
					</div>
				
					<div class="flex-wrap-movielist mv-grid-fw">
						<?php foreach ($Filme as $Filme_item) : ?>
							<div class="movie-item-style-2 movie-item-style-1">
								<img src="/assets/images/uploads/mv1.jpg" alt="">
								<div class="hvr-inner">
									<a href="moviesingle.html"> Leia Mais <i class="ion-android-arrow-dropright"></i> </a>
								</div>
								<div class="mv-item-infor">
									<h6><a href="#"><?php echo $Filme_item['Nome'] ?></a></h6>
									<p class="rate"><i class="ion-android-star"></i><span>	<?php echo $Filme_item['Nota'] ?></span><?php echo $Filme_item['Data'] ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="topbar-filter">
						<label>Próximo Filme:</label>
						<select>
							<option value="range">20 Filmes</option>
							<option value="saab">10 Filmes</option>
						</select>

						<div class="pagination2">
							<span>Página 1 de 5:</span>
							<a class="active" href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>