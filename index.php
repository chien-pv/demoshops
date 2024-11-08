<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="./public/bootstrap-5.3.3/dist/css/bootstrap.css">
        <script
            src="./public/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="public/css/style.css">
        <script src="./public/js/index.js"></script>
        <title>Document</title>
    </head>
    <body>
        <?php include 'layouts/header.php'; ?>
        <main>
            <?php  
                switch ( $_GET['page']) {
                    case 'contact':
                        include 'pages/contact.php';
                        break;
                    case 'product':
                        include 'pages/product.php';
                        break;
                    default:
                        include 'pages/home.php';
                        break;
                }
            ?>
        </main>
        <?php include 'layouts/footer.php'; ?>
    </body>
</html>