## php-csrf
### 获取取当前 CSRF Token的值
```php
// $time为token有效期
return csrf_token($time=120);
// or
return \Csrf\Csrf::get($time);
```
### 验证Csrf-token
```php
return \Csrf\Csrf::check($token);
```