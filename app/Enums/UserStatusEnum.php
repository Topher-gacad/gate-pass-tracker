<?php

namespace App\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'Active';
    case INACTIVE = 'Inactive';
    case BLOCKLISTED =  'Blocklisted';
}
