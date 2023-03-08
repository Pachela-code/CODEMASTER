-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 03:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `remark`, `link`, `created_at`, `updated_at`) VALUES
(1, 'SENHORA DO AMOR E DA GUERRA', 'Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo. Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem', 'NOVIDADE', '#', '2023-03-03 08:10:08', '2023-03-03 08:10:08'),
(2, 'O CARACOL ESTRÁBICO', '12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO:  * Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda. * Rodrigo chega a .', 'Something', '#', '2023-03-03 08:21:52', '2023-03-03 08:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `banner_media`
--

CREATE TABLE `banner_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('desktop','mobile') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_media`
--

INSERT INTO `banner_media` (`id`, `banner_id`, `media_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'desktop', '2023-03-03 08:10:08', '2023-03-03 08:10:08'),
(2, 1, 2, 'mobile', '2023-03-03 08:10:08', '2023-03-03 08:10:08'),
(3, 2, 6, 'desktop', '2023-03-03 08:21:52', '2023-03-03 08:21:52'),
(4, 2, 7, 'mobile', '2023-03-03 08:21:52', '2023-03-03 08:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `text`, `created_at`, `updated_at`, `is_featured`) VALUES
(1, 'SENHORA DO AMOR E DA GUERRA', '<p>Uruk, Mesopot&acirc;mia, 3000 a.C.</p>\r\n\r\n<p>S&eacute;culos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.<br />\r\nSete extraordin&aacute;rias plaquetas de barro cozido sugerem a sua hist&oacute;ria: a intelig&ecirc;ncia, a coragem, o dom de seduzir, que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrup&ccedil;&atilde;o dos sacerdotes de Inanna; a vit&oacute;ria sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestil&ecirc;ncia, ap&oacute;s inunda&ccedil;&otilde;es que cobriram a terra como ap&oacute;s um dil&uacute;vio b&iacute;blico&hellip;</p>\r\n\r\n<p><br />\r\nAs plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita.</p>\r\n\r\n<p><strong>LER&nbsp;EXCERTO&nbsp;NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://sebastiaoalves.com/public/uploads/livros/pdf/1-senhora%20do%20amor%20e%20da%20guerra.pdf\" target=\"_blank\">LER EXCERTO</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK ):</strong>&nbsp;<a href=\"https://sebastiaoalves.com/public/uploads/livros/epub/senhora%20do%20amor%20e%20da%20guerra%20(1).epub\" target=\"_blank\">DOWNLOAD</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Edi&ccedil;&atilde;o:</strong>&nbsp;Junho de 2020</p>\r\n\r\n<p><strong>Editora:</strong>&nbsp;Cultura Editora</p>\r\n\r\n<p><strong>Classifica&ccedil;&atilde;o Tem&aacute;tica:</strong>&nbsp;Romance</p>\r\n\r\n<p><strong>Dimens&otilde;es:</strong>&nbsp;150 x 228 x 14 mm</p>\r\n\r\n<p><strong>Encaderna&ccedil;&atilde;o:</strong>&nbsp;Capa mole P&aacute;ginas:&nbsp;240</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde Comprar&nbsp;em Papel</strong>:</p>\r\n\r\n<p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc</p>', '2023-03-03 08:12:33', '2023-03-03 08:12:33', 1),
(2, 'O VELHO QUE PENSAVA QUE FUGIA', '<p>&Agrave;s quatro da madrugada, que faz um homem de oitenta e tr&ecirc;s anos escondido entre os eucaliptos?<br />\r\nDe que foge? Que procura? Quem o persegue?<br />\r\nOnde ir&aacute; ele arranjar dinheiro para hot&eacute;is, t&aacute;xis, comboios, autocarros?<br />\r\nPorque elege para ref&uacute;gio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade M&eacute;dia?<br />\r\nE que dilema o vem finalmente surpreender, quando pensava ter encontrado a paz e mesmo reencontrado amor?</p>\r\n\r\n<p><strong>LER&nbsp;EXCERTO NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20velho%20que%20pensava%20que%20fugia.pdf\" target=\"_blank\">LER EXCERTO</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/epub/o%20velho%20que%20pensava%20que%20fugia.epub\" target=\"_blank\">DOWNLOAD</a></p>\r\n\r\n<p><br />\r\n<strong>Editora:</strong>&nbsp;Chiado&nbsp;Editora<br />\r\n<strong>Classifica&ccedil;&atilde;o Tem&aacute;tica:</strong>&nbsp;Romance<br />\r\n<strong>Dimens&otilde;es:</strong>&nbsp;139 x 218 x 13 mm<br />\r\n<strong>Encaderna&ccedil;&atilde;o:</strong>&nbsp;Capa mole<br />\r\n<strong>P&aacute;ginas:</strong>&nbsp;168</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde Comprar&nbsp;em Papel</strong>:</p>\r\n\r\n<p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon,&nbsp;Chiado Editora, Bertrand, etc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', '2023-03-03 08:15:10', '2023-03-03 08:15:10', 1),
(3, 'O COLECIONADOR DE AMNÉSIAS', '<p>Um lapso de mem&oacute;ria, um acidente na f&aacute;brica&hellip; O Eng&ordm; Zeferino n&atilde;o tem d&uacute;vidas: s&oacute; lhe resta demitir-se. At&eacute; porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espa&ccedil;ados, &eacute; certo, mas inevit&aacute;veis como o pingar de uma torneira avariada&hellip; Decide pois reformar-se e realizar o seu sonho de sempre: escrever um romance.</p>\r\n\r\n<p><br />\r\nMas a Ideia n&atilde;o vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como gr&atilde;os de areia&hellip; At&eacute; ao dia m&aacute;gico em que, numa tabacaria em Pedrou&ccedil;os, repara num livrinho de absurdos com um t&iacute;tulo extraordin&aacute;rio: Mem&oacute;rias de um amn&eacute;sico. E embora sinta que o t&iacute;tulo lhe foi roubado, ao mesmo tempo j&aacute; sabe o que vai escrever.</p>\r\n\r\n<p><br />\r\nAgora trabalha com m&eacute;todo. De manh&atilde; escreve o passado, aquilo que lhe aconteceu desde o acidente na f&aacute;brica, com que se iniciou aquilo a que chama o resto da sua vida. &Agrave; noite inventa o futuro, pois sabe que n&atilde;o pode dar-se ao luxo de esperar por ele.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<em>Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situa&ccedil;&otilde;es aqui narradas, nestes momentos de ternura, nestes momentos de humor, nestes momentos de tristeza e solid&atilde;o que fazem o percurso de um homem, desde os tempos em que, embora j&aacute; atingido pela doen&ccedil;a, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de Alzheimer.</em><br />\r\n<strong>Manuela Morais, Associa&ccedil;&atilde;o Alzheimer Portugal</strong></p>\r\n\r\n<p><br />\r\n<strong>LER&nbsp;EXCERTO NO BROWSER (PDF):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20coleccionador%20de%20amnesias.pdf\" target=\"_blank\">LER EXCERTO</a></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p><strong>FAZER DOWNLOAD DO EXCERTO (EBOOK):</strong>&nbsp;<a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/epub/o%20coleccionador%20de%20amnesias.epub\" target=\"_blank\">DOWNLOAD</a></p>\r\n\r\n<p><br />\r\n<strong>Editora:</strong>&nbsp;Chiado&nbsp;Editora</p>\r\n\r\n<p><strong>Classifica&ccedil;&atilde;o Tem&aacute;tica:</strong>&nbsp;Romance</p>\r\n\r\n<p><strong>Dimens&otilde;es:</strong>&nbsp;141 x 217 x 16 mm</p>\r\n\r\n<p><strong>Encaderna&ccedil;&atilde;o:</strong>&nbsp;Capa mole</p>\r\n\r\n<p><strong>P&aacute;ginas:</strong>&nbsp;206</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde Comprar&nbsp;em Papel</strong>:</p>\r\n\r\n<p>Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc</p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon,&nbsp;Chiado Editora, Bertrand, etc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Onde comprar o E-BOOK:&nbsp;</strong></p>\r\n\r\n<p>Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', '2023-03-03 08:32:24', '2023-03-03 08:32:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_media`
--

CREATE TABLE `book_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_media`
--

INSERT INTO `book_media` (`id`, `book_id`, `media_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2023-03-03 08:12:33', '2023-03-03 08:12:33'),
(2, 2, 5, '2023-03-03 08:15:10', '2023-03-03 08:15:10'),
(3, 3, 9, '2023-03-03 08:32:24', '2023-03-03 08:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\BannerMedia', 1, '24ab396c-9ceb-4a8b-b913-f19675afd8cd', 'default', 'cabecalho-1', 'cabecalho-1.jpg', 'image/jpeg', 'public', 'public', 75706, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:10:08', '2023-03-03 08:10:08'),
(2, 'App\\Models\\BannerMedia', 2, '337a877c-5411-4f06-b97a-f712f7173bbd', 'default', 'cabecalho-1 (1)', 'cabecalho-1-(1).jpg', 'image/jpeg', 'public', 'public', 44560, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:10:08', '2023-03-03 08:10:08'),
(3, 'App\\Models\\SiteInformation', 1, '147fd0bc-2aec-4f68-ac49-0db811c8de42', 'default', 'autor', 'autor.jpg', 'image/jpeg', 'public', 'public', 47448, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:10:54', '2023-03-03 08:10:54'),
(4, 'App\\Models\\BookMedia', 1, '7dc8819e-5871-4bf2-8c45-43d80e743f86', 'default', 'livro1', 'livro1.jpg', 'image/jpeg', 'public', 'public', 61064, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:12:33', '2023-03-03 08:12:33'),
(5, 'App\\Models\\BookMedia', 2, '8b9ba65e-c30b-47f5-9d8d-dc33d4f5be90', 'default', 'livro2', 'livro2.jpg', 'image/jpeg', 'public', 'public', 52025, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:15:10', '2023-03-03 08:15:10'),
(6, 'App\\Models\\BannerMedia', 3, '3e5da491-6328-426c-999b-84715d70762b', 'default', 'cabecalho-2', 'cabecalho-2.jpg', 'image/jpeg', 'public', 'public', 56941, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:21:52', '2023-03-03 08:21:52'),
(7, 'App\\Models\\BannerMedia', 4, '8af6f383-6caa-451c-a7ec-a545efe41750', 'default', 'cabecalho-2 (1)', 'cabecalho-2-(1).jpg', 'image/jpeg', 'public', 'public', 38340, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:21:52', '2023-03-03 08:21:52'),
(8, 'App\\Models\\PressMedia', 1, 'b7b2ea98-805e-40a3-89e9-40a315c5d745', 'default', 'critica', 'critica.jpg', 'image/jpeg', 'public', 'public', 119015, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:23:48', '2023-03-03 08:23:48'),
(9, 'App\\Models\\BookMedia', 3, '0b1809cc-68e9-494e-8de8-3180d42104b0', 'default', 'amnesias', 'amnesias.jpg', 'image/jpeg', 'public', 'public', 286318, '[]', '[]', '[]', '[]', 1, '2023-03-03 08:32:24', '2023-03-03 08:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_28_080422_create_banners_table', 1),
(6, '2023_02_28_082910_create_banner_media_table', 1),
(7, '2023_02_28_083229_create_media_table', 1),
(8, '2023_02_28_154910_create_site_information_table', 1),
(9, '2023_03_01_131503_create_books_table', 1),
(10, '2023_03_01_131632_create_book_media_table', 1),
(11, '2023_03_01_141014_add_is_featured_to_books', 1),
(12, '2023_03_01_165622_create_presses_table', 1),
(13, '2023_03_01_202602_create_press_media_table', 1),
(14, '2023_03_03_073039_add_latest_text_to_site_information', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presses`
--

CREATE TABLE `presses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presses`
--

INSERT INTO `presses` (`id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'CRÍTICA DE CARINA CARVALHO', '<p><strong>Cr&iacute;tica de Carina Carvalho sobre o livro &quot;Senhora do Amor e da Guerra&quot;</strong></p>\r\n\r\n<p><em>Livros hist&oacute;ricos n&atilde;o s&atilde;o os meus preferidos e devo dizer que o que me atraiu para a leitura deste foi mesmo a capa que est&aacute; linda ! E ainda bem que o li! Adorei a intelig&ecirc;ncia e tenacidade de Kulita, acho mesmo que ter&aacute; sido a pioneira em registos contabil&iacute;sticos. Este livro n&atilde;o se debru&ccedil;a sobre a parte rom&acirc;ntica das vidas das personagens mas sim no in&iacute;cio da inven&ccedil;&atilde;o da escrita. Como o autor afirma no in&iacute;cio fica a cada um de n&oacute;s acreditar ou n&atilde;o nesta vers&atilde;o</em></p>', '2023-03-03 08:23:48', '2023-03-03 08:23:48'),
(2, 'BLOG - \"AS LEITURAS DO CORVO\" SOBRE O LIVRO \"SENHORA DO AMOR E DA GUERRA\"', '<p><em>Uruk, cidade de Inanna. Uma jovem novi&ccedil;a &eacute; escolhida para, durante um ano, se tornar Nin, a que fala com a deusa. Mas o que devia ser apenas uma posi&ccedil;&atilde;o cerimonial n&atilde;o chega para Kulita, que, inteligente e ambiciosa, v&ecirc; como os sacerdotes que comandam a cidade se aproveitam da fragilidade do Ensi para se apoderarem do que a Inanna pertence. E, &agrave; medida que vai conquistando um lugar no cora&ccedil;&atilde;o do Ensi, Kulita come&ccedil;a a fazer perguntas desconfort&aacute;veis, a investigar comportamentos e falhas, a assumir um lugar de destaque que a muitos desagrada. H&aacute; quem queira livrar-se dela e regressar aos h&aacute;bitos de sempre. Mas Kulita pode ser tudo menos fraca. E, com a voz de Inanna do seu lado, tudo &eacute; poss&iacute;vel.?Parte do que torna esta leitura t&atilde;o empolgante &eacute; a capacidade do autor de mergulhar num passado long&iacute;nquo, com tradi&ccedil;&otilde;es, cren&ccedil;as e h&aacute;bitos distintos e torn&aacute;-lo tang&iacute;vel, n&atilde;o s&oacute; atrav&eacute;s das movimenta&ccedil;&otilde;es das personagens, mas atrav&eacute;s dos evidentes paralelismos com outros per&iacute;odos hist&oacute;ricos. N&atilde;o importa que tudo decorra num per&iacute;odo antes da escrita - sendo esta, ali&aacute;s, um dos desenvolvimentos mais not&aacute;veis a ocorrer ao longo desta narrativa. A actua&ccedil;&atilde;o pouco correcta dos sacerdotes, o desprezo com que qualquer novidade &eacute; encarada, a avers&atilde;o &agrave; entrada em cena de um grupo de estrangeiros e, claro, &agrave; posi&ccedil;&atilde;o de poder de uma mulher como Kulita despertam quest&otilde;es t&atilde;o poderosas na antiga Mesopot&acirc;mia como nos tempos de hoje. E esta sensa&ccedil;&atilde;o de intemporalidade, associada &agrave; for&ccedil;a de uma escrita envolvente e de um enredo pejado de personagens not&aacute;veis, torna a leitura bastante irresist&iacute;vel.</em><br />\r\n<em>?Tamb&eacute;m a constru&ccedil;&atilde;o das personagens &eacute; particularmente memor&aacute;vel, principalmente no que respeita a Kulita e a Zamug. Ambos s&atilde;o, &agrave; sua maneira, personagens fortes, Kulita com a sua curiosidade insaci&aacute;vel e a ambi&ccedil;&atilde;o de fazer tudo pela sua cidade, Zamug com a sua dedica&ccedil;&atilde;o incans&aacute;vel &agrave; descoberta da escrita. E ambos t&ecirc;m tamb&eacute;m as suas fraquezas e vulnerabilidades, Kulita na forma como a sua ambi&ccedil;&atilde;o a leva, por vezes, a comportamentos amb&iacute;guos e a esquecer liga&ccedil;&otilde;es que lhe parecem secund&aacute;rias, Zamug no des&acirc;nimo e no desapego a que, por vezes, a sua miss&atilde;o o conduz. S&atilde;o personagens cativantes, mas fal&iacute;veis, o que s&oacute; as humaniza, refor&ccedil;ando tamb&eacute;m o impacto dos momentos mais dram&aacute;ticos.?E importa, claro, referir o final, que, embora n&atilde;o seja totalmente imprevis&iacute;vel, tendo em conta certas revela&ccedil;&otilde;es do in&iacute;cio, consegue, ainda assim, surpreender pela intensidade que &eacute; dada a uma conclus&atilde;o relativamente conhecida. Sim, &eacute; poss&iacute;vel antever de que forma tudo terminar&aacute; para os protagonistas, mas os passos exactos e a intensidade dos momentos t&ecirc;m, ainda assim, um impacto surpreendente. Al&eacute;m, claro, de estranhamente adequado, tendo em conta a forma como as coisas foram conduzidas.</em></p>\r\n\r\n<p><em>Intenso no enredo, forte na constru&ccedil;&atilde;o das personagens e muito cativante na escrita, trata-se, pois, de um livro que facilmente nos transporta para o passado, questionando ao mesmo tempo apegos e vis&otilde;es que prevalecem ainda no presente. &Eacute; uma hist&oacute;ria de ascens&atilde;o e queda, de um ciclo, talvez, de gl&oacute;ria e de ru&iacute;na. Mas &eacute;, acima de tudo, a hist&oacute;ria de uma mulher brilhante e ambiciosa - e que hist&oacute;ria memor&aacute;vel!</em></p>', '2023-03-03 08:25:11', '2023-03-03 08:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `press_media`
--

CREATE TABLE `press_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `press_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_media`
--

INSERT INTO `press_media` (`id`, `press_id`, `media_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2023-03-03 08:23:48', '2023-03-03 08:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `site_information`
--

CREATE TABLE `site_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latest_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_information`
--

INSERT INTO `site_information` (`id`, `email`, `phone`, `address`, `author_name`, `author_text`, `facebook_url`, `instagram_url`, `linkedin_url`, `created_at`, `updated_at`, `latest_text`) VALUES
(1, 'example@mail.com', '123456789', 'This is address', 'SEBASTIÃO ALVES', '<p>O autor de &quot;Senhora do Amor e da Guerra&quot; nasceu em Lisboa, em 1954. Formou-se em engenharia qu&iacute;mica pela Universidade de Birmingham, Reino Unido e &eacute; professor no Instituto Superior T&eacute;cnico. At&eacute; aos 45 anos, escreveu exclusivamente poesia, mas come&ccedil;ou a sentir que se repetia e decidiu mais uma vez tentar escrever fic&ccedil;&atilde;o, com um afinco que nunca pusera em anteriores tentativas. E descobriu que era capaz de escrever di&aacute;logos e congeminar enredos. Publicou ent&atilde;o sucessivamente um livro de contos, &ldquo;O caracol estr&aacute;bico&rdquo; (2011), e os romances &ldquo;O colecionador de amn&eacute;sias&rdquo; (2014), &ldquo;O velho que pensava que fugia&rdquo; (2017), o romance hist&oacute;rico &ldquo;Senhora do amor e da guerra&rdquo; (2020) e o romance &quot;O homem certo &eacute; dif&iacute;cil de encontrar&quot; (2021).</p>', '#', '#', '#', '2023-03-03 04:40:06', '2023-03-03 08:04:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', '2023-03-03 04:40:06', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DxrcXYt0J6kY6VMOhWpNiVhYmYlIDsFSQUsUYtBa6F7w9KHONKYLlaL45XE4', '2023-03-03 04:40:06', '2023-03-03 04:40:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_media`
--
ALTER TABLE `banner_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_media_banner_id_foreign` (`banner_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_media`
--
ALTER TABLE `book_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_media_book_id_foreign` (`book_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presses`
--
ALTER TABLE `presses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_media`
--
ALTER TABLE `press_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `press_media_press_id_foreign` (`press_id`);

--
-- Indexes for table `site_information`
--
ALTER TABLE `site_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_media`
--
ALTER TABLE `banner_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_media`
--
ALTER TABLE `book_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presses`
--
ALTER TABLE `presses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `press_media`
--
ALTER TABLE `press_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_information`
--
ALTER TABLE `site_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner_media`
--
ALTER TABLE `banner_media`
  ADD CONSTRAINT `banner_media_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_media`
--
ALTER TABLE `book_media`
  ADD CONSTRAINT `book_media_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `press_media`
--
ALTER TABLE `press_media`
  ADD CONSTRAINT `press_media_press_id_foreign` FOREIGN KEY (`press_id`) REFERENCES `presses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
