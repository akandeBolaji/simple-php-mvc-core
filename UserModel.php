<?php

namespace akandebolaji\phpmvc;

use akandebolaji\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

    public function saveApiToken()
    {
        $tableName = $this->tableName();
        print_r([$this->api_token, $this->api_token_expire_at]);
        $statement = self::prepare("UPDATE $tableName SET api_token='$this->api_token', api_token_expire_at = '$this->api_token_expire_at' WHERE id = $this->id");

        $statement->execute();
        return true;
    }
}