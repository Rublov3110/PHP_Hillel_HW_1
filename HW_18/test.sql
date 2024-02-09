CREATE TABLE `list_of_films`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(255) NOT NULL,
    `year` TINYINT UNSIGNED NOT NULL,
    `budget` TINYINT UNSIGNED NOT NULL,
    `timing_min` TINYINT UNSIGNED NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT NULL
);

CREATE TABLE `genre`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `genre_name` CHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT NULL
);

CREATE TABLE film_genre
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `film_id`  INT UNSIGNED,
    `genre_id` INT UNSIGNED,
    FOREIGN KEY (`film_id`) REFERENCES `list_of_films` (`id`),
    FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`)
);

ALTER TABLE `list_of_films`
    MODIFY COLUMN name TEXT NOT NULL,
    MODIFY COLUMN year INT UNSIGNED NOT NULL,
    MODIFY COLUMN budget INT UNSIGNED NOT NULL,
    MODIFY COLUMN timing_min INT UNSIGNED NOT NULL;

ALTER TABLE `list_of_films`
DROP COLUMN genre;

ALTER TABLE `genre`
    MODIFY COLUMN genre_name CHAR(255) UNIQUE NOT NULL;

DROP TABLE `film_genre`;

CREATE TABLE film_genre
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `film_id`  INT UNSIGNED DEFAULT NULL,
    `genre_id` INT UNSIGNED DEFAULT NULL,
    FOREIGN KEY (`film_id`) REFERENCES `list_of_films` (`id`) ON DELETE SET NULL,
    FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE SET NULL
);

INSERT INTO `list_of_films`(`name`,`year`,`budget`,`timing_min`) VALUES ('The Shawshank Redemption', 1998, 25000000, 162);
INSERT INTO `list_of_films`(`name`,`year`,`budget`,`timing_min`) VALUES ('Spider-Man: Web of Universes', 2022, 150000000, 140);
INSERT INTO `list_of_films`(`name`,`year`,`budget`,`timing_min`) VALUES ('Green Mile', 1998, 60000000, 140);
INSERT INTO `genre`(`genre_name`) VALUES ('drama'), ('thriller'), ('animation'), ('action movie');
INSERT INTO `genre`(`genre_name`) VALUES ('action movie');
INSERT INTO `film_genre`(`film_id`, `genre_id`) VALUES (1, 2), (2, 3), (2, 4), (3, 1), (3, 2);

SELECT * FROM `list_of_films` WHERE `name` = 'Spider-Man: Web of Universes';
UPDATE `list_of_films` SET `name` = 'Spider-Man' WHERE `name` = 'Spider-Man: Web of Universes';
DELETE FROM `list_of_films` WHERE `year` = 2022
