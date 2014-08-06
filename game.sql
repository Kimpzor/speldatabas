-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 23 maj 2013 kl 15:33
-- Serverversion: 5.1.69
-- PHP-version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `kimkla12_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `gameId` int(11) NOT NULL AUTO_INCREMENT,
  `gamePic` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gameName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gameDesc` text CHARACTER SET utf8 NOT NULL,
  `gameSpoil` text CHARACTER SET utf8 NOT NULL,
  `gameGen` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gameRel` date NOT NULL,
  `gameChar` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`gameId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=11 ;

--
-- Dumpning av Data i tabell `game`
--

INSERT INTO `game` (`gameId`, `gamePic`, `gameName`, `gameDesc`, `gameSpoil`, `gameGen`, `gameRel`, `gameChar`) VALUES
(1, 'http://i.imgur.com/rHRU5az.jpg', 'Bioshock Infinite', 'You play as Booker DeWitt and get transported to the floating land Columbia where you are about to save the girl Elizabeth.', 'They all die!', 'First-person shooter, Adventure', '2013-03-26', 'Booker DeWitt<br />\r\nElizabeth<br />\r\nRosalind Lutece<br />\r\nRobert Lutece'),
(2, 'http://i.imgur.com/uuc6KMa.jpg', 'Super Mario', 'Old Game \r\n\r\nmhm', 'They all die!', 'Adventure', '1854-07-22', 'Super Mario!!'),
(4, 'http://www.panelsonpages.com/wp-content/uploads/2011/08/Bulletstorm-main-logo.jpg', 'Bulletstorm', 'Shoot people\r\n', 'ghjhjg', 'Bad language', '1234-04-12', 'ffg'),
(5, 'ffgfd', 'Webbsystem', 'fcgbgf', 'They all pass the course', 'Webb', '2013-05-23', 'Jesper<br>\r\nPhilip'),
(6, 'http://4walled.cc/src/b2/b2566854c4cc3612c78bb578bc0f02c0.jpg', 'DmC Devil May Cry', 'Keel demonz', 'Dante beats Virgil in a duel after defeating Mundus. Virgil leaves and gathers some demons...', 'Hack n slash, Fighting, Adventure', '2013-01-15', 'Dante<br>\r\nVirgil<br>\r\nSome chick<br>\r\nMundus<br>\r\nand his wife...<br>'),
(7, 'http://4walled.cc/src/09/09bdf787e1a4f27caf4d7d79208abb6c.png', 'Detta kommer inte funka', 'Mjau', 'Det funkade....', 'Kissekatten', '1234-12-11', 'Katten\r\noch hans tygboll'),
(8, 'http://4walled.cc/src/59/59b2330152e74ee2d6f82f23b8d27fb7.jpg', 'Counter-Strike', 'Bang bang', 'Terrorists wins...', 'FPS', '0000-00-00', 'Good guys<br>\r\nBad guys<br>'),
(9, 'http://4walled.cc/src/18/18f0f4f878b2bf422553228196acac3e.jpg', 'Crysis 3', 'After the events of Crysis 2, Prophet´s personality and memories stored in Nanosuit assimilates with Alcatraz´s body along with Alcatraz´s memories, replacing Alcatraz´s consciousness "like a spare part" in the process. Prophet now knows that he died by shooting himself and is now back from the memories stored in the Nanosuit. Joining with Psycho, his teammate from the first Crysis and a team of elite Nanosuit soldiers, he travels around the world looking for the Alpha Ceph, the ultimate Ceph leader, from the knowledge he gained about Ceph. One by one his teammates lose interest in the hunt believing that all Ceph are destroyed, until Prophet and Psycho finally trace the Alpha Ceph in Russia and imprison it. But, shortly afterwards, CELL, now in search for global domination of land and technology, disable Prophet using powerful EMP weapons in Siberia, captures all the remaining Nanosuit soldiers, and start skinning them of their suits so as to learn or recover the Ceph genetics stored in them. Everyone involved in the Nanosuit program were either recruited or detained by CELL, including Scientists Nathan Gould from Crysis 2 and Claire Fontanelli. However, CELL runs out of Nanosuit soldiers to skin for alien material that integrated with their suits, so they transfer Prophet to the facility as requested, to skin him. Locked in a storage device with powerful EMP shocks to keep him dormant, Prophet is transported to New York, now encased with giant "nanodome" by CELL.\r\nHowever, Karl Ernst Rasch, using Ceph technology had extended his lifespan and comes to know about the corrupt intention of CELL. He resigns as the head of Hargreave-Rasch Biotechnologies, removes all the research done by him and Hargreave on Ceph technology to stop CELL from acquiring it and secretly releases a brief video of Prophet´s where-abouts, describing the post scenario conditions after invasion of New York and the evolution of Ceph, thus requesting the local resistance (led by Claire) to free Prophet as he is the only Nanosuit holder left who can stop CELL and put an end to their corrupt motives. He then himself joins the resistance. Members of the resistance, including former Nanosuit soldiers Psycho, Lazy Dane and Bandit, infiltrate the dock area and are able to free Prophet from the transport ship, which has now docked at the New York nanodome.\r\nPsycho explains to Prophet that during his 20 year absence, CELL used Ceph technology to generate unlimited free energy. Eventually, CELL became a mega corporation and gained a monopoly over the world´s power supply, and so used it to drive everyone into debt. Those who could not pay for the energy were sent to "volunteer camps" (slavery). A resistance movement formed in response to this. The resistance eventually freed Psycho from the skinning labs, and he joined their ranks. Tara Strickland from Crysis 2 also helps the resistance politically as a senator, but is unable to do much due to CELL´s political dominance. The source of CELL´s power generation for the entire world, called System X, is also located in the abandoned and encased New York. Since the Nanodome was to keep the city empty and non-functional, NY has now grown into a jungle populated by wildlife and feral Ceph Stalkers, due to a lack of urbanization. Psycho wants System X destroyed to free the world from CELL. Prophet, though worried about his visions of the Alpha Ceph showing him the end of the world, agrees.\r\nPsycho and Prophet enter the dome, fighting through CELL forces and some feral Ceph Stalkers living in the fields.They reach the resistance headquarters, where they meet Karl Ernst Rasch and Claire. Rasch tries to convince Claire that Prophet is what the resistance needs to finally overthrow CELL. Despite affirmations from Psycho, with whom she seems to have a special relationship, Claire is skeptical of Prophet because of the extensive modifications in his suit, the integration of Ceph genetic material, and the deep integration with his suit. Eventually, Claire agrees.\r\nPsycho and Prophet´s first target is the outer defenses of System X, a device with infinite power production capacity, but for some reason, CELL chose to generate power through a hydroelectric dam. Prophet hypothesizes that CELL does this because it fears something about System X. Prophet continues to have visions, but successfully destroys the dam and then disables System X ´s power production core, Nexus facility. As it turns out, System X is the Alpha Ceph. A system protocol designed to contain the Alpha Ceph when required activates but fails, leading to the initiation of a secondary defense protocol, causing the whole power facility to self-destruct. The Alpha Ceph, free from containment, now enables a hidden Ceph structure inside the Nanodome to fire a beam into the atmosphere to open a wormhole to the Ceph home world in the M33 Galaxy. Through this wormhole, they plan to send an invasion force to invade Earth, revealing that invasion was their true motive for arriving on Earth millions of years ago. With the Alpha Ceph no longer dormant, the Ceph coordinator, or Hivemind, reactivates, and a coordinated Ceph attack ensues. Prophet decides to kill the Alpha Ceph and end the alien threat once and for all.\r\nProphet learns that he must unlock his suit to its full potential by removing some neural blocks in his head to defeat the Ceph. Prophet and Psycho head to the skinning laboratory to use the cradle to do this. At the facility, they see firsthand the atrocities visited upon the Nanosuit soldiers by CELL. Psycho uses the cradle to remove the neural blocks, and also the limitations of the nanites in the suit. Now, the nanites will be able to transform into anything as it has no limitations. Psycho does more digging into his past, despite orders from Claire. He discovers that it was Claire who had skinned him and the others at the behest of CELL, also explaining why she was skeptical of Prophet´s suit. Upset, Psycho rebuffs efforts from Claire and Prophet to console him. Claire pleads that he was the reason she joined the resistance, and that she had no other choice. Prophet also claims that he had no other choice, and that he told him what he needed to know at the time of the Lingshan Incident. Psycho finds this unacceptable, as everyone has a choice. He hands Prophet the dogtags of the men that died under his command, Aztec and Jester during the original Crysis and Cupcake during the Alpha Ceph hunting mission between Crysis 2 and 3, and leaves.\r\nProphet learns that because the Alpha Ceph is controlling the Ceph structure for creating a wormhole, CELL plans to use Archangel, a satellite-based energy distribution device that can draw power from the entire world´s power grid, as a directed energy weapon to destroy all of New York and hopefully the Alpha Ceph. Unfortunately, firing it at the Alpha Ceph and New York would cause a chain reaction that would destroy Earth. To make matters worse, the Ceph attack Claire and the resistance. Prophet races to rescue them, but the situation is so dire that Claire tells him to leave them, as they are only holding him back. Psycho shows up with a VTOL and rescues the resistance. They proceed to the Archangel control facility where they shut off the weapon before it unleashes enough energy to fire. Rasch is recovered in the facility, but he is now under control of the Alpha Ceph since he used Ceph DNA to expand his life. He disables Prophet and tries the same on Psycho, but Claire blocks his attack and Psycho shoots Rasch. No longer under control, Rasch implores the group to leave as the Alpha Ceph also known as Ceph Tentacle renews its attack. Prophet, Psycho, and the injured Claire board the VTOL and engage in a massive air battle with Ceph ships, eventually crashing. Claire, succumbing to her injuries, is forgiven by Psycho and dies. Psycho laments to Prophet that he is powerless because he does not possess a Nanosuit. Prophet fights with Psycho, revealing that Rasch was only able to incapacitate Prophet because as he was wearing the nanosuit, and that they only survived because of Psycho as he was not wearing a nanosuit. Psycho, now going by his human name Michael, resolves to do the slaughtering and finds another VTOL to take the battle and Prophet to the Ceph.\r\nMichael and Prophet kill the Alpha Ceph, which kills all other Ceph troopers in the area. As they only destroyed the Alpha Ceph and didn´t have enough time to destroy the Ceph wormhole structure which is now fully functional, the beam powering the wormhole pulls Prophet into space. Now in orbit around Earth, Prophet sees a massive Ceph warship, similar to the one in the first Crysis,coming through the wormhole. His suit heavily damaged, Prophet almost gives up, but pushes on. Recalling Archangel´s immense power, Prophet hacks into the satellite and uses it to destroy the Ceph warship. This collapses the wormhole and ends the threat of invasion. In the explosion, Prophet is knocked off by the debris and is pushed back into the earths atmosphere. He impacts the waters near the Lingshan Islands where 27 years ago the Ceph were initially discovered.\r\nWhen Prophet wakes up the next morning, he is in an abandoned hut in Lingshan. In the background, there is a news broadcast of Senator Tara Strickland who announces that the remaining assets of the CELL corporation have been frozen and seized as part of the global recovery effort. As the neural blocks are removed from the Nanosuit to destroy the Alpha Ceph, the nanites in the suit can now rearrange to anything imaginable, thus making the Nanosuit more symbiotic than ever. It changes its outer layer to reform Prophet´s former physical body, technically resurrecting him. Prophet then grabs the dog-tags of his deceased squad members thinking how much he sacrificed his humanity and his own body in the quest for victory . He walks out to the beach and throws the tags into the water, and decides to use his actual name "Laurence Barnes" from now onwards. Prophet then walks back towards the hut, cloaks and repeats his famous taglines "They called me Prophet. Remember me."\r\nIn a post credits scene, two frightened CELL troopers and three frazzled men hurriedly retreat down a corridor. They are being attacked and pursued by an unknown enemy accompanied by strange sounds. It is revealed that the three men comprise the CELL board of directors. The CELL troopers turn around and are shot. The three nervous men turn to find Michael (Psycho) sitting at the desk. He claims to have had spent some time at one of their hospitals, and he wants to "make a complaint".', 'You defeat the Alpha Ceph and save the world. Prophet can now turn invisible without his suit :3', 'FPS, Sci-fi, Pro graphics', '2013-02-21', 'Prophet<br>\r\nPsycho<br>\r\nClaire<br>\r\nKarl Rasch<br>'),
(10, 'http://i.imgur.com/NmDlO8j.jpg', 'Battlefield 3', 'Battlefield 3 is a first-person shooter video game developed by EA Digital Illusions CE and published by Electronic Arts. It is a direct sequel to 2005s Battlefield 2, and the twelfth installment in the Battlefield franchise.', 'So after kicking the crap out of Solomon,Black opens the crate,gets the nuke,and Dima gets a knock. WHAT FUCK IS THAT ENDING!! CLICHE!! CLICHE DICE!!SUCH CLICHE!!!ITS WORSE THAN COWBOYS VS. ALIENS FOR GODS SAKE! what happened to Blackburn? who knocked on Dimas door?', 'First-person shooter', '2011-02-04', 'SSgt. Henry "Black" Blackburn<br />\r\nSgt. Jonathan "Jono" Miller<br />\r\n Lt. Jennifer "Wedge" Colby Hawkins<br />\r\nDimitri "Dima" Mayakovsky');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;