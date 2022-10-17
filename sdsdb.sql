-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2022 at 10:49 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `slug`) VALUES
(337, '5225 Sayılı Kanun Mevzuatı\n', '5225-sayili-kanun-mevzuati'),
(338, '5510 Sayılı Kanun Mevzuatı\n', '5510-sayili-kanun-mevzuati'),
(339, '5746 Sayılı Kanun Mevzuatı\n', '5746-sayili-kanun-mevzuati'),
(340, '6736 Sayılı Kanun Mevzuatı', '6736-sayili-kanun-mevzuati'),
(341, '7020 Sayılı Kanun Mevzuatı', '7020-sayili-kanun-mevzuati'),
(342, 'Amortismanlar\n', 'amortismanlar'),
(343, 'Anayasa Mahkemesi Kararları\n', 'anayasa-mahkemesi-kararlari'),
(344, 'Asgari Geçim İndirimi / AGİ\n', 'asgari-gecim-indirimi-agi'),
(345, 'Asgari İşçilik\n', 'asgari-iscilik'),
(346, 'Asgari Ücretler\n', 'asgari-uecretler'),
(347, 'Bağımsız Denetim\n', 'bagimsiz-denetim'),
(348, 'Bakanlar Kurulu Kararları\n', 'bakanlar-kurulu-kararlari'),
(349, 'Başbakanlık Genelgeleri\n', 'basbakanlik-genelgeleri'),
(350, 'BDDK Mevzuatı\n', 'bddk-mevzuati'),
(351, 'Belediye Gelirleri Sirküleri\n', 'belediye-gelirleri-sirkueleri'),
(352, 'Belediye Gelirleri Tebliğleri\n', 'belediye-gelirleri-tebligleri'),
(353, 'Bilgi Edinme Mevzuatı\n', 'bilgi-edinme-mevzuati'),
(354, 'Bilgiler\n', 'bilgiler'),
(355, 'Bilim Sanayi Mevzuatı\n', 'bilim-sanayi-mevzuati'),
(356, 'Bireysel Emeklilik\n', 'bireysel-emeklilik'),
(357, 'Borçlar Kanunu Mevzuatı\n', 'borclar-kanunu-mevzuati'),
(358, 'Çevre Mevzuatı\n', 'cevre-mevzuati'),
(359, 'Çifte Vergiyi Önleme Tebliği/Sirküleri\n', 'cifte-vergiyi-oenleme-tebligisirkueleri'),
(360, 'ÇSGB Mevzuatı\n', 'csgb-mevzuati'),
(361, 'Damga Vergisi Sirküleri\n', 'damga-vergisi-sirkueleri'),
(362, 'Damga Vergisi Tebliğleri\n', 'damga-vergisi-tebligleri'),
(363, 'Danıştay Kararları\n', 'danistay-kararlari'),
(364, 'Defterler\n', 'defterler'),
(365, 'Değerli Kağıtlar Tebliğleri\n', 'degerli-kagitlar-tebligleri'),
(366, 'Dernekler Mevzuatı\n', 'dernekler-mevzuati'),
(367, 'Diğer Mevzuat\n', 'diger-mevzuat'),
(368, 'Döviz Kazandırıcı Faal.\n', 'doeviz-kazandirici-faal'),
(369, 'DTM Mevzuatı\n', 'dtm-mevzuati'),
(370, 'Duyurular\n', 'duyurular'),
(371, 'e-Beyanname\n', 'e-beyanname'),
(372, 'e-Bildirge\n', 'e-bildirge'),
(373, 'e-Defter\n', 'e-defter'),
(374, 'e-Fatura\n', 'e-fatura'),
(375, 'e-İmza\n', 'e-imza'),
(376, 'Ekonomi Haberleri\n', 'ekonomi-haberleri'),
(377, 'Emlak Vergisi Sirküleri\n', 'emlak-vergisi-sirkueleri'),
(378, 'Emlak Vergisi Tebliğleri\n', 'emlak-vergisi-tebligleri'),
(379, 'Enflasyon Muhasebesi\n', 'enflasyon-muhasebesi'),
(380, 'Engelli Mevzuatı\n', 'engelli-mevzuati'),
(381, 'Fatura / İrsaliye / Adisyon\n', 'fatura-irsaliye-adisyon'),
(382, 'Finansal Kiralama - Faktoring - İkrazatçılık - Leasing\n', 'finansal-kiralama-faktoring-ikrazatcilik-leasing'),
(383, 'Galeri\n', 'galeri'),
(384, 'Gelir Vergisi Özelgeleri\n', 'gelir-vergisi-oezelgeleri'),
(385, 'Gelir Vergisi Sirküleri\n', 'gelir-vergisi-sirkueleri'),
(386, 'Gelir Vergisi Tebliğleri\n', 'gelir-vergisi-tebligleri'),
(387, 'Genel\n', 'genel'),
(388, 'Genel Sağlık Sigortası\n', 'genel-saglik-sigortasi'),
(389, 'Gıda Bankacılığı\n', 'gida-bankaciligi'),
(390, 'Gider Vergileri Sirküleri\n', 'gider-vergileri-sirkueleri'),
(391, 'Gider Vergileri Tebliğleri\n', 'gider-vergileri-tebligleri'),
(392, 'Gümrük İthalat/İhracat\n', 'guemruek-ithalatihracat'),
(393, 'Harcırah Kanunu Tebliğleri\n', 'harcirah-kanunu-tebligleri'),
(394, 'Harçlar Kanunu Sirküleri\n', 'harclar-kanunu-sirkueleri'),
(395, 'Harçlar Kanunu Tebliğleri\n', 'harclar-kanunu-tebligleri'),
(396, 'Hazine Mevzuatı\n', 'hazine-mevzuati'),
(397, 'İhbar Tazminatı\n', 'ihbar-tazminati'),
(398, 'İnşaat Mevzuatı\n', 'insaat-mevzuati'),
(399, 'İPC ve Parasal Sınırlar\n', 'ipc-ve-parasal-sinirlar'),
(400, 'İş Kazası Mevzuatı\n', 'is-kazasi-mevzuati'),
(401, 'İş Sağlığı ve Güvenliği\n', 'is-sagligi-ve-guevenligi'),
(402, 'İşçilik Maliyetleri\n', 'iscilik-maliyetleri'),
(403, 'İşkur Mevzuatı\n', 'iskur-mevzuati'),
(404, 'İşsizlik Sigortası\n', 'issizlik-sigortasi'),
(405, 'Kadın İşçiler\n', 'kadin-isciler'),
(406, 'Kamu Gözetimi Kurumu\n', 'kamu-goezetimi-kurumu'),
(407, 'Kamu İhale Kanunu Mevzuatı\n', 'kamu-ihale-kanunu-mevzuati'),
(408, 'Kamu Kurumları Mevzuatı\n', 'kamu-kurumlari-mevzuati'),
(409, 'Kanun Hükmünde Kararnameler\n', 'kanun-huekmuende-kararnameler'),
(410, 'Kanunlar\n', 'kanunlar'),
(411, 'Kara Para ve Mali Suç\n', 'kara-para-ve-mali-suc'),
(412, 'KDV Özelgeleri\n', 'kdv-oezelgeleri'),
(413, 'KDV Sirküleri\n', 'kdv-sirkueleri'),
(414, 'KDV Tebliğleri\n', 'kdv-tebligleri'),
(415, 'Kıdem Tazminatı\n', 'kidem-tazminati'),
(416, 'Kısa Kısa\n', 'kisa-kisa'),
(417, 'KKDF Fonu Sirküleri\n', 'kkdf-fonu-sirkueleri'),
(418, 'KKDF Tebliğleri\n', 'kkdf-tebligleri'),
(419, 'KOBİ/KOSGEB\n', 'kobikosgeb'),
(420, 'Kooperatifler\n', 'kooperatifler'),
(421, 'Kurumlar V. Özelgeleri\n', 'kurumlar-v-oezelgeleri'),
(422, 'Kurumlar Vergisi\n', 'kurumlar-vergisi'),
(423, 'Kurumlar Vergisi Kanunu Sirküleri\n', 'kurumlar-vergisi-kanunu-sirkueleri'),
(424, 'Kurumlar Vergisi Tebliğleri\n', 'kurumlar-vergisi-tebligleri'),
(425, 'M2 İnşaat Birim Maliyetleri\n', 'm2-insaat-birim-maliyetleri'),
(426, 'Makaleler\n', 'makaleler'),
(427, 'Mali Tatil Mevzuatı\n', 'mali-tatil-mevzuati'),
(428, 'Maliye Genelgeleri\n', 'maliye-genelgeleri'),
(429, 'Manşet\n', 'manset'),
(430, 'Meslek Standartları\n', 'meslek-standartlari'),
(431, 'Milli Emlak Genel Tebliğleri\n', 'milli-emlak-genel-tebligleri'),
(432, 'Mortgage (Tutsat)\n', 'mortgage-tutsat'),
(433, 'MTV Sirküleri\n', 'mtv-sirkueleri'),
(434, 'MTV Tebliğleri\n', 'mtv-tebligleri'),
(435, 'Muhasebe Sistemi Uygulama Genel Tebliğleri\n', 'muhasebe-sistemi-uygulama-genel-tebligleri'),
(436, 'Müteahhitlik Mevzuatı\n', 'mueteahhitlik-mevzuati'),
(437, 'Ödeme Kaydedici Cihaz Özelgeleri\n', 'oedeme-kaydedici-cihaz-oezelgeleri'),
(438, 'Ödeme Kaydedici Cihaz Sirküler/Tebliğler\n', 'oedeme-kaydedici-cihaz-sirkuelertebligler'),
(439, 'ÖTV Sirküleri\n', 'oetv-sirkueleri'),
(440, 'ÖTV Tebliğleri\n', 'oetv-tebligleri'),
(441, 'Özel Finans Kur. Mevz.\n', 'oezel-finans-kur-mevz'),
(442, 'Özel Güvenlik Mevzuatı\n', 'oezel-guevenlik-mevzuati'),
(443, 'Özel İletişim Vergisi Tebliğleri\n', 'oezel-iletisim-vergisi-tebligleri'),
(444, 'Özel İstihdam Büroları\n', 'oezel-istihdam-buerolari'),
(445, 'Özelgeler\n', 'oezelgeler'),
(446, 'Para Kredi Koordinasyon\n', 'para-kredi-koordinasyon'),
(447, 'Rehberler\n', 'rehberler'),
(448, 'Rekabet Kurumu\n', 'rekabet-kurumu'),
(449, 'Sanatçıların Sigortalılığı\n', 'sanatcilarin-sigortaliligi'),
(450, 'Sayıştay Kararları\n', 'sayistay-kararlari'),
(451, 'Serbest Bölgeler Sirküleri\n', 'serbest-boelgeler-sirkueleri'),
(452, 'Serbest Bölgeler Tebliğ/Mevzuat\n', 'serbest-boelgeler-tebligmevzuat'),
(453, 'SGK\n', 'sgk'),
(454, 'SGK Genelgeleri\n', 'sgk-genelgeleri'),
(455, 'SGK Taban Tavan\n', 'sgk-taban-tavan'),
(456, 'SGK Tebliğleri\n', 'sgk-tebligleri'),
(457, 'SGK Teşvikleri\n', 'sgk-tesvikleri'),
(458, 'Sigortacılık\n', 'sigortacilik'),
(459, 'Şirketler Mevzuatı\n', 'sirketler-mevzuati'),
(460, 'Sirküler\n', 'sirkueler'),
(461, 'SM-SMMM-YMM Mevzuatı\n', 'sm-smmm-ymm-mevzuati'),
(462, 'SPK Mevzuatı\n', 'spk-mevzuati'),
(463, 'Tahsilat Genel Tebliğleri\n', 'tahsilat-genel-tebligleri'),
(464, 'Tasarılar\n', 'tasarilar'),
(465, 'TCMB Mevzuatı\n', 'tcmb-mevzuati'),
(466, 'Tebliğler\n', 'tebligler'),
(467, 'Teknoloji\n', 'teknoloji'),
(468, 'TMSK\n', 'tmsk'),
(469, 'Transfer Fiyatlandırması\n', 'transfer-fiyatlandirmasi'),
(470, 'Transfer Fiyatlandırması Sirküleri\n', 'transfer-fiyatlandirmasi-sirkueleri'),
(471, 'TÜİK Mevzuatı\n', 'tueik-mevzuati'),
(472, 'Tüketici Mevzuatı\n', 'tueketici-mevzuati'),
(473, 'Türk Ticaret Kanunu Mevzuatı\n', 'tuerk-ticaret-kanunu-mevzuati'),
(474, 'Tüzükler\n', 'tuezuekler'),
(475, 'Ücretler Mevzuatı\n', 'uecretler-mevzuati'),
(476, 'Uzlaşma Vergi/SGK\n', 'uzlasma-vergisgk'),
(477, 'Vakıflar Mevzuatı\n', 'vakiflar-mevzuati'),
(478, 'Veraset ve İntikal V. Sirküleri\n', 'veraset-ve-intikal-v-sirkueleri'),
(479, 'Veraset ve İntikal Vergisi Tebliğleri\n', 'veraset-ve-intikal-vergisi-tebligleri'),
(480, 'Vergi\n', 'vergi'),
(481, 'Vergi Kanunları\n', 'vergi-kanunlari'),
(482, 'Vergi Takvimi\n', 'vergi-takvimi'),
(483, 'Vergi Usul Kanunu Özelgeleri\n', 'vergi-usul-kanunu-oezelgeleri'),
(484, 'Vergi Usul Kanunu Sirküleri\n', 'vergi-usul-kanunu-sirkueleri'),
(485, 'Vergi Usul Kanunu Tebliğleri\n', 'vergi-usul-kanunu-tebligleri'),
(486, 'Vergisel Teşvikler\n', 'vergisel-tesvikler'),
(487, 'Yabancı İşçi\n', 'yabanci-isci'),
(488, 'Yapı Denetimi Mevzuatı\n', 'yapi-denetimi-mevzuati'),
(489, 'Yargı Kararları\n', 'yargi-kararlari'),
(490, 'Yargıtay Kararları\n', 'yargitay-kararlari'),
(491, 'Yatırımlarda Devlet Yardımları/Destekler\n', 'yatirimlarda-devlet-yardimlaridestekler'),
(492, 'Yazarlık\n', 'yazarlik'),
(493, 'Yeni GVK\n', 'yeni-gvk'),
(494, 'Yeniden Değerleme Oranları\n', 'yeniden-degerleme-oranlari'),
(495, 'Yıllık Ücretli İzin\n', 'yillik-uecretli-izin'),
(496, 'Yönetmelikler\n', 'yoenetmelikler'),
(497, 'Yurt Dışı Çıkış Harcı Sirküleri\n', 'yurt-disi-cikis-harci-sirkueleri'),
(498, 'Yurt Dışı Çıkış Harcı Tebliğleri', 'yurt-disi-cikis-harci-tebligleri'),
(499, 'Yönetmelikler', 'yonetmelikler'),
(500, 'Gümrük İthalat/İhracat', 'gumruk-ithalatihracat'),
(501, 'Toplu Çıkan Mevzuat', 'toplu-cikan-mevzuat'),
(502, 'Asgari Ücretler', 'asgari-ucretler'),
(503, 'Vergi Usul Kanunu Sirküleri', 'vergi-usul-kanunu-sirkuleri'),
(504, 'ÖTV Tebliğleri', 'otv-tebligleri'),
(505, 'Kamu Gözetimi Kurumu', 'kamu-gozetimi-kurumu'),
(506, 'KDV Özelgeleri', 'kdv-ozelgeleri'),
(507, 'Özel Güvenlik Mevzuatı', 'ozel-guvenlik-mevzuati'),
(508, 'ÖTV Sirküleri', 'otv-sirkuleri'),
(509, 'Kurumlar Vergisi Kanunu Sirküleri', 'kurumlar-vergisi-kanunu-sirkuleri'),
(510, '7143 Sayılı Kanun Mevzuatı', '7143-sayili-kanun-mevzuati'),
(511, 'TÜİK Mevzuatı', 'tuik-mevzuati'),
(512, 'Cumhurbaşkanlığı Kararnameleri', 'cumhurbaskanligi-kararnameleri'),
(513, 'Damga Vergisi Sirküleri', 'damga-vergisi-sirkuleri'),
(514, 'Gelir Vergisi Özelgeleri', 'gelir-vergisi-ozelgeleri'),
(515, 'Özel İletişim Vergisi Tebliğleri', 'ozel-iletisim-vergisi-tebligleri'),
(516, 'İş Sağlığı ve Güvenliği', 'is-sagligi-ve-guvenligi'),
(517, 'Kurumlar V. Özelgeleri', 'kurumlar-v-ozelgeleri');

