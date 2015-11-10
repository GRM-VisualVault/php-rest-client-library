# php-rest-client-library
A PHP Client Library for accessing the VisualVault REST API. 

REQUIREMENTS:

php5, php5-curl

WELCOME TO THE PHP VISUAL VAULT REST API CLIENT LIBRARY

. This application serves as a method for accessing the Visual Vault REST API while using PHP to handle the requests.

. This application may also serve as a library for accessing the endpoints in your own application. 

. Start with the token.php page and declare your constants on that page (your credentials). 

. By doing so, a token will be automatically generated for you each time you make a request with a method.

. Each endpoint has a dedicated class assigned to it. i.e. to see the methods for the files enpoint see files.php.

. Inside each of the specified classes, there lies the methods to access the specified enpoints. 

. Some methods may take parameters, where some may not. 

. All parameters should be passed in as strings unless otherwise noted in the description above the method.  

. Read the description on each method to understand how to call the method appropriately.

NOTE:

. If you will be using this application as a library to make requests in your own application, do not include requests.php
in your application or simply commment out the page. But please do use requests.php as a reference for how to properly 
call each method, instatiate each class, and how to successfully pass in the parameters needed for each method.

. If you will be using this application to make requests not in your own application then head to the requests.php page.
 A class has been instantiated for each endpoint already. Under the instantiation you may call the methods 
 needed for your request. Examples on the requests.php page will show you how to properly execute a request for each method. 

. For more information on any of the endpoints, datatypes, or anything referring to the REST API please refer
  to the HTTP API section at http://developer.visualvault.com/ where each endpoint and there parameters are
  covered in great detail.
