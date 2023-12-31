<h1 class="test">Test</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title m-b-0">Static Table With Checkboxes</h5>

    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>
                    <label class="customcheckbox m-b-20">
                        <input type="checkbox" id="mainCheckbox"/>
                        <span class="checkmark"></span>
                    </label>
                </th>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Sứa chứa</th>
                <th scope="col">Giá</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="customtable">
<!--            --><?php
//              var_dump($data);
//            ?>
            <?php foreach ($data as $index => $loaiphong):?>
            <?php extract($loaiphong) ?>
            <tr>
                <th>
                    <label class="customcheckbox">
                        <input type="checkbox" class="listCheckbox"/>
                        <span class="checkmark"></span>
                    </label>
                </th>

                <td><?= ++$index ?></td>
                <td><?= $ten ?></td>
                <td><?= $suc_chua ?></td>
                <td><?= $gia ?></td>
                <td>
                    <a onclick="return confirm('Are you sure?')" href="<?= BASE_URL. 'AdminController/deleteRoomType/'.$id_loaiphong ?>"  type="button" class="btn btn-danger">Xóa</a>
                    <a type="button" class="btn btn-primary" href="<?= BASE_URL. 'AdminController/viewUpdateRoomType/'.$id_loaiphong ?>">Sửa</a>
                </td>
            </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
        <a type="button" class="btn btn-info btn-sm ml-2" href="<?= BASE_URL. 'AdminController/addRoomType' ?>">Thêm mới</a>
        <button type="button" class="btn btn-info btn-sm">Xóa</button>
        <button type="button" class="btn btn-info btn-sm">Chọn tất cả</button>
        <button type="button" class="btn btn-info btn-sm">Bỏ chọn tất cả</button>
    </div>
</div>

<?php
//
//include "footer.php";
//?>