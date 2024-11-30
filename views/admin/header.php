<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDecor-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="container w-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=ADMIN_URL?>">HomeDecor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listdm' ?>">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listsp' ?>">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listuser' ?>">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/homedecorfinal/">Client</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>