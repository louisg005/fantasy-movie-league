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

