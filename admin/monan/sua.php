<?php
include("monan/title.php");

if (isset($list_monan_one) && is_array($list_monan_one)) {
    extract($list_monan_one);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form_them">
                <h4>Cập nhật món ăn</h4>
                <form action="index.php?act=capnhatmonan" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_sua" value="<?= $id_monan ?>">
                    <div class="mb-3">
                        <label for="ok" class="form-label">Tên món ăn</label>
                        <input type="text" name="ten_monan" class="form-control" id="ok" placeholder="Nhập tên món ăn" required value="<?= $ten_monan ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ok1" class="form-label">Giá món ăn</label>
                        <input type="text" name="gia_monan" class="form-control" id="ok1" placeholder="Nhập tên món ăn" required value="<?= $gia_monan ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ok2" class="form-label">Hình ảnh món ăn</label><br>
                        <img src="../uploads/monan/<?= $anh_monan ?>" width="150" alt="">
                        <input type="file" name="anh_monan" class="form-control" id="ok2" placeholder="Nhập tên món ăn">
                    </div>

                    <div class="chosen-select-single mg-b-20 mb-3">
                        <label class="form-label">Thêm loại danh mục</label>
                        <select name="id_danhmuc" class="select2_demo_3 form-control">
                            <?php

                            foreach ($listdanhmuc as $key => $value) {
                                $selected = ($id_danhmuc == $value['id_danhmuc']) ? "selected" : "";
                            ?>
                                <option <?= $selected ?> value="<?= $value["id_danhmuc"] ?>">
                                    <?= $value["tendanhmuc"] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group shadow-textarea ">
                        <label for="exampleFormControlTextarea6">Mô tả món ăn</label>
                        <textarea name="mota_monan" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Nhập mô tả món ăn"><?= $mota_monan ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="ok20" class="form-label">Nổi bật</label>
                        <input type="number" name="noibat" class="form-control" value="<?= $noibat ?>" id="ok20" placeholder="Nhập số" required>
                    </div>

                    <div class="ok mg-b-20">
                        <h5 class="mg-tb-15">Món ăn kèm</h5>
                        <?php
                        foreach ($list_id_bienthe as $key => $value) {
                        ?>
                            <div class="row">
                                <input type="hidden" name="id_bienthe[]" value="<?= $value["id_bt"]?>">
                                <div class="form-group col-md-4 mg-b-20">
                                    <div id="anh-container">
                                        <div class="row" style="display: flex;justify-content: space-between; align-items: center;">
                                            <div class="col-md-2">
                                                <img width="45px" src="../uploads/monan/<?= $value["anh"] ?>" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <label for="price">Ảnh</label>
                                                <input type="file" id="anh" name="anh[]" value="<?= $value["anh"] ?>" class="form-control" placeholder="Nhập anh">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <div id="ten-container">
                                        <label for="price">Tên</label>
                                        <input type="text" id="ten" name="ten[]" value="<?= $value["ten_bt"] ?>" class="form-control" placeholder="Nhập tên">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div id="tien-container">
                                        <label for="price">Giá</label>
                                        <input type="text" id="tien" name="tien[]" value="<?= $value["gia"] ?>" class="form-control" placeholder="Nhập giá">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="mb-3">
                            <button type="button" class="btn btn-success ml-5" id="addSizeButton">Thêm món ăn kèm</button>
                        </div>
                    </div>

                    <div class="mb-3 form_btn form-check">
                        <input class="btn btn-primary mr-3 text-left" type="submit" name="capnhat" value="CẬP NHẬT MỚI" required>
                        <a href="index.php?act=lietkemonan"><input class="btn btn-success text-left" type="button" value="DANH SÁCH"></a>
                    </div>


                </form>

                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo '<div class="alert alert-success" role="alert">' . $thongbao . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('addSizeButton').addEventListener('click', function() {
        // Tạo một ô input mới cho mảng size[]
        var newAnhInput = document.createElement('input');
        newAnhInput.type = 'file';
        newAnhInput.name = 'anh[]';
        newAnhInput.id = 'anh';
        newAnhInput.className = 'form-control';
        newAnhInput.placeholder = 'Nhập ảnh';

        // Thêm ô input mới vào container
        document.getElementById('anh-container').appendChild(newAnhInput);

        var newTenInput = document.createElement('input');
        newTenInput.type = 'text';
        newTenInput.name = 'ten[]';
        newTenInput.id = 'ten';
        newTenInput.className = 'form-control';
        newTenInput.placeholder = 'Nhập tên';

        // Thêm ô input mới vào container
        document.getElementById('ten-container').appendChild(newTenInput);
        var newTienInput = document.createElement('input');
        newTienInput.type = 'text';
        newTienInput.name = 'tien[]';
        newTienInput.id = 'tien';
        newTienInput.className = 'form-control';
        newTienInput.placeholder = 'Nhập giá';

        // Thêm ô input mới vào container
        document.getElementById('tien-container').appendChild(newTienInput);
    });
</script>