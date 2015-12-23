<?php
namespace Xigen\Shortcuts;

trait Templates
{
    public function templateGetUsersSignature($UserHash)
    {
        return $this->get('templates/render/json/' . $UserHash);
    }
}
