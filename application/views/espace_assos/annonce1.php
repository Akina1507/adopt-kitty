<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php echo form_open('Publi/annonce2'); ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pb-2 bg-white bordered">
					<h4>Poster une annonce de votre animal</h4>
					
							<div class="inputBox">
								<label for="nom_chat">Nom :</label>
								<input type="text" name="nom_chat" id="nom_chat" placeholder="Nom de l'animal" required>
								<h4><?php echo form_error('nom_chat'); ?></h4>
							</div>
							<br>
							<div class="inputBox">
								<label for="img_chat">Image :</label>
								<input type="file" name="img_chat" id="img_chat" required>
							</div>
							<br>
							<div class="inputBox">
								<label for="age_chat">Age :</label>
								<select name="age_chat" id="age_chat" required>
									<option value="">Sélectionnez</option>
									<option value="3 mois">3 mois</option>
									<option value="4 mois">4 mois</option>
									<option value="5 mois">5 mois</option>
									<option value="6 mois">6 mois</option>
									<option value="7 mois">7 mois</option>
									<option value="8 mois">8 mois</option>
									<option value="9 mois">9 mois</option>
									<option value="10 mois">10 mois</option>
									<option value="11 mois">11 mois</option>
									<option value="1 an">1 an</option>
									<option value="2 ans">2 ans</option>
									<option value="3 ans">3 ans</option>
									<option value="4 ans">4 ans</option>
									<option value="5 ans">5 ans</option>
									<option value="6 ans">6 ans</option>
									<option value="7 ans">7 ans</option>
									<option value="8 ans">8 ans</option>
									<option value="9 ans">9 ans</option>
									<option value="10 ans">10 ans</option>
									<option value="11 ans">11 ans</option>
									<option value="12 ans">12 ans</option>
									<option value="13 ans">13 ans</option>
									<option value="14 ans">14 ans</option>
									<option value="15 ans">15 ans</option>
									<option value="16 ans">16 ans</option>
									<option value="17 ans">17 ans</option>
									<option value="18 ans">18 ans</option>
									<option value="19 ans">19 ans</option>
									<option value="20 ans">20 ans</option>
								</select>
								<h4><?php echo form_error('age_chat'); ?></h4>
							</div>
							<br>
							<div class="inputBox">
								<label for="sexe_chat">Sexe :</label>
								<select name="sexe_chat" id="sexe_chat" required>
									<option value="">Sélectionnez</option>
									<option value="male">Mâle</option>
									<option value="femelle">Femelle</option>
								</select>
								<h4><?php echo form_error('sexe_chat'); ?></h4>
							</div>
							<br>
						
						<button type="submit" class="btn btn-primary">Étape suivante</button>



						
						
					
			</div>
		</div>
	</div>
</div>


		<?php echo form_close(); ?>
		<script src="/projet-codeigniter/assets/js/script.js"></script>
		</body>

		</html>