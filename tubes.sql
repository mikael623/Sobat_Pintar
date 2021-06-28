-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2021 pada 01.59
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id`, `gambar`, `tipe`, `judul`, `posted`) VALUES
(1, 'https://illusory-lubricant.000webhostapp.com/ic_image1.jpg', '8th Grade', 'Grammar: To Be', 'Admin'),
(2, 'https://illusory-lubricant.000webhostapp.com/ic_image2.jpg', '9th Grade', 'Hay', 'Admin'),
(3, 'https://illusory-lubricant.000webhostapp.com/ic_image1.jpg', '8th Grade', 'judul', 'Admin'),
(13, 'https://illusory-lubricant.000webhostapp.com/ic_image2.jpg', '7th Grade', 'bnc', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(128) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `role`, `name`, `tgl_lahir`, `gender`, `telp`, `alamat`, `is_active`) VALUES
(4, 'milzam', '$2y$10$CEWsXra8Gta6K1eSsM9eZem2t/L.wJro6WDJ1snL1EhQpMjBQ4Bgy', 'milzamdk@student.telkomuniversity.ac.id', 'Back-End Developer', 'MILZAM DWI', '04/08/1999', 'Laki-laki', '081330736558', 'Jl. K.H. Agus Salim', 1),
(6, 'erbina', '$2y$10$CEWsXra8Gta6K1eSsM9eZem2t/L.wJro6WDJ1snL1EhQpMjBQ4Bgy', 'erbina@gmail.com', 'Admin', 'Erbina', '', '', '', '', 1),
(7, 'syarifatul', '$2y$10$CEWsXra8Gta6K1eSsM9eZem2t/L.wJro6WDJ1snL1EhQpMjBQ4Bgy', 'syarifatul@gmail.com', 'Admin', '', '', '', '', '', 1),
(8, 'admin3', '123', 'admin@gmail.com', '', '', '', '', '', '', 1),
(11, 'admin77', '123', 'admin77@gmail.com', '', 'Milzam', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(10) NOT NULL,
  `submateri` varchar(255) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `isi_materi` varchar(11000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `submateri`, `judul_materi`, `isi_materi`, `gambar`) VALUES
(6, '<b>Vocabulary</b>', 'Vocabulary', '<ul><li>Grandparents = Kakek Nenek</li><li>Grandfather = Kakek</li><li>Grandmother = Nenek</li><li>Husband = Suami</li><li>Wife = Istri</li><li>Parent = Orang tua</li><li>Father = Ayah</li><li>Mother = Ibu</li><li>Daughter = Anak perempuan</li><li>Son = Anak laki – laki</li><li>Sister = Saudara perempuan</li><li>Brother = Suadara laki – laki</li><li>Granddaughter = Cucu perempuan</li><li>Grandson = Cucu laki laki</li><li>Uncle = Paman</li><li>Aunt = Bibi</li><li>Niece = Keponakan perempuan</li><li>Nephew = Keponakan laki – laki</li><li>Cousin = Sepupu</li><li>Parent-in-law = Mertua</li><li>Son-in-law = Menantu laki – laki</li><li>Daughter-in-law = Menantu perempuan</li><li>Step child = Anak tiri</li><li>Stepson = Anak tiri laki – laki</li><li>Stepdaughter = Anak tiri perempuan</li><li>Riverside = Tepi sungai</li><li>Sea = Laut</li><li>Spring = Sumber/mata air</li><li>Strait = Selat</li><li>Valley = Lembah</li><li>Volcano = Gunung berapi</li><li>World = Dunia</li><li>Clean = Bersih</li><li>Comfortable = Nyaman</li><li>Cool = Sejuk</li><li>Cold = Dingin</li><li>Hot = Panas</li><li>Dirty = Kotor</li><li>Beauty = Indah</li><li>Field = Ladang, kebun</li><li>Polution = Polusi</li><li>Air = Udara</li><li>Rice fields = Sawah</li><li>Agriculture = Pertanian</li><li>Dry = Kering</li><li>Creek = Anak sungai</li><li>Heath = Padang rumput</li><li>Garbage = Sampah</li><li>Nature park = Taman alam</li><li>Garden = Taman</li><li>Playground = Taman bermain</li><li>Store = Toko</li><li>Supermarket = Supermarket</li><li>Mall = Mall</li><li>Cinema = Bioskop</li></ul>', 'https://illusory-lubricant.000webhostapp.com/ic_image1.jpg'),
(8, '<b>Greeting and Parting</b>', 'Materi 1', '1234wd222\r\nasdsafasdg\r\nasdgasgh', ''),
(11, '<b>Introducing Oneself</b>', 'Introducing Oneself', '<b>Introducing Oneself</b><ul><li>  My name is Chika (<i>Nama saya Chika</i>)</li><li>  My fullname is Chika Andini (<i>Nama lengkap saya Chika Andini</i>)</li><li>  My nickname is Chika (<i>Nama panggilan saya adalah Chika</i>)</li><li>  Hi, I am Chika (<i>Hai, saya Chika</i>)</li><li>  Hello, my name is Chika (<i>Halo, nama saya Chika</i>)</li><li>  Good morning. My name is Chika (<i>Selamat pagi. Nama saya Chika</i>)</li><li>  May I introduce myself? My name is Chika (<i>Bolehkah saya memperkenalkan diri? Nama saya Chika</i>)</li><li>  Let me introduce myself. My name is Chika. (<i>Ijinkan saya memperkenalkan diri. Nama saya Chika</i>)</li><li>  First of all, I would like to introduce myself. My name is Chika (<i>Sebelumnya, saya ingin memperkenalkan diri dulu. Nama saya Chika</i>)</li><li>  How do you do? My name is Chika (<i>Bagaimana keadaanmu?. Nama saya Chika</i>)</li></ul><b>Response</b><ul><li>  Hi, I\'m Andika. Glad to meet you. (<i>Hai, saya Andika. Senang bertemu dengan anda</i>)</li><li>  Hello, My name is Andika Pleased to meet you (<i>Halo, nama saya Andika. Senang bertemu dengan anda</i>)</li><li>  Good morning. I am Andika How do you do?. (<i>Selamat pagi. Nama saya Andika. How do you do?</i>)</li><li>  How do you do? My name is Andika. Nice to meet you (<i>Bagaimana keadaanmu?. Nama saya Andika. Senang bertemu dengan anda</i>)</li></ul><b>Contoh Dialog Introducing Oneself</b><br><b>Gilang</b> : Excuse me. I don’t think we have met, I’m Gilang. (<i>Permisi, sepertinya kita belum pernah bertemu, saya Gilang</i>)<br><b>Nando</b> : Hello. I’m Nando. I am your new neighbor. (<i>Halo, Saya Nanda. Saya tetangga barumu</i>)<br><b>Gilang</b> : Oh really?. You move to the house next to me, aren\'t you? (<i>Oh benarkah? Kamu pindah ke rumah disebelah saya kan?</i>)<br><b>Nando</b> : Yes it is. Please come to my house this afternoon. I baked some cookies. (<i>Iya. Tolong datang sore ini ke rumah saya. Saya sudah memanggang kue kering</i>)<br><b>Gilang</b> : Sure! Thanks. Nice to know you Nando. (<i>Tentu saja! Terima Kasih. Senang bisa mengenalmu Nando</i>)<br><b>Nando</b> : Nice to know you too Gilang. (<i>Senang bisa mengenalmu juga Gilang</i>)', 'https://illusory-lubricant.000webhostapp.com/ic_image1.jpg'),
(16, '<b>Introducing Others</b>', 'Introducing Others', '<b>Introducing Others</b><ul><li>  Do you know Chika? (<i>Apakah anda tahu Chika?</i>)</li><li>  Have you met Chika? (<i>Pernahkah anda bertemu Chika?</i>)</li><li>  This is a friend of mine, Andika. (<i>Ini teman saya, Andika</i>)</li><li>  Chika, this is Andika, my friend. (<i>Chika, ini Andika, teman saya</i>)</li><li>  May I introduce my friendi? (<i>Bolehkan saya memperkenalkan teman saya?</i>)</li><li>  Please allow me to introduce our new Administration Manager. (<i>Ijinkan saya untuk memperkenalkan manajer administrasi kita yang baru</i>)</li><li>  Let me introduce you to Mrs. Lina our new Marketing Manager.  Mrs. Lina. this is Mr. Lutfi from Java Plantation Company. (<i>Ijinkan saya untuk memperkenalkan anda kepada Ibu Lina, Manajer Marketing baru kita. Ibu Lina, Ini adalah Bapak Lutfi dari perusahaan Java Plantation</i>).</li></ul><b>Response</b><ul><li>  No, I don\'t think so. (<i>Sepertinya tidak</i>)</li><li>  No, I haven\'t. (<i>Tidak, aku belum pernah</i>)</li><li>  Hi, glad to meet you. I am Andika. (<i>Hai, senang bertemu dengan anda. Saya Andika</i>)</li><li>  Hello, Okki. Pleased to meet you. (<i>Halo Andika. Senang bertemu denganmu</i>)</li><li>  I am glad to know you (<i>Saya senang bisa mengenal anda</i>)</li><li>  It is nice to see you. (<i>Senang bisa melihat anda</i>)</li><li>  How do you do? (<i>Ungkapan saat baru bertemu pertama kalinya</i>)</li><li>  How do you do? It is very nice to meet you. (<i>Bagaimana keadaanmu? senang sekali bisa bertemu dengan anda</i>)</li>  </ul><b>Contoh Dialog Introducing Others</b><br><b>Silvia</b> : That’s Deri. Do you know him? (<i>Itu Deri. Apakah kamu mengenalnya?</i>)<br><b>Pipit</b> : No, I don’t. (<i>Tidak, aku tidak mengenalnya</i>)<br><b>Silvia</b> : Hello, Deri. How are you? (<i>Halo Deri. Apa kabar?</i>)<br><b>Deri</b> : Hello, Silvia. I\'m fine thanks. (<i>Hai Silvia, aku baik baik saja terima kasih</i>)<br><b>Silvia</b> : Deri, this is a friend of mine, Pipit Nurlaila. (<i>Deri ini temanku, Pipit Nurlaila</i>)<br><b>Deri</b> : Hello Pipit. Pleased to meet you. (<i>Halo Pipit, senang bertemu denganmu</i>)<br><b>Pipit</b> : Hi Deri, Pleased to meet you too. (<i>Hai Deri, senang bertemu denganmu juga</i>)', 'https://illusory-lubricant.000webhostapp.com/ic_image2.jpg'),
(17, '<b>To Be (Am, Is, Are, Was, Were)</b>', 'To Be (Am, Is, Are, Was, Were)', 'To be terdiri dari <b>am, is, are</b> sedangkan <b>was dan were</b> merupakan bentuk lampau-nya. Banyak yang mengartikan to be ini sebagai \'adalah\' namun nyatanya to be ini tidak di artikan dalam bahasa indonesia. Perlu diingat bahwa <b>to be itu digunakan sebagai penghubung antara subjek dan predikat</b>, jadi tidak ada artinya atau bisa juga disebut sebagai kata bantu dari sebuah kalimat. Mari kita simak penjelasannya dalam point-point berikut ini.<br><br><b>Pengertian To Be</b><br><b>Am</b> = Dipakai untuk orang pertama, berpasangan dengan <b>\'I\'</b><br><b>Is</b> = Dipakai untuk orang ketiga tunggal, berpasangan dengan <b>\'He, She, It\'</b><br><b>Are</b> = Dipakai untuk menunjukkan orang yang lebih dari satu (jamak) dan orang kedua berpasangan dengan <b>\'You, We, They\'</b><br>Sedangkan was dan were digunakan untuk bentuk lampau atau simple past tense.<br><b>Was</b> = Merupakan bentuk lampau dari am dan is, berpasangan dengan <b>\'I, He, She, It\'</b><br><b>Were</b> = Merupakan bentuk lampau dari are, berpasangan dengan <b>\'You, We, They\'</b><br><br><b>Penggunaan To be</b><br>Seperti yang kami jelaskan di atas, to be digunakan sebagai penghubung antara subjek dan predikat. Nah predikat ini dapat berupa, Adjective, Adverb, Noun, dan Verb-Ing.<br><br><b>1. To be + Adjective</b><br>Adjective merupakan kata yang menunjukan sifat dari subjek atau objek. Contoh kalimat to be + adjective adalah sebagai berikut.<br>I am Happy (<i>aku senang</i>)<br>She is pretty (<i>dia cantik</i>)<br>That cat is cute (<i>kucing itu lucu</i>)<br>Theu are all kind (<i>mereka semua baik</i>)<br>You are diligent (<i>kamu rajin</i>)<br><br><b>2. To be + Adverb</b><br>Adverb merupakan kata yang menerangkan tempat dan waktu kejadian terjadi. Contoh kalimat to be + adverb adalah sebagai berikut.<br>I am at home (<i>aku ada di rumah</i>)<br>My sister is in the cinema (<i>kakakku sedang ada di bioskop</i>)<br>Fish is in the water (<i>ikan berada di dalam air</i>)<br>We are in the swimming pool (<i>kami ada di kolam renang</i>)<br>They are not in their room (<i>mereka tidak berada di ruangan mereka</i>)<br><br><b>3. To be + Noun</b><br>Noun merupakan kata benda yang menunjukkan sebuah benda, hal, binatang, profesi dan lain sebagainya yang ada di sekitar kita. Contoh kalimat to be + noun adalah sebagai berikut:<br>I am a writer (<i>aku adalah seorang penulis</i>)<br>They are students (<i>mereka adalah siswa</i>)<br>You are a good football player (<i>kamu adalah pemain sepak bola yang bagus</i>)<br>She is a dentist (<i>dia adalah seorang dokter gigi</i>)<br>It is a book (<i>itu adalah sebuah buku</i>)<br>It is a table (<i>itu adalah sebuah meja</i>)<br><br><b>4. To be + Verb-ing</b><br>To be + verb-ing ini merupakan salah satu rumus dari <b><u>Present Continuous Tense</u></b> yang digunakan untuk menyatakan sebuah aktifitas yang masih berlangsung atau sedang di lakukan. Contoh kalimat to be + verb-ing adalah sebagai berikut.<br>I am studying english (<i>aku belajar bahasa inggris</i>)<br>My mother is cooking (<i>ibuku sedang memasak</i>)<br>My father is fishing (<i>ayahku sedang memancing</i>)<br>They are playing chess (<i>mereka sedang bermain catur</i>)<br>We are reading the same book (<i>kami sedang membaca buku yang sama</i>)', 'https://illusory-lubricant.000webhostapp.com/ic_image1.jpg'),
(18, '<b>There is and There are</b>', 'There is and There are', '<b>There is</b> dalam bahasa indonesia berarti \'DISANA ADA\' namun to be \'is\' disana menunjukkan bahwa objek yang ditunjukkan itu hanya SATU atau bisa disebut juga singular. Sebelum objek biasanya dibubuhkan tanda a/an untuk menunjukan \'sebuah\' atau \'seorang\' <u>sementara</u>, <b>There are</b> dalam bahasa indonesia berarti \'DISANA ADA\' namun to be \'are\' disana menunjukkan bahwa objek yang ditunjukkan ada BANYAK / LEBIH DARI SATU atau bisa disebut juga plural. dan di belakang kata benda / noun ditambahkan huruf s/es sebagai penanda kata plural atau banyak.<br><br><b>Contoh kalimat menggunakan There is</b><br><ul><li>There is a cat (<i>disana ada kucing</i>)</li><li>There is a big cake (<i>disana ada sebuah kue yang besar</i>)</li><li>There is a black hat (<i>disana ada sebuah topi hitam</i>)</li><li>There is a delicious new brand chocolate (<i>disana ada sebuah coklat enak dengan merk baru</i>)</li><li>There is a beautiful long dress in the boutique (<i>disana ada sebuah gaun panjang cantik di butik</i>)</li><li>There is a cute baby with her mother (<i>disana ada seorang bayi bersama ibunya</i>)</li><li>There is an apple fall down from its tree (<i>disana ada sebuah apel yang jatuh dari pohonnya</i>)</li><li>There is an empty box for put all your old cassettes (<i>disana ada sebuah kardus kosong untuk menyimpan kaset tuamu</i>)</li><li>There is a monkey eating a banana (<i>disana ada satu monyet yang sedang memakan pisang</i>)</li><li>There is a beautiful girl sitting in the bench alone (<i>disana ada seorang perempuan cantik sedang duduk di kursi taman</i>)</li></ul><b>Contoh kalimat menggunakan There Are</b><br><ul><li>There are players of football (<i>disana ada banyak pemain bola</i>)</li><li>There are rose flowers (<i>disana ada banyak bunga mawar</i>)</li><li>There are cows on the field (<i>disana ada banyak sapi di lapangan</i>)</li><li>There are models for teen magazine (<i>disana ada banyak model untuk majalah teen</i>)</li><li>There are fresh cabbage (<i>disana ada banyak kubis segar</i>)</li><li>There are many people going to the mall during the weekend. (<i>Ada banyak orang yang pergi ke mall pada akhir pekan</i>)</li><li>There are only ten students in this class now. (<i>Ada hanya 10 siswa di kelas ini sekarang</i>)</li><li>There are three boys sitting on the bench. (<i>ada tiga anak laki-laki sedang duduk di atas bangku</i>)</li><li>There are two chairs outside the class. (<i>ada dua kursi di luar kelas</i>)</li><li>There are many fruits in the refrigerator. (<i>ada banyak buah di kulkas</i>)</li></ul>', 'https://illusory-lubricant.000webhostapp.com/ic_image2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materidelapan`
--

