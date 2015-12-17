<?php
namespace Xigen\Shortcuts;

trait Client
{
    public function clientGetAll($start = 0, $limit = 25)
    {
        return $this->get('client/users/getall/null/' . $start . '/ ' . $limit);
    }
}
