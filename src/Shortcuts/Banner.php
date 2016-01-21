<?php
namespace Xigen\Shortcuts;

trait Banner
{
    // Banner.php

    // Group.php.
    public function bannerGroupGet($bannerHash)
    {
        return $this->get('banner/group/get/' . $bannerHash);
    }

    public function bannerGroupGetall()
    {
        return $this->get('banner/group/getall/null');
    }

    // Render.php
    public function bannerRenderGetall()
    {
        return $this->get('banner/group/getall/null');
    }
}
