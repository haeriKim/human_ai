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
    <link rel="stylesheet" href="css/exchange66.css">
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
            <div id="header">
              <div class="headerTop">
                <input type="button" class="back" onclick="location.href='m_exchange_main.php'"/>
                <!-- 코인선택 영역 -->
                <div class="coinSelect_area">
                  <select id="coin_select" name="coin_select">
                      <option value="전체">비트코인 BTC/KRW</option>
                      <option value="비트코인캐시 BCH/KRW">비트코인캐시 BCH/KRW</option>
                      <option value="이더리움 ETH/KRW">이더리움 ETH/KRW</option>
                      <option value="이더리움클래식 ETC/KRW">이더리움클래식 ETC/KRW</option>
                      <option value="이오스 EOS/KRW">이오스 EOS/KRW</option>
                      <option value="리플 XRP/KRW">리플 XRP/KRW</option>
                      <option value="에이다 ADA/KRW">에이다 ADA/KRW</option>
                  </select>
                </div>
                <div class="alarm_area">
                  <img src="img/bell.png" class="alarmBtn" alt="알림버튼"/>
                </div>
              </div>
              <div class="current_price">
                <div class="price">
                  <p>현재가</p>
                  <span><strong>10,650</strong>KRW</span>
                </div>
                <div class="percent">
                  <p>전일대비</p>
                  <span><strong>-0.31</strong>%</span>
                  <span><img src="img/arrow_down_blue.png" alt="시세하락">500</span>
                </div>
              </div>
          </div><!-- header_wrap End-->

            <!-- content_wrap -->
            <div class="content_wrap content_wrap_margin">

                <ul class="gnb_tab">
                  <li><a href="m_exchange_buy_sell_market.php">주문</a></li>
                  <li><a href="m_exchange_price_change.php">호가</a></li>
                  <li><a href="m_exchange_chart.php">차트</a></li>
                  <li><a href="m_exchange_deal_history.php">전체체결</a></li>
                  <li class="on"><a href="#">코인정보</a></li>
                </ul>

                <!-- main_content -->
                <div class="content">
                    <div class="box" id='deal_orgin_transaction'>

                        <!--coin_detail-->
                        <div id="coin_detail">

                          <div class="coin_money_inner">
                            <div class="img_area">
                                <img src="img/bitcoin_big.png" alt="비트코인아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>비트코인</strong>
                                  <b class="coin_word">Bitcoin</b>
                              </li>

                            </ul>
                          </div>

                        </div>
                        <!--//coin_detail 끝-->

                        <div class="coin_story">
                            <div id="detail_all">
                              <!-- left_thick_table -->
                              <table class='coin_story_table'>
                                  <tbody>
                                      <tr>
                                          <th>최초발행</th>
                                          <td>2009년 1월</td>
                                      </tr>
                                      <tr>
                                          <th>코인/토큰</th>
                                          <td>코인</td>
                                      </tr>
                                      <tr>
                                          <th>순위</th>
                                          <td>1위</td>
                                      </tr>
                                      <tr>
                                          <th>시가총액</th>
                                          <td>127.5조원(18.10.01 기준)</td>
                                      </tr>
                                      <tr>
                                          <th>블록 생성주기</th>
                                          <td>10분</td>
                                      </tr>
                                      <tr>
                                          <th>분야</th>
                                          <td>디지털통화</td>
                                      </tr>
                                      <tr>
                                          <th>총발행한도</th>
                                          <td>21,000,000</td>
                                      </tr>
                                      <tr>
                                          <th>채굴보상량</th>
                                          <td>현재 12.5 BTC</td>
                                      </tr>
                                      <tr>
                                          <th>합의 프로토콜</th>
                                          <td>PoW</td>
                                      </tr>
                                      <tr>
                                          <th>공식홈페이지</th>
                                          <td><a href="https://bitcoin.org/ko/" target="_blank">https://bitcoin.org/ko/</a></td>
                                      </tr>
                                  </tbody>
                              </table><!-- coin_stroy_table End-->
                              <p>(정보기준일:2018.10.01)</p>
                            </div>
                       </div><!--coin_story End-->



                    </div><!-- con_410 End-->
                </div><!-- exchange_content End-->
            </div><!-- content_wrap End-->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
