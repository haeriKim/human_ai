<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/certification_main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/fouc.js"></script> -->
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">
            <!-- header_wrap -->
            <div id ="header_wrap">
                <!-- header -->
                <div id="header2">
                    <!-- headerTop -->
                    <div class="headerTop">
                        <input type="button" class="back" onclick="location.href='m_moreView_main.php'"/>
                        <h2 class="header_title">인증센터</h2>
                        <!-- alarm_area -->
                        <div class="alarm_area">
                            <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                        </div><!-- alarm_area End-->
                    </div><!-- headerTop End-->
                </div> <!-- header End-->
            </div><!-- header_wrap End-->

            <!-- certification_main_wrap -->
            <div class="certification_main_wrap">
                <!-- user_level_part -->
                <div class="user_level_part">
                    <b>
                        회원님의 현재 보안등급은
                        <span class='waiting'>Level
                            <span class="user_level lv_01">1</span>
                            <span class="user_level lv_02">2</span>
                            <span class="user_level lv_03">3</span>
                            <span class="user_level lv_04">4</span>
                            <span class="user_level lv_05">5</span>
                        </span>입니다.
                    </b>
                    <span class='more_certification'>입출금 이용을 위해 보안등급 상향이 필요합니다.</span>
                    <span class='level_max'>안전한 거래를 위한 모든 보안단계가 인증되었습니다.</span>
                </div><!-- user_level_part End-->
                <ul>
                    <li class='certi_level_01'>
                        <img src="img/m_mailbox.png" alt="이메일인증">
                        <div class="text_area">
                          <p><span class="user_level_on">Level 1</span> 이메일인증<span class='must apply_buy'>*필수</span></p>
                        </div>
                        <span class='certi_success certi'>인증완료</span>
                    </li>
                    <li class='certi_level_02'>
                        <img src="img/m_key.png" alt="보안 비밀번호생성" class='certi_on'>
                        <img src="img/m_key_off.png" alt="보안 비밀번호생성" class='certi_off'>
                        <div class="text_area">
                          <p><span class="user_level">Level 2</span> 보안 비밀번호생성<span class='recommend apply_sell'>*권장</span></p>
                        </div>
                        <span class='certi_success certi'>인증완료</span>
                        <span class='go_certi certi' onclick="location.href='m_certification_02.php'">인증하기</span>
                    </li>
                    <li class='certi_level_03'>
                        <img src="img/m_phone.png" alt="실명인증" class='certi_on'>
                        <img src="img/m_phone_off.png" alt="실명인증" class='certi_off'>
                        <div class="text_area">
                          <p><span class="user_level">Level 3</span> 실명인증<span class='recommend apply_sell'>*권장</span></p>
                        </div>
                        <span class='certi_success certi'>인증완료</span>
                        <span class='go_certi certi' onclick="location.href='m_certification_03.php'">인증하기</span>
                    </li>
                    <li class='certi_level_04'>
                        <img src="img/m_bankbook.png" alt="계좌인증" class='certi_on'>
                        <img src="img/m_bankbook_off.png" alt="계좌인증" class='certi_off'>
                        <div class="text_area">
                          <p><span class="user_level">Level 4</span> 계좌인증<span class='recommend apply_sell'>*권장</span></p>
                        </div>
                        <span class='certi_success certi'>인증완료</span>
                        <span class='go_certi certi' onclick="location.href='m_certification_04.php'">인증하기</span>
                    </li>
                    <li class='certi_level_05'>
                        <img src="img/m_lock.png" alt="OTP 인증" class='certi_on'>
                        <img src="img/m_lock_off.png" alt="OTP 인증" class='certi_off'>
                        <div class="text_area">
                          <p><span class="user_level">Level 5</span> OTP 인증<span class='recommend apply_sell'>*권장</span></p>
                        </div>
                        <span class='certi_success certi'>인증완료</span>
                        <span class='go_certi certi' onclick="location.href='m_certification_05.php'">인증하기</span>
                    </li>
                </ul>

                <p class='notify'>
                    ※ 만 19세 이하는 거래 할 수 없습니다.<br>
                    ※ 매수/매도 및 코인입금은 Level 1(이메일인증) 인증 완료 후 이용이 가능합니다.<br>
                    ※ 원화입금은 Level 4(계좌인증) 인증 완료 후 이용이 가능합니다.<br>
                    ※ 원화/코인출금은 Level 5(OTP 인증)까지 인증 완료 후 이용이 가능합니다.<br>
                    ※ 인증된 정보를 변경하시려면 <span>'마이페이지 > 회원 정보관리'</span> 에서 이용해주세요.<br>
                </p>
            </div><!-- certification_main_wrap End-->
            <div class="none_box"></div>

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
</body>
</html>
