
<?php

require_once ROOT_PATH . '/Model/DataBase.php';


class userModel extends Database {

    public function getUsers($limit) : array
    {
        return $this->select($limit);
    }

}