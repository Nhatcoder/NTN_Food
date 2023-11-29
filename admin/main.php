<!-- Thống kê -->
<div class="widgets-programs-area mg-t-15">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Doanh thu</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <!-- <i class="fa-brands fa-shopify"></i> -->
                            <i class="fa-brands fa-shopify fa-bounce"></i>
                        </div>
                        <div class="m-t-xl">
                            <?php if (is_array($doanh_thu_hoadon)) {
                                foreach ($doanh_thu_hoadon as $key => $value) {
                                    extract($value);
                                }
                            } ?>
                            <h1 style="color: #48c89f;"><?= number_format($doanhthu, 0, ",", ".") ?> VNĐ</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Đơn hàng</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa-regular fa-calendar-check fa-beat"></i>
                        </div>
                        <div class="m-t-xl">
                            <h1 class="text-info"><?= count($thong_ke_hoadon) ?></h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <?php if (is_array($don_thanh_cong)) {
                                foreach ($don_thanh_cong as $key => $value) {
                                    extract($value);
                                }
                            } ?>
                            <h4>Đơn Thành công</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa-solid fa-check fa-beat"></i>
                        </div>
                        <div class="m-t-xl">
                            <h1 class="text-success"><?= $donthanhcong ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <?php if (is_array($don_huy)) {
                                foreach ($don_huy as $key => $value) {
                                    extract($value);
                                }
                            } ?>
                            <h4>Đơn hủy</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa-solid fa-triangle-exclamation fa-flip"></i>
                        </div>
                        <div class="m-t-xl">
                            <h1 class="text-danger"><?= $donhuy ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <h3 class="caption-subject text-uppercase">Thống Kê Đơn Hàng:
                                        <b id="text-date">365 Ngày qua</b>
                                    </h3>

                                    <select id="select-date" name="id_trangthai" class="select2_demo_3 form-control">
                                        <option value="7ngay"> 7 Ngày qua </option>
                                        <option value="28ngay"> 28 Ngày qua </option>
                                        <option value="60ngay"> 60 Ngày qua </option>
                                        <option value="90ngay"> 90 Ngày qua </option>
                                        <option value="180ngay"> 180 Ngày qua </option>
                                        <option selected value="365ngay"> 365 Ngày qua </option>
                                    </select>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Đổ biểu đồ ở đây -->
                    <?php
                    // include("thongke.php");
                    ?>
                    <div id="myfirstchart"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="analytics-rounded mg-b-30 res-mg-t-30">
                    <div class="analytics-rounded-content">
                        <h5>Thống kê số lượng sản phẩm</h5>
                        <div class="text-center">
                            <div id="thongkespdm"></div>
                            <div id="donut"></div>
                        </div>
                    </div>
                </div>
                <div class="analytics-rounded">
                    <div class="analytics-rounded-content">
                        <h5>Percentage division</h5>
                        <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                        <div class="text-center">
                            <div id="sparkline52"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">

                    <div id="line-adwords">
                        <!-- Biểu đồ thống kê doanh thu theo đơn hàng -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Bản quyền NTN admin © 2023 <a href="https://colorlib.com/wp/templates/">được</a> bảo lưu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    // Biểu đồ thống kê theo danh mục
    <?php
    $label = "";
    $trungbinh = "";
    $minprice = "";
    $maxprice = ""; //
    foreach ($thongke_doanhthu_theo_danhmuc as $key => $value) {
        $label .= "'" . $value['tendm'] . "', ";
        $trungbinh .= $value['trungbinh'] . ', ';
        $maxprice .= $value['maxprice'] . ', ';
        $minprice .= $value['minprice'] . ', ';
    }

    $label = rtrim($label, ", ");
    $label = "[" . $label . "]";

    $trungbinh = "{name: 'Giá trung bình', data: [" . rtrim($trungbinh, ', ') . "]}";
    $minprice = "{name: 'Giá thấp nhất', data: [" .  rtrim($minprice, ', ') . "]}";
    $maxprice =  "{name: 'Giá cao nhất', data: [" . rtrim($maxprice, ', ') . "]}";

    // echo $label;
    // echo $minprice . "_" . $maxprice . "_" . $trungbinh;
    ?>
    window.Apex = {
        chart: {
            foreColor: '#ccc',
            toolbar: {
                show: false
            },
        },
        stroke: {
            width: 3
        },
        dataLabels: {
            enabled: false
        },
        tooltip: {
            theme: 'dark'
        },
        grid: {
            borderColor: "#535A6C",
            xaxis: {
                lines: {
                    show: true
                }
            }
        }
    };

    var optionsLine = {
        chart: {
            height: 328,
            type: 'line',
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 2,
                blur: 4,
                opacity: 1,
            }
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        //colors: ["#3F51B5", '#2196F3'],

        series: [
            <?= $maxprice ?>,
            <?= $minprice ?>,
            <?= $trungbinh ?>
        ],

        // series: [{
        //         name: "Music",
        //         data: [1, 15, 26, 20, 33, 27]
        //     },
        //     {
        //         name: "Photos",
        //         data: [3, 33, 21, 42, 19, 32]
        //     },
        //     {
        //         name: "Files",
        //         data: [0, 39, 52, 11, 29, 43]
        //     }
        // ],

        title: {
            text: 'Thống kê giá cả theo danh mục',
            align: 'left',
            offsetY: 25,
            offsetX: 5,
        },
        subtitle: {
            text: 'Tổng tiền',
            offsetY: 55,
            offsetX: 5
        },
        markers: {
            size: 8,
            strokeWidth: 0,
            hover: {
                size: 9
            }
        },
        grid: {
            show: true,
            padding: {
                bottom: 0
            }
        },

        labels: <?= $label; ?>,

        xaxis: {
            tooltip: {
                enabled: false
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -20
        }
    }

    var chartLine = new ApexCharts(document.querySelector('#line-adwords'), optionsLine);
    chartLine.render();
    // end biểu đồ thóng kê giá cả danh mục



    new Morris.Donut({
        element: 'thongkespdm',
        data: [{
                year: '2008',
                value: 20
            },
            {
                year: '2009',
                value: 10
            },
            {
                year: '2010',
                value: 5
            },
            {
                year: '2011',
                value: 5
            },
            {
                year: '2012',
                value: 20
            }
        ],
        xkey: 'year',
        ykeys: ['value'], // Use 'value' instead of 'Số lượng'
        labels: ['Số lượng'],
        labelColor: '#ffffff'
    });
    
</script>