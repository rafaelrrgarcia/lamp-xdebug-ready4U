# LAMP Ready4U

Lamp environment already with MariaDB and XDebug easily configured for use, having:

* PHP 7.2
* Apache2
* MariaDB
* XDebug

## Files

* `bin/php-apache` - PHP Dockerfile configuration.
* `config` - apache vhosts, php.ini, etc.
    - `apache2` - Apache virtual hosts.
    - `php` - PHP configs (DEV / PROD examples).
* `logs` - Log folder.
    - `apache2` - Apache logs. Also having PHP logs.
    - `xdebug` - XDebug logs.
    - `mysql` - MySQL logs.
* `www` - Root localhost folder.
* `.env` - Environment variables (git ignored).
* `.env.example` - Environment variables examples.
* `.gitignore` - Ignore some files to upload at git.
* `docker-compose.yml` - Docker instructions to mount environment.
* `initial-db.sql` - Initial dump for MySQL containing just an example of user table.
* `README.md` - This file you're reading right now.

## Instalation

1. Make sure you have Docker. You can get it in the official [Docker website](https://www.docker.com);
2. Clone this repository in any place of your computer;
3. Rename the file `.env.example` to `.env` and configure as below:
    ##### Must be configured
    * `HTTP_PORT` - HTTP port for apache server (80 by default);
    * `MYSQL-*` - MySQL user, database, pass and root pass;
    ##### Optional
    * `WEB_APP_PATH` - WWW folder, but you can change it as you wish;
    * `APACHE_VHOSTS_DIR` - Apache Virtual Hosts path folder;
    * `PHP_INI` -  Path to php.ini to use. DEV as default;
    * `XDEBUG_REMOTE_PORT` - Xdebug remote port. Keep 9001 for easy use;
    * `XDEBUG_IDE_KEY` - XDebug IDE Key
       - [setting XDebug in PhpStorm](https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html#integrationWithProduct);
    * `APACHE_LOG_DIR` - Apache logs. Also having PHP logs;
    * `MYSQL_LOG_DIR` - MySQL logs (MariaDB);
    * `XDEBUG_LOG_DIR` - XDebug log path;
4. Run `docker-compose up -d` in the project folder with a terminal;
5. It's Ready for you to use! You can access in `http://localhost:PORT_CHOOSED`

## XDebug

The XDebug library allows you to debug PHP in real time line by line.

For this, it is necessary to configure the environment and the IDE.

As I say before, it's possible to [configure XDebug in PhpStorm](https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html#integrationWithProduct) easily. For Visual Studio Code, do the steps below:

1. Click at `Run and Debug`;
2. If no configuration, create it clicking at `Add configuration`
3. In the file `launch.json` paste the code below:

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "XDebug on Docker",
            "type": "php",
            "request": "launch",
            "port": 9001,
            "pathMappings": {
                "/var/www/html/": "${workspaceFolder}/www"
            }
        }
    ]
}
```

To start debugging (independent of the IDE) do the following:

1. Install [Xdebug helper](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc) for Chrome / Edge / Opera;
2. Right click on the extension icon after installation and click on `Extension Options`
3. In IDE Key, choose PHPSTORM and click Save (there is no problem using other IDE's, the Key is the same)
4. Access the system and click on the extension icon. Choose Debug.
5. Now, in the IDE, just enter debug mode, include breakpoints in the code and update the system in the browser. The debugger will stop at the first breakpointed line found in the run.

Enjoy!
