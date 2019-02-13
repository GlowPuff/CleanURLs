<?php

$serverPath = $_SERVER["HTTP_HOST"];
$href = "/";

// If we're requesting a page other than root,
// get the page id (ie: url slug) that is being passed here by .htaccess mod_rewrite
if (isset($_GET['id'])) {
    $id = str_replace('..', '', $_GET['id']);
    $id = str_replace('/', '', $id);
    $id = strtolower($id);

    // Handle 404 - Requested page does not exist, redirect to home page (default behavior)
    // OR send the header() Location to a customized 404 page that you create
    if (!file_exists("./pages/" . $id . ".html")) {
        header("Location: /");
        exit;
    }

    include "./pages/common/header.php";
    include "./pages//" . $id . ".html";
    include "./pages/common/footer.php";
} else {
    // Handle the root URL
    $id = "index";
    include "./pages/common/header.php";
    include "./pages//" . $id . ".html";
    include "./pages/common/footer.php";
}
