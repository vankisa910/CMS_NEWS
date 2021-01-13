<?php

class Database {

    static $dbConnection = NULL;
    
    
    static function dbConnect() {
        
        if(Database::$dbConnection == NULL) {
           Database::$dbConnection  =  mysqli_connect("localhost", "root", "", "mycms");
        }
        
        return Database::$dbConnection;
    }

    static function query($query) { 

        $connection = Database::dbConnect();

        if(!$connection) {
            echo mysqli_connect_error();
            return;
        }

        $databaseResult = mysqli_query($connection, $query);

        if(!$databaseResult) {
            echo '<div class="db-error">';
            echo mysqli_error($connection);
            echo '</div>';
        }

        return $databaseResult;
    }

    static function getLastInsertedId() { 
        return mysqli_insert_id(Database::dbConnect());
    }
    
    static function get($databaseQuery) {
        
        $databaseResultSet = Database::query($databaseQuery);
        return mysqli_fetch_assoc($databaseResultSet);
    }
    
    static function getAll($databaseQuery) {
        
        $resultCollection   = array();
        $databaseResultSet  = Database::query($databaseQuery);
        while($result = mysqli_fetch_assoc($databaseResultSet)) {
            array_push($resultCollection, $result);
        }
        
        return $resultCollection;
    }
    
    static function fetch($databaseResultSet) {
        return mysqli_fetch_assoc($databaseResultSet);
    }
    
    static function count($tableName) {
        
        $databaseQuery = "SELECT COUNT(*) AS count FROM $tableName";
        return Database::get($databaseQuery)['count'];
    }
    
    static function insert($tableName, $columnCollection) {
//      $createNewUserRequest = "INSERT INTO tb_users(name, fname, lname, email, password)"
//                            . "VALUES('$userName', '$userFname','$userLname','$userEmail','$userPass')";
//
//      return Database::query($createNewUserRequest);
        
        $queryBuilder = "INSERT INTO $tableName (";
        foreach ($columnCollection as $key => $value) {
            $queryBuilder .= $key . ',';
        }
        $queryBuilder = substr_replace($queryBuilder, ")", strlen($queryBuilder) - 1);
        $queryBuilder .= ' VALUES(';
        
        foreach ($columnCollection as $key => $value) {
            $queryBuilder .= '\'' . $value . '\',';
        }
        $queryBuilder = substr_replace($queryBuilder, ")", strlen($queryBuilder) - 1);
        
        return Database::query($queryBuilder);
    }
    
    static function update($tableName, $columnCollection, $whereCollection ) {
      
//Database::query("UPDATE tm_categories SET title = '$categoryTitle' WHERE id = $categoryId ") 
        $queryBuilder = "UPDATE $tableName SET ";
        
        foreach ($columnCollection as $key => $value) {
            $queryBuilder .= "$key = '$value',";
        }
        
        $queryBuilder  = substr_replace($queryBuilder, " ", strlen($queryBuilder) - 1);
        $queryBuilder .= " WHERE ";
        foreach ($whereCollection as $key => $value) {
            $queryBuilder .= "$key = '$value',";
        }        
        
        $queryBuilder = substr_replace($queryBuilder, " ", strlen($queryBuilder) - 1);
        return $queryBuilder;
    }
    
    static function delete($tableName, $whereCollection) {
     
//Database::query("DELETE FROM tm_categories WHERE id = $categoryId");   
        $queryBuilder = "DELETE FROM $tableName WHERE ";
        
        foreach ($whereCollection as $key => $value) {
            $queryBuilder .= "$key = '$value',";
        }                   
        
        $queryBuilder = substr_replace($queryBuilder, " ", strlen($queryBuilder) - 1);
        return $queryBuilder;
    }
}