CREATE TABLE `materidelapan` (
  `id` int(11) NOT NULL,
  `subjudul` varchar(255) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `isi_materi` varchar(11000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materidelapan`
--

INSERT INTO `materidelapan` (`id`, `subjudul`, `judul_materi`, `isi_materi`, `gambar`) VALUES
(1, '<b>Asking and Offering for Help</b>', 'Asking and Offering for Help', '<b>Example sentence Asking for Help</b>Asking for Help adalah meminta bantuan kepada seseorang. Berikut ini adalah contoh kalimatnya dalam bahasa inggris dan terjemahannya.<br><ul><li>Can you help me? (<i>Bisakah kamu menolongku</i>)</li><li>Could you please give me a hand? (<i>Bisakah kamu menolong saya?</i>)</li><li>Would you like to help me? (<i>Maukah kamu menolongku?</i>)</li><li>Would you mind to come to my house? (<i>Bisakah kamu datang ke rumahku?</i>)</li><li>Could you pass the salt over there, please? (<i>Bisakah kamu mengoper garamnya tolong?</i>)</li><li>Could you take the garbage outside? (<i>Bisakah kamu membawa sampahnya keluar?</i>)</li><li>Could you bring me the newspaper? (<i>Bisakah kamu membawakanku koran?</i>)</li><li>Could you please open the door? (<i>Bisakah kamu membukakan pintunya?</i>)</li><li>Could you lend me some money? (<i>Bisakah kamu meminjamkan aku uang?</i>)</li><li>Can you please come here for a second? (<i>Bisakah kamu datang kesini sebentar saja?</i>)</li></ul>  <b>Responses for Accepting for Help (<i>Tanggapan menerima untuk membantu</i>)</b><ul><li>Okay (<i>Baiklah</i>)</li><li>Yes, I can. (<i>Ya, aku bisa</i>)</li><li>Okay, No problem. (<i>Tentu, tidak masalah</i>)</li><li>Sure (<i>Tentu saja</i>)</li><li>Certainly (<i>Tentu saja</i>)</li><li>No Problem (<i>Tidak masalah</i>)</li></ul><b>Responses for Declining for Help (<i>Tanggapan menolak untuk membantu</i>)</b><ul><li>I\'m sorry, I can\'t. (<i>Maafkan aku, aku tidak bisa</i>)</li><li>Sorry, I can\'t do it. (<i>Maaf, aku tidak bisa melakukannya</i>)</li><li>Sorry, I\'m busy. (<i>Maaf, aku sibuk</i>)</li><li>You better manage it on your own. (<i>Kau urus saja sendiri</i>)</li><li>I\'m afraid I can\'t do it (<i>Aku takut aku tidak bisa melakukannya</i>)</li>\r\n</ul>Berbeda dengan asking for help, Offering for help adalah kalimat atau expression yang menunjukan bahwa kita menawarkan bantuan kepada seseorang yang membutuhkan pertolongan. Mari kita simak contoh kalimatnya di bawah ini.<ul><li>May I help you? (<i>bolehkah aku membantumu?</i>)</li><li>Would you like to help me? (<i>bisakah kau membantuku?</i>)</li><li>Could you pass the salt over there, please? (<i>bisakah anda mengoper garam di sebelah sana tolong?</i>)</li><li>Would you like to come to my house? (<i>bisakah kamu datang ke rumahku?</i>)</li><li>Would you mind if I sit here? (<i>apa tidak apa apa jika aku duduk disini?</i>)</li><li>Open the window, please. (<i>buka jendelanya, tolong</i>)</li><li>Could you please move to another chair? (<i>bisakah kamu pindah ke kursi lain tolong?</i>)</li><li>Would you like a cup of coffee?(<i>maukah kamu secangkir kopi?</i>)</li><li>Could you please tell me where is the library? (<i>bisakah kamu menunjukkan dimana perpustakaan?</i>)</li><li>Would you like to take the garbage outside please? (<i>maukah kamu membawa sampah keluar tolong?</i>)</li><li>May I give you a hand? (<i>Bisakah aku membantumu?</i>)</li><li>Shall I bring you a pillow? (<i>haruskah aku membawakanmu bantal?</i>)</li><li>Can I do the dishes for you? (<i>bisakah aku mencuci piring untukmu?</i>)</li><li>Shall I help you with your project? (<i>haruskah aku menolongmu dengan tugasmu?</i>)</li><li>Would you care for another cup of tea? (<i>maukah kamu secangkir teh lagi?</i>)</li></ul><b>Accepting Offers (<i>Menerima Bantuan</i>)</b><ul><li>Thank you. (<i>terimakasih</i>)</li><li>Yes, please. (<i>ya tolong</i>)</li><li>I\'d like it very much. (<i>aku akan sangat menyukainya</i>)</li><li>I\'m pleased to do that. (<i>aku senang melakukannya</i>)</li><li>With Pleasure thank you. (<i>dengan senang hati, terimakasih</i>)</li><li>Yes please. I really appreciate it. (<i>ya tolong, aku sangat menghargainya</i>)</li><li>Thank you, it\'s very kind of you (<i>terimakasih, kamu baik sekali</i>)</li><li>Yes, please, that would be lovely (<i>ya tolong, itu akan sangat menyenangkan</i>)</li></ul><b>Declining Offers (<i>Menolak Bantuan</i>)</b><ul><li>No thanks. (<i>tidak terimakasih</i>)</li><li>I can\'t, thanks anyway (<i>aku tidak bisa, terimakasih</i>)</li><li>No, I really won\'t, thank you (<i>tidak, aku tidak mau, terimakasih</i>)</li><li>It\'s okay, I can do it myself. (<i>terimakasih, aku bisa melakukannya sendiri</i>)</li><li>No thank you. (<i>tidak terimakasih</i>)</li><li>No thanks, I don\'t need any help (<i>tidak terimakasih, aku tidak membutuhkan bantuan</i>)</li><li>Don\'t worry, I will do it myself. (<i>jangan khawatir, aku akan melakukannya sendiri</i>)</li><li>That\'s alright, I will manage it on my own. (<i>tidak apa apa, aku akan melakukannya sendiri</i>)</li></ul>', ''),
(2, '<b>Adjective</b>', 'Adjective', 'Adjectives adalah sebuah kata yang menjelaskan sifat dari sebuah benda.<br><b>Jenis-Jenis Adjective</b><ul><li><b>Comparative Adjective</b><br>Comparative adjective adalah kata sifat yang membandingkan satu hal dengan hal yang lain. yang dibandingkan dapat berbentuk benda, orang, atau binatang.<br>Contoh kalimat:<br>- Jaguar is faster than Lion (<i>Jaguar lebih cepat daripada singa</i>)<br>- I am taller than my father (<i>aku lebih tinggi daripada ayahku</i>)<br>- My hair is shorter than Gina (<i>rambutku lebih pendek daripada gina</i>)</li><li><b>Superlative Adjective</b><br>Superlative adjective adalah kata sifat dalam bahasa inggris yang digunakan untuk mengungkapkan tingkatan yang paling tinggi dalam suatu kelompok.<br>Contoh Kalimat:<br>- The holiday with you is the happiest holiday ever (<i>liburan bersamamu adalah liburan yang paling menyenangkan yang pernah aku alami</i>)<br>- The Great Wall of China is the longest wall in the world (<i>Tembok cina adalah tembok terpanjang di dunia</i>)<br>- Jia got the highest score in our class (<i>Jia mendapatkan nilai tertinggi di kelas kami</i>)</li><li><b>Possessive Adjective</b><br>Posessive adjective digunakan untuk menerangkan siapa yang memiliki/mempunyai suatu benda.<br>Contoh kalimat:<br>- It is my bag (<i>itu adalah tasku</i>)<br>- My daughter is winning the first rank on her school (<i>anak perempuanku memenangkan rangking pertama di sekolahnya</i>)<br>- Egga\'s son is sick, now he bring him to the doctor (<i>anak laki-laki egga sedang sakit, sekarang dia membawanya ke dokter</i>)</li><li><b>Common Adjective</b><br>Common adjective adalah kata sifat yang murni adjective, atau tidak terbentuk dari unsur apapun<br>Contoh Kalimat:<br>- I\'m happy to say that today you will come to my house (<i>aku senang karena kamu akan datang ke rumahku hari ini</i>)<br>- I have a pink hat (<i>aku pinya topi berwarna merah muda</i>)<br> - Sleep at night is important for your health (<i>tidur di malam hari baik untuk kesehatanmu</i>)</li><li><b>Past Participle</b><br>Past participle adalah V3.<br>Contoh Kalimat<br>- My phone is broken (<i>ponselku rusak</i>)<br>- I am confused with the way to your house (<i>aku bingung dengan jalan ke rumahmu</i>)<br>- The problem is finally solved by itself (<i>masalah akhirnya terselesaikan dengan sendirinya</i>)</li><li><b>Article</b><br>Article adalah \'a\', \'an\' dan \'the\' semuanya ini termasuk bagian dari adjective.<br>Contoh Kalimat:<br>- I have a pen and an apple (<i>aku punya pulpen dan apel</i>)<br>- The students will have exams on next week (<i>para siswa akan menjalani ujian pada minggu depan</i>)</li><li><b>Demonstrative Adjective</b><br>Demonstrative adjective adalah adjective yang menunjukkan sesuatu seperti this, that, those, dan these.<br>Contoh Kalimat:<br>- This is my girlfriend (<i>ini adalah pacarku</i>)<br>- That is my book (<i>itu adalah bukuku</i>)<br>- Those students will have a trip on next month (<i>para siswa itu akan menjalani liburan bulan depan</i>)</li><li><b>Interrogative Adjective</b><br> Interrogative adjective adalah kata tanya seperti what, when, which, who, how, dan lain lain.<br>Contoh kalimatnya :<br>- Who is your boyfriend names? (<i>siapa nama pacarmu?</i>)<br>- Which one is your dog? (<i>yang mana anjingmu?</i>)<br>- When is your birthday? (<i>kapan ulang tahunmu?</i>)</li></ul>', '1.png'),
(3, '<b>Descriptive Text</b>', 'Descriptive Text', '<b>Generic Structure dari Descriptive Text</b><ul><li><b>Identification</b><br>Bagian identification berisi pendahuluan dan gambaran umum tentang suatu topik. Identification berfungsi sebagai pengenalan dari apa yang kita sedang jelaskan. supaya para pembaca atau pendengar tidak salah mengerti. Misalnya yang kita jelaskan adalah kucing, namun para pembaca/pendengar malah salah mengerti menjadi anjing,</li><li><b>Description</b><br>Pada bagian description berisi ciri-ciri khusus atau sifat-sifat yang terdapat dalam benda, orang, atau binatang yang sedang kamu jelaskan</li></ul><br><h4><b>My Dog</b></h4><br><b>(Identification)</b><br>My dad bought me a dog on my birthday. It is a male golden retriever dog. I really love him as my pet.<br><br><b>(Description)</b><br>His name is Jiji. He has brown fur. His fur is really soft and he likes to be rubbed on his belly. He has a long tail and big body. I always take him for walk around because he really like it. Jiji is already as the part of our family.<br><br><b>Penjelasan:</b><ul><li>Paragraf pertama merupakan Identification karena menceritakan hal umum dari seluruh cerita. Seperti bahwa penulis mempunyai anjing jantan yang diberikan oleh ayahnya saat dia berulang tahun.</li><li>Paragraf kedua merupakan Description atau penjelasan keseluruhan umum ke khusus. Seperti bahwa nama anjingnya pada text diatas adalah Jiji dengan bulu coklat yang halus, juga diceritakan bagaimana sifat dan kebiasaan dari anjing tersebut.</li></ul>', '123.png'),
(4, '<b>Grammar : Simple Present Tense</b>', 'Grammar : Simple Present Tense', 'Simple Present adalah tenses (pola kalimat) yang digunakan untuk menceritakan sebuah kejadian yang terjadi pada saat ini dalam bentuk sederhana. Rumus Kalimat Simple Present Tense.<br><br><b>Contoh Kalimat Simple Present Tense</b><ul><li>I don\'t like western music. (<i>aku tidak suka musik barat</i>)</li><li>My father thinks that have a cat as a pet is better. (<i>Ayahku beranggapan bahwa mempunyai kucing sebagai peliharaan itu lebih baik</i>)</li><li>My mother gets angry when i got bad scores. (<i>Ibuku marah kalau aku dapat nilai jelek</i>)</li><li>We don\'t talk anymore. (<i>Kita tidak berkomunikasi lagi</i>)</li><li>He doesn\'t play football anymore, since his legs hurts badly. (<i>Dia tidak bermain sepak bola lagi semenjak kakinya sakit banget</i>)</li></ul>', 'https://illusory-lubricant.000webhostapp.com/table.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materisembilan`
--

CREATE TABLE `materisembilan` (
  `id` int(11) NOT NULL,
  `submateri` varchar(255) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `isi_materi` varchar(11000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(10) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `e` varchar(50) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `soal`, `a`, `b`, `c`, `d`, `e`, `correct`) VALUES
(2, 'The way to ask someone’s news is?', 'How is life?', 'Where are you?', 'What is that?', 'Do you like it?', 'What do you mean?', 1),
(4, 'It’s seven o’clock in the morning. Gina will go to school. She says......... to his parents.', 'Good night', 'Good afternoon', 'Good bye', 'Good morning', 'Good work', 4),
(6, 'It’s nine o’clock in the night. Gia will go to sleep. He says....... to his parents', 'Good night', 'Good afternoon', 'Good bye', 'Good morning', 'Good work', 1),
(7, 'Which one in the following is the expression of  leave-taking?', 'We have had a wonderful time', 'How do you do?', 'How are you today?', 'How long today?', 'I am sorry, I have to leave now.', 5),
(8, 'Before Widi goes to school in the morning, what she says to her parent?', 'Chase my way', 'Go far away', 'Cheerio.', 'Go away', 'Just go', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soaldelapan`
--

CREATE TABLE `soaldelapan` (
  `id` int(100) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `e` varchar(100) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soaldelapan`
--

INSERT INTO `soaldelapan` (`id`, `soal`, `a`, `b`, `c`, `d`, `e`, `correct`) VALUES
(2, 'Generally, girls are ______ than boys', 'most talkative', 'talk', 'talkative', 'more talkative', 'talkative', 4),
(3, 'Cricket is an ______game.', 'exciting', 'excitengest', 'excited', 'excitinger', 'excitengest', 1),
(4, 'Arpita is looking _______ in this dress.', 'Gorgeouser', 'Gorgeous', 'Gorgeousest', 'Gorgeousest', 'George', 2),
(5, 'She has a very ______voice.', 'sour bitter', 'Sweetest', 'sweet', 'sweater', 'sour bitter', 3),
(6, 'Diamond is the _______natural material.', 'hard', 'smooth', 'harder', 'hard rock', 'hardest', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soalsembilan`
--

CREATE TABLE `soalsembilan` (
  `id` int(100) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `e` varchar(100) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soalsembilan`
--

INSERT INTO `soalsembilan` (`id`, `soal`, `a`, `b`, `c`, `d`, `e`, `correct`) VALUES
(1, 'I was sleeping when somebody knocked the door.', 'I was slept when somebody knocked the door.', 'I had slept when somebody knocked the door.', 'I hadn\'t slept when somebody knocked the door.', 'I had slept when someone knocked the window.', 'I have slept when somebody knocked the door.', 2),
(2, 'I was working when Shanti came.', 'I had not work when Shanti came.', 'I had not worked when Shanti come.', 'I had worked when Shanti come.', 'I had not work when Shanti come.', 'I had not worked when Shanti came.', 5),
(3, 'Budi had lived in Bali.', 'Had Budi Live in Bali?', 'Is Budi living in Bali?', 'Had Budi lived in Bali?', 'Do Budi lived in Bali?', 'Has Budi lived in Bali?', 3),
(4, 'My father had eaten before I worked.', 'Hadn\'t my father eaten before I worked?', 'Hadn\'t my father ate before I worked?', 'Had my father ate before I worked?', 'Had my father not eat before I worked?', 'don\'t my father eaten before I worked?', 1),
(5, 'The mechanic had been repairing my car.', 'The mechanic had repaired my car.', 'The mechanic do repaired my car.', 'The mechanic has repair my car.', 'The mechanic has been repairing my car.', 'The mechanic had repair my car.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'akunkedua', 'akunkedua@email.com', '$2y$10$EljFyE9sL7xlGK59dd7HmuTJG/88rsIC4FkY6E1Jebs35ri6tBOUm', '2021-06-23 02:11:59', '2021-06-23 02:11:59'),
(4, 'aa', 'sdf@gmail.com', '$2y$10$VEJoyP1HnAWhRkWF.s6K2OK.SJnrEw1IX0MEbcB.KcwEwmDeJ8bQq', '2021-06-27 06:49:14', '2021-06-27 06:49:14'),
(5, 'syarifah', 'syarifatulaisyiyah@gmail.com', '$2y$10$QIG6uk9JR6haXUy8gyq/nedgW6yAhP6j3UxCEr6DF5mwWmczCb0Z6', '2021-06-27 07:02:54', '2021-06-27 07:02:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materidelapan`
--
ALTER TABLE `materidelapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materisembilan`
--
ALTER TABLE `materisembilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soaldelapan`
--
ALTER TABLE `soaldelapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soalsembilan`
--
ALTER TABLE `soalsembilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `materidelapan`
--
ALTER TABLE `materidelapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `materisembilan`
--
ALTER TABLE `materisembilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `soaldelapan`
--
ALTER TABLE `soaldelapan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `soalsembilan`
--
ALTER TABLE `soalsembilan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
