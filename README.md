ci_guestbook
============

CodeIgniter guestbook demo

## 创建数据库

guestbook

## 创建数据表

'''

CREATE TABLE guestbook.comments (
comment_id INT( 11 ) NULL AUTO_INCREMENT ,
name VARCHAR( 255 ) NOT NULL ,
url VARCHAR( 255 ) NOT NULL ,
comment TEXT NOT NULL ,
PRIMARY KEY ( comment_id )
) ENGINE = MYISAM;

'''