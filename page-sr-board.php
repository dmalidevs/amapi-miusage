<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nice</title>
    <?php wp_head(); ?>
    <style>
        #wpadminbar {
            margin-block-start: 0px !important;
        }

        .wp-site-blocks {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
</head>

<body <?php body_class() ?>>
    <main id="render-board">
        <?php
            echo 'working';
            /* if (is_user_logged_in()) {
                $page_to_load = get_post(get_the_ID());
                if ($page_to_load) {
                    echo apply_filters('the_content', $page_to_load->post_content);
                }
            } else {
                echo '<p>You are not logged in. <a href="' . esc_url(wp_login_url(home_url('/sr-board'))) . '">Click here to log in</a>.</p>';
            } */
        ?>
    </main>
    <?php wp_footer() ?>
</body>

</html>