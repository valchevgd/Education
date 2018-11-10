USE workshop;

CREATE TABLE IF NOT EXISTS`users`(
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `born_on` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`)
)
  COLLATE = 'utf8_general_ci'
  ENGINE = InnoDB
  ;