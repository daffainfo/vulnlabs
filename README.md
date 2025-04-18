# VulnLabs

## Description
A simple vulnerable lab that created using PHP and MySQL

## List of Vulnerabilities
- [Broken Authentication](https://github.com/daffainfo/vulnlabs/tree/master/Broken%20Authentication)
- [Command Injection](https://github.com/daffainfo/vulnlabs/tree/master/Command%20Injection)
- [Cross Site Request Forgery](https://github.com/daffainfo/vulnlabs/tree/master/Cross%20Site%20Request%20Forgery)
- [Cross-Site Scripting](https://github.com/daffainfo/vulnlabs/tree/master/Cross%20Site%20Scripting)
- [File Inclusion](https://github.com/daffainfo/vulnlabs/tree/master/File%20Inclusion)
- [Insecure Direct Object References](https://github.com/daffainfo/vulnlabs/tree/master/Insecure%20Direct%20Object%20References)
- [Misconfiguration](https://github.com/daffainfo/vulnlabs/tree/master/Misconfiguration)
- [SQL Injection](https://github.com/daffainfo/vulnlabs/tree/master/SQL%20Injection)
- [Unrestricted File Upload](https://github.com/daffainfo/vulnlabs/tree/master/Unrestricted%20File%20Upload)

## How to Install
```bash
$ git clone https://github.com/daffainfo/vulnlabs/
$ mv vulnlabs /var/www/html
$ mysql -e "CREATE DATABASE vulnlab;CREATE USER 'vulnlab'@'*' IDENTIFIED BY 'vulnlab';GRANT ALL ON vulnlab.* TO 'vulnlab'@'*';flush privileges;"
$ mysql -u vulnlab -p vulnlabs < vulnlabs.sql
$ chmod -R 777 /var/www/html/vulnlabs
$ chown -R www-data:www-data /var/www/html/vulnlabs
```

## To-Do
[] Add Dockerfile
[] Beautify the website