CREATE DATABASE IF NOT EXISTS mega_shop;

USE mega_shop;

CREATE TABLE IF NOT EXISTS categories(
  CAT_ID INT(11) NOT NULL AUTO_INCREMENT,
  CAT_NAME VARCHAR(255) NOT NULL,
  CREATE_DATE DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (CAT_ID)
);

CREATE TABLE IF NOT EXISTS products(
  PRODUCT_ID INT(11) NOT NULL AUTO_INCREMENT,
  NAME VARCHAR(255) NOT NULL,
  PRICE DECIMAL(6,2),
  CAT_ID INT(11),
  DESCRIPTION TEXT,
  CREATE_DATE DATETIME DEFAULT CURRENT_TIMESTAMP,
  LAST_UPDATE DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (PRODUCT_ID),
  CONSTRAINT `FK1` FOREIGN KEY (CAT_ID) REFERENCES categories(CAT_ID)
);

INSERT INTO categories(CAT_ID, CAT_NAME) VALUES
                                                (1, 'Drinks'),
                                                (2, 'Foods'),
                                                (3, 'Snacks'),
                                                (4, 'Other');

INSERT INTO products(NAME, PRICE, CAT_ID, DESCRIPTION) VALUES
                                                              ('Coffee', 1.2,1,'breakfast'),
                                                              ('Banana',2,1.4,'breakfast'),
                                                              ('Chips',3,1.5,'breakfast'),
                                                              ('Meat', 2, 2.5,'lunch'),
                                                              ('Milk', 4, 1.6,'anytime'),
                                                              ('Peanuts',3,1.3,'with beer'),
                                                              ('Beer',1,0.8,'Any time! Any where!');