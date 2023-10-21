<?php

namespace App\Enums;

enum ArticleStatus:string
{
    case PUBLISHED = 'published';
    case PREVIEW = 'preview';
}
