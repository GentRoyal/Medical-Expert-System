-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 04:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(10) NOT NULL,
  `passcode` char(12) NOT NULL,
  `id` int(11) NOT NULL,
  `Role` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `passcode`, `id`, `Role`) VALUES
('admin', 'admin', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ailments`
--

CREATE TABLE `ailments` (
  `SN` int(11) NOT NULL,
  `Ailment` varchar(100) NOT NULL,
  `Intro` text NOT NULL,
  `Symptom` text NOT NULL,
  `Cause` text NOT NULL,
  `Complication` text NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ailments`
--

INSERT INTO `ailments` (`SN`, `Ailment`, `Intro`, `Symptom`, `Cause`, `Complication`, `Link`) VALUES
(1, 'Malaria', 'Malaria is a serious tropical disease spread by mosquitoes. If it is not diagnosed and treated promptly, it can be fatal.\r\n\r\nA single mosquito bite is all it takes for someone to become infected.', 'It is important to be aware of the symptoms of malaria if you are travelling to areas where there is a high risk of the disease. Symptoms include:\r\n\r\na high temperature (fever)\r\nsweats and chills\r\nheadaches\r\nvomiting\r\nmuscle pains\r\ndiarrhoea', 'Malaria is caused by a type of parasite known as Plasmodium. There are many different types of Plasmodia parasites, but only five cause malaria in humans.\r\n\r\nThe Plasmodium parasite is mainly spread by female Anopheles mosquitoes, which mainly bite at dusk and at night. When an infected mosquito bites a human, it passes the parasites into the bloodstream.\r\n\r\nMalaria can also be spread through blood transfusions and the sharing of needles, but this is very rare.', 'Bite prevention â€“ avoid mosquito bites by using insect repellent, covering your arms and legs, and using an insecticide-treated mosquito net\r\nCheck whether you need to take malaria prevention tablets â€“ if you do, make sure you take the right antimalarial tablets at the right dose, and finish the course\r\nDiagnosis â€“ seek immediate medical advice if you develop malaria symptoms, as long as up to a year after you return from travelling\r\nIt may be recommended that you take antimalarial tablets to prevent infection.\r\n\r\nIf malaria is diagnosed and treated promptly, virtually everyone will make a full recovery. Treatment should be started as soon as the diagnosis has been confirmed.\r\n\r\nAntimalarial medication is used to both treat and prevent malaria. Which type of medication is used and the length of treatment will depend on:\r\n\r\nthe type of malaria\r\nthe severity of your symptoms\r\nwhere you caught malaria\r\nwhether you took an antimalarial to prevent malaria \r\nwhether you are pregnant\r\nIn some cases, you may be prescribed emergency standby treatment for malaria before you travel. This is usually if there is a risk of you becoming infected with malaria while travelling in a remote area with little or no access to medical care.', 'malaria.php'),
(2, 'Thyroid cancer', 'Thyroid cancer is a rare type of cancer that affects the thyroid gland, a small gland at the base of the neck.\r\nThe most common symptom of cancer of the thyroid is a painless lump or swelling that develops in the neck.', 'Unexplained hoarseness that lasts for more than a few weeks\r\nA sore throat or difficulty swallowing that does not get better \r\nA lump elsewhere in your neck\r\nIt is important to remember that if you have a lump in your thyroid gland, it does not necessarily mean you have thyroid cancer. About 1 in 20 thyroid lumps are cancerous. ', 'Having a benign (non-cancerous) thyroid condition\r\nHaving a family history of thyroid cancer (in the case of medullary thyroid cancer)\r\nHaving a bowel condition known as familial adenomatous polyposis\r\nAcromegaly â€“ a rare condition where the body produces too much growth hormone\r\nhaving a previous benign (non-cancerous) breast condition\r\nWeight and height radiation exposure ', 'Your recommended treatment plan will depend on the type and grade of your cancer, and whether a complete cure is realistically achievable.\r\nDifferentiated thyroid cancers (DTCs) are treated using a combination of surgery to remove the thyroid gland (thyroidectomy) and a type of radiotherapy that destroys any remaining cancer cells and prevents the thyroid cancer returning.\r\nMedullary thyroid carcinomas tend to spread faster than DTCs, so it may be necessary to remove any nearby lymph nodes, as well as your thyroid gland.\r\nFrom the available evidence, eating a healthy, balanced diet is the best way to avoid getting thyroid cancer and all other types of cancer.\r\nA low-fat, high-fibre diet is recommended that includes plenty of fresh fruit and vegetables (at least five portions a day) and whole grains.', 'Thyroid cancer.php'),
(3, 'Diabetes', 'Diabetes is a lifelong condition that causes a persons blood sugar level to become too high.\r\n\r\nThe hormone insulin â€“ produced by the pancreas â€“ is responsible for controlling the amount of glucose in the blood\r\n\r\nThere are two main types of diabetes:\r\n\r\nType 1 â€“ where the pancreas does not produce any insulin\r\nType 2 â€“ where the pancreas does not produce enough insulin or the body cells do not react to insulin\r\n\r\nAnother type of diabetes, known as gestational diabetes, occurs in some pregnant women and tends to disappear after birth.', 'The symptoms of diabetes occur because the lack of insulin means glucose stays in the blood and is not used as fuel for energy.\r\n\r\nYour body tries to reduce blood glucose levels by getting rid of the excess glucose in your urine.\r\n\r\nTypical symptoms include:\r\n\r\nFeeling very thirsty\r\nPassing urine more often than usual, particularly at night\r\nFeeling very tired\r\nWeight loss and loss of muscle bulk\r\n\r\n\r\nIt is very important for diabetes to be diagnosed as soon as possible as it will get progressively worse if left untreated.', 'It occurs when the body does not produce enough insulin to function properly, or the body cells do not react to insulin. This means glucose stays in the blood and is not used as fuel for energy.\r\n\r\nIt is often associated with obesity and tends to be diagnosed in older people. ', 'Diabetes can cause serious long-term health problems. It is the most common cause of vision loss and blindness in people of working age.\r\n\r\nEveryone with diabetes aged 12 or over should be invited to have their eyes screened once a year for diabetic retinopathy.\r\n\r\nDiabetes is also responsible for most cases of kidney failure and lower limb amputation, other than accidents.\r\n\r\nPeople with diabetes are up to five times more likely to have cardiovascular disease, such as a stroke, than those without diabetes.', 'Diabetes.php'),
(4, 'Yellow fever', 'Yellow fever is a serious viral infection that is spread by certain types of mosquito. It is mainly found in sub-Saharan Africa, South America and parts of the Caribbean.\r\n\r\nThe condition can be prevented with a vaccination and is a very rare cause of illness in travelers.', 'The symptoms of yellow fever occur in two stages. The initial symptoms develop three to six days after infection, and can include:\r\n\r\nA high temperature (fever)\r\nHeadache\r\nNausea or vomiting\r\nMuscle pain, including backache \r\nLoss of appetite\r\n\r\nThis stage will usually pass after three to four days and most people will make a full recovery.\r\n\r\nHowever, around 15% of people go on to develop more serious problems, including jaundice (yellowing of the skin and whites of the eyes), kidney failure and bleeding from the mouth, nose, eyes or stomach (causing blood in your vomit and stools).\r\n\r\nUp to half of those who experience these symptoms will die.', 'The virus that causes yellow fever is passed to humans through the bites of infected mosquitoes. The mosquitoes that spread the infection are usually active and bite during daylight hours, from dusk until dawn, and are found in both urban and rural areas.\r\n\r\nYellow fever cannot be passed directly from person to person through close contact.', 'The vaccination against yellow fever should be given at least 10 days before travelling to an area where the infection is found, to allow your body to develop protection against the virus that causes the infection.\r\n\r\nSome countries require a proof of vaccination certificate before they will let you enter the country. This will only become valid 10 days after you are vaccinated.\r\n\r\nThe yellow fever vaccination is given as a single injection and it offers protection to over 95% of those who have it.\r\n\r\nThe protection offered by the vaccine may be life-long, but vaccination certificates are currently only valid for 10 years, and a booster dose may sometimes be needed after this time if you are planning another visit to an area where yellow fever is found.', 'Yellow fever.php');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `SN` int(11) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Enquiry` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`SN`, `First_name`, `Last_name`, `Enquiry`, `Mail`, `Gender`) VALUES
(1, 'Oyelakin', 'Bolanle', 'I keep having headache', 'oyelakin@gmail.com', 'Female'),
(2, 'Oyelakin', 'Bolanle', 'I keep having headache', 'oyelakin@gmail.com', 'Female'),
(3, 'Oyelakin', 'Bolanle', 'I keep having headache', 'oyelakin@gmail.com', 'Female'),
(4, 'Bamidele', 'Olasunbo', 'I keep having running stomach', 'sunbo@gmail.com', 'Female'),
(5, 'Oyelakin', 'Rofiat', 'I am havung stomach upset', 'oyelakin@gmail.com', 'Female'),
(6, 'Ridwan', 'Yusuf', 'How to sleep', 'yusuflarnrey@gmail.com', 'Male'),
(7, 'Ridwan', 'Yusuf', 'How to sleep', 'yusuflarnrey@gmail.com', 'Male'),
(8, 'Abiodun', 'Daniel', 'I am okay', 'yusuflarnrey@gmail.com', 'Male'),
(9, 'Ridwan', 'Yusuf', 'How to sleep', 'yusuflarnrey@gmail.com', 'Male'),
(10, 'Ridwa', 'Yusuf', 'mkl', 'yusuflarnrey@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `DOCTOR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`DOCTOR`) VALUES
('Dr. Adeyemi Oyeleke'),
('Dr. Mrs. Rofiat Oyelakin');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `SN` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Typ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`SN`, `Question`, `Typ`) VALUES
(1, 'Do you get tired easily?', '	Malaria'),
(2, 'Do you sweat profusely?', '	Malaria'),
(3, 'Do show a slight increase in body temperature?', '	Malaria'),
(4, 'Do you headache and pains in the back and joints?', '	Malaria'),
(5, 'Do you many times feel exhausted and weak?', '	Malaria'),
(6, 'Do you vomit repeatedly?', '	Malaria'),
(7, 'How much urine does the do you pass?', '	Malaria'),
(8, 'Do you have yellowish eyes, mouth or palms?', '	Malaria'),
(9, 'Do you a times find it difficult to sleep, or wake?', '	Malaria'),
(10, 'Do you have a rash of small, black pink spot?', '	Typhoid'),
(11, 'Do you feel tired constantly or after activities?', '	Typhoid'),
(12, 'Do you have changes recently in your mental state ?', '	Typhoid'),
(13, 'Do you have irregular heartbeat?', '	Typhoid'),
(14, 'Do you find it difficult to urinate a times?', '	Typhoid'),
(15, 'Do you have abdominal pain that starts suddenly?', '	Typhoid'),
(16, 'Do you lack appetite towards food?', '	Typhoid'),
(17, 'Do you vomit constantly?', '	Typhoid'),
(18, 'Is your abdomen swollen?', '	Typhoid');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `SN` int(11) NOT NULL,
  `Ailment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`SN`, `Ailment`) VALUES
(1, 'Malaria'),
(2, 'Typhoid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ailments`
--
ALTER TABLE `ailments`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
