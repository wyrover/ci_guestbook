ci_guestbook
============

CodeIgniter guestbook demo


## 目录结构
```
ci_guestbook
├─application
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
├─system
│  ├─core
│  │  └─compat
│  ├─database
│  │  └─drivers
│  │      ├─cubrid
│  │      ├─ibase
│  │      ├─mssql
│  │      ├─mysql
│  │      ├─mysqli
│  │      ├─oci8
│  │      ├─odbc
│  │      ├─pdo
│  │      │  └─subdrivers
│  │      ├─postgre
│  │      ├─sqlite
│  │      ├─sqlite3
│  │      └─sqlsrv
│  ├─fonts
│  ├─helpers
│  ├─language
│  │  └─english
│  └─libraries
│      ├─Cache
│      │  └─drivers
│      ├─Javascript
│      └─Session
│          └─drivers
└─test_files
```


## 创建数据库

guestbook

## 创建数据表

```

CREATE TABLE guestbook.comments (
    comment_id INT( 11 ) NULL AUTO_INCREMENT ,
    name VARCHAR( 255 ) NOT NULL ,
    url VARCHAR( 255 ) NOT NULL ,
    comment TEXT NOT NULL ,
    PRIMARY KEY ( comment_id )
) ENGINE = MYISAM;

```