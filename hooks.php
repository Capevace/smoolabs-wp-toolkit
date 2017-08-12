<?php

add_action('template_redirect', array('SMMaintenance', 'redirect'));
add_action('login_head', array('SMLogin', 'get_head'));
