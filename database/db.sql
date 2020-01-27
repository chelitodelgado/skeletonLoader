CREATE DATABASE testing;
USE testing;

CREATE TABLE tbl_post (
  id mediumint(8) UNSIGNED NOT NULL,
  post_title text,
  post_description text,
  author varchar(255) DEFAULT NULL,
  datetime datetime DEFAULT NULL,
  post_image varchar(150) DEFAULT NULL,
  post_url varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE tbl_post
  ADD PRIMARY KEY (id);
  
  ALTER TABLE tbl_post
  MODIFY id mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;