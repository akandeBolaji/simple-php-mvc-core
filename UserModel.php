<?php

namespace akandebolaji\phpmvc;

use akandebolaji\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}