<?php
include("monan/title.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form_them">
                <h4>Thêm món ăn</h4>
                <form action="index.php?act=themmonan" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="ok" class="form-label">Tên món ăn</label>
                        <input type="text" name="ten_monan" class="form-control" id="ok" placeholder="Nhập tên món ăn" required>
                    </div>
                    <div class="mb-3">
                        <label for="ok1" class="form-label">Giá món ăn</label>
                        <input type="text" name="gia_monan" class="form-control" id="ok1" placeholder="Nhập tên món ăn" required>
                    </div>
                    <div class="mb-3">
                        <label for="ok2" class="form-label">Hình ảnh món ăn</label>
                        <input type="file" name="anh_monan" class="form-control" id="ok2" placeholder="Nhập tên món ăn" required>
                    </div>

                    <div class="chosen-select-single mg-b-20 mb-3">
                        <label class="form-label">Thêm loại danh mục</label>
                        <select name="id_danhmuc" class="select2_demo_3 form-control">
                            <?php
                            foreach ($listdanhmuc as $key => $value) {
                                extract($value);
                            ?>
                                <option value="<?= $id_danhmuc ?>">
                                    <?= $tendanhmuc ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group shadow-textarea ">
                        <label for="exampleFormControlTextarea6">Mô tả món ăn</label>
                        <textarea name="mota_monan" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Nhập mô tả món ăn"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="ok2" class="form-label">Nổi bật</label>
                        <input type="number" name="noibat" class="form-control" id="ok2" placeholder="Nhập số" required>
                    </div>

                    <div class="ok mg-b-20">
                        <h5 class="mg-tb-15">Món ăn kèm</h5>
                        <div class="row">
                            <div class="form-group col-md-4 mg-b-20">
                                <div id="anh-container">
                                    <label for="price">Ảnh</label>
                                    <input type="file" id="anh" name="anh[]" class="form-control" placeholder="Nhập anh">
                                </div>
                            </div>
                            <div class="form-group col-md-4 mg-b-20">
                                <div id="ten-container">
                                    <label for="price">Tên</label>
                                    <input type="text" id="ten" name="ten[]" class="form-control" placeholder="Nhập ten">
                                </div>
                            </div>
                            <div class="form-group col-md-4 mg-b-20">
                                <div id="tien-container">
                                    <label for="price">Giá</label>
                                    <input type="text" id="tien" name="tien[]" class="form-control" placeholder="Nhập giá">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button style="margin-left: 15px;" type="button" class="btn btn-success ml-5" id="addSizeButton">Thêm món ăn kèm</button>
                            </div>

                        </div>
                    </div>


                    <div class="mb-3 form_btn form-check">
                        <input class="btn btn-primary mr-3 text-left" type="submit" name="themmoi" value="THÊM MỚI MÓN ĂN" required>
                        <a href="index.php?act=lietkemonan"><input class="btn btn-success text-left" type="button" value="DANH SÁCH"></a>
                    </div>
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