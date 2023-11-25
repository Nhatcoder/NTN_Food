<?php

include "mail/sendmail.php";

function submitmail()
{
    $maildathang = $_SESSION['email'];
    $tieude = "Đặt hàng website NTN Food thành công !";
    $noidung = "";

    $tongtien = 0;
    foreach ($_SESSION["cart"] as $key => $value) {
        extract($value);
        $thanhtien = $value['soluongmua'] * $value['gia_monan'];
        $tongtien = $tongtien + $thanhtien;
    }

    $noidung .= '<!doctype html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
      <title> Welcome to [Coded Mails] </title>
      <!--[if !mso]><!-- -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--<![endif]-->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">
        #outlook a {
          padding: 0;
        }
    
        body {
          margin: 0;
          padding: 0;
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }
    
        table,
        td {
          border-collapse: collapse;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }
    
        img {
          border: 0;
          height: auto;
          line-height: 100%;
          outline: none;
          text-decoration: none;
          -ms-interpolation-mode: bicubic;
        }
    
        p {
          display: block;
          margin: 13px 0;
        }
      </style>
    
      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet" type="text/css">
      <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Muli:300,400,700);
      </style>
      <!--<![endif]-->
      <style type="text/css">
        @media only screen and (min-width:480px) {
          .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
          }
        }
      </style>
      <style type="text/css">
        @media only screen and (max-width:480px) {
          table.mj-full-width-mobile {
            width: 100% !important;
          }
    
          td.mj-full-width-mobile {
            width: auto !important;
          }
        }
      </style>
      <style type="text/css">
        a,
        span,
        td,
        th {
          -webkit-font-smoothing: antialiased !important;
          -moz-osx-font-smoothing: grayscale !important;
        }
      </style>
    </head>
    
    <body style="background-color:#f9f0e6;">
      <div
        style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
        Preview - Welcome to Coded Mails </div>
      <div style="background-color:#f9f0e6;">
    
        <div style="margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
    
                  <div class="mj-column-per-100 mj-outlook-group-fix"
                    style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;"
                      width="100%">
                      <tr>
                        <td style="font-size:0px;word-break:break-word;">
    
                          <div style="height:20px;"> &nbsp; </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                            style="border-collapse:collapse;border-spacing:0px;">
                            <tbody>
                              <tr>
                                <td style="width:75px;">
                                  <img
                                    src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgxk7DMHtV-06oSFl8Yq6zgdNJLgEJaQHgTy36aFagtETymTjmtRaAMNO3rmr3T3hBvlB4RhaIm_x2UHF4JumTbirH9b9OlWebHDgsjTmRRWO3WGKAAD4SaU-hSSv6EspFnQhtzlAxdDfqgb235Gv3uKPCTgWzgMaRn1H5wOa9rfHhCnLK_luPaAE0y6w/s393/logo_home.png"
                                    style="border:0;display:block;outline:none;text-decoration:none;height:100px;width: 375px;font-size:13px;"
                                    width="75">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    
        <div style="margin:0 auto;max-width:600px;">
          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tr style="vertical-align:top;">
              <td
                background="https://images.unsplash.com/photo-1573376670774-4427757f7963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"
                style="background:#2a3448 url(https://images.unsplash.com/photo-1573376670774-4427757f7963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80) no-repeat center center / cover;background-position:center center;background-repeat:no-repeat;padding:0px;vertical-align:top;"
                height="300">
    
                <div class="mj-hero-content" style="margin:0px auto;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;margin:0px;">
                    <tr>
                      <td style>
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                          style="width:100%;margin:0px;">
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
    
              </td>
            </tr>
          </table>
        </div>
    
        <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
            style="background:#ffffff;background-color:#ffffff;width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
    
                  <div style="margin:0px auto;max-width:600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                      style="width:100%;">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;">
    
                            <div class="mj-column-per-100 mj-outlook-group-fix"
                              style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                style="vertical-align:top;" width="100%">
                                <tr>
                                  <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div
                                      style="font-family:Muli, Arial, sans-serif;font-size:20px;font-weight:400;line-height:30px;text-align:left;color:#333333;">
                                      <h1 style="margin: 0; font-size: 24px; line-height: normal; font-weight: bold;">Đây là
                                        biên nhận của bạn</h1>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <p
                                      style="border-top: solid 1px #F4F5FB; font-size: 1px; margin: 0px auto; width: 100%;">
                                    </p>
    
                                  </td>
                                </tr>
                                <tr>
                                  <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div
                                      style="font-family:Muli, Arial, sans-serif;font-size:16px;font-weight:400;line-height:20px;text-align:left;color:#333333;">
                                      <p style="margin: 0;">Cảm ơn bạn đã đặt hàng của chúng tôi. Vui lòng xem chi tiết đơn hàng
                                        bên dưới:
                                      </p>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </div>
    
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
    
                  <div style="margin:0px auto;max-width:600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                      style="width:100%;">
                      <tbody>
                        <tr>
                          <td
                            style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;">
    
                            <div class="mj-column-per-100 mj-outlook-group-fix"
                              style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="vertical-align:top;padding:10px 25px;">
                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                        style="background-color:#f6f6f6;" width="100%">
                                        <tr>
                                          <td align="left" class="receipt-table"
                                            style="font-size:0px;padding:20px;word-break:break-word;">
                                            <table cellpadding="0" cellspacing="0" width="100%" border="0"
                                              style="color:#333333;font-family:Muli, Arial, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;border:none;">
                                              <tr>';

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaymua = date("Y-m-d H:i:s");
    $ma_donhang = $_SESSION["madonhang"];
    $noidung .= '

                                                <th colspan="2" align="left"
                                                  style="padding-bottom: 10px; color: #7e7e7e; font-size: 12px; line-height: 16px; font-weight: 700; text-transform: uppercase;">
                                                  Ngày - Giờ: ' . $ngaymua . ' </th>
                                                <th align="right"
                                                  style="padding-bottom: 10px; color: #7e7e7e; font-size: 12px; line-height: 16px; font-weight: 700; text-transform: uppercase;">
                                                  Mã đơn hàng: ' . $ma_donhang . ' </th>
                                              </tr>

                                              ';


    foreach ($_SESSION["cart"] as $key => $value) {
        $soluongmua = $value["soluongmua"];
        $ten_monan = $value["ten_monan"];
        $gia_monan = $value["gia_monan"];
        $noidung .= '
                                    <tr>
                                        <td colspan="2" style="color: #525f7f; font-size: 15px; line-height: 24px; word-break: normal;">
                                            <p style="margin: 0;"> ' . $ten_monan . ' <span style="color: #a7a7a7;font-size: 14px;line-height: 14px;"> × ' . $soluongmua . ' </span>
                                            </p>
                                        </td>
                                        <td align="right" valign="top" style="color: #525f7f; font-size: 15px; line-height: 24px; word-break: normal;">
                                            ' . number_format($gia_monan, 0, ",", ".") . ' VNĐ </td>
                                    </tr>
                                    ';
    }

    $noidung .= '


                                    
                                              <tr>
                                                <td
                                                  style="color: #525f7f; font-size: 15px; line-height: 24px; word-break: normal; border-bottom-width: 1px; border-bottom-color: #EAEEEB; border-bottom-style: solid; padding: 5px 0;"
                                                  colspan="3"></td>
                                              </tr>
                                              <tr>
                                                <td colspan="2"
                                                  style="color: #525f7f; font-size: 15px; line-height: 24px; word-break: normal; font-weight: bold; padding: 20px 0 0;">
                                                  Tổng tiền:</td>
                                                <td align="right"
                                                  style="color: #525f7f; font-size: 15px; line-height: 24px; word-break: normal; font-weight: bold; padding: 20px 0 0;">
                                                  ' . number_format($tongtien, 0, ",", ".") . 'VNĐ </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
    
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
    
                  <div style="margin:0px auto;max-width:600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                      style="width:100%;">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:0;text-align:center;">
    
                            <div class="mj-column-per-100 mj-outlook-group-fix"
                              style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                              <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                style="vertical-align:top;" width="100%">
                                <tr>
                                  <td align="right" vertical-align="middle"
                                    style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                      style="border-collapse:separate;line-height:100%;">
                                      <tr>
                                        <td align="center" bgcolor="#e6b07e" role="presentation"
                                          style="border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#e6b07e;"
                                          valign="middle">
                                          <a href="[LINK]"
                                            style="display: inline-block; background: #e6b07e; color: white; font-family: Muli, Arial, sans-serif; font-size: 13px; font-weight: 700; line-height: 30px; margin: 0; text-decoration: none; text-transform: none; padding: 10px 25px; mso-padding-alt: 0px; border-radius: 3px;"
                                            target="_blank">   </a>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div
                                      style="font-family:Muli, Arial, sans-serif;font-size:16px;font-weight:400;line-height:20px;text-align:left;color:#333333;">
                                      <p style="margin: 0;"> Nếu bạn có bất kỳ câu hỏi nào hoặc cần thêm thông tin về việc
                                        trả lại hàng <a href="#" style="color: #AC7B4C; text-decoration: none;">xem chính
                                          sách hoàn trả của chúng tôi.</a> </p>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </div>
    
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    
        <div style="margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
    
                  <div class="mj-column-per-100 mj-outlook-group-fix"
                    style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;"
                      width="100%">
                      <tr>
                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                          <div
                            style="font-family:Muli, Arial, sans-serif;font-size:14px;font-weight:400;line-height:20px;text-align:center;color:#616161;">
                            © 2023 [NTN], Hà Nội, VIETNAM, CA 12221</div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                          <div
                            style="font-family:Muli, Arial, sans-serif;font-size:14px;font-weight:400;line-height:20px;text-align:center;color:#616161;">
                            Cập nhật <a href="https://google.com" style="color: #AC7B4C; text-decoration: none;">email
                              của bạn</a>để chọn loại email bạn nhận được hoặc bạn có thể <a href="https://google.com"
                              style="color: #AC7B4C; text-decoration: none;">hủy đăng ký </a>từ tất cả các email trong tương
                            lai.</div>
                        </td>
                      </tr>
                    </table>
                  </div>
    
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    
        <div style="margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
    
                  <div class="mj-column-per-100 mj-outlook-group-fix"
                    style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;"
                      width="100%">
                      <tr>
                        <td style="font-size:0px;word-break:break-word;">
    
                          <div style="height:1px;"> &nbsp; </div>
    
                        </td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </body>
    
    </html>';


    $mail = new Mailer();
    $mail->dathangmail($maildathang, $tieude, $noidung,);
}

