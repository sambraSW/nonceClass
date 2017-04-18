# nonceClass
a wrapper class for wordpress wp-nonce functions

this is a wrapper class for wordpress nonce function. 

- class name is : WP_Nonce_Wrapper 
- file location : wordpress/wp-includes/class-wp-nonce-wrapper.php

The class has static methods to access the wp_nonces* functions. It is also a singleton class
to allow furhter development in case a project common state is needed. 
To use the class you cann download the wp-settings.php where the class is instantiated as global variable.
