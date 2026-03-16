<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Samyak - Centre for Sanskrit Heritage & Knowledge">
    <meta name="keywords" content="Sanskrit, Heritage, Knowledge, Culture, Indian">
    <title><?php echo isset($page_title) ? $page_title . ' | Samyak' : 'Samyak - Centre for Sanskrit Heritage & Knowledge'; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@400;700&family=Noto+Serif+Devanagari:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo (isset($is_subpage) && $is_subpage) ? '../assets/css/style.css' : 'assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo (isset($is_subpage) && $is_subpage) ? '../assets/css/responsive.css' : 'assets/css/responsive.css'; ?>">
</head>
<body>
