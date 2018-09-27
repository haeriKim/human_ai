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
    <link rel="stylesheet" href="css/myinfo_change.css">
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <script>
jQuery(document).ready(function(){

});
</script>
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
                <div class="content certification_content con_1250">
                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="myinfo.php" title="회원정보">회원정보</a></li>
                        <li class="on">
                          <a href="#" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd">
                              <dt><a href="myinfo_login_password.php" title="로그인 비밀번호 변경">로그인 비밀번호 변경</a></dt>
                              <dt class="active"><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="myinfo_phone.php" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="myinfo_account.php" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="myinfo_OTP.php" title="새 지갑발급">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li><a href="certification.php" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->
                  <div class="box certification_area ">
                    <h3 class="title">회원정보관리</h3>
                    <div class="myinfo_main_box cer_center mypage_content">
                      <div class="cer_center">
                      <h4>보안비밀번호 변경</h4>
                        <div class="myinfo_small_info_box">
                          <div class="myinfo_box1">
                            <strong class="user_name">가*다</strong>
                            <p class="user_mail">abc@naver.com</p>
                          </div>
                          <div class="myinfo_box2">
                            <ul class="list_1">
                              <li>
                                <p class="myinfo_title">휴대폰</p>
                                <p class="myinfo_detail user_phone">
                                  <span>010</span>-<span>1***</span>-<span>***0</span>
                                </p>
                              </li>
                            </ul>
                            <ul class="list_2">
                              <li>
                                  <p class="myinfo_title">등급</p>
                                  <p class="myinfo_detail">Level&nbsp;<span class='user_level'>3</span></p>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- myinfo_small_info_box -->
                        <div class="myinfo_sub_box ">
                          <form class="" action="#" method="post">
                            <div class="myinfo_table_wrap myinfo_table_wrap2">
                              <!-- send_login_password -->
                              <div class="send_login_password">
                                <form action="#" class="phone2">
                                <table class='left_thick_table'>
                                  <tbody>

                                      <th>현재 로그인 비밀번호</th>
                                      <td><input type="password" class='user_pass' name="password" value="" placeholder="현재 로그인 비밀번호를 입력하세요." required maxlength="12" minlength="12" />
                                          <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                      </td>
                                    </tr>

                                    <tr>
                                      <th>새로운 보안 비밀번호</th>
                                      <td>
                                        <input type="password" name="" value="" placeholder="새로운 보안 비밀번호를 입력하세요." required maxlength="4" minlength="4" />
                                        <div class="question_smallbox"><img src="img/question.png">
                                          <div class="password_question_detail2">
                                                -숫자로 이루어진 4자리 보안 비밀번호를 입력해주세요.<br/>
                                                -해킹사고 방지를 위해 보안비밀번호를 자주 변경해주세요.<br/>
                                                -4자리의 중복 및 연속 숫자, 휴대폰 번호, 이메일 주소의 숫자,<br/>
                                                 비밀번호에 포함된 숫자 등 추측이 가능한 번호는 피해주세요.
                                          </div>
                                        </div>
                                        <p id='warning_message'>비밀번호 요건이 충족하지 않습니다.</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th>새로운 보안 비밀번호 확인</th>
                                      <td>
                                        <input type="password" class='user_security' name="security" value="" placeholder="새로운 보안 비밀번호를 입력하세요." maxlength="4" minlength='4' required/>
                                        <p id='warning_message'>비밀번호가 일치하지 않습니다.</p>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="cancel_or_apply">
                                  <input type="button" name="" value="취소" onclick="location.href='myinfo.php'"class="cancel_btn">
                                  <input type="submit" name="" value="변경" onclick="location.href='myinfo_security_password_success.php'" class="agree_btn">
                                </div>

                                </form>
                              </div><!-- send_login_password End-->

                            </div><!-- myinfo_table_wrap End-->

                          </form>
                        </div><!-- myinfo_sub_box End-->


                      </div><!-- cercenter End-->
                    </div><!-- myinfo_main_box End -->
                  </div><!--certification_area End-->
                </div><!-- certification_content End-->
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
