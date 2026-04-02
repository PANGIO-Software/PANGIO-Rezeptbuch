<?php
namespace App\Models;

class UserModel extends BaseModel {
    private string $folder = 'users';

    public function select(int $id = 0, string $username = '', bool $deleted = false) :array {
        $params['deleted'] = $deleted;

        if ($id > 0) {
            $sql = getSelectByIDQuery($this->folder);
            $params['id'] = $id;
        }
        elseif (!empty($username)) {
            $sql = getSelectByUsernameQuery($this->folder);
            $params['username'] = $username;
        }
        else {
            $sql = getSelectQuery($this->folder);
        }

        $result = prepareAndExecuteAndFetchSQL($this->db, $sql, $params);

        return !empty($result) && ($id > 0 || !empty($username)) ? $result[0] : $result;
    }

    public function insert(array $data) :bool {
        return prepareAndExecuteSQL($this->db, getInsertQuery($this->folder), $data);
    }

    public function update(array $data) :bool {
        return prepareAndExecuteSQL($this->db, getUpdateQuery($this->folder), $data);
    }
}