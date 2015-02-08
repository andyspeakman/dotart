-- *********************************************************************
-- Update Database Script
-- *********************************************************************
-- Change Log: database/changelog/db-changelog-1.0.xml
-- Ran at: 12/11/12 6:20 PM
-- Against: dotart@localhost@jdbc:mysql://localhost:3306/dotart
-- Liquibase version: 2.0.3
-- *********************************************************************

-- Lock Database
-- Changeset database/changelog/db-changelog-1.0.xml::schools-20121209-1::Andy Speakman::(Checksum: 3:9c6dab084c634e24fedc7c8aa56e09aa)
CREATE TABLE `school` (`id` SMALLINT NOT NULL, `name` VARCHAR(100) NOT NULL, `statement` LONGTEXT, `website` VARCHAR(100), `image` VARCHAR(100), CONSTRAINT `PK_SCHOOL` PRIMARY KEY (`id`));

CREATE TABLE `entry` (`id` SMALLINT AUTO_INCREMENT NOT NULL, `school` SMALLINT NOT NULL, `artist` VARCHAR(50) NOT NULL, `title` VARCHAR(50) NOT NULL, `media` VARCHAR(50) NOT NULL, `width` SMALLINT NOT NULL, `height` SMALLINT NOT NULL, `image` VARCHAR(50) NOT NULL, `image_width` SMALLINT NOT NULL, `image_height` SMALLINT NOT NULL, CONSTRAINT `PK_ENTRY` PRIMARY KEY (`id`));

ALTER TABLE `entry` ADD CONSTRAINT `fk_entry_school` FOREIGN KEY (`school`) REFERENCES `school` (`id`);

INSERT INTO `DATABASECHANGELOG` (`AUTHOR`, `COMMENTS`, `DATEEXECUTED`, `DESCRIPTION`, `EXECTYPE`, `FILENAME`, `ID`, `LIQUIBASE`, `MD5SUM`, `ORDEREXECUTED`) VALUES ('Andy Speakman', '', NOW(), 'Create Table (x2), Add Foreign Key Constraint', 'EXECUTED', 'database/changelog/db-changelog-1.0.xml', 'schools-20121209-1', '2.0.3', '3:9c6dab084c634e24fedc7c8aa56e09aa', 5);

-- Release Database Lock
-- Release Database Lock
