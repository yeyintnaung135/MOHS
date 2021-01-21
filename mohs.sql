-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 05:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohs`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_dx` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(222) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_one_patient`
--

CREATE TABLE `type_one_patient` (
  `id` int(222) NOT NULL,
  `name_english` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `name_burmese` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `father_name` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `education_level` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `bmi` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `waist_circumference` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `mid_upper_arm_circumference` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `body_temperature` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `pulse_rate` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `respiration_rate` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `systolic_blood_pressure` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `dlastolic_blood_pressure` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `dka` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hyperglycemia` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `polyuria` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `polydipsia` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `weight_loss` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `insulin_regime` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `initial_hba1c` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `initial_rbs` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `first_adimission` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_name` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `reason_for_adimission` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_transfer_to_transitional_clinic` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_visit` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `last_visit_date` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `center` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `height_follow_up` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `weight_follow_up` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `rbs` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hba1c` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `insulin_regime_dose` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `insulin_regime_dose_change_date` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `tft` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hba1c_cmd` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `urine_albumin_creation_ratio` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `qr_url` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `upated_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_two_follow_up`
--

CREATE TABLE `type_two_follow_up` (
  `id` int(222) NOT NULL,
  `hba1c` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hb` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `cr` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `uacr` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `chol` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `ldl` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hdl` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `tg` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `ascvd` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `tsh` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `u_a` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `retinopathy` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `neuropathy` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `pad` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `he` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_two_patient_register`
--

CREATE TABLE `type_two_patient_register` (
  `id` int(222) NOT NULL,
  `name` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_dx` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `duration_of_dm` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `family_ho` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hypertension` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `dyslipidaemia` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `bmi_weight` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `bmi_height` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `tuberculosis` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `stroke` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `ihd_mi` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `nephropathy` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `neuropathy` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `dm_foot` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `surgical_history` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hbv` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `hcv` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `rvi` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `smoking` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `alcohol` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `betal_chewing` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `oad` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `insulin` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `traditional` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `native` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `anti_ht` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `anti_lipid` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `others_drug_his` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `dental_problem` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `diet_control` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `physical_activity` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `steroid_use` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `admin_id` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_one_patient`
--
ALTER TABLE `type_one_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_two_follow_up`
--
ALTER TABLE `type_two_follow_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_two_patient_register`
--
ALTER TABLE `type_two_patient_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_one_patient`
--
ALTER TABLE `type_one_patient`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_two_follow_up`
--
ALTER TABLE `type_two_follow_up`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type_two_patient_register`
--
ALTER TABLE `type_two_patient_register`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
