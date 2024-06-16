-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-mmitp3.alwaysdata.net
-- Generation Time: Jun 16, 2024 at 08:38 PM
-- Server version: 10.6.17-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmitp3_sae203`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `chapo` longtext NOT NULL,
  `contenu` longtext NOT NULL,
  `lien_image` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)',
  `lien_yt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `auteur_id`, `titre`, `chapo`, `contenu`, `lien_image`, `date_creation`, `lien_yt`) VALUES
(65, 15, 'Neymar : Le d&eacute;part tumultueux, entre passion et controverse', 'Le d&eacute;part de Neymar du Paris Saint-Germain a marqu&eacute; un tournant significatif dans l&#039;histoire du club et a d&eacute;clench&eacute; une s&eacute;rie de r&eacute;actions passionn&eacute;es parmi les fans et les observateurs du football mondial.', 'Le d&eacute;part de Neymar du Paris Saint-Germain a &eacute;t&eacute; l&#039;un des transferts les plus m&eacute;diatis&eacute;s de l&#039;histoire du football r&eacute;cent. L&#039;attaquant br&eacute;silien, dont l&#039;arriv&eacute;e au PSG avait &eacute;t&eacute; c&eacute;l&eacute;br&eacute;e comme un tournant dans l&#039;ambition du club, a quitt&eacute; Paris apr&egrave;s quatre saisons riches en moments spectaculaires et controverses.\r\n\r\nNeymar a laiss&eacute; une empreinte ind&eacute;l&eacute;bile sur le terrain, captivant le public avec ses dribbles audacieux, ses passes pr&eacute;cises et sa capacit&eacute; &agrave; marquer des buts d&eacute;cisifs. Son partenariat avec Kylian Mbapp&eacute; et d&#039;autres stars du PSG a transform&eacute; l&#039;&eacute;quipe en une force redoutable en Europe, remportant des titres nationaux et atteignant les quarts de finale de la Ligue des champions.\r\n\r\nCependant, en dehors du terrain, Neymar a &eacute;galement &eacute;t&eacute; l&#039;objet de nombreuses critiques. Les blessures fr&eacute;quentes, le comportement parfois controvers&eacute; et les rumeurs de transfert vers d&#039;autres grands clubs europ&eacute;ens ont souvent &eacute;clips&eacute; ses performances exceptionnelles. Pour certains supporters du PSG, son d&eacute;part a &eacute;t&eacute; per&ccedil;u comme une trahison, tandis que d&#039;autres ont exprim&eacute; un soulagement face &agrave; la fin d&#039;une &egrave;re marqu&eacute;e par la controverse.\r\n\r\nEn effet, le d&eacute;part de Neymar a raviv&eacute; le d&eacute;bat sur la loyaut&eacute; des joueurs dans le football moderne. Son choix de rejoindre le FC Barcelone, avec qui il avait d&eacute;j&agrave; jou&eacute; avant son transfert au PSG, a &eacute;t&eacute; accueilli avec une vari&eacute;t&eacute; d&#039;&eacute;motions, allant de la d&eacute;ception &agrave; la compr&eacute;hension.\r\n\r\nEn conclusion, le d&eacute;part de Neymar du PSG repr&eacute;sente un moment significatif dans l&#039;histoire du club et du football en g&eacute;n&eacute;ral. Alors que ses performances sur le terrain resteront incontest&eacute;es, son passage au PSG a &eacute;t&eacute; entach&eacute; par des controverses et des d&eacute;parts de l&#039;&eacute;quipe, ce qui a pu alt&eacute;rer sa r&eacute;putation', 'https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(jpeg)/origin-imgresizer.eurosport.com/2023/02/07/3544891-72244988-2560-1440.jpg', '2024-06-05 18:48:46', ''),
(66, 15, 'IMAD, l&#039;album est-il si mauvais que &ccedil;a ?', 'Depuis sa sortie le mois dernier, l&#039;album tant attendu de Theodort, intitul&eacute; IMAD, a suscit&eacute; une gamme de r&eacute;actions mitig&eacute;es et parfois v&eacute;h&eacute;mentes parmi les fans et les critiques. Ce projet, qui repr&eacute;sente un virage artistique audacieux pour le groupe, divise l&#039;opinion quant &agrave; sa qualit&eacute; et son originalit&eacute;. Retour sur cette controverse.', 'L&#039;album IMAD de Theodort est une tentative audacieuse de r&eacute;inventer leur son et d&#039;explorer de nouvelles fronti&egrave;res musicales. Cependant, cette &eacute;volution n&#039;a pas &eacute;t&eacute; sans ses critiques. Certains fans fid&egrave;les du groupe ont exprim&eacute; leur d&eacute;ception face au changement radical de style, regrettant l&#039;absence des &eacute;l&eacute;ments qui ont fait le succ&egrave;s de leurs pr&eacute;c&eacute;dents albums. En effet, IMAD abandonne les m&eacute;lodies accrocheuses et les paroles poignantes qui avaient valu &agrave; Theodort une place de choix dans l&#039;industrie musicale.\r\n\r\nPourtant, d&#039;autres voix d&eacute;fendent l&#039;album, le qualifiant de rafra&icirc;chissant et innovant. IMAD brille par son exploration de sonorit&eacute;s &eacute;lectroniques et ses paroles introspectives, offrant une exp&eacute;rience d&#039;&eacute;coute immersive et captivante. Theodort, fid&egrave;le &agrave; sa r&eacute;putation de pionnier, d&eacute;montre son engagement &agrave; &eacute;largir les horizons de la musique populaire et &agrave; &eacute;lever le niveau artistique.\r\n\r\nL&#039;album est &eacute;galement soutenu par des critiques &eacute;logieuses pour sa production impeccable et ses arrangements complexes. L&#039;attention port&eacute;e aux d&eacute;tails et la qualit&eacute; de l&#039;ing&eacute;nierie sonore confirment l&#039;engagement de Theodort envers l&#039;excellence musicale. Cependant, ces qualit&eacute;s ne suffisent pas &agrave; convaincre tous les fans de la pertinence de ce virage musical.\r\n\r\nEn conclusion, IMAD est une &oelig;uvre qui divise. Alors que certains la jugent comme un &eacute;chec, d&#039;autres y voient une &oelig;uvre d&#039;art moderne et captivante. Dans un paysage musical en constante &eacute;volution, il est in&eacute;vitable que les artistes prennent des risques et explorent de nouvelles voies. Theodort a pris ce risque avec IMAD, et seul le temps dira comment cet album marquera leur h&eacute;ritage dans l&#039;histoire de la musique.\r\n\r\nPour les fans de longue date, IMAD est une &eacute;preuve de leur loyaut&eacute;, tandis que pour les nouveaux auditeurs, il repr&eacute;sente une porte d&#039;entr&eacute;e vers un univers musical en perp&eacute;tuelle expansion. En fin de compte, IMAD ne peut &ecirc;tre jug&eacute; que par chaque auditeur individuellement, car la musique, apr&egrave;s tout, reste une question de go&ucirc;t personnel et de perspective.', 'https://i.ytimg.com/vi/KBK4D3seL6g/maxresdefault.jpg', '2024-06-05 18:51:51', 'https://youtu.be/KBK4D3seL6g?si=ieu-fLilKyGel0ys'),
(67, 15, 'Mbapp&eacute; : Le cas Kylian, entre admiration et critique', 'Depuis ses d&eacute;buts fulgurants sur les terrains de football, Kylian Mbapp&eacute; est devenu une figure embl&eacute;matique du sport mondial. Toutefois, malgr&eacute; son talent ind&eacute;niable, le joueur parisien n&#039;&eacute;chappe pas aux critiques qui l&#039;accompagnent d&eacute;sormais dans sa carri&egrave;re.', 'Kylian Mbapp&eacute;, jeune prodige du football fran&ccedil;ais, a suscit&eacute; des r&eacute;actions vives et diverses depuis ses d&eacute;buts dans l&#039;&eacute;quipe premi&egrave;re du Paris Saint-Germain. Admir&eacute; pour sa vitesse, sa technique et son instinct de buteur hors pair, le joueur de 24 ans est &eacute;galement au centre de d&eacute;bats passionn&eacute;s concernant sa performance et sa gestion de carri&egrave;re.\r\n\r\nCertains observateurs louent Mbapp&eacute; pour ses exploits sur le terrain, soulignant sa capacit&eacute; &agrave; marquer des buts d&eacute;cisifs dans les moments cruciaux des matchs. Sa pr&eacute;sence dynamique sur l&#039;aile droite et sa complicit&eacute; avec ses co&eacute;quipiers ont fait de lui une pi&egrave;ce ma&icirc;tresse du PSG et de l&#039;&eacute;quipe nationale fran&ccedil;aise. Pour ses partisans, Mbapp&eacute; incarne la nouvelle g&eacute;n&eacute;ration de talents exceptionnels qui &eacute;crivent l&#039;avenir du football mondial.\r\n\r\nCependant, cette reconnaissance ne vient pas sans critique. Certains experts remettent en question sa constance et son comportement sur le terrain, notant des performances en dents de scie et une certaine tendance &agrave; dispara&icirc;tre lors de matchs cl&eacute;s. Les attentes &eacute;lev&eacute;es associ&eacute;es &agrave; son potentiel ont parfois conduit &agrave; une pression m&eacute;diatique intense, exacerbant les critiques lors de moments de moins bonne forme.\r\n\r\nEn dehors du terrain, Mbapp&eacute; est &eacute;galement au centre de sp&eacute;culations sur son avenir. Les rumeurs persistantes de transfert vers d&#039;autres grands clubs europ&eacute;ens, notamment le Real Madrid, ont suscit&eacute; des d&eacute;bats passionn&eacute;s parmi les fans et les experts du football. Certains voient en lui l&#039;h&eacute;ritier naturel des l&eacute;gendes du football telles que Cristiano Ronaldo et Lionel Messi, tandis que d&#039;autres craignent que ces transferts ne nuisent &agrave; son d&eacute;veloppement personnel et professionnel.\r\n\r\nEn conclusion, le cas de Kylian Mbapp&eacute; est complexe et multifacette. Alors que ses partisans saluent son potentiel et son impact positif sur le football, ses d&eacute;tracteurs soulignent ses limites et les d&eacute;fis auxquels il est confront&eacute; en tant que star montante. Pourtant, une chose est claire : Mbapp&eacute; continue d&#039;inspirer une nouvelle g&eacute;n&eacute;ration de joueurs et de captiver les amateurs de football du monde entier, assurant ainsi sa place parmi les grands du jeu pour les ann&eacute;es &agrave; venir.', 'https://assets-fr.imgfoot.com/media/cache/642x382/kylian-mbappe-2324-6601a66c962e2.jpg', '2024-06-05 18:57:39', ''),
(68, 17, 'Paris sera-t-elle pr&ecirc;t pour les Jeux Olympique 2024 ?', 'Les pr&eacute;paratifs pour les Jeux Olympiques continuent &agrave; avancer rapidement. Le Centre Aquatique Olympique a &eacute;t&eacute; inaugur&eacute;, et plus de 250 000 nouveaux billets ont &eacute;t&eacute; mis en vente r&eacute;cemment. Les Relais de la Flamme Olympique, parrain&eacute;s par des entreprises comme Coca-Cola, sont &eacute;galement en cours, marquant l&#039;approche de cet &eacute;v&eacute;nement majeur. ', 'Les pr&eacute;paratifs pour les Jeux Olympiques de Paris 2024 avancent de mani&egrave;re prometteuse. L&#039;inauguration du Centre Aquatique Olympique et la mise en vente de plus de 250 000 nouveaux billets montrent que les infrastructures n&eacute;cessaires sont presque pr&ecirc;tes et que l&#039;organisation est bien en place. Le soutien solide des sponsors, comme Coca-Cola pour les Relais de la Flamme Olympique, renforce encore la capacit&eacute; de Paris &agrave; accueillir cet &eacute;v&eacute;nement majeur​ (Paris 2024 Press)​.\r\n\r\nCependant, il reste des d&eacute;fis &agrave; relever, notamment en mati&egrave;re de logistique et de gestion des flux de visiteurs. Les manifestations et gr&egrave;ves potentielles en France pourraient poser des probl&egrave;mes, tout comme d&#039;autres impr&eacute;vus tels que des conditions m&eacute;t&eacute;orologiques extr&ecirc;mes. Malgr&eacute; ces d&eacute;fis, les signes actuels sont positifs et indiquent que Paris sera probablement pr&ecirc;te pour accueillir les Jeux Olympiques 2024 de mani&egrave;re r&eacute;ussie', 'https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(jpeg)/origin-imgresizer.eurosport.com/2023/03/10/3650996-74329048-2560-1440.jpg', '2024-06-05 21:10:00', ''),
(69, 17, 'Parcoursup est-elle l&#039;espoir ou le d&eacute;sespoir pour les lyc&eacute;ens ?', 'Chaque ann&eacute;e, la plateforme Parcoursup joue un r&ocirc;le crucial dans l&#039;orientation des lyc&eacute;ens fran&ccedil;ais vers l&#039;enseignement sup&eacute;rieur, mais elle suscite &eacute;galement de nombreuses critiques. Ce syst&egrave;me, con&ccedil;u pour optimiser la r&eacute;partition des &eacute;tudiants dans les diff&eacute;rentes fili&egrave;res, g&eacute;n&egrave;re &agrave; la fois de l&rsquo;espoir et de l&#039;anxi&eacute;t&eacute; chez les &eacute;l&egrave;ves et leurs familles, en raison de sa complexit&eacute; et des incertitudes qu&#039;il engendre.', 'Parcoursup, la plateforme nationale d&rsquo;admission en premi&egrave;re ann&eacute;e de l&rsquo;enseignement sup&eacute;rieur en France, continue de susciter d&eacute;bats et &eacute;motions parmi les lyc&eacute;ens et leurs familles. Lanc&eacute;e en 2018 pour remplacer le syst&egrave;me Admission Post-Bac (APB), Parcoursup vise &agrave; am&eacute;liorer l&#039;orientation et la r&eacute;partition des &eacute;tudiants dans les fili&egrave;res de l&#039;enseignement sup&eacute;rieur. Les &eacute;l&egrave;ves de terminale doivent y formuler leurs v&oelig;ux de formation, puis r&eacute;pondre aux propositions des &eacute;tablissements. Cette ann&eacute;e encore, la proc&eacute;dure a r&eacute;v&eacute;l&eacute; ses tensions habituelles, avec des &eacute;tudiants anxieux face aux d&eacute;lais et &agrave; l&#039;incertitude des r&eacute;ponses, bien que le minist&egrave;re de l&#039;&Eacute;ducation nationale s&#039;efforce de rassurer en assurant que chaque candidat trouvera une place.\r\n\r\nLa plateforme, bien qu&#039;efficace pour nombre d&#039;&eacute;tudiants, est souvent critiqu&eacute;e pour sa complexit&eacute; et le stress qu&rsquo;elle engendre. En effet, le processus de s&eacute;lection, qui inclut des algorithmes pour la r&eacute;partition des places, peut para&icirc;tre opaque et injuste pour certains. De plus, la charge &eacute;motionnelle pour les candidats, qui doivent jongler entre leurs examens de fin d&#039;ann&eacute;e et les r&eacute;ponses aux propositions de Parcoursup, est notable. Malgr&eacute; ces critiques, Parcoursup est un outil essentiel pour l&rsquo;organisation de l&rsquo;acc&egrave;s &agrave; l&rsquo;enseignement sup&eacute;rieur en France, avec des ajustements continus visant &agrave; le rendre plus transparent et &eacute;quitable.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrSgAPchXeTdKafpWw98AopHGrWp_Bup9W3Q&amp;s', '2024-06-05 21:32:08', ''),
(70, 18, 'Inoxtag a-t-il r&eacute;ussi &agrave; gravir l&#039;Everest ?', 'Inoxtag, le c&eacute;l&egrave;bre YouTubeur aux millions d&#039;abonn&eacute;s, a r&eacute;cemment accompli un exploit extraordinaire : gravir l&#039;Everest, le plus haut sommet du monde. Cette aventure audacieuse, qui l&#039;a men&eacute; des rues de Paris aux cimes glac&eacute;es de l&#039;Himalaya, t&eacute;moigne de son courage, de sa d&eacute;termination et de son d&eacute;sir de repousser ses limites. ', 'En mai 2024, l&#039;influenceur et YouTubeur fran&ccedil;ais Inoxtag de son vrai nom In&egrave;s Benazzouz, a r&eacute;alis&eacute; un exploit impressionnant en gravissant le mont Everest, le sommet le plus haut du monde &agrave; plus de 8 840 m&egrave;tres d&rsquo;altitude. Ce d&eacute;fi extr&ecirc;me, souvent r&eacute;serv&eacute; aux alpinistes exp&eacute;riment&eacute;s a &eacute;t&eacute; relev&eacute; avec courage et d&eacute;termination par ce jeune homme connu pour ses vid&eacute;os divertissantes et ses d&eacute;fis audacieux.\r\n\r\nToutefois, avant de se lancer dans cette aventure t&ecirc;te baiss&eacute;e , Inoxtag s&#039;est engag&eacute; dans une pr&eacute;paration intensive car il &eacute;tais conscient des dangers et des exigences physiques de l&#039;Everest, il a suivi un programme d&#039;entra&icirc;nement rigoureux. Cela incluait des s&eacute;ances de cardio pour son endurance, des exercices de renforcement musculaire et des stages d&#039;acclimatation en haute altitude. Il a &eacute;galement pris des cours aupr&egrave;s d&#039;alpinistes exp&eacute;riment&eacute;s pour acqu&eacute;rir les techniques n&eacute;cessaires et comprendre les risques li&eacute;s &agrave; cette ascension dangereuses.\r\n\r\nInoxtag a document&eacute; chaque &eacute;tape de sa pr&eacute;paration sur ses r&eacute;seaux sociaux, partageant avec sa communaut&eacute; ses progr&egrave;s, ses doutes et ses moments de motivation. Cette transparence a cr&eacute;&eacute; une vague de soutien massif de la part de ses fans mais a &eacute;galement sensibilis&eacute; le grand public aux r&eacute;alit&eacute;s de l&#039;alpinisme de haute montagne.\r\n\r\nAccompagn&eacute; d&#039;une &eacute;quipe de guides exp&eacute;riment&eacute;s, Inoxtag a entam&eacute; l&#039;ascension de l&#039;Everest depuis le camp de base. Malgr&eacute; les conditions climatiques extr&ecirc;mes et la difficult&eacute; de l&#039;altitude, il a pers&eacute;v&eacute;r&eacute; &agrave; chaque &eacute;tape. Les moments de doute ont &eacute;t&eacute; nombreux, mais sa d&eacute;termination et le soutien constant de son &eacute;quipe l&#039;ont aid&eacute; &agrave; surmonter les obstacles.\r\n\r\nUn moment particuli&egrave;rement marquant de cette aventure a &eacute;t&eacute; l&#039;atteinte du camp 4, situ&eacute; &agrave; environ 8 000 m&egrave;tres, &eacute;galement connu sous le nom de &quot;Zone de la mort&quot; en raison de la rar&eacute;faction de l&#039;oxyg&egrave;ne. Ce passage critique a mis &agrave; l&#039;&eacute;preuve sa r&eacute;sistance physique et mentale, mais Inoxtag a continu&eacute; &agrave; avancer motiv&eacute; par son objectif ultime.\r\n\r\nLe 15 mai 2024, apr&egrave;s plusieurs semaines d&#039;efforts et de pers&eacute;v&eacute;rance, Inoxtag a atteint le sommet de l&#039;Everest. Ce moment a &eacute;t&eacute; immortalis&eacute; dans une vid&eacute;o qu&#039;il a partag&eacute;e avec &eacute;motion sur ses r&eacute;seaux sociaux, remerciant tous ceux qui l&#039;ont soutenu dans cette aventure extraordinaire.\r\n\r\nL&#039;ascension de l&#039;Everest par Inoxtag n&#039;est pas seulement un exploit sportif, c&#039;est aussi une source d&#039;inspiration pour des millions de personnes. &Agrave; travers cette aventure, il a d&eacute;montr&eacute; que la d&eacute;termination, la pr&eacute;paration et le soutien communautaire peuvent permettre de r&eacute;aliser des r&ecirc;ves apparemment inaccessibles. Son histoire rappelle que quel que soit le d&eacute;fi avec du courage et de la pers&eacute;v&eacute;rance, tout est possible.\r\n\r\nInoxtag a prouv&eacute; qu&#039;il est bien plus qu&#039;un simple cr&eacute;ateur de contenu, il est un exemple en montrant &agrave; sa g&eacute;n&eacute;ration que les limites ne sont souvent que celles que l&#039;on s&#039;impose.', 'https://www.planetegrandesecoles.com/wp-content/uploads/2024/05/Inoxtag-Everst--850x560.png', '2024-06-07 09:59:19', ''),
(71, 16, 'Qui sont les candidats aux &eacute;lections europ&eacute;ennes de 2024 ?', 'Le 9 juin 2024, les &eacute;lecteurs fran&ccedil;ais d&eacute;signeront leurs eurod&eacute;put&eacute;s au Parlement europ&eacute;en. Retrouvez les 38 listes officiellement d&eacute;clar&eacute;es.', 'Le 9&nbsp;juin&nbsp;2024, les &eacute;lecteurs fran&ccedil;ais d&eacute;signeront leurs eurod&eacute;put&eacute;s au Parlement europ&eacute;en. Retrouvez les 38&nbsp;listes officiellement d&eacute;clar&eacute;es.\r\n\r\nLe nom des candidats fran&ccedil;ais aux &eacute;lections europ&eacute;ennes du 9&nbsp;juin est d&eacute;sormais connu. Apr&egrave;s avoir annonc&eacute; la validation de 37&nbsp;listes concurrentes le 17&nbsp;mai, le minist&egrave;re de l&rsquo;int&eacute;rieur a publi&eacute; un arr&ecirc;t&eacute; rectificatif le 23&nbsp;mai pour y ajouter une 38e liste. Un record, apr&egrave;s les 34&nbsp;listes de 2019, qui s&rsquo;explique par les crit&egrave;res peu contraignants pour d&eacute;poser une liste.\r\n\r\nPour les grands partis, les t&ecirc;tes de liste sont le plus souvent des eurod&eacute;put&eacute;s sortants, comme Val&eacute;rie Hayer (Renaissance), Fran&ccedil;ois-Xavier Bellamy (Les R&eacute;publicains), Jordan Bardella (Rassemblement national), Rapha&euml;l Glucksmann (Parti socialiste-Place publique), Manon Aubry (La France insoumise) ou Marie Toussaint (Les Ecologistes).', 'https://www.francetvinfo.fr/pictures/taTaIjr6YAGRgxUzQQb0HQBjSMM/1500x843/2019/03/15/phpXN8Eb1.jpg', '2024-06-11 18:16:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `lien_twitter` varchar(255) NOT NULL,
  `lien_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `lien_twitter`, `lien_avatar`) VALUES
(15, 'Arda', 'Nigiz', '', 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'),
(16, 'Zakaria', 'Lomuscio', '', 'https://media.licdn.com/dms/image/D4E03AQGvpT43P3NVWQ/profile-displayphoto-shrink_200_200/0/1711842706032?e=2147483647&amp;v=beta&amp;t=_fxSI4LWqMcLT9OvOlHhh1LMpxCNOYLNlM8xl7Gan94'),
(17, 'Hasson', 'Oubaaous', '', 'https://media.licdn.com/dms/image/D4E03AQFYYPYB7FjykA/profile-displayphoto-shrink_200_200/0/1706554531141?e=1723075200&amp;v=beta&amp;t=FswV2gHvaSAAAB6n69syH4BajMiB01-KpLLImajBt7M'),
(18, 'Matt&eacute;o', 'L&eacute; Marques', '', 'https://media.licdn.com/dms/image/D5603AQF2hrtGMZ8vgw/profile-displayphoto-shrink_800_800/0/1717676917089?e=1723075200&amp;v=beta&amp;t=19IRERC8wem2-TFZcahhwzM0OA8U-8_KlhfRVvjP4NY');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nom`, `prenom`, `email`, `contenu`, `type`, `date_creation`) VALUES
(31, 'Nigiz', 'Arda', 'e-bnigiz@etu.cyu.fr', 'Bonjour, j&#039;ai un probl&egrave;me au sein de l&#039;iut est-il possible de me recontacter afin de m&#039;aider sur ce sujet ? Merci beaucoup ! ', 'etudiant', '2024-06-16 20:26:31'),
(32, 'Michel', 'Jean', 'jean.michel@adressefictif.com', 'Bonjour, j&#039;aimerais inscrire mon enfant a cette IUT comment pourrais-je m&#039;y prendre ? ', 'parent', '2024-06-16 20:27:01'),
(33, 'Orgeval', 'Natahlie', 'natah.orge@hotmail.fr', 'Bonjour, j&#039;ai un soucis', 'pas_precise', '2024-06-16 20:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `sae`
--

CREATE TABLE `sae` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `chapo` longtext NOT NULL,
  `lien_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sae`
--

INSERT INTO `sae` (`id`, `titre`, `chapo`, `lien_image`) VALUES
(7, 'Auditer une communication num&eacute;rique &bull; SA&Eacute; 101', 'Analyser un site web, un produit multim&eacute;dia ou la pr&eacute;sence en ligne d&rsquo;une marque ou d&rsquo;une organisation et &eacute;tablir diff&eacute;rents rapports d&rsquo;audit.', ''),
(8, 'Concevoir une recommandation de communication num&eacute;rique &bull; SA&Eacute; 102', 'Construire une recommandation de communication pour la sortie ou le repositionnement d&#039;un produit ou d&rsquo;un service.', ''),
(9, 'Design Graphique &bull; SA&Eacute; 103', 'Cr&eacute;er les &eacute;l&eacute;ments graphiques et visuels pour une campagne de communication et justifier ses choix esth&eacute;tiques.', ''),
(10, 'Production Audio et vid&eacute;o &bull; SA&Eacute; 104', 'Concevoir et produire un contenu audiovisuel dans une perspective de vulgarisation ou d&rsquo;argumentation.', ''),
(11, 'Produire un site Web &bull; SA&Eacute; 105', 'Produire un site Web contenant &agrave; la fois des pages statiques et des pages g&eacute;n&eacute;r&eacute;es &agrave; partir de jeux de donn&eacute;es structur&eacute;es, respectant les normes du W3C et les recommandations du WCAG.', ''),
(12, 'Gestion de projet pour une recommandation de communication num&eacute;rique &bull; SA&Eacute; 106', 'Mettre en place la gestion de projet pour proposer une recommandation de communication num&eacute;rique.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E6660BB6FE6` (`auteur_id`);

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sae`
--
ALTER TABLE `sae`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sae`
--
ALTER TABLE `sae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
