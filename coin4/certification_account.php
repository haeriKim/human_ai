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
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/certification_account.css">
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
                <div class="content certification_content con_1250">

                  <!--content_nav -->
                  <div class="content_nav">
                    <h4>마이페이지</h4>
                    <ul>
                        <li><a href="myinfo.php" title="회원 정보">회원 정보</a></li>
                        <li>
                          <a href="myinfo_login_password.php" title="회원 정보관리" class='more_menu'>회원 정보관리</a>
                          <dl class="nav_dropdown info_dd off">
                            <dt><a href="myinfo_login_password.php" title="로그인 비밀번호변경">로그인 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_password.php" title="보안 비밀번호변경">보안 비밀번호변경</a></dt>
                            <dt><a href="myinfo_security_change.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                            <dt><a href="myinfo_phone.php" title="휴대폰 번호변경">휴대폰 번호변경</a></dt>
                            <dt><a href="myinfo_account.php" title="계좌변경">계좌변경</a></dt>
                            <dt><a href="myinfo_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                            <dt><a href="myinfo_OTP_change.php" title="OTP 비활성화">OTP 비활성화</a></dt>
                          </dl>
                        </li>
                        <li class='active'><a href="#" title="인증센터">인증센터</a></li>
                        <li><a href="track_ip_address.php" title="접속 이력확인">접속 이력확인</a></li>
                        <li>
                          <a href="#" title="알림" class='more_menu'>알림</a>
                          <dl class="nav_dropdown alarm_dd off">
                              <dt><a href="alarm.php" title="알림 상세">알림 상세</a></dt>
                              <dt><a href="alarm_setting.php" title="알림 설정">알림 설정</a></dt>
                          </dl>
                        </li>
                    </ul>
                  </div><!-- content_nav End-->

                  <div class="box certification_area">
                    <h3 class="title">인증센터</h3>
                    <div class="cer_center mypage_content">
                      <ul class="cer_level">
                        <li>
                          <img src="img/lv1.png" alt="레벨1"/>
                          <p class="img_area">
                            <img src="img/mailbox.png" alt="이메일인증 아이콘"/>
                          </p>
                          <strong>이메일인증</strong>
                          <span>실제 사용 중인<br/>이메일 계정을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv2.png" alt="레벨2" />
                          <p class="img_area">
                            <img src="img/key.png" alt="보안비밀번호생성 아이콘" />
                          </p>
                          <strong>보안비밀번호 생성</strong>
                          <span>안전거래를 위한 <br/>보안비밀번호를 생성해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv3.png" alt="레벨3" />
                          <p class="img_area">
                            <img src="img/phone.png" alt="휴대폰인증 아이콘" />
                          </p>
                          <strong>실명인증</strong>
                          <span>본인명의 휴대폰을 통하여<br/>실명을 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv4.png" alt="레벨4" class="lv4_on"/>
                          <img src="img/lv4_off.png" alt="레벨4" class="lv4_off"/>
                          <p class="img_area">
                            <img src="img/bankbook_off.png" alt="계좌인증 아이콘" class="account_off"/>
                            <img src="img/bankbook.png" alt="계좌인증 아이콘" class="account_on" />
                          </p>
                          <strong class="gray_title">계좌인증</strong>
                          <span>거래소를 이용하시 위한<br/>계좌를 인증해주세요.</span>
                        </li>
                        <li>
                          <img src="img/lv5.png" alt="레벨5" class="lv5_on">
                          <img src="img/lv5_off.png" alt="레벨4" class="lv5_off"/>
                          <p class="img_area">
                            <img src="img/lock_off.png" alt="OTP 인증 아이콘" class="otp_off"/>
                            <img src="img/lock.png" alt="OTP 인증인증 아이콘" class="otp_on" />
                          </p>
                          <strong class="gray_title">OTP 인증</strong>
                          <span>실제 사용 중인<br/>OTP로 인증해주세요.</span>
                        </li>
                      </ul>

                      <div class="center_bottom">
                        <p class='content_title'>계좌인증</p>
                        <div class="cText_left2">
                            <strong><span>1</span>. 개인정보 수집 및 이용 동의(필수)</strong>
                            <ul>
                              <li>- 목적 : 원화(KRW) 거래를 위한 본인 확인</li>
                              <li class="account_line">- 항목 : 계좌번호,은행명</li>

                            <li><input type="checkbox" id="account_yes" class="all_agree account_agree" >
                            <label for="account_yes">
                             개인 정보 수집 및 이용에 동의 합니다.</li>
                             </ul>
                             <p id="account_malpungsun">
                               개인정보 수집 및 이용 동의해주세요.
                             </p>

                        </div>


                        <div class="cText_right2">

                          <strong><span>2</span>. 계좌 정보 입력</strong>
                          <form action="#" method="post">
                          <table class="account left_thick_table">
                            <tbody>
                              <tr>
                                <th>예금주</th>
                                <td>
                                  <span class="user_name">가나다</span>
                                </td>
                              </tr>
                              <tr>
                                <th>은행명</th>
                                <td>
                                  <select name="bankselect" id="bankselect" required class='bankName'>
                                    <option value="은행선택" selected="selected" disabled>은행선택</option>
                                    <option value="국민은행">국민은행</option>
                                    <option value="농협은행">농협은행</option>
                                    <option value="신한은행">신한은행</option>
                                    <option value="우리은행">우리은행</option>
                                    <option value="기업은행">기업은행</option>
                                  </select>
                                  <span id="bankselect_fixed "class="bankselect_fixed">국민은행</span>
                                </td>
                              </tr>
                              <tr>
                                <th>계좌번호</th>
                                <td>
                                  <input type="text" placeholder="숫자만 입력하세요." required class="account_number user_account">
                                  <span class="account_number_fixed">12-231-1234-23-123</span>
                                  <p id="warning_message">형식에 맞지 않는 번호입니다.</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="notice">
                            <p>※ 본인명의 계좌만 등록 가능합니다.</p>
                            <p>※ 은행 점검 시간에는 계좌 인증이 불가능합니다.</p>
                          </div>
                          <div class="bank_request">
                            <span class="request">계좌 인증번호 요청</span>
                            <input type="submit" name="계좌 인증번호 요청" value="계좌 인증번호 요청" class="chk_ok"/>
                          </div>
                          <div class="code_area">
                            <p>위에 회원님의 계좌로 <b>1원</b>을 보냈습니다.</p>
                            <p>계좌 거래내역 입금자명 디올스 뒤에 <b>숫자 3자리</b>를 입력하세요.</p>

                            <p class="code_text">1원이 입금되지 않으셨나요?<br/>
                              입금 내역이 확인 되지 않으시다면 '고객센터'로 문의해주세요.
                            </p>
                              <input type="text" placeholder="인증번호 숫자 3자리를 입력하세요." required class="authentication_num" minlength="3" maxlength="3">
                              <p id="warning_message"><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">인증번호가 일치하지 않습니다.</p>
                              <a class="delete_icon"><img src="img/x.png" alt="휴지통아이콘">삭제</a>
                            <div id="bank_complete">
                                <input type="button" name="취소" value="취소" onclick="location.href='certification.php'" class="bank_cancel">

                                <span class="account_complete">인증</span>
                                <input type="submit" name="인증" value="인증" class="chk_ok" onclick="location.href='certification_account_success.php'"/>

                            </div>
                            <p class="code_text2">인증번호는 어떻게 확인하나요?</p>
                          </div>
                          </form>
                        </div>

                      </div>
                    </div>
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
            <div id="popupbox" class='box popup email_pop'>
                <div class="full_inner">
                    <h2>입출금 계좌 삭제</h2>
                    <div class="popupbox_text">
                      <p class="account_text">아래 계좌를 정말 삭제하시겠습니까?</p>
                      <p class="account_text">계좌 등록은 한 달에 최대 <b class="account_count">3회</b>까지만 가능합니다. <strong>(3회 남음)</strong></p>

                     <!--  <p class="popup_title">은행명</p>
                       <p class="bankName readonly">국민은행</p>
                       <p class="popup_title">계좌번호</p>
                       <p class="user_accountotp user_otpNum readonly">12**********83</p>
                       <p class="popup_title">예금주</p>
                       <p class="user_name readonly">가나다</p> -->

                       <table class="account_delete_table">
                         <colgroup>
                           <col width="20%">
                           <col width="60%">
                         </colgroup>
                         <tr>
                           <th>예금주</th>
                             <td>
                               <p class="user_name readonly">가나다</p>
                             </td>
                         </tr>

                         <tr>
                           <th>은행명</th>
                             <td>
                               <p class="bankName readonly">국민은행</p>
                             </td>
                         </tr>

                         <tr>
                           <th>계좌번호</th>
                             <td>
                               <p class="user_accountotp user_otpNum readonly">12**********83</p>
                             </td>
                         </tr>



                       </table>

                    </div>
                    <div class="btn_area">
                      <input type="button" name="" value="취소" class="popupbt delete_cancel">
                      <input type="submit" name="" value="삭제" onclick="location.href='certification_account.php'" class="popupbt delete_ok">
                    </div>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->

    <div id="account_full">
      <div id="popupbox2" class='box2 popup2'>
          <div class="full_inner">
            <h2>인증번호 확인방법</h2>

              <div class="popupbox_text">
                <img src="img/account_img1.jpg" alt="계좌인증번호이미지">
              </div>

              <div class="btn_area">
                <input type="button" name="" value="확인" class="popupbt delete_cancel account_popup_ok">
              </div>

          </div>
      </div>
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
