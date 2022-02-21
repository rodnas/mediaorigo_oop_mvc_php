CREATE TABLE `driver` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `birth_year` int(4) UNSIGNED DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 1,
  `lang_id` int(2) UNSIGNED NOT NULL DEFAULT 0,
  `insert_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `insert_when` datetime DEFAULT NULL,
  `modify_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modify_when` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
