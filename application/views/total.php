<?php
$this->load->view('header');
?>
			<!-- form order-->
			<section class="Order">
				<div class="containers">
					<h1 align="center">FORM ORDER</h1><br />
					<div class="container">
						<form action="<?=base_url('index.php/order/konfirmasi_pembayaran') ?>" method="POST">
							<?php
							foreach ($pesanan as $total) {
							?>
								<label for="fname" style="margin-left:30px;">Nama Pemesan</label><br />
								<input type="text" id="fname" name="nama" readonly value="<?= $total->nama_pemesan ?>"><br />
								<label for="fname" style="margin-left:30px;">No. Handphone</label><br />
								<input type="text" id="fname" name="nomer_hp" readonly value="<?= $total->nomer_hp ?>" disabled><br />
								<label for="fname" style="margin-left:30px;">Nama Kue</label><br />
								<select disabled aria-readonly="true" name='kue'>
									<option value="<?= $total->kue ?>">Black Forest</option>
									<option value='blackforest'>Black Forest</option>
									<option value='redvelvet'>Red Velvet</option>
									<option value='lapislegit'>Lapis Legit</option>
									<option value='bikaambon'>Bika Ambon</option>
									<option value='rotitawar'>Roti Tawar</option>
									<option value='puding'>Puding Cake Buah</option>
								</select><br>
								<label for="lname" style="margin-left:30px;">Jumlah Pesanan</label><br />
								<input type="number" id="lname" name="jumlah" readonly disabled value="<?= $total->jumlah ?>"><br />
								<label for="lname" style="margin-left:30px;">Total</label><br />
								<input type="number" id="lname" name="jumlah" readonly disabled value="<?= $total->total ?>"><br />
								<label for="country" style="margin-left:30px;">Bayar</label><br /><br />
								<input type="number" id="lname" name="bayar"><br />
								<div style="padding-left: 10.5rem;">
									<label for="subject" style="margin-left:30px;">Catatan</label><br />
									<!-- <input type="text"> -->
									<textarea id="subject" name="catatan" disabled style="height:200px"><?= $total->catatan ?></textarea><br />
								</div>
								<button type="submit" style="margin-left:200px;">Bayar</button>
							<?php } ?>
						</form>
					</div>
			</section>
			<div class="footer">Design by Uenak &copy 2016</div>
		</div>
</body>

</html>