<?php

class Database {

    public function select(int $limit) : array {
        try {
            $users = json_decode(file_get_contents(DATABASE_FILE), true);
            $users = array_slice($users, 0, $limit);
            return $users;
        } catch (Exception $e) {
            // Se ocorrer uma exceção, você pode optar por lidar com ela de alguma forma, ou simplesmente deixar a exceção ser propagada.
            throw new Exception($e->getMessage());
        }
        return false;
    }
}
