<!--------------------------- 
     Vue accueil bouton + lien 
    --------------------------->
<div class="col-12 fond" style="height: 85vh;">

	<div class=" d-flex p-5 flex-column justify-content-center">
		<h4 class="p-5 text-center">Je suis..</h4>
		<div class="d-flex p-2 text-center justify-content-center bordered">
			<div class="mx-5">
				<a class="btn btn-outline-dark m-1" href="<?php
															echo base_url("Users/login") ?>">Utilisateurs
					<img src="/adopt-kitty-1/assets/img/icons_users" alt="">
				</a>
			</div>
			<div class="mx-5">
				<a class="btn btn-outline-dark m-1" href="<?php
															echo base_url("Assos/login_assos") ?>">Associations
					<img src="/adopt-kitty-1/assets/img/icons_assos" alt="">
				</a>
			</div>
		</div>
	</div>
</div>