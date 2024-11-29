<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDecor - <?= $title ??''?></title>
    <link rel="stylesheet" href="/views/template/css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="container w-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/homedecorfinal/">HomeDecor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Đăng ký
                                <i class="fa-solid fa-user"></i>
                                <?= $_SESSION['user']['fullname'] ?? '' ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if(isset($_SESSION['user']) ) :?>
                                <li>
                                    <a class="dropdown-item" href="<?= ROOT_URL?>">profile</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=logout'?>">logout</a>
                                </li>
                                <?php else :?>
                                    <li>
                                    <a href="<?= ROOT_URL . '?ctl=login'?>">login</a>
                                </li>
                                <li>
                                <a href="<?= ROOT_URL . '?ctl=register'?>">register</a>
                                </li>
                                <?php endif?>
       
                            </ul>
                        </li>
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($categories as $cate): ?>
                            <li>
                                <a href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>" class="dropdown-item"><?= htmlspecialchars($cate['cate_name']) ?></a>
                            </li>
        <?php endforeach; ?>
    </ul>
</li>


                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>