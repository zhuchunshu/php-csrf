## php-csrf
### 获取取当前 CSRF Token的值
```php
return csrf_token();
// or
return \Csrf\Csrf::get();
```
### 验证Csrf-token
```php
return \Csrf\Csrf::check($token);
```