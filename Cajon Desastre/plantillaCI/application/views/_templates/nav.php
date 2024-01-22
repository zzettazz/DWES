<nav class="container bg-dark  rounded">
	<ul class="nav nav-tabs">

		<li class="nav-item navbar-brand">
			<a class="nav-link " aria-current="page" href="<?= base_url() ?>">
				<img src="<?= base_url() ?>assets/img/icons/home-alt.png" alt="INICIO" style="width:40px;">
			</a>
			<div class="align-right">
				<?php if (!isset($_header['usuario'])): ?>
					<a href="<?= base_url() ?>usuario/login">LOGIN</a>
					<a href="<?= base_url() ?>usuario/c">REGISTRO</a>
				<?php else: ?>
					<span class="text-white">Hola
						<?= $_header['usuario']->loginname ?>
					</span>
					<a href="<?= base_url() ?>usuario/logout">LOGOUT</a>
				<?php endif; ?>
			</div>
		</li>

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
				Listados
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?= base_url() ?>usuario/r">Usuarios</a></li>
			</ul>
		</li>
	</ul>
</nav>