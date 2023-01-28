-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2022 at 05:23 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inback`
--
CREATE DATABASE IF NOT EXISTS `inback` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `inback`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date_article` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`, `tag`, `date_article`) VALUES
(8, 'Comment lutter contre le mal de dos', '<h3>Comment lutter contre le mal de dos</h3><p>&nbsp;</p><p>De nos jours environ 93% des Français <strong>déclarent avoir déjà eu mal au dos</strong> et cela peut être après une longue journée de travail ou bien tout simplement au réveil.&nbsp;</p><p>Les causes de ces maux de dos proviennent la plupart du temps à une <strong>négligence de notre posture</strong> au quotidien ou bien à la <strong>porte de charge trop lourde</strong>.</p><p><strong>2 salariés sur 3 ont ou auront une lombalgie.</strong></p><h3>Qu’est-ce qu’une lombalgie&nbsp;</h3><p>Un mal de dos est une appellation vulgarisée de «&nbsp;lombalgie&nbsp;» et se caractérise par une douleur intense au niveau des vertèbres lombaires situés dans le bas du dos. &nbsp;Il est aussi possible que cette douleur s’étend jusqu’à l’arrière des cuisses.</p><h3>La lombalgie aiguë</h3><p>Ce type de lombalgie est courte allant jusqu’à 4 semaines maximum et se manifeste par une douleur aiguë pouvant empêcher d’accomplir des activités quotidiennes ou bien de travailler. Il est possible de se faire délivrer un arrêt de travail par une médecin dans certains cas.</p><h3>La lombalgie récidivante</h3><p>Il s’agit d’une suite d’épisodes de lombalgie plus ou moins espacés qui peuvent s’étendre sur plusieurs mois ou même sur plusieurs années.</p><h3>La lombalgie chronique</h3><p>Lorsque les maux de dos sont récurrents et durent depuis plus de 3 mois on diagnostique ça comme de la lombalgie chronique. Elle représente une part minime des lombalgies et ses causes peuvent être multiples, obligeant alors les patients atteints de ceci à changer leur habitudes et modes de vie.</p><h3>Ses causes et conséquences</h3><p>Les lombalgies n’entrainent pas de conséquences directes graves sur notre santé mais cela empiète dans tous les cas sur notre quotidien.</p><p>On vous liste ci-après les causes les plus fréquentes de la lombalgie&nbsp;et l’explication de celles-ci :</p><ul><li>Les défauts de posture entrainant alors des contractures musculaires et un déséquilibre de la colonne vertébrale.</li><li>Modifications des articulations vertébrales&nbsp;qui vient avec l’âge&nbsp;: c’est le vieillissement des articulations.</li></ul><p>On peut citer l’Arthrose qui est une des maladies des articulations la plus répandue en France et qui est l’une des principales causes de la perte d’autonomie des personnes âgées&nbsp;; cela créer de douleurs et des raidissements des articulations.</p><ul><li>Malformations de la colonne vertébrale. On peut citer la scoliose qui est une déviation sinueuse de la colonne vertébrale qui permanente et irréductible. Cela touche environ 4% de la population et se développe le plus souvent pendant l’enfance lors de la croissance mais cette anomalie peut survenir à tout âge.</li><li>Une suite de traumatismes de dos qui peut être lié à un choc ou à une répétition à plusieurs reprises d’un mouvement violent. Cette situation est fréquente lors du port de charge trop lourd.</li><li>Douleurs dorsales en cours de grossesse&nbsp;: une femme enceinte sur deux souffre de mal de dos. La raison est plutôt logique et vient du poids du ventre qui augmente et les hormones de la grossesse qui provoquent un relâchement des ligaments de la colonne vertébrale.</li></ul><h3>Comment peut-on soigner une lombalgie&nbsp;?</h3><p>Comment faire pour calmer la douleur liée aux lombalgies&nbsp;? Lors de lombalgie aiguë d’apparitions soudaine on peut prendre des mesures pouvant alors soulager la douleur.&nbsp;</p><p>Voici une liste de conseils à suivre pour atténuer les maux de dos&nbsp;:</p><ul><li>Eviter les activités qui peuvent accentuer la douleur (port de charge lourde, flexions, …)</li><li>Continuer à pratiquer des activités d’intensité modérée pour éviter le raidissement des muscles. On vous conseille d’effectuer quelques exercices de gym fitness, du yoga ou bien de la course à pied en faisant attention à positionner votre dos bien droit.</li><li>Appliquer du chaud ou du froid sur la douleur est une solution temporaire mais cela peut faire un grand bien.</li><li>En général, garder le plus possible le dos droit dans toutes les activités quotidiennes et éviter de vous pencher en avant.</li></ul><h3>Les traitements possibles</h3><p>En cas d’inflammation il est préférable de commencer par prendre du paracétamol qui est un médicament vendu en pharmacie sans ordonnance avec très peu de contre-indications. Il est aussi possible de prendre un traitement avec des anti-inflammatoires ou des myorelaxants.</p><p>Si les douleurs inflammatoires dû à la lombalgie persistent, consultez un médecin. On vous fera un examen physique et il vous sera prescrit des anti-douleurs plus fort dont l’usage doit être limité dans le temps ou renouveler sous ordonnance.</p><p>Prenez un rendez-vous chez un expert pour soulager le dos. Pour des douleurs aiguës il est conseillé de prendre rendez-vous chez un ostéopathe mais lorsque cela est une lombalgie chronique ou des douleurs plus conséquentes on vous conseille d’aller de prendre rendez-vous chez un kiné.</p><p>Le dispositif INBACK&nbsp;: une nouvelle technologie qui est un t-shirt connecté constitué de micro-capteurs à porter dans votre quotidien afin d’obtenir un suivi de votre dos qui est partagé à des experts en ligne et à votre disposition. Cette méthode est un système de prévention qui prend la forme d’abonnement et à chaque fin de mois vous obtenez un bilan par des experts à distance ou en physique.</p><p>L’un des atouts de ce dispositif est que vous êtes notifiés en «&nbsp;direct&nbsp;» si vous présentez des défauts de positionnement à l’aide de capteurs dans l’habit. Des vibrations sont ressenties lorsque c’est le cas et en plus de cela vous recevrez une notification grâce à l’application.</p>', 'fichiers/mal-de-dos-2914869.jpg', 'sante', '2022-07-11 00:00:00'),
(10, 'Charles Leclerc retrouve le sourire après une démonstration au Grand Prix d\'Autriche', '<p>Charles Leclerc a enfin retrouvé la victoire au terme d\'un <strong>Grand Prix</strong> marqué par ses dépassements sur Max Verstappen. Une course parfaitement maîtrisée pour le pilote <i>Ferrari </i>mais qui a connu une belle frayeur dans les derniers tours.</p>', 'fichiers/a09dd.jpg', 'loisir', '2022-07-11 00:00:00'),
(11, 'Nothing phone (1) : voici ce dont son appareil photo est capable', '<p>Dans quelques jours, le téléphone le plus excitant de ces dernières années sera présenté. <i>A priori</i>, il n’a rien de révolutionnaire. Son écran ne se plie pas, il ne dispose pas de technologie incroyable et même sa fiche technique le situe tout juste dans le milieu de gamme. Pourtant, le <a href=\"https://www.frandroid.com/produits/nothing/smartphones/1378989-nothing-phone-1\">Nothing phone (1)</a> possède ce petit quelque chose en plus qui donne envie. Tout d’abord un design soigné et original, mais aussi une philosophie qui vise avant tout une expérience d’utilisation plus qu’une surenchère de chiffres.</p><h2><strong>ENFIN DES INFORMATIONS SUR L’APPAREIL PHOTO</strong></h2><p>On connait déjà <a href=\"https://www.frandroid.com/marques/nothing/1367537_et-voici-le-design-complet-du-dos-du-nothing-phone1\">son design</a>, <a href=\"https://www.frandroid.com/marques/nothing/1368547_le-phone1-de-nothing-est-litteralement-un-smartphone-brillant\">son « truc en plus »</a>, une partie de <a href=\"https://www.frandroid.com/marques/nothing/1382813_nothing-phone-1-coloris-noir-prix-specifications-une-ultime-fuite-revele-presque-tout\">sa fiche technique</a>, ou encore <a href=\"https://www.frandroid.com/marques/nothing/1384299_nothing-phone1-les-prix-en-euros-devoiles-et-cest-cher\">son prix</a>, mais une inconnue demeurait au sujet du Nothing phone (1)&nbsp;: la qualité de son appareil photo. Il s’agit pourtant là d’un critère très important dans le processus d’achat d’un smartphone pour un grand nombre de personnes.</p><p>Ce 8&nbsp;juillet, Nothing a levé le voile sur l’appareil photo du phone (1), révélant certaines caractéristiques techniques. On apprend ainsi que le capteur principal est un Sony&nbsp;IMX766 de 50&nbsp;Mpx de 1/1,56″ couplé à une lentille ouvrant à f/1,88. Il dispose en outre d’une double stabilisation, à la fois optique (OIS) et électronique (EIS). Et comme sur tous les smartphones désormais, une dose d’intelligence artificielle vient couronner le tout avec une détection de scènes et un mode nuit.</p><h2><strong>DES EXEMPLES DE PHOTOS</strong></h2><p>Comme les mots ne suffisent pas et qu’une image en dit bien plus, Nothing a publié 8 photos prises avec le phone (1). On y découvre des clichés de Londres de jour, au crépuscule ou encore dans le métro.</p>', 'fichiers/exemple-photo-nothing-phone-1-1-scaled.jpg', 'technologie', '2022-07-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `auteur`, `note`, `commentaire`, `date_creation`) VALUES
(2, 'Sebou', 5, 'excellent', '2022-07-07 23:51:16'),
(3, 'Lucas', 5, 'J\'aime beaucoup', '2022-07-07 23:52:12'),
(4, 'Patate', 4, 'intéressant', '2022-07-08 19:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `beta_inscriptions`
--

CREATE TABLE `beta_inscriptions` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(8) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beta_inscriptions`
--

