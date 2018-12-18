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
    <link rel="stylesheet" href="css/question.css">
    <link rel="shortcut icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/sub_menu.css">
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

          <!-- m_nav-->
          <?php include "m_nav.php";?>
          <!-- m_nav End-->

          <!-- m_header-->
          <?php include "m_header.php";?>
          <!-- m_header End-->


          <!-- header_wrap -->
          <?php include "header.php";?>
          <!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap">
                <!-- notice_detail_wrap -->
                <div class="content question_detail_wrap con_1250">
                  <div class="content_nav">
                    <h4>고객지원</h4>
                    <ul>
                        <li><a href="customer_faq.php" title="FAQ">FAQ</a></li>
                        <li class='on'>
                          <a href="" title="1:1 문의" class='more_menu'>1:1 문의</a>
                          <dl class="nav_dropdown question_dd on">
                              <dt><a href="customer_question.php" title="1:1 문의하기">1:1 문의하기</a></dt>
                              <dt class="active"><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
                          </dl>
                        </li>
                        <li>
                          <a href="#" title="인증자료 제출안내" class='more_menu'>인증자료 제출안내</a>
                          <dl class="nav_dropdown changeA_dd off">
                              <dt><a href="guide_security.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                              <dt><a href="guide_account.php" title="계좌 변경">계좌변경</a></dt>
                              <dt><a href="guide_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                          </dl>
                        </li>
                        <li><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav End-->

                  <div class="content_nav_responsive">
                    <h4>고객지원</h4>
                    <ul>
                        <li class='FAQ_li'><a href="customer_faq.php" title="FAQ" class='sub_title'>FAQ</a></li>
                        <li class='customer_q_li on'>
                          <a href="#" title="1:1 문의" class='sub_title active'>1:1 문의</a>
                        </li>
                        <li class='guide_li'>
                          <a href="guide_security.php" title="인증자료 제출안내" class='sub_title'>인증자료<br/>제출안내</a>
                        </li>
                        <li class='fee_table_li'><a href="fee_table.php" title="수수료 안내" class='sub_title'>수수료 안내</a></li>
                    </ul>
                  </div><!-- content_nav_responsive End-->

                  <!-- notice_detail -->
                  <div class="box question_detail question_detail_area">
                    <h3 class="title">문의내역</h3>
                    <!-- notice_detail_inner -->
                    <div class="question_detail_inner mypage_content">
                        <div class="question_title_wrap ">
                            <h4>[입출금] 암호화폐 출금 주소를 잘못 입력했어요.</h4>
                            <p class='upload_day'>2018-10-01</p>
                        </div>

                        <div class="question_detail_inner_content">
                            <!--<p>

                                제목 그대로 비트코인 출금에서 주소를 잘못 입력했어요.<br/>
                                <br/>
                                RE:<br/>
                                <br/>

                                안녕하세요 The Alls를 이용해 주셔서 감사합니다.<br/>
                                입출금 주소 오입력 시 다음과 같이 안내해 드리겠습니다.<br/>
                                <br/>
                                [암호화폐 출금 시 오입력]<br>
                                <br/>
                                암호화폐의 특성상 출금 신청이 완료되면 취소할 수 없으니, 송금 전 주소를 꼭 확인해 주세요.<br>
                                주소 오입력 시 송금이 정상적으로 이루어지지 않아 소중한 고객님의 자산을 잃을 수 있습니다.<br>
                                송금신청 완료 이후의 송금 과정은 블록체인 네트워크에서 처리되며, 이 과정에서 발생하는 문제는 업비트에서 처리할 수 없습니다.<br>

                                [암호화폐 입금 시 오입력] <br>
                                <br/>
                                업비트 팀은 고객님의 오입금으로 인한 피해를 줄이기 위해 최대한 노력하고 있습니다.<br>
                                오입금 사례별 복구를 도와드릴 수 있는 상황은 아래와 같으며, 상황에 따라 복구 작업을 위한 수수료가 발생할 수 있습니다. <br>
                                <br/>
                                **오입금 복구 지원 가능 상황**<br>
                                <br/>
                                1) Destination Tag나 메모을 잘못 작성한 오입금<br>
                                2) [이더리움(ETH)을 이더리움클래식(ETC)로] 또는 [ETC를 ETH로] 잘못 전송된 경우<br>
                                3) [ERC20을 ETC로] 또는 [ERC20을 ETH로] 또는 [ERC20을 ERC20으로] 잘못 전송된 경우<br>
                                4) ICO를 참여하여 코인/토큰을 업비트 ETH 핫월렛으로 잘못 전송된 경우<br>
                                5) BTC, BCH, LTC 오입금의 경우<br>
                                <br/>
                                위의 경우에는 다음 공지사항을 참고해 복구 신청을 해주시길 바랍니다. (업비트 오입금 안내 보기)<br>
                                <br/>
                                *복구 작업을 진행하는 경우에도 기술적 문제로 모든 오입금 금액이 복구되지 않을 수 있으니, 송금시 주소 확인을 꼭 당부드립니다.<br>
                                <br>
                            </p>-->

                            <br/>
                              <div class="question_ID">
                                <img src="img/profile_navy.png" alt="유저 아이콘"><p><span class="user_name">가*다</span>, <span class="user_mail">abc@naver.com</span> - <strong>3분전</strong></p>
                              </div>
                            <br/>

                            <p class="malpungsun_question">암호화폐 출금 주소를 오입력 했는데 어떡하죠</p>

                            <br/>
                              <div class="question_admin">
                                <img src="img/profile_pink.png" alt="관리자 아이콘"><p>The Alls 관리자 - <strong>방금</strong></p>
                              </div>
                            <br/>

                            <p class="malpungsun_answer">안녕하세요. <span class="user_name">가*다</span> 고객님<br/>
                              <br/>
                              The Alls를 이용해 주셔서 감사합니다.<br/>
                              <br/>
                              [암호화폐 출금 시 오입력]<br/>
                              암호화폐의 특성상 출금 신청이 완료되면 취소할 수 없으니, 송금 전 주소를 꼭 확인해 주세요.<br/>
                              주소 오입력 시 송금이 정상적으로 이루어지지 않아 소중한 고객님의 자산을 잃을 수 있습니다.<br/>
                              송금신청 완료 이후의 송금 과정은 블록체인 네트워크에서 처리되며, 이 과정에서 발생하는 문제는 업비트에서 처리할 수 없습니다.<br/>
                              <br/>
                              [암호화폐 입금 시 오입력] <br/>
                              업비트 팀은 고객님의 오입금으로 인한 피해를 줄이기 위해 최대한 노력하고 있습니다.<br/>
                              오입금 사례별 복구를 도와드릴 수 있는 상황은 아래와 같으며, 상황에 따라 복구 작업을 위한 수수료가 발생할 수 있습니다. <br/>
                              <br/>
                              **오입금 복구 지원 가능 상황**<br/>
                              1) Destination Tag나 메모을 잘못 작성한 오입금<br/>
                              2) [이더리움(ETH)을 이더리움클래식(ETC)로] 또는 [ETC를 ETH로] 잘못 전송된 경우<br/>
                              3) [ERC20을 ETC로] 또는 [ERC20을 ETH로] 또는 [ERC20을 ERC20으로] 잘못 전송된 경우<br/>
                              4) ICO를 참여하여 코인/토큰을 업비트 ETH 핫월렛으로 잘못 전송된 경우<br/>
                              5) BTC, BCH, LTC 오입금의 경우<br/>
                              <br/>
                              위의 경우에는 다음 공지사항을 참고해 복구 신청을 해주시길 바랍니다. (The Alls 오입금 안내 보기)<br/>
                              <br/>
                              *복구 작업을 진행하는 경우에도 기술적 문제로 모든 오입금 금액이 복구되지 않을 수 있으니, 송금시 주소 확인을 꼭 당부드립니다.<br/>

                            </p>

                            <br/>
                              <div class="question_ID">
                                <img src="img/profile_navy.png" alt="유저 아이콘"><p><span class="user_name">가*다</span>, <span class="user_mail">abc@naver.com</span></p>

                              </div>
                            <br/>

                            <div class="malpungsun_story">
                              <from>
                              <textarea placeholder="더 궁금한 사항이 있으시다면 여기에 적어주세요." required class="malpungsun_text" style="resize:none;"></textarea>

                              <div class="filebox2">
                                <input type="text" id="fileName" class="file_input_textbox2" readonly >
                                <div class="file_input_div2">
                                  <img src="img/upload.png" alt="파일첨부"/><span class="file_choice2">파일선택</span>
                                    <input type="file" id="ex_filename2" class="upload_hidden2" multiple="multiple" onchange="javascript: document.getElementById('fileName').value = this.value"/>
                                    <a class="del_attach2" onclick="delAttach(this.form)"><img src="img/x.png" alt="x버튼"></a>
                                </div>
                              </div>
                              </from>

                              <input type="submit" name="name" value="올리기" class="question_submit">


                            </div>
                        </div>

                        <!--<div class="question_detail_inner_as">
                            <p>이 문의를 담당한 에이전트</p>
                            <br/>
                            <p><img src="img/hosike.png" alt="호식이">호식이</p>
                            <br/>

                            <h4>문의 세부사항</h4>
                            <p>문의 유형</p>
                              <select name="유형" id="question_select2">문의유형
                                <option value="">가입 및 인증</option>
                                <option value="">계정</option>
                                <option value="">입출금</option>
                                <option value="">매수 및 매도</option>
                                <option value="">기타문의</option>
                              </select>
                        </div>-->

                        <div class="question_detail_footer">
                            <a href="customer_questionList.php" class='go_back_notice'>목록으로</a>
                        </div>



                    </div><!-- notice_detail_inner END -->
                  </div><!-- notice_detail End-->
                 </div><!-- notice_detail_wrap End-->
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
