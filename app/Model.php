<?php

namespace App;

use PDO;

/**
 * Abstract Model class.
 */
class Model
{
    /**
     * Returns all advertisements from database.
     *
     * @return object
     */
    public static function getAllAdvertisement() 
    {
        return self::getDB()
        ->query("SELECT ad.`title`, u.`name` as `user` FROM `advertisements` as ad LEFT JOIN `users` as u ON ad.`userid` = u.`id`")
        ->fetchAll();
    }

    /**
     * Returns all users from database.
     *
     * @return object
     */
    public static function getAllUser() 
    {
        return self::getDB()
        ->query("SELECT `id`, `name` FROM `users`")
        ->fetchAll();
    }

    
    /**
     * Connecting to database based on Config class options.
     * Uses PDO.
     *
     * @return PDO
     */
    private static function getDB()
    {
        // Setup PDO Data Source Name
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $options = [
            // Throw an Exception when an error occurs
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Always fetch data in array.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        // Connecting to database
        return new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    }
}
