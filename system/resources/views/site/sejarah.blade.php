<x-app>
    <style>
        body {
            background-color: #fff;
        }

        .hero-banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-image: url('{{ url("public/landing/assets/images/tampilandepan3.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-banner::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-banner h1 {
            position: relative;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            /* Tidak ada garis bawah */
        }

        .sejarah-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            color: #333;
            font-size: 16px;
            line-height: 1.8;
        }

        .sejarah-container p {
            text-align: justify;
        }

        .sejarah-container ol,
        .sejarah-container ul {
            padding-left: 20px;
            margin-top: 10px;
        }

        .sejarah-container li {
            margin-bottom: 8px;
        }
    </style>

    <body>

        <!-- Banner Judul -->
        <div class="hero-banner">
            <h1>SEJARAH JDIH</h1>
        </div>

        <!-- Konten -->
        <div class="sejarah-container">
            <p><strong>Berikut Pemaparan Terkait Sejarah Awal Mula Berdirinya JDIH Kabupaten Ketapang</strong></p>

            <p>
                Pembentukan Jaringan Dokumentasi dan Informasi Hukum (JDIH) Kabupaten Ketapang merupakan bagian dari upaya pemerintah daerah dalam mewujudkan keterbukaan informasi hukum dan meningkatkan pelayanan publik di bidang dokumentasi hukum.
            </p>

            <p>
                Sebagai tindak lanjut dari arahan Badan Pembinaan Hukum Nasional (BPHN) dan berdasarkan rekomendasi hasil berbagai lokakarya dan pembinaan, Pemerintah Kabupaten Ketapang membentuk JDIH dengan tujuan untuk menghimpun, mengelola, dan mendistribusikan dokumen hukum secara tertib, terpadu, dan berkesinambungan.
            </p>

            <p>Dalam pelaksanaannya, pengelolaan JDIH Ketapang dihadapkan pada sejumlah tantangan, antara lain:</p>

            <ol>
                <li>Dokumen hukum tersebar di berbagai perangkat daerah dan belum terdokumentasi secara sistematis;</li>
                <li>Belum seluruh dokumen hukum terdigitalisasi atau dikelola dalam sistem elektronik;</li>
                <li>Keterbatasan sumber daya manusia yang memahami pengelolaan dokumentasi hukum;</li>
                <li>Masih rendahnya kesadaran akan pentingnya dokumentasi hukum sebagai bagian dari tata kelola pemerintahan yang baik.</li>
            </ol>

            <p>
                Untuk menjawab tantangan tersebut, Pemerintah Kabupaten Ketapang mengambil langkah strategis melalui pengembangan sistem JDIH berbasis website.
            </p>

            <p>Beberapa langkah yang dilakukan dalam pengembangan JDIH Ketapang antara lain:</p>

            <ol>
                <li>
                    Menyusun kebijakan internal tentang pengelolaan dokumentasi dan informasi hukum di lingkungan Pemerintah Kabupaten Ketapang;
                </li>
                <li>
                    Melakukan digitalisasi dokumen hukum dan integrasi ke dalam sistem JDIH:
                    <ol type="a">
                        <li>Memberikan kemudahan pencarian dan akses terhadap peraturan daerah, keputusan bupati, dan dokumen hukum lainnya;</li>
                        <li>Meningkatkan kecepatan pelayanan informasi hukum yang dapat diakses oleh masyarakat, akademisi, dan pemangku kepentingan lainnya.</li>
                    </ol>
                </li>
            </ol>

            <p>
                Saat ini, JDIH Kabupaten Ketapang terus dikembangkan dengan dukungan dari BPHN sebagai pusat jaringan, serta berkolaborasi dengan bagian hukum dan perangkat daerah lainnya.
            </p>
            
        </div>
    </body>
</x-app>
