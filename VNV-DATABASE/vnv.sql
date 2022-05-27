-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 12:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `acc_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `acc_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `acc_short_desc` varchar(255) NOT NULL,
  `acc_desc` varchar(255) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `isinwarrenty` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = True 0= False',
  `warrenty_period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`acc_id`, `brand_id`, `category_id`, `acc_name`, `image`, `acc_short_desc`, `acc_desc`, `offer_price`, `selling_price`, `isinwarrenty`, `warrenty_period`) VALUES
(1, 1, 1, 'Simpex 888 Tripod (Supports upto 500', 'Simpex 888 Tripod (Supports upto 500.jpeg', ' Tripod Weight: 1.8 Kg  Vertical Leg Locks  Geared Elevator ', 'Leg Diameter: 26.8 mm  Leg Brace with Lock  View all item details', '3890.00', '4500.00', 1, '1 Year'),
(2, 2, 1, 'Simpex 333 Aluminium Standard Tripod White', 'Simpex 333 Tripod White.jpg', 'Max Load Capacity (in kg):Upto 3 Â Pan Head:3way', 'Simpex 333 Tripod, Features:Aluminum Oval Section, Tripod Set and Carrying Case', '999.00', '1200.00', 1, '1 Year'),
(3, 1, 1, 'Simpex 1055 Monopod - Black', 'Simpex 1055 Monopod - Black.jpg', 'Product Type : Monopod  Features : Lightweight Structure', '\r\nIN THE BOX\r\nSales Package	Main Unit, 1 x Carrying Bag\r\nGENERAL\r\nBrand	Simpex\r\nModel	1055\r\nType	Monopod\r\nColor	Black\r\nSPECIFICATION\r\nLoad Capacity	3000 g\r\nMaterial	Aluminium Alloy Material\r\nADDITIONAL FEATURES\r\nOther Features	Lightweight Structure', '1790.00', '2000.00', 1, '1 Year'),
(4, 1, 1, 'Simpex 552 Black Monopod', 'Simpex 552 Black Monopod.jpg', ' Max Load Capacity (in kg):10  Warranty (in months):0', '\r\nGeneral\r\nModel Name	552\r\nColor	Black\r\nProduct Weight (in gm)	1005\r\nSupplied Accessories	1 Monopod, 1 Carry Case\r\nProduct Length (in cm)	9\r\nProduct Breath (in cm)	9\r\nProduct Height (in cm)	68\r\nFeatures\r\nMaximum Height (in cm)	1685\r\nMinimum Height (in cm)', '4135.00', '4500.00', 1, '1 Year'),
(5, 1, 1, 'Simpex 522 Flash Camera Accessories', 'Simpex 522 Flash Camera Accessories.jpg', ' Product Type : Flash  Features : Power Up: Increase the po....', 'Power up: increase the power output of the flash; power down: decreases the power output of the flash', '2680.00', '3000.00', 1, '1 Year'),
(6, 1, 1, 'Simpex 621RX', 'Simpex 621RX.jpeg', ' Model Name:621RX  Color:Black  Mode:Auto & Manual  ', 'Box Content:Manual, Flash, Remote for Flash, 1 Flash Mini Stand  Recycling Time:NA', '3988.00', '4000.00', 1, '1 Year'),
(7, 2, 1, 'Canon LP-E6 Original Battery for EOS 5D Mark II, 5', 'Canon Original Battery.jpg', 'Product Type : Battery  Compact and light weighted  Output Voltage: 7.2 V  High Capacity replacement Lithium-Ion Battery  Capacity: 1800 mAh', 'Canon Camera EOS 5D Mark II, Battery Part Number- LP-E6. Replacement Lithium-Ion Battery is a rechargeable 1800 mAh, 7.2 Volts Camera battery. It is compatible to Canon EOS 5D Mark II, Canon EOS 5D Mark III, Canon EOS 6D, Canon EOS 7D, Canon EOS 60D, Cano', '1259.00', '1500.00', 1, '1 Year'),
(8, 2, 1, 'Sony NP-FW50 InfoLITHIUM Rechargeable Battery', 'Sony NP-FW50 InfoLITHIUM Rechargeable Battery.jpg', 'Provides Extended Movie/Photo Shooting  57 grams Weight  Compact  7.7Wh Capacity', 'Sony NP-FW50 InfoLITHIUM Rechargeable Battery', '1192.00', '1400.00', 1, '1 Year'),
(9, 2, 1, 'Nikon EN-EL 14 A Rechargeable Li-ion battery for N', 'Nikon Rechargeable battery.jpg', 'product Type : Battery Charger', 'Product Type : Battery Charger	SUPC: SDL907001699', '1093.00', '1400.00', 1, '1 Year'),
(10, 3, 1, 'Nikon MH-24 Camera Battery Charge', 'Nikon MH-24 Camera Battery Charge.jpg', 'Model Name:MH-24 Â Compatible Battery Type:9V', 'General\r\nCompatible Battery Type	9V\r\nIn the box	1 Battery 1 Charger\r\nOriginal/Replacement Copy	Original', '750.00', '1000.00', 1, '1 Year'),
(11, 3, 1, 'Canon LC-E8E Battery Charger (4520B001AA)', 'Canon LC-E8E Battery Charger (4520B001AA).jpg', ' Power Requirements: 110-240VAC 50/60 Hz  Charger for LP-E8 Batteries  Power Requirements: 110-240VAC ', '\r\nSpecification\r\nBrand	Canon\r\nModel	LC-E8E\r\nPower Requirements	110-240VAC 50/60 Hz\r\nWarranty	1-Year Canon India Warranty and Free Transit Insurance\r\n', '875.00', '1200.00', 1, '1 Year'),
(12, 3, 1, 'Sony NP-BN1 Camera Battery Charger', 'Sony NP-BN1 Camera Battery Charger.jpg', 'Model Name:NP-BN1  Compatible Battery Type:9V  No of Charging Slots:1', 'Compatible Battery Type	9V\r\nNo of Charging Slots	1\r\nPower Input	3.7\r\nCharging Time	3-5 hours\r\nIn the box	1 Combo Battery Charger\r\nProduct Length (in cm)	5\r\nProduct Weight (in gm)	15\r\nProduct Breath (in cm)	4\r\nProduct Height (in cm)	5', '1399.00', '1500.00', 1, '1 Year'),
(13, 2, 1, 'Digitek Speedlite DFL 003 Macro', 'Digitek Speedlite.jpeg', 'Model Name:Speedlite DFL 003  Type:Macro  Color:Black  ', 'Mode:Manual Â Recycling Time:0.1 - 5 s', '1999.00', '2400.00', 1, '1 Year'),
(14, 2, 1, 'Sonia Porta Light For Video and Continuous Lightin', 'Sonia Porta Light.jpg', ' Product Type : Flashlights', 'Bad lighting will not spoil your pictures anymore with this Sonia Porta Light. It can be used for outdoor photo shoot purposes. These lighting systems are needed for fashion photography, photo shoots, modelling assignment, studios and many others. The cla', '1992.00', '2200.00', 1, '1 Year'),
(15, 2, 1, 'Digitek LED Light 204C', 'Digitek LED Light 204C.jpg', 'Model Name:LED Light 204C  Color:Black  Mode:Manual  Box Content:LED Light, Mounting Hot Shoe,Color Filter And Lithium Ion Battery With Charger  Other Features:Average Life Span 30000h, Lumens 1440, Illumination 1 M:400 Lux, Color Temperature 3200 K-5500 ', 'Digitek led video light LED-D204C', '2296.00', '2500.00', 1, '1 Year'),
(16, 2, 2, 'Canon EF-S 18-55 AND 55-250 IS II AND STM LENS UV ', 'Canon EF-S 18-55.webp', ' Model Name:EF-S 18-55 AND 55-250 IS II AND STM LENS  Type:UV Filter  Filter Diameter (in mm):58  Box Content:1', '58Mm UV Filter For EF-S 18-55 IS II , STM , EF-S 55-250 IS II , STM LENS', '999.00', '1300.00', 1, '1 Year'),
(17, 1, 2, 'DigiTek 67 MM UV Filter (Black)', 'DigiTek 67 MM UV Filter (Black).jpg', 'Product Type : Filters', 'Noted for offering you maximum light transmission and crystal clear imaging experience, the filter easily cuts all the UV rays without affecting colour balance. It is made from high index optical glass and ensures that you get the best results under all t', '395.00', '500.00', 0, 'none'),
(18, 1, 1, 'Digitek Digitek / Simpex Mini Flash Bouncer', 'Digitek Digitek  Simpex Mini Flash Bouncer.jpg', 'Model Name:Digitek / Simpex Mini Flash Bouncer  Color:White  Box Content:1 pieces Mini Bouncer', 'Digitek / Simpex Flash Mini Bouncer', '349.00', '500.00', 0, 'none'),
(19, 1, 1, 'Sonia Flash Diffuser Lambency Diffuser', 'Sonia Flash Diffuser Lambency Diffuser.jpg', 'roduct Type : Flash Diffuser', 'Contents Sonia Lambency Diffuser - 1 no Dome - 4 no Features It is a set of diffuser with four domes white, yelow, orange, & blue along with a diffuser cloth,', '559.00', '799.00', 0, 'none'),
(20, 3, 1, 'Sonia Monopod Pro-111 with Self Standing Legs & Ba', 'Sonia Monopod.jpg', ' Product Type : Monopod', 'Brand	Sonia\r\nModel	Pro111-3L-BH\r\nType	Monopod\r\nColour	Black & Silver\r\n\r\n\r\n', '449.00', '500.00', 0, 'none'),
(21, 3, 1, 'Sonia Ph 660 Tripod (Load Capacity 3000 g)', 'Sonia Ph 660 Tripod (Load Capacity 3000 g).jpg', ' High Grade Aluminium Body  3-Way Pan Head  Quick Flip Leg Locks  Quick Release Plate  Geared Elevator', 'Popular brand Sonia brings to you this utilitarian Sonia Ph 660 Tripod that allows users to hold the camera in a proper position and click pictures. \r\n', '1965.00', '2200.00', 1, '1 Year'),
(22, 3, 1, 'Scratchgard Screen Protector for Nikon D3300', 'Scratchgard Screen Protector for Nikon D3300.jpg', 'Compatible DSLR Models:Nikon D3300  Other Features:This Is Plastic PET FILM Scratchgard,  Box Content:1 Scratchgard & 1 Micro Fiber Cloth  Type:Camera Scratchgard  Product Weight (in gm):0.1', 'Protect your Camera display against scratches and dust with this screen guard. It can also protect your screen from fingerprints so that your display stays clean and offers crystal clarity while viewing.', '500.00', '600.00', 0, 'none'),
(23, 3, 1, 'SHOPEE Nikon DK-21 DK 21 EyeCup Eyepiece replaceme', 'SHOPEE Nikon EyeCup.jpg', 'Model:Nikon DK-21 DK 21 EyeCup Eyepiece replacement  Compatible DSLR Models:Camera a', 'Replacement for your Lost Eyepiece Suitable For NIKON D7000 D300 D200 D70s D80 D90 D100 D50 The Eyecup provides cushioning around the cameras eyepiece,and is especially useful to eyeglass wearers Made of rubber for soft eye contact. You can even view it w', '359.00', '500.00', 0, 'none'),
(24, 3, 1, 'Nikon Shoulder Camera Bag (Black)', 'Nikon Shoulder Camera Bag (Black).jpg', 'No. of Compartments:3  Bottle Pocket:Yes  Features:Hand Strap', 'A photographers ideal friend a photographers most prized possession is undoubtedly the camera. But daily usage and extreme weather can cause damage to your precious device.', '1050.00', '1400.00', 1, '1 Year'),
(25, 3, 1, 'Canon 200D Camera Bag (Black)', 'Canon 200D Camera Bag (Black).jpg', 'Ideal for DSLR/SLR Cameras  Adjustable Shoulder Strap  Zippered Compartments  Padded Interiors  Unisex Design', 'If you are looking for a DSLR camera bag which is not only affordable but also protective and stylish, Canon 1200D SLR Camera Bag is the one you should go for.', '599.00', '900.00', 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES
(1, 'nikon', 'nikon'),
(2, 'Canon', 'Canon'),
(3, 'Sony', 'Sony'),
(4, 'Fujifilm', 'Fujifilm');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `camera_id` int(11) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `camera_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `isinwarrenty` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = True 0 = False',
  `warrenty_period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`camera_id`, `brand_id`, `camera_name`, `image`, `short_desc`, `long_desc`, `description`, `offer_price`, `selling_price`, `isinwarrenty`, `warrenty_period`) VALUES
(3, 2, 'EOS R (RF24-105mm f/4L IS USM)', 'EOS R.jpg', '30.3MP Full-Frame CMOS Sensor', '0.05 secs focusing time', '5,655 selectable focus positions', '174990.00', '184990.00', 1, '2 Year'),
(4, 2, 'EOS 6D Mark II Kit (EF24-105mm f/4L IS II USM)', 'EOS 6D Mark II.jpg', '26.2MP Full-frame CMOS Sensor', 'Dual Pixel CMOS AF', '45-point all cross-type AF; up to 6.5fps continuous shooting', '171900.00', '180000.00', 1, '2 Year'),
(5, 2, 'EOS 5D Mark IV Kit (EF 24 - 105 IS II USM)', 'EOS 5D.jpg', '30.4MP Full-frame CMOS Sensor', 'Dual Pixel CMOS AF', '4K Movie Shooting (25 / 30p) with 4K Frame Grab', '236890.00', '300000.00', 1, '2 Year'),
(6, 2, 'EOS 200D Kit (EF-S18-55 IS STM & EF-S55-250 IS STM', 'EOS 200D.jpg', 'Compact and lightweight design', 'Quick focusing in Live View mode with Dual Pixel CMOS AF', 'Vari-angle touchscreen LCD', '50460.00', '55000.00', 1, '2 Year'),
(7, 2, 'EOS 77D Kit (EF-S18-135 IS USM)', 'EOS 77D.jpg', 'Dual Pixel CMOS AF', 'Wi-Fi / NFC and Bluetooth Low Energy', 'Up to 45-point All Cross-type AF', '72990.00', '75000.00', 1, '2 Year'),
(8, 3, 'A7R III 35 mm full-frame camera ', 'A7R III 35 mm.jpg', '42.4 MP 35 mm full-frame Exmor Râ„¢ CMOS and enhanced processing system', 'Standard ISO 100-32000 range (upper limit expandable to 1024007)', 'Fast Hybrid AF with 399-point focal-plane phase-detection AF and 425-point contrast-detection AF', '248490.00', '300000.00', 1, '2 Year'),
(9, 3, 'A9 mirrorless camera with CMOS sensor', 'A9 mirrorless camera.jpg', '24.2-megapixel 35 mm full-frame stacked CMOS sensor with integral memory', 'BIONZ Xâ„¢ image processing engine\r\n\r\nHigh-speed continuous shooting of up to 20fps with AF/AE tracking', '693-point wide-area phase-detection AF\r\n\r\nFive-axis image stabilisation with effectiveness equivalent to 5.0-stop slower shutter speed', '308490.00', '350000.00', 1, '2 Year'),
(10, 3, 'A7S II E-mount Camera', 'A7S II E-mount.jpg', '35 mm full frame (35.6 x 23.8 mm), ExmorÂ® CMOS sensor\r\n\r\nBIONZ Xâ„¢ image processing engine', '4K movie recording featuring full pixel readout without pixel binning', '5-axis optical image stabilisation minimises blur\r\n', '188490.00', '200000.00', 1, '2 Year'),
(11, 3, 'A7 III with 35 mm full-frame image', 'A7 III.jpg', '24.2MP7 35 mm full-frame CMOS sensor with back-illuminated design', 'Sensitivity range up to ISO 51200 (expandable to ISO 50-204800 for stills)', 'High-speed continuous shooting of up to 10fps4 with AF/AE tracking4K HDR5 6 movie recording capability', '158490.00', '168000.00', 1, '2 Year'),
(12, 1, 'D3500', 'D3500.jpg', 'AF-P DX NIKKOR 18-55mm f/3.5-5.6G VR + AF-P DX NIKKOR 70-300mm f/4.5-6.3G ED VR)', 'Price quoted is MRP inclusive of all taxes for one unit of the product.Includes 16GB(Class 10) SD Card + Carry Case', 'Offer lens included in D-ZOOM kit retail pack, no additional lens offer applicable. D-ZOOM kit is available in black color only.', '29450.00', '32000.00', 1, '2 Year'),
(13, 1, 'D850', 'D850.jpg', '(with 24-120mm VR Lens)', 'Includes 64 GB (Class 10) SD card', 'Price quoted is MRP inclusive of all taxes for one unit of the product.', '234950.00', '244500.00', 1, '2 Year'),
(14, 1, 'D7500', 'D7500.jpg', 'Rs.106250.00 Offer Price:Rs.98950.00 (with AF-S NIKKOR 18-140mm VR lens', 'Rs.106250.00 Offer Price:Rs.98950.00 (with AF-S NIKKOR 18-105mm VR lens)', 'Price quoted is MRP inclusive of all taxes for one unit of the product.Includes 16GB(Class 10) SD card & Carry CaseDX D-SLR Kit + Lens Combo Offer!!', '88950.00', '100000.00', 1, '2 Year'),
(15, 4, 'FUJIFILM GFX 50R', 'FUJIFILM GFX 50R.jpg', 'Rangefinder style\r\nCompact and lightweight body', 'Weather resistant structure\r\n43.8x32.9mm 51.4MP CMOS medium format sensor', 'X-Processor Pro\r\n2.36M-dot touchscreen LCD back panel\r\nFUJINON GF Lens', '70000.00', '75000.00', 0, 'none'),
(16, 4, 'FUJIFILM GFX 50S', 'FUJIFILM GFX 50S.jpg', 'New Firmware Ver.3.10\r\n43.8x32.9mm 51.4MP CMOS medium format sensor\r\nX-Processor Pro', 'Detachable 3.69M-dot EVF\r\n2.36M-dot touchscreen LCD back panel\r\nCompact and lightweight body', 'Weather resistant structure\r\nFUJINON GF Lens', '399999.00', '410000.00', 1, '2 Year'),
(17, 2, 'Canon EOS M5 Mirrorless Camera', 'canon m50.jpg', 'Canon EOS M5 EF-M 15-45mm f/3.5-6.3 IS STM Lens Kit', '24.2 megapixel APS-C CMOS Sensor (Dual Pixel CMOS AF)', 'DIGIC 7 Image Processor, supporting ISO 100 - 25600', '557200.00', '577200.00', 1, '2 Year');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_desc`) VALUES
(1, 'Camera', 'camera.jpg', 'Cameras'),
(2, 'Lenses', 'lenses.jpg', 'Lenses'),
(3, 'Accessories', 'accessories.jpg', 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `name`, `email`, `subject`, `content`) VALUES
(1, 'Nikunj Koladiya', 'vnv@gmail.com', 'for camera', 'i want some details about canon mac 4'),
(2, 'varsidh mangroliya ', 'v@gmail.com', 'purchase camera', 'i want to purchase camera');

