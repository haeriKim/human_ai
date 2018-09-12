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
    <link rel="stylesheet" href="css/notice.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                <div class="content notice_content con_1000">

                  <div class="box notice_area">
                    <h3 class="title">공지사항</h3>
                    <div class="n_list">
                      <p class="search">
                          <select id="look_method" name="look_method">
                              <option value="">전체</option>
                              <option value="">안내</option>
                              <option value="">입출금</option>
                              <option value="">거래</option>
                          </select>
                          <input type="text" title="검색영역" placeholder="검색어를 입력하세요"/>
                          <a class="search_btn" href="#" title="검색버튼"><img src="img/search.png" alt="검색버튼"/></a>
                      </p>
                      <table class="notice_list" id="notice_list">
                          <colgroup>
                              <col width="10%">
                              <col width="70%">
                              <col width="20%">
                          </colgroup>
                          <thead>
                            <tr>
                              <th class="num">번호</th>
                              <th class="title">제목</th>
                              <th class="date">작성일</th>
                            </th>
                          </thead>
                          <tbody>
                            <tr>
                                <td class="important"><img src="img/notice.png" alt="확성기아이콘"/</td>
                                <td class="title important_text"><a href=''>[안내] 개인정보 처리방침 변경 안내</a></td>
                                <td class="date">2018-10-17</td>
                            </tr>
                            <tr>
                                <td class="new">NEW</td>
                                <td class="title"><a href=''>[안내] 개인정보 처리방침 변경 안내</a></td>
                                <td class="date">2018-10-17</td>
                            </tr>
                          <tr>
                              <td class="hot">HOT</td>
                              <a href='#'><td class="title">[이벤트] EOS 상장 기념 입금 이벤트 (당첨자 안내)</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">100</td>
                              <a href='#'><td class="title">[입출금] 월렛 업그레이드 8차 완료 (입금 주소 신규 발급 필수) - 전체 작업 완료</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">99</td>
                              <a href='#'><td class="title">[입출금] 월렛 업그레이드 7차 완료 (입금 주소 신규 발급 필수)</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">98</td>
                              <a href='#'><td class="title">[거래] 원화 마켓 신규 상장 (리퍼리움 RFR, 디마켓 DMT)</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">97</td>
                              <a href='#'><td class="title">[입출금] 월렛 업그레이드 6차 완료 (신규 입금 주소 발급 필요한 암호화폐 확인 필수)</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">96</td>
                              <a href='#'><td class="title">[입출금] 월렛 업그레이드 8차 완료 (입금 주소 신규 발급 필수) - 전체 작업 완료</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">95</td>
                              <a href='#'><td class="title">[안내] 암호화폐 및 예금 실사 보고서 결과를 공개합니다료</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          <tr>
                              <td class="num">95</td>
                              <a href='#'><td class="title">[안내] 암호화폐 및 예금 실사 보고서 결과를 공개합니다</td></a>
                              <td class="date">2018-10-17</td>
                          </tr>
                          </tbody>
                      </table><!-- 공지사항 리스트 END -->

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

                    </div><!-- n_list END -->
                  </div><!--coinInfo_area End-->

                </div><!-- coninInfo_content End-->
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
