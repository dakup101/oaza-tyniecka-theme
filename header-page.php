<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>
    <header class="fixed top-0 left-0 w-full z-50 header-page" data-site_header>
        <div class="container px-0 mx-auto">
            <?php echo get_template_part( '/components/header/ot-site-nav-page' ) ?>
        </div>
    </header>