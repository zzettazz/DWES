<nav class="container bg-dark  rounded">
	<ul class="nav nav-tabs">

		<li class="nav-item navbar-brand">
			<a class="nav-link " aria-current="page" href="<?=base_url()?>">
				<img src="<?= base_url() ?>assets/img/icons/home-alt.png" alt="INICIO" style="width:40px;">
			</a>
			<?php if (!isset($_header['persona'])): ?>
				<a href="<?=base_url()?>persona/login">LOGIN</a>
				<a href="<?=base_url()?>persona/c">REGISTRO</a>
			<?php else: ?>
				<span class="text-white">Hola <?= $_header['persona']->nombre ?></span>
				<a href="<?=base_url()?>persona/logout">LOGOUT</a>
			<?php endif; ?>
		</li>

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
				Listados
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?=base_url()?>pais/r">Países</a></li>
				<li><a class="dropdown-item" href="<?=base_url()?>aficion/r">Aficiones</a></li>
				<li><a class="dropdown-item" href="<?=base_url()?>persona/r">Personas</a></li>
			</ul>
		</li>
	</ul>
</nav>