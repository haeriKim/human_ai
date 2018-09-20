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
                        <h4>가*다님의 abc@naver.com 계정을 탈퇴 처리합니다.</h4>
                        <p>
                            회원 탈퇴시 CCE에 등록된 회원님의 모든 개인정보는 삭제,폐기 처리되며 복구가 불가능합니다.<br/>
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
                                        <th>비밀번호</th>
                                        <td>
                                            <input type="password" name="" value="" placeholder="" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>보안 비밀번호</th>
                                        <td>
                                            <input type="password" name="" value="" placeholder="보안 비밀번호 4자리 입력" required maxlength="4" minlength='4'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>휴대폰 SMS인증</th>
                                        <td>
                                            <input type="text" name="" value="" placeholder="휴대폰으로 전송된 인증번호를 입력해주세요." required>
                                            <input type="button" value="인증번호요청">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                             <div class="cancel_or_apply">
                                 <input type="reset" name="reset" value="취소" onclick="location.href='leave_member_02.php'" class='cancel_btn'/>
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
