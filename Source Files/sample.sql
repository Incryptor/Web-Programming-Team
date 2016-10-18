CREATE TABLE sample
(
   user_id        INT NOT NULL AUTO_INCREMENT,
   summoner       VARCHAR(128) NOT NULL,
   email          VARCHAR(128) NOT NULL,
   passwrd        VARCHAR(256) NOT NULL,
   Dropdown       VARCHAR(128) NOT NULL,
   checkbox        BOOLEAN NOT NULL,
   availability   INT NOT NULL,
   description    TEXT NOT NULL,
   PRIMARY KEY  (user_id)
);
