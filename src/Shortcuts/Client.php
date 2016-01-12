<?php
namespace Xigen\Shortcuts;

trait Client
{
    public function clientUsersGetAll($start = 0, $limit = 25)
    {
        return $this->get('client/users/getall/null/' . $start . '/ ' . $limit);
    }

    /**
     * Keeping backwords compatibility of this function
     */
    public function clientGetAll($start = 0, $limit = 25)
    {
        return $this->clientUsersGetAll($start, $limit);
    }
}
