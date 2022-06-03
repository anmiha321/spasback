-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2022 г., 14:31
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teaser` text COLLATE utf8mb4_unicode_ci,
  `article` mediumtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `teaser`, `article`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Одобрен закон о поиске пропавших людей по геолокации мобильного телефона', 'news1.png', '23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.', '23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.\r\n<br/>\r\nНорма закона предполагает возможность поиска пропавшего человека по данным его гаджетов на основании мотивированного постановления руководства органов, осуществляющих оперативно-разыскную деятельность, не дожидаясь решения суда.\r\n<br/>\r\nПри этом в документе прописана необходимость получать судебное решение в течение 48 часов с начала поиска, также суд должен быть оповещен в течение 24 часов после получения данных о местоположении пропавшего. В течение 48 часов с момента начала проведения оперативно-разыскного мероприятия правоохранители должны будут получить разрешение суда либо прекратить поиск по геолокации.\r\n<br/>\r\n«Оперативные службы смогут искать пропавших людей по местоположению их мобильных телефонов, не дожидаясь разрешения суда, — сказал Председатель Государственной Думы Вячеслав Володин, комментируя поправки. — В течение 24 часов с момента поступления сообщения о пропаже человека можно будет получить информацию о том, с кем пропавший связывался по мобильному, а также где в данный момент находится телефон».\r\n<br/>\r\n«Это важное решение – в ходе поисковых работ счет идет на часы. Промедление из‑за административных согласований может стоить человеку жизни», — добавил Вячеслав Володин.\r\n<br/>\r\nРанее ГД приняла поправки в Федеральный закон «Об оперативно-розыскной деятельности», которые упростят возможности в поиске пропавших детей с использованием данных их мобильных устройств.', 'odobren-zakon-o-poiske-propavshih-lyudej-po-geolokacii-mobilinogo-telefona', '2022-03-28 05:14:13', '2022-03-28 05:14:13'),
(2, 'В Бурятии нашли пропавших волонтеров-поисковиков', 'news2.png', '23 сентября спасатели Байкальского поисково-спасательного отряда МЧС России нашли пропавших добровольных поисковиков в районе слияния рек Снежная и Ара-Буректай. <br/>\r\nС волонтерами все в порядке, их доставили на вертолете в ближайший населенный пункт. Выяснилось, что они не могли сообщить о своем местонахождении из-за отсутствия связи...', '23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.\r\n<br/>\r\nНорма закона предполагает возможность поиска пропавшего человека по данным его гаджетов на основании мотивированного постановления руководства органов, осуществляющих оперативно-разыскную деятельность, не дожидаясь решения суда.\r\n<br/>\r\nПри этом в документе прописана необходимость получать судебное решение в течение 48 часов с начала поиска, также суд должен быть оповещен в течение 24 часов после получения данных о местоположении пропавшего. В течение 48 часов с момента начала проведения оперативно-разыскного мероприятия правоохранители должны будут получить разрешение суда либо прекратить поиск по геолокации.\r\n<br/>\r\n«Оперативные службы смогут искать пропавших людей по местоположению их мобильных телефонов, не дожидаясь разрешения суда, — сказал Председатель Государственной Думы Вячеслав Володин, комментируя поправки. — В течение 24 часов с момента поступления сообщения о пропаже человека можно будет получить информацию о том, с кем пропавший связывался по мобильному, а также где в данный момент находится телефон».\r\n<br/>\r\n«Это важное решение – в ходе поисковых работ счет идет на часы. Промедление из‑за административных согласований может стоить человеку жизни», — добавил Вячеслав Володин.\r\n<br/>\r\nРанее ГД приняла поправки в Федеральный закон «Об оперативно-розыскной деятельности», которые упростят возможности в поиске пропавших детей с использованием данных их мобильных устройств.', 'v-buryatii-nashli-propavshih-volonterov-poiskovikov', '2022-03-21 05:25:46', '2022-03-21 05:25:46'),
(3, 'В Иркутске провели первый учебный поиск пропавшего ребенка', 'news3.png', 'Организаторы развернули оперативный штаб с несколькими учебными зонами, рассказали о системе организации поисков и оказании первой медицинской помощи. По словам руководителя проектов благотворительного фонда «Оберег» Артема Шестакова, эффективно помочь в поиске можно даже не выходя из дома.', '23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.\r\n<br/>\r\nНорма закона предполагает возможность поиска пропавшего человека по данным его гаджетов на основании мотивированного постановления руководства органов, осуществляющих оперативно-разыскную деятельность, не дожидаясь решения суда.\r\n<br/>\r\nПри этом в документе прописана необходимость получать судебное решение в течение 48 часов с начала поиска, также суд должен быть оповещен в течение 24 часов после получения данных о местоположении пропавшего. В течение 48 часов с момента начала проведения оперативно-разыскного мероприятия правоохранители должны будут получить разрешение суда либо прекратить поиск по геолокации.\r\n<br/>\r\n«Оперативные службы смогут искать пропавших людей по местоположению их мобильных телефонов, не дожидаясь разрешения суда, — сказал Председатель Государственной Думы Вячеслав Володин, комментируя поправки. — В течение 24 часов с момента поступления сообщения о пропаже человека можно будет получить информацию о том, с кем пропавший связывался по мобильному, а также где в данный момент находится телефон».\r\n<br/>\r\n«Это важное решение – в ходе поисковых работ счет идет на часы. Промедление из‑за административных согласований может стоить человеку жизни», — добавил Вячеслав Володин.\r\n<br/>\r\nРанее ГД приняла поправки в Федеральный закон «Об оперативно-розыскной деятельности», которые упростят возможности в поиске пропавших детей с использованием данных их мобильных устройств.\r\n', 'v-irkutske-proveli-pervyj-uchebnyj-poisk-propavshego-rebenka', '2022-03-17 05:25:46', '2022-03-17 05:25:46');

-- --------------------------------------------------------

--
-- Структура таблицы `category_needs`
--

CREATE TABLE `category_needs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_needs`
--

INSERT INTO `category_needs` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Скотч', NULL, NULL),
(2, 'Принтер цветной, к нему:\r\n\r\n', NULL, NULL),
(3, 'Батарейки AA и AAA, либо такие же аккумуляторы + зарядное устройство к ним', NULL, NULL),
(4, 'Внешние аккумуляторы для зарядки (powerbank)', NULL, NULL),
(5, 'Карта памяти Samsung microSDXC EVO + UHS-I U3 64GB Class10 для квадрокоптера', NULL, NULL),
(6, 'Аэрозоль-репелленты', NULL, NULL),
(7, 'Термоодеяло многоразовое', NULL, NULL),
(8, 'Жилеты светоотражающие', NULL, NULL),
(9, 'Компасы (москомпас модель 22 C)', NULL, NULL),
(10, 'Фонари Armytek (DOBERMANN, Viking, Partner C2, UNI C4), к ним отдельно также нужны:', NULL, NULL),
(11, 'Рации Baofeng BF-A58, к ним:', NULL, NULL),
(12, 'Набор Первой Помощи (Базовый от Медплант)', NULL, NULL),
(13, 'Набор походной складной мебели (стол и стулья)', NULL, NULL),
(14, 'Сигнальная громкоговорящая установка Смерч 12М-4 (чтобы бвп мог идти на звук)', NULL, NULL),
(15, 'Бензиновый генератор Honda EU20iT1RG', NULL, NULL),
(16, 'Плащи или пончо влагозащитные многоразовые', NULL, NULL),
(17, 'Мешки спальные (СЕЗОННЫЙ 2/3 ULTRALIGHT FORCLAZ QUECHUA)', NULL, NULL),
(18, 'Палатка на 10 или 30 человек (Палатка МЧС М-10 от производителя ПФ \"Берег\")', NULL, NULL),
(19, 'Квадроцикл ( STELS ATV 600 YS LEOPARD 2020)', NULL, NULL),
(20, 'Дом на колесах/прицеп МЗСА 817731.001-05', NULL, NULL),
(21, 'Снегоход Yamaha Viking 540 V Белый (2020 г.)', NULL, NULL),
(22, 'УАЗ Комби Экспедиция (Для заброски волонтёров в труднодоступные места, в буханку вмещаются 25 человек или 23 человека и 2 собаки. Автомобиль также идеально подходит под штаб на активных поисках)', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `typeOfComment` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `image`, `thumbnail`, `issued`, `title`, `typeOfComment`, `created_at`, `updated_at`) VALUES
(1, 'letter1.png', 'thumbnail.png', 'Администрацией города Тюмени', 'Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за доблесть', 0, '2022-03-25 08:01:40', NULL),
(2, 'letter1.png', 'plug.png', 'Администрацией города Москва', 'Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за отвагу', 0, '2021-09-30 19:00:00', NULL),
(3, 'utair.svg', NULL, NULL, NULL, 1, '2022-03-25 08:00:54', NULL),
(5, 'utair.svg', NULL, NULL, NULL, 1, '2022-03-25 08:00:54', NULL),
(6, 'utair.svg', NULL, NULL, NULL, 1, '2022-03-25 08:00:54', NULL),
(7, 'utair.svg', NULL, NULL, NULL, 1, '2022-03-25 08:00:54', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint UNSIGNED NOT NULL,
  `Question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `Question`, `Answer`, `created_at`, `updated_at`) VALUES
