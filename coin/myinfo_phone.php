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
                              <dt><a href="" title="로그인 비밀번호 변경">로그인 비밀번호 변경</a></dt>
                              <dt><a href="#" title="보안비밀번호 변경">보안비밀번호 변경</a></dt>
                              <dt class="active"><a href="#" title="휴대폰번호 변경">휴대폰번호 변경</a></dt>
                              <dt><a href="#" title="계좌 변경">계좌 변경</a></dt>
                              <dt><a href="#" title="새 지갑발급">OTP 변경</a></dt>
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
                      <h4>휴대폰번호 변경</h4>
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

                        <div class="myinfo_text_box">
                            <p>휴대폰 번호 변경 시 번호가 초기화되며 보안등급이 <span>Level2로 하향</span>됩니다.</p><br/>
                            <p>휴대폰 번호 초기화 시, <span>계좌 인증(Level 4) 및 OTP인증(Level 5)도 함께 초기화</span>되어 <span>재등록</span>해주셔야 합니다.</p><br/>
                            <p>휴대폰 번호 재 인증전까지 거래 및 입출금이 불가능합니다.</p><br/>
                            <br/>
                            <p>위 조치는 휴대폰 도난, 피싱 등 금융 사고 예방을 위한 것으로 조금 불편하시더라도 많은 양해 부탁드립니다.</p>
                        </div>

                        <div class="cancel_or_apply">
                          <input type="button" name="" value="취소" class="cancel_btn">
                          <input type="button" name="" value="변경 요청" class="agree_btn">
                        </div>


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

<div id="full">
            <!-- full_content -->
            <div id="popupbox" class='box popup phone_change_box'>
              <div class="full_inner">
                <h2>휴대폰 번호 변경하기</h2>
                <div class="popupbox_text">
                  <p class="user_mail">abc@naver.com</p>
                </div>
                <div class="cancel_or_apply">
                  <input type="button" name="" value="취소" class="cancel_btn">
                  <input type="button" name="" value="변경 요청 하기" class="agree_btn request_btn">
                </div>

              </div>
            </div><!-- full_content End-->

          <!-- full_content -->
          <div id="popupbox" class='box popup phone_change_box2'>
            <div class="full_inner">
              <h2>메일 발송완료</h2>
              <div class="popupbox_text">
                <p>가입된 이메일 주소로 인증 메일이 발송되었습니다.</p>
                <p>메일을 확인해주세요.</p>
              </div>
              <div class="cancel_or_apply">
                <input type="button" name="" value="확인" class="cancel_btn_ok">
              </div>

            </div>
          </div><!-- full_content End-->
        <div id="shadow"></div>
</div>



</body>
</html>