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
                <div class="content alarm_wrap con_1250">
                    <!--content_nav -->
                    <div class="content_nav">
                      <h4>고객지원</h4>
                      <ul>
                          <li><a href="customer_faq.php" title="FAQ">FAQ</a></li>
                          <li class='on'>
                            <a href="#" title="1:1 문의" class='more_menu'>1:1 문의</a>
                            <dl class="nav_dropdown question_dd on">
                                <dt><a href="customer_question.php" title="1:1 문의하기">1:1 문의하기</a></dt>
                                <dt class="active"><a href="#" title="문의내역 확인하기">문의내역</a></dt>
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

                    <!-- content_nav_responsive -->
                    <div class="content_nav_responsive withTab">
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
                      <!-- guide_responsive -->
                      <div class="guide_responsive">
                        <div class="guide_select">
                          <span onclick="location.href='customer_question.php'">1:1 문의하기</span>
                          <span class="clicked">문의내역</span>
                        </div>
                      </div><!-- guide_responsive End-->
                    </div><!-- content_nav_responsive End-->

                  <div class="box question_history_area">
                    <h3 class="title">1:1 문의</h3>
                        <div class="question_history_inner mypage_content">
                          <h4 class="">문의내역</h4>
                          <div class="question_history_head">
                            <select name="알림선택" id="question_select2">
                              <option value="문의 유형" disabled selected="selected">문의 유형</option>
                              <option value="전체">전체</option>
                              <option value="가입 및 인증">가입 및 인증</option>
                              <option value="계정">계정</option>
                              <option value="입출금">입출금</option>
                              <option value="매수 및 매도">매수 및 매도</option>
                              <option value="기타">기타문의</option>

                            </select>

                            <div class="days"><!--days-->
                              <div>
                                <input type="date" value="2018-07-29">
                              </div>
                              <span>~</span>
                              <div>
                                <input type="date" value="2018-08-29">
                              </div>
                              <input type="submit" name="search" value="조회" class='search_btn'>
                            </div><!--days End-->
                          </div>



                          <table class="question_list" id="question_list">
                              <colgroup>
                                  <col width="8%">
                                  <col width="12%">
                                  <col width="55%">
                                  <col width="15%">
                                  <col width="10%">
                              </colgroup>
                                <thead>
                                  <tr>
                                    <th class="alram">번호</th>
                                    <th class="kind">유형</th>
                                    <th class="title">제목</th>
                                    <th class="date">작성일시</th>
                                    <th class="answer">답변</th>
                                  </tr>
                                </thead>

                                  <tbody>
                                    <tr>
                                      <td><span class="number">5</td>
                                      <td>입출금</td>
                                      <td id="left_text"><a href="customer_question_detail.php">암호화폐 출금 주소를 잘못 입력했어요.</a></td>
                                      <td>2018-10-01</td>
                                      <td class="delay">대기중</td>
                                    </tr>

                                    <tr>
                                      <td><span class="number">4</span></td>
                                      <td>매수 및 매도</td>
                                      <td id="left_text"><a href="customer_question_detail.php">더올스에서 이더리움 280,000ETH를 매수했습니다.</a></td>
                                      <td>2018-09-12</td>
                                      <td>답변완료</td>
                                    </tr>

                                    <tr>
                                      <td><span class="number">3</td>
                                      <td>기타문의</td>
                                      <td id="left_text"><a href="customer_question_detail.php">The Alls 이용약관은 어디서 볼 수 있나요?</a></td>
                                      <td>2018-09-05</td>
                                      <td>답변완료</td>
                                    </tr>

                                    <tr>
                                      <td><span class="number">2</span></td>
                                      <td>입출금</td>
                                      <td id="left_text"><a href="customer_question_detail.php">입출금 문의관련에 대해 문의 드립니다.</a></td>
                                      <td>2018-09-01</td>
                                      <td>답변완료</td>
                                    </tr>

                                    <tr>
                                      <td><span class="number">1</td>
                                      <td>계정</td>
                                      <td id="left_text"><a href="customer_question_detail.php">해킹보안시스템은 어떻게 가동되고 있나요.</a></td>
                                      <td>2018-08-27</td>
                                      <td>답변완료</td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                      <td><span class="number_null">&nbsp;</span></td>
                                      <td id="left_text"></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>


                                  </tbody>
                          </table>

                          <div class="contentBottom">
                              <div class="paging">
                                  <a href="#" title="prev"><img src="img/p_first.png"></a>
                                  <a href="#" title="prev"><img src="img/p_prev.png"></a>
                                  <a href="#" title="1page" class="selected">1</a>
                                  <a href="#" title="2page">2</a>
                                  <a href="#" title="3page">3</a>
                                  <a href="#" title="4page">4</a>
                                  <a href="#" title="5page">5</a>
                                  <a href="#" title="next"><img src="img/p_next.png"></a>
                                  <a href="#" title="next"><img src="img/p_end.png"></a>
                              </div>
                          </div><!-- 페이징 -->

                        </div><!--question_history_inner-->
                  </div><!--question_history_area End-->

                </div><!-- question_wrap End-->
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
