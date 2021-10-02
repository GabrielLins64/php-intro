<h1>Introduction to PHP on Ubuntu</h1>

This repository will show how to configure and use an environment with Apache 2, PHP 7.4 and PostgreSQL on **Ubuntu 20.04**.

---

<h2>Index</h2>

- [Dependencies](#dependencies)
- [Installation](#installation)
  - [Apache 2](#apache-2)
  - [PHP 7.4](#php-74)
    - [PostgreSQL](#postgresql)
      - [Testing the connection to the DB](#testing-the-connection-to-the-db)
- [PSQL configs](#psql-configs)
    - [Login to root postgres](#login-to-root-postgres)
    - [Create a role](#create-a-role)
- [References](#references)

---

## Dependencies

- [Ubuntu 20.04](https://releases.ubuntu.com/20.04/)
- [Apache 2](https://www.apache.org/)
- [PHP 7.4](https://www.php.net/)
- [PostgreSQL](https://www.postgresql.org/)

---

## Installation

### Apache 2

```shell
$ sudo apt update
$ sudo apt install apache2
```

And test the installation by accessing http://localhost.
You should see an Apache page.

### PHP 7.4

```shell
$ sudo apt update
$ sudo apt install software-properties-common
$ sudo apt install php7.4
```

If your apache already has another php version configured, just do:

```shell
$ sudo a2dismod php<old_version>
$ sudo a2enmod php7.4
$ sudo systemctl restart apache2
```

If you like to confirm that apache is using your php choosen version, go to `/var/www/html` and create an php informative page:

```shell
$ cd /var/www/html
$ sudo vim phpinfo.php
```

Add this code:

```php
<?php
  phpinfo(); 
?>
```

Then, go to http://localhost/phpinfo.php.

#### PostgreSQL

Install the php-pgsql

```shell
$ sudo apt install php7.4-pgsql
```

Enable the pgsql extension on php, by editing php configs:

```shell
$ sudo vim /etc/php/7.4/apache2/php.ini
```

Search for the line with:

```ini
;extension=pdo_pgsql
```

And remove the ";"

```ini
extension=pdo_pgsql
```

Then, restart apache:


```shell
$ sudo systemctl restart apache2
```

##### Testing the connection to the DB

First, [create a postgres user](#psql-configs). Then, login into it, and create a database named `testdb`:

```sql
CREATE DATABASE testdb;
```

Logout from the psql shell and run the connection test script:

```shell
$ php7.4 connection_test.php
```

---

## PSQL configs

#### Login to root postgres

PostgreSQL uses roles to represent user accounts. Typically, roles can log in are called login roles. They are equivalent to users in other database systems. When roles contain other roles, they are call group roles.

To connect to PostgreSQL using the postgres role, you switch over to the postgres account on your server by typing:

```shell
$ sudo -i -u postgres
```

Then, you can access the PostgreSQL using the psql by typing the following command:

```shell
postgres=# psql
```

#### Create a role

```sql
CREATE ROLE <username> WITH LOGIN CREATEDB PASSWORD '<yourpassword>';
```

Now you can quit postgres, back to the terminal user:

```sql
postgres=# \q
```

```shell
$ exit
```

and login as your newly created role:

```shell
$ psql -U <username> postgres -h localhost -W
```

---

## References

[1] https://www.postgresqltutorial.com/
