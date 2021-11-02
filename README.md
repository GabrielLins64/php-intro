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
- [PHP Project structure](#php-project-structure)
- [Local serving with PHP](#local-serving-with-php)
- [PHP Interactive shell](#php-interactive-shell)
- [Creating a database for login](#creating-a-database-for-login)
- [Installing Materialize.css](#installing-materializecss)
- [Composer](#composer)
  - [Installation](#installation-1)
  - [Composer init](#composer-init)
  - [Composer require](#composer-require)
  - [Composer update](#composer-update)
  - [Removing a package](#removing-a-package)
  - [Composer install](#composer-install)
  - [Packagist](#packagist)
- [PHP Standards Recommendations (PSR)](#php-standards-recommendations-psr)
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

### PostgreSQL

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

#### Testing the connection to the DB

First, [create a postgres user](#psql-configs). Then, login into it, and create a database named `testdb`:

```sql
CREATE DATABASE testdb;
```

Logout from the psql shell and run the connection test script:

```shell
$ php7.4 bin/connection_test.php
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

## PHP Project structure

```php
project-root/
  .git/            # Git configuration and source directory
  assets/          # Uncompiled/raw CSS, LESS, Sass, JavaScript, images
  bin/             # Command line scripts
  config/          # Application configuration
  node_modules/    # Node.js modules for managing front end
  public/          # Publicly accessible files at http://example.com/
      index.php    # Main entry point - front controller
      ...
  src/             # PHP source code files
      Controller/  # Controllers
      ...
  templates/       # Template files
  tests/           # Unit and functional tests
  translations/    # Translation files
      en_US.yaml
  var/             # Temporary application files
      cache/       # Cache files
      log/         # Application specific log files
  vendor/          # 3rd party packages and components with Composer
  .gitignore       # Ignored files and dirs in Git (node_modules, var, vendor...)
  composer.json    # Composer dependencies file
  phpunit.xml.dist # PHPUnit configuration file
```

---

## Local serving with PHP

If you would like to serve your project using only the [PHP built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php), you can use the CLI command:

```shell
$ php7.4 -t <your-project-directory> -S <address>:<port>
```

Example:

```shell
$ php7.4 -t public -S localhost:8080
```

---

## PHP Interactive shell

If you want to use php in interactive shell mode to test some code or for any other purpose, just type the command:

```shell
$ php7.4 -a
```

---

## Creating a database for login

Use the sql script to create a login database, its table and its first user:

```shell
$ psql -U <username> postgres -h localhost -W -f bin/create_login_db.sql
```

---

## Installing Materialize.css

Go to https://materializecss.com/getting-started.html and copy the CDN links. Then, add the *css* links to your project header, and the *js* links to your project footer.

---

## Composer

### Installation

<small>*From the Composer Docs:</small>

Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

Composer is not a package manager in the same sense as Yum or Apt are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project. By default, it does not install anything globally. Thus, it is a dependency manager. It does however support a "global" project for convenience via the global command.

To install globally, navigate into `bin` directory, give execution permission to the composer installation scripts, then execute it.

```shell
$ cd bin
$ chmod +x composer_install.sh
$ ./composer_install.sh
```

Finally, for enabling the call for `composer` command from anywhere, move the `composer.phar` to a system/user bin directory:

```shell
$ mv composer.phar ~/.local/bin/composer
```

### Composer init

The `composer init` command creates the *composer.json*. This file describes the dependencies of your project and may contain other metadata as well. It typically should go in the top-most directory of your project/VCS repository. You can technically run Composer anywhere but if you want to publish a package to [Packagist](#packagist), it will have to be able to find the file at the top of your VCS repository. Usage:

```shell
$ composer init
```

### Composer require

In order to install a package, *monolog* as an example, type:

```shell
$ composer require monolog/monolog
```

### Composer update

To initially install the defined dependencies for your project, you should run the `update` command.

This will make Composer do two things:

- It resolves all dependencies listed in your `composer.json` file and writes all of the packages and their exact versions to the composer.lock file, locking the project to those specific versions. You should commit the `composer.lock` file to your project repo so that all people working on the project are locked to the same versions of dependencies (more below). This is the main role of the `update` command.

- It then implicitly runs the `install` command. This will download the dependencies' files into the `vendor` directory in your project. (The `vendor` directory is the conventional location for all third-party code in a project). In our example from above, you would end up with the Monolog source files in `vendor/monolog/monolog/`. As Monolog has a dependency on `psr/log`, that package's files can also be found inside `vendor/`.

If you only want to install, upgrade or remove one dependency, you can explicitly list it as an argument:

```shell
$ composer update monolog/monolog
```

### Removing a package

Remove the line containing the `<vendor>/<package-name>` from the `composer.json`, then type:

```shell
$ composer update
```

### Composer install

If there is already a composer.lock file in the project folder, it means either you ran the update command before, or someone else on the project ran the update command and committed the composer.lock file to the project (which is good).

Either way, running install when a composer.lock file is present resolves and installs all dependencies that you listed in composer.json, but Composer uses the exact versions listed in composer.lock to ensure that the package versions are consistent for everyone working on your project. As a result you will have all dependencies requested by your composer.json file, but they may not all be at the very latest available versions (some of the dependencies listed in the composer.lock file may have released newer versions since the file was created). This is by design, it ensures that your project does not break because of unexpected changes in dependencies.

So after fetching new changes from your VCS repository it is recommended to run a Composer install to make sure the vendor directory is up in sync with your composer.lock file.

```shell
$ composer install
```

### Packagist

Packagist.org is the main Composer repository. A Composer repository is basically a package source: a place where you can get packages from. Packagist aims to be the central repository that everybody uses. This means that you can automatically require any package that is available there, without further specifying where Composer should look for the package.

If you go to the Packagist.org website, you can browse and search for packages.

Any open source project using Composer is recommended to publish their packages on Packagist. A library does not need to be on Packagist to be used by Composer, but it enables discovery and adoption by other developers more quickly.

---

## PHP Standards Recommendations (PSR)

The PHP Standard Recommendation (PSR) is a PHP specification published by the [PHP Framework Interop Group](https://www.php-fig.org/). Similar to Python PIPs, it serves the standardization of programming concepts in PHP. The aim is to enable interoperability of components and to provide a common technical basis for implementation of proven concepts for optimal programming and testing practices. The PHP-FIG is formed by several PHP frameworks founders.

You can find the PSRs in details on [PHP-FIG](https://www.php-fig.org/psr/).

---

## References

[1] https://www.postgresqltutorial.com/

[2] https://www.php.net/manual/en/

[3] [Node Studio Treinamentos](https://www.youtube.com/channel/UCZZ0NTtOgsLIT4Skr6GUpAw)
