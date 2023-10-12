<?php

class UserService
{
    public static function sortByUsername(array $users, bool $sortDir = true): array
    {
        usort($users, function ($a, $b) use ($sortDir) {
            $sort = $a->username <=> $b->username;
            return $sortDir ? $sort : -$sort;
        });
        return $users;
    }

    public static function sortByBirthday(array $users, bool $sortDir = true): array
    {
        usort($users, function ($a, $b) use ($sortDir) {
            $sort = $a->birthday <=> $b->birthday;
            return $sortDir ? $sort : -$sort;
        });
        return $users;
    }
}
