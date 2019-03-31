<?php

namespace app\helpers\RememberUserInfo;

class RememberUserInfo
{

    public static function rememberAllToDB($response)
    {
        if ($response === null) {
            return ;
        }

        new RememberLevel($response);
        new RememberUser($response);
        new RememberCurses($response);
        new RememberSkills($response);
        new RememberProjects($response);
        new RememberAchievements($response);
    }

}