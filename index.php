<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css"/>

    <title>New HMTL document by NewJect</title>

    </head>
    <body>
    <div class="container">
        <section>
            <h1>Navbar Guide</h1>
        </section>
        <section>
            <p>The Idea behind the project is to provide automated navigation to your site. The thought behind this project came behind working with sites with over 100's of pages behind them, using only static content. It can be quite difficult to constantly change the navigation manually when working with so many files, so the idea behind this is to remove the need to ever update your navigation again. You only need to worry about the styling! </p>
        </section>
        <section>
            <h2>How it works</h2>
            <p>The auto nav has a configuration behind it, so you can choose what file types to show, what folders to hide, and what files you can hide. More features will be available in the future, however the navigation will look through your directory root and find all files available in the project without you needing to do anything. This makes life easier, and all you need to do is design the end product!</p>
        </section>
        <section>
            <h2>Here's an example</h2>
            <?php include('/includes/auto-nav.php'); ?>
        </section>
    </div>

    

    </body>
</html>