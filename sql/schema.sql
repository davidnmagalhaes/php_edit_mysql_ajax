--
-- Database: `blog_samples`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_interview_questions`
--

CREATE TABLE `php_interview_questions` (
  `id` int(8) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `row_order` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php_interview_questions`
--

INSERT INTO `php_interview_questions` (`id`, `question`, `answer`, `row_order`) VALUES
(1, 'PHP array functions examples', 'is_array(), in_array(), array_keys(), array_values()', 3),
(2, 'How to redirect using PHP', 'Using header() function.', 4),
(3, 'Differentiate PHP size() and count():', 'Same. But count() is preferable.', 1),
(4, 'What is PHP?', 'A server side scripting language.', 0),
(5, 'What is php.ini?', 'PHP configuration file.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
