dhdofiles
=========

DreamObjects File Lister

Displays a list of objects contained within a bucket in DreamObjects.

The file lister is a simple PHP script that will list the objects of a bucket on a web page.  It uses [AWS SDK for PHP 2](http://docs.aws.amazon.com/aws-sdk-php-2/guide/latest/index.html).  

The page displays signed links to the objects and are valid for 30 minutes.  This allows access to objects that have ACLs set to private in DreamObjects.  *You should restrict access to this file if you want to keep your objects private!*

Configuration
-------------

Edit ``dhdocreds.php`` to include your DreamObjects access key and secret key.

*Ensure you set the proper permissions on your credential file*  I recommend:

    $ chmod 400 dhdocreds.php

Edit ``dhdofiles.php`` to include the name of the bucket of which you'd like to view the contents.

Required
--------

Ensure you have the [AWS SDK for PHP2](http://pear.amazonwebservices.com/get/aws.zip) on your web server.

    $ wget http://pear.amazonwebservices.com/get/aws.zip
    $ unzip aws.zip -d aws
