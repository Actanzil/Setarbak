-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 13.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setarbak_website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `tanggal`, `judul`, `isi`) VALUES
(2, 1, '2021-01-01', 'Robusta Coffe', '<p><span style=\"font-size:16px\">Robusta berasal dari kata &lsquo;<em>robust</em>&rsquo; yang artinya kuat, sesuai dengan gambaran postur (<em>body</em>) atau tingkat kekentalannya yang kuat. Kopi robusta bukan merupakan spesies karena jenis ini turunan dari spesies&nbsp;<em>Coffea canephora</em>. Robusta dapat tumbuh di dataran rendah, namun lokasi paling baik untuk membudidayakan tanaman ini pada ketinggian 400-800 meter dpl. Suhu optimal pertumbuhan&nbsp;kopi robusta berkisar 24-30oC dengan curah hujan 2000-3000 mm per tahun.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kopi robusta sangat cocok ditanam di daerah tropis yang basah. Dengan budidaya intensif akan mulai berbuah pada umur 2,5 tahun. Agar berbuah dengan baik, tanaman ini membutuhkan waktu kering 3-4 bulan dalam setahun dengan beberapa kali turun hujan.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tanaman kopi robusta menghendaki tanah yang gembur dan kaya bahan organik. Tingkat keasaman tanah (pH) yang ideal untuk tanaman ini 5,5-6,5. Kopi robusta dianjurkan dibudidayakan dibawah naungan pohon lain.</span></p>\r\n\r\n<h2><span style=\"font-size:16px\">Karaktersitik tanaman</span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Cabang reproduksi atau wiwilan pada kopi robusta tumbuh tegak lurus. Buah kopi dihasilkan dari cabang primer yang tumbuh mendatar. Cabang primer ini cukup lentur sehingga membentuk tajuk seperti payung.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bentuk daun membulat seperti telur dengan ujung daun runcing hingga tumpul. Daun-daunnya tumbuh pada batang, cabang dan ranting. Pada batang dan cabang tumbuhnya tegak lurus dengan susunan daun berselang-seling. Sedangkan pada ranting dan cabang-cabang mendatar pasangan daun tumbuh pada bidang yang sama. Robusta lebih relatif tahan terhadap penyakit karat daun.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tanaman kopi robusta sudah mulai berbunga pada umur 2 tahun. Bunga tumbuh pada ketiak cabang primer. Setiap ketiak terdapat 3-4 kelompok bunga. Bunga biasanya mekar diawal musim kemarau. Berbeda dengan arabika, bunga robusta melakukan penyerbukan secara silang.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Buah yang masih muda berwarna hijau, setelah masak berubah menjadi merah. Meski telah matang penuh, buah robusta menempel dengan kuat pada tangkainya. Jangka waktu dari mulai berbunga hingga buah siap panen berkisar 10-11 bulan.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tanaman kopi robusta memiliki perakaran yang dangkal. Oleh karena itu membutuhkan tanah yang subur dan kaya kandungan organik. Tanaman ini juga cukup sensitif terhadap kekeringan.</span></p>\r\n\r\n<h2><span style=\"font-size:16px\">Jenis klon kopi robusta</span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Kopi robusta diturunkan dari beberapa spesies terutama&nbsp;<em>Canephora</em>. Mungkin karena alasan itu, sumber bibit tanaman untuk robusta tidak disebut varietas melainkan klon.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Sama dengan varietas pada arabika, klon unggul robusta di Indonesia dikembangkan oleh&nbsp;<a href=\"http://iccri.net/bahan-tanam-kopi/\" target=\"_blank\">Puslit Koka</a>. Berikut ini beberapa jenis klon robusta yang direkomendasikan lembaga tersebut:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Klon BP308. Klon ini merupakan tanaman unggul yang tahan terhadap serangan nematoda. Keistimewaan lain klon robusta ini adalah toleran terhadap tanah yang kurang subur. BP308 dianjurkan untuk dijadikan batang bawah, sedangkan batang atasnya disambung dengan klon-klon lain yang disesuaikan dengan agroklimat setempat.</span></li>\r\n	<li><span style=\"font-size:16px\">Klon BP42. Klon jenis ini memiliki produktivitas 800-1200 kg/ha/tahun. Perawakannya sedang dengan banyak cabang dan ruasnya pendek. Buah yang dihasilkan besar dan dompolannya rapat.</span></li>\r\n	<li><span style=\"font-size:16px\">Klon SA436. Memiliki produktivitas yang cukup tinggi, mencapai 1600-2800 kg/ha/tahun. Bentuk biji dari klon ini kecil dan ukurannya tidak seragam.</span></li>\r\n	<li><span style=\"font-size:16px\">Klon BP234. Produktivitasnya 800-1200 kg/ha/tahun. Perawakan ramping dengan percabangan yang panjang dan lentur. Butiran buah agak kecil dan ukurannya tidak seragam.</span></li>\r\n</ul>\r\n\r\n<h2><span style=\"font-size:16px\">Karakteristik produk</span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Dipasaran, kopi robusta dijual dengan harga lebih rendah dibanding arabika. Hal ini menyebabkan disinsentif terhadap petani. Sehingga untuk menghemat biaya produksi petani robusta cenderung mengabaikan penanganan pasca panen. Pada gilirannya akan membuat mutu kopi yang dihasilkan rendah.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Aroma robusta tidak sekuat arabika, dengan tingkat kekentalan (<em>body</em>) sedang hingga berat dan citarasa pahit. Kandungan kafein robusta lebih dari dua kali lipat arabika, yaitu berkisar 1,7-4%.</span></p>\r\n\r\n<h2><span style=\"font-size:16px\">Perdagangan kopi robusta</span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Sekitar 99% perdagangan kopi dunia adalah jenis robusta dan arabika. Kopi robusta banyak diproduksi oleh negara-negara Asia-Pasific dan Afrika, sedangkan kopi arabika banyak diproduksi oleh negara-negara Amerika Selatan. Penghasil robusta terbesar adalah Vietnam.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Terdapat paradoks dalam perkembangan perdagangan robusta. Pada tahun 1950-an ketika pertama kali diperdagangkan di bursa London, tingkat harganya relatif sama dengan arabika. Saat itu proporsi pangsa pasar kopi robusta 25-30% dan arabika 70-75%.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Keadaan mulai berubah ketika terjadi kenaikan produksi kopi robusta. Saat ini dimana pangsa pasarnya naik diatas 30%, harganya anjlok dibawah arabika hingga hampir setengahnya. Tentu saja ini sangat mengkhawatirkan mengingat lebih dari 80% produksi kopi Indonesia adalah robusta.</span></p>\r\n'),
(13, 5, '2021-06-05', 'Kopi, Secangkir Minuman yang Nikmat', '<p>Kopi merupakan salah satu minuman yang paling digemari banyak orang. Dari setiap tiga orang di dunia, salah satunya adalah peminum kopi. Kopi memang sungguh nikmat jika diminum baik pagi hari, atau saat malam hari ketika pekerjaan menumpuk. Kopi merupakan salah satu minuman yang paling dinikmati banyak orang, yang tidak sekadar diteguk saja, namun juga dinikmati. Bisnis kopi pun telah menjadi bisnis puluhan milyar dolar, yang hanya mampu disaingi oleh bisnis minyak bumi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sejarah Penyebaran Kopi</strong></p>\r\n\r\n<p>Biji tanaman kopi dipanggang lalu dihaluskan dan dihidangkan. Metode pemanggangan biji kopi sendiri belum diketahui kapan dimulainya. Namun tanaman kopi berasal dari dataran tinggi di Ethiopia, yang pada saat itu merupakan tanaman liar di Ethiopia. Lalu tanaman kopi dari sini dikembangkan di Semenanjung Arab sekitar abad ke-15, yang terkenal menjadi Kopi Arabika. Kopi Arabika saat ini menjadi jenis kopi yang paling banyak diproduksi di dunia yaitu mencapai lebih dari 60% produksi kopi dunia.</p>\r\n\r\n<p>Menurut legenda, kopi ditemukan oleh seorang pemuda Arab bernama Kaldi, seorang penggembala kambing. Ia selalu memperhatikan bahwa kambingnya selalu menunjukkan gejala gembira setelah menggigit biji dan daun suatu tanaman hijau. Karena penasaran, ia mencoba biji tanaman tersebut dan merasakan efek semangat serta gembira. Akhirnya penemuan ini menyebar dari mulut ke mulut, sejak itu lahirlah kopi menurut legenda di Arab.</p>\r\n\r\n<p>Pada tahun 1610, tanaman kopi pertama ditanam di daerah India. Bangsa Belanda mulai mempelajari pengembangbiakan kopi pada tahun 1614. Lalu pada tahun 1616, mereka berhasil memperoleh bibit dan tanaman kopi yang subur dan langsung mendirikan perkebunan kopi di Srilanka dan tanah Jawa (Indonesia) pada tahun 1699. Kemudian oleh bangsa Belanda, tanaman ini disebar ke koloni Belanda di Amerika Tengah seperti di Suriname dan Kepulauan Karibia. Kemudian bangsa Perancis juga tertarik dengan perdagangan kopi ini. Mereka membeli bibit kopi dari Belanda lalu dikembangkan di Pulau Reunion sebelah timur Madagaskar. Namun mereka gagal mengembangkan kopi di sini. Lalu pada tahun 1723, bangsa Perancis mencoba mengembangkan tanaman kopi di daerah Pulau Martinik. Pada tahun 1800-an, tanaman kopi dikembangkan di Hawaii. Belakangan tanaman ini juga dikembangkan di Brasil dan daerah-daerah lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Asal Kata Kopi</strong></p>\r\n\r\n<p>Kata kopi atau dalam bahasa Inggris coffee berasal dari bahasa Arab qahwah, yang berarti kekuatan. Kemudian kata kopi yang kita kenal saat ini berasal dari bahasa Turki yaitu kahveh yang kemudian belakangan menjadi koffie dalam bahasa Belanda dan coffee dalam bahasa Inggris. Kata tersebut diserap ke dalam bahasa Indonesia menjadi KOPI.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kopi pada Zaman Dahulu hingga Sekarang</strong></p>\r\n\r\n<p>Awalnya kopi digunakan sebagai produk makanan. Kemudian kopi digunakan sebagai pengganti minuman anggur. Belakangan kopi digunakan juga sebagai obat. Dan saat ini kopi terkenal sebagai minuman yang cukup digemari. Kopi juga digunakan sebagai makanan. Seluruh biji kopi dihancurkan, lalu ditambahkan minyak. Lalu adonan ini dibentuk berbentuk bundar dan menjadi makanan. Sampai saat ini, beberapa suku di Afrika masih memakan kopi dalam bentuk seperti itu.</p>\r\n\r\n<p>Belakangan, kopi digunakan sebagai pengganti minuman anggur. Biji kopi dibuat sebagai minuman yang mirip dengan anggur. Beberapa orang membuat minuman seperti ini dengan menuangkan air mendidih ke biji kopi yang sudah dikeringkan.</p>\r\n\r\n<p>Sebagai obat, kopi dapat bermanfaat untuk mengobati migrain, sakit kepala, gangguan jantung, asma kronis dan gangguan buang air. Meski demikian, untuk konsumsi kopi berlebih bisa berakibat buruk. Jika mengkonsumsi kopi secara belebih dapat meningkatkan asam lambung, menyebabkan ketegangan, dan mempercepat detak jantung. Selain itu, konsumsi kopi secara berlebih, sering dikaitkan dengan sakit maag.</p>\r\n\r\n<p>Saat ini, kopi digunakan sebagai minuman yang cukup nikmat. Biji kopi dikeringkan lalu dipanggang dan digiling dalam batok. Hasilnya kemudian bisa menjadi minuman kopi yang nikmat. Belakangan ditemukan mesin penggiling biji kopi yang memudahkan produksi kopi sebagai minuman.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Berbagai Macam Kegunaan Kopi</strong></p>\r\n\r\n<p>Berbagai rasa kopi yang khas membuat sensasi menyenangkan di mulut. Misalnya es kopi atau iced coffee yang manis biasanya menyegarkan. Es krim rasa kopi pun juga menjadi favorit bagi banyak orang. Kopi juga menjadi salah satu bahan dasar beberapa jenis kue rasa kopi. Dan yang paling populer adalah kopi polos dan juga kopi susu.</p>\r\n\r\n<p>Namun para ilmuwan juga menyelediki manfaat lain dari kopi. Sisa bubuk dari kopi bermanfaat sebagai pupuk yang baik. Selain itu, beberapa produk disinfektan maupun isolasi untuk dinding, lantai dan atap juga dapat dibuat dari kopi. Gliserin yang merupakan produk sampingan dari sabun, dapat dibuat dari minyak kopi. Minyak kopi juga biasa digunakan sebagai bahan pembuat cat, sabun, maupun produk lainnya. Biji kopi dapat bermanfaat untuk berbagai produk dan kegunaan. Namun yang paling populer tentu saja sebagai minuman yang nikmat yang diminum banyak orang setiap harinya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kopi Arabika dan Kopi Robusta</strong></p>\r\n\r\n<p>Meski di seluruh dunia ada sekitar 70 spesies pohon kopi, dari yang berukuran seperti semak belukar hingga pohon dengan tinggi 12 meter, namun hanya ada dua spesies pohon kopi yang secara umum dikenal untuk diproduksi sebagai produk kopi. Kedua spesies ini digunakan untuk produksi sekitar 98 persen produksi kopi dunia. Apa sajakah itu? Kopi yang pertama kali dikembangkan di dunia adalah Kopi Arabika yang berasal dari spesies pohon kopi Coffea arabica. Kopi jenis ini yang paling banyak diproduksi, yaitu sekitar lebih dari 60 persen produksi kopi dunia. Kopi arabika dari spesies Coffea arabica menghasilkan jenis kopi yang terbaik. Pohon spesies ini biasanya tumbuh di daerah dataran tinggi. Tinggi pohon kopi ini antara 4 hingga 6 meter. Kopi arabika memiliki kandungan kafein tidak lebih dari 1,5 persen serta memiliki jumlah kromosom sebanyak 44 kromosom.</p>\r\n\r\n<p>Pohon kopi spesies lainnya yang juga cukup banyak diproduksi sebagai produk kopi adalah Coffea canephora yang sering dikenal sebagai Kopi Robusta. Tinggi pohon Coffea canephora mencapai 12 meter dan dapat ditanam di daerah yang lebih rendah dibanding kopi arabika. Kopi robusta biasanya digunakan sebagai kopi instant atau cepat saji. Kopi robusta memiliki kandungan kafein yang lebih tinggi, rasanya lebih netral, serta aroma kopi yang lebih kuat. Kandungan kafein pada kopi robusta mencapai 2,8 persen serta memiliki jumlah kromosom sebanyak 22 kromosom. Produksi kopi robusta saat ini mencapai sepertiga produksi kopi seluruh dunia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dilema Minum Kopi dan Bahaya Kopi</strong></p>\r\n\r\n<p>Meski minum kopi sungguh nikmat, namun minuman ini sering memunculkan berbagai dilema. Beberapa penelitian menunjukkan bahaya dari minum kopi. Bahkan pada jaman dahulu, di Timur Tengah, kopi sempat menjadi minuman yang haram karena sering menimbulkan efek negatif. Apa saja bahaya dari kopi yang nikmat ini?</p>\r\n\r\n<p>Konsumsi kopi telah dikenal begitu luas dewasa ini, dan berbagai peringatan dari para ahli telah berulang kali diungkapkan selama bertahun-tahun terhadap banyaknya bahaya yang mengancam para peminum kopi. Hasil penelitian menunjukkan bahwa para penggemar kopi harus mewaspadai bahaya yang bisa timbul dari kebiasaan minum kopi mereka. Bahaya tersebut antara lain penyakit jantung, diabetes dan bahkan beberapa jenis kanker. Meski demikian, banyak orang mengabaikan peringatan ini. Mengapa?</p>\r\n\r\n<p>Selama beberapa tahun belakangan ini, para peneliti telah mempublikasikan hasil penelitian mereka mengenai akibat minum kopi. Namun kesimpulan yang dibuat para peneliti ini belum sampai ke kesimpulan yang meyakinkan. Mengapa? Karena biasanya para peneliti hanya meneliti bahaya dari kafein, salah satu dari 500 kandungan kimia alami dalam secangkir kopi. Jadi sebenarnya penelitian terhadap kopi memang masih belum final dan masih jauh lebih kompleks.</p>\r\n\r\n<p>Kafein yang terkandung dalam kopi memiliki efek stimulan yang cukup berbahaya. Kafein dapat menyebabkan seseorang sulit tidur. Kafein juga menyebabkan seseorang sulit mengendalikan emosi serta sulit berkonsentrasi. Kafein juga diindikasikan bisa memicu kanker.</p>\r\n\r\n<p>Sebuah penelitian di Belanda menunjukkan bahwa kopi dapat meningkatkan kolesterol hingga 10 persen. Khususnya jika kopi yang diminum tanpa disaring dan langsung dipanaskan. Kolesterol sendiri dikenal sebagai penyebab gangguan jantung. Seorang ahli nutrisi dari Inggris merekomendasikan untuk minum kopi yang segar dan bukan kopi yang sudah diolah, dipanaskan dan dididihkan selama beberapa waktu.</p>\r\n\r\n<p>Bagi para penggemar kopi, para ahli menyarankan untuk minum kopi secara wajar. Hindari minum lebih dari enam cangkir kopi dalam sehari. Bagi mereka yang mengalami gangguan jantung, gangguan ginjal dan tekanan darah tinggi sebaiknya minum kopi cukup satu cangkir sehari. Untuk wanita hamil dan menyusui, sebaiknya juga minum tidak lebih dari secangkir kopi sehari. Kopi memang nikmat, namun kesehatan jauh lebih penting dibanding menikmati kopi secara berlebih. Selamat menikmati secangkir kopi Anda!</p>\r\n'),
(14, 6, '2021-03-25', 'Tren Kopi di Kalangan Mahasiswa', '<p>Di era sekarang banyak remaja yang sering mengikuti tren ngopi di cafe ataupun coffee shop. Dulu memang ngopi identik dengan minuman orang tua tapi dengan maraknya cafe dan coffee shop mejadikan tren baru diberbagai kalangan masyarakat khususnya mahasiswa. Beberapa orang merasa bangga ketika mengunjungi sebuah cafe atau coffee shop, padahal mereka belum tentu menikmati kopi itu sendiri.</p>\r\n\r\n<p>Gaya hidup ini berpandangan bahwa kita harus mengikuti tren dan cenderung ikut-ikutan agar tidak ketinggalan jaman. Kedai kopi kini menjadi bagian dari gaya hidup milenial sembari ngobrol dan berdiskusi. Apalagi ditempat tersebut di lengkapi dengan fasilitas wifi dan live musik. Minum kopi di coffee shop juga merupakan kegiatan sosial yang menguntungkan, karena dapat bertemu dan bersosialisasi dengan temannya bahkan orang lain. Bukan hanya di akhir pekan, kedai-kedai kopi penuh dengan pengunjung bahkan di jam-jam kerja hari biasa. Tren minum kopi juga sangat terasa juga di kalangan muda, Tentu saja dengan adanya tren minum kopi ini, banyak pihak yang terbantu terutama dari sisi bisnis coffee shop itu sendiri. Banyak orang yang berani membuka usaha coffee shop dengan kopi sebagai salah satu menu andalan. Selain itu dari sisi petani pun banyak yang disejahterakan karena kopi yang semakin banyak dibutuhkan di era sekarang.</p>\r\n\r\n<p>Walaupun sedikit pahit, kopi dapat memberikan manfaat bagi tubuh jika diminum sesuai dengan porsinya. American Academy of Pediatrics hanya merekomendasikan sebanyak 100 mg kafein yang hanya dapat dikonsumsi perhari. Penelitian dari Fredrick Brustad (2017) menyebutkan bahwa kopi dapat mencegah terjadinya berbagai penyakit. Diantaranya yaitu mencegah diabetes tipe 2, mencegah Parkinson dan Alzheimer dan meringankan sakit kepala.</p>\r\n\r\n<p>Sebagian mahasiswa mengonsumsi kopi pada pagi hari dapat meningkatkan konsentrasi saat kuliah, kopi yang mengandung kafein dapat meningkatkan kesadaran. Dan mengkonsumsi kopi yang mengandung kafein saat malam hari agar tetap terjaga ketika mengerjakan tugas, dan sebagian lain hanya sekedar menikmati kopi ketika hang-out bersama teman-teman.</p>\r\n\r\n<p>Namun disamping adanya manfaat, jika mengonsumsi kopi terlalu berlebihan dapat menyebabkan dampak negatif, seperti gangguan tidur, remaja yang masih dalam masa pertumbuhan membutuhkan waktu tidur yang cukup, hal ini akan terganggu jika terlalu banyak mengkonsumsi kafein. Dehidrasi, sakit perut, sulit konsentrasi, meningkatkan tekanan darah, dan kecemasan juga dapat timbul meskipun kafein yang dikonsumsi sedikit, dan dalam jangka Panjang dapat menyebabkan kemandulan. karena<br />\r\ntoleransi kadar kafein setiap orang berbeda-beda.</p>\r\n'),
(15, 7, '2021-03-26', 'Tips Menjadi Seorang Barista', '<p>Apa Anda tahu apa itu Barista? Barista adalah orang yang bekerja membuat dan menyajikan minuman kopi untuk para pelanggan di kedai atau&nbsp;coffee shop. Boleh dibilang, ia&nbsp;merupakan ujung tombak yang menentukan secangkir kopi bisa enak dinikmati oleh khalayak. Oleh karenanya, ia harus memiliki pengetahuan yang mumpuni dalam hal perkopian.</p>\r\n\r\n<p>Bagi Anda yang kerap&nbsp;ngopi&nbsp;di cafe atau&nbsp;coffee shop,&nbsp;istilah barista adalah sesuatu yang lazim terdengar. Lalu apa itu barista kopi? Apa saja tugas dan keahliannya? Mengapa hanya bisa ditemui di tempat&nbsp;ngopi&nbsp;khas Italia? Bagi Anda yang belum tahu, barista adalah sebutan bagi orang yang meracik&nbsp;kopi di&nbsp;coffee shop.&nbsp;Meski&nbsp;terdengar sepele, tugasnya&nbsp;ternyata tidak mudah dan butuh keahlian. Para peracik kopi ini juga tidak sembarangan, butuh latihan sebelum akhirnya melayani pelanggan.</p>\r\n\r\n<p>Tidak hanya menghadapi pelanggan, kemahiran para peracik kopi ini ternyata juga dipertandingkan. Di Indonesia sendiri, kompetisi barista tahunan setingkat nasional sudah diadakan sejak tahun 2004. Beberapa dari finalisnya bahkan berkompetisi di tingkat dunia dan berhasil meraih juara. Dalam artikel ini, akan dijelaskan lengkap tentang apa itu barista, mulai dari tanggung<br />\r\njawab hingga latihan yang dibutuhkan. Lalu apakah mungkin seseorang bisa menjadi barista tanpa kursus yang formal? Simak pembahasan lengkapnya sampai selesai!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Membuat kopi yang nikmat juga tidak hanya tergantung pada skill menyeduh saja. Seorang pelayan bar juga dituntut untuk bisa meracik houseblend yang nikmat. Karena itu mayoritas barista cafe yang tidak berbentuk waralaba, bertanggung jawab memilih biji yang digunakan.</li>\r\n	<li>Barista atau pelayan bar adalah ujung tombak sebuah&nbsp;coffee shop,&nbsp;terutama dalam menentukan cita rasa kopi yang akan dinikmati oleh pelanggannya. Selain rasa minuman, aksi mereka juga bisa menjadi hiburan. Beberapa cafe menempatkan meja bar di tengah ruangan agar pelanggan bisa melihat aksi sang peracik. Karena itu, ketrampilan</li>\r\n	<li>menggunakan segala macam alat seduh dibutuhkan. Tapi apa Anda tahu bahwa tugas barista tidak hanya sebatas itu? Selain meracik, meramu, dan menyeduh minuman, seorang pelayan bar juga bertanggung jawab untuk merawat alat-alatnya. Mulai dari yang kecil seperti gelas dan&nbsp;pour over&nbsp;cone,&nbsp;hingga yang besar dan rumit seperti&nbsp;&nbsp;mesin espresso .</li>\r\n</ol>\r\n'),
(16, 8, '2021-04-13', 'Pilihan Buat Kamu yang Mau Ngopi, Tapi Kurang Suka Kopi', '<p>Untuk sebagian orang, kopi sudah menjadi bagian dari gaya hidup. Tiada hari tanpa kopi mereka bilang. Apalagi buat anak-anak muda mahasiswa yang banyak tugas, kopi jadi salah satu pilihan buat bikin mata mereka tetap segar dan semangat menyelesaikan tugas yang menumpuk. Kopi ini juga yang kemudian membuat mereka memilih warung kopi sebagai tempat nongkrong, bagai sekali mendayung dapat dua pulau sekaligus, kopi dapat, tugas juga selesai di tempat yang sama.</p>\r\n\r\n<p>Tapi, nggak semua orang yang suka ke warung kopi juga suka kopi loh. Ada sebagian dari mereka yang suka tempatnya aja, atau yang ngikut temannya karena semua setuju nugas di warung kopi. Nah, buat kalian-kalian atau mereka-mereka yang kurang suka kopi ini, sebenarnya juga tetap bisa menikmati satu cangkir di warung kopi tersebut. Simak beberapa pilihannya.</p>\r\n\r\n<ol>\r\n	<li><strong>Latte</strong>,&nbsp;Kalau dari definisinya, latte ini artinya kopi susu. Dibuat dari espresso dan susu uap.Adanya susu dalam kopi ini yang bikin si latte cocok buat kamu karena rasa pahit kopinya sudah tersamarkan dengan susu.</li>\r\n	<li><strong>Mocha</strong>, Selain latte, ada juga minuman yang bahan dasarnya espresso dan susu yaitu mocha.Bedanya, mocha ini diberi tambahan coklat bubuk sehingga rasanya lebih bervariasi daripada latte.</li>\r\n	<li><strong>Cappucino</strong>, Masih dengan bahan utama yang sama yaitu espresso dan susu, kalau cappucino punya tambahan foam susu. Biasanya minuman ini diberi bubuk cinnamon di atasnya untuk mempercantik tampilan.</li>\r\n</ol>\r\n\r\n<p>Nah, itu dia beberapa rekomendasi jenis-jenis kopi buat kamu yang kurang suka kopi. Jadi kalian mau coba yang mana dulu nih?</p>\r\n'),
(17, 9, '2021-05-28', 'Kopi dan Bahagia', '<p>Minum kopi akan membuat hari-hari kita cerah, menurut studi yang menunjukkan bahwa kafein dapat membantu orang menularkan energi-energi positif. Peneliti dari Jerman menemukan bahwa orang yang minum kopi dua kali sehari mengatakan kopi dapat memberikan energi positif lebih cepat ke segala yang kita lakukan daripada yang tidak meminum kopi. Kalau kita positif, kita akan mudah untuk bahagia.&nbsp;</p>\r\n\r\n<p>Kopi membuat kita semakin akrab<br />\r\nDalam bukunya Into The Wild, Christoper McCandless bilang &ldquo;happiness only real when shared&rdquo;. Bener banget. Kebahagiaan yang kita nikmati sendiri akan menempel sebentar dan hilang begitu saja karena tidak ada tempat berbagi kebahagiaan itu. Tetapi kalau kita menikmati kebahagiaan bersama orang-orang terdekat, ia akan lama terkenang dalam pikiran dan membuat kita bahagia terus. Begitu juga dengan menikmati kopi, kopi dengan teman adalah tentang keakraban. Kopi membuat obrolan-obrolan singkat tapi mengikat lantas mendekatkan hubungan kita pada seseorang, entah teman entah kekasih. Dari kopi, obrolan yang muncul bisa apa dan ke mana saja, mulai dari yang tidak penting sampai hal penting ke detil-detil.</p>\r\n'),
(18, 10, '2021-06-06', 'Cita Rasa Himalayan Salt Dipadukan Bersama CaffÃ© Latte', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\">Penikmat dan pencinta kopi hanya dibedakan dari sedalam apa mereka mencintai. Tak hanya masalah rasa pada lidah, tapi juga jatuh ke hati. Dilansir dari Healthline, pink himalayan salt adalah garam berwarna merah muda yang diekstrak dari Tambang Garam Khewra, yang terletak di dekat Himalaya di Pakistan. Tambang Garam Khewra adalah salah satu tambang garam tertua dan terbesar di dunia. Garam Himalaya merah muda yang dipanen dari tambang ini diyakini telah terbentuk jutaan tahun yang lalu dari penguapan badan air purba. Garam diekstraksi dengan tangan dan diproses secara minimal untuk menghasilkan produk yang tidak dimurnikan yang bebas dari aditif dan dianggap jauh lebih alami daripada garam meja. Garam ini menciptakan rasa sangat unik apabila dipadukan dengan karamel, kopi dan susu.</span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\">Pecinta rasa caramel mungkin tidak akan melewatkan rasa yang satu ini. Rasa kopi berpadu dengan susu, mungkin sudah biasa. Namun, akan jadi luarbiasa apabila ditambahkan dengan rasa karamel dengan bubuhan rasa Himalayan Salt yang gurih. Sempurna. Double-shot pun terasa enteng apabila rasa karamel dan Himalayan salt benar-bernar tercampur rata. Rasa ini bisa disebut rasa yang ikonik, setelah rasa caf&eacute; late dipadukan dengan biscuit biscoff yang menambah aroma kayumanis yang unik.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `kategori_produk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `kategori_produk`) VALUES
(1, 'Minuman'),
(2, 'Makanan'),
(3, 'Snack'),
(6, 'Jamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Selamat Datang', '<p>Kami menyediakan berbagai hidangan favorit untuk Anda nikmati. Rasakan pelayanan terbaik yang kami berikan melalui tiap sesapan dan gigitan Anda pada menu-menu kami. Kepuasan Anda adalah nilai yang sangat berharga, ayo! Segera pilih menu favoritmu di sini.</p>\r\n', '2021-05-01'),
(2, 'Tentang Kami', '<p><strong>Sejarah Setarbak Coffee</strong><br />\r\nSetarbak Coffee merupakan sebuah kedai kopi yang didirikan di Yogyakarta pada tahun 2009 di jalan Palagan Tentara Pelajar, Sleman. Marchel Adriana, selaku founder dan owner dari Setarbak Coffee dulunya sangat menggemari aktifitas minum kopi semenjak duduk di bangku SMA. Berawal dari mencoba-coba untuk menghindari kantuk saat belajar di waktu malam hari, Marchel justru ketagihan untuk terus minum kopi dengan alasan nikmatnya aroma dan rasa kopi. Waktu berlalu, saat Marchel duduk di bangku kuliah, ia pun terfikirkan untuk mendirikan kedai kopi serta tempat nongkrong asik untuk para pecinta kopi di Yogyakarta. Tercetuslah ide-ide serta konsep kedai yang ia namakan &ldquo;Setarbak Coffee.&rdquo; Kala itu, Marchel ingin fokus untuk jualan olahan kopi saja, namun mempertimbangkan persaingan pasar dan saran dari berbagai teman, akhirnya Marchel menambah menu olahan coklat, dan kue-kue sebagai pendamping minum kopi dan coklat, dengan harga untuk minuman Rp 24.750 untuk semua jenis minuman, dan harga Rp 9.900 untuk harga makanan. Target market awal yang ditetapkan Marchel adalah anak sekolah dan mahasiswa, namun setelah berjalannya waktu, ia terus belajar bahwa para pekerja-pekerja lebih menyukai minum kopi dibandingkan dengan anak sekolah maupun mahasiswa. Akhirnya, ditetapkan ulang target market kedai kopi miliknya ialah para pekerja dan mahasiswa. Pada tahun 2014, Marchel Adriana melakukan penggantian nama usahanya menjadi &ldquo;Setarbak coffee&rdquo; karena sudah ada yg menggunakan nama Starbucks Coffee di luar negeri, tepatnya di Negara Amerika Serikat dan Afrika Selatan sebagai nama usaha coffee shop.</p>\r\n\r\n<p><strong>Konsep dan Menu Setarbak Coffee</strong><br />\r\nSetarbak Coffee hingga saat ini menawarkan berbagai jenis olahan kopi, aneka minuman jika pelanggan kurang menyukai kopi, dan aneka jenis pie, maupun cake. Mengapa Marchel memasang harga Rp 24.750 untuk semua jenis minuman dan harga Rp 9.900 untuk harga makanan, itu hanya Marchel selaku founder yang mengetahuinya dan tak satupun karyawan yang mengetahuinya. Dengan menetapkan harga tersebut di atas untuk semua makanan dan minuman, konsumen juga dimanjakan dengan berbagai fasilitas dari Setarbakoffie, diantaranya yakni kedai buka 24 jam, fasilitas free Wi-fi, ruangan sejuk karena dilengkapi pendingan ruangan (AC), suasana kedai dibuat senyaman mungkin dengan mengusung konsep &ldquo;Homing Garden&rdquo; menjadikan kedai Setarbakoffie sangat nyaman bagaikan rumah sendiri. Pemilihan lagu klasik dan lagu modern dengan volume sedang sengaja di perdengarkan untuk konsumen yang berkunjung, serta meja dan kursi dipilih yang terbuat dari kayu jati dengan berbagai ukuran, dengan tujuan agar konsumen bisa memilih kursi dan meja mana yang cocok dengan mereka agar nyaman saat berada di kedai Setarbak Coffee.</p>\r\n\r\n<p><strong>Visi Setarbak Coffee</strong><br />\r\nVisi Setarbak Coffee adalah mengarahkan seluruh komponen perusahaan demi terlaksananya tujuan perusahaan. Berikut merupakan visi Setarbak Coffee, yakni:&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Menciptakan rasa kopi yang berbeda dari kopi lainnya&nbsp;</li>\r\n	<li>Pelopor coffee shop dengan konsep homing garden</li>\r\n	<li>Pelayanan kami&nbsp; ingin dikenal sebagai coffee shop yang menyajikan rasa kopi yang berbeda dari coffee shop yang lain, dalam ruang yang nyaman dan mengutamakan layanan kepada para pelanggan.</li>\r\n</ol>\r\n\r\n<p><strong>Misi Setarbak Coffee</strong><br />\r\nMisi merupakan hal-hal yang harus dilaksanakan oleh perusahaan untuk mewujudkan tercapainya visi perusahaan. Misi juga merupakan bentuk dari tujuan jangka pendek dari sebuah perusahaan. Berikut merupakan misi dari Peacockoffie, yakni :</p>\r\n\r\n<ul>\r\n	<li>Memberikan kopi yang terbaik dengan kepuasan konsumen yang utama</li>\r\n	<li>Memberikan pelayanan yang mengusung nuansa casual</li>\r\n</ul>\r\n', '2021-05-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori_produk` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kalori` varchar(10) DEFAULT NULL,
  `kolesterol` varchar(10) DEFAULT NULL,
  `karbohidrat` varchar(10) DEFAULT NULL,
  `protein` varchar(10) DEFAULT NULL,
  `kafein` varchar(10) DEFAULT NULL,
  `komposisi` text DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori_produk`, `nama`, `deskripsi`, `kalori`, `kolesterol`, `karbohidrat`, `protein`, `kafein`, `komposisi`, `harga`, `gambar`) VALUES
(9, 2, 'Ayam Bakar', 'Berbagai macam bumbu dari ayam bakar ini dari rasa gurih, manis, pedas hingga pedas manis. Ayam bakar ini bisa dijadikan menu makan sarapan, makan siang bahkan makan malam. Biasanya ayam bakar disajikan dengan pelengkap lalapan sayur mentah seperti kol, mentimun, kemangi tomat dan juga sambal. Bahan dari pembuatan ayam bakar ini tergolong mudah hanya dengan menggunakan beberapa bumbu dapur seperti bawang merah, putih, serai, asam, mentega, jahe dan kunyit.', '167kkal', '60,63mg', '0g', '25g', '0mg', 'Ayam, Bumbu Bakaran Khas Setarbak\r\n', 'Rp20.000', 'ayambakar.jpg'),
(10, 2, 'Breakfast Meal Bread', 'Di Indonesia olahan telur ini dikenal dengan sebutan telur ceplok. Olahan telur ini terbilang yang paling simpel dan mudah dibuat. Untuk membuat sunny side up hanya dibutuhkan telur ayam, sedikit minyak dan sedikit garam. Biasanya telur ini dijadikan pelengkap pada sajian nasi goreng, sandwich ataupun bisa dimakan langsung.', '341kkal', '134,90mg', '26g', '28,85g', '0mg', 'Roti, Dagung Sapi, Seasoning, Sayuran, Bawang Bombay\r\n', 'Rp23.000', 'daging-roti.jpg'),
(11, 2, 'Sausage Egg', 'Di Amerika, menu egg benedict jadi sarapan favorit. Telur yang direbus dengan teknik poached ini biasa disandingkan sebagai pelengkap muffin. Biasanya egg benedict juga dilengkapi dengan says hollandaise yang creamy serta ham. Menu ini juga kerap diandalkan sebagai santapan brunch', '369kkal', '7,9mg', '12,57g', '26,43g', '0mg', 'Tomat, Telur, Daging Sliced, Seasoning\r\n', 'Rp21.000', 'daging-telur.jpg'),
(12, 2, 'Dumpling', 'Udang memiliki cita rasa manis gurih, ini berkat kandungan leptin dalam daging udang. Merupakan sumber protein rendah lemak yang andal. Setiap 180 gram penyajian udang menyediakan 39 gram protein. Juga kaya kandugan asam amino.', '112kkal', '26,4mg', '0,4g', '11,5g', '0mg', 'Tepung,Â  Udang, Seasoning, Sayuran\r\n', 'Rp25.000', 'dumpling.jpg'),
(13, 2, 'Hotcake Pancake', 'Pancake adalah kue dadar yang terbuat dari tepung terigu, telur, gula, dan susu. Bahan-bahan ini kemudian dicampur dengan air untuk membentuk adonan kental, yang nantinya akan digoreng atau dipanggang diatas wajan datar atau pan yang sudah diolesi minyak terlebih dahulu. Kue ini biasanya dimakan dengan tambahan mentega, sirup mapple, selai, keju, dan madu. Kata pancake ini sebenarnya berasal dari bahasa Belanda, yaitu: pannenkoek.', '86kkal', '36,9mg', '10g', '2,43g', '0mg', 'Tepung, Susu, Ragi, Madu, Gula, Telur', 'Rp23.000', 'pancake.jpg'),
(14, 2, 'Pizza', 'Piza (atau pizza) adalah sejenis roti bundar, pipih yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih. Keju yang dipakai biasanya mozzarella atau \"keju pizza\". Jenis bahan lain juga dapat ditaruh di atas pizza, biasanya daging dan saus, seperti salami dan pepperoni, ham, bacon, buah seperti nanas dan zaitun, sayuran seperti cabe dan paprika, dan juga bawang bombay, jamur dan lain lain', '360kkal', '800mg', '50g', '20g', '0mg', 'Tepung, Air, Ragi, Topping (Pilih salah satu), Seasoning, Basil', 'Rp50.000', 'pizza1.jpg'),
(15, 2, 'Seblak', 'Seblak adalah makanan Khas Bandung, Jawa Barat. Seblak disajikan di rumah makan dan warung, serta dijajakan di gerobak pedagang keliling. Makanan yang bertekstur kenyal ini memiliki rasa yang pedas dan menyegarkan, serta memiliki beberapa variasi, biasanya seblak itu bisa dibuat basah/seblak basah dan juga bisa dibuat kering/seblak kering.', '80kkal', '500mg', '20g', '30g', '0mg', 'Kerupuk, Makaroni, Topping, Tomat, Sayurang, Ceker, Telur', 'Rp15.000', 'seblak.jpg'),
(16, 2, 'Steak Ayam', 'Steak, steik dalam bahasa Indonesia, adalah potongan besar daging, biasanya daging yang di-grilled dan disajikan di hot plate bersama kentang dan sayuran. Makanan ini sudah dikenal sejak lama dengan bumbu minimalis dan menggunakan api arang. Selain daging sapi, ayam dan ikan juga menjadi bahan utama steik. Kebanyakan steik dipotong tegak lurus dengan fiber otot sehingga menambah kelegitan daging. Aneka sausnya pun menambah kelezatan steik.', '290kkal', '105,7mg', '18,42g', '28,31g', '0mg', 'Ayam, Bumbu Steak Khas Setarbak, Kentang, Selada', 'Rp27.000', 'ayam-kentang.jpg'),
(17, 2, 'Ayam Rica-Rica', 'Resep ayam rica pedas manis, sebuah masakan rumahan yang kini mudah dijumpai dimanapun. Orang Indonesia sudah mengenai bumbu rica khas Manado sejak lama. Meskipun kita adalah masyarakat pencinta cabai dan rasa pedas, tetap saja ada yang tidak terlalu bisa menikmatinya. Itulah sebabnya diciptakan versi ini, versi pedas manis dari Jawa yang kini bisa dinikmati siapa saja.', '404kkal', '288,2mg', '7,41g', '41g', '0mg', 'Ayam, Bumbu Rica-Rica Khas Setarbak', 'Rp25.000', 'ayampedes.jpg'),
(18, 3, 'Blueberry Muffin', 'Muffin merupakan kue khas negeri Inggris dan lahir pada zaman Victoria. Pada saat itu muffin banyak dijual oleh pedagang keliling dengan diletakkan di nampan di atas kepala. Muffin merupakan sejenis makanan tradisional berbentuk gulungan, bundar dan tipis. Bahan dasarnya terbuat dari adonan roti yang diberi ragi. Di toko kami Muffin lezat ini dihiasi dengan bluberry yang manis serta sedikit perasan lemon dan ditaburi gula di atasnya untuk tekstur yang gurih.', '320kkal', '45mg', '49g', '5g', '0mg', 'Gula, Tepung Terigu [Tepung Terigu, Niasin, Besi Rendah, Tiamin Mononitrat, Riboflavin, Asam Folat], Blueberry, Yogurt', 'Rp17.000', 'Blueberry-Muffin.jpg'),
(19, 3, 'Brownie', 'Cokelat adalah salah satu makanan yang memiliki banyak manfaat di antaranya dapat meningkatkan fungsi otak serta memulihkan stamina dan energi. Salah satu hidangan yang memiliki banyak cokelat di dalamnya adalah Brownie. Brownie di Setarbak Coffe adalah brownie yang kaya dengan cokelat  dan dibuat untuk pecinta coklat sejati.', '480kkal', '75mg', '55g', '6g', '0mg', 'Gula, Tepung Terigu, Enzim, Asam Askorbat, Niasin, Besi Rendah,\r\n Tiamin Mononitrat, Riboflavin, Asam Folat, Telur, Minyak Canola, Coklat Susu [Gula, Mentega Kakao]', 'Rp33.000', 'Brownie.jpg'),
(20, 3, 'Chocolate Cookies', 'Chocolate Cookies  adalah snack yang dimasak dengancara dipanggang bentuknya biasanya kecil, datar, dan rasanya manis. Kepingan cokelat yang manis ini tertanam di dalam adonan favorit kami yang tebal dan kenyal membuat kukis ini mutlak harus dimiliki.', '360kkal', '47mg', '27g', '6g', '0mg', 'Tepung  Niasin, Besi Rendah, Tiamin Mononitrat, Riboflavin, Asam Folat, Asam Askorbat (Kondisioner Adonan)], Mentega Tawar\r\n [Krim Manis, Asam Laktat], Coklat\r\n', 'Rp15.000', 'Chocolate-Cookies.jpg'),
(21, 3, 'Croissant', 'Croissant adalah sejenis kue kering yang berasal dari Prancis, dinamakan demikian karena bentuknya menyerupai bulan sabit. Menurut legenda, roti ini berasal dari Eropa untuk merayakan kemenangan pasukan Franks atas pasukan Umayyad dalam peperangan di Tours pada tahun 732, dengan bentuk seperti bulan sabit. Croissant klasik ini dibuat dengan mentega asli untuk membuat kue yang renyah dengan lapisan yang lembut. Cocok diminum dengan secangkir kopi yang hangat.', '260kkal', '40mg', '27g', '5g', '0mg', 'Tepung, Niasin, Besi Rendah, Asam Askorbat, Tiamin Mononitrat, Riboflavin, Asam Folat, Enzim], Mentega [Krim (Susu), Perisa Alami], Air, Gula, Telur', 'Rp20.000', 'Croissant.jpg'),
(22, 3, 'Vanilla Cookies', 'Vanilla Cookies  adalah snack yang dimasak dengancara dipanggang bentuknya biasanya kecil, datar, dan rasanya manis, serta memiliki aroma vanilla yang kuat. Kepingan biskuit manis ini tertanam di dalam adonan favorit kami yang tebal dan kenyal membuat kukis ini mutlak harus dimiliki.', '360kkal', '47mg', '27g', '6g', '0mg', 'Tepung  Niasin, Besi Rendah, Tiamin Mononitrat, Riboflavin, Asam Folat, Asam Askorbat (Kondisioner Adonan)], Mentega Tawar [Krim Manis, Asam Laktat]', 'Rp15.000', 'Vanilla-Cookies.jpg'),
(23, 3, 'Pisang Coklat', 'Pisang cokelat atau kerap disingkat piscok, adalah kudapan manis dari Indonesia yang terbuat dari irisan pisang dengan cokelat cair atau susu kental manis cokelat, yang dibungkus dalam kulit tepung tipis mirip crepe, atau lazim menggunakan kulit lumpia yang kemudian digoreng rendam dalam minyak goreng yang banyak. Snack ini sangat cocok dimakan kapan saja. Dibuat dengan bahan-bahan yang familiar membuat piscok bisa dinikmati siapapun.\r\nJenis pisang yang digunakan biasanya sama dengan pisang yang biasa digunakan untuk pisang goreng; yaitu pisang uli, pisang kepok atau pisang raja sereh.', '300kkal', '115mg', '19g', '1,4g', '0mg', 'Pisang, Kulit Kreps [Tepung, telur, air, mentega], coklat, keju, susu\r\nkental manis', 'Rp15.000', 'Pisang-Coklat.jpg'),
(24, 3, 'Kentang Goreng', 'Kentang goreng adalah hidangan yang dibuat dari potongan-potongan kentang yang digoreng dalam minyak goreng panas. Setarbak Coffee memiliki menu ini dengan cita rasa gurih, tekstur yang lembut di dalam, renyah diluar, dan tentunya dibuat dengan bahan-bahan segar sehingga terjaga kualitasnya.', '312kkal', '0mg', '41g', '3,4g', '0mg', 'Kentang, tepung maizena, garam, lada', 'Rp25.000', 'French-Fries.jpg'),
(25, 3, 'Onion Ring', 'Onion Ring merupakan camilan yang terbuat dari bawang bombay. Jika selama ini bawang bombay yang kita tahu hanya digunakan sebagai bumbu masakan, kali ini bawang bombay dijadikan sebagai bahan utama dalam pembuatan onion ring. Di toko kami, kami meyajikan onion ring dari bawag bombay segar sehingga rasa yang ditawarkan pun lebih nikmat, cocok di makan kapan saja.', '411kkal', '0mg', '44g', '3,6g', '0mg', 'Bawang bombay, tepung maizena, lada, garam, telur, tepung terigu', 'Rp25.000', 'Onion-Ring.jpg'),
(26, 3, 'Madeleines', 'Medeleines adalah kue tradisional yang memiliki tekstur keras di luar tetapi lembut di dalam. Kue ini memiliki latar belakang sejarah yang berbeda-beda. Artinya tidak ada satu ceritapun yang valid dan menjelaskan asal mula munculnya kue madeleine ini. Dibuat dengan bahan-bahan berkualitas, kue sal Prancis yang kaya \r\ndan mentega ini lembut di bagian tengah dan dipanggang hingga menghasilkan pinggiran yang renyah.', '220kkal', '65mg', '28g', '3g', '0mg', 'Telur, Tepung Terigu, Gula, Mentega, Lemon', 'Rp15.000', 'Madeleines.jpg'),
(27, 1, 'Susu Hangat', 'Nikmati secangkir susu untuk menghangatkan hari Anda. Selain nikmat, susu juga mengandung beragam nutrisi penting yang mampu menjaga organ tubuh tetap berfungsi dengan baik dan melindungi tubuh dari serangan penyakit. Salah satu manfaat dari susu di antaranya adalah untuk mejaga kesehatan tulang dan gigi, menjaga kesehatan mata, dan meningkatkan imunitas tubuh.', '200kkal', '30mg', '19g', '13g', '0mg', 'Susu Sapi Murni', 'Rp15.000', 'Susu-Hangat.jpg'),
(28, 1, 'Strawberry Lemonade', 'Strawberry Lemonade adalah minuman yang terbuat dari perasan jeruk lemon dan juga strawberry, rasa manisnya didapat dari madu asli dan disajikan bersama es batusehingga membuat minuman ini menjadi sangat segar. Cocok diminum saat siang hari dengan berbagai snack yang tersedia di Setarbak Coffee.', '190kkal', '0mg', '46g', '0g', '0g', 'Es batu, Lemon, Madu, Sirup Strawberry', 'Rp17.000', 'Strawberry-Lemonade.jpg'),
(29, 1, 'Matcha Tea Latte', 'Matcha Tea Latte adalah minuman yang terbuat dari bubuk teh hijaudan juga susu. Cocok untuk pengunjung yang kurang menyukai kopi. Rasa kuat dari matcha yang beradu dengan susu serta lapisan busa di atasnya akan memanjakan lidah anda semua.', '240kkal', '25mg', '34g', '12g', '80mg', 'Susu sapi murni, Latte, Teh Hijau', 'Rp19.000', 'Matcha-Latte.jpg'),
(30, 1, 'Iced Espresso', 'Istilah espresso pertama kali digunakan pada awal tahun 1900-an. Jika diterjemahkan, espresso diartikan sebagai secangkir kopi yang diseduh secara ekspres hanya untuk Andaâ€™. Espresso Roast khas milik kami adalah espresso yang lembut disajikan bersama es dengan rasa yang kaya, kuat, serta manis karamel.', '10kkal', '0mg', '2mg', '1mg', '150mg', 'Espresso, Es batu, Air, dan Karamel', 'Rp19.000', 'Iced-Espresso.jpg'),
(31, 1, 'Caffe Latte', 'Latte atau Caffe latte berasal dari bahasa Italia yang artinya kopi susu adalah espresso atau kopi yang dicampur dengan susu dan memiliki lapisan busa yang tipis di bagian atasnya. Perbandingan antara susu dengan kopi pada caffe latte adalah 2:1.', '190kkal', '30mg', '19g', '13g', '150mg', 'Susu sapi murni, Espresso, Latte', 'Rp22.000', 'Caffe-Latte.jpg'),
(32, 1, 'Mochaccino', 'Moccacino merupakan minuman yang terdiri dari bahan berupa susu, kopi dan cokelat. Kopi yang digunakan biasanya jenis espresso yaitu kopi hitam. Kemudian dikombinasikan dengan cokelat bubuk, lalu diberikan whiped cream di atas minuman tersebut.', '90kkal', '2mg', '16g', '1g', '1750mg', 'Coklat, Susu, Espresso', 'Rp19.000', 'mochaccino.png'),
(33, 1, 'Red Velvet Latte', 'Red velvet diciptakan dari berbagai bahan. Bahan-bahan tersebut adalah buttermilk, kakao, kopi, cuka dan pewarna makanan merah. Variasi rasa red velvet sangat cocok dipadukan dengan cream cheese yang gurih, untuk dibuat sebagai minuman.', '293kkal', '137,4mg', '37,45g', '5,45g', '0mg', 'Susu, Coklat putih, Cake red velvet, Creamer', 'Rp27.000', 'red-velvet.jpg'),
(35, 1, 'Strawberry Latte', 'Minuman kafe kekinian ini diadopsi dari viralnya Susu Strawberry ala korea. Segar, manis, serta creamy feel yang didapat membuat kita seperti tidak cukup satu gelas saja. Antioksidan dari strawberry juga bermanfaat baik bagi tubuh saat mengonsumsinya.', '110kkal', '5mg', '21g', '1g', '0mg', 'Strawberry, Susu, Gula, Creamer', 'Rp25.000', 'strawberry.jpg'),
(36, 1, 'Cappucinno', 'Minuman khas Italia yang terbuat dari espresso dan susu, cocok untuk mengawali pagi anda. Kopi Cappuccino adalah minuman khas Italia yang terdiri dari 1/3 espresso, 1/3 susu steamed, dan 1/3 buih susu. Pada dasarnya, minuman ini adalah campuran dari espresso dan susu seperti minuman-minuman berbasis espresso lainnya. Sepintas, sajian cappuccino hampir tampak serupa dengan minuman latte.', '120kkal', '40mg', '12g', '8g', '12mg', 'Espresso dan Susu Murni', 'Rp18.000', 'cappuchino.jpg'),
(37, 1, 'Mocktail', 'Mocktail merupakan minuman dari sari buah atau jus yang digabungkan, Mocktail tidak mengandung alkohol seperti cocktail. Campuran yang paling sering ditemukan bersama sari buah adalah minuman bersoda. Namun, akhir-akhir ini muncul juga mocktail tanpa soda, yakni gabungan antara minuman ringan seperti sirup bahkan es krim dengan sari buah atau jus.', '66kkal', '0mg', '16,79g', '0,55g', '0mg', 'Jus Jeruk, Gula, Jus Cranberry, Sirup buah Peach', 'Rp30.000', 'mocktail.jpg'),
(38, 3, 'Red Velvet Latte', 'SAKDKASD', 'ASDASDA', 'SALDKASL', 'ASKDJSKA', 'SDLKSLKD', 'SKADK', 'SDA', 'SADSA', 'wp4194085-aesthetic-pc-wallpapers.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Setarbak', 'superadmin@setarbak.com', 'setarbak', '5d4321e5d2260b847f2419ccf3d9295d', 'Superadmin', 'setarbak.png'),
(5, 'Tanzilu Adji A', 'tanziluadjiganesha@gmail.com', 'tanzilu', '99921723ea93662601aa165974b2c4a7', 'Admin', 'tanzilu1x1.jpg'),
(6, 'M Firman A', 'ajieansyahmuhammadfirman@gmail.com', 'firman', '74bfebec67d1a87b161e5cbcf6f72a4a', 'Admin', 'firman_193140714111071.jpg'),
(7, 'Nasrullah Adji P', 'nasrullahadji264@gmail.com', 'nasrullahadji.p', 'e807f1fcf82d132f9bb018ca6738a19f', 'Admin', 'Nasrullah Adji Putra_193140714111042.jpg'),
(8, 'Ilma Nafia T', 'ilmanafiatsania@gmail.com', 'ilma', '8c525aa646fad7b29171ab36b61947e4', 'Admin', 'ilma-193140714111076.png'),
(9, 'Risa Andrian E', 'risaandrian.ra@gmail.com', 'risa', '735c9c3675eaba16bfbec5913174067e', 'Admin', 'Risa Andrian - 193140714111055.jpg'),
(10, 'Mutiara Az Zahra', 'mutiaraazhra@student.ub.ac.id', 'mtzhr', 'bbda105e1abe55dc4684d2eb8514a9f8', 'Admin', '193140714111060_Mutiara Az Zahra.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori_produk` (`id_kategori_produk`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori_produk`) REFERENCES `kategori_produk` (`id_kategori_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