-- --------------------------------------------------------

--
-- Table structure for table `lenses`
--

CREATE TABLE `lenses` (
  `lens_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `filtersize` varchar(50) NOT NULL,
  `aperture` varchar(55) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `isinwarrenty` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = True 0 = False',
  `warrenty_period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lenses`
--

INSERT INTO `lenses` (`lens_id`, `brand_id`, `image`, `model`, `filtersize`, `aperture`, `short_desc`, `long_desc`, `description`, `offer_price`, `selling_price`, `isinwarrenty`, `warrenty_period`) VALUES
(2, 3, 'Sony SEL70200GM.jpeg', 'SEL70200GM', '77 mm', '37', 'Lens Mount: E-mount\r\nDesigned For: Sony DSLR\r\nFocal Length: 70 - 200 mm\r\nLens Type: Telephoto\r\nZoom Lens', '35 mm Equivalent Focal Length: 105-300 mm, Aperture Blades: 11', 'Teleconverter Compatibility (X1.4),Teleconverter Compatibility (X2.0), Angle of View (35 mm): 34 - -12Degree 30, Angle of View (APS-C): 23 - -8Degree, Built-in Image Stabilization (SteadyShot), Circular Aperture, Format: 35 mm Full-frame', '183990.00', '199990.00', 1, '2 Year'),
(5, 2, 'pngwave.png', 'EF 3028 CAT', '66 mm', '35', 'Zooming&nbsp; Quality', 'Naturalized', 'ok', '12345.00', '11343.00', 1, '2 year'),
(6, 2, 'IMGBIN_canon-ef-lens-mount-canon-ef-100mm-lens-canon-eos-canon-ef-100mm-f-2-8l-macro-is-usm-canon-ef-100mm-f-2-8-macro-usm-png_20eRQzAP.png', 'Ef 100mm canon lens', '77mm', '35', 'zooming natural', 'zooming natural<br>', 'zooming natural<br>', '1253.00', '1153.00', 1, '2 year');

-- --------------------------------------------------------

--
-- Table structure for table `order_meta`
--

CREATE TABLE `order_meta` (
  `order_id` int(11) NOT NULL,
  `meta_table` varchar(20) NOT NULL,
  `meta_key` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `meta_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `payment_method` varchar(55) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_meta`
--

INSERT INTO `order_meta` (`order_id`, `meta_table`, `meta_key`, `image`, `product_name`, `price`, `meta_id`, `user_id`, `qty`, `total`, `payment_method`, `order_date`) VALUES
(8, 'camera', 'camera_id', 'D3500.jpg', 'D3500', '29450.00', 12, 1, 1, '29450.00', 'maestro card', '2020-08-04 11:49:31'),
(10, 'camera', 'camera_id', 'FUJIFILM GFX 50R.jpg', 'FUJIFILM GFX 50R', '70000.00', 15, 1, 1, '70000.00', 'processing', '2020-08-04 16:27:57'),
(13, 'camera', 'camera_id', 'canon m50.jpg', 'Canon EOS M5 Mirrorless Camera', '557200.00', 17, 3, 1, '557200.00', 'processing', '2020-08-09 10:49:15'),
(20, 'accessories', 'acc_id', 'Canon 200D Camera Bag (Black).jpg', 'Canon 200D Camera Bag (Black)', '599.00', 25, 6, 2, '1198.00', 'cash on delivery', '2020-08-12 19:13:53'),
(21, 'camera', 'camera_id', '', '', '0.00', 16, 0, 0, '0.00', '', '2021-02-11 16:59:04'),
(22, 'camera', 'camera_id', 'canon m50.jpg', 'Canon EOS M5 Mirrorless Camera', '557200.00', 17, 4, 1, '557200.00', 'visa debit card', '2021-02-11 17:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `content`) VALUES
(3, 'Terms & Conditions', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"line-height: 115%;\" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\"><font color=\"#000000\">&nbsp; &nbsp; &nbsp; &nbsp;By using vnv.com, the\r\nuser has unconditionally accepted the terms and conditions of use as given here\r\nunder and/or elsewhere in the site. In order to use the vnv.com, the user have\r\naccepted the following terms and conditions given below. We reserve the right\r\nto add, delete, alter or modify these terms and conditions at any time. </font><o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"line-height: 115%;\" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\"><font color=\"#000000\"><br></font></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-align: justify; text-indent: -0.25in;\"></p><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><ul><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>1.&nbsp;&nbsp;</b>The user may carefully\r\nread all the information on products and services as provided in relevant\r\nsections.</div></span></li><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>2.</b>&nbsp; vnv.com acts only as a\r\nfacilitator to facilitate transactions between user and vendors through\r\nzellanto.com. We are not responsible for any loses, expenses, quality of\r\nproducts or services, damages and / or taxes incurred by users in the use of\r\nfacility.</div></span></li><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>3.</b>&nbsp; vnv will not be\r\nresponsible for any damage suffered by users from use of the services on vnv.com.\r\nThis without limitation includes loss of revenue or data resulting from delays,\r\nnon-deliveries, missed deliveries, or service interruptions as may occur\r\nbecause of any act / omission of the vendor. This disclaimer of liability also\r\napplies to any damages or injury caused by any failure of performance,\r\nnegligence, defect, deletion, error, omission, interruption, delay in operation\r\nor transmission, computer virus, communication line failure, theft or\r\ndestruction or unauthorized access to, alteration of, or use of record, whether\r\nfor breach of contract, tortuous behavior, or under any other cause of\r\naction.&nbsp;</div></span></li><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>4.</b>&nbsp; All products are\r\nchecked, screened and assured by the vendors to ensure that the products are of\r\nthe standard, quality, design, composition, style or model that they are\r\nrepresentative of.</div></span></li><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>5.</b>&nbsp; The prices and\r\navailability of products are subject to change without prior notice at the sole\r\ndiscretion of vnv.</div></span></li><li><span style=\"font-size: medium; text-align: justify;\"><div style=\"text-align: justify;\"><b>6.</b>&nbsp; vnv.com will not be\r\nliable for any type or kind of credit card fraud. The liability to use a card\r\nfraudulently will be on the user and the ones to shall be exclusively on the\r\nuser. The user must exclusively use his/her own card on the site.&nbsp;</div></span></li></ul></div></span><!--[if !supportLists]--><p></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(4, 'Privacy Policy', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">We\r\nconsider your security important, and we need you to know how we Collect, use,\r\nshare and ensure your data. Data We Collect Data You Give Us We get and may\r\nstore any data you enter on our site.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\"><br></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">For\r\nexample, we collect data from you when you put in a request, make a record,\r\ncall us with an inquiry, make a Wish List, compose an audit, or utilize any of\r\nour administrations. The data we collect from you Includes things like: Your\r\nname, Your mailing information, Your email address, Your phone number,\r\nDemographic and lifestyle data.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\"><br></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">Data\r\nfrom Other Sources We may likewise get data about you from different sources,\r\nincluding third parties that help us update, extend and investigate our records\r\nand identify new customer. Automatic Information In the same way as other\r\ndifferent sites, we additionally collect data through cookies and other\r\nrobotized implies. Cookies are usually utilized by sites to spare information\r\non your PC. The data we gather from cookies may incorporate your IP address,\r\nprogram and gadget qualities, alluding URLs, and a record of your\r\ncommunications with our sites. We use cookies to make a progressively\r\ncustomized shopping knowledge on our sites. This cookies may encourage the\r\nfitting of promotions and offers to you, at times regarding interest-based\r\nadvertising. To help us to comprehend and improve our connections with guests\r\nto our sites, we may allow web examination suppliers to collect data on our\r\nsites utilizing computerized devices like cookies. We additionally may impart\r\nindividual data to those providers. We may have comparable game plans with\r\nintrigue based sponsors. Intrigue based publicizing is shrouded in more detail\r\nunderneath. Location Information Our site may collect certain data, for\r\nexample, the kind of gadget you are utilizing or your particular area to enable\r\nyour delivery to cost.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">HOW\r\nWE USE THE INFORMATION WE COLLECT We utilize the data we collect for things\r\nlike: Fulfilling requests and demands for items, services or data Processing\r\nreturns, trades and layaway demands Tracking and confirming on the web orders\r\nDelivering items Managing our reward zone program Marketing and publicizing\r\nitems and services Conducting exploration and investigation Establishing and\r\ndealing with your records with us Communicating things like extraordinary\r\noccasions, sweepstakes, advancements and overviews Identifying you on our sites\r\nand fitting commercials and offers to you dependent on your cooperations on the\r\nweb.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\"><br></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">Facilitating\r\nconnections with VNV and others, for example, empowering you to email a link to\r\na friend Operating, assessing and enhancing our business Information Retention\r\nWe will hold your data for whatever length of time that your record is dynamic\r\nor as expected to give you benefits, follow our lawful commitments, resolve\r\ndebate, and uphold our assentions.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\"><br></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">VNV\r\ndoes not move, lease or exchange your own data to outsiders. We may share your\r\ndata to third parties to perform benefits for our sake, for example, Fulfilling\r\norders Delivering bundles Sending VNV showcasing correspondences Fulfilling\r\nmembership services Conducting research and investigation Providing chat\r\nfunction In some cases we might be required to share individual data because of\r\na control, court request or subpoena. We may also share data when we trust it\r\nis important to conform to the law. We may also share data to react to an\r\nadministration ask for or when we trust revelation is fundamental or fitting to\r\nensure the rights, property or security of VNV, our customers, or others; to\r\navoid damage or misfortune; or regarding an examination of suspected or genuine\r\nunlawful movement.<o:p></o:p></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\"><br></font></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in; line-height: 15.55pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"3\" color=\"#000000\">PRIVACY\r\nPOLICY UPDATES We may need to refresh our Privacy Policy as&nbsp;<b>VNV&nbsp;</b>and\r\nour customers develop and evolve.&nbsp;<b>HAVE QUESTIONS?</b>&nbsp;In the event\r\nthat you have any inquiries concerning our Privacy Policy, we all do our best\r\nto answer them. It would be ideal if you get in touch with us at&nbsp;<b>info@vnv.com</b></font></p>'),
(5, 'Shipping Policy', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">We deliver to all and any postal location around the world. Dispatch\r\norganizations dont deliver to P.O.Box address, so we ask for you to provide\r\nfull road address with stick code/postal code. If its not too much trouble\r\ntake note of that private shipments to USA and some different nations will be\r\nleft at door on the off chance that somebody isnt there to get the parcel or\r\nnobody answers the door ringer. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Our dispatch operators USPS, DHL, FEDEX, TNT, UPS, DTDC, SpeedPost and\r\netc will not be able to provide sign confirmation of delivery made in such type\r\nof cases. To guarantee that no debate emerge because of this, mercifully ensure\r\nsomebody is there to get the parcel when messenger delivery is endeavored. No\r\ndelivery are made on Saturdays and Sundays in many countries where 5 day work\r\nculture. In numerous Islamic nations Fridays are ordinary off days. A few times\r\nwe can endeavor to arrange delivery on Saturdays likewise on some additional\r\nexpense on case to case premise, if possible. further delivery are commonly\r\nmade during ordinary working long periods of messenger organizations and these\r\nshift from country to country. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Kindly note that there are no shipments produced using the store on\r\nSundays and open occasions as our coordinations accomplice, does not make any\r\npick-ups on those days. Calculating shipping cost Delivery cost isnt worked in\r\nevery thing cost. You get the advantage of decreased delivering cost on each\r\nextra thing. Reasonable and straightforward transportation rates. It would be\r\nideal if you additionally take note of that the transportation rates are weight\r\nbased. The heaviness of any item can be found on its detail page. To coordinate\r\nthe arrangements of the delivery organizations we use, all loads will be\r\ngathered together to the following 500 grams. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Worldwide transporting and dealing with rates depends on the span of\r\nyour request: the bigger you arrange, the lower the rate. Free shipping to any\r\naddress in India. Delivery gifts to India We take extraordinary pride in having\r\nthe capacity to offer FREE SHIPPING to any deliver in India to our customers\r\nwith family and companions back home. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">To guarantee the fastest affirmed delivery on all requests to India, it\r\nwould be ideal if you make sure to incorporate the COMPLETE postal location\r\nwith the right PIN CODE. We cant be in charge of postal postponements coming\r\nabout because of fragmented location postings. Travel times We send all\r\nrequests by quickest conceivable air courier services like USPS, DHL, TNT,\r\nDTDC, SpeedPost and so on and they convey inside 48-72 hours crosswise over\r\nUSA, Europe and every single Major city of Middle and Far East. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">In the event that you are searching for exchange shipping choices, less\r\nexpensive and slower dispatching alternatives can be proposed. On ask for, we\r\ncan likewise make uncommon statements for delivery if the stock request sum is\r\nhuge. if its not too much trouble compose on support@vnv.com for more\r\nsubtleties.&nbsp;</font></span></p>'),
(6, 'Return And Refund Policy', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Quality items that are evaluated at a legit esteem and supported by the\r\nmost ideal customer benefit. Our clients will remain our concentration later\r\non. We will deal with every client, each one in turn, each time we get\r\nnotification from the person in question. After all everything is about\r\nEmotions and Expressions We are continually anticipating give you the best of\r\nitems at the best of costs and with the best of expectations that we proceed\r\nwith our relations till time dwells with your affection for things Indian! In\r\nany case if because of some unanticipated circumstance you require the arrival\r\nof the item then the accompanying terms apply for a commonly agreed return. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><b><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Return and Refund Terms and Conditions:<o:p></o:p></font></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">If it is not too much trouble take note of that we are not tolerating\r\nany profits for stitched garments, including Stitched Salwar Suits, Stitched\r\nSarees with custom pullover. We just acknowledge returns for unstitched items.\r\nAnytime of time the discounts wont surpass the genuine estimation of the\r\nmerchandise. We will issue 70% refund of the item cost. ( 30% will be Order\r\nProcessing and Payment Gateway and other repeating Charges.) We want refund the\r\ncustom obligations, shipping cost, charges, if applicable. If there should be\r\nan occurrence of requests with free dispatching, shipping cost would be\r\ndeducted from the refund vnv.com want be in charge of restore the cash which\r\nyou have paid for delivery to send the bundle back. customer need to exposed\r\nthe delivery cost while restoring the unstitched or stitched items regardless. vnv.com\r\nwant exposed any benevolent return shipping cost. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Refurns would not be acknowledged for hand crafted/stitched dress,\r\nincluding readymade stitched sarees or sarees stitched with custom blouse. Any\r\nprotest concerning the harm or stains ought to be accounted for to us inside 24\r\nto 48 hrs of the receipt of the items. We may request advanced image of the\r\nequivalent so as to audit the equivalent. In the event of item return, we will\r\nissued discount once we got the item back at our office. Refund will set aside\r\nopportunity to reflect in clients record around 4 to 5 working days. We dont\r\nacknowledge any profits following 7 days of accepting the shipment While we are\r\nfocused on keeping up a durable association with our clients by giving them 100%\r\nfulfillment, we cant acknowledge returns or trade of redid items. Return asks\r\nfor in regards to strains or harm flaws should be recorded inside 24 to 48\r\nhours of item conveyance. In these cases you will likewise need to send a\r\npicture of the item, an advanced duplicate of the receipt of the item. We dont\r\ndrop the put request after 24hrs. In the event that you need to drop the\r\nrequest after 24hrs you should pay 20% bank installment handling charges from\r\nyour total order amount. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">We do not provide any cancellation if order is in processing and products\r\nare received.. We dont give any refunds to the equivalent. Cancellation will\r\nbe credited as VNV Store Credit or Coupons. On the off chance that you have any\r\ninquiry concerning our arrival approaches, we all do our best to answer them.\r\nIf you dont mind get in touch with us at support@vnv.com for more data about\r\nreturns and cancellations. Shading(color) and Description Discrepancy The\r\nclothing depiction on the site contains subtleties and item details which are\r\ninexact qualities, nearest to the real world. While we endeavor to be exact in\r\ndisplaying hues there still might be minor varieties as a result of the light\r\nand settings amid photography and furthermore the shading settings and\r\nproperties of different screens. Different subtleties like weight, work\r\nsubtleties and size may change marginally also. Henceforth the customer should\r\nremember the slight variety while putting in the request on the web.\r\nZellanto.com trusts that each customer putting in a request is totally mindful\r\nof these minor varieties that may happen in as for the real shade of the outfit\r\ngot. <o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><span style=\"line-height: 115%; font-family: \" segoe=\"\" ui\",=\"\" sans-serif;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);=\"\" background-image:=\"\" initial;=\"\" background-position:=\"\" background-size:=\"\" background-repeat:=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" initial;\"=\"\"><font size=\"3\">Embellishment related Issues Attire comprising of embellishments like\r\nbeads and sequences as a rule tends to fall off. Indeed, even with impeccable\r\ndealing with, care and bundling this cant be totally kept away from. During\r\nphysical travel, some of them may come free, consequently on the off chance\r\nthat you see such circumstances emerge when you unload or wear your clothing,\r\ndont stress as it is a typical issue.</font></span></p>'),
(7, 'About Us', '<div style=\"text-align: justify;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-indent: 0.5in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><font size=\"3\">Quality matters a lot to the greatest degree\r\npossible.&nbsp;<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><o:p><font size=\"3\">&nbsp;</font></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-indent: 0.5in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><font size=\"3\">Yes, we are always more driven to deliver\r\nexceptionally personalized treatment to our existing as well as new customers.\r\nNot only you get highly fancy, lucrative as well as awesome women apparel and\r\nclothing for every occasion, but also a love our customers want at VNV.&nbsp;<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><o:p><font size=\"3\">&nbsp;</font></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-indent: 0.5in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><font size=\"3\">Moreover, the merchandise you order will quite\r\nfairly be exclusive in nature and of highest quality by far. The best part is\r\nWe have awesome products that every woman would love to take on. We constantly\r\nupdate our clothing list with new arrivals, labeling special offers and\r\ndiscounts, so customers can make sure to fulfill their wish of wearing heavenly\r\nbeautiful apparels quite often. Being an E-commerce Women Apparel &amp;\r\nClothing Online Portal, we deal across world-wide, making sure customers can\r\nshop online quickly, at anytime from anywhere. The final note Since we are into\r\nvarious women apparel, it becomes our supreme duty to provide our customers\r\nwith world-class and high-quality products at seductively affordable prices.\r\nAnd, we firmly stand on our terms and principles at large.&nbsp;<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><o:p><font size=\"3\">&nbsp;</font></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-indent: 0.5in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-family: &quot;Segoe UI&quot;, sans-serif; color: rgb(33, 37, 41);\"><font size=\"3\">At VNV, you get superior value; sophisticated\r\nwomen wear solutions, completely in-line to satisfying your expectation at par.\r\nTherefore, do shop and also write us how you have been in terms to your online\r\nshopping experience!<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoNormal\"><o:p><font size=\"3\">&nbsp;</font></o:p></p></div>');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `code`, `email`) VALUES
(13, '15f255b1b67821', 'dakoladiya@gmail.com'),
(15, '15f255c9366d99', 'koladiyabansi@gmail.com'),
(17, '15f255def3e1b6', 'nikunjkoladiya22@gmail.com'),
(18, '15f255e5412c9b', 'nikunjkoladiya22@gmail.com'),
(19, '15f255e678706d', 'varsidhmangroliya@gmail.com'),
(20, '15f255f11761cc', 'varsidhmangroliya@gmail.com'),
(22, '15f2938bc9680a', 'nikunjkoladiya22@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_master`
--

CREATE TABLE `shipping_master` (
  `s_id` int(11) NOT NULL,
  `shipping_method` varchar(50) NOT NULL,
  `shipping_charge` decimal(10,2) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = True 0 = False'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_subtitle` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `btn_text` varchar(50) NOT NULL,
  `btn_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_subtitle`, `image`, `btn_text`, `btn_url`) VALUES
(1, 'CAMERAS', 'Canon M50 Mirrorless Camera Body with Single Lens ', '1 (1).png', 'Shop Camera', 'none'),
(2, 'LENSES', 'Nikon AF-S DX NIKKOR 18-200mm f/3.5-5.6G ED VR II ', '1 (3).png', 'Shop Lens', 'none'),
(3, 'ACCESSORIES', 'Digitek DTR 550 LW Tripod  (Black, Supports Up to ', '1 (2).png', 'Shop Accessories', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = True 0 = False',
  `verification_id` int(11) NOT NULL,
  `verification_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `lname`, `email`, `password`, `mobile`, `gender`, `city`, `is_admin`, `verification_id`, `verification_status`) VALUES
(4, 'varsidh', 'mangroliya', 'varsidhmangroliya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9998843823', 'Male', 'ahemdabad', 1, 811157265, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_add1` varchar(55) NOT NULL,
  `shipping_add2` varchar(55) NOT NULL,
  `shipping_state` varchar(55) NOT NULL,
  `shipping_city` varchar(55) NOT NULL,
  `shipping_pincode` varchar(55) NOT NULL,
  `payment_method` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `u_id`, `order_id`, `shipping_add1`, `shipping_add2`, `shipping_state`, `shipping_city`, `shipping_pincode`, `payment_method`) VALUES
(1, 1, 1, 'dhanlaxmi society', '18', 'gujarat', 'surat', '395006', 'visa debit card'),
(2, 1, 2, 'C-9,matruchhaya scoiety,', '2', 'Gujarat', 'surat', '395006', 'paypal'),
(3, 3, 3, '1', 'shubham', 'surat', 'varachha', '123567', 'cash on delivery'),
(4, 4, 4, 'wtrwr', 'ertwrt', 'wrtwrtr', 'werfwe', '12345', 'maestro card'),
(5, 1, 5, '11', '11', '11', '11', '11', 'paypal'),
(6, 1, 6, '1', 'shubham', 'surat', 'varachha', '123567', 'cash on delivery'),
(7, 1, 7, 'C-9,matruchhaya scoiety,', '2', 'Gujarat', 'surat', '395006', 'visa debit card'),
(8, 1, 8, 'wtrwr', 'ertwrt', 'wrtwrtr', 'werfwe', '12345', 'maestro card'),
(9, 1, 9, '1', 'shubham', 'surat', 'varachha', '123567', 'visa debit card'),
(10, 4, 12, 'C-9,matruchhaya scoiety,', '2', 'Gujarat', 'surat', '395006', 'master card'),
(11, 4, 14, '12, matruchhaya', 'matruchhaya', 'up', 'bihar', '123456', 'visa debit card'),
(12, 4, 17, 'C-9,matruchhaya scoiety,, 2', '2', 'Gujarat', 'surat', '395006', 'master card'),
(13, 4, 18, '12, matruchhaya', '', 'gujrat``', 'surat', '123456', 'maestro card'),
(14, 6, 20, '12, matruchhaya, matruchhaya', '', 'up', 'bihar', '123456', 'cash on delivery'),
(15, 4, 22, 'htfc', '', 'kkb', 'kk', '395010', 'visa debit card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `brand_id` (`brand_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`camera_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lenses`
--
ALTER TABLE `lenses`
  ADD PRIMARY KEY (`lens_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `order_meta`
--
ALTER TABLE `order_meta`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_master`
--
ALTER TABLE `shipping_master`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `camera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lenses`
--
ALTER TABLE `lenses`
  MODIFY `lens_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_meta`
--
ALTER TABLE `order_meta`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `shipping_master`
--
ALTER TABLE `shipping_master`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accessories_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `camera`
--
ALTER TABLE `camera`
  ADD CONSTRAINT `camera_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lenses`
--
ALTER TABLE `lenses`
  ADD CONSTRAINT `lenses_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
