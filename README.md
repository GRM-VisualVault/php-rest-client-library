# php-rest-client-library
A PHP Client Library for accessing the VisualVault REST API. 

REQUIREMENTS:

php5, php5-curl

WELCOME TO THE PHP VISUAL VAULT REST API CLIENT LIBRARY

* This application serves as a method for accessing the Visual Vault REST API while using PHP.

* Start with the token.php page and declare your constants on that page (your credentials). 

* By doing so, a token will be automatically generated for you each time you make a request with a method.

* Each endpoint has a dedicated class assigned to it. i.e. to see the methods for the files enpoint see files.php.

* Inside each of the specified classes, there lies the methods to access the specified enpoints. 

* Some methods may take parameters, where some may not. 

* All parameters should be passed in as strings unless otherwise noted in the description above the method.  

* Read the description on each method to understand how to call the method appropriately.

NOTE:

* Once you define your constants in token.php place token.php and the /endpoints folder in your application. 
You will also need to place require_once 'pathTo/endpoints/filename.php' on each page using a method from the library. 
Currently all the methods lie in php files in the endpoints folder.

* You may use requests.php also to make requests with this application as well. Follow instructions on the page. 
Examples on the requests.php page will show you how to properly execute a request for each method. The page serves
as example code. 

* For more information on any of the endpoints, datatypes, or anything referring to the REST API please refer
to the HTTP API section at http://developer.visualvault.com/ where each endpoint and there parameters are
covered in great detail.
