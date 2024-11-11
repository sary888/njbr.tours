	<?php include 'header.php';?>
	<!-- bagian banner -->
	<div class="banner-container">
		<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_travel ?>');">
    	<div class="banner-text">
        	<h3>-----UMROH SESUAI SUNNAH DENGAN NHENKJBR TOURS-----</h3>
        	<p>Umroh dan Haji Furoda Resmi, Sesuai Sunah, dan Langsung Berangkat Tanpa Antre. Bersama Nhenk Jbr Tours, Nikmati Pengalaman Ibadah yang Aman, Halal, dan Terjangkau.</p>
        	<!-- Tombol WhatsApp -->
	        	 	<a href="https://wa.me/6281245678978?text=Assalamualaikum,%20Saya%20Ingin%20Berkonsultasi%20" 
	                   target="_blank" 
	                   class="btn-whatsapp" 
	                   style="display: inline-block; background-color: #25D366; color: white; padding: 8px 16px; border-radius: 5px; text-decoration: none; font-weight: bold; font-size: 14px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); margin-top: 5px;">
	                    Konsultasi Umroh
	       			</a>
		    	</div>
			</div>
		</div>
	</div>

	<!-- Bagian Sambutan -->
	<div class="section" style="background-color: white; padding: 40px 0;">
	    <div class="container2" style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">
	        <div class="welcome" data-aos="fade-right" data-aos-duration="2000" style="flex: 2; padding: 20px; max-width: 500px;">
	            <h3 style="font-size: 2.5em; color: #2c3e50; margin-bottom: 20px;">Selamat Datang di NHENKJBR TOURS</h3>
	            <p style="font-size: 1.2em; color: #34495e; line-height: 1.6;">
	                Langsung Berangkat, Ibadah Khusyuk Tanpa Hambatan. Kami adalah penyedia layanan perjalanan Umroh dan Haji yang mengutamakan kenyamanan dan keberkahan. Berdiri sejak 2022 setelah berkonsorsium dengan beberapa travel PPIU bersertifikat A, kami fokus menghadirkan paket Umroh Murah, Umroh Sesuai Sunnah, dan Haji Furoda Resmi dengan jaminan keberangkatan pasti.
	            </p>
	        </div>

	        <div class="welcome-text" data-aos="fade-left" data-aos-duration="2000" style="flex: 1; padding: 20px; max-width: 500px; background: rgba(255, 215, 0, 0.2); border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.5);">
	            <h3>Nilai Plus NhenkJbr Tours?</h3>
	            <p>
	                <img width="40" height="40" src="https://img.icons8.com/color/48/stack-of-money.png" alt="stack-of-money" />
	                Sistem Pembayaran COD (Cash On Destination)
	            </p>
	            <p>
	                <img width="40" height="40" src="https://img.icons8.com/emoji/48/hundred-points.png" alt="hundred-points" />
	                AMAN & TENANG: Tanpa DP, Tanpa Jaminan & Tanpa Riba
	            </p>
	            <p>
	                <img width="40" height="40" src="https://img.icons8.com/color/48/approval--v1.png" alt="approval--v1" />
	                Bisa Umroh by Request: Bebas pilih Pesawat, Jadwal, Fasilitas Hotel, Angkutan, dsb
	            </p>
	            <p>
	                <img width="40" height="40" src="https://img.icons8.com/color/48/novel--v1.png" alt="novel--v1" />
	                Bisa Umroh Berdua atau Umroh Private
	            </p>
	            <p>
	                <img width="40" height="40" src="https://img.icons8.com/color/48/accompany-skin-type-1.png" alt="accompany-skin-type-1" />
	                Bagi kamu yang backpacker-an: Kita bisa bantu Visa & Siskopatuhnya
	            </p>
	        </div>
	    </div>
	</div>


	<!-- bagian jadwal paket umroh -->
	<div class= "section" id="jadwal-paket-umroh">

		<div class="container text-center">
			<h3>Jadwal Paket Umroh</h3>

			<?php
				$jadwal_paket_umroh = mysqli_query($conn, "SELECT *FROM jadwal_paket_umroh ORDER by id DESC");
				if(mysqli_num_rows($jadwal_paket_umroh) > 0){
					while($j = mysqli_fetch_array($jadwal_paket_umroh)){
			?>

				<div class="col-4">
					<a href="detail-jadwal-paket-umroh.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" div data-aos="zoom-in" data-aos-duration="3000" style= "background-image: url('uploads/jadwal/<?= $j['gambar'] ?>');">
					</div>

					<div class="thumbnail-text" div data-aos="zoom-in" data-aos-duration="4000" style="color: black; text-align: center; font-weight: bold;">
				    <?= substr($j['nama'], 0, 100) ?>
					</div>
				</div>
			</a>
			</div>

			<?php }}else{ ?>

				Tidak Ada Data

			<?php } ?>

		</div>

	</div>

	<!-- Bagian Our Services -->
	<div class="section" style="background-color: #f9f9f9; padding: 40px 0;">
	    <div class="container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
	        <div class="welcome" style="padding: 20px; text-align: center;">
	            <h3 style="font-size: 2.5em; color: #2c3e50; margin-bottom: 20px;">Mengapa Memilih NhenkJbr Tours</h3>
	            <p style="font-size: 1.2em; color: #34495e; line-height: 1.6;">
	                Kami menawarkan layanan yang sesuai syariat, keberangkatan langsung, harga terjangkau, dan pengalaman terpercaya untuk memastikan ibadah Anda berjalan dengan lancar dan memuaskan.
	            </p>
	        </div>

	        <!-- Kotak-kotak -->
	        <div class="boxes" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; width: 100%;">
	            <!-- Kotak 1 -->
	            <div class="box" data-aos="fade-up"  data-aos-duration="1000" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center; flex: 1 1 200px; aspect-ratio: 5 / 4;">
	                <img width="48" height="48" src="https://img.icons8.com/officel/40/online-support.png" alt="online-support"/>
	                <h4 style="font-size: 1.4em; color: #2c3e50;">Pelayanan Cepat</h4>
	                <p style="font-size: 0.9em; color: #34495e;">
	                    Tim Customer Servis kami siap membantu anda kapanpun dan dimanapun dengan sigap.
	                </p>
	            </div>
	            <!-- Kotak 2 -->
	            <div class="box" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="200" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center; flex: 1 1 200px; aspect-ratio: 5 / 4;">
	                <img width="48" height="48" src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/external-luggage-travel-flatart-icons-flat-flatarticons.png" alt="external-luggage-travel-flatart-icons-flat-flatarticons"/>
	                <h4 style="font-size: 1.4em; color: #2c3e50;">Bagasi Leluasa</h4>
	                <p style="font-size: 0.9em; color: #34495e;">
	                    Jangan takut dengan batas bagasi yang sangat kecil, karena kami memberikan kapasitas yang lega untuk keperluan utama anda.
	                </p>
	            </div>
	            <!-- Kotak 3 -->
	            <div class="box" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="400" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center; flex: 1 1 200px; aspect-ratio: 5 / 4;">
	                <img width="48" height="48" src="https://img.icons8.com/emoji/48/hotel-emoji.png" alt="hotel-emoji"/>
	                <h4 style="font-size: 1.4em; color: #2c3e50;">Hotel Nyaman</h4>
	                <p style="font-size: 0.9em; color: #34495e;">
	                    Tidak ada lagi kekhawatiran tentang hotel yang tidak sesuai dan menyulitkan perjalanan penting anda bersama kami.
	                </p>
	            </div>
	            <!-- Kotak 4 -->
	            <div class="box" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="600" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center; flex: 1 1 200px; aspect-ratio: 5 / 4;">
	                <img width="48" height="48" src="https://img.icons8.com/emoji/48/kaaba-emoji.png" alt="kaaba-emoji"/>
	                <h4 style="font-size: 1.4em; color: #2c3e50;">Fokus Ibadah</h4>
	                <p style="font-size: 0.9em; color: #34495e;">
	                    Dengan segala bentuk fasilitas dan pendampingan kami, kamu bisa fokus dengan Ibadah Haji dan Umrah kamu.
	                </p>
	            </div>
	        </div>
	    </div>
   </div>

	<!-- bagian informasi -->
	<div class="section">

		<div class= "container text-center">
			<h3> Tips, Informasi, dan Inspirasi Ibadah </h3>

			<?php
				 $informasi = mysqli_query($conn, "SELECT *FROM informasi ORDER by id DESC LIMIT 8");     
                 if(mysqli_num_rows($informasi) > 0) {
                 	while($p = mysqli_fetch_array($informasi)){
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="600" style= "background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
					</div>

					<div class="thumbnail-text" data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="700" style="color: black; text-align: center; font-weight: bold;">
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
	<!-- Bagian lainnya ... -->

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


	
	<?php include 'footer.php';?>