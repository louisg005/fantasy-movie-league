DROP TABLE IF EXISTS screens;
DROP TABLE IF EXISTS movies;

CREATE TABLE movies (
    movieId TINYINT UNSIGNED AUTO_INCREMENT NOT NULL,
    movieTitle VARCHAR(64) NOT NULL,
    buxCost SMALLINT UNSIGNED NOT NULL,
    INDEX(buxCost),
    PRIMARY KEY (movieId)
);

CREATE TABLE screens (
    screeningId INT UNSIGNED AUTO_INCREMENT NOT NULL,
    movieId TINYINT UNSIGNED NOT NULL,
    screenSlot TINYINT UNSIGNED NOT NULL,
    timeAdded DATETIME NOT NULL,
    timeRemoved DATETIME,
    INDEX(movieId),
    INDEX(timeAdded),
    INDEX(timeRemoved),
    FOREIGN KEY(movieId) REFERENCES movies(movieId),
    PRIMARY KEY(screeningId)
);

INSERT INTO movies (movieTitle,buxCost)
    VALUES("The Martian", 410);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Goosebumps", 369);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Bridge of Spies", 336);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Crimson Peak", 311);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Hotel Transylvania 2", 225);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Pan (2015)", 144);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("The Intern", 102);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Sicario", 77);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Woodlawn",74);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Maze Runner: The Scorch Trials", 60);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("The Walk", 45);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Everest", 30);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("Black Mass", 29);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("The Visit", 28);
INSERT INTO movies (movieTitle,buxCost)
    VALUES("War Room", 24);

INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (1, 1, '2015-10-19 1:25:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (2, 9, '2015-10-19 1:29:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (3, 10, '2015-10-19 13:30:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (4, 11, '2015-10-19 13:31:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (5, 12, '2015-10-19 13:32:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (6, 13, '2015-10-19 13:33:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (7, 14, '2015-10-19 13:34:08');
INSERT INTO screens (screenSlot,movieId,timeAdded)
    VALUES (8, 15, '2015-10-19 13:35:08');
