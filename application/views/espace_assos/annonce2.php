<?php include(APPPATH . "views/include/header.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php echo form_open('Annonce/annonce3'); ?>
<div class="fond d-flex align-items-center justify-content-center" style="height: 100vh;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 pb-2 bg-white bordered">
				<h4>Poster une annonce de votre animal</h4>

				<div class="inputBox">
					<label for="race_chat">Race de l'animal :</label>
					<select name="race_chat" id="race_chat" required>
						<option value="">Sélectionnez</option>
						<option value="abyssin">Abyssin</option>
						<option value="american bobtail">American Bobtail</option>
						<option value="american curl">American Curl</option>
						<option value="american shorthair">American Shorthair</option>
						<option value="american wirehair">American Wirehair</option>
						<option value="balinese">Balinese</option>
						<option value="bengal">Bengal</option>
						<option value="birman">Birman</option>
						<option value="bombay">Bombay</option>
						<option value="british longhair">British Longhair</option>
						<option value="british shorthair">British Shorthair</option>
						<option value="burmese">Burmese</option>
						<option value="burmilla">Burmilla</option>
						<option value="chartreux">Chartreux</option>
						<option value="chausie">Chausie</option>
						<option value="cornish rex">Cornish Rex</option>
						<option value="cymric">Cymric</option>
						<option value="devon rex">Devon Rex</option>
						<option value="egyptian mau">Egyptian Mau</option>
						<option value="exotic shorthair">Exotic Shorthair</option>
						<option value="havana brown">Havana Brown</option>
						<option value="himalayan">Himalayan</option>
						<option value="japanese bobtail">Japanese Bobtail</option>
						<option value="javanese">Javanese</option>
						<option value="korat">Korat</option>
						<option value="laperm">LaPerm</option>
						<option value="maine coon">Maine Coon</option>
						<option value="manx">Manx</option>
						<option value="munchkin">Munchkin</option>
						<option value="nebelung">Nebelung</option>
						<option value="norwegian forest">Norwegian Forest</option>
						<option value="ocicat">Ocicat</option>
						<option value="oriental">Oriental</option>
						<option value="persian">Persian</option>
						<option value="pixie-bob">Pixie-Bob</option>
						<option value="ragamuffin">Ragamuffin</option>
						<option value="ragdoll">Ragdoll</option>
						<option value="russian blue">Russian Blue</option>
						<option value="savannah">Savannah</option>
						<option value="scottish fold">Scottish Fold</option>
						<option value="selkirk rex">Selkirk Rex</option>
						<option value="siamese">Siamese</option>
						<option value="siberian">Siberian</option>
						<option value="singapura">Singapura</option>
						<option value="snowshoe">Snowshoe</option>
						<option value="somali">Somali</option>
						<option value="sphynx">Sphynx</option>
						<option value="tonkinese">Tonkinese</option>
						<option value="turkish angora">Turkish Angora</option>
						<option value="turkish van">Turkish Van</option>
						<option value="abyssin">Abyssin</option>
						<option value="american bobtail">American Bobtail</option>
						<option value="american curl">American Curl</option>
						<option value="american shorthair">American Shorthair</option>
						<option value="american wirehair">American Wirehair</option>
						<option value="balinese">Balinese</option>
						<option value="bengal">Bengal</option>
						<option value="birman">Birman</option>
						<option value="bombay">Bombay</option>
						<option value="british longhair">British Longhair</option>
						<option value="british shorthair">British Shorthair</option>
						<option value="burmese">Burmese</option>
						<option value="burmilla">Burmilla</option>
						<option value="chartreux">Chartreux</option>
						<option value="chausie">Chausie</option>
						<option value="cornish rex">Cornish Rex</option>
						<option value="cymric">Cymric</option>
						<option value="devon rex">Devon Rex</option>
						<option value="egyptian mau">Egyptian Mau</option>
						<option value="exotic shorthair">Exotic Shorthair</option>
						<option value="havana brown">Havana Brown</option>
						<option value="himalayan">Himalayan</option>
						<option value="japanese bobtail">Japanese Bobtail</option>
						<option value="javanese">Javanese</option>
						<option value="korat">Korat</option>
						<option value="laperm">LaPerm</option>
						<option value="maine coon">Maine Coon</option>
						<option value="manx">Manx</option>
						<option value="munchkin">Munchkin</option>
						<option value="nebelung">Nebelung</option>
						<option value="norwegian forest">Norwegian Forest</option>
						<option value="ocicat">Ocicat</option>
						<option value="oriental">Oriental</option>
						<option value="persian">Persian</option>
						<option value="pixie-bob">Pixie-Bob</option>
						<option value="ragamuffin">Ragamuffin</option>
						<option value="ragdoll">Ragdoll</option>
						<option value="russian blue">Russian Blue</option>
						<option value="savannah">Savannah</option>
						<option value="scottish fold">Scottish Fold</option>
						<option value="selkirk rex">Selkirk Rex</option>
						<option value="siamese">Siamese</option>
						<option value="siberian">Siberian</option>
						<option value="singapura">Singapura</option>
						<option value="snowshoe">Snowshoe</option>
						<option value="somali">Somali</option>
						<option value="sphynx">Sphynx</option>
						<option value="tonkinese">Tonkinese</option>
						<option value="turkish angora">Turkish Angora</option>
						<option value="turkish van">Turkish Van</option>
					</select>
					<h4><?php echo form_error('race_chat'); ?></h4>
				</div>
				<br>
				<div class="inputBox">
					<label for="apparence">Apparence :</label>
					<select name="apparence" id="apparence" required>
						<option value="">Sélectionnez</option>
						<option value="blanc">Blanc</option>
						<option value="noir">Noir</option>
						<option value="marron">Marron</option>
						<option value="tricolore">Tricolore</option>
						<option value="autres">Autres</option>
					</select>
					<h4><?php echo form_error('apparence'); ?></h4>
				</div>
				<br>
				<div class="inputBox">
					<div id="precision_apparence" style="display: none;">
						<label for="precision_apparence">Veuillez préciser :</label>
						<input type="text" name="precision_apparence" id="precision_apparence">
						<h4><?= form_error('precision_apparence'); ?></h4>
					</div>
				</div>

				<br>
				<div class="inputBox">
					<label for="description">Description :</label>
					<textarea name="description" id="description" required></textarea>
					<h4><?php echo form_error('description'); ?></h4>
				</div>

				<a href="<?= site_url('Pensionnaire/annonce'); ?>" class="btn btn-primary">Étape précédente</a>
				<button type="submit" class="btn btn-primary">Étape suivante</button>
			</div>
		</div>
	</div>
</div>


<?php echo form_close(); ?>
<script src="/projet-codeigniter/assets/js/script.js"></script>
</body>

</html>