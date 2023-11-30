
$(document).ready(function () {
    function fetch_data() {
        $.ajax({
            url: "views/binhluan.php",
            method: "POST",
            success: function (data) {
                $("#comments").html(data);
            },
        });
    } 

    // Chèn dữ liệu
    $("#commentform").submit(function (event) {
        // Ngăn chặn sự kiện mặc định của form
        event.preventDefault();
        var noidung = $("#noidung").val();
        var id_nguoidung = $("#id_nguoidung").val();
        var id_monan = $("#id_monan").val();
        var ngaybinhluan = $("#ngaybinhluan").val();

        if (noidung === "") {
            $(".cmt-err").text("Không được để trống !");
        } else {
            $.ajax({
                url: "views/binhluan.php",
                method: "POST",
                data: { noidung: noidung, id_nguoidung: id_nguoidung, id_monan: id_monan, ngaybinhluan: ngaybinhluan },
                success: function (data) {
                    // alert("success");
                    $("#commentform")[0].reset();
                    fetch_data();
                },
            });
        }
    });

    $("#noidung").on("blur", function () {
        var noidung = $(this).val();

        if (noidung === "") {
            $(".cmt-err").text("Không được để trống !");
        } else {
            $(".cmt-err").text("");
        }
    });
});
