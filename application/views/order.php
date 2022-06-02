
<?php
$this->load->view('header');
?>

			<!-- form order-->
			<section class="Order">
				<div class="containers">
					<h1 align="center">FORM ORDER</h1><br />
					<div class="container">
						<form action="<?php echo base_url('index.php/order/tambah_pesanan')?>" method="POST">
							<label for="fname" style="margin-left:30px;">Nama Pemesan</label><br />
							<input type="text" id="fname" readonly value="<?php echo $this->session->userdata['nama']; ?>" name="nama" placeholder="Masukan Nama Anda.."><br />
							<label for="fname" style="margin-left:30px;">No. Handphone</label><br />
							<input type="text" id="fname" name="nomer_hp" placeholder="Masukan Nomor Handphone.."><br />
							<label for="fname" style="margin-left:30px;">Nama Kue</label><br />
							<select name='kue'>
								<option></option>
								<option value='blackforest'>Black Forest</option>
								<option value='redvelvet'>Red Velvet</option>
								<option value='lapislegit'>Lapis Legit</option>
								<option value='bikaambon'>Bika Ambon</option>
								<option value='rotitawar'>Roti Tawar</option>
								<option value='puding'>Puding Cake Buah</option>
							</select><br>
							<label for="lname" style="margin-left:30px;">Jumlah Pesanan</label><br />
							<input type="number" id="lname" name="jumlah" placeholder="Masukan Jumlah Pesanan"><br />
							<label for="subject" style="margin-left:30px;">Alamat</label><br />
							<textarea id="subject" name="alamat" placeholder="Write something.." style="height:200px"></textarea><br />
							<label for="subject" style="margin-left:30px;">Catatan</label><br />
							<textarea id="subject" name="catatan" placeholder="Write something.." style="height:200px"></textarea><br />

							<button type="submit" class="btn btn-success" style="margin-left:200px;">Konfirmasi</button>
						</form>
					</div>
			</section>
			<div class="footer">Design by Uenak &copy 2016</div>
			<?php
$this->load->view('footer');
?>