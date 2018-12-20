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
    <link rel="stylesheet" href="css/coin_info.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                    <div class="content coninInfo_content con_1250">
                        <div class="box coin_select">
                          <!-- 코인선택 영역 -->
                          <div class="coinSelect_area">
                              <dl class="coinSelect">
                                  <dt><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
                                  <dd onclick="location.href='coin_info_ethuriumclassic.php'"><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dd>
                                  <dd onclick="location.href='coin_info_eos.php'"><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS</span></dd>
                                  <dd><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_ada.php'"><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA</span></dd>
                              </dl>
                          </div>
                        </div>
                      <div class="box coinInfo_area">
                        <h3 class="title">코인정보</h3>
                        <div class="text_area">
                          <div>
                            <h4>[ 코인소개 ]</h4>
                            <p>
                                리플은 블록체인을 기반으로 만들어진 지불 수단으로써, 자본을 전세계로 결함없이 그리고 아주 빠른 시간 안에 보낼 수 있도록 만들어진 혁신적인 가상화폐입니다. 리플은 다른 가상화폐들보다 유동성 비용(liquidity costs)이 낮고, 거래의 리스크가 적으며 지연시간 또한 적다는 장점을 지니고 있습니다.<br/><br/>
                                리플(XRP)은 달러(USD) 거래와 달리 은행 계좌를 요구하지 않기 때문에 서비스 수수료나 추가 운용 비용이 발생하지 않습니다. 따라서 리플(XRP)을 통하면 기존 환율보다 훨씬 더 경쟁력 있는 외환 가격을 제공받을 수 있습니다.<br/><br/>
                                리플은 새롭고 효율성 높은 시스템으로써, 채택자들에게 즉각적인 투자수익률(ROI)을 안겨줍니다. 더 많은 이용자가 참여할수록 더욱 큰 시장이 될 수 있습니다. 리플만의 디지털 자산 XRP을 통해 시장에서 리플의 입지는 더욱 빠르게 커질 것으로 전망하고 있습니다.<br/><br/>
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://ripple.com/" title="공식 웹사이트" target="_blank">공식 웹사이트</a>
                              <!-- <a href="" title="지갑 다운">지갑 다운</a> -->
                              <a href="https://xrpcharts.ripple.com/#/" title="블록체인 조회" target="_blank">블록체인 조회</a>
                              <a href="https://ripple.com/files/ripple_solutions_guide.pdf" title="백서" target="_blank">백서</a>
                              <!-- <a href="" title="리플 포럼">리플 포럼</a> -->
                              <!-- <a href="" title="리플 채굴">리플 채굴</a> -->
                              <a href="https://twitter.com/ripple" title="공식 트위터" target="_blank">공식 트위터</a>
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                                1. XRP 프로토콜은 무료 오픈 소스로 개방되어 있어 누구든지 개발에 참여할 수 있습니다. XRP는 은행간 거래 원장을 P2P 방식으로 분산 저장하기 때문에, 누구든지 XRP의 송금 기록을 열람·복사·보관할 수 있지만, 개인정보보호를 위해 정확히 누가 누구에게 송금했는지는 알 수 없습니다.<br/><br/>
                                2. XRP는 비트코인이나 이더리움 등 다른 암호화폐와 달리, 채굴(Mining) 방식을 사용하지 않습니다.<br/><br/>
                                3. XRP는 프로토콜에 따라 총 1,000억개가 일괄 생성되었으며, 더 이상 코인이 발행되지 않도록 설계되었습니다. 그에 따라 시간이 지나면서 XRP의 희소성이 증가하여 가격이 상승될 것으로 예상되고 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 핵심 가치 ]</h4>
                            <p>
                                1. 리플은 현재 지불 수단은 폭넓은 세계 경제의 수요, 21세기 소비자의 기대에 못미치고 있다고 생각합니다. 지불의 방법은 갈수록 새롭고 편리하게 변화하고 있지만 실제적인 지불은 수십년 된 기술로 이루어지고 있기 때문에 지불방식의 변화가 필요하다고 주장합니다.<br/><br/>
                                2. 리플은 오늘날 정보가 인터넷을 통해 이동하는 것처럼 지불방식이 변화해야 한다고 생각합니다. IP 기술 기반의 지불 인프라의 기반구조를 현대화함으로써, 인터넷을 통해 개인, 기업은 모두 즉각적인, 저비용의, 안전하며, 경계를 넘나드는 지불 방식을 경험하게 될 것이라고 주장하고 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                                크리스 라르센(Chris Larsen)
                            </p>
                            <small>위 정보는 코인에 대한 이해를 돕기 위해 제공하는 것으로, 투자 권유를 목적으로 하지 않습니다.<br/>
                            제공되는 정보는 누락과 지연이 발생할 수 있으며, TheAlls는 제공된 정보에 의한 투자결과에 대해 법적인 책임을 지지 않습니다.
                            </small>

                          </div>
                        </div>
                      </div><!--coinInfo_area End-->

                      <!--coin_money-->
                    <div class="box coin_money">
                          <div class="coin_money_inner">
                            <div class="img_area">
                                <img src="img/ripple_big.png" alt="리플아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>리플</strong>
                                  <b class="coin_word">XRP/KRW</b>
                              </li>
                              <li>
                                <span class="price">517<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.19</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">1.00</span>
                              </li>
                            </ul>
                          </div>
                          <div class="coin_money_detail">
                              <div id="detail_all">
                                <!-- left_thick_table -->
                                <table class='left_thick_table coinInfo_table ripple_table'>
                                    <tbody>
                                        <tr>
                                            <th>최초발행</th>
                                            <td>2013년 4월</td>
                                        </tr>
                                        <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>순위</th>
                                            <td>3위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>26.3조원</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>2분</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>39,095,000</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>100,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴보상량</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                          <th>국가</th>
                                          <td>미국</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://ripple.com/" target="_blank">https://ripple.com/</a></td>
                                        </tr>
                                    </tbody>
                                </table><!-- left_thick_table End-->
                                <p>(정보기준일:2018.10.01)</p>
                              </div>
                         </div><!--coin_money_detail End-->
                    </div>

                    <div class="twitter">

                      <ul class="twitter_ul">
                        <li>
                            <p class="twitter_toggle">
                              <span><img src="img/twitter.png" alt="트위터 아이콘">Twitter 정보보기</span>
                            </p>
                            <div class="twitter_object">
                              <blockquote class="twitter-tweet">
                              <p lang="en" dir="ltr">
                              <a href="https://t.co/k2vDlF6x36">https://t.co/k2vDlF6x36</a>
                              <a href="https://t.co/x5bIlQFHVr"></a>
                              </p>
                              <a href="https://twitter.com/Ripple/status/1075535298493181952?ref_src=twsrc%5Etfw">
                              </a>
                              </blockquote>
                              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </li>
                      </ul>
                   </div>

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
