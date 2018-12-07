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
    <link rel="stylesheet" href="css/leave_member.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/app_page_PC.css">
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
    <script src="js/prevent_back.js"></script>
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

                              <img src="img/step3.png" alt="스텝3" class="step3_off"/>
                              <p class="img_area">
                                <img src="img/quit_3.png" alt="탈퇴신청" />
                              </p>
                              <strong>탈퇴 신청</strong>

                            </li>
                            <li>

                              <img src="img/step4_off.png" alt="스텝4" class="step4_off"/>
                              <p class="img_area">
                                <img src="img/quit_4_off.png" alt="탈퇴처리"/>
                              </p>
                              <strong class="gray_title">탈퇴 처리</strong>

                            </li>
                            <li>

                              <img src="img/step5_off.png" alt="스텝5" class="step5_off"/>
                              <p class="img_area">
                                <img src="img/quit_5_off.png" alt="탈퇴완료"/>
                              </p>
                              <strong class="gray_title">탈퇴 완료</strong>

                            </li>
                          </ul>

                      <div class="withdrawal_text" id='withdrawal_text3'>
                        <h4><span class='user_name'>가*다</span>님의 <span class='user_mail'>abc@naver.com</span> 계정을 탈퇴 처리합니다.</h4>
                        <p>
                            회원 탈퇴시 The Alls에 등록된 회원님의 모든 개인정보는 삭제,폐기 처리되며 복구가 불가능합니다.<br/>
                            또한 연결된 모든 서비스 및 가치는 탈퇴 즉시 소멸되며, 이미 탈퇴한 계정으로 오입금되는 암호화폐는 블록체인 특성상(익명)<br/>
                            회수가 불가하오니 각별히 주의하시기 바랍니다.
                        </p>
                        <form class="" action="#" method="post">
                            <table class='left_thick_table'>
                                <tbody>
                                    <tr>
                                        <th>자산처리</th>
                                        <td><span class='up_down_data get_rid_of_money'>45,000원</span></td>
                                    </tr>
                                    <tr>
                                        <th>로그인 비밀번호</th>
                                        <td>
                                            <input type="password" name="" value="" placeholder="로그인 비밀번호를 입력하세요." required class='input_your_password user_pass'>
                                            <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>보안 비밀번호</th>
                                        <td>
                                            <input type="password" name="" value="" placeholder="보안 비밀번호 입력하세요." required maxlength="4" minlength='4' class='input_your_password_again user_security'>
                                            <p id='warning_message'><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">보안비밀번호가 일치하지 않습니다.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>휴대폰 SMS인증</th>
                                        <td>
                                            <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required maxlength="6" minlength="6" class='input_your_sms_number'>
                                            <input type="button" value="인증번호요청" id="request_count" class="request_number">
                                            <input type="submit" value="인증번호재요청" id="confirm_count" class="cofirm_number">
                                            <span id="count_down" class="count_down">03:00</span>
                                            <p id='warning_message'><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">인증번호가 일치하지 않습니다.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="cancel_or_apply">
                                <input type="reset" name="reset" value="취소" onclick="location.href='myinfo.php'" class='cancel_btn'/>
                                <span class='agree_btn if_you_not_all_agree' onclick="location.href='leave_member_04.php'">다음단계</span>
                                <input type="submit" name="submit" value="다음단계" onclick="location.href='leave_member_04.php'" class='agree_btn if_you_all_agree'/>
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

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <div id="full">
                <!-- full_content -->
                <div id="popupbox" class='box popup phone_change_box'>
                  <div class="full_inner">
                    <h2>인증번호 발송완료</h2>
                    <div class="popupbox_text">
                      <p>등록하신 휴대폰으로 인증번호를 발송하였습니다.</p>
                    </div>
                    <div class="cancel_or_apply">
                      <input type="button" name="" value="확인"  class="leave_member_agree_btn">
                    </div>

                  </div>
                </div><!-- full_content End-->
                <div id="shadow"></div>
        </div>

        <!-- wrap -->
        <div id="app_wrap">
            <!-- container -->
            <div id="container">
              <!-- m_nav-->
              <?php include "m_nav.php";?>
              <!-- m_nav End-->

              <!-- m_header-->
              <?php include "m_header.php";?>
              <!-- m_header End-->

                <!-- content_wrap -->
                <div class="content_wrap">
                    <!-- common_table_wrap -->
                    <div class="content common_table_wrap con_1250">

                      <!-- app_page_content -->
                      <div class="app_pagePC_content">

                        <div class="app_pagePC_story">
                          <img src="img/exclamation6.png" alt="컴퓨터아이콘">
                          <p>현재 페이지는 디올스 PC버전을 통해<br/>
                          이용하실수 있습니다.</p>

                          <div class="app_pagePC_bt">
                            <input type="button" name="거래소버튼" value="홈으로 돌아가기" onclick="location.href='index.php'" class="app_bt">
                          </div>



                        </div>

                      </div><!-- app_page_content End-->

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