-- --------------------------------------------------------

--
-- Table structure for table `egitim`
--

CREATE TABLE `egitim` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'post adder',
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `egitim`
--

INSERT INTO `egitim` (`id`, `title`, `slug`, `body`, `image`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(3, 'İstanbul Şehir Üniversitesi ve Ülker\'de Eğitimlerimizden Kesitler', 'istanbul-sehir-ueniversitesi-ve-uelkerde-egitimlerimizden-kesitler', '<span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Geçtiğimiz günlerde daha önce duyurusunu yaptığımız Mersin Oteli ve İstanbul Şehir Üniversitesi ile Ülker çalışanlarına yönelik İş Hukuku, Bordrolama vb. alanlarda eğitimler verdik.</span>', 'images/egitim/201711/istanbul-sehir-uenive-istanbul-sehir-unive-bHJQ9vOy0Tys-511201722621.jpg', 2, 1, '2017-11-05 16:06:21', '2017-11-05 16:06:21'),
(4, 'Adana Ticaret Odasında Eğitimdeyiz', 'adana-ticaret-odasinda-egitimdeyiz', '<span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Adana Ticaret Odasında Egitimdeyiz</span>', 'images/egitim/201711/adana-ticaret-odasin-adana-ticaret-odasin-LEQR0NlV8XTv-511201722713.jpeg', 2, 1, '2017-11-05 16:07:13', '2017-11-05 16:07:13'),
(5, '14 - 15 Ocak 2017 Tarihinde Güncel İş Hukuku Ve Bordro Eğitimi Gerçekleştirilecektir.', '14-15-ocak-2017-tarihinde-guencel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><a class=\"list-group-item disabled\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\" style=\"background-color: rgb(238, 238, 238); color: rgb(119, 119, 119); margin-bottom: -1px;\">KONU BAŞLIKLARI</a></p><div class=\"col-sm-6 col-md-4\" style=\"width: 390px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Hukukunun Konusu ve Sosyal Güvenlik Hukuku ile İlişkisi</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşçi Kime Denir? İşveren Kime Denir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\" style=\"background-color: rgb(245, 245, 245); outline-style: initial; outline-width: 0px;\">İş İlişkisi Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşyeri Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşçinin Özen ve Sadakat Borcu Nedir? (Örnek Yargıtay Kararı)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşveren Vekili Kime Denir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Sorumlukları Nedir? (Örnek Yargıtay Kararı)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Alt İşveren Kime Denir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Asıl İşveren Kime Denir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Asıl İşveren Alt İşveren İlişkisi Nedir? (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Asıl İş Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Yardımcı İş Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşyeri Bildirimi Ne Demektir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Alt İşveren İşyeri Bildirimi Yapmak Zorunda Mıdır?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşyeri Bildirgesi ile Birlikte Verilecek Belgeler Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşyeri Tescili ve Kayıt Dışı Alt İşveren İşyerlerinin Tescili Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Alt İşverenlik Sözleşmesi ve Sözleşmede Yer Alması Gereken Hususlar Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Asıl İş Bölünerek Alt İşverene Verilebilir Mi?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Alt İşveren Değişikliğinin İşçi Haklarına Etkisi Nedir? (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Muvazaa Kavramı, Teftiş Süreci ve Sonuçları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Kanunu Hükümlerinin Uygulanmayacağı İşler Hangileridir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\"><span style=\"font-weight: bold;\">2016 yılı torba kanunlarla İş, SGK ve İSG\'de yapılacak değişiklikler</span></a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\"><span style=\"font-weight: bold;\">Yabancı İşçi Çalıştırılması ve İzin İşlemleri Hakkında Yapılan Değişiklikler</span></a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\"><span style=\"font-weight: bold;\">Yarım Çalışma ve Kiralık İşçi Uygulamaları hakkında Genel Konu Başlıklarına ilaveten eğitim verilecektir.</span></a></div><div class=\"col-sm-6 col-md-4\" style=\"width: 390px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Hukukunda “Eşit Davranma” İlkesi, Koşulları ve Örnek Yargıtay Kararları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Yeri Devrinin Hukuki Sonuçları ve İş Görene Etkisi ve Örnek Yargıtay Kararları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Geçici (Ödünç) İş İlişkisi Kavramı,Süresi, Sorumlulukları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesi ve Türleri</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Sürekli, Süreksiz İş Kavramı (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Belirsiz Süreli İş Sözleşmesi (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Belirsiz Süreli İş Sözleşmesi (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Kısmi Süreli İş Sözleşmesi ve Uygulama Esasları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Deneme Süreli İş Sözleşmesi ve Uygulamaları</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İhbar Tazminatı ve İhbar Süreleri Nedir? (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Kıdem Tazminatı ve Alma Şartları Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Kötü Niyet Tazminatı Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşçiden ya da İşverenden Kaynaklanan Geçerli Fesih Sebepleri Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Güvencesi Kavramı ve Kapsamı?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşverenin Fesih Bildirimde Dikkat Etmesi Gereken Hususlar Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşveren Fesih Bildiriminde Savunma Almak Zorunda Mıdır?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesi Feshedilen İşçinin Dava Açma Zaman Sınırı Var Mıdır?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Mahkemesi Dava Süreçlerinin ve Sonuçlarının Ele Alınması</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesinin Feshini Mahkeme Geçersiz Bulur İse İşveren Ne Yapacaktır?</a></div><div class=\"col-sm-6 col-md-4\" style=\"width: 390px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Dava Sırasında Yahut Dava Açmadan İşçi Ölür İse, İşyeri Sırasında İş Yeri Kapanır İse Ne Olur?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Çalışma Koşullarında Değişik Kavramı</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesinin Haklı Feshi (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Sağlık Sebebi ile İşçi Her Daim İş Sözleşmesini Sonlandırabilir Mi?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Zorlayıcı Neden Ne Demektir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesinin İşçi Yönünden Feshinde Hukuki Sonuçları Nelerdir? (Örnek Yargıtay Kararları)</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşverenin İş Sözleşmesini Haklı Sebep ile Derhal Sonlandırmasının Şartları Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Gebelik ve Doğum Hali</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşçinin İş Sözleşmesinden Doğan Borçları Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Sadakat Kavramı?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Sözleşmesinin Haklı Nedenle Feshinde İşverence Dikkat Edilmesi Gereken Hususlar Nelerdir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Ahlak ve İyi Niyet Kurallarına Uymayan Sebepler Neticesinde İş Sözleşmesinin Sonlandırılmasında Süre Sınırı Var Mıdır?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Altı İş Günlük Süre Kavaramı Nedir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İş Arama İzni Ne Demektir? Ve İşverence Uygulamalarında Dikkat Edilecek Hususlar</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">İşçinin İşinden İstifa Etmesi Sonucu Nelere Dikkat Edilmelidir?</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\">Toplu İşten Çıkarma Ne Demektir? Toplu İşten Çıkarma Sayılmayacak Haller</a><a class=\"list-group-item\" href=\"http://www.bastasdanismanlik.com.tr/egitim/14-15-ocak-2017-tarihinde-guncel-is-hukuku-ve-bordro-egitimi-gerceklestirilecektir#\" style=\"background-color: rgb(245, 245, 245);\">İş Denetim ve Teftişine İlişkin İşverenin Sorumlulukları Nelerdir?</a></div>', 'images/egitim/201711/14-15-ocak-2017-ta-14-15-ocak-2017-tari-wlPznkomjhsL-511201722755.jpg', 2, 1, '2017-11-05 16:07:55', '2017-11-05 16:07:55'),
(6, '07 OCAK 2017 TARİHİNDE MERSİN OTELİNDE BORDROLAMA EĞİTİMİ DÜZENLİYORUZ.', '07-ocak-2017-tarihinde-mersin-otelinde-bordrolama-egitimi-duezenliyoruz', 'Girişimci İnsan Kaynakları Platformuna üye Kurum ve Kuruluş temsilcilerine yönelik bordrolama ile ilgili özellikle yapılan hatalar ve 2017 yılında uygulanacak yenilikler anlatılacaktır.', 'images/egitim/201711/07-ocak-2017-tarihin-07-ocak-2017-tarihin-3zWmkOsuaYlb-511201722910.jpeg', 2, 1, '2017-06-14 16:09:10', '2017-11-05 16:09:10'),
(7, 'Yerelsan\'da İş Hukuku ve Sosyal Güvenlik Mevzuatı Eğitimi', 'yerelsanda-is-hukuku-ve-sosyal-guevenlik-mevzuati-egitimi', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Yerelsan Çalışanlarına İş Hukuku ve Sosyal Güvenlik Alanında Eğitim Verilmiştir.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><img src=\"http://www.bastasdanismanlik.com.tr/img/egitim/24052017/WhatsApp%20Image%202017-05-23%20at%2011.19.48.jpeg\" alt=\"\" width=\"732\" height=\"412\"></p>', 'images/egitim/201711/yerelsanda-is-hukuk-yerelsan-da-is-hukuk-6U2HitLVHyjR-511201722953.jpeg', 2, 1, '2017-11-05 16:09:53', '2017-11-05 16:09:53'),
(8, 'Yeni Torba Yasa Ve Güncel İş Hukuku Eğitimi', 'yeni-torba-yasa-ve-guncel-is-hukuku-egitimi', '<h3 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">KİMLER KATILABİLİR?&nbsp;​</h3><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">Bu eğitim; personel yöneticileri, işverenler, insan kaynakları departmanı çalışanları için&nbsp;rehber niteliğinde bilgiler sağlamaktadır.&nbsp;</p><h3 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">​EĞİTİM İÇERİĞİ&nbsp;</h3><ul style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Yeni Torba Yasa Ne İfade Ediyor? Kimler İçin Ne Değişiklikler Öneriyor?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">2018 Yılında “Arabuluculuk\" Sürecinin İş Yaşantısına Etkisi Nasıl Olacak?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">2018 Yılı Asgari Ücretinin Maliyet Yansımaları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">2018 Yılında Yeni Torba Yasada Teşvik Uygulamaları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Alt İşveren İlişkisi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş Yerlerinde Fazla Çalışma Uygulaması</li></ul><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">&nbsp;</p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">1. GÜN&nbsp;</span></p><ul style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş, İşçi, İşyeri, İşveren, Alt İşveren Kavramları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İstisnalar</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Geçici İş İlişkisi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İşyerinin veya Bir Bölümünün Devri</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Toplu İşten Çıkarma ve Sonuçları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">6331 ve 6552 Sayılı Kanunların İş Kanuna Yansıması</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş Sözleşmesinin Tanımı ve Çeşitleri</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş Sözleşmesinin Oluşması</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş Sözleşmesinin Sona Ermesi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Devamsızlık ve İhtar Kavramı</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İşçi ve İşverenin Derhal Fesih Hakkı</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İş Güvencesi, İşe İade Davalarının Sonuçları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Örnek Yargı Kararları</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Ücret Tanımı ve Ücret Türleri</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Ücretten Sayılan/Sayılmayan Ödemeler</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Ücretin Ödenmemesi, Ücret Kesme Cezası</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Ücretin Saklı Kısmı</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Çalışma Süreleri ve Ara Dinlenmeleri​<br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">&nbsp;</li></ul><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">2. GÜN&nbsp;</span></p><ul style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">​Fazla Mesai</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Postalar Halinde Çalışma</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Yıllık Ücretli İzin Uygulaması</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Sözleşmenin Sona Ermesinde İzin Ücreti Alacağı</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Ücretsiz İzinler ve İzin Yönetmeliği</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İhbar Süreleri ve Tazminatı</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Tazminat Kriterleri</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Kıdem Tazminatı Nedir?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Kıdem Tazminatına Dahil Olan Kazançlar Nelerdir?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Nasıl Hesaplanır?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Örnekler ve Açıklamalar</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Hangi Haller Esaslı Değişiklik Kapsamındadır?</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Esaslı Değişikliğin Sonuçları ve Esaslı Değişikliğin Tazminat Yönünden Değerlendirilmesi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İşçi Özlük Dosyası ve Önemi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">İşçi Özlük Dosyası İçeriği</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Örnek Dosya İncelemesi</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Asgari Ücret</li><li style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); list-style: none;\">Agi Kavramı, Agi Hesaplamalar, Yemek, Yol, Yakacak Yardımları​</li></ul><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">&nbsp;</p><h2 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">PROGRAM YÜRÜTÜCÜLERİ&nbsp;</h2><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">Mehmet KOÇAK</span><br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Eğitim Koordinatörü</em><br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">Çalışma ve Sosyal Güvenlik Bakanlığı İş Teftiş Kurulu İstanbul Grup Başkanlığı E. Bşk. Yrd.</em><br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">E. İş Baş Müfettişi</em></p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">Mustafa BAŞTAŞ</span><br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">E. Sosyal Güvenlik Müfettişi</em></p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">Mutlu YILMAZ</span><br style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">İ.K. Direktörü​</em></p><h2 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">TARİH VE SAAT&nbsp;​</h2><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">13 -14 Ocak 2018&nbsp;//&nbsp;​Saat: 09.30- 17.30​</p><h2 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">YER&nbsp;​</h2><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">​Dragos Kampüs&nbsp;<em style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><a href=\"https://www.sehir.edu.tr/tr/sehirde-yasam/nasil-ulasirim\" target=\"_blank\" style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(23, 23, 23); transition: all 350ms ease-in-out 0s; opacity: 1; outline-width: 0px;\">Ulaşım için tıklayın</a></em>.&nbsp;</p><h2 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">PROGAM ÜCRETİ&nbsp;​</h2><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">1000 TL + KDV</p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\">*Sunulacak eğitim dokümanları, öğle yemeği ve ikramlar program ücretine dâhildir.​</p><h2 style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Oswald, sans-serif; line-height: 1.3; color: rgb(51, 51, 51); margin: 0px 0px 22px; font-size: 40px; letter-spacing: normal;\">BAŞVURU VE DETAYLI BİLGİ&nbsp;​​​</h2><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">​Başvuru için</span><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">&nbsp;</span><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSd8D7w7TDqEx26mmYPhzG4UJcGYvwhhyxVW_cvTRjLvMe0D2w/viewform\" target=\"_blank\" style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(23, 23, 23); transition: all 350ms ease-in-out 0s; opacity: 1; outline-width: 0px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700;\">tıklay​ın.</span></a><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">​</span></p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">Detaylı bilgi için:&nbsp;</span><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\"><a href=\"mailto:ybm@sehir.edu.tr\" style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(23, 23, 23); transition: all 350ms ease-in-out 0s; opacity: 1; outline-width: 0px;\">ybm@sehir.edu.tr</a>&nbsp;</span></p><p style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(51, 51, 51); font-family: Arimo, sans-serif; font-size: 14px;\"><span style=\"border-color: rgb(225, 225, 225); border-style: solid; border-width: 0px; zoom: 1; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: 700; font-size: 12px;\">444 4 034&nbsp;</span></p>', 'images/egitim/20181/yeni-torba-yasa-ve-g-tmpphpi2dbox-c9lJ6IUmZU7G-1912018113014.jpg', 1, 1, '2018-01-19 08:30:14', '2018-01-19 08:30:14');
INSERT INTO `egitim` (`id`, `title`, `slug`, `body`, `image`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(9, 'Yeni Torba Yasa ve Güncel İş Hukuku Eğitimi Mart 2018', 'yeni-torba-yasa-ve-guncel-is-hukuku-egitimi-mart-2018', '<h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">KİMLER KATILABİLİR? ​<br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\">Bu eğitim; personel yöneticileri, işverenler, insan kaynakları departmanı çalışanları için rehber niteliğinde bilgiler sağlamaktadır. <br style=\"line-height: 28px !important;\"></p><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">​EĞİTİM İÇERİĞİ <br style=\"line-height: 28px !important;\"></h2><ul style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 35px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; padding: 0px 20px !important; line-height: 28px !important; list-style: inherit !important;\"><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Yeni Torba Yasa Ne İfade Ediyor? Kimler İçin Ne Değişiklikler Öneriyor?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">2018 Yılında “Arabuluculuk\" Sürecinin İş Yaşantısına Etkisi Nasıl Olacak?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">2018 Yılı Asgari Ücretinin Maliyet Yansımaları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">2018 Yılında Yeni Torba Yasada Teşvik Uygulamaları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Alt İşveren İlişkisi</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş Yerlerinde Fazla Çalışma Uygulaması<br style=\"line-height: 28px !important;\"></li></ul><div style=\"margin: 0px; padding: 0px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; line-height: 28px !important;\"><br style=\"line-height: 28px !important;\"></div><div style=\"margin: 0px; padding: 0px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; line-height: 28px !important;\"><strong style=\"line-height: 28px !important;\">1. GÜN </strong><br style=\"line-height: 28px !important;\"></div><ul style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 35px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; padding: 0px 20px !important; line-height: 28px !important; list-style: inherit !important;\"><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş, İşçi, İşyeri, İşveren, Alt İşveren Kavramları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İstisnalar</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Geçici İş İlişkisi</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İşyerinin veya Bir Bölümünün Devri</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Toplu İşten Çıkarma ve Sonuçları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">6331 ve 6552 Sayılı Kanunların İş Kanuna Yansıması</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş Sözleşmesinin Tanımı ve Çeşitleri</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş Sözleşmesinin Oluşması</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş Sözleşmesinin Sona Ermesi<br style=\"line-height: 28px !important;\"></li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Devamsızlık ve İhtar Kavramı</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İşçi ve İşverenin Derhal Fesih Hakkı</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İş Güvencesi, İşe İade Davalarının Sonuçları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Örnek Yargı Kararları</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Ücret Tanımı ve Ücret Türleri</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Ücretten Sayılan/Sayılmayan Ödemeler</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Ücretin Ödenmemesi, Ücret Kesme Cezası</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Ücretin Saklı Kısmı</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Çalışma Süreleri ve Ara Dinlenmeleri​<br style=\"line-height: 28px !important;\"><br style=\"line-height: 28px !important;\"></li></ul><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><strong style=\"line-height: 28px !important;\">2. GÜN <br style=\"line-height: 28px !important;\"></strong></p><ul style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 35px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; padding: 0px 20px !important; line-height: 28px !important; list-style: inherit !important;\"><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">​Fazla Mesai<br style=\"line-height: 28px !important;\"></li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Postalar Halinde Çalışma</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Yıllık Ücretli İzin Uygulaması</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Sözleşmenin Sona Ermesinde İzin Ücreti Alacağı</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Ücretsiz İzinler ve İzin Yönetmeliği</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İhbar Süreleri ve Tazminatı</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Tazminat Kriterleri</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Kıdem Tazminatı Nedir?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Kıdem Tazminatına Dahil Olan Kazançlar Nelerdir?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Nasıl Hesaplanır?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Örnekler ve Açıklamalar</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Hangi Haller Esaslı Değişiklik Kapsamındadır?</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Esaslı Değişikliğin Sonuçları ve Esaslı Değişikliğin Tazminat Yönünden Değerlendirilmesi</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İşçi Özlük Dosyası ve Önemi</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">İşçi Özlük Dosyası İçeriği</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Örnek Dosya İncelemesi</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Asgari Ücret</li><li style=\"margin: 0px; padding: 0px; line-height: 28px !important;\">Agi Kavramı, Agi Hesaplamalar, Yemek, Yol, Yakacak Yardımları​<br style=\"line-height: 28px !important;\"></li></ul><div style=\"margin: 0px; padding: 0px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; line-height: 28px !important;\"><br style=\"line-height: 28px !important;\"></div><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">PROGRAM YÜRÜTÜCÜLERİ <br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><b style=\"line-height: 28px !important;\">Mehmet KOÇAK<br style=\"line-height: 28px !important;\"></b><em style=\"line-height: 28px !important;\">Eğitim Koordinatörü<br style=\"line-height: 28px !important;\"></em><em style=\"line-height: 28px !important;\">Çalışma ve Sosyal Güvenlik Bakanlığı İş Teftiş Kurulu İstanbul Grup Başkanlığı E. Bşk. Yrd.<br style=\"line-height: 28px !important;\"></em><em style=\"line-height: 28px !important;\">E. İş Baş Müfettişi</em></p><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><b style=\"line-height: 28px !important;\">Mustafa BAŞTAŞ<br style=\"line-height: 28px !important;\"></b><em style=\"line-height: 28px !important;\">E. Sosyal Güvenlik Müfettişi</em></p><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><b style=\"line-height: 28px !important;\">Mutlu YILMAZ<br style=\"line-height: 28px !important;\"></b><em style=\"line-height: 28px !important;\">İ.K. Direktörü​</em></p><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">TARİH VE SAAT ​<br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\">24 - 25 Mart 2018 // ​Saat: 09.30 - 17.30​<br style=\"line-height: 28px !important;\"></p><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">YER ​<br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\">​Dragos Kampüs - Ulaşımla ilgili bilgi almak için <a href=\"https://www.sehir.edu.tr/tr/sehirde-yasam/nasil-ulasirim\" target=\"_blank\" style=\"color: rgb(102, 51, 153); margin: 0px; padding: 0px; line-height: 28px !important;\"><strong style=\"line-height: 28px !important;\">tıklayın​</strong></a>. <br style=\"line-height: 28px !important;\"></p><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">PROGAM ÜCRETİ ​<br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\">1000 TL + KDV</p><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\">*Sunulacak eğitim dokümanları, öğle yemeği ve ikramlar program ücretine dâhildir.​<br style=\"line-height: 28px !important;\"></p><h2 style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto, sans-serif; color: rgb(32, 32, 32); font-size: 16px; padding: 0px; display: flex; flex-flow: row wrap; width: 890px; letter-spacing: normal; font-weight: 700 !important; line-height: 20px !important;\">BAŞVURU VE DETAYLI BİLGİ ​​​<br style=\"line-height: 28px !important;\"></h2><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><strong style=\"line-height: 28px !important;\">​Başvuru için</strong><strong style=\"line-height: 28px !important;\"> </strong><strong style=\"line-height: 28px !important;\"><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSeGQL93gWZh2Il8ASD9tjgOhA06Eb6AFBrjY2ZJeUyYTsa_fg/viewform\" target=\"_blank\" style=\"color: rgb(102, 51, 153); margin: 0px; padding: 0px; line-height: 28px !important;\">tıklay​ın​</a>.</strong><strong style=\"line-height: 28px !important;\">​</strong><br style=\"line-height: 28px !important;\"></p><p style=\"padding: 0px; line-height: 1.6; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px;\"><strong style=\"line-height: 28px !important;\">Detaylı bilgi için: </strong><strong style=\"line-height: 28px !important;\"><a href=\"mailto:ybm@sehir.edu.tr\" style=\"color: rgb(102, 51, 153); margin: 0px; padding: 0px; line-height: 28px !important;\">ybm@sehir.edu.tr</a> </strong></p><div style=\"margin: 0px; padding: 0px; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 16px; line-height: 28px !important;\"><strong style=\"line-height: 28px !important;\">444 4 034 </strong></div>', 'images/egitim/20182/yeni-torba-yasa-ve-g-tmpphpk47n7u-sO8weBTYFghY-202201810461.jpg', 1, 1, '2018-02-20 07:46:02', '2018-02-20 07:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `haber`
--

CREATE TABLE `haber` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `botlink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'post adder',
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hizmet`
--

CREATE TABLE `hizmet` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'post adder',
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hizmet`
--

INSERT INTO `hizmet` (`id`, `title`, `slug`, `body`, `image`, `user_id`, `publish`, `created_at`, `updated_at`) VALUES
(4, 'İş ve Sosyal Güvenlik Danışmanlığı', 'is-ve-sosyal-guvenlik-danismanligi', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Şirket tarafından iş hukuku, toplu iş hukuku, sosyal güvenlik mevzuatı, Çalışma ve Sosyal Güvenlik Bakanlığı ile Sosyal Güvenlik Kurumu (SGK) uygulamaları konularında yazılı veya sözlü olarak talep edilen danışmanlık hizmetine ilişkin görüşlerini yazılı veya sözlü olarak en kısa zamanda iletilmesi.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Şirketin hazırlayacağı İş hukuku ve Sosyal Güvenlik konuları ile ilgili metinlerin incelenerek katkıda bulunulması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Şirket tarafından yazılı veya sözlü olarak talep edilen danışmanlık hizmetine ilişkin görüşlerini yazılı veya sözlü olarak en kısa zamanda iletilmesi.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Çalışma ve Sosyal Güvenlik Bakanlığı ile Sosyal Güvenlik Kurumunca gerçekleştirilecek müfettiş incelemesi ve denetimlerde (teftiş) ortaya çıkabilecek yasal yükümlülüklerin yerine getirilmesinin organizasyonunda işverene danışmanlık yapılması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İş hukuku ve sosyal güvenlikle ilgili yasal süreçlerde şirket avukatlarına destek verilmesi, konuya ilişkin görüşlerin bildirilmesi.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Şirketin gerekli görmesi durumunda, çalışma hayatı, endüstriyel ilişkiler ile iş  ve sosyal güvenlikle ilgili toplantılarda bizzat bulunarak görüşlerin bildirilmesi.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İşçi - işveren uyuşmazlıklarında teknik yardımda bulunmak, iş mevzuatı uyarınca işverenin dikkat etmesi gereken hususları yazılı ve sözlü olarak bildirmek ve şirket tarafından talep edilmesi halinde yazışmaların ve tutanakların hazırlanması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Sosyal sigorta, iş hukuku mevzuatı, toplu sözleşme ve sendika konularında şirketlere, işçi ve işveren sendikalarına, hukuk bürolarına danışmanlık yapılması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İşyerinde iş  ve sosyal güvenlik mevzuatına ilişkin yükümlülükler konusunda işverenin sağlayacağı belgeler üzerinde periyodik olarak aylık/üç aylık periyotlarda denetim yapılarak sonuçların bir raporla şirkete sunulması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İş ve sosyal güvenlik riskleri konusunda yapılan denetim sonuçlarını ve görülen eksiklikleri raporla yönetime sunulması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Şirketin taahhüdü altında bulunan projelerde <span style=\"font-weight: bold;\">asgari işçilik hesaplamalarına</span> ilişkin görüş ve önerilerde bulunulması, asgari işçilik incelemelerinin yapılması ve yürütülmesi, SGK’dan ilişiksizlik belgelerinin alınması.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İş Sözleşmelerinin ve Özlük Dosyalarının Mevzuata Uygun Olarak Hazırlanması ve Denetlenmesi.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İş Kazalarından Meydana Gelebilecek Sorunların Çözümü Konusunda Danışmanlık.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Sosyal Güvenlik ve İş  mevzuatı Kapsamındaki Uyuşmazlıkların Çözümü.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İşveren ve İşçi Arasında Meydana Gelecek Uyuşmazlıkların Barışçı Yoldan Çözümü,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">İşyerlerinin Devir-Birleşme-Bölünme-Kapanma Uygulamalarında İş Sözleşmelerinin yasal mevzuat kapsamında değerlendirilmesi ve yapılması gerekli işlemler hakkında danışmanlık,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Toplu İşten Çıkarmalarda Danışmanlık,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Üst Düzey Yöneticiler ve Şirketler Arasındaki (rekabet etmeme, gizlilik, …) Koruyucu Anlaşmaların Hazırlanması ve Uygulama Sorunlarında Çözüm Ortaklığı</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Deniz ve Basın İş Kanununa İlişkin Danışmanlık Hizmetleri Sunulması,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Fesih, İhbar, Kıdem, Yıllık İzin gibi Uygulama ve Mevzuata Uygunluk Danışmanlığı</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"background-color: yellow;\">İş ve Sosyal Güvenlik Hukuku ile ilgili dava konusu olan veya olabilecek nitelikte iş ve işlemlerde avukatlık hizmeti vermekteyiz. Bunun yanında anlaşmalı ve çekişmeli boşanma davaları, tanıma, tenfiz, gayrimenkul ve miras davalarında da hizmet vermekteyiz.</span><br></p>', 'images/hizmet/201711/is-ve-sosyal-guevenli-is-ve-sosyal-guvenli-z0k3ITVHLa0N-5112017212143.jpg', 1, 1, '2017-11-05 15:21:43', '2018-05-22 21:07:35'),
(5, 'Bordrolama Hizmetleri', 'bordrolama-hizmetleri', '<div>Personel Bordro Hizmetlerinin verilmesi (Yasal zorunluluklar ve Şirket Yönetimi‘nin politikaları ve gizlilik çerçevesinde aylık olarak bordronun yapılması ve kayda alınması), </div><div><br></div><div>Personel ücret bordrolarının hazırlanması, </div><div><br></div><div>Şahıs bazında normal kazanç, fazla mesai, prim ve diğer ödenekler ile yasal kesinti ve net ödemeyi gösteren ücret tediye bordrolarının hazırlanması, </div><div><br></div><div>Ödeme listelerinin ve elektronik ortamda banka disketlerinin hazırlanması, </div><div><br></div><div>Kıdem tazminatı, iş sözleşmesinin feshi ile ilgili hakların hesaplanması ve yasal kayıt ve belgelerin incelenmesi</div>', 'images/hizmet/201711/bordrolama-hizmetler-bordrolama-hizmetler-ikzN0CcSKxSY-5112017212254.jpg', 1, 1, '2017-11-05 15:22:54', '2017-11-05 15:22:54'),
(6, 'İş Sağlığı ve Güvenliği Danışmanlığı', 'is-sagligi-ve-guevenligi-danismanligi', '<div>İlgili Tüzük ve Yönetmelik Uygulamaları) </div><div><br></div><div>İş Sağlığı ve Güvenliği Konusundaki Tüm Tüzük ve Yönetmelik Uygulamaları Konusunda Yönlendirme </div><div><br></div><div>İş Kazası ve Meslek Hastalığı Risk Analizlerinin Yapılması Analiz ve Raporlama Sistemlerinin Oluşturulması, </div><div><br></div><div>Ölçüm, Kalibrasyon Teknik Periyodik Kontrol İzleme ve Denetleme Hizmetleri </div><div><br></div><div>İşyerinin Kurma İzni ve İşletme Belgesi Talepleriyle İlgili İş ve İşlem Süreçlerinin Tamamlanması ve Danışmanlık Hizmetleri </div><div><br></div><div>İş Sağlığı ve Güvenliği İle İlgili Tüm Eğitim Faaliyetleri, Tedbirler ve Kurallar</div>', 'images/hizmet/201711/is-sagligi-ve-guevenl-is-sagligi-ve-guvenl-qjz3aK7toNHS-5112017212651.jpg', 2, 1, '2017-11-05 15:26:51', '2017-11-05 15:26:51'),
(7, 'Asgari İşçilik Danışmanlığı', 'asgari-iscilik-danismanligi', '<div>İhale ve İnşaat işlerinde asgari işçilik bildirimi, işsizlik belgesi alınması ve asgari işçilik uzlaşma ve İtirazlar süresince danışmanlık hizmetleri verilmektedir.</div><div>Bir işin yürütümü için gerekli olan en az sigortalı sayısı, sigorta primine esas kazanç tutarı ve çalışma süresinin tespiti Asgari İşçilik olarak tanımlanmaktadır.</div><div>İşverenin işin emsaline, niteliğine, kapsam ve kapasitesine göre işin yürütümü açısından gerekli olan sigortalı sayısının, çalışma süresinin veya prime esas kazanç tutarının altında bildirimde bulunduğunun tespiti halinde, işin yürütümü açısından gerekli olan asgari işçilik tutarı; yapılan işin niteliği, kullanılan teknoloji, işyerinin büyüklüğü, benzer işletmelerde çalıştırılan sigortalı sayısı, ilgili meslek veya kamu kuruluşlarının görüşü gibi unsurlar dikkate alınarak tespit edilir. Söz konusu tespitler, kurumun denetim ve kontrolle görevlendirilmiş memurları tarafından saptanacaktır.</div><div>Sosyal Güvenlik Kurumu Müfettiş ve Kontrol Memurları tarafından işyeri kayıtlarının incelenmesi sonucu Kuruma bildirildiği tespit edilen işçilik tutarlarının uygunluğunun sağlanması ile Kuruma yeterli işçilik bildirilmediği tespit edilen işyeri işverenlerine, tespit edilen fark işçilik tutarı üzerinden hesaplanacak prim ve gecikme zammı tutarı ile idari para cezalarının uygulanmaktadır.</div><div>İhale konusu işler ve özel bina inşaatı işyerleri ile ilgili olarak yapılan inceleme sonucunda işverenin Kuruma borcunun bulunmaması kaydıyla ilgili makama verilmek üzere İlişiksizlik Belgesi alınması gerekmektedir.</div><div>SDS DANIŞMANLIK EGİ TUR İNŞ OTO KİR İTH İHR PAZ VE TİC  LTD ŞTİ Sosyal Güvenlik Kurumu’ndan ilişiksizlik belgesi alınması gereken ihaleli işler ile özel bina inşaatı işyerleri işverenlerine gerek teftiş ve inceleme süresince ve gerekse de uzlaşma süresince gerekli teknik danışmanlık hizmetleri vermektedir. </div><div> </div><div>Bu kapsamda SDS DANIŞMANLIK EGİ TUR İNŞ OTO KİR İTH İHR PAZ VE TİC  LTD ŞTİ tarafından verilen hizmetler;</div><div><br></div><div>İhale konusu işler ve özel bina inşaatı işyerleri için İlişiksizlik Belgesi alınması,</div><div>Sosyal Güvenlik Kurumu Müfettiş ve Kontrol Memurları tarafından işyeri kayıtlarının incelenmesi konusunda danışmanlık hizmetleri,</div><div>Uzlaşma ve İtirazlar süresince danışmanlık hizmetleri verilmesini kapsamaktadır.</div>', 'images/hizmet/201711/asgari-iscilik-danis-asgari-iscilik-danis-cYWiPUvKX9Gf-5112017213241.jpg', 1, 1, '2017-11-05 15:32:41', '2018-03-27 21:09:39'),
(8, 'Eğitim', 'egitim', '<div>İş Hukuku Eğitimi</div><div><br></div><div>Sosyal Güvenlik Eğitimi</div><div><br></div><div>İş Sağlığı ve Güvenliği Eğitimi</div><div><br></div><div>İnsan Kaynakları’nda İş ve Sosyal Güvenlik Uygulamaları</div>', 'images/hizmet/201711/egitim-adana-ticaret-odasin-DZnBP68Qku6D-5112017213656.jpeg', 2, 1, '2017-11-05 15:36:56', '2017-11-05 15:36:56'),
(9, 'Sirküler Hizmeti', 'sirkueler-hizmeti', '<div>4857 sayılı İş Kanunu, 5953 sayılı Basın İş Kanunu, 854 sayılı Deniz İş Kanunu, 2821 sayılı Sendikalar Kanunu ile 2822 sayılı TİSGL Kanunu kapsamında sirküler hizmeti verilmesi.</div><div><br></div><div>5510 sayılı Sosyal Sigortalar ve Genel Sağlık Sigortası ile diğer sosyal güvenlik mevzuatı konularında sirküler hizmeti verilmesi. </div><div><br></div><div>İş Hukuku ve Sosyal Güvenliği İlgilendiren yasal zorunluluklarda ki değişiklikler konusunda sirküler hizmeti verilmesi.</div>', 'images/hizmet/201711/sirkueler-hizmeti-adana-ticaret-odasin-o0qe8pvOd8za-5112017214949.jpeg', 2, 1, '2017-11-05 15:49:49', '2017-11-05 15:49:49'),
(10, 'Yabancı Uyruklu Çalışma İzni', 'yabanci-uyruklu-calisma-izni', '<div>4817 Sayılı Yabancıların Çalışma İzinleri Hakkındaki Kanun’la birlikte dağınık ve karmaşık yasal düzenlemelere son verilerek, yabancı uyrukluların çalışmalarına ilişkin düzenlemeler yapılmıştır. </div><div>\"Yabancı uzman personel\" ve \"yabancı sanatçılara\" Turizm Bakanlığı ile İçişleri Bakanlığı\'\'nın görüşleri alınarak Çalışma ve Sosyal Güvenlik Bakanlığı\'\'nca verilecek izinler için yapılacak başvurular, Yabancıların Çalışma İzinleri Hakkında Kanunun Uygulama Yönetmeliği\'\'nde belirtilen usule göre yapılmaktadır. </div><div>İkamet izni A,B,C grubu ülke vatandaşlarının Türkiye\'\'ye geliş amaçlarına, ikamet izin çeşidine, önceki kayıtlarına göre yapılan değerlendirilmeye göre verilmektedir. </div><div>Baştaş Danışmanlık çalışma amaçlı ikamet izinleri alımı, sürelerinin izlenmesi, çalışmaya bağlı ikamet iznine dönüştürülmesi, zamanında bildirimlerin yapılması konularında danışmanlık yapmaktadır.</div>', 'images/hizmet/201711/yabanci-uyruklu-cali-yabanci-uyruklu-cali-l8i7WRukNxFT-5112017215837.jpg', 2, 1, '2017-11-05 15:58:37', '2017-11-05 15:58:37'),
(11, 'İnsan Kaynakları Danışmanlığı', 'insan-kaynaklari-danismanligi', '<div>İnsan Kaynakları Sisteminin Kurulması, Denetimi, Raporlaması.</div><div>Görev Tanımlarının Oluşturulması.</div><div>Performans Değerlendirme Sistemlerinin Oluşturulması.</div><div>Ücret Yönetimi Sistemlerinin Oluşturulması.</div><div>Kariyer Planlama Sistemlerinin Oluşturulması.</div><div>Eğitim-Geliştirme Sistemlerinin Oluşturulması.</div><div>Ödül-Teşvik-Ceza Motivasyon Sistemlerinin Oluşturulması.</div><div>Şirket Politikalarına Uygun Yönetmelik ve Talimatların Hazırlanması.</div><div>İş Hukuku ve Sosyal Güvenlik Konularında Genel ve Şirketlere Özel Eğitimler</div>', 'images/hizmet/201711/insan-kaynaklari-dan-insan-kaynaklari-dan-rssmS4CXWJoe-511201722139.jpg', 2, 1, '2017-11-05 16:01:39', '2017-11-05 16:01:39'),
(12, 'Muhasebe & Vergi Danışmanlığı', 'muhasebe-vergi-danismanligi', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Mali ve Muhasebe Danışmanlığı</span></p><ul style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><li style=\"line-height: 24px;\">Kanun ve uygulama değişikliklerinin devamlı olarak bildirilmesi ve görüş verilmesi </li><li style=\"line-height: 24px;\">Muhasebe uygulamaları ve esasları konusunda hizmet içi eğitimlerin verilmesi </li><li style=\"line-height: 24px;\">Maliyet, yönetim ve enflasyon muhasebesi dahil, muhasebe sistemlerin kurulması, uygulanması </li><li style=\"line-height: 24px;\">Dönemsel olarak mali tablolarının oluşturularak raporlanması </li><li style=\"line-height: 24px;\">Teşvik uygulamaları ile ilgili danışmanlıklar </li><li style=\"line-height: 24px;\">Aylık ve yıllık beyannamelerin hazırlanması </li><li style=\"line-height: 24px;\">Mevzuat gereğince yaptırılacak tüm tasdik işlemleri </li><li style=\"line-height: 24px;\">SSK-Bağ-kur işlerinin takibi<br> </li></ul><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Vergi Danışmanlığı</span></p><ul style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><li style=\"line-height: 24px;\">Vergi Uyuşmazlıkları </li><li style=\"line-height: 24px;\">Vergi uzlaşma görüşmelerine katılmak </li><li style=\"line-height: 24px;\">Vergi davalarına katılmak </li><li style=\"line-height: 24px;\">Vergi dava ve ihtilaf dilekçelerinin hazırlanması </li><li style=\"line-height: 24px;\">Vergi planlaması</li></ul>', 'images/hizmet/201711/muhasebe-vergi-dan-muhasebe-vergi-danis-dAkFmO9AgDqu-51120172228.jpg', 2, 1, '2017-11-05 16:02:08', '2017-11-05 16:02:08'),
(13, 'Yurt Dışı ve Yurt İçi Emeklilik Hizmetleri', 'yurt-disi-ve-yurt-ici-emeklilik-hizmetleri', '<ul style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><li style=\"line-height: 24px;\">Yurt Dışı Hizmet Birleştirmeleri</li><li style=\"line-height: 24px;\">Ücretsiz Danışmanlık Hizmetleri</li><li style=\"line-height: 24px;\">Türkiye’de İkinci Emeklilik</li><li style=\"line-height: 24px;\">Yurtiçi Hizmet Birleştirmeleri</li><li style=\"line-height: 24px;\">Doğum, Askerlik Borçlanması</li><li style=\"line-height: 24px;\">Malülen veya Özürlü Emeklilik Danışmanlığı</li><li style=\"line-height: 24px;\">2022 Sayılı Yasa, Sakatlık, Özürlü 65 Yaş Aylığı Bağlanması Danışmanlık Hizmetleri</li><li style=\"line-height: 24px;\">Dul Yetim Aylığı Bağlanması, Bakım Aylığı Alınması</li><li style=\"line-height: 24px;\">Mavi Kart Sahiplerinin Borçlanması ve Emekliliği İşlemleri</li><li style=\"line-height: 24px;\">SSK- BAĞ KUR- EMEKLİ SANDIĞI Konularında Danışman</li></ul>', 'images/hizmet/201711/yurt-disi-ve-yurt-ic-yurt-disi-ve-yurt-ic-lsDHeYat2U4F-51120172232.png', 2, 1, '2017-11-05 16:03:03', '2017-11-05 16:03:03'),
(14, 'Toplu İş Hukuku Danışmanlığı', 'toplu-is-hukuku-danismanligi', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\"><em>(</em></span><em>2821 Sayılı Sendikalar Kanunu ve 2822 Sayılı Toplu İş Sözleşmesi Grev ve Lokavt Kanunu )</em></p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">*    2821ve 2822 Sayılı Kanunlar Hakkında Genel Danışmanlık,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">* Proje Ortaklarımız Lehine Stratejilerin Oluşturulması ve Uygulanması,      </p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">* Toplu İş Sözleşmelerinin Hazırlık, Pazarlık Stratejileri Geliştirme ve Görüşme Süreçlerinde Bulunma,</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">* Toplu İş Uyuşmazlıklarının Tüm Aşamalarında Danışmanlık ve Uygulamacı Çözüm Ortaklığı</p>', 'images/hizmet/201711/toplu-is-hukuku-dani-toplu-is-hukuku-dani-gvUksI0IuXpj-511201722333.jpg', 2, 1, '2017-11-05 16:03:33', '2017-11-05 16:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `ad_soyad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_05_084907_create_post_table', 1),
(4, '2017_11_05_101751_create_category_table', 1),
(5, '2017_11_05_161554_create_egitim_table', 1),
(6, '2017_11_05_165909_create_hizmet_table', 1),
(7, '2017_11_08_192807_create_sirku_table', 1),
(8, '2017_11_26_014333_create_haber_table', 1),
(9, '2018_01_09_213154_create_mesajlar_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `botlink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` smallint(6) NOT NULL DEFAULT 1,
  `user_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'post adder',
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'sub categories',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sirku`
--

CREATE TABLE `sirku` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `botlink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` smallint(6) NOT NULL DEFAULT 1,
  `user_id` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'post adder',
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resume` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `adder` tinyint(3) UNSIGNED DEFAULT 1 COMMENT 'user adder',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `slug`, `image`, `email`, `password`, `degree`, `resume`, `rank`, `status`, `adder`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ersen', 'Gültepe', 'ersen-gultepe', 'images/users/user.png', 'ersengultepe@gmail.com', '$2y$10$dZghHReno.qjEEIxNv0kfud8Q8Qk.h22cPe.OuAHgcBCDQ7OJbwim', 'superAdmin', 'Web Tasarımcı, Kodlayıcı vb.', 1, 1, 1, '2ylIFW32FK064dHuPAJs6dL8h8DwIYVQPhM8ChZxE3T6piQfiCHF1LX7syGF', NULL, '2018-02-19 06:32:41'),
(2, 'Mustafa', 'Baştaş', 'mustafa-bastas', 'images/users/mustafa-bastas-mBYo3x.jpg', 'mustafa.bastas@bastasdanismanlik.com.tr', '$2y$10$hlSWHRKrPUJFRmQoxxBpe.d1ncXmZ.Moe7zR0JQK.lGR/JsP4duPm', 'Kurucu Ortak', '<div>05.02.1976 Adana doğumlu olup ilk ve orta öğrenimimi Adana’da tamamladı. 1993-1995 yılları arasında Bilkent Üniversitesi İ.İ.B.F. Kamu Yönetimi ve Siyaset Bilimi bölümünün hazırlık sınıfı olan İngiliz Dili Meslek Yüksekokulunu, 1996-2000 tarihleri arasında ise İstanbul Üniversitesi Siyasal Bilgiler Fakültesi Kamu Yönetimi bölümünü bitirdi.</div><div><br></div><div>2000-2001 yıllarında özel bir firmada çalıştıktan sonra 31.07.2002 tarihinde Maliye Bakanlığı Gelirler Genel Müdürlüğünde Devlet Gelir Uzman Yrd. olarak çalışmaya başladı. Ardından 31.03.2004 tarihinde Sosyal Sigortalar Kurumu Sigorta Müfettiş Yrd. olarak atandı. 15.06.2007 tarihinde Sosyal Güvenlik Kurumu Müfettişi olarak ataması yapıldı. 2007 Ağustos ve 2008 Şubat arasında askerlik görevini yerine getirdikten sonra 27.05.2008 tarihinde Gaziantep Sosyal Güvenlik İl Müdür Yrd. olarak görevlendirildi.</div><div><br></div><div>2010 Ekim ayına kadar bu görevi yaptıktan sonra 2010 Kasım ayında Bağcılar Sosyal Güvenlik Merkez Müdürü olarak göreve başladı. Buradaki görevinin akabinde 31.01.2013 tarihinde Kamu görevimden ayrılarak Mehmet Koçak Eğitim ve Danışmanlık Ltd. Şti’de yönetici ortak olarak çalışmaya başladı. Halen bu firmada yönetici ortak olarak çalışmaya devam etmektedir.</div><div><br></div><div>Aynı zamanda Baştaş Danışmalık Eğitim. Ltd. Şti’de ortaklığı vardır. Firmamızın danışmanlık sözleşmesi imzaladığı 200 den fazla şirkete iş ve sosyal güvenlik danışmanlığı yapmaktadır. Çeşitli dergi ve gazetelerde zaman zaman köşe yazarlığı ile makaleleri yayınlanmaktadır. Evli, 1 ve 12 yaşında 2 kızı bulunmaktadır.</div>', 2, 1, 1, 'y78G5DXuoEtB0gbP7JWoGvcGavH9g4JbdbbIVzoYhvd4B9g3M8MsR7Tv8K0X', '2017-11-05 13:23:25', '2017-11-05 15:11:43'),
(4, 'Sabri', 'Baştaş', 'sabri-bastas', 'images/users/sabri-bastas-kU3lkc.jpg', 'sabri.bastas@bastasdanismanlik.com.tr', '$2y$10$hlSWHRKrPUJFRmQoxxBpe.d1ncXmZ.Moe7zR0JQK.lGR/JsP4duPm', 'Yönetici', '<p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Adana Karataş Çakırsinan köyünde 1985 yılında doğdum. İlköğrenimimi Gazipaşa İlköğretim okulunda tamamladım. Lise eğitimimi Abdulkadir Paksoy Lisesinde tamamladım.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">2004 yılında Mali müşavirlik ofisinde muhasebe personeli olarak çalışmaya başladım. Anadolu Üniversitesi İktisadi İdari Bilimler Fakültesi İktisad bölümünden mezun oldum.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">2013 yılında Mali Müşavirlik ruhsatımı alıp SMMM Sabri Baştaş şirketini kurup bir çok özel firmaya mali müşavirlik hizmeti vermeye başladım. Mali uzlaşmazlıklar ile ilgili uzlaşma komisyonu ve vergi dava süreçlerini takip etmekteyim.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Birden fazla Kurumsal şirkete Asgari İşçilik Raporu hazırladım. SGK işveren uzlaşmazlıklarında teftiş süreçlerini yönettim. SGK işveren işlemleri, tescil, ilişiksizlik yazısı, alt işveren denetimi ve alt işveren tescil süreçlerini yönettim. Bordro hizmeti olarak bir çok firmaya bordrolama hizmeti vermekteyim.</p><p style=\"margin-bottom: 20px; line-height: 24px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Birçok holding bünyesindeki şirketlerin SGK işveren teşviki süreçlerini halen ekibimle yürütmekteyim. Mali Müşavirlik şirketim dışında 2015 yılında E.SGK Baş Müfettiş Mustafa Baştaş ile birlikte Baştaş Danışmanlık Ltd.Şti.\'ni kurup SGK danışmanlığını Baştaş Danışmanlık Ltd.Şti. ile Mali Müşavirlik ve Mali mevzuat danışmanlığını SMM Sabri Baştaş şirketim ile yürütmekteyim. Mehmet Koçak Danışmanlık Ltd.Şti. ile birlikte iş ortağı olarak faaliyetimize devam etmekteyiz.</p> ', 2, 1, 1, NULL, '2017-11-05 13:55:19', '2017-11-05 15:12:20'),
(5, 'SDS', 'Danışmanlık Tic.Ltd.Şti.', '', 'images/users/sds-danismanlik-ticltdsti-JUoVU6.png', 'bilgi@sdsdanismanlik.com.tr', 'wer23423423', '1', '-', 2, 1, 1, NULL, '2018-01-12 21:00:00', '2018-01-14 12:06:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `haber_botlink_unique` (`botlink`),
  ADD KEY `haber_category_id_index` (`category_id`);

--
-- Indexes for table `hizmet`
--
ALTER TABLE `hizmet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_botlink_unique` (`botlink`),
  ADD KEY `post_category_id_index` (`category_id`);

--
-- Indexes for table `sirku`
--
ALTER TABLE `sirku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sirku_botlink_unique` (`botlink`),
  ADD KEY `sirku_category_id_index` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_name_index` (`name`),
  ADD KEY `users_surname_index` (`surname`),
  ADD KEY `users_slug_index` (`slug`),
  ADD KEY `users_rank_index` (`rank`),
  ADD KEY `users_status_index` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `haber`
--
ALTER TABLE `haber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hizmet`
--
ALTER TABLE `hizmet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sirku`
--
ALTER TABLE `sirku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
