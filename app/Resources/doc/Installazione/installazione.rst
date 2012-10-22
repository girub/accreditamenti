=============
Installazione
=============

::

    $ git clone git@github.com:girub/accreditamenti
    $ cd accreditamenti
    $ phing install
    $ php bin/vendors install
    $ rm -rf app/cache/*
    $ rm -rf app/logs/*
    $ sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
    $ sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
    $ php app/console doctrine:database:drop --force
    $ php app/console doctrine:database:create
    $ phing buongiorno

Load Accreditamenti:

    http://accreditamenti/app_dev.php/
