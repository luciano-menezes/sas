
DROP TABLE IF EXISTS salamander;
CREATE TABLE `salamander` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `habitat` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `salamander` (`id`, `name`, `habitat`, `description` ) VALUES
(1, 'Southern Red-Backed', 'The southern zigzag salamanders only occurs in a small area in western North Carolina.  These rare salamanders may be found in wooded areas near springs or cave mouths.  They also inhabit rocky areas with deep, cool crevices. ','There are two distinct color morphs of the southern red-backed salamander.  The striped morph has a dark grey or brown base color with an orange or red stripe stretching from the head to the end of the tail.'),
(2, 'Southern Zig Zag', 'The southern zigzag salamanders only occurs in a small area in western North Carolina.  These rare salamanders may be found in wooded areas near springs or cave mouths.  They also inhabit rocky areas with deep, cool crevices.', 'Coloration of the body is dark grey with a wavy or jagged \'zigzag\' stripe down the back.  This stripe is yellow to red in color.  The stripe may be very dark and difficult to see on some individuals.  The sides of this salamander are dark with some white speckling.  The belly is typically dark grey and may show traces of red or yellow pigment.'),  
(3, 'Pigeon Mountain Salamander', 'These three species are very common in the Blue Ridge Mountains of western North Carolina. Ocoee salamanders are found in southwestern North Carolina and are separated from the Carolina mountain dusky salamander by the Pigeon River.', 'These three species were all formerly considered to be a single species, Desmognathus ochrophaeus. All three of these species exhibit highly variable coloration and are best separated from one another by location.'),
(4, 'Slimy Salamander', 'Slimy salamanders are entirely terrestrial.  In North Carolina, these salamanders are most abundant in moist forest floor habitats in deciduous forests but may be found in pine forests, bottomland hardwood forests, and caves. ', 'The slimy salamander was formerly considered a single species but has since been divided into a complex of closely related species.  Six of these species may be found in North Carolina but they are often indistinguishable in the field.'),
(5, 'Green Salamander', 'Green salamanders typically inhabit moist, shady crevices in cliffs and rock faces. In North Carolina, the green salamander is found only in a small mountainous region in the southwestern corner of the state.', 'The green salamander has an unmistakeable lichen-like pattern of green or yellow-green on a dark background. This salamander is laterally flattened and has squared toe tips.');


