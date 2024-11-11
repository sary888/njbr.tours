<?php include 'header.php'; ?>

<div class="section">
        <div class="container text-center">
            <h3 class="text-center">Jadwal Paket Umroh</h3>

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

</div>

<?php include 'footer.php'; ?>
