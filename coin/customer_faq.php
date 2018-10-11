<!DOCTYPE html>
<html lang="ko" class="no-js">
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
    <link rel="stylesheet" href="css/sub_menu.css">
    <link rel="stylesheet" href="css/customer_faq.css">
    <link rel="stylesheet" href="css/popup.css">
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
                            <a href="#" title="인증변경안내" class='more_menu'>인증변경안내</a>
                            <dl class="nav_dropdown changeA_dd off">
                                <dt><a href="guide_security.php" title="보안비밀번호 초기화">보안비밀번호 초기화</a></dt>
                                <dt><a href="guide_account.php" title="계좌 변경">계좌변경</a></dt>
                                <dt><a href="guide_OTP.php" title="OTP 변경">OTP 변경</a></dt>
                            </dl>
                          </li>
                          <li><a href="fee_table.php" title="수수료 안내">수수료 안내</a></li>
                      </ul>
                    </div><!-- content_nav End-->

                  <div class="box faq_area">
                    <h3 class="title">FAQ</h3>
                        <div class="faq_inner mypage_content">
                          <h4 class="title2">자주 찾는 질문</h4>
                          <p class="search">
                              <select id="look_method" name="look_method" title="FAQ 종류">
                                  <option value="all">FAQ 전체</option>
                                  <option value="faq_list_join_cer">가입 및 인증 </option>
                                  <option value="faq_list_account">계정</option>
                                  <option value="faq_list_depo_withd">입출금</option>
                                  <option value="faq_list_buy_sell">매수 및 매도</option>
                              </select>
                              <input type="text" title="검색영역" placeholder="검색어를 입력하세요"/>
                              <a class="search_btn" href="#" title="검색버튼"><img src="img/search.png" alt="검색버튼"/></a>
                          </p>
                          <div class="faq_list">
                            <section class='faq_list_join_cer faq_section'>
                                <h5>[ 가입 및 인증 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a1.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q2.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a2.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a3.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                </ul><!-- faq리스트 가입 및 인증 END-->
                            </section>

                            <section class='faq_list_account faq_section'>
                                <h5>[ 계정 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q2.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a4.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a5.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q2.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a6.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                </ul><!-- faq리스트 계정 END-->
                            </section>

                            <section class='faq_list_depo_withd faq_section'>
                                <h5 class='candidate_03'>입출금</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a7.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q2.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a8.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a1.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                </ul><!-- faq리스트 입출금 END-->
                            </section>

                            <section class='faq_list_buy_sell faq_section'>
                                <h5>[ 매수 및 매도 ]</h5>
                                <ul class="faq_ul">
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a3.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q2.png" alt="물음표">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a4.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
                                      </div>
                                  </li>
                                  <li>
                                      <p class="question">
                                        <img src="img/q1.png" alt="질문">
                                        <span>미성년자도 가입 및 거래가 가능한가요?</span>
                                        <img src="img/arrow_off_01.png" alt="" class='arrow_off arrow'>
                                        <img src="img/arrow_on_01.png" alt="" class='arrow_on arrow'>
                                      </p>
                                      <div class="answer">
                                        <img src="img/a7.png" alt="답변">
                                        <p>미성년자, 만 19세 미만의 회원님들은 거래가 불가능합니다.<br/>
                                        (2018년 기준, 태어난 해가 1999년 이하부터 거래가 가능합니다.)</p>
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
