<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php echo form_open(); ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pb-2 bg-white bordered">
					<h4>Poster une annonce de votre animal</h4>
					<?php if (isset($popup) && $popup === true) { ?>
                        <h5>Vous avez complété notre formulaire<br>Vous allez être redirigé vers notre page d'accueil</h5>
                        <?php header('refresh:3;url=' . base_url('Users')); ?>
                    <?php } ?>

							<div class="inputBox">
								<label for="maladie">L'animal a-t-il des maladies ?</label>
								<select name="maladie" id="maladie">
									<option value="">Sélectionnez</option>
									<option value="oui">Oui</option>
									<option value="non">Non</option>
								</select>
								<h4><?= form_error('maladie_select'); ?></h4>
							</div>
							<br>
							<div class="inputBox">
								<div id="maladie_select" style="display: none;">
									<select name="list_maladie" id="liste_maladie">
										<option value="selectionnez">Sélectionnez</option>
										<option value="coryza">Coryza</option>
										<option value="leucose_feline">Leucose féline</option>
										<option value="typhus">Typhus</option>
										<option value="chlamydiose">Chlamydiose</option>
										<option value="fiv">Sida du chat (FIV)</option>
										<option value="felv">Leucémie virale (ou FeLV)</option>
										<option value="rvf">Rhinotrachéite Virale Féline (RVF)</option>
										<option value="autres">Autres</option>
									</select>
									<h4><?= form_error('liste_maladie'); ?></h4>
								</div>
							</div>
							<br>
							<div class="inputBox">
								<label for="puce_chat">N° Identification :</label>
								<input type="number" name="puce_chat" id="puce_chat" placeholder="Son numéro d'identification (facultatif)">
								<h4><?php echo form_error('puce_chat'); ?></h4>
							</div>
							<br>
						
							<a href="<?= site_url('Publi/annonce2'); ?>" class="btn btn-primary">Étape précédente</a>
                <button type="submit" class="btn btn-primary">Envoyer</button>
								



					
			</div>
		</div>
	</div>
</div>


		<?php echo form_close(); ?>
		<script src="/projet-codeigniter/assets/js/script.js"></script>
		</body>

		</html>