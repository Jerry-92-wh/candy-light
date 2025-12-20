<?php

    if($_GET['user'] == 'wcc')
    {
        if ($_GET['pass'] == 'wcc2024')
        {
            if ($_GET['update'] == 'true')
            {
                if ($_GET['action'] == 'live')
                {
                    // Code here
                }
                elseif ($_GET['action'] == 'demo')
                {
                    // Code here
                }
                else
                {
                    // Code here
                }
            }
        }
    } else {
        header('Location: index.php');
    }
?>