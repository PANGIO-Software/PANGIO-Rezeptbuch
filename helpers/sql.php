<?php

if (!function_exists('getSQL')) {
    function getSQL(string $folderName, string $fileName) :string {
        $path = dirname(__DIR__) . "/sql/$folderName/$fileName.sql";

        return fileGetContents($path);
    }
}

if (!function_exists('getSelectQuery')) {
    function getSelectQuery(string $folderName) :string {
        return getSQL($folderName, 'select');
    }
}

if (!function_exists('getSelectByIDQuery')) {
    function getSelectByIDQuery(string $folderName) :string {
        return getSQL($folderName, 'select-by-id');
    }
}

if (!function_exists('getSelectByUsernameQuery')) {
    function getSelectByUsernameQuery(string $folderName) :string {
        return getSQL($folderName, 'select-by-username');
    }
}

if (!function_exists('getInsertQuery')) {
    function getInsertQuery(string $folderName) :string {
        return getSQL($folderName, 'insert');
    }
}

if (!function_exists('getUpdateQuery')) {
    function getUpdateQuery(string $folderName) :string {
        return getSQL($folderName, 'update');
    }
}

if (!function_exists('prepareAndExecuteSQL')) {
    function prepareAndExecuteSQL(PDO $db, string $sql, array $params) :bool {
        return $db->prepare($sql)->execute($params);
    }
}

if (!function_exists('prepareAndExecuteAndFetchSQL')) {
    function prepareAndExecuteAndFetchSQL(PDO $db, string $sql, array $params) :array {
        $statement = $db->prepare($sql);
        $statement->execute($params);

        return $statement->fetchAll();
    }
}