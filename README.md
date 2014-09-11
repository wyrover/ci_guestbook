ci_guestbook
============

CodeIgniter guestbook demo


## 目录结构
```
ci_guestbook
├─application                            应用程序目录
│  ├─cache
│  ├─config
│  ├─controllers
│  ├─core
│  ├─helpers
│  ├─hooks
│  ├─language
│  │  └─english
│  ├─libraries
│  ├─logs
│  ├─models
│  ├─third_party
│  └─views
│      └─errors
│          ├─cli
│          └─html
├─install                                存放安装脚本，包括创建数据库sql文件
├─system                                 ci system目录
└─test_files
```


## 创建数据库

guestbook

## 创建数据表

```sql

CREATE TABLE guestbook.comments (
    comment_id INT( 11 ) NULL AUTO_INCREMENT ,
    name VARCHAR( 255 ) NOT NULL ,
    url VARCHAR( 255 ) NOT NULL ,
    comment TEXT NOT NULL ,
    PRIMARY KEY ( comment_id )
) ENGINE = MYISAM;

```