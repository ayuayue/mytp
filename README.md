使用 tp5.1 集成一些常用功能
前端使用 bulma, vue 来做
使用 restful 的 api 风格
后端数据库使用 mysql，orm 来做关联查询



功能：
- [x] jwt
- [ ] oauth
- [ ] 权限控制
- [x] 缓存（文件缓存 & redis）
- [ ] 验证码
- [ ] 单元测试
- [x] 数据库迁移
- [x] 数据填充 faker



使用的composer包

composer require topthink/think-migration=2.0.*

composer require --dev symfony/var-dumper

composer require firebase/php-jwt

composer require fzaninotto/faker

composer require guzzlehttp/guzzle



生成多模块定义
修改 /build.php,执行 php think build --config build.php



生成数据库迁移文件,如果使用 mysql8.0 ，需要将my.conf 的编码改为 utf8
php think migrate:create Hitokotos，将change方法改为up，增加down方法

php think migrate:run 执行 up 方法

php think migrate:rollback 执行 down 方法 



生成数据库种子文件（数据填充）

php think seed:create Hitokoto

php think seed:run



apache配置后无法获取header中的authorization问题

修改.htaccess文件

```
<IfModule mod_rewrite.c>
  Options +FollowSymlinks -Multiviews
  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php?/$1 [QSA,PT,L]
  SetEnvIf Authorization .+ HTTP_AUTHORIZATION=$0
</IfModule>
```

配置 redis 缓存，cache.php 文件

