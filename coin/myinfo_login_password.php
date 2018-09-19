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
    <link rel="stylesheet" href="css/myinfo_login_password.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                        <li class="active"><a href="#" title="회원정보">회원정보</a></li>
                        <li>
                          <a href="#" title="회원정보관리" class='more_menu'>회원정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                              <dt><a href="#" title="로그인 비밀번호 변경" >로그인 비밀번호 변경</a></dt>
                              <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
                          </dl>
                        </li>
                        <li><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속이력확인">접속이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="#" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->
                  <div class="box certification_area ">
                    <h3 class="title">회원정보</h3>
                    <div class="myinfo_main_box cer_center mypage_content">
                      <div class="cer_center">
                      <h4>로그인 비밀번호 변경</h4>
                        <div class="myinfo_small_info_box">
                          <div class="myinfo_box1">
                            <strong class="user_name">가*다</strong>
                            <p class="user_email">abc@naver.com</p>
                          </div>
                          <div class="myinfo_box2">
                            <ul class="list_1">
                              <li>
                                <p class="myinfo_title">휴대폰</p>
                                <p class="myinfo_detail">
                                  <span>010</span>-<span>1***</span>-<span>***0</span></p>
                              </li>
                            </ul>
                            <ul class="list_2">
                              <li>
                                  <p class="myinfo_title">등급</p>
                                  <p class="myinfo_detail">Level&nbsp;<span>3</span></p>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- myinfo_small_info_box -->
                        <div class="myinfo_sub_box ">
                          <form class="" action="#" method="post">
                            <div class="myinfo_table_wrap">
                              <!-- send_login_password -->
                              <div class="send_login_password">
                                <table class='left_thick_table'>
                                  <tbody>
                                    <tr>
                                      <th>현재 비밀번호</th>
                                      <td><input type="password" name="pre_password" value="pre_password" placeholder="현재 비밀번호를 입력해주세요" required maxlength="8" minlength="12" /></td>
                                    </tr>
                                    <tr>
                                      <th>새로운 비밀번호</th>
                                      <td><input type="password" name="password" value="password" placeholder="새로운 비밀번호를 입력해주세요" required maxlength="8" minlength="12" /></td>
                                    </tr>
                                    <tr>
                                      <th>새로운 비밀번호 확인</th>
                                      <td>
                                        <input type="password" name="password" value="password" placeholder="비밀번호를 재입력해주세요" required maxlength="8" minlength="12" />
                                        <div class="question_smallbox"><img src="img/question.png">
                                      <div class="password_question_detail">
                                            안전한 비밀번호 작성 법<br />
                                            -비밀번호는 영문 소문자, 대문자, 숫자, 특수문자를 포함하여 10자리 이상으로 만드셔야 합니다. <br />
                                            -비밀번호는 최대한 길게 작성해주세요.<br />
                                            -단, 허용되는 특수문자(~!@#$%^*)외 다른 특수문자는 사용할 수 없습니다.<br />
                                            -ID, 생일, 전화번호 등 개인정보를 이용해 만든 비밀번호를 사용하지 마세요.<br />
                                            -포털 사이트나 타 거래소 등 타 사이트와 동일하거나 비슷한 암호를 설정하지 마세요.타 사이트에서 암호가 유출될 경우 제3자가 회원님의 계정에 접근할 위험이 있습니다.<br />
                                            -동일한 문자가 반복되는 등 패턴이 있는 비밀번호로 만들지 마세요.<br />
                                      </div>
                                      </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th>휴대폰 SNS 인증</th>
                                      <td>
                                        <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력하세요." required maxlength="6" minlength="6" />
                                        <input type="button" value="인증번호요청" >
                                      </td>
                                    </tr>
                                    <tr>
                                      <th>보안 비밀번호</th>
                                      <td>
                                        <input type="password" name="security" value="" placeholder="보안 비밀번호를 입력하세요." maxlength="4" minlength='4' required/>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div><!-- send_login_password End-->

                            </div><!-- myinfo_table_wrap End-->
                            <div class="cancel_or_apply">
                              <input type="reset" name="reset" value="취소" class="cancel_btn">
                              <input type="submit" name="submit" value="변경" class="agree_btn if_you_all_agree">
                            </div>
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
