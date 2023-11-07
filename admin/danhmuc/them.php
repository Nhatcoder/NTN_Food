<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form_them">
                <form action="index.php?act=themdanhmuc" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tên danh mục</label>
                        <input type="text" name="tendanhmuc" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập tên danh mục" required>
                    </div>
                    <div class="mb-3 form_btn form-check">
                        <input class="btn btn-primary mr-3 text-left" type="submit" name="themmoi" value="THÊM MỚI"
                            required>
                        <a href="index.php?act=listdm"><input class="btn btn-success text-left" type="button"
                                value="DANH SÁCH"></a>
                    </div>

                </form>

                <?php
                if (isset($thongbao) && $thongbao != "") {
                    // echo '<div class="alert alert-success" role="alert">' . $thongbao . '</div>';
                    echo '<div class="alert alert-success alert-success-style1 alert-success-stylenone">
                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">×</span>
                    </button>
                    <i class="fa fa-check adminpro-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                    <p class="message-alert-none"><strong>'.$thongbao.'!</strong> Indicates a successful or positive action.</p>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>