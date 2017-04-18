<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//declare(strict_types = 1); //this is to ensure input parameters are correct
error_reporting(E_ALL); 
ini_set("display_errors",'1');
/**
 * Description of WP_Nonce_Wrapper
 * this is a wrapper class around the nonce functions
 * the class has static methods that call same name nonce
 * functions.
 * @ since WP 4.7.3 
 * @author sbr
 */
class WP_Nonce_Wrapper {

    //one nonce object only in whole project
    private static $nonceInstance = NULL;

    /**
    * Instance method 
    * @return WP_Nonce_Wrapper only instance in the project
    * 
    */
    public static function Instance()
    {

    if ( self::$nonceInstance === null ) {
        self::$nonceInstance = new WP_Nonce_Wrapper();
    }
    return self::$nonceInstance;
    }

    /**
    * Private  constructor
    *
    */
    private function __construct()
    {

    } 
    
    /**
     * wp_nonce_field
     * method wrapper around wp_nonce_field located in wp-includes/functions.php
     * @param type $action
     * @param type $name
     * @param type $referer
     * @param type $echo
     */

    static public function wp_nonce_field( $action=Null, $name='_wpnonce', $referer=true, $echo=true )
    {

    $temp = wp_nonce_field( $action, $name, $referer, $echo ); 
    return $temp; 

    }    
    
    /**
     * wp_nonce_ays 
     * method wrapper around wp_nonce_ays located in wp-includes/functions.php
     * @param string $action
     */
    static public function wp_nonce_ays( string $action ){
        
        wp_nonce_ays($action); 
    }
    
    /**
     * wp_nonce_url wrapper around wp_nonce_url located in wp-includes/functions.php
     * @param string     $actionurl
     * @param int|string $action
     * @param string     $name
     */
    static public function wp_nonce_url( string $actionurl, $action = -1,  $name = '_wpnonce' ){
        
        $temp = wp_nonce_url( $actionurl, $action, $name );
        return $temp; 
        
    }
    
    
    
    /**
    * wp_referer_field wrapper around wp_referer_field located in wp-includes/functions.php
    * @param bool $echo
    * @return string referer field HTML markup
    */
    static public function wp_referer_field (  $echo = true ){
        
        $temp = wp_referer_field( $echo );
        return $temp; 
        
    }
    
    
    /**
    * wp_verify_nonce wrapper around wp_verify_nonce located in wp-includes/pluggable.php
    * @param string     $nonce  Nonce that was used in the form to verify
    * @param string|int $action Should give context to what is taking place and be the same when nonce was created.
    * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
    *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
    */
    static public function wp_verify_nonce( string $nonce, $action = -1 ){
        
        $temp = wp_verifiy_nonce( $nonce, $action ); 
        return $temp; 
      
    }
    
    /**
    * wp_create_nonce wrapper around wp_create_nonce located in wp-includes/pluggalbe.php
    * @param string|int $action Scalar value to add context to the nonce.
    * @return string The token.
    */
    static public function wp_create_nonce( $action = -1 ){
        
        $temp = wp_create_nonce( $action ); 
        return $temp; 

    }
    /**
    * check_admin_referer wrapper around check_admin_referer in wp-includes/pluggable.php
    * @param int|string $action    Action nonce.
    * @param string     $query_arg Optional. Key to check for nonce in `$_REQUEST` (since 2.5).
    *                              Default '_wpnonce'.
    * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
    *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
    */
    static public function check_admin_referer( $action = -1, $query_arg = '_wpnonce'){
        
        $temp = check_admin_referer( $action, $query_arg); 
        return $temp; 
    }
    
    
    
    /**
    * wp_check_ajax_referer wrapper for wp_check_ajax_referer located in wp-includes/pluggable.php 
    * @param int|string   $action    Action nonce.
    * @param false|string $query_arg Optional. Key to check for the nonce in `$_REQUEST` (since 2.5). If false,
    *                                `$_REQUEST` values will be evaluated for '_ajax_nonce', and '_wpnonce'
    *                                (in that order). Default false.
    * @param bool         $die       Optional. Whether to die early when the nonce cannot be verified.
    *                                Default true.
    * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
    *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
    */
    static public function wp_check_ajax_referer( $action = -1, $query_arg = false, $die = true ){
        
        $temp = wp_check_ajax_referer( $action, $query_arg, $die); 
        return $temp; 
        
        
    }
    
    /**
     * wp_nonce_tick wrapper for wp_nonce_tick located in wp-inclues/pluggable.php
     * @return float Float value rounded up to the next highest integer.
     */
    static public function wp_nonce_tick(){
        
        $temp = wp_nonce_tick(); 
        return $temp; 
    }
    
    
    
    


}
