# laravel9_course_platzi

## Create LARAVEL PROJECT

https://laravel.com/docs/9.x/installation

```console
composer create-project laravel/laravel example-app
```

## Install LARAVEL PROJECT in XAMPP

https://gist.github.com/bradtraversy/7485f928e3e8f08ee6bccbe0a681a821

```txt
Edit Hosts File
Windows - C:/Windows/System32/drivers/etc/hosts
Mac - /etc/hosts
Add these lines

127.0.0.1 localhost
127.0.0.1 PROJECT_NAME.test

Edit Virtual Hosts File
Windows - C:/xampp/apache/conf/extra/httpd-vhosts.conf
<VirtualHost \*:80>
DocumentRoot "C:/xampp/htdocs"
ServerName localhost
</VirtualHost>

<VirtualHost _:80>
DocumentRoot "C:/xampp/htdocs/PROJECT_NAME/public"
ServerName PROJECT_NAME.test
</VirtualHost>
Mac - /opt/lampp/etc/extra/httpd-vhosts.conf
<VirtualHost _:80>
DocumentRoot /opt/lampp/htdocs
ServerName localhost
ServerAlias www.localhost
</VirtualHost>

<VirtualHost \*:80>
DocumentRoot /opt/lampp/htdocs/PROJECT_NAME/public
ServerName PROJECT_NAME.test
ServerAlias www.PROJECT_NAME.test
</VirtualHost>
```
