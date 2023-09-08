<?php
include(APPPATH . "views/include/header.php")
?>

<!--------------------------- 
     Vue home bouton + lien 
    --------------------------->
<div class="row">
	<div class="bottom-0 start-0  padding-10-20 d-flex flex-column justify-content-center align-items-center">
		<h4 class="p-5 text-center">Je suis..</h4>
		<div class="d-flex p-2 text-center justify-content-center bordered">
			<div class="mx-5">
				<a class="btn btn-outline-dark m-1" href="<?php
															echo base_url("Users/login") ?>">Utilisateurs
					<img src="/adopt-kitty/assets/img/icons_users" alt="">
				</a>
			</div>
			<div class="mx-5">
				<a class="btn btn-outline-dark m-1" href="<?php
															echo base_url("Users/login_assos") ?>">Associations
					<img src="/adopt-kitty/assets/img/icons_assos" alt="">
				</a>
			</div>
		</div>
	</div>
</div>

<?php
include(APPPATH . "views/include/footer.php")
?>