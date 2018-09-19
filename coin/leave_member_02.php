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
                    <div class="withdrawal">
                      <div class="cer_center mypage_content">
                        <ul class="cer_level">
                          <li>
                            <img src="img/quit_1.png" alt="스텝1" class="lv4_on"/>
                            <img src="img/lv1.png" alt="스텝1"/>
                            <p class="img_area">
                              <img src="img/quit_1.png" alt="이메일인증 아이콘"/>
                            </p>
                            <strong>탈퇴 안내</strong>

                          <li>
                            <img src="img/quit_2.png" alt="스텝2" class="lv4_on"/>
                            <img src="img/lv2.png" alt="스텝2" />
                            <p class="img_area">
                              <img src="img/quit_2.png" alt="보안비밀번호생성 아이콘" />
                            </p>
                            <strong>자산 확인</strong>

                          </li>
                          <li>
                            <img src="img/quit_3.png" alt="스텝3" class="lv4_on"/>
                            <img src="img/lv3.png" alt="스텝3" />
                            <p class="img_area">
                              <img src="img/quit_3.png" alt="휴대폰인증 아이콘" />
                            </p>
                            <strong>탈퇴 신청</strong>

                          </li>
                          <li>
                            <img src="img/quit_4.png" alt="스텝4" class="lv4_on"/>
                            <img src="img/lv4_off.png" alt="스텝4" class="lv4_off"/>
                            <p class="img_area">
                              <img src="img/quit_4.png" alt="계좌인증 아이콘" class="account_off"/>
                              <img src="img/quit_4.png" alt="계좌인증 아이콘" class="account_on" />
                            </p>
                            <strong class="gray_title">탈퇴 처리</strong>

                          </li>
                          <li>
                            <img src="img/quit_5.png" alt="스텝5" class="lv5_on">
                            <img src="img/lv5_off.png" alt="스텝5" class="lv5_off"/>
                            <p class="img_area">
                              <img src="img/quit_5.png" alt="OTP인증 아이콘" class="otp_off"/>
                              <img src="img/quit_5.png" alt="OTP인증인증 아이콘" class="otp_on" />
                            </p>
                            <strong class="gray_title">탈퇴 완료</strong>

                          </li>
                        </ul>

                      <div class="withdrawal_text2">
                        <p class="red_point">가*다 님의 총 보유자산은 <span class="my_all_money">45,000원</span> 입니다.</p>
                          <strong>탈퇴 유의사항</strong>

                            <div class="withdrawal_text2_inner">
                              <input type="checkbox" id="number_19" class="agree_check_04"><label for="number_19">회원님의 자산 권리포기 가능금액은 (KRW 10,000원 미만) 입니다.</label>
                              <input type="checkbox" id="number_20" class="agree_check_04"><label for="number_20">더 이상 출금 및 송금이 불가능한 소액자산 이라고 판단하시면, 다음 단계에서 권리를 포기하고 탈퇴를 진행 할 수 있습니다.</label>
                              <input type="checkbox" id="number_21" class="agree_check_04"><label for="number_21">회원 탈퇴를 진행하시면 본 계정으로 연결되어 있는 유,무료 서비스는 더 이상 사용이 불가능합니다.<br/>
                              <p>또한 회원님의 지갑주소로 입금될 수 있는 암호화폐의 소유권도 함께 유실 됩니다.</p></label>
                              <br/>
                              <input type="checkbox" id="number_22" class="agree_check_04"><label for="number_22" class="withdrawal_bottom_line">탈퇴를 결정하시지 전 신중한 판단을 부탁드립니다.</label>
                              <br/>

                              <div id="checkbox_text2">
                                <input type="checkbox" id="number_23" class="allAgree_04"><label for="number_23" class='all_agree_04'>위 유의사항을 모두 숙지하고 다음단계로 넘어갑니다.</label>
                              </div>

                              <div class="cancel_or_apply">
                                  <input type="reset" name="reset" value="취소" class='cancel_btn'/>
                                  <span class='agree_btn if_you_not_all_agree'>입금신청</span>
                                  <input type="submit" name="submit" value="입금신청" class='agree_btn if_you_all_agree'/>
                                </div>
                            </div>




                      </div>

                      </div>

                    </div><!-- withdrawal End-->
                  </div><!--withdrawal_area End-->

                </div><!-- withdrawal_wrap End-->
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
