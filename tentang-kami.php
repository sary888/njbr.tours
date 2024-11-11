<?php include 'header.php'; ?>

<div class="section about-us">
    <div class="container3">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <img src="uploads/identitas/<?= $d->foto_travel ?>" alt="Travel Image">
                <img src="uploads/identitas/gambar.png ?>"alt="Travel Image">
                <img src="uploads/identitas/mekkah2.png ?>" alt="Travel Image">
            </div>
            <div class="text-content" div data-aos="fade-right" data-aos-duration="10000" data-aos-delay="800">
                <h3>Tentang Kami</h3>
                <p><?= $d->tentang_kami ?></p>
            </div>
            <div class="vision-mission"div data-aos="fade-left" data-aos-duration="12000" data-aos-delay="800">
                <h3>Visi dan Misi</h3>
                <h4>Visi Kami</h4>
                <p>Menjadi penyedia layanan ibadah Umroh dan Haji yang mengutamakan kenyamanan jamaah dengan pelayanan yang tulus, jujur, dan In Shaa Allah amanah, sesuai dengan peraturan Kementerian Agama Republik Indonesia.</p>
                <h4>Misi Kami</h4>
                <p>Memberikan layanan terbaik dengan jaminan keberangkatan aman, kemudahan pembayaran, edukasi paket ibadah, dan kerjasama dengan mitra terpercaya di Tanah Suci untuk memastikan kualitas layanan maksimal..</p>
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
    </div>
</div>

<?php include 'footer.php'; ?>
