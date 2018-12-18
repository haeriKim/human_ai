<!DOCTYPE html>
<html lang="ko" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/guide.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

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

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->


            <!-- header_wrap -->
            <?php include "header.php";?>
            <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- main_content -->
                <div class="content guide_OTP_wrap con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>고객지원</h4>
                    <ul>
                        <li><a href="customer_faq.php" title="FAQ">FAQ</a></li>
                        <li>
                          <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                          <dl class="nav_dropdown question_dd off">
                              <dt><a href="customer_question.php" title="1:1 문의하기" class='active'>1:1 문의하기</a></dt>
                              <dt><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
                          </dl>
                        </li>
                        <li class='on'>
                          <a href="#" title="인증자료 제출안내" class='more_menu'>인증자료 제출안내</a>
                          <dl class="nav_dropdown changeA_dd on">
                              <dt><a href="guide_security.php" title="보안비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                              <dt class='active'><a href="#" title="계좌 변경">계좌변경</a></dt>
                              <dt><a href="guide_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                          </dl>
                        </li>
                        <li><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav End-->

                  <!-- content_nav_responsive -->
                  <div class="content_nav_responsive withTab2">
                    <h4>고객지원</h4>
                    <ul>
                        <li class='FAQ_li'><a href="customer_faq.php" title="FAQ" class='sub_title'>FAQ</a></li>
                        <li class='customer_q_li'>
                          <a href="customer_question.php" title="1:1 문의" class='sub_title'>1:1 문의</a>
                        </li>
                        <li class='guide_li on'>
                          <a href="#" title="인증자료 제출안내" class='sub_title active'>인증자료<Br/>제출안내</a>
                        </li>
                        <li class='fee_table_li'><a href="fee_table.php" title="수수료 안내" class='sub_title'>수수료 안내</a></li>
                    </ul>
                    <!-- guide_responsive -->
                    <div class="guide_responsive">
                      <div class="guide_select">
                        <span onclick="location.href='guide_security.php'">보안 비밀번호 초기화</span>
                        <span class="clicked">계좌변경</span>
                        <span onclick="location.href='guide_OTP.php'" class="marginTop">OTP 초기화</span>
                      </div>
                    </div><!-- guide_responsive End-->
                  </div><!-- content_nav_responsive End-->

                  <!-- guide_OTP_area -->
                  <div class="box guide_OTP_area">
                    <h3 class="title">인증자료 제출안내</h3>
                    <!-- guide_OTP_inner -->
                    <div class="guide_OTP_inner mypage_content">
                      <h4>계좌변경</h4>
                        <p class="guide_OTP_p">계좌변경 시, 아래 제출서류를 첨부하여 양식에 따라 이메일을 보내야합니다.</p>
                        <p class="title_title">[ 제출 이메일 양식 ]</p>

                        <table class='guide_OTP_table' summary='이메일 제목, 이메일 보낼 주소, 이메일 본문 필수 항목, 첨부파일'>
                            <col>

                            </colgroup>
                              <tbody class='guide_OTP_tbody'>
                                <tr>
                                    <th>이메일 제목</th>
                                    <td>The Alls 계좌변경 요청</td>
                                </tr>

                                <tr>
                                  <th>이메일 보낼 주소</th>
                                  <td>thealls@thealls.com</td>
                                </tr>

                                <tr>
                                  <th>이메일 본문 필수 항목</th>
                                    <td>
                                      <p>이름 : </p>
                                      <p>휴대전화 번호 :</p>
                                      <p>The Alls가입 이메일 : </p>
                                    </td>
                                </tr>

                                <tr>
                                  <th>첨부파일</th>
                                    <td>
                                      <p>1.신분증 사진(필수)</p>
                                      <p>2.신분증을 들고있는 본인 사진(필수)</p>
                                      <p>3.기존 등록된 계좌의통장사본(필수)</p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- contentBottom -->

                            <div class="guide_OTP_table_text">
                              <p>보내주신 자료 검토 후 추가적인 확인이 필요할 경우 담당자가 연락을 드립니다. 서류접수 후 1~3일 이상 소요될 수 있습니다.</p>
                              <p>첨부파일은 파일당 <span class="guide_pink">10MB 이하, JPG/JPEG/PNG/GIF 파일만</span> 가능합니다.</p>
                            </div>


                        <p class="title_title">[ 변경 전 유의사항 ]</p>
                          <span class="guide_OTP_star">- 계좌번호 초기화 후 재등록 하기 전까지 KRW 입출금이 불가능합니다.</span><br/>
                          <span class="guide_OTP_star">- 계좌번호를 변경하시면 초기화 후 다시 계좌인증을 진행해야 합니다.</span><br/>
                          <span class="guide_OTP_star">- 위 사항은 피싱이나 금융사고 예방을 위한 조치입니다.</span><br/>
                          <span class="guide_OTP_star">- 아래 안내절차에 따라 제출파일을 고객센터로 발송해 주시기 바랍니다.</span><br/>

                        <p class="title_title">[ 제출 서류 안내 ]</p>

                          <div class="ID_card">
                            <p class="title_title">1.신분증을 들고 있는 본인 사진</p>
                              <img src="img/id_request1.jpg" alt="신분증 들고 있는 사진">
                                <div class="ID_card_text">
                                  <p>- 제출하기전 신분증에 The Alls 인증목적, 이메일주소, 촬영일자를 자필로 메모해 붙여 주세요.</p><br/>
                                  <p>- 얼굴과 신분증이 모두 나오도록 찍어주셔야 담당자가 확인이 가능합니다.</p><br/>
                                  <p>- 사진은 비대면 실명확인 용도로만 사용되며 신분증 글자가 명확히 나와야합니다.</p><br/>
                                  <p>- 주민등록번호 뒤 7자리는 가려서 보내주시기 바랍니다.(개인정보 보호)</p><br/>
                                  <p>- 제출된 자료는 인증절차 완료후 폐기 처리 됩니다.</p><br/>
                                </div>
                          </div>

                          <div class="ID_card">
                            <p class="title_title">2.신분증 사진</p>
                              <img src="img/id_request2.jpg" alt="신분증 사진">
                                <div class="ID_card_text">
                                  <p>- 제출하기전 신분증에 The alls 인증목적, 이메일주소, 촬영일자를 자필로 메모해 붙여 주세요.</p><br/>
                                  <p>- 주민등록번호 뒤 7자리는 가려서 보내주시기 바랍니다.(개인정보 보호)</p><br/>
                                  <p>- 여권이나 운전면허도 가능하며 운전면허 번호, 여권번호는 가려주시기 바랍니다.</p><br/>
                                  <p class="ID_card_pink">- 촬영시간을 기준으로 이전에 찍은 사진이나 메모가 없는 사진은 확인이 불가능합니다.</p><br/>
                                </div>
                          </div>

                          <div class="ID_card">
                            <p class="title_title">3.현재 등록된 계좌의 통장사본(표지)</p>
                              <p class="guide_OTP_text">- '계좌번호' 및 '예금주'가 적힌 통장사본을 스캔 또는 촬영해서 첨부해 주세요.</p><br/>
                              <p class="guide_OTP_text">- 인터넷뱅킹일 경우[통장표지출력] 서비스화면을 캡쳐해주세요.</p><br/>
                          </div>

                          <div class="guide_OTP_yeobak"></div>

                    </div><!-- guide_OTP_inner End-->
                  </div><!--guide_OTP_area End-->

                </div><!-- guide_OTP_wrap End-->
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
