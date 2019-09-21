-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 05:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogyakarta_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `url_title` varchar(256) NOT NULL,
  `category` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `url_title`, `category`, `image`, `content`, `author`, `date_created`, `is_active`) VALUES
(5, '10 Tempat Wisata di Gunung Kidul yang Paling Populer', '10-tempat-wisata-di-gunung-kidul-yang-paling-populer', 'gunungkidul', 'blog_1.jpg', '<p>Kabupaten Gunung Kidul merupakan salah satu kabupaten yang ada di wilayah Provinsi Daerah Istimewa Yogyakarta. Gunung Kidul ini merupakan kabupaten yang terletak di sebelah selatan dan berbatasan langsung dengan laut selatan atau Samudera Pasifik. Gunung Kidul juga merupakan kabupaten yang wilayahnya berupa dataran tinggi. inilah mungkin yang membuat kabupaten ini diberinama Gunung Kidul. Nama Gunung Kidul sendiri dalam bahasa Jawa berarti &ldquo;Gunung di sebelah Selatan&rdquo;. Gunung Kidul ini merupakan satu wilayah kabupaten yang masih alami dan masyarakatnya pun banyak yang masih bersifat tradisional. Gunung kidul juga merupakan satu wilayah yang masih kental dengan budayanya. Masih banyak sekali upacara atau ritual- ritual tradisional yang seringkali diadakan di wilayah kabupaten ini. Masyarakatnya pun juga masih banyak yang percaya pada hal- hal &ldquo;klenik&rdquo; atau mistis. Namun dibalik itu semua, tahukah Anda bahwa Gunung Kidul ini mempunyai keindahan alam yang sangat mempesona?</p>\r\n\r\n<p>Berbicara mengenai keindahan alam atau pemandangan, Gunung kidul ini mempunyai banyak sekali pemandangan yang sangat indah. Keadaan alamnya yang masih alami membuat Gunung kidul ini terlihat asri dan adem bilang di pandang mata. Wilayah gunung kidul juga merupakan wilayah yang sejuk karena masih banyak pepohonan yang terdapat di wilayah ini. Ditambah lagi bentuk alam yang banyak terdapat perbukitan dan juga lautan sehingga menambah eloknya wilayah gunung kidul ini.</p>\r\n\r\n<p>Karena keindahan pemandangan yang ada di Gunung Kidul, membuat kabupaten ini menjadi cepat sekali tersohor, terlebih di telinga para pelancong atau wisatawan yang senang mengeksplor alam. Banyak sekali tempat- tempat alam yang menarik di Gunung kidul ini. Tempat- tempat yang menarik ini bermacam- macam jenisnya, seperti pantai, gunung atau bukit, air terjun, sungai, goa, hingga sungai bawah tanah. Gunung kidul memang seperti surga dengan segala keindahannya. Tempat- tempat wisata ini dapat dengan mudah kita temukan meskipun terkadang medan yang kita lalui cukup terjal dan menantang.</p>\r\n\r\n<p>Seiring dengan perkembangan dari waktu ke waktu, pemerintah Kabupaten Gunung Kidul ini memajukan sektor pariwisata sebagai salah satu sektor andalah di Gunung Kidul, mengingat wilayah Gunung kidul ini mempunyai pemandangan yang luar biasa indahnya. Sekarang ini, Gunung Kidul menjadi salah satu tujuan wisata yang diburu oleh banyak sekali wisatawan, baik domestik maupun mancanegara. Dan seiring dengan kemajuan sektor pariwisata di Gunung Kidul ini, banyak terjadi pembangunan yang pesat di wilayah ini, sehingga Gunung Kidul ini semakin maju dan tidak ketinggalan dengan wilayah- wilayah di sekitarnya. Diantara pembangunan tersebut yang paling banyak adalah pembangunan villa- villa atau penginapan. Bila kita telusuri satu per satu, maka kita akan menemukan banyak sekali tempat wisata di Gunung Kidul ini.</p>', 'abdulrosyidit@gmail.com', 1566433954, 'active'),
(6, '6 Spot Foto di Mangunan Jogja Ternyata Berbahaya, di Mana Saja?', '6-spot-foto-di-mangunan-jogja-ternyata-berbahaya-di-mana-saja', 'mangunan', 'blog_3.jpg', '<p>Ia juga mengatakan spot swafoto di atas perahu yang dibuat di tepi Jurang Tembelan tersebut juga harus dipastikan baut selain tali-tali untuk mengikat kayu-kayu tersebut, bahkan kalau sudah tidak memungkinkan agar diganti secara berkala.</p>\r\n\r\n<p>&quot;Jadi, kita selalu bekerja sama dengan forum pengurangan risiko bencana (FPRB) Desa Mangunan untuk melihat kerawanannya, dan kalau memang kondisinya rawan atau ketika cuaca tidak mendukung objek wisata kita tutup,&quot; katanya.</p>\r\n\r\n<p>Sementara itu, Kepala Badan Penanggulangan Bencana Daerah (BPBD) Bantul Dwi Daryanto mengatakan workshop tersebut digelar sebagai bentuk keprihatinan bersama pada perkembangan objek wisata di Bantul, khususnya wilayah Dlingo yang berada di wilayah perbukitan.</p>\r\n\r\n<p>&quot;Di Bantul khususnya Kecamatan Dlingo, lebih khusus lagi Mangunan, banyak destinasi wisata alam yang ada di perbukitan, dan kita semua tahu Dlingo merup</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'abdulrosyidit@gmail.com', 1566434055, 'active'),
(7, '7 Tempat Asyik Menikmati Wisata Malam di Yogyakarta   Artikel ini telah tayang di Kompas.com dengan judul', '7-tempat-asyik-menikmati-wisata-malam-di-yogyakarta-artikel-ini-telah-tayang-di-kompascom-dengan-judul', 'mangunan', 'blog_2.jpg', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>', 'abdulrosyidit@gmail.com', 1566690252, 'active'),
(8, '40 Wisata Jogja Paling Memesona, Bukti Selalu Istimewa', '40-wisata-jogja-paling-memesona-bukti-selalu-istimewa', 'yogyakarta', 'prambanan.jpg', '<p>Banyak para pelancong yang menjadikan Kota Jogja sebagai tempat liburan favorit.&nbsp;Dimana kamu bisa pergi menjelajahi kota, mengarungi telaga-telaga sunyi hingga menikmati santapan di pagi hari.&nbsp;Keseruan-keseruan ini bisa kamu dapatkan dengan mudah saat mengunjungi deretan wisata Jogja.&nbsp;Hingga sekarang, Kota Gudeg ini tak pernah mengecewakan.</p>\r\n\r\n<p>Jogja terus berbenah untuk memanjakan para wisatawan dan mengukuhkan diri sebagai surga budaya di Tanah Jawa.&nbsp;Tempat orang-orang melihat dengan jelas tradisi yang dirawat.&nbsp;Merasakan cita rasa yang tak hanya pilihan berbumbu, tapi juga punya cerita yang panjang dan bikin rindu.&nbsp;Berikut ini adalah&nbsp;<strong>40 Wisata Jogja</strong>&nbsp;yang bisa kamu datangi.</p>', 'abdulrosyidit@gmail.com', 1568809516, 'active'),
(9, '4 Tempat Wisata di Mangunan, Dlingo Bantul Yogyakarta Hits 2019', '4-tempat-wisata-di-mangunan-dlingo-bantul-yogyakarta-hits-2019', 'mangunan', 'telusur-jogja-kebun-buah-mangunan-dlingo-bantu-jogja.jpg', '<p><strong>Wisata Mangunan Bantul</strong>&nbsp;&ndash; Berbicara wisata di Jogja memang tidak akan pernah ada habisnya, wisata baru di Jogja selalu bermunculan dan hits di Instagram. tempat wisata yang baru dan bermunculan berada di Kabupaten Bantul tepatnya di Desa Mangunan. Banyak sekali wisata di Mangunan tahun 2017 yang di perkenalkan baik melalui sosial media atau orang perorang.</p>\r\n\r\n<p>Sebelumnya sudah kami bahas daftar wisata yang ada di Mangunan, Dlingo Bantul, dan masih di kawasan Mangunan kali ini kami akan membahas secara singkat wisata di Mangunan yang bisa kalian kunjungi.</p>', 'abdulrosyidit@gmail.com', 1568809853, 'active'),
(10, 'Bukit Panguk Kediwung', 'bukit-panguk-kediwung', 'mangunan', 'telusurjogja-bukit-panguk-kediwung-dlingo-bantul-300x200.jpg', '<p>Masih membahas tempat wisata di Jogja, memang benar Jogja mempunyai sejuta tempat wisata yang sayang jika kalian tidak mengujunginya. Wisata di Bantul selanjutnya adalah Bukit Panguk Kediwung Bantul. Dari tempat ini kalian bisa menikmati suasana alam yang masih asri. Dari tempat ini pula kalian bisa melihat sunrise yang memanjakan mata. Di Bukit panguk kediwung juga terdapat spot foto yang keren. tertarik kesini ?</p>', 'abdulrosyidit@gmail.com', 1568809896, 'active'),
(12, '7 Tempat Asyik Menikmati Wisata Malam di Yogyakarta   Artikel ini telah tayang di Kompas.com dengan judul', '7-tempat-asyik-menikmati-wisata-malam-di-yogyakarta-artikel-ini-telah-tayang-di-kompascom-dengan-judul', 'mangunan', 'listing_9.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'abdulrosyidit@gmail.com', 1568910113, 'active'),
(13, 'Wisata Baru Bukit Lintang Sewu', 'wisata-baru-bukit-lintang-sewu', 'gunungkidul', '20190725_143501-350x220.jpg', '<p>Hallo sahabat JPA Trans, ada tempat wisata baru lho di Yogyakarta tepatnya di Dsn. Munthuk Dlingo Bantul Yogyakarta nama tempatnya Bukit Lintang Sewu. obyek wisata jogja ini diburu wisatawan baik lokal maupun luar Negeri karena tempat ini memiliki pesona alam yang sangat indah dan menakjubkan. Bagi sahabat JPA Trans yang berkunjung ke Djogjakarta jangan sampe melewatkan tempat wisata jogja yang satu ini, lokasi wisata Bukit Lintang Sewu ini lokasinya tidak jauh dari pusat kota djogjakarta sekitar 35 km.<br />\r\nBukit lintang sewu ini sendiri mulai dikelola oleh masyarakat yang bekerjasama dengan pemerintah daerah setempat sejak tahun 2018 dan dijadikan tempat wisata. sampai sekarang terus di benahi sehingga sehingga memang benar benar tempat ini bisa dijadikan andalan wisata di yogyakarta.<br />\r\nBagi sahabat JPA Trans yang tertarik untuk mengunjungi tempat ini kami siap mengantar sahabat semua. Dapatkan tempat tempat yang menarik untuk berfoto foto yang tentunya sangat bagus dan memiliki aura sendiri bagi orang lain untuk ikut mengunjungi buit litang sewu ini.<br />\r\nAkses menuju tempat wisata alam di jogja yang satu ini cukup mudah karena akses jalan dari pusat kota jogjakarta sampai kelokasi tujuan sudah beraspal, Yang perlu digaris bawahi bagi wisatawan / sahabat JPA Trans yang ingin berkunjung ketempat ini pastikan mengunakan kendaraan sendiri karena belum adanya transportasi umum. Dan akan lebih nyaman lagi jika bersama JPA Trans, selain mengunakan driver yang sudah berpengalaman tentunya sudah sangat menguasi jalan di wilayah perbukitan tersebut.</p>\r\n\r\n<p>Objek wisata Lintang Sewu yang berada di Bantul ini hadir menawarkan berbagai macam keindahan alam yang mungkin tidak akan bisa Anda dapatkan di tempat lainnya, salah satunya yaitu pengalaman menyaksikan bintang-bintang yang bertaburan di langit dari puncak Lintang Sewu ini. selain itu, daya tarik lainnya yaitu karena objek wisata ini berada di ketinggian sekitar 345 diatas permukaan laut, maka tidak salah jika Anda akan merasakan kesejukan udara yang begitu luar biasa.</p>\r\n\r\n<p>Tidak hanya menikmati keindahan alam saja, bagi Anda yang memiliki hobi berfoto, tempat ini juga menyediakan beberapa spot foto yang menampakkan keindahan alam pegunungan yang terlihat hijau dan asri. Pada sore hari pun Anda juga akan disuguhkan dengan panorama keindahan matahari terbenam yang sangat indah.</p>', 'abdulrosyidit@gmail.com', 1569078232, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `is_active` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `title`, `is_active`) VALUES
(3, 'mangunan', 'active'),
(4, 'gunungkidul', 'active'),
(5, 'yogyakarta', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `article_commentar`
--

CREATE TABLE `article_commentar` (
  `id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `url_title` varchar(256) NOT NULL,
  `commentar` text NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_commentar`
--

INSERT INTO `article_commentar` (`id`, `author`, `image`, `url_title`, `commentar`, `date_created`, `is_active`) VALUES
(1, 'Muhammad Wafi', 'default.png', '10-tempat-wisata-di-gunung-kidul-yang-paling-populer', 'Hallow Berro', 1567125869, 'active'),
(2, 'Muhammad Wafi', 'default.png', '6-spot-foto-di-mangunan-jogja-ternyata-berbahaya-di-mana-saja', 'Saya Abdul Rosyid\r\n', 1567126387, 'active'),
(3, 'Abdul Rosyid', 'rosyid.png', 'bukit-panguk-kediwung', 'Mantap', 1569078647, 'active'),
(4, 'Abdul Rosyid', 'rosyid.png', '10-tempat-wisata-di-gunung-kidul-yang-paling-populer', 'MANTAPPP', 1569078678, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `url_title` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `price` varchar(64) NOT NULL,
  `is_active` varchar(32) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `url_title`, `image`, `content`, `author`, `price`, `is_active`, `date_created`) VALUES
(3, 'Mangunan', 'mangunan', 'intro_21.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'abdulrosyidit@gmail.com', '100.000', 'active', 1568910768),
(4, 'Gunug Kidul', 'gunug-kidul', 'intro_11.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'abdulrosyidit@gmail.com', '250.000', 'active', 1568901178),
(5, 'yogyakarta', 'yogyakarta', 'intro_3.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'abdulrosyidit@gmail.com', '560.000', 'active', 1568970562);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Abdul Rosyid', 'abdulrosyidit@gmail.com', 'rosyid.png', '$2y$10$3nadSXb.UQRpDsOsqIqhvuQuiu4Go7FrmXkRVJlYQTfpmSfY8sHD.', 1, 1, 1566106883),
(2, 'Muhammad Wafi', 'muhammadwafi@gmail.com', 'default.png', '$2y$10$Sh7xCkWGF7MlrelB.Ldbp.FreuL1t/r18BSDCr3DAAYuqq/5Yjp1u', 2, 1, 1566694975);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 4),
(5, 1, 3),
(6, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'User'),
(3, 'Article'),
(4, 'Menu'),
(5, 'Offers');

-- --------------------------------------------------------

--
-- Table structure for table `user_notes`
--

CREATE TABLE `user_notes` (
  `id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `notes` text NOT NULL,
  `is_active` varchar(32) NOT NULL,
  `date_created` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notes`
--

INSERT INTO `user_notes` (`id`, `author`, `image`, `name`, `notes`, `is_active`, `date_created`) VALUES
(1, 'abdulrosyidit@gmail.com', 'rosyid.png', 'Abdul Rosyid', 'Hallo Nama Saya ABDUL ROSYID', 'proccess', '1568970211'),
(2, 'muhammadwafi@gmail.com', 'default.png', 'Muhammad Wafi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'active', '1569078949');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard ', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'dashboard/profile', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'dashboard/edit_profile', 'fas fa-fw fa-user-edit', 1),
(4, 4, 'Menu Management', 'dashboard/menu', 'fas fa-fw fa-folder', 1),
(5, 4, 'Submenu Management', 'dashboard/sub_menu', 'fas fa-fw fa-folder-open', 1),
(6, 3, 'Article', 'dashboard/article', 'far fa-fw fa-newspaper', 1),
(7, 3, 'Add Article', 'dashboard/add_article', 'fas fa-fw fa-folder-plus', 1),
(8, 2, 'Change Password', 'dashboard/change_password', 'fas fa-fw fa-key', 1),
(9, 3, 'Category', 'dashboard/category_article', 'fas fa-fw fa-folder-open', 1),
(10, 2, 'User Notes', 'dashboard/user_notes', 'fas fa-fw fa-quote-right', 1),
(11, 5, 'Offers', 'dashboard/offers', 'fas fa-fw fa-building', 1),
(12, 5, 'Add Offers', 'dashboard/add_offers', 'fas fa-fw fa-building', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_commentar`
--
ALTER TABLE `article_commentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notes`
--
ALTER TABLE `user_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `article_commentar`
--
ALTER TABLE `article_commentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_notes`
--
ALTER TABLE `user_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
