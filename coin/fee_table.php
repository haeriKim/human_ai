<!DOCTYPE html>
<html lang="ko" class='no-js'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/common_table.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/fouc.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">

          <!-- nav_wrap -->
          <?php include "nav.php";?>
          <!-- nav_wrap End-->

          <!-- header_wrap -->
          <?php include "header.php";?>
          <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- common_table_wrap -->
                <div class="content common_table_wrap con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>고객지원</h4>
                    <ul>
                        <li><a href="" title="FAQ">FAQ</a></li>
                        <li>
                          <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                          <dl class="nav_dropdown question_dd off">
                              <dt><a href="" title="1:1 문의하" class='active'>1:1 문의하기</a></dt>
                              <dt><a href="" title="문의내역 확인하기">문의내역 확인하기</a></dt>
                          </dl>
                        </li>
                        <li>
                          <a href="#" title="인증변경안내" class='more_menu'>인증변경안내</a>
                          <dl class="nav_dropdown changeA_dd off">
                              <dt><a href="" title="보안비밀번호 초기화">보안비밀번호 초기화</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌변경</a></dt>
                              <dt><a href="#" title="OTP 변경">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav End-->

                  <!-- common_table_content -->
                  <div class="box common_table_content fees_area">
                      <h3 class='title'>수수료 안내</h3>
                      <div class="mypage_content">
                          <h4>거래수수료</h4>
                          <table class='common_table deal_fee'>
                              <colgroup>
                                  <col style="width:50%;">
                                  <col style="width:50%;">
                              </colgroup>
                              <thead>
                                  <tr>
                                      <th>항목</th>
                                      <th>수수료</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>기본수수료</td>
                                      <td>0.12%</td>
                                  </tr>
                              </tbody>
                          </table>
                          <h4>입출금 수수료</h4>
                          <table class="common_table input_output_fee">
                              <colgroup>
                                  <col style="width:15%;">
                                  <col style="width:17%;">
                                  <col style="width:17%;">
                                  <col style="width:17%;">
                                  <col style="width:17%;">
                                  <col style="width:17%;">
                              </colgroup>
                              <thead>
                                <tr>
                                  <th rowspan="2">자산</th>
                                  <th rowspan="2">입금 수수료</th>
                                  <th colspan="2">소액 입금</th>
                                  <th colspan="2">출금 수수료</th>
                                </tr>
                                <tr>
                                    <th>소액 내부 입금</th>
                                    <th>소액 외부 입금</th>
                                    <th>내부 출금</th>
                                    <th>외부 출금</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th class='long_th'>
                                        <p>원화</p>
                                        <p>(KRW)</p>
                                    </th>
                                    <td rowspan="8">무료</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td rowspan="8">무료</td>
                                    <td>1,000원</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>비트코인</p>
                                        <p>(BTC)</p>
                                    </th>
                                    <td>0.005 BTC</td>
                                    <td>0.001 BTC</td>
                                    <td>0.001 BTC</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>비트코인캐시</p>
                                        <p>(BCH)</p>
                                    </th>
                                    <td>0.03 BCH</td>
                                    <td>0.001 BCH</td>
                                    <td>0.001 BCH</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>이더리움</p>
                                        <p>(ETH)</p>
                                    </th>
                                    <td>-</td>
                                    <td>무료</td>
                                    <td>0.01 ETH</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>이더리움클래식</p>
                                        <p>(ETC)</p>
                                    </th>
                                    <td>-</td>
                                    <td>무료</td>
                                    <td>0.01 ETC</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>이오스</p>
                                        <p>(EOS)</p>
                                    </th>
                                    <td>-</td>
                                    <td>무료</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>리플</p>
                                        <p>(XRP)</p>
                                    </th>
                                    <td>-</td>
                                    <td>무료</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th class='long_th'>
                                        <p>에이다</p>
                                        <p>(ADA)</p>
                                    </th>
                                    <td>-</td>
                                    <td>무료</td>
                                    <td>-</td>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                  </div><!-- common_table_content End-->

                </div><!-- common_table_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>
