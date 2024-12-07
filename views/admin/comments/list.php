<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container">
    <div class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Hoạt động</th>
                <th scope="col">
                    hành động
                </th>
               </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment) : ?>
                <tr>
            <th scope="row"><?= $comment['id'] ?></th>
            <td><?= $comment['id']?></td>
            <td><?= $comment['fullname']?></td>
            <td><?= $comment['content']?></td>
            <td><?= $comment['active'] ? 'hiện' : 'ẩn' ?></td>
            <td>
                <a href="<?= ADMIN_URL . '?ctl=active-comment&id=&' . 
                $comment ['id'] .'&value'. $comment['active'] ?>" 
                class="btn btn-primary"><?= 
                $comment['active'] ? 'hiện' : 'ẩn' ?></a>
            </td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</div>












<?php include_once ROOT_DIR . "views/admin/footer.php" ?>

<style>
    .cart-header h2 {
        font-size: 1.5rem !important;
        font-weight: thin !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .cart-header {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        margin-top: 20px;
    }

 
    .btn {
        border-radius: 0;
    }

    .addbtn {
        background-color: #28a745;
        margin-bottom: 20px;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    /* Nút "Sửa danh mục" */
    .btnedit {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    /* Nút "Xóa danh mục" */
    .btndanger {
        background-color: rgb(202, 16, 16);
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    /* Bảng */
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table .btn {
        margin: 0 5px;
    }
</style>