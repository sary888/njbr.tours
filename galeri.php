<?php include 'header.php';?>
	
<div class="section">
	<div class="container">
		<h3 class="text-center">Galeri</h3>
		<?php
			$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");     
            if(mysqli_num_rows($galeri) > 0) {
                while($p = mysqli_fetch_array($galeri)){
		?>

		<div class="col-5">
			<a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link2">
				<div class="thumbnail-box2">
					<div class="thumbnail-img2" style="background-image: url('uploads/galeri/<?= $p['foto'] ?>');">
					</div>
				</div>
			</a>
		</div>

			<!-- Tombol WhatsApp di bawah -->
			<div class="whatsapp-button" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
			    <a href="https://wa.me/6281245678978?text=Assalamualaikum,%20Saya%20Ingin%20Berkonsultasi%20" 
			       target="_blank" 
			       style="display: flex; align-items: center; justify-content: center; background-color: #25D366; color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); transition: background-color 0.3s, transform 0.3s;">
			        <img src="https://img.icons8.com/color/48/whatsapp.png" alt="WhatsApp" style="width: 30px;"/>
			    </a>
			</div>

			<style>
			    .whatsapp-button a:hover {
			        background-color: #128C7E; /* Darker green on hover */
			        transform: scale(1.1); /* Slightly increase size */
			    }
			</style>


		<?php }} else { ?>

		<p>Tidak Ada Data</p>

		<?php } ?>
	</div>
</div> 

<?php include 'footer.php';?>
