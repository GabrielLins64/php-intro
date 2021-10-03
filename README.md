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
- [Apache 2 Virtual Hosts](#apache-2-virtual-hosts)
    - [Move the project to /var/www/](#move-the-project-to-varwww)
    - [Permissions in /var/www/](#permissions-in-varwww)
    - [Create the virtual host files](#create-the-virtual-host-files)
    - [Activate the new Virtual Host files](#activate-the-new-virtual-host-files)
    - [Configure the Host file from local server](#configure-the-host-file-from-local-server)
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
$ php7.4 scripts/connection_test.php
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
$ psql
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

## Apache 2 Virtual Hosts

How to access yourlocaldomainname.com using apache:

#### Move the project to /var/www/

Create / move your project folder, for example `cursophp.com/`, into `/var/www/`:

```shell
$ sudo mkdir /var/www/cursophp.com
```

And insert your `index.php` file into it.

#### Permissions in /var/www/

Add the apache user to the group of the logged in user:

```shell
$ sudo usermod -a -G www-data $USER
```

Change the group-level owner of the /var/www folder and its contents to the Apache group:

```shell
$ sudo chown -R $USER:www-data /var/www
```

Now we need to modify the permissions to ensure that the user has unrestricted access (write and read) to the files and that at the group level can read and execute the files. This way you ensure that other users can see your files (access the site) and your user has write access:

```shell
$ sudo chmod -R 775 /var/www
```

#### Create the virtual host files

The files that define the Virtual Host are responsible for defining the configuration of each domain. Apache comes with a default file and we are going to copy it to use it as a starting point. Go to `/etc/apache2/sites-available/` and duplicate the vhost file, adapting it for your project:

```shell
$ cd /etc/apache2/sites-available/
$ sudo cp 000-default.conf cursophp.com.conf
```

Now edit the new file, by leaving this content in it:

```apache
<VirtualHost *:80>
	ServerName cursophp.com
	ServerAlias www.cursophp.com
	ServerAdmin admin@cursophp.com
	DocumentRoot /var/www/cursophp.com

	<Directory "/var/www/cursophp.com/">
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		Require all granted
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

#### Activate the new Virtual Host files

Activate it on Apache and reload the server by doing:

```shell
$ sudo a2ensite cursophp.com.conf
$ sudo systemctl reload apache2
```

#### Configure the Host file from local server

It is necessary to “warn” the local server that the files related to these domains are configured locally, so that they are not searched on the internet. For that, edit the `/etc/hosts` file, and duplicate the second line, but typing our site domain name, leaving the file like this:

```
127.0.0.1       localhost
127.0.1.1       data-hunter-gl
127.0.1.1       cursophp.com
```

And, finally, you should be able to navigate into www.cursophp.com in your browser.

---

## References

[1] https://www.postgresqltutorial.com/
