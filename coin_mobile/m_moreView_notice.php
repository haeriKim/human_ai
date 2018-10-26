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
    <link rel="stylesheet" href="css/notice.css">
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

          <div id ="header_wrap">
            <!-- header -->
            <div id="header2">
              <div class="headerTop">
                <input type="button" class="back" onclick="location.href='m_moreView_main.php'"/>
                <h2 class="header_title">공지사항</h2>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼" onclick="location.href='m_alarm.php'"/>
                </div>
              </div>
            </div> <!-- header End-->
          </div><!-- header_wrap End-->

            <!-- mycoin_content_wrap -->
            <div class="mycoin_content_wrap">
                <!-- m_mycoin_main -->
                <div class="content">
                    <div class="notice_area">

                      <div class="notice_header">
                          <select name="notice" id="notice_select">
                            <option value="전체">전체</option>
                            <option value="전체">안내</option>
                            <option value="전체">입출금</option>
                            <option value="전체">거래</option>
                          </select>
                      </div>

                      <div class="notice_table_area">
                        <table class="notice_table">
                          <colgroup>
                            <col width="75%">
                            <col widht="25%">
                          </colgroup>
                          <thaed>
                            <tr>
                              <th>제목</th>
                              <th>작성일</th>
                            </tr>
                          </thaed>

                          <tbody>
                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[입출금] 월렛 업그레이드 8차 완료 (입금 주소 신규 발급 필수) - 전체 작업 완료</td>
                              <td class='date'>2018-10-17</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[입출금] 월렛 업그레이드 7차 완료 (입금 주소 신규 발급 필수)</td>
                              <td class='date'>2018-09-25</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[입출금] 월렛 업그레이드 6차 완료 (신규 입금 주소 발급 필요한 암호화폐 확인 필수)</td>
                              <td class='date'>2018-09-18</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[입출금] 월렛 업그레이드 8차 완료 (입금 주소 신규 발급 필수) - 전체 작업 완료</td>
                              <td class='date'>2018-09-05</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[안내] 암호화폐 및 예금 실사 보고서 결과를 공개합니다</td>
                              <td class='date'>2018-08-30</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[안내] 예금 실사 보고서 결과를 공개합니다</td>
                              <td class='date'>2018-08-27</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[이벤트] 디올 ISMS 인증 취득 기념 신규회원 가입자 대상 이더리움 지급 이벤트</td>
                              <td class='date'>2018-08-19</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[입출금] 월렛 업그레이드 6차 완료 (신규 입금 주소 발급 필요한 암호화폐 확인 필수)</td>
                              <td class='date'>2018-07-10</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[상장][이벤트][수정] 질리카 (ZIL) KRW 마켓 오픈 및 이벤트 안내</td>
                              <td class='date'>2018-07-02</td>
                            </tr>

                            <tr onclick="location.href='m_moreView_noticeS.php'">
                              <td class='notice_text'>[안내] 예금 실사 보고서 결과를 공개합니다</td>
                              <td class='date'>2018-07-02</td>
                            </tr>

                          </tbody>
                        </table>

                        <div class="contentBottom">
                            <div class="paging">
                                <a href="#" title="prev"><img src="img/p_first.png" alt='첫페이지로 가기'></a>
                                <a href="#" title="prev"><img src="img/p_prev.png" alt='이전페이지로 가기'></a>
                                <a href="#" title="1page" class="selected">1</a>
                                <a href="#" title="2page">2</a>
                                <a href="#" title="3page">3</a>
                                <a href="#" title="4page">4</a>
                                <a href="#" title="5page">5</a>
                                <a href="#" title="next"><img src="img/p_next.png" alt='다음페이지로 가기'></a>
                                <a href="#" title="next"><img src="img/p_end.png" alt='마지막페이지로 가기'></a>
                            </div>
                        </div><!-- 페이징 -->

                        <div class="none_box"></div>

                      </div>

                    </div><!-- assets_area End-->
                </div><!-- m_mycoin_main End-->
            </div><!-- mycoin_content_wrap End-->

            <div class='none_box'></div>
            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
