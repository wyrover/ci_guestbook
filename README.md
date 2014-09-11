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

## 路由规划

### 前台

| 路由  | 功能  | 实现控制器 |
| :------------ |:---------------|:-------------|
| /home/index   | 主页 | Home |
| /home/signup  | 注册| Home |
| /home/login | 登录| Home |


### 后台

| 路由  | 功能  | 实现控制器 |
| :------------ |:---------------|:-------------|
| /manage/index   | 主页 | manage/home.php |
| /manage/login  | 登录| manage/home.php |
| /manage/logout | 注销| manage/home.php |
| /manage/system | 系统信息 | manage/home.php |
| /manage/config | 配置 | manage/home.php |
| /manage/user   | 用户列表 | manage/user.php |
| /manage/user/add | 用户添加 | manage/user.php |
| /manage/user/delete | 用户删除 | manage/user.php |
| /manage/user/edit   | 用户编辑 | manage/user.php |
| /manage/article   | 文章列表 | manage/article.php |
| /manage/article/add | 文章添加 | manage/article.php |
| /manage/article/delete | 文章删除 | manage/article.php |
| /manage/article/edit  | 文章编辑 | manage/article.php |
