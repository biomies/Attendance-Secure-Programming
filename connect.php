<?php
    require_once('DATABASE/database.php');
    $connection = new mysqli($config['server'],
                            $config['username'],
                            $config['password'],
                            $config['database']);
                            ?>