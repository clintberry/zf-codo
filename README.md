[ZFcodo](http://clintberry.com/2010/08/zend-framework-code-generator-with-scaffolding/) - ORM and Code Generator for Zend Framework
================================

About
-----
ZFcodo is an ORM and Code (scaffolding) Generator for Zend Framework. It is based on the [Qcubed](http://qcu.be/) 
and [Qcodo](http://qcodo.com) projects. To read more about the project visit [My Blog](http://clintberry.com/2010/08/zend-framework-code-generator-with-scaffolding/).
This project is in Alpha. It isn't stable and shouldn't be used in a production environment. 

Installation
------------

* Put the ZFcodo directory in the /library folder of your Zend Framework application
* Copy zf-codo.php into "/application/scripts" directory
* Add the settings from application.ini into your own application.ini
* Add the functions from Bootstrap.php into your own application/Bootstrap.php file

Usage
-----

ZFcodo creates scaffolding for your application based on your database schema. Once you have designed your database,
run the /application/scripts/zf-codo.php from the command line using PHP CLI. The code generator will generate all
your models, base models, forms, controllers, and views based on your schema. Instant application.

For more information see my [blog post](http://clintberry.com/2010/08/zend-framework-code-generator-with-scaffolding/).


