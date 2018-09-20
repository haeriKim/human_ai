<!DOCTYPE html>
<html lang="ko">
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
    <link rel="stylesheet" href="css/leave_member.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
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
                <!-- main_content -->
                <div class="content withdrawal_wrap con_1000">

                  <!-- withdrawal_area -->
                  <div class="box withdrawal_area">
                    <h3 class="title">회원탈퇴</h3>
                    <!-- track_ip_address -->

                      <div class="cer_center mypage_content">
                          <ul class="cer_level">
                            <li>
                              <img src="img/step1_off.png" alt="스텝1" class="step1_on"/>

                              <p class="img_area">
                                <img src="img/quit_1_off.png" alt="탈퇴안내"/>
                              </p>
                              <strong class="gray_title">탈퇴 안내</strong>

                            <li>

                              <img src="img/step2_off.png" alt="스텝2" class="step2_off"/>
                              <p class="img_area">
                                <img src="img/quit_2_off.png" alt="자산확인" />
                              </p>
                              <strong class="gray_title">자산 확인</strong>

                            </li>
                            <li>

                              <img src="img/step3_off.png" alt="스텝3" class="step3_off"/>
                              <p class="img_area">
                                <img src="img/quit_3_off.png" alt="탈퇴신청" />
                              </p>
                              <strong class="gray_title">탈퇴 신청</strong>

                            </li>
                            <li>

                              <img src="img/step4.png" alt="스텝4" class="step4_off"/>
                              <p class="img_area">
                                <img src="img/quit_4.png" alt="탈퇴처리"/>
                              </p>
                              <strong>탈퇴 처리</strong>

                            </li>
                            <li>

                              <img src="img/step5_off.png" alt="스텝5" class="step5_off"/>
                              <p class="img_area">
                                <img src="img/quit_5_off.png" alt="탈퇴완료"/>
                              </p>
                              <strong class="gray_title">탈퇴 완료</strong>

                            </li>
                          </ul>

                      <div class="withdrawal_text" id='withdrawal_text4'>
                        <p>탈퇴사유를 남겨주시면 보다 나은 서비스를 제공하기 위해 소중한 자료로 이용하도록 하겠습니다.</p>
                        <form class="" action="#" method="post">
                            <label for='leave_opinion'></label>
                            <select id="leave_opinion" name="leave_opinion" required>
                                <option value="탈퇴 사유 선택" disabled selected="selected">탈퇴 사유 선택</option>
                                <option value="암호화폐 거래(투자) 중단" class='txt_01'>암호화폐 거래(투자) 중단</option>
                                <option value="재가입을 위한 탈퇴" class='txt_02'>재가입을 위한 탈퇴</option>
                                <option value="사용하지 않는 계정 정리" class='txt_03'>사용하지 않는 계정 정리</option>
                                <option value="타 거래소로 이동" class='txt_04'>타 거래소로 이동</option>
                                <option value="개인정보 삭제" class='txt_05'>개인정보 삭제</option>
                                <option value="기타(직접입력)" class='txt_06'>기타(직접입력)</option>
                            </select>
                            <div class="html_input">
                                <input type="text" name="" value="">
                                <textarea name='' placeholder="500자이내로 입력해주세요"></textarea>
                            </div>
                            <div class="cancel_or_apply">
                                <input type="reset" name="reset" value="취소" onclick="location.href='leave_member_03.php'" class='cancel_btn'/>
                                <input type="submit" name="submit" value="다음단계" class='agree_btn'/>
                            </div>
                        </form>

                      </div>


                    </div>
                  </div><!--withdrawal_area End-->

                </div><!-- withdrawal_wrap End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->


        </div><!-- container End -->
    </div><!-- wrap End -->

</body>
</html>