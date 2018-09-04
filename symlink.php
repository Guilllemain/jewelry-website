<?php

$linkName = '/home/karlmazlld/www/storage';

$target = '/home/karlmazlld/www/laravel/storage/app/public';

symlink($target, $linkName);
