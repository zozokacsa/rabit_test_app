/* Create advertisements table */
CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Fill up with test data */
INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(1, 1, 'Test Advertisement 1'),
(2, 2, 'Test Advertisement 2'),
(3, 3, 'Test Advertisement 3'),
(4, 4, 'Test Advertisement 4');

/* Create users table */
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Fill up with test data */
INSERT INTO `users` (`id`, `name`) VALUES
(1, 'test_1'),
(2, 'test_2'),
(3, 'test_3'),
(4, 'test_4'),
(5, 'test_5'),
(6, 'test_6');

/* Defining indexes */
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_ads` (`userid`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/* Add foreign key */
ALTER TABLE `advertisements`
  ADD CONSTRAINT `fk_users_ads` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;