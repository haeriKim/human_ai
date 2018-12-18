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
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/customer_faq.css">
    <link rel="stylesheet" href="css/popup.css">
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
                <!-- main_content -->
                <div class="content faq_wrap con_1250">
                    <!--content_nav -->
                    <div class="content_nav">
                      <h4>고객지원</h4>
                      <ul>
                          <li class='active'><a href="#" title="FAQ">FAQ</a></li>
                          <li>
                            <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                            <dl class="nav_dropdown question_dd off">
                                <dt><a href="customer_question.php" title="1:1 문의하기" class='active'>1:1 문의하기</a></dt>
                                <dt><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
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
                          <li class='FAQ_li on'><a href="#" title="FAQ" class='sub_title active'>FAQ</a></li>
                          <li class='customer_q_li'>
                            <a href="customer_question.php" title="1:1 문의" class='sub_title'>1:1 문의</a>
                            <!-- <dl class="nav_dropdown">
                                <dt><a href="customer_question.php" title="1:1 문의하기">1:1 문의하기</a></dt>
                                <dt><a href="customer_questionList.php" title="문의내역">문의내역</a></dt>
                            </dl> -->
                          </li>
                          <li class='guide_li'>
                            <a href="guide_security.php" title="인증자료 제출안내" class='sub_title'>인증자료<br/>제출안내</a>
                            <!-- <dl class="nav_dropdown changeA_dd">
                                <dt><a href="guide_security.php" title="보안 비밀번호 초기화">보안 비밀번호 초기화</a></dt>
                                <dt><a href="guide_account.php" title="계좌 변경">계좌변경</a></dt>
                                <dt><a href="guide_OTP.php" title="OTP 초기화">OTP 초기화</a></dt>
                            </dl> -->
                          </li>
                          <li class='fee_table_li'><a href="fee_table.php" title="수수료 안내" class='sub_title'>수수료 안내</a></li>
                      </ul>
                    </div><!-- content_nav_responsive End-->

                  <div class="box faq_area">
                    <h3 class="title">FAQ</h3>
                        <div class="faq_inner mypage_content">
                          <h4 class="title2">자주 찾는 질문</h4>
                          <p class="search">
                              <select id="look_method" name="look_method" title="FAQ 종류">
                                  <option value="all">FAQ 전체</option>
                                  <option value="faq_list_join_cer">가입 및 탈퇴</option>
                                  <option value="faq_list_account">거래</option>
                                  <option value="faq_list_depo_withd">입출금</option>
                                  <option value="faq_list_buy_sell">정보변경 및 인증</option>
                                  <option value="faq_list_etc">기타</option>
                              </select>
                              <input type="text" title="검색영역" placeholder="검색어를 입력하세요"/ class="faq_search">
                              <a class="search_btn" href="#" title="검색버튼"><img src="img/search.png" alt="검색버튼"/ class="faq_search"></a>
                          </p>
                          <div class="faq_list">

                              <div class="no_search">
                                <span class="search_val"></span>  <!--검색창에 쓴 TEXT-->
                                <span>검색결과가 없습니다.</span>
                              </div>

                            <section class='faq_list_join_cer faq_section'>
                                <h5>[ 가입 및 탈퇴 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>회원가입 시 지인 혹은 가족의 휴대폰 번호로 등록할 수는 없나요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>디올스는 보안상 본인 명의 휴대폰으로 가입하지 않을 경우, 회원가입이 승인되지 않도록 휴대폰 본인인증 절차를 진행하고 있습니다. 본인 명의의 휴대폰으로 가입해주시기 바랍니다.</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>회원 탈퇴를 하고 싶어요.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>회원탈퇴 진행 방법<br>
                                        마이페이지 > 회원 정보 > 하단 'The Alls를 이용하고 싶지 않으시다면?' 텍스트 클릭 후 절차진행</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>회원탈퇴 후 다시 가입할 경우 전에 입력한 정보를 다시 사용할 수 있나요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>예, 사용하실 수 있습니다. 회원탈퇴 이후 별도의 대기 시간 없이 동일한 정보로 회원가입이 가능합니다.<br>
                                        다만, 최초 회원가입 절차와 동일하게 모든 정보를 입력하셔야 합니다.</p>
                                      </div>
                                  </li>
                              </ul><!-- faq리스트 가입 및 탈퇴 END-->
                            </section>

                            <section class='faq_list_account faq_section'>
                                <h5>[ 거래 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>거래 수수료는 얼마인가요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>디올스의 기본수수료는 0.25%로 적용하고 있습니다.
                                        자세한 수수료 정보는 [고객지원 > 수수료 안내]에서 확인하실 수 있습니다.</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>암호화폐 구매주문을 했는데 거래내역에 뜨질 않아요.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>주문후 거래내역에서 확인이 안되는경우 체결이 되지않아 호가창에 남아있기 때문이며, 미체결 내용은 [거래내역 > 미체결 탭]에서 조회 가능합니다.</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>코인을 KRW(한화)로 KRW(한화)를 코인으로 환산하는 방법을 알려주세요.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>[거래소] 페이지를 들어가시면 코인별로 현재 시세를 확인하실 수 있습니다.</p>
                                      </div>
                                  </li>
                              </ul><!-- faq리스트 거래 END-->
                            </section>

                            <section class='faq_list_depo_withd faq_section'>
                                <h5 class='candidate_03'>[ 입출금 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>암호화폐를 받고 싶은데 지갑주소는 어떻게 확인하나요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>[자산관리] 페이지 속 입출금 탭에 들어가신 후, 해당 코인의 입금 부분으로 들어가시면 지갑 주소를 확인하실 수 있습니다.<br>
                                        주소 코드를 잘못 입력해서 전송오류가 빈번하게 발생하니 꼼꼼히 확인하신 후 거래를 진행하시기 바랍니다.</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>지인이 보낸 코인이 확인되지 않아요.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>
                                            코인 전송시 10~15분 정도의 시간이 소요되며 블록체인 네트워크 전송량이 많을 경우 처리가 지연될 수 있습니다.<br>
                                            충분히 기다려보신 후에도 입금확인이 되지 않을 때에는 <a href="https://blockchain.info" target='_blank' class='go_link'>https://blockchain.info</a>에 들어가 진행 상황을 체크하실 수 있습니다.
                                        </p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>출금제한이 있나요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>디올스에서는 별도로 출금제한이 발생하지는 않습니다. 그러나, 해킹의심이나 이상거래 발견시 관리자 판단하에 출금제한이 있을 수 있습니다.</p>
                                      </div>
                                  </li>
                                </ul><!-- faq리스트 입출금 END-->
                            </section>

                            <section class='faq_list_buy_sell faq_section'>
                                <h5>[ 정보변경 및 인증 ]</h5>
                                <ul class="faq_ul">
                                    <li>
                                        <p class="question">
                                          <img src="img/q1.png" alt="질문">
                                          <span>회원가입 후 입력된 정보를 변경하고 싶어요.</span>
                                        </p>
                                        <div class="answer">
                                          <img src="img/a5.png" alt="답변">
                                          <p>회원 정보변경은 로그인 하신 후, [마이페이지 > 회원 정보관리]에서 확인하실 수 있습니다.</p>
                                        </div>
                                    </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>등록한 계좌를 변경하고 싶어요.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>회원님 정보의 안전한 보호를 위하여 사이트내 가입시 등록한 계좌는 직접 변경이 불가합니다. 계좌변경을 희망하실 경우 [고객지원 > 인증자료 제출안내]를 참고하여
                                            관련서류를 고객센터로 보내주시기 바랍니다.</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="물음표">
                                        <span>이메일 인증코드를 받지 못했습니다.</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>이메일 계정에 따라 수신 되기 까지 최대 10분까지 소요 될 수 있습니다.<br>
                                        10분이 경과했음에도 이메일을 수신하지 못한 경우, 회원님의 이메일 계정에서 디올스 메일을 스팸 메일로 처리하고 있는 것일 수도 있습니다.<br><br>

                                        1단계: 스팸 메일 목록을 먼저 확인하고 디올스 메일이 스팸 목록에서 발견되었을 경우, "스팸 해제"를 설정합니다.<br>
                                        2단계: 스팸 메일의 경우 이메일 계정에서 자동으로 삭제하는 기능이 있을 수도 있으니 "수신된 스팸 메일 보관하기" 설정을 통해 디올스 메일을 보관합니다.<br>
                                        3단계: 상기 설정 후 재로그인하여 이메일 인증을 다시 한번 요청하시기 바랍니다.</p>
                                      </div>
                                  </li>
                                </ul><!--faq리스트 인증 END-->
                            </section>

                            <section class='faq_list_etc faq_section'>
                                <h5>[ 기타 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>다른 궁금한 사항은 어디에서 확인할 수 있나요?</span>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>
                                            추가적으로 궁금하신 사항은 1:1 문의를 이용하시거나 고객센터로 연락을 주시기 바랍니다.
                                        </p>
                                      </div>
                                  </li>
                                </ul><!-- faq리스트 매도매수 END-->
                            </section>

                          </div><!--faq_list End-->
                        </div><!--faq_inner End-->
                  </div><!--faq_area End-->

                </div><!-- faq_wrap End-->
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