INSERT INTO `beta_inscriptions` (`id`, `prenom`, `nom`, `email`, `code`, `date_creation`) VALUES
(1, 'hoai lan', 'pika', 'hoai-lan_dinh_vu@edu.devinci.fr', 'c63e3277', '2022-07-07 23:50:59'),
(4, 'KIRBY', 'star', 'hoai-lan_dinh_vu@edu.devinci.fr', '7074f420', '2022-07-09 18:15:16'),
(5, 'KIRBY', 'star', 'hoai-lan_dinh_vu@edu.devinci.fr', 'a0c26873', '2022-07-10 18:42:52'),
(6, 'hoai lan', 'dinh vu', 'test@gmail.com', '2f3f5609', '2022-07-11 16:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mail`, `mdp`, `admin`) VALUES
(2, 'mail2seb@lol.fr', '$2y$10$N/.sFn6R.6oHPMkq212bi.bLYsGhYQl9AEThOiUCZW0rmTnuMGWUW', 0),
(6, 'testmail@mail.com', '$2y$10$FjVZ2rAINpW98GiYq37TteKAo1H5zy4eYqcLlyV.fzbtH5Dy2c.62', 0),
(7, 'maildong@kero.com', '$2y$10$Qip31aLa.YC5f4L9i5DYNuUc5PhGw3kFrDfGst4CXXmYwZ5V5mtkW', 0),
(8, 'test@gmail.com', '$2y$10$2ptcdVAAxwPsyqWl.2lVZeMp5asFssrZHLqSfQxrtRBQwR20F5bCK', 0),
(11, 'christiane.dinhvu@gmail.com', '$2y$10$rJhE1Pny5Qmnj.eDUPPTWe9q4oAgo/Ymc721bcyvNsoSQcP93IxMG', 1),
(12, 'mail@test.com', '$2y$10$8VkUs.d27Pdvip8YJpa0RugEqqYlZwsUVNEQY841abWNYjG6hXEjq', 0),
(13, 'test123@test.com', '$2y$10$8hdI./3g1lA/FDvl4Bdgc.YTp7pNs1SlDJndeDKAhtwLrGFKk61du', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beta_inscriptions`
--
ALTER TABLE `beta_inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beta_inscriptions`
--
ALTER TABLE `beta_inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
