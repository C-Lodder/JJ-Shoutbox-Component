DROP TABLE IF EXISTS `#__shoutbox_smilies`;

CREATE TABLE IF NOT EXISTS `#__shoutbox_smilies` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

INSERT INTO `#__shoutbox_smilies` (`id`, `code`, `image`) VALUES
(1, ':)', 'icon_e_smile.gif'),
(2, ':(', 'icon_e_sad.gif'),
(3, ':D', 'icon_e_biggrin.gif'),
(4, 'xD', 'icon_e_biggrin.gif'),
(5, ':p', 'icon_razz.gif'),
(6, ':P', 'icon_razz.gif'),
(7, ';)', 'icon_e_wink.gif'),
(8, ':S', 'icon_e_confused.gif'),
(9, ':@', 'icon_mad.gif'),
(10, ':O', 'icon_e_surprised.gif'),
(11, 'lol', 'icon_lol.gif');