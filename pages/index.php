<!DOCTYPE html>
<html lang="en">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/api/_config.php"; ?>

<head>
    <?php 
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php"; 
    $title = $site_name . " | " . $root_site;
    $meta["title"] = $title;
    // $meta["title"] = "";
    $meta["description"] = "";
    ?>
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="title" content="<?php echo $meta["title"]; ?>">
    <meta name="author" content="<?php echo $meta["author"]; ?>">
    <meta name="copyright" content="<?php echo $meta["copyright"]; ?>">
    <meta name="description" content="<?php echo $meta["description"]; ?>">

    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:description" content="<?php echo $meta["description"]; ?>">

    <meta name="twitter:title" content="<?php echo $meta["title"]; ?>">
    <meta name="twitter:description" content="<?php echo $meta["description"]; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.min.css">
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <main>
        Index Page
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
</body>

</html>