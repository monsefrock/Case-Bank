-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 07:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_text` varchar(1000) NOT NULL,
  `case_m_cat` varchar(200) DEFAULT NULL,
  `case_s_cat` varchar(200) DEFAULT NULL,
  `case_type` varchar(200) NOT NULL,
  `case_difficulty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_text`, `case_m_cat`, `case_s_cat`, `case_type`, `case_difficulty`) VALUES
(1, '﻿يرى هذا المجلس أن الحرب الروسية على أوكرانيا مبررة.', 'سياسة', 'دولي', 'قيم', 'متوسط'),
(2, 'يدعم هذا المجلس عدم استقبال المهاجرين غير المؤهلين مهنيا.', 'مجتمع', 'دولي', 'مساندة', 'متقدم'),
(3, 'يعتقد هذا المجلس أن الأمن القومي أهم من الخصوصية الفردية.', 'حقوق وحريات', '', 'قيم', 'متقدم'),
(4, 'يرى هذا المجلس أن الديمقراطية الغربية قد فشلت.', 'سياسة', 'دولي', 'قيم', 'متقدم'),
(5, 'يدعم هذا المجلس منح الفلسطينيين جنسيات أجنبية.', 'مجتمع', 'سياسة', 'مساندة', 'متقدم'),
(6, 'يرى هذا المجلس أن المنظمات النسوية الحديثة تدافع عن مفاهيم مغلوطة.', 'ثقافة', 'حقوق وحريات', 'قيم', 'متقدم'),
(7, 'يرى هذا المجلس أنّه على تركيا التخلي عن فكرة الانضمام للاتحاد الأوروبي.', 'سياسة', 'دولي', 'قيم', 'متقدم'),
(8, 'يعتقد هذا المجلس أن نظام الرصيد الاجتماعي المطبق في الصين مبرر.', 'مجتمع', 'حقوق وحريات', 'قيم', 'متقدم'),
(9, 'سيقوم هذا المجلس بمنع الوجبات السريعة في المدارس.', 'صحة', '', 'سياسات', 'عادي'),
(10, 'سيمنع هذا المجلس استيراد المنتجات الأجنبية.', 'اقتصاد', '', 'سياسات', 'متوسط'),
(11, 'سيستحدث هذا المجلس امتحانا سنيا عاما لمزاولة المهن الطبية.', 'تعليم', '', 'سياسات', 'متوسط'),
(12, 'سيضع هذا المجلس حدًا أعلى لأُجور لاعبي كرة القدم.', 'حقوق وحريات', 'رياضة', 'سياسات', 'متوسط'),
(13, 'سيشرّع هذا المجلس قوانين خاصة بالأجواء الشتوية.', '', '', 'سياسات', ''),
(14, 'سيحدد هذا المجل استخدام الفرد من الماء.', 'حقوق وحريات', 'مجتمع', 'سياسات', 'متقدم'),
(15, 'سيقوم هذا المجلس برفع الحصانة عن المسؤولين في الدولة.', 'سياسة', 'دولي', 'سياسات', 'متوسط'),
(16, 'سيلغي هذا المجلس التأمين الصحي الحكومي عن المدخنين.', 'صحة', 'اقتصاد', 'سياسات', 'متوسط'),
(17, 'سيقوم هذا المجلس بتقنين الإجهاض.', 'مجتمع', 'صحة', 'سياسات', 'متقدم'),
(18, 'سيقوم هذا المجلس برفع الميزانية المخصصة لدعم الصحة النفسية.', 'اقتصاد', 'صحة', 'سياسات', 'متقدم'),
(19, 'سيقتل هذا المجلس الطفل هتلر.', 'فلسفة', 'دولي', 'قيم', 'متقدم'),
(20, 'يندم هذا المجلس على ثورات الربيع العربي.', 'سياسة', 'دولي', 'ندم وتفضيل', 'متوسط'),
(21, 'سيقوم هذا المجلس بالسماح للطلبة بتقييم المعلمين.', 'تعليم', '', 'سياسات', 'عادي'),
(22, 'سيمنح هذا المجلس مكافآت مادية للطلبة المتفوقين.', 'مجتمع', 'تعليم', 'سياسات', 'عادي'),
(23, 'يعتقد هذا المجلس بأن التعليم الخاص أفضل من الحكومي.', 'تعليم', '', 'قيم', 'عادي'),
(24, 'يعتقد هذا المجلس بأن اعتصامات المعلمين ظاهرة سلبية.', 'تعليم', '', 'قيم', 'متوسط'),
(25, 'سيقوم هذا المجلس بجعل الطلبة يشاركون في عملية التدريس الجامعي.', 'تعليم', '', 'سياسات', 'متوسط'),
(26, 'يرى هذا المجلس أن عدم دخول الأحزاب السياسية في الانتخابات التشريعية يعطل العمل البرلماني.', 'سياسة', '', 'قيم', 'متقدم'),
(27, 'سيقوم هذا المجلس بإلغاء جميع الجامعات الحكومية في ليبيا والاكتفاء بأربعة جامعات فقط.', 'تعليم', '', 'سياسات', 'متوسط'),
(28, 'يؤمن هذا المجلس بأن تدهور اللغة العربية سببه اللهجات.', 'ثقافة', '', 'قيم', 'متوسط'),
(29, 'سيعاقب هذا المجلس المؤسسات التي توفر المياه في عبوات بلاستيكية.', 'بيئة', '', 'سياسات', 'متقدم'),
(30, 'سيطبق هذا المجلس مناعة القطيع.', 'صحة', '', 'سياسات', 'متقدم'),
(31, 'سيجعل هذا المجلس التطعيم إجباريا.', 'صحة', '', 'سياسات', 'متوسط'),
(32, 'يندم هذا المجلس على الثورة الفرنسية.', 'سياسة', 'دولي', 'ندم وتفضيل', 'متقدم'),
(33, 'يؤمن هذا المجلس بأن أكبر خطر يهدد العالم هي الصين.', 'سياسة', '', 'قيم', 'متقدم'),
(34, 'سيقوم هذا المجلس بإغلاق جميع حدائق الحيوان.', 'حقوق وحريات', '', 'سياسات', 'متقدم'),
(35, 'سيتجه هذا المجلس لتحديث الموروث الشعبي.', 'ثقافة', 'مجتمع', 'مساندة', 'متقدم'),
(36, 'سيقوم هذا المجلس برفع مرتبات المعلمين والأطباء.', 'صحة', 'اقتصاد', 'سياسات', 'متوسط'),
(37, 'سيمارس هذا المجلس الأولوية في التبرع بالأعضاء لمن يمارس أسلوب صحي سليم.', 'صحة', 'حقوق وحريات', 'سياسات', 'متقدم'),
(38, 'سيمنح هذا المجلس الحصانة لقادة الأنظمة الديكتاتورية مقابل تخليهم عن السلطة.', 'سياسة', '', 'سياسات', 'متقدم'),
(39, 'يندم هذا المجلس على جعل وسائل التواصل الاجتماعي مصدرًا أساسيا للأخبار.', 'فلسفة', 'مجتمع', 'ندم وتفضيل', 'متقدم'),
(40, 'سيحجب هذا المجلس تطبيق تيك توك.', 'حقوق وحريات', 'فلسفة', 'سياسات', 'متقدم'),
(41, 'يعتقد هذا المجلس أنه ينبغي تحديد الراتب الشهري بناء على الإنتاجية.', 'اقتصاد', '', 'قيم', 'متوسط'),
(42, 'سيجبر هذا المجلس المقبلين على الزواج على الالتحاق بدورات تأهيلية.', 'مجتمع', 'حقوق وحريات', 'سياسات', 'متقدم'),
(43, 'يعتقد هذا المجلس أن إنهاء العنف الذي تتعرض له النساء هو واجب الدولة.', 'مجتمع', 'حقوق وحريات', 'قيم', 'متقدم'),
(44, 'سيوحد هذا المجلس الزي المدرسي.', 'مجتمع', 'حقوق وحريات', 'سياسات', 'عادي'),
(45, 'سيلغي هذا المجلس عقوبة الإعدام.', 'حقوق وحريات', 'مجتمع', 'سياسات', 'متوسط'),
(46, 'سيسمح هذا المجلس لأصحاب الأمراض المستعصية باختيار القتل الرحيم.', 'صحة', 'فلسفة', 'سياسات', 'متقدم'),
(47, 'سيقنن هذا المجلس التعديل الجيني للبشر.', 'صحة', 'علوم', 'سياسات', 'متقدم'),
(48, 'يؤمن هذا المجلس بأن الواجبات المنزلية مضيعة للوقت.', '', '', 'قيم', 'عادي'),
(49, 'سيشرعن هذا المجلس بيع الأعضاء البشرية.', 'صحة', 'علوم', 'سياسات', 'متقدم'),
(50, 'يفضل هذا المجلس الاشتراكية على الرأسمالية.', 'اقتصاد', 'سياسة', 'مساندة', 'متوسط'),
(51, 'يعتقد هذا المجلس بأننا نرى العالم كما تريدنا أمريكا أن نراه.', 'سياسة', '', 'قيم', 'متقدم'),
(52, 'سيغرّم هذا المجلس من يدخّن في الأماكن العامة.', 'حقوق وحريات', 'صحة', 'سياسات', 'عادي'),
(53, 'سيجعل هذا المجلس التصويت إجباريا.', 'حقوق وحريات', 'سياسة', 'سياسات', 'متوسط'),
(54, 'سيسمح هذا المجلس للسجناء بالتصويت.', 'حقوق وحريات', 'مجتمع', 'سياسات', 'متوسط'),
(55, 'يؤمن هذا المجلس بأن الأمم المتحدة منظمة فاشلة.', 'سياسة', '', 'قيم', 'متقدم'),
(56, 'سيتبنى هذا المجلس أسلوب حمية غذائية نباتية.', 'صحة', 'بيئة', 'سياسات', 'متقدم'),
(57, 'يؤمن هذا المجلس بأن الجيوش العربية هي من بقايا الاستعمار.', 'سياسة', 'دولي', 'قيم', 'متقدم'),
(58, 'يعتقد هذا المجلس بأن الوصول للانترنت هو حق من حقوق الإنسان.', 'حقوق وحريات', '', 'قيم', 'متقدم'),
(59, 'سيفرض هذا المجلس عقوبات على الدول ذات أسلحة الدمار الشامل.', 'سياسة', 'دولي', 'سياسات', 'متقدم'),
(60, 'سيُنشئ هذا المجلس موقع تواصل اجتماعي جديد مفتوح المصدر.', '', '', 'سياسات', ''),
(61, 'يعتقد هذا المجلس بأن العالم الغربي يعاني من ازدواجية في المعايير.', 'سياسة', 'مجتمع', 'قيم', 'متقدم'),
(62, 'سيقوم هذا المجلس بحل جامعة الدول العربية.', 'سياسة', '', 'سياسات', 'متوسط'),
(63, 'سيمنع هذا المجلس تدريس اللغة الإنجليزية في المرحلة الابتدائية.', 'تعليم', '', 'سياسات', 'عادي'),
(64, 'يؤمن هذا المجلس بأن الفساد ملح التنمية.', 'فلسفة', '', 'قيم', 'متقدم'),
(65, 'سيقوم هذا المجلس بإغلاق شركة نتفلكس.', 'مجتمع', 'ثقافة', 'سياسات', 'متقدم'),
(66, 'يرى هذا المجلس بأن أضرار مشاهدة الآنمي أكثر من فوائده.', 'مجتمع', 'ثقافة', 'قيم', 'متوسط'),
(67, 'يناصر هذا المجلس الدعوات لمقاطعة المنتجات الفرنسية.', 'اقتصاد', 'سياسة', 'مساندة', 'متوسط'),
(68, 'يرى هذا المجلس بأن نشاط \"السوسيال\" في السويد مبرر.', 'مجتمع', 'حقوق وحريات', 'قيم', 'متقدم'),
(69, 'يندم هذا المجلس على المقارنة بين الفصل العنصري بين جنوب أفريقيا وفلسطين المحتلة.', '', '', 'ندم وتفضيل', ''),
(70, 'يؤمن هذا المجلس أن مكافحة اﻹتجار بالبشر باتت مسؤولية المجتمع.', 'حقوق وحريات', 'مجتمع', 'قيم', 'متقدم'),
(71, 'يرى هذا المجلس أن على الشباب أخذ زمام المبادرة في حل مشكلة البطالة عوضاً عن لوم الحكومات.', 'مجتمع', 'اقتصاد', 'قيم', 'متقدم'),
(72, 'يعتقد هذا المجلس أن التحرش بالنساء سببه المرأة.', 'مجتمع', '', 'قيم', 'متقدم'),
(73, 'يؤمن هذا المجلس أن أكل اللحوم أمر غير أخلاقي.', 'صحة', 'بيئة', 'قيم', 'متقدم'),
(74, 'سيمنع هذا المجلس استهلاك اللحوم.', 'صحة', 'بيئة', 'سياسات', 'متقدم'),
(75, 'يؤمن هذا المجلس أن على الشبكات الإعلامية إعلان توجههم السياسي علناً.', 'سياسة', 'مجتمع', 'قيم', 'متقدم'),
(76, 'يؤمن هذا المجلس أن الحضور للعمل لا علاقة له بإنتاجية الموظف.', '', '', 'قيم', 'متقدم'),
(77, 'يؤمن هذا المجلس أن التشجير في الدول الصحراوية يجب أن يكون إلزاميا.', 'بيئة', '', 'قيم', 'متقدم'),
(78, 'يؤمن هذا المجلس أن هوية الفرد يجب ألا ترتبط بالدولة.', 'فلسفة', '', 'قيم', 'متقدم'),
(79, 'يؤمن هذا المجلس أن النمو الاقتصادي أهم من حماية البيئة.', 'اقتصاد', 'بيئة', 'قيم', 'عادي'),
(80, 'يؤمن هذا المجلس أن المقاومة المسلحة أضرت بالقضية الفلسطينية.', 'سياسة', '', 'قيم', 'متقدم'),
(81, 'يؤمن هذا المجلس أن إسقاط نظام الأسد هو الحل للازمة السورية.', 'سياسة', '', 'قيم', 'متقدم'),
(82, 'سيجعل هذا المجلس دراسة الطب باللغة العربية.', 'تعليم', '', 'سياسات', 'متوسط'),
(83, 'سيقوم هذا المجلس بتجريم ظاهرة التسول.', 'حقوق وحريات', 'مجتمع', 'سياسات', 'متوسط'),
(84, 'سيقوم هذا المجلس بتعليق قوانين حقوق العمال أثناء الأزمات الاقتصادية.', 'اقتصاد', 'حقوق وحريات', 'سياسات', 'متوسط'),
(85, 'يندم هذا المجلس على ظهور الأطفال كنجوم في مواقع التواصل الاجتماعي.', 'مجتمع', '', 'ندم وتفضيل', 'متقدم'),
(86, 'سيرفع هذا المجلس الدعم عن المحروقات في ليبيا.', 'اقتصاد', '', 'سياسات', 'متوسط'),
(87, 'يرى هذا المجلس أن التدخل السعودي في اليمن مبرر.', 'سياسة', '', 'قيم', 'متقدم'),
(88, 'يرى هذا المجلس بأن القوة الاقتصادية أهم من القوة العسكرية.', 'فلسفة', 'اقتصاد', 'قيم', 'متوسط'),
(89, 'يرى هذا المجلس أن محاربة التغير المناخي هو من واجب الدول المتقدمة فقط.', 'بيئة', '', 'قيم', 'متقدم'),
(90, 'يرى هذا المجلس بأن النظام الفدرالي هو الأنسب للدول ذات المساحات الشاسعة.', 'سياسة', '', 'قيم', 'متقدم'),
(91, 'يرى هذا المجلس بأن دولة الشيشان تخضع للاحتلال من روسيا.', 'سياسة', '', 'قيم', 'متقدم'),
(92, 'يندم هذا المجلس على حل الاتحاد السوفياتي.', 'سياسة', '', 'ندم وتفضيل', 'متقدم'),
(93, 'يفضّل هذا المجلس عالما منزوع السلاح.', 'سياسة', '', 'ندم وتفضيل', 'متقدم'),
(94, 'سيفرض هذا المجلس ضريبة على استخدام مواقع التواصل الاجتماعي.', 'حقوق وحريات', '', 'سياسات', 'متوسط'),
(95, 'يؤمن هذا المجلس بأن المهرجانات فن هابط.', '', '', 'قيم', ''),
(96, 'سيقوم هذا المجلس بتقليص السنوات الدراسية.', 'تعليم', '', 'سياسات', 'متوسط'),
(97, 'سيقنن هذا المجلس تعاطي المخدرات.', 'صحة', '', 'سياسات', 'متوسط'),
(98, 'يؤمن هذا المجلس بضرورة تقليص عدد سكان الأرض.', 'فلسفة', 'دولي', 'قيم', 'متقدم'),
(99, 'سيسخّر هذا المجلس الموارد المادية للبحث عن حياة في كوكب آخر.', 'فلسفة', '', 'سياسات', 'متقدم'),
(100, 'سيغلق هذا المجلس وكالة ناسا.', '', '', 'سياسات', 'متقدم'),
(101, 'يرى هذا المجلس بأن الاحداث الرياضية الدولية يجب أن تظل غير مسيسة', 'رياضة', 'دولي', 'قيم', 'متوسط'),
(102, 'يدعم هذا المجلس احترافية المنظمات غير الربحية.', '', '', 'مساندة', ''),
(103, 'سيحظر هذا المجلس كل الأبحاث الإضافية في تحوير الجينات', 'صحة', 'علوم', 'سياسات', 'متقدم'),
(104, 'يندم هذا المجلس على استعمال الاستفتاءات الشعبية كوسيلة لاتخاذ قرارات سياسية.', 'سياسة', 'مجتمع', 'ندم وتفضيل', 'متوسط'),
(105, 'سيجعل هذا المجلس التصويت إجبارياً.', 'سياسة', 'حقوق وحريات', 'سياسات', 'متوسط'),
(106, 'سيغلق هذا المجلس الأكاديمية العسكرية.', '', '', 'سياسات', ''),
(107, 'يدعم هذا المجلس حق النسيان على شبكات الانترنت.', '', '', 'مساندة', ''),
(108, 'يؤمن هذا المجلس أن على الحكومة تأميم جميع الأراضي والمباني.', '', '', 'قيم', ''),
(109, 'يفضل هذا المجلس عالماً لا يقوم فيه الناس بتعمّد إظهار فضائل أعمالهم. (إظهار فضائل الأعمال هنا هي محاولة الشخص لأن يظهر للآخرين عمداً بأنه إنسان جيد من خلال نشر أفعال يعتقد بأنها ستلاقي استحسانهم).', 'فلسفة', 'ثقافة', 'ندم وتفضيل', 'متقدم'),
(110, 'يأسف هذا المجلس على توقعات المجتمع للأفراد بالدخول إلى تخصصات جامعية مرموقة.', 'فلسفة', '', 'ندم وتفضيل', 'متقدم'),
(111, 'يؤمن هذا المجلس أن على الدول النامية حظر شراء الأراضي من قبل الأشخاص والشركات الأجنبية.', 'حقوق وحريات', 'اقتصاد', 'قيم', 'متقدم'),
(112, 'يؤمن هذا المجلس بأن الوصول إلى الانترنت هو حق من حقوق الانسان.', 'حقوق وحريات', '', 'قيم', 'متقدم'),
(113, 'سيعفوا هذا المجلس عن الفقراء المدانين بجرائم سرقة.', 'مجتمع', '', 'سياسات', 'متوسط'),
(114, 'هذا المجلس، كوالد لديه الإمكانيات المالية للقيام بذلك، لن يرسل طفله إلى مدرسة خاصة.', 'تعليم', '', 'خاصة', 'متوسط'),
(115, 'يؤمن هذا المجلس أن على الدول عدم استخدام شركات عسكرية خاصة في الحروب.', 'سياسة', 'دولي', 'قيم', 'متوسط'),
(116, 'يفضل هذا المجلس أن تعطى المنح الدراسية بناءاً على الحاجة المادية فقط بدلاً عن التميز الاكاديمي.', 'تعليم', 'مجتمع', 'ندم وتفضيل', 'متوسط'),
(117, 'يؤمن هذا المجلس بأن الديمقراطية خذلتنا', 'سياسة', 'دولي', 'قيم', 'متقدم'),
(118, 'يدعم هذا المجلس الديمقراطية المباشرة.', 'سياسة', '', 'مساندة', 'متقدم'),
(119, 'سيُلغي هذا المجلس سنوات المدارس الابتدائية والثانوية التي تجمع الأطفال على أساس العمر، وبدلاً من ذلك تصنفهم حسب الكفاءة والذكاء.', 'تعليم', 'مجتمع', 'سياسات', 'متوسط'),
(120, 'يندم هذا المجلس على سردية أن العمل الشاق يؤدي إلى نجاحات مادية.', 'فلسفة', '', 'ندم وتفضيل', 'متقدم'),
(121, 'يندم هذا المجلس على صعود التيك توك.', 'فلسفة', 'مجتمع', 'ندم وتفضيل', 'متقدم'),
(122, 'يؤمن هذا المجلس بأن للمدارس الحق في معاقبة التنمر الإلكتروني الذي يحدث خارج المدرسة.', 'مجتمع', 'حقوق وحريات', 'قيم', 'متقدم'),
(123, 'يندم هذا المجلس على صعود \"المؤثرين\" على وسائل التواصل الاجتماعي.', 'فلسفة', 'مجتمع', 'ندم وتفضيل', 'متقدم'),
(124, 'يفضل هذا المجلس العمل عن بعد على بيئة العمل التقليدية.', 'فلسفة', '', 'قيم', 'متوسط'),
(125, 'يندم هذا المجلس على التوجه الذي يجعلنا نتعاطف مع الشخصيات الشريرة في الإعلام والأفلام (على سبيل المثال:  The Joker, Maleficent, Breaking Bad, La Casa de Papel etc.)', 'فلسفة', '', 'ندم وتفضيل', 'متقدم'),
(126, 'يعتقد هذا المجلس أن العقوبات الاقتصادية فعالة في إجبار الدول الأجنبية على الالتزام بالمعايير الدولية لحقوق الإنسان.', 'اقتصاد', 'دولي', 'قيم', 'متوسط'),
(127, 'هذا المجلس، كإنسان عادي، سيترك استعمال وسائل التواصل الاجتماعي.', 'فلسفة', '', 'خاصة', 'متقدم'),
(128, 'يدعم هذا المجلس الدول التي تقدم جنسيتها بناءاً على القدرات الرياضية.', 'رياضة', '', 'مساندة', 'متقدم'),
(129, 'يدعم هذا المجلس الدول التي تقدم جنسيتها بناءاً على الهبات المالية أو الاستثمار.', 'مجتمع', 'اقتصاد', 'مساندة', 'متقدم'),
(130, 'سيمنع هذا المجلس الأكلات السريعة في المدارس', 'صحة', '', 'سياسات', 'عادي'),
(131, 'سيجعل هذا المجلس العمل التطوعي إلزامياً للدخول للجامعة', 'مجتمع', 'حقوق وحريات', 'سياسات', 'متوسط'),
(132, 'سيجعل هذا المجلس تقييم المعلمين بيد الطلبة', 'تعليم', '', 'سياسات', 'متوسط'),
(133, 'يؤمن هذا المجلس بان المهارات الحياتية، كالطبخ مثلاً، يجب أن تعلّم في المدارس.', 'تعليم', '', 'قيم', 'متوسط'),
(134, 'سيلغي هذا المجلس حدائق الحيوانات', 'بيئة', 'فلسفة', 'سياسات', 'متقدم'),
(135, 'سيفرض هذا المجلس على الوالدين أخذ حصص تربوية قبل إنجابهم لطفلهم الاول.', 'مجتمع', 'حقوق وحريات', 'سياسات', 'متقدم'),
(136, 'يؤمن هذا المجلس بانه من الأفضل أن تكون لطيفاً على أن تكون صادقاً.', 'فلسفة', '', 'قيم', 'متقدم'),
(137, 'سيحظر هذا المجلس التجارب العلمية على الحيوانات.', 'حقوق وحريات', 'علوم', 'سياسات', 'متقدم'),
(138, 'يندم هذا المجلس على صعود المؤثرين في مواقع التواصل الاجتماعي.', 'فلسفة', 'مجتمع', 'ندم وتفضيل', 'متقدم'),
(139, 'يدين هذا المجلس أؤلائك الذين لا يبلغون عن جرائم العنصرية.', 'مجتمع', '', 'مساندة', 'متوسط'),
(140, 'يؤمن هذا المجلس بأن حرية التعبير يجب أن تكون مطلقة.', 'حقوق وحريات', 'مجتمع', 'قيم', 'متوسط'),
(141, 'يرى هذا المجلس بأن الإزدهار أهم من الحرية.', 'حقوق وحريات', 'سياسة', 'قيم', 'متوسط'),
(142, 'سيمنع هذا المجلس التدخين في الاماكن العامة', 'حقوق وحريات', 'مجتمع', 'سياسات', 'عادي'),
(143, 'من منظور إيران، سينزع هذا المجلس برنامجه النووي', 'سياسة', 'دولي', 'خاصة', 'متقدم'),
(144, 'بصفته أحد الوالدين لطفل مهاجر، سيربي هذا المجلس طفله حصريًا بلغته الأم (لغة أقلّية وليست لغة الدولة المهاجر إليها). ', 'مجتمع', 'ثقافة', 'خاصة', 'متقدم'),
(145, 'سيمنع هذا المجلس الشركات الربحية من استخدام القضايا الإجتماعية والسياسية في التسويق', 'حقوق وحريات', 'مجتمع', 'سياسات', 'متوسط'),
(146, 'سيجعل هذا المجلس الخبرة العملية معيارا اولا للتوظيف عوضا عن الشهادات العلمية', 'تعليم', '', 'سياسات', 'متوسط'),
(147, 'سيسلب هذا المجلس حق الاعتصام من المعلمين', 'حقوق وحريات', '', 'سياسات', 'متوسط'),
(148, 'في البلدان التي شهدت حروبا أهلية، لن يدرس هذا المجلس التاريخ المعاصر', 'سياسة', 'مجتمع', 'سياسات', 'متوسط'),
(149, 'سيحظر هذا المجلس ألعاب الفيديو ذات النزعة العنيفة ', 'فلسفة', 'مجتمع', 'سياسات', 'متقدم'),
(150, 'سيسمح هذا المجلس للمتزوجات بالعمل بنصف الساعات الرسمية وتقاضي كامل المرتب ', 'اقتصاد', 'مجتمع', 'سياسات', 'متقدم'),
(151, 'سيدمج هذا المجلس المقعدين من ذوي الاحتياجات الخاصة في الصفوف النظامية ', 'تعليم', 'مجتمع', 'سياسات', 'متوسط'),
(152, 'سيجبر هذا المجلس الموظفين الحكوميين على الالتزام بالباس الوطني', 'حقوق وحريات', 'ثقافة', 'سياسات', 'متوسط');

-- --------------------------------------------------------

--
-- Table structure for table `logcase`
--

DROP TABLE IF EXISTS `logcase`;
CREATE TABLE IF NOT EXISTS `logcase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(100) NOT NULL,
  `ip` varchar(1500) NOT NULL,
  `log` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logcase`
--

INSERT INTO `logcase` (`id`, `timestamp`, `ip`, `log`) VALUES
(161, '2022-05-24 08:05:30', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(160, '2022-05-22 11:46:11', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"option2\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"قيم\"}'),
(159, '2022-05-17 08:50:05', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"2ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(158, '2022-05-17 08:49:50', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"2ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(156, '2022-05-17 08:42:53', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"2ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(157, '2022-05-17 08:45:30', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"0ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(155, '2022-05-17 08:42:26', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(154, '2022-05-17 08:42:15', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(153, '2022-05-17 08:40:05', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(152, '2022-05-16 13:07:46', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(151, '2022-05-16 11:56:39', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"disabled\",\"sub\":\"disabled\",\"type\":\"خاصة\"}'),
(150, '2022-05-16 08:50:41', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"option3\",\"cat\":\"سياسة\",\"sub\":\"دولي\",\"type\":\"قيم\"}'),
(149, '2022-05-16 08:49:22', '{\"geoplugin_request\":\"::1\",\"geoplugin_status\":404,\"geoplugin_delay\":\"1ms\",\"geoplugin_credit\":\"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\\\\'http:\\/\\/www.maxmind.com\\\\\'>http:\\/\\/www.maxmind.com<\\/a>.\",\"geoplugin_city\":null,\"geoplugin_region\":null,\"geoplugin_regionCode\":null,\"geoplugin_regionName\":null,\"geoplugin_areaCode\":null,\"geoplugin_dmaCode\":null,\"geoplugin_countryCode\":null,\"geoplugin_countryName\":null,\"geoplugin_inEU\":0,\"geoplugin_euVATrate\":false,\"geoplugin_continentCode\":null,\"geoplugin_continentName\":null,\"geoplugin_latitude\":null,\"geoplugin_longitude\":null,\"geoplugin_locationAccuracyRadius\":null,\"geoplugin_timezone\":null,\"geoplugin_currencyCode\":null,\"geoplugin_currencySymbol\":null,\"geoplugin_currencySymbol_UTF8\":\"\",\"geoplugin_currencyConverter\":\"0\"}', '{\"difficulty\":\"disabled\",\"cat\":\"سياسة\",\"sub\":\"دولي\",\"type\":\"قيم\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `profile_pic` varchar(300) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
