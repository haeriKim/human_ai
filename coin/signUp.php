<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/signUp.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <div class="content signUp_content">
                  <div class="box con_1000">
                    <!-- 로그인폼 -->
                    <div id="signUp_area">
                      <h3>회원가입</h3>
                      <form class="" action="#" method="post">
                          <!-- signUp_left_con -->
                          <div class="signUp_left_con">
                            <div class="agree_content_box agree_content_box_1">
                                <p>CCE 이용 약관 동의 (필수)</p>
                                <p class="text_box">
                                    제1조 (목적)
                                    주식회사 스쿱미디어(이하 “회사”)가 제공하는 비트소닉 거래소 서비스(이하 “서비스”)의 이용조건 및 절차, 회사와 고객간의 권리ㆍ의무 및 책임사항, 기타 필요한 기본적인 사항을 정함으로써, 거래의 신속하고 효율적인 처리를 도모하고 거래당사자 상호간의 이해관계를 합리적으로 조정하는 것을 목적으로 합니다.
                                    비트소닉을 이용하려면 특정 기준을 충족해야 합니다.
                                    예를 들어, 성인이어야 하며 비트소닉의 일부 또는 전부를 사용할 수 없는 특정 위치가 있습니다. 또한 비트소닉을 사용할 때 불법 행위에 가담하거나 거짓말하거나 당사의 서비스나 시스템을 손상시킬 수 있는 일을 하는 등의 행위는 할 수 없습니다. 자세한 내용은 고지 내용을 참조하세요.
                                </p>
                                <input type="checkbox" id='agree_content_01' class="im_agree">
                                <label for='agree_content_01'>동의합니다</label>
                            </div>
                            <div class="agree_content_box agree_content_box_2">
                                <p>개인정보 수집 및 이용에 대한 동의 (필수)</p>
                                <p class="text_box">
                                    제1조 (목적)
                                    주식회사 스쿱미디어(이하 “회사”)가 제공하는 비트소닉 거래소 서비스(이하 “서비스”)의 이용조건 및 절차, 회사와 고객간의 권리ㆍ의무 및 책임사항, 기타 필요한 기본적인 사항을 정함으로써, 거래의 신속하고 효율적인 처리를 도모하고 거래당사자 상호간의 이해관계를 합리적으로 조정하는 것을 목적으로 합니다.
                                    비트소닉을 이용하려면 특정 기준을 충족해야 합니다.
                                    예를 들어, 성인이어야 하며 비트소닉의 일부 또는 전부를 사용할 수 없는 특정 위치가 있습니다. 또한 비트소닉을 사용할 때 불법 행위에 가담하거나 거짓말하거나 당사의 서비스나 시스템을 손상시킬 수 있는 일을 하는 등의 행위는 할 수 없습니다. 자세한 내용은 고지 내용을 참조하세요.
                                </p>
                                <input type="checkbox" id='agree_content_02' class="im_agree">
                                <label for='agree_content_02'>동의합니다</label>
                            </div>
                            <div class="agree_content_box agree_content_box_3">
                                <p>이벤트 등 프로모션 알림 메세지 수신에 대한 동의 (필수)</p>
                                <p class="text_box">
                                    제1조 (목적)
                                    주식회사 스쿱미디어(이하 “회사”)가 제공하는 비트소닉 거래소 서비스(이하 “서비스”)의 이용조건 및 절차, 회사와 고객간의 권리ㆍ의무 및 책임사항, 기타 필요한 기본적인 사항을 정함으로써, 거래의 신속하고 효율적인 처리를 도모하고 거래당사자 상호간의 이해관계를 합리적으로 조정하는 것을 목적으로 합니다.
                                    비트소닉을 이용하려면 특정 기준을 충족해야 합니다.
                                    예를 들어, 성인이어야 하며 비트소닉의 일부 또는 전부를 사용할 수 없는 특정 위치가 있습니다. 또한 비트소닉을 사용할 때 불법 행위에 가담하거나 거짓말하거나 당사의 서비스나 시스템을 손상시킬 수 있는 일을 하는 등의 행위는 할 수 없습니다. 자세한 내용은 고지 내용을 참조하세요.
                                </p>
                                <input type="checkbox" id='agree_content_03' class="im_agree">
                                <label for='agree_content_03'>동의합니다</label>
                            </div>
                            <input type="checkbox" id='agree_content_04' class="im_all_agree">
                            <label for='agree_content_04' class='all_agree_label'>모두 동의합니다</label>
                          </div><!-- signUp_left_con End-->

                          <!-- signUp_right_con -->
                          <div class="signUp_right_con">
                              <input type="text" name="email_address" value="" placeholder="이메일 주소를 입력해주세요" required maxlength="30" minlength="8" />
                              <input type="password" name="password" value="" placeholder="사용하실 비밀번호를 입력해주세요" required maxlength="30" minlength="10"/>
                              <input type="password" name="passowrd_again" value="" placeholder="비밀번호를 다시 입력해주세요" required maxlength="30" minlength="10"/>
                              <div class="password_alarm_wrap">
                                <ul>
                                    <li class='password_alarm_li_01'>
                                        <span class='not_meet'>소문자를 포함</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">소문자를 포함</span>
                                    </li>
                                    <li class='password_alarm_li_02'>
                                        <span class='not_meet'>10자리 이상</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">10자리 이상</span>
                                    </li>
                                    <li class='password_alarm_li_03'>
                                        <span class='not_meet'>대문자를 포함</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">대문자를 포함</span>
                                    </li>
                                    <li class='password_alarm_li_04'>
                                        <span class='not_meet'>비밀번호 확인 일치</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">비밀번호 확인 일치</span>
                                    </li>
                                    <li class='password_alarm_li_05'>
                                        <span class='not_meet'>숫자를 포함</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">숫자를 포함</span>
                                    </li>
                                    <li class='password_alarm_li_06'>
                                        <span class='not_meet'>특수문자(~!@#$%^*) 포함</span>
                                        <span class='meet'><img src="img/check.png" alt="조건만족">특수문자(~!@#$%^*) 포함</span>
                                    </li>
                                </ul>
                              </div>
                              <div class="btn_area">
                                  <input type="submit" name="sign_up" value="회원가입" class="join_btn sign_up_bt">
                                  <input type="submit" name="sign_up" value="회원가입" class="join_btn sign_up_bt_on">
                                  <a href="#">이미 CCE 계정이 있으시다면? 로그인</a>
                              </div>
                          </div> <!-- signUp_right_con End-->
                      </form>
                    </div><!-- signUp_area End-->
                  </div><!-- con_1000 End-->
                </div><!-- signUp_content End-->
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
