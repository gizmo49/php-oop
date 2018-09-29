<?php
/**
 * connect to database
 */

class Connection{
	
	/*function __construct()
	{
	
	}
*/
	public static function Make($config){

        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
	}
}