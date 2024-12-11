-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 11:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `npsn` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kepala_sekolah` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `npsn`, `alamat`, `kepala_sekolah`, `status`, `jenjang`, `latitude`, `longitude`, `gambar`) VALUES
(77, 'PERWANIDA 12 BELO', '69898804', 'ANDI JARUJU', 'nurul Hasanah(Operator)', 'Swasta', 'RA', '-4.333413139720760', '119.94027043708300', 'RA_PERWANIDA_12_BELO.png'),
(78, 'RA DDI Leworeng', '69898799', 'LEWORENG', 'Mutmainnah(operator)', 'Swasta', 'RA', '-4.2430046001267600', '119.91143311480500', 'RA_DDI_Leworeng.png'),
(79, 'RA Yasrib kabaro', '69898795', 'Andi Mattingara kabaro', 'Sukmawati (operator)', 'Swasta', 'RA', '-4.273927888696520', '119.89430970824600', 'RA_Yasrib_kabaro.png'),
(80, 'RA DDI Panincong', '69898840', 'Jln.Pendidikan no.1 Panincong', 'Riska Malasari(operator)', 'Swasta', 'RA', '-4.203212475554770', '119.88841142747700', 'RA_DDI_Panincong.png'),
(81, 'Perwanida 3 Limpomajang', '69898834', 'Jl.H.Musa No.84', 'Mas\'ati (operator)', 'Swasta', 'RA', '-4.142164478820600', '119.90231352358900', 'RA_Perwanida_3_Limpomajang.png'),
(82, 'Perwanida 9 Lompoe', '69898838', 'Jln. Poros Soppeng Sidrap', 'Hasnawiyah(operator)', 'Swasta', 'RA', '-4.175700156033520', '119.8882918800550', 'RA_Perwanida_9_Lompoe.png'),
(83, 'RA Perwanida 2 Batu Batu', '69898836', 'Batu Batu Jl.H.Andi Meru. Kel.Manorang Salo', 'Haslinda (operator)', 'Swasta', 'RA', '-4.143224285228780', '119.8838408206200', 'RA_Perwanida_2_Batu_Batu.png'),
(84, 'RA DDI Al Muttaqin Paomallimpoe', '69898812', 'Jl. Marewangeng', 'Heriani (operator)', 'Swasta', 'RA', '-4.387519605577690', '119.92198176977100', 'RA_DDI_Al_Muttaqin_Paomallimpoe.png'),
(85, 'RA DDI Lenrang', '69898814', 'Lenrang', 'Jumasni (operator0', 'Swasta', 'RA', '-4.3823185068776200', '119.98778783738000', 'RA_DDI_Lenrang.png'),
(86, 'RA Massinring Pulu DDI Tengapadange', '69898816', 'Lagoci', 'Marhuni (operator)', 'Swasta', 'RA', '-4.429996971944570', '119.90891530246800', 'RA_Massinring_Pulu_DDI_Tengapadange.png'),
(87, 'RA DDI An-nisaa Lawara', '69898819', 'Lawara', 'Sitti Hartina (operator)', 'Swasta', 'RA', '-4.385304109705910', '119.93221354114000', 'RA_RA_DDI_An-nisaa_Lawara.png'),
(88, 'KB. MAPPEDECENG I', '69775919', 'JL. POROS BULU DUA TANJONGE', 'Rosdiana, S.pd', 'Swasta', 'KB', '-4.514200000000', '119.8649993000', 'KB__MAPPEDECENG_I.png'),
(89, 'KB. MAPPEDECENG II', '69775923', 'TOMPOE', 'Andi Yusmiati (operator)', 'Swasta', 'KB', '-4.472722346056050', '119.91156578700300', 'KB__MAPPEDECENG_II.png'),
(90, 'KB NABIGH', '69830158', 'Jl. Bukit Tuju Wali-wali', 'Andi Hermiyati, S.Pd', 'Swasta', 'KB', '-4.3674987304049500', '119.89729945242800', 'KB_NABIGH.png'),
(91, 'KB SUMPANG BILA', '69775867', 'JL. MERDEKA NO.86', 'Hj. Atirah', 'Swasta', 'KB', '-4.3463898643922900', '119.88222624484500', 'KB_SUMPANG_BILA.png'),
(92, 'KB. ANGGREK', '69775874', 'MAKKUNTU', 'Nurmisa, S.Pd. Aud', 'Swasta', 'KB', '-4.347484854923730', '119.90662884811900', 'KB__ANGGREK.png'),
(93, 'KB. TUNAS BANGSA', '69777336', 'JL.WIJAYA', 'Numratul Wahidah', 'Swasta', 'KB', '-4.35505183258018', '119.88423741903300', 'KB__TUNAS_BANGSA.png'),
(94, 'KB AL- HIKMAH', '69830153', 'JARAE- ABBANUANGE', 'Mimi Adrianti Rosita', 'Swasta', 'KB', '-4.399197147465060', '119.94972063596300', 'KB_AL-_HIKMAH.png'),
(96, 'KB. MARDIATUL WILDAN', '69776033', 'DABBARE', 'Nursaminingrat', 'Swasta', 'KB', '-4.392536230391510', '119.91657480824700', 'KB__MARDIATUL_WILDAN.png'),
(97, 'KB. AL IKHWAN', '69776023', 'LAMALAMPE', 'Jurnawati(operator)', 'Swasta', 'KB', '-4.261644401712460', '119.95543370485100', 'KB__AL_IKHWAN.png'),
(98, 'KB. NUR IKHLAS AISYIYAH I', '69776069', 'JL. POROS LABAE CITTA', 'Sunarti', 'Swasta', 'KB', '-4.431294953802220', '120.03146481010100', 'KB__NUR_IKHLAS_AISYIYAH_I.png'),
(99, 'TK ABA HUBBUL WATAN TANALLE', '40314733', 'TANALLE', 'Damayanti', 'Swasta', 'TK', '-4.514200000000', '119.929100000000', 'TK_ABA_HUBBUL_WATAN_TANALLE.png'),
(100, 'TK FATHUL ISLAMI', '69985465', 'Desa Soga', 'Asmiar', 'Swasta', 'TK', '-4.470658042805000', '119.99601061667400', 'TK_FATHUL_ISLAMI.jpeg'),
(101, 'TK HATI MULIA SOGA', '40314735', 'JL H A MADE ALI BELLALAO', 'Sukrianingsih, S.Pd. Aud', 'Swasta', 'TK', '-4.487342156271360', '119.99689745242900', 'TK_HATI_MULIA_SOGA.jpeg'),
(103, 'TK AISYIYAH BUSTANUL ATHFAL CENRANA', '40314758', 'CENRANA', 'Wahyuni(operator)', 'Swasta', 'TK', '-4.3246000000000', '119.910800000000', 'TK_AISYIYAH_BUSTANUL_ATHFAL_CENRANA.jpg'),
(104, 'TK AISYIYAH BUSTANUL ATHFAL SEWO', '40314753', 'JL. mesjid sewo', 'Refiana, A.Ma(operator)', 'Swasta', 'TK', '-4.348331000000', '119.8732580000', 'TK_AISYIYAH_BUSTANUL_ATHFAL_SEWO.jpg'),
(105, 'TK PUTRA III MALAKA', '40314755', 'JL.MALAKA RAYA NO.226', 'A. Wikramawardani', 'Swasta', 'TK', '-4.34876680', '119.8957602', 'TK_PUTRA_III_MALAKA.jpg'),
(106, 'TK TERATAI SOPPENG', '40314748', 'JL.KAYANGAN', 'Musdalifah', 'Swasta', 'TK', '-4.35948080', '119.8799067', 'TK_TERATAI_SOPPENG.jpg'),
(107, 'TK AISYIYAH BUSTANUL ATHFAL LAJOA', '40314721', 'JALAN SUNGAI WALENNAE', 'Zul Asni', 'Swasta', 'TK', '-4.4036020', '119.945396', 'TK_AISYIYAH_BUSTANUL_ATHFAL_LAJOA.jpg'),
(108, 'TK PKK MUJAHIDIN LAMOGO', '69923486', 'JALAN ANDI OTTONG', 'Fatima A', 'Swasta', 'TK', '-4.3976786', '119.9024842', 'TK_PKK_MUJAHIDIN_LAMOGO.jpg'),
(109, 'TK YAYASAN KITA APPALARINGE', '40318143', 'APPALARINGE', 'Andi Arfiani (operator)', 'Swasta', 'TK', '-4.35951050', '119.9545676', 'TK_YAYASAN_KITA_APPALARINGE.jpg'),
(110, 'TK PKK BULUE', '69777793', 'BULUE', 'Nur Alam', 'Swasta', 'TK', '-4.15406720', '119.8238693', 'TK_PKK_BULUE.jpg'),
(111, 'TK PKK JABAL RIDHO', '69944537', 'BERA', 'Ernia', 'Swasta', 'TK', '-4.1153880', '119.840675', 'TK_PKK_JABAL_RIDHO.jpg'),
(112, 'TK NURUL AMIN', '40314704', 'TODDANG SALOE', 'fatima', 'Swasta', 'TK', '-4.23663170', '119.9282089', 'TK_NURUL_AMIN.jpg'),
(113, 'TK NUSA PUTRA', '40314703', 'LEWORENG', 'Nurdima Dg. Djawaruddin', 'Swasta', 'TK', '-4.24150', '119.9218', 'TK_NUSA_PUTRA.jpg'),
(114, 'TK AS ADIYAH LOMPENGENG', '69926594', 'JL. PEMILIHAN', 'Gusnaini', 'Swasta', 'TK', '-4.3388464', '119.9739342', 'TK_AS_ADIYAH_LOMPENGENG.jpg'),
(115, 'TK AS ADIYAH PETTA MARILALENGE', '40314771', 'TALEPU', 'Asirah Aras', 'Swasta', 'TK', '-4.3661214', '119.99882941', 'TK_AS_ADIYAH_PETTA_MARILALENGE.jpg'),
(116, 'TK NEGERI MARIO TAKALALA', '40314726', 'JL.H.Muh SANUSI', 'Syamsiah', 'Negeri', 'TK', '-4.434425118500560', '119.94973754568300', 'TK_NEGERI_MARIO_TAKALALA.jpeg'),
(117, 'TK NEGERI PEMBINA CANGADI', '40314719', 'JALAN APPANANG RAYA CANGADI', 'Erlita Ulfa(operator)', 'Negeri', 'TK', '-4.371348338355680', '119.9491096389360', 'TK_NEGERI_PEMBINA_CANGADI.jpeg'),
(118, 'TK NEGERI SIPURENNU BARATA', '40314731', 'JL.BARATA', 'Hj. Nurmatiah', 'Negeri', 'TK', '-4.504770268711800', '119.88305026592100', 'TKN_SIPURENNU_BARATA.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'andifa', 'andifa', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
