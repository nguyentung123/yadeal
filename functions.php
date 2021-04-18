<?php

define("WP_DEV_MODE", true);

include('features/theme-setup.php');
include('features/enqueue.php');
include('features/custom-post-type.php');

// Size Customizer
include('features/customizer.php');

//general
include('features/general.php');

//hook
include('features/hook.php');

//ajax
include('features/ajax.php');