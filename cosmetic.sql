-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2019 г., 20:18
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cosmetic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `titlecat` varchar(255) NOT NULL,
  `aliascat` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `titlecat`, `aliascat`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Каталог', 'katalog', 0, 'Каталог', 'Каталог косметики в интернет-магазине Космо'),
(30, 'Лицо', 'lico', 1, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа', 'Средства для макияжа лица! Самые популярные мировые бренды декоративной косметики '),
(31, 'Глаза', 'glaza', 1, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Косметика для макияжа глаз! Самые популярные мировые бренды декоративной косметики'),
(32, 'Губы', 'guby', 1, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа, косметика для макияжа интернет магазин', 'Косметика для макияжа губ! Самые популярные мировые бренды декоративной косметики'),
(33, 'Брови', 'brovi', 1, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Косметика для макияжа бровей! Самые популярные мировые бренды декоративной косметики'),
(35, 'Бронзатор', 'bronzator', 30, 'Бронзаторы для лица в виде пудры, с хайлайтером, жидкие Самые популярные мировые бренды декоративной косметики', 'Косметика для макияжа бровей! Самые популярные мировые бренды декоративной косметики'),
(36, 'Консилер', 'konsiler', 30, 'консилер, concealer, глаза, маскировка, лица, купить, палетка, пользоваться, виды, интернет-магазин, divamaria', 'Лучшие консилеры concealer для лица с бесплатной доставкой по России и СНГ'),
(37, 'Корректор', 'korrektor', 30, 'корректор, скуловой, скульптурирование, палетка, цветной, макияж, divamaria, интернет-магазин, купить', 'Корректоры сухие и жидкие с бесплатной доставкой по всей России и СНГ'),
(38, 'Кушон', 'kushon', 30, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Кушон для лица! Самые популярные мировые бренды декоративной косметики '),
(40, 'Карандаши для глаз', 'karandashi-dlya-glaz', 31, 'карандаш, контур, глаз, купить, низкий, стоимость, цена, интернет, магазин', 'Карандаш для глаз. Подробное описание, цены, обзоры и отзывы в удобном каталоге.'),
(41, 'Подводка для глаз', 'podvodka-dlya-glaz', 31, 'подводка, для глаз, жидкая, гелевая, подводка-фломастер, купить, интернет-магазин', 'Подводка для глаз с доставкой по России и СНГ'),
(42, 'Бальзамы для губ', 'bal-zamy-dlya-gub', 32, 'бальзам, губа, москва, цена, натуральный, купить', 'Натуральные бальзамы для губ. Доставка по России и СНГ. Ознакомьтесь с нашим каталогом и выберите то, что подойдет именно вам'),
(43, 'Блески для губ', 'bleski-dlya-gub', 32, 'блеск, губа, цена, каталог, интернет, магазин, купить, заказать', 'Блески для губ любых оттенков с доставкой по России и СНГ'),
(44, 'Глиттер для губ', 'glitter-dlya-gub', 32, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа', 'Глиттер жидкий для макияжа губ! Самые популярные мировые бренды декоративной косметики'),
(45, 'Гель для бровей', 'gel-dlya-brovey', 33, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Гель для макияжа бровей! Самые популярные мировые бренды декоративной косметики '),
(46, 'Карандаш для бровей', 'karandash-dlya-brovey', 33, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Карандаш для моделирования бровей! Самые популярные мировые бренды декоративной косметики '),
(47, 'Тени для бровей', 'teni-dlya-brovey', 33, 'макияж декоративная косметика, магазин косметики для макияжа, набор косметики для макияжа, купить косметику для макияжа', 'Тени для макияжа бровей! Самые популярные мировые бренды декоративной косметики'),
(48, 'Тушь для ресниц', 'tush-dlya-resnic', 31, 'Тушь для ресниц', 'Тушь для ресниц');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `note`) VALUES
(20, 13, '0', '2019-04-22 14:21:03', NULL, ''),
(21, 13, '1', '2019-04-22 14:21:30', '2019-04-22 10:30:24', ''),
(22, 15, '1', '2019-04-22 14:29:04', '2019-04-22 10:30:13', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(33, 20, 26, 1, 'Грудинка свиная', 275),
(34, 20, 34, 1, 'Рулька свиная', 189),
(35, 21, 38, 1, 'Голяшка говяжья', 379),
(36, 22, 33, 3, 'Тушка куриная 1 сорт', 166),
(37, 22, 31, 1, 'Говяжий фарш', 349);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `status` varchar(1) NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `alias`, `content`, `price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(40, 35, 'Luminys Baked All Over', 'luminys-baked-all-over', '<p>Подсвечивающая пудра, созданная на основе революционной технологии \"запекания\", благодаря которой средство имеет легкую и нежную текстуру и великолепно ложится на кожу. Упаковка содержит пудру четырех оттенков одной цветовой гаммы, которые можно использовать по отдельности или смешивать. Подсвечивающую пудру можно наносить двумя способами: сухим или влажным, последний позволит добиться более выразительного результата.</p><p>СПОСОБ ПРИМЕНЕНИЯ: Используйте Luminys Baked All Over как тени для век, как румяна (смешивая все четыре или выделяя только два цвета), используйте как пудру для лица и области декольте. Все зависит от вашей фантазии.</p>', 960, '1', 'Luminys Baked All Over', 'Luminys Baked All Over', 'da4472a55d1ea1a38be403f80fd25977.jpg', '1'),
(41, 36, 'The Eraser Eye Concealer', 'the-eraser-eye-concealer', '<p>Лучший консилер под глаза, против темных кругов, отечности и морщинок!</p><p>Освежите свой взгляд и добавьте ему сияния в мгновение ока! Консилер идеально скрывает темные круги под глазами и несовершенства кожи с помощью удобного точечного аппликатора со спонжем. Формула на основе ягод годжи и галоксила ухаживает за областью вокруг глаз и преображает ее.</p><p>Удобный флакон с антимикробным аппликатором, универсальные оттенки, светоотражающий эффект. Формула обогащенная осветляющими и противоотечными компонентами, позволяет не только маскировать но и оздоравливать нежную кожу вокруг глаз.</p>', 408, '1', 'The Eraser Eye Concealer', 'The Eraser Eye Concealer', '7ee4395ad182f549d68f51a9f6ea64e8.jpg', '1'),
(42, 36, 'Camouflage Cream', 'camouflage-cream', '<p>Звезда среди консилеров! Незаменимый продукт для идеального тона вашей кожи.</p><p>Кремовый консилер Camouflage Cream благодаря своей стойкой текстуре и непревзойденным маскирующим свойствам поможет \"исчезнуть\" неровностям, пигментным пятнам, выступающим сосудам и прочим недостаткам на вашем лице.</p>', 240, '1', 'Camouflage Cream', 'Camouflage Cream', 'c399b26ff1a3138633d1ff192d332fe4.jpg', '1'),
(43, 37, 'Corrector Stick', 'corrector-stick', '<p>Corrector Stick - корректор скрывает недостатки и покраснения, сводит к минимуму раздражение кожи. Он содержит антибактериальное масло чайного дерева. Обеспечивает плавное воздействие, делая вашу кожу совершенной. Содержит питательные вещества.</p><p>Способ применения: нанести корректор на проблемные участки (темные круги вокруг глаз, уголки глаз, носогубные складки, морщины вокруг рта), затем растушевать подушечками пальцев.</p>', 710, '1', 'Corrector Stick', 'Corrector Stick', '90a1de96b37065858b3905b637798eba.jpg', '1'),
(44, 37, 'Infaillible Sculpt', 'infaillible-sculpt', '<p>Первая гибридная скульптурирующая крем-пудра Infaillible Скульптор визуально корректирует рельефа лица для мгновенного преобразования. Гелевая текстура способствует легкому нанесению без дополнительных инструментов, обеспечивая длительный и стойкий результат.</p><p>Заметное изменение любой формы лица или легкая корректировка всего за 3 шага.</p><ol><li>Нанесите светлый оттенок на выступающие части лица для придания объема.</li><li>Скройте лишний объем на желаемых участках при помощи темного оттенка</li><li>Растушуйте кончиками пальцев или кистью.</li></ol>', 955, '1', 'Infaillible Sculpt', 'Infaillible Sculpt', '3821378c76a67a4b2a1f8d07efad72c3.jpg', '1'),
(45, 40, 'Khol & Contour', 'khol-contour', '<p>Одним жестом карандаш Khol &amp; Contour проводит безупречно ровную, аккуратную линию. Сочетание мягкой текстуры и насыщенного цвета позволяет подчеркнуть выразительность взгляда. Широкая цветовая палитра от классических до изысканно модных оттенков. Корпус карандаша сделан из натурального дерева, а цвет упаковки отражает цвет грифеля.</p>', 285, '1', 'Khol & Contour', 'Khol & Contour', 'a03db7ff359239f5a59d53192ba02665.jpg', '1'),
(46, 41, 'Гель-лайнер Lasting Drama', 'gel--layner-lasting-drama', '<p>Подводка для глаз с фетровым аппликатором Vamp! Definition Liner оставляет чёткую линию необыкновенно насыщенного цвета. Мягкий фетровый кончик обеспечивает безупречное равномерное нанесение. Жидкая и лёгкая формула быстро высыхает.</p>', 570, '1', 'Гель-лайнер Lasting Drama', 'Гель-лайнер Lasting Drama', 'd812c83c49e3529fec4fbd3c3485e50c.jpg', '1'),
(47, 41, 'Vamp! Definition Liner', 'vamp-definition-liner', '<p>Подводка для глаз с фетровым аппликатором Vamp! Definition Liner оставляет чёткую линию необыкновенно</p>', 570, '1', 'Vamp! Definition Liner', 'Vamp! Definition Liner', '8954d7b45b68aa5cabb0a79cb0d861dd.jpg', '1'),
(48, 48, 'Volume Reveal', 'volume-reveal', '<p>Замечательная тушь для ресниц, производства всемирно известного французского декоративной косметики Bourjois, подарит вам потрясающий эффект и идеально подойдет для ежедневного макияжа! С помощью Volume Reveal Mascara вы с легкостью создатите профессиональный мейкап и всегда будете выглядеть просто потрясающе.&nbsp;</p><p>Тушь имеет оптимальную кремовую консистенцию, благодаря которой ложится идеально ровно, без образования комочков, не склеивая реснички и равномерно распределяясь. Тушь создает великолепный объем, о котором вы всегда мечтали, и заметно удлиняет ресницы, придавая взгляду выразительность и загадочность.</p>', 645, '1', 'Volume Reveal', 'Volume Reveal', '83262dcda9dcb8a19f8952ea6aa6632e.jpg', '1'),
(49, 48, 'Beauty\'Full Volume Dark Khôl', '-49', '<p>1-ая интенсивная тушь с эффектом очерченного ресничного контура.</p><p>Объем в 10 больше, без комочков.Интенсивно-черный, насыщенный цвет, цвет угольно-черного карандаша для глаз.Уникальная щеточка:&nbsp;Специальная форма кисточки для интенсивных графических акцентов.</p>', 480, '1', 'Beauty\'Full Volume Dark Khôl', 'Beauty\'Full Volume Dark Khôl', '0bd7a9de3d67efbf40eaa448641000dd.jpg', '0'),
(50, 42, 'Color Intuition Lip Balm', 'color-intuition-lip-balm', '<p>Ухаживающий бальзам для губ с подстраивающимися пигментами Color Intuition Lip Balm. Пигмент бальзам интуитивно адаптируется к губам. Полученный оттенок варьируется в зависимости от индивидуального рН-баланса: от мягко-розового до теплого розового цвета. Финиш - естественный блеск с оптическим эффектом объема.</p><p>Бодрящий, свежий аромат мяты.</p><p>В составе бальзама высококачественные растительные масла, которые предотвращают потерю влаги в слоях кожи. Масло из абрикосовых и персиковых косточек – увлажняет, питает губы, делает их мягкими и эластичными.</p>', 930, '1', 'Color Intuition Lip Balm', 'Color Intuition Lip Balm', 'cf030bae0ce8db0748047ddd2f2ab302.jpg', '0'),
(51, 43, 'Crystal Shine', 'crystal-shine', '<p>Непревзойденный блеск и кристальное сияние благодаря мелким перламутровым частичкам тебе подарит новый блеск для губ от Divage «Crystal Shine»!Блеск имеет 3D-эффект, твои губки более чувственные и объемные, а глянцевый блеск сделает твой образ чарующим и восхитительным.Блеск дарит стойкий и насыщенный цвет, коллекция представлена в 14 оттенках.Нелипкая текстура, а также потрясающая отдушка приятно порадуют тебя, а блеск станет \"постоянным жителем\" твоей косметички!</p>', 195, '1', 'Crystal Shine', 'Crystal Shine', '486caad3a35d72885f453940a6df8e42.jpg', '0'),
(52, 43, 'Infaillible Sexy Balm', 'infaillible-sexy-balm', '<p>L\'Oreal Paris представляет новый цветной бальзам для губ Infaillible Sexy Balm Summer 2016! Его формула питает, защищает и обеспечивает оптимальное увлажнение в течение 12 часов.</p><p>У новинки невесомая и нелипкая текстура. Палитра включает 12 оттенков с двумя видами покрытия: полупрозрачное Sheer и более плотное с насыщенным цветом Bold. Определить, к какой степени плотности относится бальзам можно, взглянув на колпачок: если он прозрачный, это означает, что присутствует эффект Sheer, а если не прозрачный, значит - Bold.</p>', 430, '1', 'Infaillible Sexy Balm', 'Infaillible Sexy Balm', 'cec2333e2fb389e90334f296eee0271c.jpg', '0'),
(53, 43, '7Oils Lip Elixir', '7oils-lip-elixir', '<p>Масло для губ от Make Up Factory предназначено для ухода за сухой кожей губ. Косметическое средство 7Oils Lip Elixir имеет твердую текстуру, но при нанесении на губы быстро впитывается, не оставляя жирных следов. Основу масла составляют масло ши, витаминный коктейль, миндальное масло. Они комплексно воздействуют на кожу губ, оказывают успокаивающее действие, активно защищают от воздействия внешних факторов.</p><p>ПРИМЕНЕНИЕ: Используйте масло по мере необходимости, нанося его на чистую кожу губ. Чтобы увеличить питательный эффект, используйте специальные основу для губ и блеск от Make Up Factory.</p>', 1050, '1', '7Oils Lip Elixir', '7Oils Lip Elixir', '9200d1fa15a70dd5c1b8e23590aae726.jpg', '0'),
(54, 45, 'Ultrastay Brow Cream', 'ultrastay-brow-cream', '<p>Цветной крем-гель в баночке Ultrastay Brow Cream специально создан для тонирования и фиксации бровей. Стойкая кремовая текстура легко распределяется и оптимально заполняет цветом пробелы бровей. Продукт быстро фиксируется и долго держится. Крем - гель сделает форму бровей идеальной и придаст им ухоженный вид.Продукт полностью свободен от парфюмерных отдушек, содержания масел и одобрен дерматологически и идеально подходит людям с чувствительной кожей.</p><p>ПРИМЕНЕНИЕ: Создайте линию по трафарету бровей под и над бровью, используя Eye Brow Lifting Stick для акцентирования формы бровей. Придайте бровям естественный вид, используя угловую кисть для макияжа век и бровей Eye Contour Brush. Наносите кистью Ultrastay Brow Cream короткими линиями, мягко растушевывая результат. Если необходима дополнительная фиксация макияжа бровей, нанесите Clear Eye Brow Gel.</p>', 1000, '1', 'Ultrastay Brow Cream', 'Ultrastay Brow Cream', '7de2fd091e04d8da8802d18936d8801d.jpg', '0'),
(55, 47, 'Brow Arcade', 'brow-arcade', '<p>Деликатные пудровые тени для бровей быстро и без усилий создадут новый образ и акцентируют лучшие черты! С ними все возможно: модные широкие брови, элегантные или аристократичные — выбирайте! Нежная текстура великолепно фиксируется в волосках бровей, придавая им нужный цвет и форму. Цвета можно индивидуально комбинировать, достигая нужной интенсивности и получения идеального подходящего именно вам цвета</p><p>ПРЕИМУЩЕСТВА: Тени BROW ARCADE можно использовать для макияжа глаз в стиле nude</p>', 310, '1', 'Brow Arcade', 'Brow Arcade', 'd3f8c16352ac4840642fb6dbc911c35f.jpg', '0'),
(56, 47, 'Eye Brow Set', 'eye-brow-set', '<p>Набор состоит из 2 оттенков пудры для бровей, пинцета и щеточки для нанесения и щеточки для растушевки и оснащен зеркалом.</p>', 310, '1', 'Eye Brow Set', 'Eye Brow Set', 'd1318c40e360dc1f82c1b7a2c9e49e4e.jpg', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(18, 2),
(18, 3),
(19, 3),
(20, 2),
(21, 2),
(22, 3),
(22, 4),
(23, 2),
(23, 4),
(28, 26),
(30, 26),
(30, 27),
(30, 28),
(30, 31),
(33, 27),
(33, 29),
(33, 30),
(33, 31),
(34, 26),
(34, 28),
(34, 30),
(34, 33),
(35, 27),
(35, 28),
(35, 30),
(35, 34),
(36, 26),
(36, 27),
(36, 30),
(36, 35),
(37, 29),
(37, 31),
(37, 35),
(37, 36),
(38, 26),
(38, 28),
(38, 29),
(38, 31),
(39, 27),
(39, 28),
(39, 34),
(39, 35),
(41, 40),
(42, 40),
(42, 41),
(43, 40),
(43, 41),
(43, 42),
(44, 40),
(44, 41),
(44, 42),
(44, 43),
(45, 41),
(45, 42),
(45, 43),
(45, 44),
(46, 41),
(46, 43),
(46, 44),
(46, 45),
(47, 41),
(47, 42),
(47, 43),
(47, 44),
(48, 41),
(48, 43),
(48, 44),
(48, 47),
(49, 40),
(49, 41),
(49, 42),
(49, 43),
(50, 46),
(50, 47),
(50, 48),
(50, 49),
(51, 41),
(51, 42),
(51, 43),
(51, 47),
(52, 42),
(52, 43),
(52, 44),
(52, 46),
(53, 41),
(53, 42),
(53, 44),
(54, 41),
(54, 43),
(54, 44),
(54, 47),
(55, 40),
(55, 41),
(55, 42),
(55, 49),
(56, 42),
(56, 43),
(56, 44),
(56, 45);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `phone`, `role`) VALUES
(3, 'admin', '$2y$10$v7DQCd.9GyO0Q99.u2af9ObRTyTAQDFSUKWxIeOKqY2yxPOSYy56m', 'ivanirkutov@yandex.ru', 'Иван', 'г.Яровое, ул.Алтайская, 23', '', 'admin'),
(13, 'turaev', '$2y$10$EoxziHEjRKwBE2NwWepzyOhGRXiIFgNf1F7.5QNWIeN/Cxrho8xpy', 'turaevandreika@yandex.ru', 'Кирилл', '352670, г. Демянск, ул. Собиновский Переулок, дом 30, квартира 78', '8 (800) 555-35-35', 'user'),
(15, 'igorkap', '$2y$10$FuBp1xJc4W8kOjfMxAbKguYCpZjb4xfS.hI9RrCdty/JMZK.pveKy', 'igor.kapytin@yandex.ru', 'Игорь', '613044, г. Сердобск, ул. Ташкентский Переулок, дом 48, квартира 2', '8 (738) 345-72-97', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`aliascat`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `hit` (`hit`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
