<?php
namespace Xigen\Shortcuts;

trait Client
{
    // Client.php

    // Users.php
    /**
     * TODO: Add POST options
     */
    public function clientUsersAdd()
    {
        return $this->get('client/users/add/');
    }

    public function clientUsersDelete($Hash)
    {
        return $this->get('client/users/delete/' . $Hash);
    }

    /**
     * TODO: Add POST options
     */
    public function clientUsersSave($Hash)
    {
        return $this->get('client/users/save/');
    }

    /**
     * TODO: Add POST options
     */
    public function clientUsersImport($Hash)
    {
        return $this->get('client/users/import/');
    }

    public function clientUsersExport($Hash)
    {
        return $this->get('client/users/export/' . $Hash);
    }

    public function clientUsersGet($Hash)
    {
        return $this->get('client/users/getall/' . $Hash);
    }

    public function clientUsersGetAll($start = 0, $limit = 25)
    {
        return $this->get('client/users/getall/null/' . $start . '/ ' . $limit);
    }

    /**
     * Keeping backwords compatibility of clientUsersGetAll() function
     */
    public function clientGetAll($start = 0, $limit = 25)
    {
        return $this->clientUsersGetAll($start, $limit);
    }
}
