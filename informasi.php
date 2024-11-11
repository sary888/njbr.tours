	<?php include 'header.php';?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Tips, Informasi, dan Inspirasi Ibadah</h3>
			<?php
				$informasi = mysqli_query($conn, "SELECT *FROM informasi ORDER by id DESC");     
                    if(mysqli_num_rows($informasi) > 0) {
                    	while($p = mysqli_fetch_array($informasi)){
			?>

				
			<div class="col-4">
				<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
				<div class="thumbnail-box">
					<div class="thumbail-img" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="600" style= "background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
				</div>

				<div class="thumbnail-text" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="700" style="color: black; text-align: center; font-weight: bold;">
			    <?= substr($p['judul'], 0, 100) ?>
				</div>

			</div>
			</a>
			</div>

			<?php }}else{ ?>

				Tidak Ada Data

			<?php } ?>
		</div>
	</div> 

	<?php include 'footer.php';?>