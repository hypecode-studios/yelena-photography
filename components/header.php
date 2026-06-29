<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Home'; ?> | Yelena Seneviratne Photography</title>
    <link rel="stylesheet" href="css/global.css">
    <?php if (isset($pageStyles)): ?>
        <link rel="stylesheet" href="<?php echo $pageStyles; ?>">
    <?php endif; ?>
</head>