(9, 'Почему не берете заявку на поиск без заявления в полицию?', 'Потому что…', '2022-04-04 09:41:45', '2022-04-04 09:41:45'),
(10, 'Заявление в полицию можно подать только через 3 после пропажи?', 'Нет, отказ на основании трех дней - незаконен! Если вы попытались подать заявление и вам так ответили в полиции - позвоните нам. Чем раньше начнется поиск, тем больше шансов найти человека живым и здоровым. Заявление должны принять в любом отделении, независимо от места пропажи...', '2022-04-04 09:41:45', '2022-04-04 09:41:45'),
(11, 'Кто может подать заявку на поиск? Это обязательно должен быть близкий родственник?', 'Нет, заявку на поиск может подать любой неравнодушный человек. В случае с обратным поиском, когда людей находят на улице, а потом ищут их родственников, это может быть просто прохожий...', '2022-04-04 09:41:45', '2022-04-04 09:41:45'),
(12, 'Зачем нужны поисковики, если есть полиция и МЧС?', 'Мы работаем не вместо них, а ВМЕСТЕ с ними. Представителей органов порой недостаточно, чтобы качественно закрывать все необходимые задачи по поиску. Совместными усилиями “Найден.Жив” будет намного быстрее, а время в нашем деле это главное.', '2022-04-04 09:41:45', '2022-04-04 09:41:45');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'gallery1.png', 'gallery1', '2022-04-04 07:01:26', '2022-04-04 07:01:26'),
(2, 'gallery2.png', 'gallery2', '2022-04-04 07:01:26', '2022-04-04 07:01:26'),
(3, 'gallery3.png', 'gallery3', '2022-04-04 07:01:26', '2022-04-04 07:01:26'),
(4, 'gallery4.png', 'gallery4', '2022-04-04 07:01:26', '2022-04-04 07:01:26'),
(5, 'gallery5.png', 'gallery5', '2022-04-04 07:01:26', '2022-04-04 07:01:26'),
(6, 'gallery6.png', 'gallery6', '2022-04-05 07:01:26', '2022-04-05 07:01:26'),
(7, 'gallery7.png', 'gallery7', '2022-04-05 07:01:26', '2022-04-05 07:01:26'),
(8, 'gallery8.png', 'gallery8', '2022-04-05 07:01:26', '2022-04-05 07:01:26'),
(9, 'gallery9.png', 'gallery9', '2022-04-05 07:01:26', '2022-04-05 07:01:26'),
(10, 'gallery10.png', 'gallery10', '2022-04-05 07:01:26', '2022-04-05 07:01:26'),
(11, 'gallery11.png', 'gallery11', '2022-04-01 07:01:26', '2022-04-01 07:01:26'),
(12, 'gallery12.png', 'gallery12', '2022-04-01 07:01:26', '2022-04-01 07:01:26'),
(13, 'gallery13.png', 'gallery13', '2022-04-01 07:01:26', '2022-04-01 07:01:26'),
(14, 'gallery14.png', 'gallery14', '2022-04-01 07:01:26', '2022-04-01 07:01:26'),
(15, 'gallery15.png', 'gallery15', '2022-04-01 07:01:26', '2022-04-01 07:01:26');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_11_110006_create_people_in_searches_table', 1),
(6, '2022_03_14_095031_create_category_needs_table', 2),
(7, '2022_03_14_095120_create_needs_table', 2),
(8, '2022_03_24_122346_create_comments_table', 3),
(10, '2022_03_24_122719_create_galleries_table', 3),
(11, '2022_03_24_122759_create_f_a_q_s_table', 3),
(12, '2022_03_25_105542_create_blogs_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `needs`
--

CREATE TABLE `needs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_need_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `needs`
--

INSERT INTO `needs` (`id`, `title`, `category_need_id`, `created_at`, `updated_at`) VALUES
(1, '-Картриджи с краской', 2, NULL, NULL),
(2, '-Белая бумага а4 для печати', 2, NULL, NULL),
(3, '-Аккумуляторы (LI-ION ARMYTEK 18650 3500 MAH)', 10, NULL, NULL),
(4, '-Зарядка для аккумуляторов 18650 Armytek', 10, NULL, NULL),
(5, '-Зарядная станция для аккумуляторов Baofeng BF-A58', 11, NULL, NULL),
(6, '-Аккумулятор для рации BaoFeng UV-XR, BF-A58, BF-9700, BF-S56 Max', 11, NULL, NULL),
(7, '-Антенна для рации Protec PHD-771', 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `people_in_searches`
--

CREATE TABLE `people_in_searches` (
  `id` bigint UNSIGNED NOT NULL,
  `fio_of_responsible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `fio_of_missing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `day_of_missing` datetime DEFAULT NULL,
  `place_of_missing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_place` tinyint DEFAULT NULL,
  `missing_explanation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_of_missing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_info` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people_in_searches`
--

INSERT INTO `people_in_searches` (`id`, `fio_of_responsible`, `phone`, `fio_of_missing`, `birthday`, `day_of_missing`, `place_of_missing`, `type_of_place`, `missing_explanation`, `police`, `photo_of_missing`, `extra_info`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Non ut hic quia debitis. Asperiores repellendus enim omnis quo atque quos. Mollitia commodi nesciunt molestiae provident ipsam.', 82763236602, 'Reprehenderit facilis unde distinctio voluptatem. Reprehenderit quia voluptatem sunt. Recusandae earum non dolore aut adipisci rerum et.', '1973-01-07 00:00:00', '1992-10-14 00:00:00', 'Itaque doloremque dolores tempore consequatur pariatur. Dolor numquam porro eaque corporis est ab omnis.', 1, 'Expedita ipsa aut quibusdam. Non ut inventore voluptatem sit officia voluptatem. Et exercitationem est aliquid ut qui corrupti. Minima omnis modi voluptas rem non modi.', NULL, 'search1(1).png', 'Velit ut occaecati minus cumque nemo amet. Ipsam recusandae velit ipsa distinctio neque aut. Veniam iusto possimus dolorum quia ratione. Natus nihil ducimus aut amet nesciunt.', 1, '2022-03-13 23:13:51', '2022-03-13 23:13:51', NULL),
(2, 'Quidem quia quia voluptas. Ab ea repellat quae voluptatum sit dolor et. Assumenda ratione consequatur voluptatem ex quaerat voluptate tenetur aut. Qui quod alias et harum omnis minus recusandae illo.', 86145556716, 'Quas impedit magni assumenda quo voluptatibus porro repellendus. Voluptates expedita delectus excepturi velit deleniti. Qui minus labore tenetur cumque excepturi id. Natus autem autem quia omnis.', '1985-03-22 00:00:00', '1991-10-01 00:00:00', 'Similique qui velit et sequi quae eius expedita. Voluptate omnis qui et nihil voluptas minima dignissimos. Soluta rerum ut dolor sed exercitationem.', 1, 'Amet doloribus sit consequatur sint ut. Possimus placeat recusandae doloremque voluptate. Maxime et nisi totam eos quos. Temporibus unde numquam officiis ratione cupiditate cumque.', NULL, 'search2(2).png', 'Et voluptatum id est. Nisi laudantium pariatur est culpa doloremque qui sit. Eveniet voluptas molestiae deserunt sunt aliquid consequatur.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(3, 'Beatae omnis blanditiis sed aspernatur perferendis natus ad. In ducimus excepturi consequuntur porro corporis. Voluptatibus alias quasi qui eos quo officiis est.', 86475067005, 'Inventore eaque velit dolor voluptate mollitia et veniam. Et sapiente ea exercitationem eaque atque. Eos corrupti consequatur ex sint rem et.', '2003-10-11 00:00:00', '1974-09-24 00:00:00', 'Voluptas autem rem earum quia. Odit voluptatem sit eum quia libero. Alias vero minus ut at amet odit. Quia impedit rerum libero odit aut voluptas ex rerum.', 2, 'Iusto alias deleniti molestias cupiditate. Cumque impedit porro sed enim quod. Perferendis eius eos sint quasi molestiae aperiam non.', NULL, 'search3(3).png', 'Ut minus quos qui adipisci. Ab non a reprehenderit asperiores quaerat maxime accusantium.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(4, 'Qui nulla necessitatibus voluptatem hic voluptatem. Et libero officia a deserunt dolorem in optio. Aut non qui pariatur culpa.', 83813455866, 'Earum non quibusdam ad sit. Assumenda sequi placeat laudantium quaerat facilis et quaerat. Magni sint porro praesentium voluptas laudantium praesentium excepturi et. Consequatur aut sed quis ab odit.', '2019-01-15 00:00:00', '2003-12-12 00:00:00', 'Necessitatibus sed maxime possimus consequatur qui sit sapiente. Amet dolorem debitis et quasi sapiente sit corrupti. Rem culpa numquam nihil voluptatem quia voluptatem.', 2, 'Deserunt esse fugit veniam nihil. Autem sequi culpa dolorem. Aspernatur molestiae nam nam ut a. Facere facere accusamus eligendi eum porro. Mollitia ratione accusantium voluptates perferendis odio.', NULL, 'search1dgdfbvbn.png', 'Omnis distinctio error quod molestiae. Qui vel libero magnam magni quis molestias. Magnam est et sed. Provident eveniet officia distinctio non et vero et.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(5, 'Non voluptas molestias ipsa accusamus porro vel quae. Quasi et dolore neque dolorem.', 88736745993, 'Ut qui et eum iure illo explicabo fugit totam. Laborum aliquam earum ratione velit temporibus. Veniam eaque eius rerum et error sunt cumque.', '2017-01-17 00:00:00', '1995-04-26 00:00:00', 'Maxime excepturi quis autem eos. Qui assumenda autem cumque sapiente iure. Doloribus est dolores explicabo et incidunt dolorem repudiandae voluptatem.', 2, 'Culpa est natus sed sed ut amet sint. Nisi reiciendis et labore in consequatur. Delectus non nobis praesentium a.', NULL, 'search2dfgrbbn.png', 'Ipsa dolor expedita sit cumque. Aut velit culpa aut aut inventore sit maiores. Non et voluptates eaque at rerum. Non sint vel ut vero.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(6, 'Aut dolorum qui quia modi magni. Numquam est odio rerum rem. Eius est autem pariatur voluptate eum quasi fugiat dolor.', 86678504673, 'Aperiam libero quos qui quia. Vero eos odit sequi perspiciatis qui voluptas necessitatibus soluta. Repellat asperiores aut et consequatur aliquam.', '1979-05-24 00:00:00', '1986-03-23 00:00:00', 'Consequatur exercitationem deserunt accusantium aut. Corrupti voluptatibus et quisquam quasi sed voluptatem dolor. Atque tempore iste eos eveniet incidunt.', 2, 'Voluptatem officia vitae beatae eligendi tempora soluta. Atque voluptatibus deserunt ut recusandae aperiam voluptatum quis est. Nesciunt quia quam qui sit odit.', NULL, 'search3dfgbvb.png', 'Et iste minima error suscipit. Eaque enim voluptate doloribus libero. Quia mollitia aliquam quidem. Laudantium quas id suscipit aperiam.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(7, 'Commodi sed dolor tempora eligendi. Officia itaque unde est labore. Neque iste animi odit provident nemo possimus expedita. Quia blanditiis odit omnis nihil illum temporibus est.', 89325319693, 'Sed voluptate commodi aspernatur quasi necessitatibus in aut. Illo distinctio id corrupti architecto sed distinctio explicabo. Error qui nihil voluptatibus sed aut animi.', '1980-11-30 00:00:00', '1994-02-15 00:00:00', 'Aperiam repellendus nostrum vero quia atque vitae ipsa. Consequuntur est dolores et asperiores nobis. Laborum eos eaque fugiat enim adipisci.', 2, 'Architecto voluptate quod nulla ea saepe sed. Nesciunt sed aperiam aut quod. Veniam qui repudiandae ipsa aliquid rerum.', NULL, 'search1213124124.png', 'Alias facilis quasi molestiae officiis unde id ea. Placeat et molestiae omnis. Sapiente veritatis voluptas quod consequatur.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(8, 'Asperiores natus ratione dolore saepe doloremque. Ad eos est vel necessitatibus. Est sequi ut id est dolores maiores quaerat. Omnis recusandae quis aperiam et qui ipsum.', 85805410745, 'Itaque occaecati ut alias eum excepturi corrupti quibusdam. Ea qui fugiat placeat expedita.', '2001-02-28 00:00:00', '1986-09-01 00:00:00', 'Qui et sit praesentium error necessitatibus. Commodi eveniet qui est sequi. Molestias asperiores et assumenda aut.', 1, 'Qui ipsam minus dolore aspernatur sit dolorum. Ut quia qui repudiandae et magni hic qui. Aut labore harum eveniet rerum hic distinctio et perspiciatis. Quas architecto nobis fugit fugit quo.', NULL, 'search2124213213.png', 'Ea labore porro excepturi ut unde voluptatem et dicta. Omnis ut ut minus illo impedit. Ducimus est beatae velit quia recusandae vel est.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(9, 'Aspernatur voluptatibus et nulla quo quam architecto aperiam. Aliquid at consequatur aut quisquam molestias et inventore. In ullam quia quaerat deserunt excepturi omnis neque.', 86210722081, 'Corporis et quo quia accusamus. Voluptas quasi praesentium cum qui nostrum natus. Rerum dolorem dolorem et consequatur porro sed.', '2005-06-15 00:00:00', '1982-02-08 00:00:00', 'Porro maxime iure consequatur sed. Libero aut quo harum possimus officia sed nemo. Non porro in deserunt reiciendis doloremque quia nisi possimus.', 1, 'Quae ut perspiciatis deleniti sunt. Blanditiis laboriosam non dignissimos dolores eligendi earum ducimus rerum. Voluptatem rerum et maxime maiores laborum dignissimos saepe hic.', NULL, 'search32142143.png', 'Vel nisi ut quam alias. Magnam odit doloribus cum et. Molestias et non autem sequi fuga deleniti asperiores.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(10, 'Laborum sit provident suscipit ut non. Omnis nesciunt doloremque sed et. Eligendi omnis voluptate voluptatem iusto quia.', 83988435538, 'Nesciunt laudantium saepe sint quis quo est earum ad. Autem deleniti quod alias quis molestias non occaecati ea. Voluptatum voluptatibus et soluta omnis.', '1986-01-15 00:00:00', '2004-02-10 00:00:00', 'Quia ut sint aperiam rerum a est vel. Voluptatem porro veniam officiis cum. Possimus deleniti vel quasi.', 2, 'Deserunt officiis qui ipsam illum blanditiis voluptate. Dignissimos autem commodi voluptas necessitatibus mollitia. Consequuntur minima saepe atque eius iusto architecto quas aut.', NULL, 'c:/openserver/userdata/temp\\e1c1c856891e0b21ed45c48456bb29a1.png', 'Aliquid cum consectetur excepturi tempore quia cupiditate. Maiores nihil fugiat nesciunt porro eos. Qui ex vitae nihil repellat aliquid qui.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(11, 'In ut delectus ullam delectus vero. Quis nobis rerum voluptatem necessitatibus ipsa. Porro impedit ut blanditiis sed iusto maiores qui. Iusto quia illum sapiente rem.', 80033160127, 'Iure ex ullam non aperiam nostrum voluptatem. Sunt enim et et illum a omnis aut. Corrupti non consequatur aperiam laboriosam aut.', '1990-02-12 00:00:00', '1979-10-20 00:00:00', 'Possimus aut quia sequi nesciunt voluptatem. Et qui ea in facere non impedit. Nemo ea dolores qui.', 2, 'Quia atque velit error animi deserunt. Rem est rerum tenetur qui unde odit. Voluptatem corporis asperiores deleniti laudantium. Soluta soluta et ut necessitatibus enim aut.', NULL, 'c:/openserver/userdata/temp\\8664b6b200d2c2918a9e371867979f9e.png', 'Blanditiis rerum quis enim neque sint ea nostrum. Sapiente minima vitae aliquam et. Excepturi ut ea labore vero atque esse.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(12, 'Quia doloribus dolores placeat laboriosam consequatur sed nesciunt. Accusamus et assumenda quae expedita. Qui provident sint maiores est corporis.', 82896762778, 'Eligendi ut quis assumenda accusantium nihil qui molestias sed. Odio fugiat nostrum reprehenderit optio dolor.', '1978-09-30 00:00:00', '1978-12-30 00:00:00', 'In rerum eum qui enim aperiam. Totam sed voluptas labore blanditiis. Et quam reiciendis iure consequatur qui.', 2, 'Odio doloremque ut error nisi ex eius. Omnis iste totam rerum molestias esse quia hic.', NULL, 'c:/openserver/userdata/temp\\7db976f464351062a2e58bd666054462.png', 'Omnis ut commodi et sunt illum placeat illum. Quam saepe non qui autem corrupti. Et et fuga nam in doloremque. Debitis qui et est dolor est et iure dolores. Est saepe quod assumenda officia.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(13, 'Veritatis aliquid sit sit dolorem. Molestiae consequatur repellendus in sint. Maxime consectetur illum nobis et voluptatem ea sunt quaerat. Quia commodi fugiat odit voluptas dolorem qui.', 86191362162, 'Nulla ut et voluptas dicta et nihil. Nobis aut hic ullam nemo velit ut quia. Officiis consequatur itaque quas perspiciatis voluptas. Omnis mollitia provident ea rerum.', '2014-12-21 00:00:00', '1976-04-24 00:00:00', 'Nihil ut et laboriosam earum. Voluptatem quisquam alias omnis repellendus sit. Minus praesentium porro provident aut vel. Voluptates blanditiis animi saepe.', 1, 'Sint dolores quis iusto qui. Sit aperiam dolores nobis repellendus fuga. Earum nostrum laudantium qui nihil est eum quis in. Dolorum quam veritatis culpa harum.', NULL, 'c:/openserver/userdata/temp\\0212620f01230e8aff3df66eac9834a8.png', 'Vero dicta doloribus rerum reiciendis quis velit. Libero in quibusdam illum ratione et dicta magnam. Quibusdam eum corporis adipisci at ad.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(14, 'Incidunt commodi et qui nesciunt. Quidem quas debitis ea voluptatem quis. Dolore exercitationem cumque ea fugiat commodi inventore iusto. Quam ut sit quo ipsum dicta.', 82733701441, 'Et qui voluptatem dicta ut similique. Voluptatum consequatur perspiciatis ad quod. Ipsum veniam porro libero officia incidunt hic.', '2013-02-16 00:00:00', '2009-02-18 00:00:00', 'Laborum dolor quae qui exercitationem debitis laborum. Corporis qui adipisci laborum laboriosam et quis magnam enim. Ipsam sit est nesciunt consequatur.', 1, 'Et assumenda quia ut quia ratione. Omnis vel laboriosam amet harum magnam officiis itaque. Dignissimos et ullam amet. Asperiores error recusandae voluptates.', NULL, 'c:/openserver/userdata/temp\\15225e4c82a36fe8e4d44dd10a8c4d09.png', 'Nulla cupiditate qui illum nemo vel. Unde quis deserunt vero consequuntur omnis et deleniti. Sint aut numquam aperiam suscipit quo dolor. Minus porro officia maiores.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(15, 'Voluptas corporis dicta aut dicta. Voluptate et vitae cupiditate saepe magnam enim. Nesciunt eum delectus velit commodi. Laudantium sed adipisci voluptas corporis omnis quibusdam quis voluptas.', 86429123624, 'Blanditiis nostrum et voluptas sint. Velit eveniet incidunt ut culpa. Nemo a voluptatem sint sapiente.', '1973-06-17 00:00:00', '2016-12-13 00:00:00', 'Incidunt veritatis rerum repudiandae voluptatibus. Laborum fuga ullam ut magnam. Ut inventore harum est consectetur nesciunt omnis quo.', 2, 'Assumenda qui ratione enim consequatur libero tempore. Quo quis consequatur excepturi. Qui vel consequuntur saepe quasi beatae dolorem suscipit. Labore illum nihil quo occaecati quas est quia.', NULL, 'c:/openserver/userdata/temp\\236b20d55e1f8e04a6c4a4cf41002698.png', 'Voluptatibus consequatur esse eum suscipit tempore voluptas minima qui. Placeat assumenda ut ut quaerat. Sint est ea eius odio facere nihil.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(16, 'Tenetur officia doloribus voluptates omnis. Alias aut aspernatur nihil sapiente quos ut laborum. Et natus neque molestiae enim et aut maxime.', 87658337192, 'Dolorem dolores magni expedita ut adipisci. Quis architecto enim et rem. At quo eligendi corporis quia consectetur.', '1971-04-09 00:00:00', '2000-07-19 00:00:00', 'Odit id voluptatum veritatis consequatur. Expedita voluptas sed quia dolorem voluptatem animi nihil. Aut repellat aut aut ea aut ipsa.', 1, 'Ex officiis quia aut est in minima at. Mollitia molestiae saepe est. Error commodi non labore. Minus dolores officia corrupti aperiam.', NULL, 'c:/openserver/userdata/temp\\4223ffb63a78fd82cebe72c88ed4c34a.png', 'Tempora at aut eaque vero quo sed ea. Explicabo rerum nesciunt eum sit pariatur. Et quos aspernatur sit perferendis. Accusantium tenetur repudiandae animi iure aliquam itaque.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(17, 'Aut animi iste nam et deleniti. Aut autem soluta amet consequatur excepturi. Qui a esse et accusamus non. Aut sunt quibusdam exercitationem doloribus dolorem tempora.', 88441583198, 'Vitae dolore omnis voluptas minus ut quo ut. Quis praesentium itaque ex voluptas debitis rerum officia ab. Pariatur dolores qui et accusantium est consequatur et. Culpa eum facere nobis in et non.', '1990-06-28 00:00:00', '1985-12-23 00:00:00', 'Consectetur labore veniam voluptates accusantium qui et earum. Et facilis quia sed quia. Ut vel aliquam dolorem.', 1, 'Ducimus veniam quidem et sit quia illum. Voluptates omnis vel quidem non. Porro magni est rem doloremque earum.', NULL, 'c:/openserver/userdata/temp\\c4ce871a48a9b366e7ce31e70e8baf8c.png', 'Aut ab tempore voluptas. Sit nam quia ea ducimus laudantium sunt qui. At est et ut.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(18, 'Et minus et nesciunt sint harum dolorem suscipit et. Qui voluptatum qui minima enim.', 86084795670, 'Aut magnam ut fuga veritatis. Eos eveniet expedita quisquam natus odio temporibus. Quis quidem voluptatibus et non. Aperiam officia dolorem nihil.', '1998-10-29 00:00:00', '1986-09-22 00:00:00', 'Ducimus labore provident consequatur ut quaerat assumenda. Non sint recusandae alias. Et ea error eius rerum autem.', 1, 'Nihil dolor perferendis aut odio architecto libero. Inventore similique iure officia ab inventore. Sunt nemo mollitia pariatur ut rerum. Labore nemo consequatur mollitia.', NULL, 'c:/openserver/userdata/temp\\73f0a0375b1a06333f3b478b71a3eda4.png', 'Odit saepe reprehenderit est veritatis architecto itaque. Asperiores odit aliquid nam voluptate occaecati dolorum.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(19, 'In eos in animi. Saepe omnis voluptatem aspernatur sequi ullam omnis est. Quasi accusantium deserunt est qui cupiditate consequatur. Vel esse aut ad sit. Repellendus hic alias dicta.', 88578524055, 'Aut labore odio rerum. Repellat ut accusantium excepturi quis accusamus eum.', '2020-02-20 00:00:00', '1971-01-05 00:00:00', 'Temporibus culpa nihil eius dolores non exercitationem quam. Odio cum qui laborum velit. Sequi vitae unde sint vel. Enim excepturi reiciendis aspernatur vel.', 2, 'Itaque autem et est est. Sunt fugiat quia cumque enim. Repudiandae cum cum enim.', NULL, 'c:/openserver/userdata/temp\\dfcffacd19be62dab3c1137b18fa4b23.png', 'Est adipisci dolores a voluptatem nemo aut. Ipsa culpa nobis error tenetur odit dicta. Ipsa aliquam veritatis et id sint. Omnis nesciunt sed consequatur architecto nisi et dolor officia.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(20, 'Dolor et est eos a. Debitis minus aut nulla consequatur est. Est quod in corporis optio quos. Temporibus aut quas vitae.', 83266802249, 'Nemo nam asperiores labore quia nemo. Quibusdam non modi error aut tempora natus dolorum. Officiis vel est sed rerum aliquam doloribus. Rerum neque dignissimos et.', '1993-08-17 00:00:00', '2018-09-20 00:00:00', 'Et praesentium est ad exercitationem modi. Velit est dolorem ullam eos. In corrupti repudiandae accusantium nam doloribus.', 2, 'Dolor sit animi numquam numquam accusamus quisquam possimus quibusdam. Quos similique assumenda qui beatae. Labore voluptatem neque architecto accusantium consequuntur.', NULL, 'c:/openserver/userdata/temp\\74bd46ba75785f9a13b6532f3151491c.png', 'Similique omnis facilis nihil cupiditate neque. Sunt quibusdam qui repudiandae ea nam. Dolor nihil quia nihil dolorum sit. Et nisi quasi hic ea.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(21, 'Dolor autem laboriosam tempore similique sint earum. Est est perferendis optio. Optio doloribus et id tenetur est. Modi autem dolores tempora sunt itaque quas aliquam quo.', 86597774702, 'Exercitationem exercitationem enim qui quas cumque et necessitatibus. Et incidunt et accusamus nobis explicabo rerum sapiente. Eaque veritatis fugit dolores quas provident.', '2015-01-17 00:00:00', '1998-09-28 00:00:00', 'Non reiciendis ipsam id quia et molestiae reprehenderit fugit. Quo laborum molestias laborum assumenda. Veritatis iure ea molestias dolorem eligendi ea.', 2, 'Aut saepe deleniti eligendi distinctio et. Commodi officiis velit doloribus perferendis qui aut.', NULL, 'c:/openserver/userdata/temp\\b4a7541e7c54afafb127c88e88507323.png', 'Amet qui esse magni libero. Vel qui omnis exercitationem sunt. Tenetur quia voluptatem ipsam corrupti.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(22, 'Autem occaecati corporis suscipit ab. Quas alias qui sequi quisquam. Sit tenetur suscipit laudantium facilis. Ut id error voluptate aspernatur.', 83122287360, 'Velit amet maiores optio dolorum officia ducimus. Nihil at rerum assumenda. Et eius dolor velit explicabo quis nihil dolorem.', '1989-09-04 00:00:00', '1983-10-08 00:00:00', 'Cupiditate in qui rerum in nam autem. Iusto distinctio non dolorem. Praesentium explicabo fuga debitis voluptatem debitis placeat dolor sit.', 2, 'Velit et modi suscipit ipsam quae. In vel quibusdam non illo. Facilis ut explicabo beatae nulla non officia qui et.', NULL, 'c:/openserver/userdata/temp\\62425472a946912ff9e2f84f99507bf2.png', 'Dolorem sint explicabo id omnis. Est aliquid porro aut necessitatibus cum et voluptatibus. Sint modi sed aliquid. Blanditiis et dolorem soluta facere optio qui.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(23, 'Rem quos ipsum sed dignissimos error. Aspernatur ut saepe nihil quibusdam quas. Perferendis fugit tenetur voluptas voluptatem distinctio. Aspernatur soluta non facilis est id.', 89305417217, 'Rem saepe doloribus et veniam totam quibusdam. Repellat aut aut repudiandae ea cum. Commodi numquam aspernatur quo voluptatum autem qui.', '1971-06-06 00:00:00', '1976-03-16 00:00:00', 'Cupiditate quaerat voluptate perferendis dolorem deleniti. Ratione et voluptatem impedit quisquam. Blanditiis possimus earum deserunt omnis. Qui nobis dolorum animi fugit quae culpa enim veritatis.', 1, 'Et laborum vel quia voluptatem quasi. Saepe assumenda eligendi et. Voluptas ad voluptates modi distinctio debitis alias perspiciatis.', NULL, 'c:/openserver/userdata/temp\\e5525bae2dfbe0735a2840da989bace9.png', 'Quaerat perferendis voluptas est ipsa deserunt nam. Magnam reiciendis illo beatae ipsam qui rerum omnis. Ut autem illo voluptatum voluptatem. Sed porro velit voluptatibus et.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(24, 'Commodi et ad totam placeat odio optio. Iusto quo minima qui omnis debitis voluptates. Repellat atque enim quos facere minus ea. Aliquid quam voluptas nesciunt nisi ad.', 80524904413, 'Consequatur porro iure dolorum aut reprehenderit quasi in non. Sit aspernatur rem neque sed. Fugiat maiores dignissimos dolorem saepe. Nihil aliquam enim voluptas quae.', '2002-03-29 00:00:00', '1970-09-01 00:00:00', 'Voluptas odio ratione nesciunt sint illum non magnam. Ducimus ut sequi autem asperiores. Aut consequatur et dolores repudiandae.', 1, 'Similique accusantium dolorum corporis quasi qui consequatur. Dolorum dolor quo debitis libero totam. Aut iure voluptatem veritatis magnam perspiciatis odio. Possimus quos voluptatem incidunt error.', NULL, 'c:/openserver/userdata/temp\\4486d426263117adb5167de12515a7e4.png', 'Voluptates sint rem in et repellendus. Ipsum sapiente exercitationem minima et nihil voluptates ab.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(25, 'Eum saepe voluptas aut asperiores mollitia dolor amet. Sed labore quae rerum nihil dolorem. Omnis impedit inventore cumque.', 80210150335, 'Sed consequuntur molestiae dicta aperiam. Ullam molestias incidunt unde adipisci voluptatem commodi voluptates. Consectetur ea non perspiciatis et atque dolore nam dolore.', '1977-05-11 00:00:00', '2002-12-10 00:00:00', 'Est et dolorum est illo architecto. Officia ut voluptatem repellat distinctio. Perspiciatis non rem illo labore illo officia omnis. Nulla facere sequi est dolorum. Rerum vel eos sunt.', 1, 'Est iure eum fugit dolore. Molestiae est quaerat nostrum sunt numquam eveniet a. Molestiae saepe quidem debitis ut eius.', NULL, 'c:/openserver/userdata/temp\\7867460707c8d9f01306774e8324bb71.png', 'Nesciunt aut in dolorem voluptatem. Laborum dolores repudiandae sunt voluptas dolore. Reprehenderit qui magni quos corrupti a.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(26, 'Dolorem quisquam quam deserunt expedita nobis corporis. Est voluptatem porro aut eius. Autem voluptas est autem vel recusandae. Est totam molestias minima quas et veritatis aut.', 85015550632, 'Illum placeat qui id similique. Consequatur sit fuga itaque dolores dolores consequuntur. Voluptate ab ullam vero nam minus laboriosam. Cupiditate quasi quos recusandae debitis quia repellat.', '2007-04-27 00:00:00', '1995-04-11 00:00:00', 'Quia occaecati consequatur reiciendis quas porro sit. Voluptatem sed nemo veniam. Cumque consequatur voluptatem nemo nesciunt accusantium quasi quibusdam.', 1, 'Mollitia ducimus ut reprehenderit et. Inventore et alias et est. Animi architecto numquam ipsa fuga voluptas provident vitae natus.', NULL, 'c:/openserver/userdata/temp\\f35c87f432ba6843607bd721ccb769d1.png', 'Tenetur beatae exercitationem cumque quod voluptate voluptas odit voluptatem. Vero rerum exercitationem in porro optio aliquid. Fuga deserunt corporis adipisci consequatur sit.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(27, 'Esse et beatae id consequatur est. Enim aut eum sed quidem non dicta.', 80147313664, 'Enim nam debitis praesentium itaque. Aperiam nostrum sint ipsam porro vel quod. Fuga molestiae dolore tempore qui.', '1990-03-25 00:00:00', '2005-05-26 00:00:00', 'Molestiae quia quia consequatur sed quia. Quisquam cumque aut accusamus omnis. Dolorem adipisci vel ratione est quo. Dolores quo voluptate tempore et omnis. Dignissimos ut alias est veritatis.', 2, 'Similique et sunt iure impedit. Fugiat fuga sed eum dolor. Maxime omnis nemo cupiditate rerum iure pariatur est. Qui quia ullam praesentium modi aut provident. Ut porro exercitationem vel qui.', NULL, 'c:/openserver/userdata/temp\\feb3a5b5f43038333dae007c6b975bb5.png', 'Voluptas rerum amet et cupiditate sed et labore. Quam cum facilis dignissimos facilis dolore. Quasi aut corporis enim ut voluptas.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(28, 'Consequatur voluptatem est quibusdam eum blanditiis non eum. Facere rerum voluptates voluptas ratione. Corrupti mollitia at ut doloribus sint officiis et. Dolorum quaerat velit et ratione.', 83772103796, 'Nihil non qui labore accusamus exercitationem. Ut quibusdam quibusdam sunt qui ut provident. At soluta omnis recusandae. Quis inventore accusamus odit. Tempora ut officia sit fugit voluptas adipisci.', '1978-07-11 00:00:00', '1995-04-05 00:00:00', 'Mollitia sit iste est quidem explicabo qui dolor voluptas. Officia omnis alias molestiae labore amet. Ut quasi illum et perferendis. Inventore magnam occaecati nostrum velit aperiam ea.', 2, 'Dolor tempore fugit minima quidem enim qui. Exercitationem cumque quis maxime debitis. Quam voluptatem omnis ullam.', NULL, 'c:/openserver/userdata/temp\\df41ba2d3db5938532ec5043efd799d0.png', 'Dicta ducimus omnis culpa. Sint officia cumque voluptatem necessitatibus est nisi sunt modi. Ab placeat incidunt error quidem et aliquid.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(29, 'Ut cum qui quos praesentium. Et recusandae et veritatis error distinctio unde praesentium. Quia provident magni et. Aperiam consequatur a animi autem.', 85856709657, 'Molestias quas veritatis voluptatem voluptas error. Dicta sunt architecto excepturi inventore aliquam dolore. Vitae amet sunt illo sit voluptas sunt sequi. Rerum qui est aut ipsam officiis.', '2007-12-02 00:00:00', '1996-05-20 00:00:00', 'Vitae rerum similique laboriosam et sapiente consectetur. Ut quia aut voluptate voluptate odio libero repellat. Similique labore ea porro laborum optio sint tempora. Nihil qui sit fugiat.', 1, 'Laudantium ut doloremque est. Quis placeat iusto expedita qui omnis dolores. Est similique placeat molestias harum.', NULL, 'c:/openserver/userdata/temp\\51f0ee0b24328e46899400a4081af2ec.png', 'Repellendus qui iste culpa autem similique quis rerum. In dolores voluptatem et et et itaque ut. Non quo culpa illum iste et rerum nulla.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(30, 'Magni ut commodi laborum. Harum necessitatibus dolorem nulla est quo sint sed. Quo nam quae molestiae labore laborum error iusto. Ut omnis perspiciatis aperiam sint qui.', 83272942430, 'Ipsa qui ratione est cum deleniti ea qui sunt. Quia porro et enim cupiditate. Maiores dicta dignissimos labore odio commodi consectetur.', '1988-09-25 00:00:00', '2019-02-22 00:00:00', 'Doloribus sed tempora voluptas et molestias. Reprehenderit eveniet neque ipsa et sed.', 1, 'Officia et error nulla iste hic. Est et magni sapiente quaerat eum eaque. Et quisquam maxime fuga praesentium deleniti suscipit.', NULL, 'c:/openserver/userdata/temp\\bd6bd8c5d9ac449297daa103c9ce3f73.png', 'Omnis vero illo minus qui est consequatur. Ipsam id et incidunt ea vel aut deleniti. Quas quos iusto quaerat repellendus quo nihil maxime.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(31, 'Doloremque quam et error porro excepturi quia voluptas. Sunt doloremque quibusdam quidem placeat quis. Itaque molestiae quo nemo rerum. Incidunt voluptatem id qui.', 84022833973, 'Laboriosam officiis ratione impedit. Quasi quisquam reprehenderit voluptatum provident nesciunt iusto. Ullam repudiandae atque necessitatibus veritatis ut itaque.', '1982-03-28 00:00:00', '2014-04-10 00:00:00', 'Dolor velit sunt corrupti quae. Velit laborum eum pariatur excepturi qui dolores. Dolorum dolor laudantium aut mollitia iusto reprehenderit unde. Consequuntur quia laboriosam provident quo.', 1, 'Et similique sint quia quibusdam sit velit. Qui facere omnis eveniet quia et maxime. Quia rerum odit expedita et provident ea nobis porro. Velit hic et qui voluptate.', NULL, 'c:/openserver/userdata/temp\\a537ce03fc1c452e3aaf20877327493d.png', 'Voluptatibus et eos et vel. Omnis libero ut quaerat ab pariatur qui aut rerum.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(32, 'Minima ullam quis et sapiente qui non nobis. Vero consequatur incidunt quis molestiae assumenda est nihil temporibus. Et mollitia corporis sapiente qui accusamus dolores. Ipsam ipsam vitae sit est.', 88617134639, 'Vel alias laudantium iure et est est veniam. Eveniet quia error repellat dolorem eius. Voluptatem voluptas cupiditate perferendis consectetur illum.', '1982-10-23 00:00:00', '2004-04-05 00:00:00', 'Sapiente minus sed cum est molestiae rerum et. Sit nobis aut hic delectus amet voluptas. Error cum voluptatibus rerum animi dolorum assumenda.', 2, 'Ut nam aut est culpa. Labore atque id neque neque. Assumenda distinctio quis tenetur alias ea occaecati.', NULL, 'c:/openserver/userdata/temp\\e83a16c57574d6d118d8cbd185166171.png', 'Tempore consequatur omnis laborum enim quis. Tenetur facilis sint ut eum. Aut placeat molestiae quaerat tempora ea tempore inventore. Sed animi sapiente et iure.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(33, 'Quis qui corrupti quibusdam quibusdam non voluptatem. Rerum vitae nisi harum vel. Tenetur ut fuga quas incidunt voluptatum sed.', 83509469298, 'Corrupti error eligendi omnis commodi voluptas modi expedita. Quod voluptatum ducimus eius quis ut culpa ipsa. Quo libero voluptates eos quidem dolores quibusdam.', '1999-11-23 00:00:00', '1979-02-26 00:00:00', 'Qui et explicabo alias quo. Laboriosam voluptatem provident ullam nobis nulla quidem. Ipsa velit doloremque rerum molestias ea.', 1, 'Nulla eaque aut tempore nisi dolores aperiam ut. Voluptatum ut provident quas laboriosam aut quidem ut. Et deserunt corporis vel eaque ipsum. Ut tempora quia natus libero quisquam modi autem.', NULL, 'c:/openserver/userdata/temp\\71867b91525467bf61f9c502f01bf8ce.png', 'Harum voluptatem quisquam iure ratione ipsum ut. Quas non consequatur rerum et. Voluptatem enim voluptate deleniti.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(34, 'Quia ipsum ipsam aut reiciendis eos. Qui dolorum ducimus cum placeat. Aperiam est eligendi ut.', 86759253755, 'Qui officiis reiciendis sint velit numquam quia debitis. Non laudantium vitae incidunt modi. Numquam amet quia accusantium quibusdam. Aspernatur architecto id totam nam officiis qui delectus.', '1995-10-08 00:00:00', '2015-02-28 00:00:00', 'Ut sunt quo quam eum. Consequatur fuga suscipit voluptas quia omnis voluptatum. Qui blanditiis aperiam aut.', 2, 'Ad aut voluptate cumque soluta est molestiae deleniti placeat. Officiis aut et error rerum et aut rerum.', NULL, 'c:/openserver/userdata/temp\\d848dbee4bb40618d8193e6ff30e5f12.png', 'Quis et beatae enim. Voluptas ut sint rerum fugit. Autem velit in suscipit sequi nihil nisi. Error repudiandae eum modi quidem voluptatem.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(35, 'Ipsum est quam ex doloremque libero quasi. Officiis illum nam corporis ducimus magnam ut qui. Illo iste reiciendis quia ea.', 89857471564, 'Sed magnam rem et sed est. Hic aspernatur accusamus occaecati saepe ut blanditiis ut ipsum. Eius ut molestiae necessitatibus veritatis sunt. Similique et id vero distinctio.', '2014-07-13 00:00:00', '1995-06-09 00:00:00', 'Sed dolores et sint in dolor. Ipsum ad sed voluptates aut. Deserunt rerum necessitatibus aliquam exercitationem culpa amet id.', 2, 'Et inventore quae hic quia doloremque. Minus molestiae et quis quae atque aperiam necessitatibus. Unde placeat labore ut nostrum quaerat ut illo.', NULL, 'c:/openserver/userdata/temp\\606c08598e679e4350742cf78f8f361a.png', 'Nulla quas occaecati sit qui aut dolorem omnis. Qui ut amet beatae vel iste. Reiciendis amet quae deleniti beatae ex. Sit cum cum impedit.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(36, 'Quisquam molestiae ex veniam dolor. Deserunt vitae sit voluptatem similique. Earum excepturi doloremque quod aut fugit qui consectetur. Qui ipsum minima molestiae aliquam quidem placeat quia.', 89392322901, 'Modi ut quos rerum iusto modi. Cum dolores nesciunt dolores dolores sit vel numquam. Adipisci dignissimos in laboriosam dolorem voluptatem sed.', '2004-07-01 00:00:00', '2021-01-27 00:00:00', 'Eum quisquam quod laboriosam possimus iste enim eos. Explicabo ut perferendis sed cumque adipisci. Autem nulla occaecati quasi et vitae. Numquam aut neque vel omnis.', 1, 'Earum est deleniti laudantium dolores. Perferendis consectetur vero fugiat. Autem rerum alias incidunt est.', NULL, 'c:/openserver/userdata/temp\\b2baac3704f9e274f31abeec9d6ee369.png', 'Ipsa et impedit sit numquam. Quia nostrum ut eum voluptas. Nemo dolor ea occaecati sit aut quam.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(37, 'Eveniet consequatur sed et dolor et accusamus voluptatibus. Sed voluptas labore iste corrupti. Rerum perferendis consectetur cupiditate.', 88208299022, 'Vitae laborum amet illo. Accusamus provident repellat dolor nulla doloremque voluptatem quia. Et eum eligendi voluptas cupiditate est asperiores.', '2014-01-25 00:00:00', '1978-06-29 00:00:00', 'Voluptatem velit dolores eligendi alias repudiandae. Rerum cumque facilis ipsa accusantium perspiciatis laboriosam dolorum sed. Ut nam laborum et nam reprehenderit.', 2, 'Corporis ut ea ipsam in sit et est. Qui voluptatem sit praesentium ut illum nam sit eum. Voluptatem incidunt aliquid omnis animi aut dolores. Officiis perferendis perferendis illum adipisci.', NULL, 'c:/openserver/userdata/temp\\401fce36363cacc6c79bf65cfcc45e0a.png', 'Voluptas et sit aperiam voluptas atque et exercitationem. Corrupti voluptatum quo qui ipsum et sed maxime. Modi ut enim et. Molestiae fuga doloribus ea cupiditate nemo ut.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(38, 'Deleniti non explicabo maiores occaecati. Aperiam et sapiente sequi qui quae qui. Quis sit sed et eveniet.', 85685951536, 'Rerum harum labore autem corrupti dolorum tempora autem voluptatem. Tenetur eum aut vitae aliquam laborum. Et minus ut officiis aut aliquid.', '1971-10-14 00:00:00', '2007-04-02 00:00:00', 'Recusandae doloribus qui error perferendis. Praesentium dolor doloribus magnam ut. Sint qui error quae incidunt qui magnam.', 2, 'Quia porro ea vel inventore eos voluptate. Quisquam mollitia voluptas molestiae accusamus vel nulla. Voluptates quo consequatur quasi quo et dolores nihil soluta.', NULL, 'c:/openserver/userdata/temp\\40dfd2d452f1babe74a9cad41577491d.png', 'Omnis at molestiae maxime. Et voluptate laudantium adipisci incidunt quia exercitationem eaque. Ipsa consequatur sed ratione amet.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(39, 'Quae numquam ducimus ut voluptatum deserunt est. Eum dolor vel alias voluptatem voluptatem voluptatum sunt. Odit qui dignissimos dolorem omnis. Nam et quam est voluptas ut.', 85515285868, 'Enim nemo quis amet quidem nemo laborum. Error eum illo aliquam et. Est temporibus ipsam voluptas consectetur.', '2013-02-03 00:00:00', '1970-03-03 00:00:00', 'Accusantium sunt occaecati rem esse. Temporibus quam sed deserunt velit sapiente explicabo. Fugiat voluptates officiis minima placeat ea. Voluptas excepturi tenetur maiores voluptate hic vel eum.', 2, 'Atque maiores quis incidunt fugiat. Minima blanditiis cumque eos hic eum dolor. Est ut provident inventore necessitatibus. Nemo rerum sit voluptas adipisci.', NULL, 'c:/openserver/userdata/temp\\b11ccb599d6a2f78d92158095c476623.png', 'Voluptate quam iste minima quibusdam magni soluta distinctio. Et sit laudantium eos quasi dolorum ipsam qui. Error quis similique ipsa voluptas sit ut molestiae.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(40, 'Consequatur impedit repellendus nulla laborum. Quod nihil libero ullam. Maxime voluptas aliquid quibusdam ut assumenda. Iusto quam fugiat dolorum necessitatibus ipsum doloribus quo.', 88609515201, 'Amet ab magni ut adipisci laboriosam rem excepturi. Porro nihil veniam enim neque. Praesentium vitae quia placeat cupiditate aut autem. Ullam voluptas fugit odio nulla est molestias.', '1987-05-07 00:00:00', '2000-10-18 00:00:00', 'Doloremque neque id iusto consequatur ipsum. Quidem repudiandae quo culpa qui pariatur. Sit non commodi ut corporis. Quis qui quidem voluptas laudantium quos.', 1, 'Itaque tenetur quaerat tempore sint ea modi. Voluptatibus impedit laudantium debitis illo fugit cupiditate debitis. Ducimus doloribus minus molestiae.', NULL, 'c:/openserver/userdata/temp\\b4f3c51431eab36ff847bb68271047d6.png', 'Natus repellat quis nostrum soluta enim exercitationem. Explicabo commodi rerum et fugit. Neque dolorum placeat quisquam aliquid. Quo tempora fuga id debitis nemo et tempora eveniet.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(41, 'Architecto sapiente fuga et beatae eligendi sunt. Animi explicabo praesentium ratione debitis aut voluptatem. Reiciendis doloremque iure dicta nemo enim et.', 83237700151, 'Vitae et itaque libero rerum. Nisi illo non officia vel et. Voluptas vero veniam repudiandae quisquam qui eos vel non. Qui maxime dignissimos quia qui in temporibus quibusdam.', '2003-01-04 00:00:00', '2015-02-05 00:00:00', 'Nihil est cum aspernatur rem aut. Voluptatem hic molestiae qui similique dolores nostrum.', 1, 'Eum aspernatur velit sunt. Aspernatur et consequuntur et. Quia nulla incidunt saepe ut. Recusandae vitae adipisci quia ut. Et repellendus et porro odio. Tempora non architecto aut.', NULL, 'c:/openserver/userdata/temp\\f53ec8e4808a2e8b4de1976c100c4097.png', 'Maxime aut rerum molestiae repudiandae ea. Accusamus corrupti est rem voluptas id quisquam voluptatum. Et sint et autem porro a maiores odit.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(42, 'Iusto dolorem et quo veritatis vel. Voluptas ducimus blanditiis error non impedit.', 89672397966, 'Officiis cumque reiciendis eos voluptatem voluptatem necessitatibus possimus. Nostrum quia nisi dolores. Vel dolorem perferendis ad ullam consequatur eum et.', '2018-07-19 00:00:00', '2012-05-18 00:00:00', 'Maxime numquam quia saepe sequi consectetur tempora aut est. Omnis voluptate illum dolorem. A eligendi maiores voluptas aut.', 1, 'Voluptas distinctio tenetur debitis iste eligendi. Unde officia corporis quo consequatur et dolore et. Molestias voluptas at adipisci consequatur molestiae eligendi. Sit et assumenda est quo est.', NULL, 'c:/openserver/userdata/temp\\889e4781006712cd829cd16b69127f27.png', 'Optio exercitationem sit dolorem alias. Laudantium alias recusandae quia velit. Accusantium nobis et maiores rerum molestiae rem atque.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(43, 'Voluptatem voluptatem illo explicabo facere ducimus est. Nihil quidem ipsa officia incidunt sunt asperiores sit. Culpa itaque ut voluptate mollitia modi quod dolorem qui.', 80749393575, 'Maxime tempore sit dolor corporis fugiat. Reprehenderit dicta quas illo error suscipit. Libero enim repudiandae expedita ratione. Quis nostrum temporibus beatae ut.', '1998-09-04 00:00:00', '2014-09-29 00:00:00', 'Vel corporis consectetur sit et ea. Facere vel quidem est neque ipsam voluptatem nemo. Occaecati dolor nam eveniet aut. Maiores aut fugiat nostrum ipsum expedita nemo.', 2, 'Consequatur maiores libero sit quo officiis fuga rem. Minima nemo delectus beatae ducimus eum saepe error. Nihil ut sit molestiae qui rerum nobis. Vel laboriosam qui est repellendus consequuntur.', NULL, 'c:/openserver/userdata/temp\\31d0a03ea3fbbf792c81e92d129d14fb.png', 'Nulla est aut aut. Sit ex culpa aut fuga optio. Vitae ut quia omnis veniam enim eligendi veritatis. Adipisci aliquid laboriosam optio facilis.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(44, 'Quia maiores facilis beatae officiis. Et totam magnam praesentium itaque exercitationem deleniti sed. Excepturi voluptas magnam dolor optio in illum. Et suscipit odit quis debitis nisi laboriosam.', 83075005285, 'Aliquam error consequatur dolore laboriosam quia recusandae. Repellendus eaque enim beatae. Qui itaque sequi repellat cupiditate. Dolorum velit incidunt repellendus laudantium nam.', '1970-01-20 00:00:00', '1972-02-16 00:00:00', 'Quaerat nulla corporis tempora. Aut culpa similique minima quia. Eum quam qui ab quis. Molestiae laboriosam nesciunt sit vero ipsum sunt voluptatibus.', 2, 'Quo voluptas alias et quia. Cum voluptates dolorum sint doloribus qui. Molestias consequatur perferendis quam occaecati iure eos. Doloribus doloremque sit consectetur et hic quia vel maxime.', NULL, 'c:/openserver/userdata/temp\\0f6f5afb9d49eedd09417a2a1637fa49.png', 'Maxime aspernatur repellat quia corrupti est hic. Velit omnis excepturi quia aut qui. Natus ipsum voluptatem laboriosam ipsum quaerat. Odit eos facilis nesciunt repellendus.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(45, 'Consequatur harum placeat aut consectetur molestiae aut qui quia. Quia perferendis qui et hic. Facere est est quia officiis doloremque. Odit ducimus omnis commodi rerum omnis aut iusto.', 89493786688, 'Minima sit aut enim et esse. Maxime minima qui quis explicabo et.', '2011-09-02 00:00:00', '1979-07-31 00:00:00', 'Ut placeat dolores quia accusamus dolor nemo. Aut ducimus quisquam et iure. Tempora eligendi et ipsum est.', 2, 'Rerum cumque ipsam a doloribus modi laboriosam. Aut id repellendus praesentium minus natus autem sit quas. Odit soluta mollitia qui deserunt harum. Cum delectus quia consectetur et et earum cum.', NULL, 'c:/openserver/userdata/temp\\acfcbbd49d640fb824e81bf1202f4c04.png', 'Tempora illo sed autem consequatur. Molestiae ut numquam tempora voluptatem nobis sed dolor. Asperiores suscipit omnis et sed hic labore ea.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(46, 'Aut et iusto dolorum dicta rerum. Distinctio aut iusto consectetur. Ea temporibus quaerat explicabo inventore repellat. Qui adipisci officia qui commodi minus.', 83901894952, 'Iure modi suscipit occaecati voluptatem rerum. Dolorem corrupti unde sequi ea qui reprehenderit.', '2003-05-02 00:00:00', '1988-03-17 00:00:00', 'Possimus qui assumenda vel quam voluptatibus qui. Ab doloremque odio voluptatem quis odio. Ratione ut dolores a impedit odit. Modi pariatur sequi vero.', 2, 'Rerum accusantium ea facere ullam dolorem temporibus ut. Numquam vitae sed sed excepturi commodi. Ab fugiat ut voluptatem quasi magnam officiis autem. Incidunt neque voluptates vel nulla molestias.', NULL, 'c:/openserver/userdata/temp\\382844e864030c8d3893cbdce682ae21.png', 'Voluptatem vel facere commodi nisi in. Et facilis incidunt dicta porro. Quo est non dolorem molestiae incidunt reiciendis.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(47, 'Nam ipsum itaque quia non unde eaque nam est. Similique amet voluptatem fugiat in. Aut vero asperiores est voluptate voluptatibus dolores minima hic.', 86219886832, 'Saepe aut rerum non dolorum cumque qui est minima. Tenetur tempore alias est voluptatem officia et. Error delectus et quis magni dolorem. Aut ut delectus doloremque id.', '2009-04-20 00:00:00', '1975-07-27 00:00:00', 'Consequatur impedit qui blanditiis et. Et itaque quasi nesciunt explicabo delectus ut cupiditate. Sit aut non enim molestias esse.', 2, 'Eaque est mollitia vero. Quia sequi et corporis itaque quos. Eius perspiciatis cumque molestiae aut quidem fugiat qui et.', NULL, 'c:/openserver/userdata/temp\\04dad3a2101eb5575f707658fdc0c9f7.png', 'Quo officiis earum consequatur ad fuga sapiente. Aut exercitationem id cumque totam eaque odio dolor. Sunt quo aliquam est.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(48, 'Aliquid numquam et aut quas. Ducimus architecto commodi doloribus iusto ad. Dolore minus eligendi explicabo vel et.', 80619477370, 'Placeat est ex occaecati ut. Nihil sit consequatur hic distinctio. Consectetur eos aut deserunt doloremque expedita possimus non.', '2003-09-03 00:00:00', '1971-08-28 00:00:00', 'Quisquam non enim harum est. Velit expedita exercitationem quae reiciendis rem. Assumenda a officia in consequatur veniam neque labore odio. Ut mollitia harum recusandae neque et quaerat accusamus.', 1, 'Iste suscipit sint eaque non voluptates neque. Deserunt modi libero aliquid dignissimos adipisci ipsa. Voluptas quas ut quo unde sed ut.', NULL, 'c:/openserver/userdata/temp\\38cd3d76968d65bfa2906ea6617714ce.png', 'Porro dolor quis et sed dolor. Commodi amet beatae mollitia qui fuga ut dolorum qui. Laborum deserunt natus quasi.', 1, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(49, 'Voluptate dicta sint temporibus voluptatem delectus libero. Ipsum maiores perspiciatis omnis molestiae enim corporis voluptatem. Repellendus quidem quod nihil.', 89785828667, 'Perspiciatis et quia nobis dolor exercitationem. Dolores et qui aut placeat pariatur itaque voluptates. Eaque itaque dolorum odit.', '1988-12-10 00:00:00', '1988-12-10 00:00:00', 'Laudantium repellendus dolore ut officia. Officiis eos voluptatum ex soluta. Voluptatem quibusdam pariatur quos expedita. Ea voluptatum cupiditate minima.', 1, 'Sint ea molestias aut nemo. Sunt deleniti vel omnis alias dolor. Debitis non blanditiis animi sunt deleniti id. Voluptas non vel modi odit repellat illo odit sed. Aliquid placeat autem qui hic.', NULL, 'c:/openserver/userdata/temp\\67d8e42070f85886d69070df4845903e.png', 'Eveniet hic quas ea et aut nam perferendis omnis. Consequuntur eum perspiciatis unde inventore tempora iure et.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(50, 'Nam voluptates magni adipisci omnis non. Velit eius distinctio deserunt nemo nulla ratione. Officia accusamus non libero rem quia ea.', 87436249581, 'Recusandae quo et minima tempore culpa perferendis optio maiores. Earum magni omnis aliquam. Et vero est in porro dignissimos. Quo a dignissimos dolores ipsa.', '2012-09-02 00:00:00', '2002-08-17 00:00:00', 'Labore quis consequuntur laboriosam id veniam dolor porro. Non et voluptatem fugiat corporis. Assumenda eum voluptas commodi aspernatur exercitationem sed repellendus.', 1, 'Veniam impedit ut quam debitis incidunt et eaque. Laborum ducimus vero voluptatem cumque incidunt. Occaecati qui est eligendi explicabo unde. Veritatis ut ut sequi qui repellendus vitae.', NULL, 'c:/openserver/userdata/temp\\ceee1a79252137ea90514dea9bc19fa0.png', 'Fugit necessitatibus nisi laboriosam dolores dolorem sit qui. Unde autem sint ratione tenetur rerum. Qui optio occaecati aut commodi.', 2, '2022-03-13 23:13:52', '2022-03-13 23:13:52', NULL),
(57, 'Андриевски Никита М', 75475475475, 'fghfgfghgfhfgh fghfghfgh fghfg', '1996-04-23 00:00:00', '2015-02-25 12:33:00', 'fgfhfgh', 1, 'fghgfhgh', 'gfhjghj', '2022-04-05_05_51_21.plug.png', 'ghjghj', 0, '2022-04-05 00:51:21', '2022-04-05 00:51:21', '2022-04-05 00:51:21'),
(58, 'Андриевски Никита М', 75475475475, 'fghfgfghgfhfgh fghfghfgh fghfg', '1996-04-23 00:00:00', '2015-02-25 12:33:00', 'fgfhfgh', 1, 'fghgfhgh', 'gfhjghj', '2022-04-05_05_51_27.plug.png', 'ghjghj', 0, '2022-04-05 00:51:27', '2022-04-05 00:51:27', '2022-04-05 00:51:27'),
(59, 'Андриевски Никита М', 75475475475, 'fghfgfghgfhfgh fghfghfgh fghfg', '1996-04-23 00:00:00', '2015-02-25 12:33:00', 'fgfhfgh', 1, 'fghgfhgh', 'gfhjghj', '2022-04-05_05_52_03.plug.png', 'ghjghj', 0, '2022-04-05 00:52:03', '2022-04-05 00:52:03', '2022-04-05 00:52:03'),
(60, 'ghjghj', 75475475475, 'ghjhjhjkhj', '1969-05-04 00:00:00', '1950-05-31 05:56:00', 'jhkjhkjhk', 1, 'ghj', 'kjhk', '2022-04-05_05_56_48.tumbanil.png', 'jhkjhk', 0, '2022-04-05 00:56:48', '2022-04-05 00:56:48', '2022-04-05 00:56:48'),
(61, 'ghjghjgh', 74346436456, 'hjhkjhkjh', '4555-03-04 00:00:00', '3477-05-31 06:56:00', 'gjhgjkjhk', 1, 'hjjhkjh', 'kjhkjhk', '2022-04-05_05_58_54.tumbanil.png', 'jhkjhkjhkjhk', 0, '2022-04-05 00:58:55', '2022-04-05 00:58:55', '2022-04-05 00:58:55'),
(62, 'eret', 72352352355, 'fghtf', '1233-05-04 00:00:00', '2111-04-12 13:03:00', 'dfhrtfh', 1, 'fghtf', 'hfgert', '2022-05-05_12_13_52.123.jpg', '213sdf', 0, '2022-05-05 07:13:52', '2022-05-05 07:13:52', '2022-05-05 07:13:52');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `vk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walk_auto` tinyint DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `position` tinyint DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `surname`, `patronymic`, `phone`, `email`, `email_verified_at`, `vk`, `city`, `walk_auto`, `birthday`, `password`, `status`, `position`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'contact1.png', 'Иван', 'Ивановыч', 'Иванович', 80229885899, 'freddy.runte@bashirian.com', NULL, 'http://www.halvorson.info/vel-facilis-quas-ut-quo-deleniti', 'North Emory', 2, '1974-02-06 19:00:00', '$2y$10$pxQ9IgMURXjpK9z7dc1z5O0B6RbC.2h0m8eYmHp9vGEuSSAKxJcje', 1, 1, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(2, 'contact2.png', 'Иван', 'Иванов', 'Иванович', 81987546844, 'elody59@yahoo.com', NULL, 'https://sporer.com/aliquam-iusto-in-atque-magni-qui-animi-eos.html', 'South Bridget', 2, '1970-03-06 19:00:00', 'JvOcUE!2*Q(A(F_<v', 1, 1, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(3, 'contact3.png', 'Марина', 'Иванова', 'Ивановна', 86029257189, 'althea26@hessel.org', NULL, 'https://www.johnston.org/eveniet-aut-tempore-nam-qui-id-dolorum-quo', 'Earlenechester', 2, '1994-05-01 19:00:00', 'Y<>$%vJ7cS.', 1, 1, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(4, NULL, 'In maiores doloribus consectetur cum quam voluptatum iste. Rerum a laboriosam delectus natus ut beatae explicabo et. Et qui tempore harum voluptatem amet officia vero qui.', 'Cupiditate debitis eligendi sequi aut. Rerum nobis dignissimos in iure hic. Laboriosam natus quis aut et. Et eos dignissimos dolore in itaque eius.', NULL, 88015490651, 'wiza.alec@roberts.net', NULL, 'http://www.swaniawski.com/modi-ratione-ut-optio-dolore-delectus-reiciendis-id', 'Gulgowskifort', 1, '2001-04-04 19:00:00', '\'{*u6zwIF)', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(5, NULL, 'Deleniti autem omnis impedit consequatur et numquam. Qui vitae eius atque velit non velit eum commodi. Odit sequi occaecati reprehenderit non quae deserunt autem.', 'Animi eveniet recusandae voluptatem. Temporibus nulla blanditiis dolore aperiam ratione. Similique fuga qui ipsam commodi id.', NULL, 80640142062, 'legros.isaac@olson.biz', NULL, 'https://flatley.com/quisquam-omnis-dolores-nisi-autem-dicta-ea.html', 'Lake Raven', 2, '2018-06-18 19:00:00', 'K5DAph', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(6, NULL, 'Nihil sit debitis et deserunt. Soluta impedit quo vero voluptas adipisci iure doloribus. Mollitia quia veniam voluptas ipsam perspiciatis porro facere. Neque non molestiae ad asperiores ut sunt.', 'Totam velit laboriosam illum veritatis fugit. Rerum numquam sit minima dolores. Placeat iste voluptate et dolorem non.', NULL, 85500216836, 'shaylee05@gmail.com', NULL, 'http://www.hermann.net/nulla-voluptatibus-ad-temporibus-et-eos.html', 'South Beauview', 1, '2015-10-28 19:00:00', 'xkIkH:_E<U', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(7, NULL, 'Tempora inventore veritatis quasi eos praesentium qui praesentium. Fugit accusamus explicabo commodi fuga. Ut libero doloribus et ipsum aliquam esse eius corporis. Aut expedita doloremque numquam.', 'Autem minus nam esse nemo consequuntur. Sunt nam rerum nihil architecto qui molestiae ex. Modi quae quod enim. Voluptatem voluptas tenetur magnam fugiat.', NULL, 81416760736, 'ulangosh@gmail.com', NULL, 'http://kub.com/qui-soluta-sed-nihil', 'West Cesarhaven', 2, '1985-05-29 19:00:00', '(rQEbCBF7bt{v-lKz_v', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(8, NULL, 'Quia dolores officia incidunt itaque delectus voluptatem architecto. Fugit aspernatur optio minus nihil earum natus.', 'Facere eum veniam culpa nostrum magni repudiandae voluptatem. Ab earum illum rem quis. Ut inventore odio dignissimos. Et qui quidem debitis quis delectus sit blanditiis saepe.', NULL, 89384193917, 'zboncak.kathlyn@hotmail.com', NULL, 'http://www.mcglynn.com/iure-earum-praesentium-earum-necessitatibus-minima-placeat', 'North Lewstad', 2, '2009-11-14 19:00:00', 'T<aw?_kl_fY', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(9, NULL, 'Qui fugiat iste natus non itaque hic. Sed vel voluptas provident quis ex est. Impedit inventore quos tempora eos. Quia delectus maxime ea eius est itaque. Et fugiat illum voluptatem culpa assumenda.', 'Ut dolor rem et veritatis deserunt ut officia. Blanditiis blanditiis sed voluptatem voluptatem est sint. Aperiam dolor non quisquam harum.', NULL, 87391204713, 'phauck@hills.net', NULL, 'http://balistreri.com/', 'East Valentinaside', 2, '2017-05-11 19:00:00', ')3$s!tE\"hGJT/=bh|7Q', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(10, NULL, 'Nihil et asperiores aliquid inventore eos iusto molestiae. Ipsam ut ea praesentium aperiam at eveniet. Et minima et exercitationem sapiente. Reiciendis quos placeat dolorem sed quasi qui.', 'Vel unde nam repellendus minima. Est voluptates quo nostrum officiis. Quasi sequi veritatis mollitia accusantium est quidem. Provident quisquam asperiores illo blanditiis quia.', NULL, 80021881849, 'beer.fabiola@gmail.com', NULL, 'https://www.purdy.biz/pariatur-vel-molestias-temporibus-iste-deleniti', 'New Rosamouth', 1, '2010-10-31 19:00:00', ',uUeqvh)K^JzS>!', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(11, NULL, 'Numquam ea blanditiis quaerat rem sit. Rerum fuga totam est dicta.', 'Temporibus rerum sed praesentium. Temporibus ratione ut et ut laudantium. Eveniet nihil asperiores est tempore hic.', NULL, 80589887987, 'skessler@yahoo.com', NULL, 'http://www.okon.com/non-odio-asperiores-deserunt', 'East Chynaberg', 2, '2016-02-10 19:00:00', 't17$nCt', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(12, NULL, 'Incidunt ut accusamus eos voluptatem a et. Inventore explicabo quia reprehenderit possimus fugit esse. Ex consequatur adipisci dolores aut unde quis quaerat.', 'Odit quidem quae assumenda numquam vero mollitia nihil. Vitae maxime eligendi asperiores officia nulla sit. Soluta dolores voluptas corporis praesentium praesentium dolorem ea aut.', NULL, 81327317935, 'sporer.lexi@yahoo.com', NULL, 'https://prosacco.biz/incidunt-velit-facilis-sapiente-voluptas.html', 'South Dawsonmouth', 1, '2013-08-06 19:00:00', '8}3RS{0likz]bvx', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(13, NULL, 'Asperiores omnis dicta sed amet dolores. Qui est consequatur voluptas repellendus. Et veniam tempora dolorum ut magnam asperiores nam sit.', 'Provident sint velit minima qui nisi unde sint dolorem. Ipsam quia perferendis et quis reiciendis perspiciatis. Id natus libero ipsam odit rerum soluta nam qui.', NULL, 88692075390, 'rasheed.torp@hotmail.com', NULL, 'http://reichert.com/beatae-et-quia-distinctio-nisi-voluptas', 'Nellashire', 1, '1983-12-22 19:00:00', ')b1V>#BykES?i,bN:', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(14, NULL, 'Aliquam qui sunt officiis et ad voluptatem explicabo odit. Excepturi voluptatem fugiat ipsum atque error.', 'Numquam dolor inventore quod exercitationem quas. Quisquam sunt accusantium minima numquam et similique molestiae. Voluptate magni ad in numquam fugiat nam.', NULL, 89347023629, 'darby79@hotmail.com', NULL, 'http://www.hane.com/dolor-soluta-hic-magnam-quasi', 'North Aylinchester', 1, '1998-07-15 19:00:00', '<(FSjnL\"u%4xT~VU', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(15, NULL, 'Beatae qui maxime est quia. Rerum fugit doloribus ipsam suscipit earum pariatur. Et ut ut ea aut ipsam officia iusto. Nisi maiores nemo quaerat quo quia qui. Excepturi rem laborum ut quo saepe.', 'Rerum aut eum blanditiis omnis ea. Fugiat minima amet magnam qui nemo et autem. Illo voluptas fugit enim. Sed quod doloribus vero optio. Eligendi ut enim eum. Facilis aut perferendis iste libero.', NULL, 83943623058, 'arne.metz@gmail.com', NULL, 'http://www.daniel.net/dignissimos-nemo-id-dignissimos-incidunt-est-excepturi-excepturi-omnis', 'Schummton', 2, '1989-11-15 19:00:00', 'CLn$dMXP8`dt', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(16, NULL, 'Est nostrum reiciendis cupiditate quidem nihil voluptatem. Debitis temporibus officia ut hic corporis. Sed mollitia sapiente cum adipisci ipsa quo aspernatur vel.', 'Sed cupiditate ut ab eius numquam sint. Ducimus tempore occaecati et tempore error aut deserunt et. Ipsam sit vel fugit autem dolores.', NULL, 84102650126, 'fbeatty@yahoo.com', NULL, 'http://hessel.org/aut-accusamus-reprehenderit-qui-quaerat-molestias-fugiat', 'Elizabethland', 1, '1970-03-18 19:00:00', 'zahX>A7iLn_Lm*S%', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(17, NULL, 'Aut dicta repudiandae iusto sit inventore ipsa aut nesciunt. Explicabo qui quia qui aut esse. Nam accusantium quaerat amet blanditiis aut non. Officia qui quo deserunt ut.', 'Quo fugit est molestiae. Alias eum cum voluptatibus. Sit corrupti et ut adipisci et quia.', NULL, 83444816120, 'ujohnston@frami.com', NULL, 'http://fahey.org/', 'Lake Reyes', 1, '1994-06-29 19:00:00', '-~`*{Hc:%S<%Km', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(18, NULL, 'Magnam qui rem provident dolor vel repellendus consectetur. Praesentium magni qui officia sit voluptatem repellendus libero. Et similique molestiae accusamus voluptas.', 'Sunt ratione consequuntur architecto autem fugiat. Placeat quia voluptate amet alias exercitationem laborum.', NULL, 85769287720, 'schaefer.wiley@kertzmann.info', NULL, 'http://www.connelly.com/sapiente-eos-veniam-nihil-est-repellat-consequuntur', 'Lake Ashafurt', 1, '1991-02-07 19:00:00', 'u~g##+', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(19, NULL, 'Eum tenetur non facere ea praesentium sit beatae. Rerum aperiam ut et incidunt quia perferendis repellat. Itaque temporibus eos hic necessitatibus.', 'Qui ipsum praesentium dolor. Esse asperiores dolorem accusantium id. In consequuntur enim beatae. Minus nobis voluptate sed laboriosam.', NULL, 87257857271, 'tremblay.jalyn@hickle.net', NULL, 'http://ruecker.net/vel-nisi-repellat-sit-et-est-sunt-deleniti', 'Jermainechester', 2, '2005-10-29 19:00:00', 'H{;hp(9:L', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(20, NULL, 'Reiciendis rem voluptas totam enim dicta. Rem consectetur veritatis laboriosam rem tenetur laborum.', 'Culpa iste esse quod. Quia soluta maxime sit. Voluptas deleniti non ut fugit illo.', NULL, 85797135036, 'wyman.layla@gmail.com', NULL, 'http://www.hodkiewicz.com/laborum-rerum-corporis-quo-quasi-sunt-assumenda-eveniet-aut.html', 'Yundtfurt', 2, '1997-12-31 19:00:00', '::2hv|H3', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(21, NULL, 'Soluta qui quo enim magni accusamus reiciendis alias vero. Dolores voluptas qui possimus voluptatem id et. Qui rerum iure nihil ea dolorum. Perferendis placeat repellat perferendis qui laborum eaque.', 'Aut reprehenderit qui ducimus enim aliquid illum non. Ut veritatis quos quo et incidunt. Sit culpa aut eius. Esse amet placeat dolores repellendus soluta. Ea ullam libero quam.', NULL, 87733844906, 'wilfred.bahringer@gmail.com', NULL, 'https://schneider.com/vitae-in-optio-tempore-hic.html', 'South Nakiatown', 2, '1983-12-22 19:00:00', 'J{a7*1E{QU2v1F8I~', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(22, NULL, 'Asperiores maxime ipsa ut minima velit. Iste eligendi dolores quisquam rerum ducimus.', 'Reprehenderit ut saepe dicta debitis. In quam eum incidunt. Quod beatae mollitia eum repellendus. Amet quas quis aperiam rerum eum aperiam.', NULL, 82648201240, 'dave.mcclure@auer.net', NULL, 'http://www.mraz.com/', 'Rooseveltton', 1, '1980-01-20 19:00:00', 'UO1eMB))v+?Tx', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(23, NULL, 'Blanditiis maiores voluptate ut. Asperiores nulla a mollitia adipisci. Enim ut voluptatem nam deleniti minus.', 'Non aspernatur commodi quas vel. Quae pariatur illo rerum. Et sed sunt et. Unde quos et nisi dicta quo. Aut et animi minima minus. Ratione possimus quam animi delectus.', NULL, 83340712747, 'gina68@gmail.com', NULL, 'https://kuhn.com/laborum-amet-nulla-consequatur-consequuntur-sit-sint-eius.html', 'South Cedrick', 1, '1977-09-02 19:00:00', '$}0}91=aat', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(24, NULL, 'Ut accusamus modi corporis laboriosam quas nostrum. Sint id amet sint natus quibusdam.', 'Corrupti quidem et animi illum. Et aut et voluptas unde. Tenetur quasi modi omnis ea repellendus labore. Rerum cum commodi cupiditate voluptates.', NULL, 84458570072, 'hagenes.neal@gmail.com', NULL, 'http://kuhlman.com/voluptatem-eum-veniam-odio-corrupti-aut', 'Fishermouth', 1, '1996-04-15 19:00:00', '>7HC\"lppC', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(25, NULL, 'Aut dignissimos consequatur modi totam molestiae fugit ut. Ex eos laudantium dolores aut officiis minus.', 'Aut id sunt est velit molestiae. Odit repellat commodi occaecati dignissimos voluptatibus est. Placeat quibusdam asperiores corrupti corrupti magnam consequuntur voluptatum. Dolores ut enim non odit.', NULL, 81681319900, 'rippin.antonia@yahoo.com', NULL, 'https://trantow.biz/libero-in-cumque-delectus-debitis-magni-voluptatem-atque-aliquam.html', 'Herthamouth', 2, '2014-01-24 19:00:00', 'uEJn;^tO[Y\':4p$', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(26, NULL, 'Debitis aut magni consequatur asperiores est. Sunt et blanditiis unde qui laborum dolorem autem. Fuga sed expedita cum quos voluptatem.', 'Omnis fugit excepturi non autem et. Non odit molestiae placeat dolor delectus. Blanditiis est voluptatum rerum debitis ad aut. Ullam ut omnis error asperiores et ea quidem.', NULL, 82757886535, 'bernita57@yahoo.com', NULL, 'http://www.morar.com/', 'Princessfort', 1, '1981-09-19 19:00:00', 'jvm?8|5d0~adv$wN(T', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(27, NULL, 'Labore harum qui nemo voluptatem ut voluptas consequatur. Ut quod perspiciatis occaecati beatae sequi qui. Ad debitis voluptatem odit et unde nesciunt voluptatum.', 'Voluptatem ex odit voluptatem in. Laudantium aut hic tenetur sint distinctio voluptas. At et impedit unde quis voluptatibus. Ipsa et neque asperiores corrupti quam est.', NULL, 88853872208, 'egislason@hoppe.org', NULL, 'http://www.predovic.biz/', 'Port Jakob', 2, '1973-02-01 19:00:00', 'fsn^h$G^t@|l0', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(28, NULL, 'Sint aut autem sunt. Molestias aut sit nulla qui qui officia. Minima ipsam voluptate ut molestiae. Praesentium quibusdam incidunt autem animi hic eos.', 'Debitis repudiandae tenetur enim earum at. Repudiandae dicta excepturi quod ex similique occaecati. Sunt laborum natus qui eaque inventore numquam et.', NULL, 80831730434, 'brando35@yahoo.com', NULL, 'http://www.lowe.info/est-nisi-vel-est-voluptas-eum-aut-pariatur', 'West Imelda', 1, '1977-02-02 19:00:00', 'dDQD;gTZZ8FTc7\"|(%', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(29, NULL, 'Omnis placeat nisi ipsum nobis. Quo cum et quibusdam quod a beatae. Ut excepturi aut adipisci aperiam ullam. Sunt ex optio architecto.', 'Et dolore omnis voluptatem non minus. Ea quae nostrum sed et esse sint. Cum a mollitia neque qui atque atque.', NULL, 85239522914, 'abraham.veum@gmail.com', NULL, 'http://kirlin.com/', 'New Elwin', 2, '2012-03-12 19:00:00', 'V<71Ws>.>Q', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(30, NULL, 'Perferendis voluptatem earum asperiores. Sint suscipit consequatur officia quidem facilis. Accusamus eos non impedit. Consectetur cumque ipsum sapiente aliquam maiores amet.', 'Dolorum eos aspernatur quam nemo. Porro eum libero fugiat sit. Nulla qui odit voluptatem ab a sed provident perferendis. Qui et voluptatem sit nisi.', NULL, 87737128211, 'moriah.koelpin@green.com', NULL, 'http://mann.net/velit-dignissimos-qui-nemo', 'Godfreyview', 1, '1973-03-16 19:00:00', '/F*.OWm?', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(31, NULL, 'Quos et temporibus quas velit sequi nam expedita. Et magnam necessitatibus nesciunt et veritatis fugiat. Fuga architecto id eum nesciunt aliquid.', 'Perferendis et in et dolores et. Commodi sequi dolore quae eos. Aut fugit delectus voluptate maxime non. Autem corporis nesciunt voluptatem similique. Eveniet ut beatae exercitationem in excepturi.', NULL, 83710765372, 'xstiedemann@kautzer.info', NULL, 'http://mckenzie.org/autem-est-velit-ducimus.html', 'New Bernadetteport', 2, '1982-01-04 19:00:00', 'Hf%9f9i', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(32, NULL, 'Quidem qui neque velit totam praesentium aut non. Laudantium alias dolorum aperiam sint adipisci.', 'Repellat sit autem molestias aliquid voluptas maxime. Nam dolore a id blanditiis.', NULL, 85452680970, 'lborer@hotmail.com', NULL, 'https://bednar.com/natus-vel-qui-quisquam-autem-dolorem-non-fuga-non.html', 'Quitzonberg', 1, '1978-11-13 19:00:00', 'Ad&)>\'', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(33, NULL, 'Alias libero voluptas quas dolore. Esse nobis omnis itaque provident asperiores recusandae debitis placeat. Dolorum deserunt magni debitis adipisci illo earum ut.', 'Aspernatur dicta quo sunt voluptas fuga dolor. Explicabo ea aspernatur dolor quo non. Ullam temporibus explicabo quasi laboriosam et ex hic rem. Maiores est ea enim autem eaque non nesciunt.', NULL, 85917121783, 'graham09@gmail.com', NULL, 'http://reynolds.com/numquam-vero-velit-omnis-labore-explicabo-odio-eveniet.html', 'Alexanneville', 1, '2003-12-30 19:00:00', 'yt`<x.+;@Z71C', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(34, NULL, 'Corrupti alias explicabo facilis magni aspernatur praesentium. Suscipit sunt voluptates amet numquam et. Tempore aut error esse officia. Illo repellat deserunt ratione eveniet est voluptatem ullam.', 'Aut dolores molestias modi reiciendis. Ullam ipsum sunt quo saepe qui. Quia voluptas non suscipit possimus numquam aut. Occaecati architecto distinctio omnis veritatis.', NULL, 83097495295, 'breanne30@bode.org', NULL, 'https://runte.com/numquam-omnis-quam-ipsa.html', 'Heaneyburgh', 1, '1996-10-02 19:00:00', 'Axq,6+G4n:0av}/tmD', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(35, NULL, 'Voluptatibus et unde expedita accusantium. Dolore est mollitia rem sint. Quibusdam dolorem ducimus amet et tenetur aut et.', 'Consequuntur iure neque placeat praesentium minima dignissimos. Nesciunt atque sapiente corrupti non nisi neque. Quia eveniet possimus delectus.', NULL, 81169755954, 'etremblay@hotmail.com', NULL, 'http://www.koch.com/quia-iste-provident-dolor-quia-nam-doloremque-nostrum.html', 'Baronport', 1, '2016-12-30 19:00:00', '(-sC[D|,H', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(36, NULL, 'Qui voluptatum voluptatem mollitia qui labore nihil. Et nam quas deserunt similique dolore. Unde et necessitatibus quia molestiae fugiat. Suscipit assumenda id aut aut numquam.', 'Libero aut eum sint eos possimus. Qui reprehenderit quia excepturi. Quia quo aliquid velit non qui.', NULL, 82197650363, 'arnulfo.cruickshank@bode.com', NULL, 'https://rice.org/voluptas-tempora-aut-omnis-quos-quod.html', 'East Peyton', 1, '1971-08-05 19:00:00', 'NdQ.A{{^[!~6!|C5', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(37, NULL, 'Ipsum est reiciendis inventore magnam quia corporis natus. Commodi rerum voluptas ducimus aspernatur quisquam. Molestiae quos accusantium cumque quia pariatur fuga.', 'Est aut quibusdam officia dolorum. Voluptatum veniam ipsum tempore nulla quis quidem. Et inventore eos minus consequatur harum fugiat.', NULL, 86066755899, 'kiehn.blake@gerlach.com', NULL, 'https://lockman.org/molestias-consequatur-aut-quaerat-qui-rem-mollitia.html', 'East Dakota', 1, '1993-12-18 19:00:00', 'uAf!_t|93}YocRj', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(38, NULL, 'Omnis quia sint vitae quis quis et explicabo. In et corporis excepturi. A voluptas ut eveniet velit.', 'Cupiditate eveniet ab architecto ex natus ut aspernatur. Sit et nihil dolores reprehenderit. Adipisci nesciunt rerum tenetur. Tempora veniam saepe deleniti ut repellat.', NULL, 85602568060, 'ubernhard@gmail.com', NULL, 'http://torp.com/voluptatem-amet-non-optio-assumenda', 'Denesikfort', 2, '1970-12-02 19:00:00', '+97Nrm;s3)RGODB', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(39, NULL, 'Dolores accusamus dicta et in ipsum cum. Alias ut quos quos beatae quia quod sequi sunt. Et nobis nobis enim aut aperiam velit temporibus. Sed explicabo quo et consequatur.', 'Aut iure consequuntur eveniet omnis aut et quis. Et aut veritatis ut in iusto. At rem et ad sequi.', NULL, 86452053915, 'schaden.edison@gmail.com', NULL, 'http://rosenbaum.net/at-qui-numquam-commodi-minus-sit', 'Ritaland', 2, '1999-06-02 19:00:00', 'Av!BjmkZUP`U\\K!)1#|', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(40, NULL, 'Vel consequuntur nihil qui ut. Corporis quas ea deleniti. Blanditiis aliquid voluptatem omnis dolorem nesciunt. Asperiores id dolorem molestias nulla fugit aut beatae.', 'Magni et occaecati nihil provident magnam. Quaerat recusandae ab pariatur aut ut temporibus. Esse fugiat sit culpa consequatur animi ut et.', NULL, 82593685849, 'yhegmann@gmail.com', NULL, 'http://www.yost.com/', 'Markville', 2, '1989-12-31 19:00:00', 'tPr|k+NXh]`:7BOT', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(41, NULL, 'Et ipsum est corporis ipsam sed vel nihil. Ut architecto eos totam commodi molestias odio qui ut. Labore eos velit beatae omnis. Dolor et sint numquam rerum nam magnam in.', 'Qui asperiores vitae assumenda eos. Fuga et optio ut laborum nulla similique debitis. Sed quia sapiente possimus velit hic. Omnis et dolorem aut ratione.', NULL, 84518941302, 'gblanda@nolan.biz', NULL, 'http://www.pfeffer.com/', 'East Garricktown', 2, '2018-09-15 19:00:00', '.]{OoAU@z+', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(42, NULL, 'Beatae est id fugit. Facilis eos praesentium molestiae velit id voluptatem. Omnis est ut amet cumque ut nisi et. Et officiis enim quo quia.', 'Voluptatem consequatur molestiae quas quia. Voluptate autem reiciendis error magnam qui et. Nulla quis magnam est ipsam mollitia repellat.', NULL, 83502829411, 'doyle.jonathon@hotmail.com', NULL, 'http://johnson.com/eum-quae-adipisci-ut-vel-et', 'Ottilieshire', 2, '1982-02-26 19:00:00', '`0w8!PuV*jDV(-l~', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(43, NULL, 'Quos explicabo deleniti ut debitis. Sapiente repellat ipsum vel quisquam error. Aut et quia quidem rem.', 'Maiores nihil at nihil enim. Rerum quidem vel corrupti. Nam ut dolorum numquam. Dicta itaque vel sapiente consequatur.', NULL, 84383779353, 'meaghan.johnson@wyman.biz', NULL, 'http://heathcote.com/', 'New Daphnee', 2, '1996-01-18 19:00:00', ':BUT8QaE6(%/:ljKY3^', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(44, NULL, 'Quis explicabo similique quis magnam. Doloremque esse eveniet dolore nostrum. Facere eos deserunt adipisci.', 'Enim aliquam quibusdam ratione et commodi ut ut et. Autem ipsa mollitia qui non eligendi quam. Eos aut tenetur non inventore hic qui. Minus alias earum atque ratione eum.', NULL, 82944030555, 'jed.green@hotmail.com', NULL, 'http://www.champlin.com/ullam-provident-blanditiis-quia-qui-optio.html', 'Avisville', 2, '2001-10-25 19:00:00', '{\'dFz5[G6jCHhpI', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(45, NULL, 'In porro qui est aliquid. Maxime aliquam et quia ea minima optio asperiores doloremque. Similique et et quo quam voluptate. Voluptatem itaque in odio dicta ea labore.', 'Voluptas vero illum aperiam mollitia aut. Aut nulla magni porro. Qui reprehenderit ut eos velit. Enim ipsum ratione voluptates autem.', NULL, 82704092509, 'axel.west@gmail.com', NULL, 'http://www.erdman.info/earum-sapiente-expedita-reprehenderit-et-sunt-repellendus-iste', 'East Unique', 2, '2022-02-02 19:00:00', 'o&GMh*cx{7i;645Pr', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(46, NULL, 'Ut iste molestiae rerum et doloribus assumenda. Ut ducimus animi fugiat repudiandae. Quod reprehenderit aut dolorem excepturi rerum.', 'Qui dolorem debitis quo error at omnis. Enim eos nihil distinctio fugit voluptatibus molestias placeat sit. Et nostrum veniam eum voluptates soluta voluptas.', NULL, 82199891711, 'hammes.lorenz@hotmail.com', NULL, 'http://www.paucek.info/cum-aliquam-quidem-est-neque-minus', 'North Marianne', 1, '2016-11-01 19:00:00', '9X<BLD?', 2, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(47, NULL, 'Consequuntur laboriosam dolor illo dolorum id. Labore voluptas aut dolor est. Laboriosam quisquam quibusdam ullam ad qui impedit. Similique non aut quos et eos.', 'Cum dolorem enim qui qui culpa. Sunt odit impedit eius. Sed sapiente nostrum odit et.', NULL, 81099384438, 'edd28@yahoo.com', NULL, 'http://kulas.com/accusantium-ab-architecto-corrupti-pariatur-ut-nihil-aut.html', 'Port Edachester', 2, '1985-03-07 19:00:00', 'kG,I6*\'M', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(48, NULL, 'Ut velit harum dolorem voluptatem sequi. Quisquam minus dicta et explicabo nemo. Officiis explicabo illo doloribus ea. Et omnis vero in recusandae quia.', 'Odio corporis numquam repellat illo. Quod nihil dignissimos harum laborum suscipit aut qui. Nihil architecto iure quo quidem hic. Non tempora facilis enim voluptatum quia placeat molestiae qui.', NULL, 89099292448, 'ikeeling@gmail.com', NULL, 'http://swift.com/reiciendis-qui-consectetur-autem-suscipit.html', 'Remingtonfort', 1, '1998-07-25 19:00:00', 'bhq?UC18r/n~/', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(49, NULL, 'Deleniti sit quasi pariatur ea necessitatibus impedit. Quas illo impedit numquam dicta autem repudiandae quo.', 'Tempore sint magni consequatur eveniet aliquid magni. Non animi magni sapiente iusto molestias. Laborum voluptatem officia in temporibus omnis sit.', NULL, 80694617044, 'maureen15@hotmail.com', NULL, 'http://kerluke.info/rerum-et-provident-quaerat-illum', 'Jakubowskifurt', 1, '1983-03-11 19:00:00', ']mX:ZJ}d(~/0YSkF%:)=', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(50, NULL, 'Aut dolorum officiis itaque ex earum sit. Voluptatem officia optio dolores dolores laboriosam rerum dignissimos. Non culpa earum facilis quis in sed temporibus.', 'Quasi hic illo recusandae et perferendis. Ut repellendus eum maiores quia perferendis. Consectetur ut dolore laboriosam.', NULL, 88529877609, 'prosacco.travis@hotmail.com', NULL, 'http://leuschke.com/vero-labore-ipsa-quis', 'Lake Lillianland', 1, '1997-08-02 19:00:00', '>dxSE=gETY^', 1, NULL, NULL, '2022-03-13 23:13:34', '2022-03-13 23:13:34', NULL),
(51, NULL, 'dsgdr', 'gdfhfgh', NULL, NULL, 'fhggh@fngvnn.ru', NULL, NULL, NULL, NULL, NULL, '$2y$10$7PUORkfuaLh6.E0XBtGTZuET6rnOOgr4FkNUKBjpN1AU2utciMmlu', NULL, NULL, NULL, '2022-03-14 00:40:52', '2022-03-14 00:40:52', '2022-03-14 00:40:52'),
(52, NULL, 'dfgfc', 'gcvbvcb', NULL, NULL, 'fbnvbnghn@gnvbnvbn.ru', NULL, NULL, NULL, NULL, NULL, '$2y$10$v5JRK0VzTl5PKYcI08v8yOz9Hp.akLniLsPZ6aQn97YjYgJd5z5x.', NULL, NULL, NULL, '2022-03-14 00:48:15', '2022-03-14 00:48:15', '2022-03-14 00:48:15'),
(53, NULL, 'ghj', 'ghj', NULL, 79129024020, 'sdgdg@rambler.ru', NULL, 'http://spas/Join', 'gj', 1, '2022-03-14 19:00:00', '$2y$10$Jy1ZN9dUUZ3YZkhT8q0wt.HyYxSPq0iePr8sLWSLWXsN6AqKFFzTS', 0, NULL, NULL, '2022-03-14 01:49:08', '2022-03-14 01:49:08', '2022-03-14 01:49:08'),
(54, NULL, 'апр', 'вапва', NULL, 75465465465, 'fghfgjg@dfgdfg.ri', NULL, 'http://spas/Join', 'fghnfgjghj', 2, '2022-03-22 19:00:00', '$2y$10$X4Fa/jjl8SomI0bgHgOaEOo4ydc1QJuuyT2bP3rMl04Q/ztxMOgjO', 0, NULL, NULL, '2022-03-14 01:59:28', '2022-03-14 01:59:28', '2022-03-14 01:59:28'),
(55, NULL, 'ghj', 'gjgh', NULL, 75465475475, 'gjghj@rambler.ru', NULL, 'http://spas/Join', 'fhfgjghj', 2, '2022-03-28 19:00:00', '$2y$10$vSCtnpSmMBEiimORofMeTu2vikHi5U.sJMRUKByAcI61l0LC0Fs1K', 0, NULL, NULL, '2022-03-14 02:03:15', '2022-03-14 02:03:15', '2022-03-14 02:03:15'),
(56, NULL, 'gghj', 'gjghj', NULL, 75465475475, 'hgjk@dfhfgfgjg', NULL, 'http://spas/Join', 'jhkhjk', 2, '2022-03-18 19:00:00', '$2y$10$/kg61o1QzqKFupjKFrze/e2ALS89z2wIjJNjbv/LIHuBz4tKYA7m.', 0, NULL, NULL, '2022-03-14 02:07:02', '2022-03-14 02:07:02', '2022-03-14 02:07:02'),
(57, NULL, 'jyjgh', 'gjgh', NULL, 75345634634, 'gdfhfgjh@agdhf.ru', NULL, 'http://spas/Join', 'dgdfgerhg', 2, '2022-03-19 19:00:00', '$2y$10$irwrfAs5poCtwIP2ldE1ietjA9XI26m9ABWM2HnirTGW2z0eJ6NXm', 0, NULL, NULL, '2022-03-14 02:16:49', '2022-03-14 02:16:49', '2022-03-14 02:16:49'),
(58, NULL, 'gjghj', 'fghfgjh', NULL, 73453453454, 'fghgj@gdhfh', NULL, 'http://spas/Join', 'gjghjghj', 2, '2022-03-16 19:00:00', '$2y$10$75lWcPmnfkpGHtP69sGerumu.NLKqR4Ug5mZ8WzYU5v0VkCRMhdT6', 0, NULL, NULL, '2022-03-14 02:24:19', '2022-03-14 02:24:19', '2022-03-14 02:24:19'),
(59, NULL, 'ghjghj', 'fgjhtfj', NULL, 75465465475, 'wtryhfgh@ddfhfgjh.ru', NULL, 'http://spas/Join', 'hgfhrthfgh', 2, '2022-03-16 19:00:00', '$2y$10$.NCn4XRTeKLKA/xH/w0LjuqGYlQ3A.udZnjxMSArhRxYaK7b/kMSm', 0, NULL, NULL, '2022-03-14 02:36:25', '2022-03-14 02:36:25', '2022-03-14 02:36:25'),
(60, NULL, 'ghjghj', 'ghjghj', NULL, 73453453453, 'ghjgyjgh@dfhfhfgh', NULL, 'http://spas/Join', 'trhfghtfhfgj', 2, '2022-03-24 19:00:00', '$2y$10$y.UJrjDdC8x3aUj0JOYiEePI/Za5vYidRPCNQPvYvefC/HH9F1OSa', 0, NULL, NULL, '2022-03-14 02:38:42', '2022-03-14 02:38:42', '2022-03-14 02:38:42'),
(61, NULL, 'hfghfgh', 'fhghfg', NULL, 75465465465, 'ghjghjjh@fhfghfgjh', NULL, 'http://spas/Join', 'fghfgjhgj', 2, '2022-03-23 19:00:00', '$2y$10$1W4H331RtfuZPG/CqnX/letLdyUETape3l6JbFtZMLExEdYR47MkK', 0, NULL, NULL, '2022-03-14 02:42:29', '2022-03-14 02:42:29', '2022-03-14 02:42:29'),
(62, NULL, 'ghjghj', 'fgjgj', NULL, 75475475475, 'jhkjhjh@ghjghjg', NULL, 'http://spas/Join', 'tyjghjkhkjhk', 1, '2022-03-18 19:00:00', '$2y$10$qhbbYWZidV5PrOn5zZeiyO8V3LCN1KkngiGGMe3B3mjXJdCiUUyaW', 0, NULL, NULL, '2022-03-14 02:42:49', '2022-03-14 02:42:49', '2022-03-14 02:42:49'),
(63, NULL, 'ghjghj', 'gfhjgj', NULL, 74364654546, 'fghfgh@fhfghfghfg', NULL, 'http://spas/Join', 'tyjghhk', 2, '2022-03-24 19:00:00', '$2y$10$Ez55W8a1XtjAwY5iZdCsFO1Putk5GtdmOwPy8sJP2QUNv3s7gqHcG', 0, NULL, NULL, '2022-03-14 23:12:30', '2022-03-14 23:12:30', '2022-03-14 23:12:30'),
(64, NULL, 'adfgrfhfhr', 'hfhf', NULL, NULL, 'anmiha46@rambler.ru', NULL, NULL, NULL, NULL, NULL, '$2y$10$ElZYpeZ5QVrM0AWfSV/aXeafhYVo3xC44vxxZHQm0G0iaWMWyPSyC', 0, NULL, 'jOkReHnTxwpszXATDNoZyecDGSErdCntHaiTHH3ea0AqZjZjWSc318psKRaS', '2022-03-17 01:11:18', '2022-05-06 00:49:48', NULL),
(65, NULL, 'dfgdfg', 'sdgdfdfg', NULL, 76546547547, 'spas@ww.net.ru', NULL, 'http://spas/Join', 'dgdfgdfg', 1, '1996-04-21 19:00:00', '$2y$10$rqvPlaqKiXBTuFdYbr1Yd.ciQdAMRGUfhGfkkViGmWAUMjMtQGQb6', 0, NULL, NULL, '2022-04-05 00:44:48', '2022-04-05 00:44:48', '2022-04-05 00:44:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Индексы таблицы `category_needs`
--
ALTER TABLE `category_needs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `needs`
--
ALTER TABLE `needs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `needs_category_need_id_foreign` (`category_need_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `people_in_searches`
--
ALTER TABLE `people_in_searches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category_needs`
--
ALTER TABLE `category_needs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `needs`
--
ALTER TABLE `needs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `people_in_searches`
--
ALTER TABLE `people_in_searches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `needs`
--
ALTER TABLE `needs`
  ADD CONSTRAINT `needs_category_need_id_foreign` FOREIGN KEY (`category_need_id`) REFERENCES `category_needs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
