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
                            <img src="img/step1.png" alt="스텝1" class="step1_on"/>

                            <p class="img_area">
                              <img src="img/quit_1.png" alt="탈퇴안내"/>
                            </p>
                            <strong>탈퇴 안내</strong>

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

                      <div class="withdrawal_text">
                        <h4>회원탈퇴 전,아래 내용을 확인해 주시기 바랍니다.</h4>
                          <br/>
                          <strong>1. 회원탈퇴 불가 사유</strong>
                            <p>1. 진행중인 거래가 있을 경우</p>
                            <p>2. 잔여 보유자산이 10,000원 이상인 경우</p>
                            <p>3. 입출금 중인 암호화폐가 있는 경우</p>
                            <p>4. 사용 중인 유료서비스가 있는 경우</p>
                            <p>5. 미사용 유료서비스가 있는 경우</p>
                            <p>6. 휴면자산 반환신청을 하지 않은 경우</p>
                            <br/>
                          <strong>2. 소멸 및 서비스 불가</strong>
                            <p>이미 탈퇴한 계정으로 오입금되는 암호화폐는 블록체인 특성상(익명) 회수가 불가하오니 각별히 주의하시기 바랍니다.</p>
                            <p>또한 The Alls 계정으로 연결되어 있는 유,무료 서비스는 더 이상 사용이 불가하며 자동 소멸 됨을 알려 드립니다.</p>
                          <br/>
                          <strong>3. 소액 자산 처리</strong>
                          <!--  <p>출금과 송금을 통해 최종적으로 남겨진 소액자산은 아래와 같으며 탈퇴시 회원님 동의 하에 <span class="bb">한국백혈병어린이재단</span>으로</p>
                            <p>기부할 수 있으며 처리하지 못하는 소액자산은 권리포기 합니다. </p>-->
                            <p>출금과 송금을 통해 최종적으로 남겨진 소액자산은 회원님 동의 하에 모두 폐기 됨을 유의하시길 바랍니다. </p>
                          <br/>
                          <strong>4. 회원정보 삭제</strong>
                            <p>회원 탈퇴와 함께 The Alls 등록된 회원님의 개인정보는 법에 의해 보존하는 5번외 모두 삭제, 폐기 처리되며 복구되지 않습니다.</p>
                          <br/>
                          <strong>5. 이용 기록 보관</strong>
                            <p>단,상법,전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의거하여 보존할 필요가 있는경우,</p>
                            <p>회사는 관계법령에서 정한 일정한 기간동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의</p>
                            <p>목적으로만 이용하며 보존기간은 아래와 같습니다.</p>
                          <br/>
                          <p>1. 계약 또는 청약 철회 등에 관한 기록</p>

                          <span class="withdrawal_span">보존 근거:전자상거래 등에서의 소비자보호에 관한 법률</span>
                          <br/>
                          <span class="withdrawal_span">보존기간:5년</span>
                          <br/>
                          <br/>
                          <p>2. 대금 결제 및 재화 등의 공급에 관한 기록</p>

                          <span class="withdrawal_span">보존 근거:전자상거래 등에서의 소비자보호에 관한 법률</span>
                          <br/>
                          <span class="withdrawal_span">보존기간:5년</span>
                          <br/>
                          <br/>
                          <p>3. 소비자의 불만 또는 분쟁 처리에 관한 기록</p>

                          <span class="withdrawal_span">보존 근거:전자상거래 등에서의 소비자보호에 관한 법률</span>
                          <br/>
                          <span class="withdrawal_bottom_line withdrawal_span">보존기간:3년</span>


                              <div id="checkbox_text">

                                  <input type="checkbox" id="withdrawal_checkbox" class="withdrawal_01_checkbox"><label for="withdrawal_checkbox" class="checkbox_text">위 유의사항을 동의하고 다음단계로 넘어갑니다.</label>

                              </div>

                          <div class="cancel_or_apply">
                            <input type="reset" name="reset" value="취소" onclick="location.href='myinfo.php'" class='cancel_btn'/>
                            <span class='agree_btn if_you_not_all_agree'>다음단계</span>
                            <input type="button" name="nwxt_btn" value="다음단계" onclick="location.href='leave_member_02.php'" class='agree_btn if_you_all_agree'/>
                          </div>




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
