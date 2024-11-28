<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDecor - <?= $title ??''?></title>
    <link rel="stylesheet" href="/views/template/css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<style>

    .text-matcha {
        color:rgb(65, 49, 36); 
    }

    .carousel-caption {
        top: 8%; 
    }

    .carousel-caption h5 {
        font-size: 2.5rem; 
    }

    .carousel-caption p {
        font-size: 1rem; 
    }
    .carousel-inner img {
                height: 450px; 
                object-fit: cover; 
                width: 100%; 
            }
            .carousel-control-prev,
    .carousel-control-next {
        opacity: 0; 
        
    }

    .product-box {
    text-align: center;
    padding: 10px;
    transition: border 0.3s ease; /* Chỉ có border sẽ chuyển động mượt mà */
    border: 2px solid transparent; /* Border mặc định là transparent */
    background-color: #fff; 
    height: 100%; 
    display: flex;
    flex-direction: column; 
    justify-content: space-between; 
}

.product-box:hover {
    border: 2px solid #ddd; /* Khi hover, border sẽ hiển thị */
}


.product-info {
    margin-top: 10px; 
}

.product-img {
    width: 100%;
    height: auto;
    max-height: 150px; 
    object-fit: cover; 
    border-radius: 8px;
    cursor: pointer;
}

.product-buttons {
    margin-top: 10px; 
}




.product-name {
    font-size: 1rem;
    font-weight: lighter; 
    margin: 10px 0;
    color: black;
    text-decoration: none;
    font-family: Arial, sans-serif; 
}



.product-price {
    color: black;
    font-size: 1rem;
    font-weight: lighter;
}

</style>


    <?php include_once ROOT_DIR . "views/clients/header.php"?>

    <div id="productSlideshow" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $images = ['3.jpg', '4.jpg'];
            foreach ($images as $index => $image): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= ROOT_URL . '/bannerimages/' . $image ?>" class="d-block w-100" alt="Slideshow Image <?= $index + 1 ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-caption d-none d-md-block text-center">
        <h5 class="text-matcha font-weight-bold">BỘ SƯU TẬP MÙA THU</h5>
        <p class="text-matcha">Vẻ đẹp dịu êm trong từng đường nét</p>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
      

        <h2>Bàn gỗ</h2>
        <div class="row g-4">
            <?php foreach ($tables as $table): ?>
                <div class="col-md-3">
    <div class="product-box">
        <img src="<?= ROOT_URL .  $table['image']?>" alt="Product Image" class="product-img">
        <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=details&id=' . $table['id']?>" class="product-name">
                <h5><?= $table['name'] ?></h5>
            </a>
            <div>
                <span class="product-price"><?= number_format($table['price'])?>đ</span>
            </div>
        </div>
        <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $table['id'] ?>"  style="border-radius: 0;">Xem thêm</a>
</div>


    </div>
</div>


            <?php endforeach?>
        </div>
        <h2>Tủ ly</h2>
        <div class="row g-4">
            <?php foreach ($cupboards as $cupboard): ?>
                <div class="col-md-3">
    <div class="product-box">
        <img src="<?= ROOT_URL .  $cupboard['image']?>" alt="Product Image" class="product-img">
        <div class="product-info">
            <a href="<?=ROOT_URL.'?ctl=details&id=' . $cupboard['id']?>" class="product-name">
                <h5><?= $cupboard['name'] ?></h5>
            </a>
            <div>
                <span class="product-price"><?= number_format($cupboard['price'])?>đ</span>
            </div>
        </div>
        <div class="product-buttons d-flex">
    <a class="btn btn-outline-dark " href="<?= ROOT_URL.'?ctl=details&id=' . $cupboard['id'] ?>"  style="border-radius: 0;">Xem thêm</a>
</div>


    </div>
</div>
            <?php endforeach?>
        </div>
    </div>

    <?php include_once ROOT_DIR . "views/clients/footer.php"?>
</body>
</html>
