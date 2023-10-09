-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 08:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `service_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `Id` int(11) NOT NULL,
  `doc_id_FK` int(11) NOT NULL,
  `user_id_FK` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`Id`, `doc_id_FK`, `user_id_FK`, `date`, `time`, `Message`, `status`) VALUES
(42, 23, 50, '2023-02-22', '16:04:00.000000', 'Emergency hai please bula laein mujhe', 'Approved'),
(43, 20, 50, '2023-02-23', '11:32:00.000000', 'ehfgvjhvbjbvjbvjifbwufbjsbgjkgbjhbjn', 'Declained'),
(45, 25, 50, '2023-02-23', '12:56:00.000000', 'vqw', 'pending'),
(46, 23, 50, '2023-02-23', '12:59:00.000000', 'dfv', 'Declained'),
(47, 19, 65, '2023-03-02', '17:19:00.000000', 'dfh', 'Approved'),
(48, 23, 61, '2023-02-24', '16:58:00.000000', 'please', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_text` varchar(230) NOT NULL,
  `cat_img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `cat_name`, `cat_text`, `cat_img`) VALUES
(15, 'Dentist', 'Physician; dental assistant; dental technician; dental hygienist; various dental', 'images/catimages/dentist_5.jpg'),
(16, 'Neurologist', 'A neurologist is a physician specializing in neurology and trained to investigat', 'images/catimages/neurologist_2.jpg'),
(17, 'Dermatologist', 'A dermatologist is a doctor who specializes in conditions involving the skin, ha', 'images/catimages/dermatologist_3.jpg'),
(18, 'Hepatologist', 'Hepatologists are doctors who specialize in the field of hepatic diseases and th', 'images/catimages/hepatologist_3.jpg'),
(20, 'Pediatrician ', 'Physician; dental assistant; dental technician; dental hygienist; various dental', 'images/catimages/pediatrician_4.jpg'),
(21, 'Pulmonologist', 'A pulmonologist is a physician who specializes in the respiratory system. From t', 'images/catimages/pulmonologist_2.jpg'),
(22, 'Radiologists', 'Radiologists are medical doctors that specialize in diagnosing and treating injuries and diseases using medical imaging', 'images/catimages/radiologist_2.jpg'),
(23, 'Psychologist', 'A psychologist is a mental health professional who uses psychological evaluations and talk therapy to help people learn to better cope with life ', 'images/catimages/psychiatrist_5.jpg'),
(24, 'Surgeon', 'A surgeon is a doctor who specializes in evaluating and treating conditions that may require surgery, or physically changing the human body.', 'images/catimages/surgeon_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `Id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`Id`, `city_name`) VALUES
(4, 'Karachi'),
(5, 'Islamabad'),
(6, 'Lahore'),
(7, 'Peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `name` varchar(51) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comnt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `name`, `email`, `comnt`) VALUES
(1, 'saboor', 'dan8@gmail.com', 'Marianna Ruhl was a special nurse, her treatment and care for me was far and above normal.'),
(2, 'saad', 'cstyle29@gmail.com', ' They worked well as a team.'),
(3, 'ebaad', 'Jennifer@gmail.com', 'her treatment and care for me was far and above normal.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `number` int(20) NOT NULL,
  `message` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `email`, `topic`, `number`, `message`) VALUES
(8, 'ebaad', 'cstyle219@gmail.com', 'report', 2147483647, 'ok by'),
(9, 'saboor', 'au703517@gmail.com', 'survey', 301, 'fgh'),
(10, 'Azizullah', 'admin@gmail.com', 'patient', 301, 'covid'),
(11, 'saboor', 'sawooe@gmail.com', 'sdfsgdv sf', 344, 'dsgbvdzgvbzbdb');

-- --------------------------------------------------------

--
-- Table structure for table `dissease`
--

CREATE TABLE `dissease` (
  `Id` int(11) NOT NULL,
  `diss_name` varchar(50) NOT NULL,
  `doc_id_FK` int(11) NOT NULL,
  `prevention` varchar(500) NOT NULL,
  `care` varchar(250) NOT NULL,
  `since` varchar(50) NOT NULL,
  `diss_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dissease`
--

INSERT INTO `dissease` (`Id`, `diss_name`, `doc_id_FK`, `prevention`, `care`, `since`, `diss_img`) VALUES
(18, 'covid', 23, 'Coronaviruses are viruses that circulate among animals. Some coronaviruses can infect humans.', 'The first SARS-CoV originated in bats and was transmitted to humans via civet cats, while MERS-CoV emerged in humans through the intermediate host of camels. The precise way in which SARS-CoV-2 was transmitted from animals to humans is currently unkn', '1997', 'images/dissimages/Arenavirus.jpg'),
(19, 'Alkhurma haemorrhagic fever', 23, 'Alkhurma haemorrhagic fever is a viral haemorrhagic disease reported mainly in Saudi Arabia', 'The virus was isolated in 1994 from the blood of a butcher with a severe illness in Jeddah. ', '1997', 'images/dissimages/Alkhurma haemorrhagic fever.jpg'),
(20, 'Anthrax', 23, 'Anthrax is a zoonotic disease (could be transferred from animals to humans) caused by the spore-producing bacterium Bacillus anthracis. Reservoirs are grass-eating animals, ', 'Humans may acquire the infection after exposure to spores, and symptoms appear one to seven days (up to 60 days) later', '1820', 'images/dissimages/Anthrax.jpg'),
(21, 'Arenavirus infection', 23, 'Arenaviruses are enveloped viruses (about 120 nm diameter) with a bi-segmented negative strand RNA genome', 'the first virus of the Arenaviridae family, the Lymphocytic Choriomeningitis (LCM) virus, was isolated in North America ', '1830', 'images/dissimages/AIDS Acquired immunodeficiency syndrome.jpg'),
(22, 'Babesiosis', 19, 'Babesiosis is an illness caused by a parasite of the Babesia spp., which infects and destroys the red blood cells', 'While most infections pass by without symptoms, some people may become sick and present with flu-like symptoms like fever, chills, muscle ache, fatigue, as well as jaundice (yellowing of the skin due to a bile disorder', '1987', 'images/dissimages/Babesiosis.jpg'),
(23, 'Varicella (chickenpox)', 25, 'Varicella is caused by the varicella-zoster virus (VZV), which also causes shingles (herpes zoster). ', 'Clusters of spots appear over 3–5 days, mostly on the trunk of the body with some on the limbs', '2000', 'images/dissimages/Chickenpox (varicella).jpg'),
(24, 'Cowpox', 20, 'Cowpox is a skin disease caused by a virus belonging to the Orthopoxvirus genus. Sporadic human cases of cowpox have been reported in Europe, ', '. The disease in humans presents as localised lesions mainly on fingers, hands or the face, in the form of red blisters. The disease is self-limiting in immunocompetent persons. No specific treatment is available. There is no known evidence of human ', '', 'images/dissimages/Cowpox.jpg'),
(25, 'Dengue', 22, 'Dengue is a mosquito-borne viral disease ', 'The disease is transmitted by Aedes mosquitoes, which breed in the peridomestic environment. While most of the clinical cases present a febrile illness, severe forms including hemorrhagic fevers and shock with fatalities are reported.', '1800', 'images/dissimages/Dengue.jpg'),
(26, 'Diphtheria', 27, 'Diphtheria is a disease caused by bacteria Corynebacterium ', 'It can cause respiratory symptoms or non-respiratory forms that affect other parts of the body, including the skin', '1752', 'images/dissimages/Diphtheria.jpg'),
(27, 'Yellow fever', 26, 'Yellow fever (YF) is an African mosquito-borne infection ', '. In severe cases there may be spontaneous haemorrhage. Mortality of these clinical cases can be as high as 80%, on a par with Ebola, Marburg and other haemorrhagic viral infections', '1478', 'images/dissimages/Yellow fever.jpg'),
(28, 'Zika virus disease', 28, 'Zika is a flavivirus that is mainly transmitted by mosquitoes. Since ', 'Patients may also get conjunctivitis (also known as pink eye), as well as muscle and joint pain. Zika virus disease is normally a mild disease and 80 % of infected people do not develop symptoms ', '1632', 'images/dissimages/Zika virus disease.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `docach`
--

CREATE TABLE `docach` (
  `id` int(11) NOT NULL,
  `doc_id_FK` int(11) NOT NULL,
  `ach_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docach`
--

INSERT INTO `docach` (`id`, `doc_id_FK`, `ach_img`) VALUES
(3, 22, 'images/docachimages/4.png'),
(4, 23, 'images/docachimages/3.png'),
(6, 25, 'images/docachimages/1.png'),
(8, 27, 'images/docachimages/3.png'),
(9, 28, 'images/docachimages/4.png'),
(11, 23, 'images/docachimages/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `experiance` varchar(1000) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_id_FK` int(11) NOT NULL,
  `cat_id_FK` int(11) NOT NULL,
  `city_id_FK` int(11) NOT NULL,
  `doc_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `doc_name`, `experiance`, `contact`, `user_id_FK`, `cat_id_FK`, `city_id_FK`, `doc_img`) VALUES
(19, 'Dr Saleem mushtaq', ' Ph.D. in Computer Science from Duke University in 2005 and the BSc.', '312578941', 49, 22, 7, 'images/docimages/1.jpg'),
(20, 'Dr ZULFIQAR AHMED', ' doctor in Plymouth, Minnesota. He received his medical degree ', '4511214512', 52, 21, 5, 'images/docimages/3.jpg'),
(22, 'Dr MEHMOOD QURESHI', 'MD is skilled in all areas of gastroenterology  a special ', '545134452', 53, 15, 4, 'images/docimages/4.jpg'),
(23, 'Dr FAYYAZ SALONGI', 'Dr.FAYYAZ  is a vascular surgeon in KARACHI,PAKISTAN .', '86456512', 55, 16, 4, 'images/docimages/doctor2.png'),
(25, 'DR.FAREED KHAN', 'Dr. Fareed family medicine doctor in , New York', '86456512', 51, 20, 4, 'images/docimages/doctor8.png'),
(26, 'DR.FARHAN', 'Farhan is neruologist  Specialist , CA and has over 12 years of experience ', '045454453', 56, 16, 4, 'images/docimages/doctor9.jpg'),
(27, 'Dr NOOR AHMED', ' Noor medical oncologist and hematologist Professor the of Medicine .', '86456512', 54, 17, 4, 'images/docimages/doctor7.png'),
(28, 'Dr IQRA NOOR ', 'MBBS, MCPS (Dermatology)Acne Scar Treatment', '4123421321', 59, 17, 4, 'images/docimages/doctor4.png'),
(29, 'Dr SABA Saleem', 'Bachelors in Psychology, Masters in Clinical Psychology', '0346246641', 60, 23, 6, 'images/docimages/doctor3.png');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(42) NOT NULL,
  `locations` varchar(100) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `phone`, `email`, `locations`, `time`) VALUES
(1, 315253200, 'Care@gmail.com', 'North Main Street,Karachi.Pakistan', '08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medi_name` varchar(50) NOT NULL,
  `diss_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medi_name`, `diss_id_fk`) VALUES
(5, 'panadol', 18),
(6, 'Brufen', 19),
(7, 'BICHAT', 20),
(8, 'meningitis', 21),
(9, 'muscle ache', 22),
(10, 'varicella-zoster ', 23),
(11, 'civet', 24),
(12, 'ponstan forte', 25),
(13, 'nebrrol forte', 26),
(14, 'panadol extra', 27),
(15, 'parastamol', 28);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `patient_name` varchar(230) NOT NULL,
  `medical_history` varchar(1000) NOT NULL,
  `d_o_b` date NOT NULL,
  `contact` varchar(12) NOT NULL,
  `user_id_Fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `patient_name`, `medical_history`, `d_o_b`, `contact`, `user_id_Fk`) VALUES
(22, 'asaad', 'cough', '2023-02-24', '86456512', 50),
(23, 'afraz', 'liver', '2023-02-23', '015213165', 61),
(24, 'anam', 'heart', '2023-03-02', '5945641', 64),
(25, ' anam', 'heart', '2023-02-23', '5945641', 65),
(26, '', '', '0000-00-00', '', 67);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `user_name`, `topic`, `message`) VALUES
(12, 'shoaib', 'doctors', 'I wish to thank each angel that was together with me in my stay in the website'),
(13, 'shakeel', 'experience', 'I would highly recommend LGH to friends and family. I had absolutely the best experience possible.'),
(14, 'umer', 'website', ' i have no complaints about this stay. ALL website management was friendly. '),
(15, 'manal', 'dissease', 'Thank you to all for the wonderful experience.');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `role_name`) VALUES
(11, 'Admin'),
(12, 'User'),
(13, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(60) NOT NULL,
  `text` varchar(100) NOT NULL,
  `service_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `text`, `service_img`) VALUES
(1, 'child care', 'At Olive Crest, we believe every child, young adult, and family is worthy of love, safety. Fostering', 'images/serviceimages/service-1.jpg'),
(2, 'Personal care', 'Patient care is Pakistan\'s leading home nursing service provider out of hospital wherever ', 'images/serviceimages/service-2.jpg'),
(4, 'Best Doctors', 'Get complete and verified details of the best hospitals in Pakistan.', 'images/serviceimages/service-4.jpg'),
(5, 'Disease Research ', 'The Center for Global Infectious Disease Research translates basic biology into new ways to diagnose', 'images/serviceimages/service-8.jpg'),
(6, '24/7 online', '24/7 Online Video Consultations – Ring a Doctor. With over a 100 doctors, Ring a Doctor is a platfor', 'images/serviceimages/img-2.jpg'),
(7, 'Appointment online', 'Search for doctors, specialities, treatments, hospitals and services.', 'images/serviceimages/img-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `user_name`, `password`, `role_id_FK`) VALUES
(48, 'Saboor', 'khan', 11),
(49, 'Saleem', '0321', 13),
(50, 'asaad', 'asad', 12),
(51, 'fareed', 'fareed', 13),
(52, 'zulfiqar', 'zulfi', 13),
(53, 'mehmood', 'meh', 13),
(54, 'noor', 'nor', 13),
(55, 'fayaz', 'fay', 13),
(56, 'farhan', '1245', 13),
(59, 'Iqra', 'iqra', 13),
(60, 'Saba', 'saba', 13),
(61, 'umer', 'ume', 12),
(62, 'basit', 'bas', 13),
(63, 'ali', 'all', 13),
(64, 'afzal', 'khan', 12),
(65, 'basir', 'basir', 12),
(67, 'sawood', 'opo', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `doc_id_FK` (`doc_id_FK`),
  ADD KEY `patient_id_FK` (`user_id_FK`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dissease`
--
ALTER TABLE `dissease`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `dissease_ibfk_1` (`doc_id_FK`);

--
-- Indexes for table `docach`
--
ALTER TABLE `docach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_id_FK` (`doc_id_FK`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `docter_ibfk_1` (`cat_id_FK`),
  ADD KEY `user_id_FK` (`user_id_FK`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diss_id_fk` (`diss_id_fk`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_id_Fk` (`user_id_Fk`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `role_id_FK` (`role_id_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dissease`
--
ALTER TABLE `dissease`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `docach`
--
ALTER TABLE `docach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`doc_id_FK`) REFERENCES `doctor` (`Id`),
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`Id`);

--
-- Constraints for table `dissease`
--
ALTER TABLE `dissease`
  ADD CONSTRAINT `dissease_ibfk_1` FOREIGN KEY (`doc_id_FK`) REFERENCES `doctor` (`Id`);

--
-- Constraints for table `docach`
--
ALTER TABLE `docach`
  ADD CONSTRAINT `docach_ibfk_1` FOREIGN KEY (`doc_id_FK`) REFERENCES `doctor` (`Id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`diss_id_fk`) REFERENCES `dissease` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
