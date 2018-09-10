<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
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
                <div class="content main_content">

                  <!-- rolling_ad -->
                  <div class="slideWrap">

                    <ul class="slideUl">
                      <li class="banner1 banner"></li>
                      <li class="banner2 banner"></li>
                      <li class="banner3 banner"></li>
                    </ul>

                    <a href="#" class="nextBtn"></a>
                    <a href="#" class="prevBtn"></a>

                    <div class="slideshow-indicator"></div>
                  </div><!-- rolling_ad_img End-->

                  <!-- bitcoin_card_wrap  -->
                  <div class="bitcoin_card_wrap">
                      <!-- bitcoin_card -->
                      <div class="bitcoin_card">
                          <ul class="bitcoin_card_inner">
                            <!--bitcoin Card-->
                              <li>
                                  <p><img src="img/bitcoin.png" alt="비트코인아이콘"></p>
                                  <p>비트코인(BTC)</p>
                                  <p class='percent_up'><span class='up_down_data'><span style=font-size:12px;>▲</span> 7.5</span>%</p>
                                  <p><span class='up_down_data'>450,000</span>원</p>
                                  <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                  <div class="buy_sell_button">
                                      <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                  </div>

                              </li>
                            <!--bitcoin Card End-->

                            <!--bitcoincash Card-->
                              <li>
                                    <p><img src="img/bitcoincash.png" alt="비트코인캐시아이콘"></p>
                                    <p>비트코인캐시(BCH)</p>
                                    <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                    <p><span class='up_down_data'>70,000</span>원</p>
                                    <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                    <div class="buy_sell_button">
                                        <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                    </div>
                              </li>
                            <!--bitcoincash Card End-->

                            <!--eth Card-->
                              <li>
                                    <p><img src="img/eth.png" alt="이더리움아이콘"></p>
                                    <p>이더리움(ETH)</p>
                                    <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                    <p><span class='up_down_data'>70,000</span>원</p>
                                    <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                    <div class="buy_sell_button">
                                        <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                    </div>
                              </li>
                              <!--eth Card End-->

                              <!--etc Card-->
                                <li>
                                      <p><img src="img/etc.png" alt="이더리움클래식아이콘"></p>
                                      <p>이더리움클래식(ETC)</p>
                                      <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                      <p><span class='up_down_data'>70,000</span>원</p>
                                      <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                      <div class="buy_sell_button">
                                          <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                      </div>
                                </li>
                                <!--etc Card End-->

                                <!--EOS Card-->
                                  <li>
                                        <p><img src="img/eos.png" alt="이오스아이콘"></p>
                                        <p>이오스(EOS)</p>
                                        <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                        <p><span class='up_down_data'>70,000</span>원</p>
                                        <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                        <div class="buy_sell_button">
                                            <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                        </div>
                                  </li>
                                  <!--EOS Card End-->

                                  <!--리플(XRP) Card-->
                                    <li>
                                          <p><img src="img/reaple.png" alt="리플아이콘"/></p>
                                          <p>리플(XRP)</p>
                                          <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                          <p><span class='up_down_data'>70,000</span>원</p>
                                          <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                          <div class="buy_sell_button">
                                              <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                          </div>
                                    </li>
                                    <!--리플(XRP) Card End-->

                                    <!--에이다(ADA) Card-->
                                      <li>
                                            <p><img src="img/ada.png" alt="에이다아이콘" class='coin_ADA'></p>
                                            <p>에이다(ADA)</p>
                                            <p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p>
                                            <p><span class='up_down_data'>70,000</span>원</p>
                                            <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                            <div class="buy_sell_button">
                                                <a href='#' class="buy_button">매수</a><a href='#' class="sell_button">매도</a>
                                            </div>
                                      </li>
                                      <!--에이다(ADA) Card End-->
                            </ul>
                        </div>
                        <!-- bitcoin_card End-->

                        <!-- bitcoin_card_btn -->
                        <div class="bitcoin_card_btn">
                            <a href="#" class='prev'><img src="img/arrow_black_prev.png" alt="이전버튼"/></a>
                            <a href="#" class='next'><img src="img/arrow_black_next.png" alt="다음버튼"></a>
                        </div>
                        <!-- bitcoin_card_btn End -->
                    </div>
                    <!-- bitcoin_card_wrap  End-->

                    <!--Notice&use_guide wrap-->
                    <div class="notice_wrap">
                      <div class="notice">
                        <h4>공지사항<a href="notice.html"><img src="img/right-chevron.png" alt="공지사항 화살표"></a></h4>
                          <ul class="fristline">
                            <li><a href=""><b>[공지] 이더리움 입출금 지연 안내</b><span>2018.07.18</span></a></li>
                            <li><a href=""><b>[공지] CCE 홈페이지 리뉴얼기념 이벤트</b><span>2018.07.31</span></a></li>
                            <li><a href=""><b>[정보] 2018 하반기 비트코인캐시 상승세 정보뉴스</b><span>2018.08.22</span></a></li>
                          </ul>

                          <ul class="secondline">
                            <li><a href=""><b>[공지] 이오스 입출금 지연 안내</b><span>2018.08.23</span></a></li>
                            <li><a href=""><b>[공지] 휴먼앤에이아이 CCE와 함께 걷다.</b><span>2018.08.25</span></a></li>
                            <li><a href=""><b>[정보] 비트코인캐시 시장현황</b><span>2018.08.26</span></a></li>
                          </ul>
                      </div>
                      <div class="use_guide">
                        <ul>
                          <li>
                            <a href="#">
                                <img src='img/telephone-symbol-button.png' alt='고객센터'>
                                <p>고객센터</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <img src="img/desktop-monitor.png" alt="이용안내">
                              <p>이용안내</p>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div><!-- Notice&use_guide End-->
                </div><!-- main_content End-->
            </div><!-- content_wrap End-->

            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
    <div id="full">
            <!-- full_content -->
            <div id="full_content">
                <div class="full_inner">
                    <h2>암호화폐 거래 안내</h2>
                    <p>
                        최근 암호화폐에 대한 관심과 함께 무리한 투자에 대한 우려도 증가하고
                        있습니다. 안전하게 암호화폐를 거래할 수 있도록 아래 유의사항을 충분히
                        숙지하신 후 이용하시기 바랍니다.
                    </p>
                    <ul>
                        <li>암호화폐는 법정화폐가 아니며, 특정 주체가 가치를 보장하지 않습니다.</li>
                        <li>암호화폐는 365일, 24시간 전 세계에서 거래되며, 투기적 수요 및
                            국내외 규제 환경 등에 따라 급격한 시세 변동에 노출될 수 있습니다.</li>
                        <li>암호화폐에 대한 투자판단의 책임은 본인에게 있으며, 그에 따라
                            발생 가능한 손실도 투자자 본인에게 귀속됩니다.</li>
                    </ul>
                    <p>암호화폐의 특성을 충분히 숙지하시고 신중하게 거래에 임해주시기 바랍니다.</p>
                    <form class="" action="#" method="post">
                        <input type="checkbox" id='today_close' name='today_close'>
                        <label for='today_close'>오늘 하루 이 창 열지않기</label>
                    </form>
                    <a href="#" class='close_btn'>닫기</a>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
