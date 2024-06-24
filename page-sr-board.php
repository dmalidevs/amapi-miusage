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
    <div id="render-board"></div>
    <?php wp_footer() ?>
</body>

</html>