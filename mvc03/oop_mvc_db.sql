CREATE TABLE `vehicle` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `lpn` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 1,
  `lang_id` int(2) UNSIGNED NOT NULL DEFAULT 0,
  `insert_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `insert_when` datetime DEFAULT NULL,
  `modify_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modify_when` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `driver` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 1,
  `lang_id` int(2) UNSIGNED NOT NULL DEFAULT 0,
  `insert_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `insert_when` datetime DEFAULT NULL,
  `modify_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modify_when` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
