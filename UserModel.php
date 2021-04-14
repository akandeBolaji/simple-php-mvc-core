<?php

namespace akandebolaji\phpmvc;

use akandebolaji\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

    public function saveApiToken()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("UPDATE $tableName SET api_token='$this->api_token', api_token_expire_at = '$this->api_token_expire_at' WHERE id = $this->id");
        $statement->execute();
        return true;
    }

    public function unRollApiKey()
    {
        $tableName = $this->tableName();
        $statement = self::prepare("UPDATE $tableName SET api_token=null, api_token_expire_at = null WHERE id = $this->id");
        $statement->execute();
        return true;
    }
}