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
| /home/index   | 主页 | home.php |
| /home/signup  | 注册| home.php |
| /home/login | 登录| home.php |
| /article    | 资讯列表 | article.php |
| /article/category/news | 资讯列表（带参数) | article.php |
| /group       | 小组列表 | group.php |
| /group/1   (/group/index/1)    | 小组内容 | group.php |
| /group/member/1 | 小组成员列表 | group.php |
| /user/1         | 用户profile | user.php |
| /user/1/teach   | 在教课程 | user.php |
| /user/1/learn   | 在学课程 | user.php |
| /user/1/favorited | 收藏的课程 | user.php |
| /user/1/group |   加入的小组 | user.php |
| /user/1/following | 关注/粉丝 | user.php |
| /course/explore | 课程列表 | course.php |
| /course/explore/userguide | 课程列表（带参数） | course.php |
| /teacher      | 讲师 | teacher.php |
| /page/aboutus | 关于我们 | 生成页面 |
| /search?q=test | 搜索 | search.php |

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
