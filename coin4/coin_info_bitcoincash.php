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
                                  <dt><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
                                  <dd onclick="location.href='coin_info_ethuriumclassic.php'"><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dd>
                                  <dd onclick="location.href='coin_info_eos.php'"><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS</span></dd>
                                  <dd onclick="location.href='coin_info_ripple.php'"><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP</span></dd>
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
                              비트코인 캐시(Bitcoin Cash, BHC)는 비트코인 코어(Bitcoin Core) 소프트웨어의 업그레이드된 버전입니다. 비트코인 캐시가 제공하는 주요 업그레이드는 블록 크기를 8MB로 늘린 것이며
                              이를 통해 비트코인 캐시 블록체인의 채굴자는 초당 더 많은 채굴을 효과적으로 처리할 수 있고, 사용자는 빠르고 부드러우며 저럼한 거래를 누릴 수 있습니다.<br/>
                              <br/>
                              2017년 비트코인의 수수료가 급등하면서 신뢰에 의문을 갖게 되었으며 일부 사용자는 대기한지 며칠 후에도 거래를 확인할 수 없는 문제점이 생겼습니다. 비트코인의 시장가격은
                              급속히 상승했지만 통화로서의 성장과 유용성은 정체되었으며 많은 사용자, 상인, 기업 및 투자자조차 비트코인을 대안으로 선택하지 않으면서 시장 지배력이 95%에서 40%로 떨어졌습니다.
                              블록체인을 운영하는 프로토콜을 업그레이드해 블록체인 저장용량을 늘리는 세그윗(Segregated Withness·SegWit) 방법으로도 블록크기를 늘릴 수 없는 이유는 몇 가지가 있습니다.<br/>
                              <br/>
                              첫째, 거래 100%에서 사용되더라도 그 용량이 1.7MB 블록까지만 증가하며 이 정도의 최대 증가로는 용량에 한계가 있어 기하급수적인 증가나 전세계적인 사용량을 처리하지 못합니다.<br/>
                              둘째, 소프트 구현으로 인해 폐기가 가능한 서명이 만들어지면 이는 비트코인의 보안 모델을 급속도로 약화시킵니다.<br/>
                              셋째, 대역폭 비효율성 2차 해싱 공격으로 인해 향후 용량 증가를 더욱 어렵게 만들며 세그윗은 공격자가 강제로 사용하지 않기 때문에 해결하지 못합니다.<br/>
                              이러한 이유로 인해 비트코인 캐시는 세그윗 이전의 포크(fork·전면 또는 소폭 개정)가 필요했습니다.<br/>
                              <br/>
                              비트코인 캐시는 원래의 비트코인 소프트웨어에 내재된 ‘돈’이라는 본질을 되돌리기 위해 만들어졌는데 P2P(peer to peer·개인대개인) 기반의 전자적암호화폐라는 비트코인 원래의 본질에
                              맞고 세계화에 부합하는 화폐를 공급하는 것을 목적으로 합니다.상인들과 사용자들은 낮은 수수료와 믿을 수 있는 승인 권한이 주어졌으며 비트코인 캐시는 무한한 성장, 세계적인 적용,
                              자유로운 혁신, 분산화된 개발로 미래를 보고 있습니다. 478,558(2017년 8월 1일 13시 16분 UTC) 블록까지의 비트코인 보유자는 비트코인 캐시의 소유자로서 전세계에 받아들여지는 건전한
                              화폐를 만들기 위한 비트코인 캐시 커뮤니티에 함께할 수 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p class='link_bitcoin_cash'>
                              <a href="https://www.bitcoincash.org/ko/" target="_blank" title="공식 웹사이트">공식 웹사이트</a>
                              <a href="https://blockdozer.com/" target="_blank" title="블록체인 조희">블록체인 조회</a>

                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                              기술적으로 비트코인캐시는 SHA256 알고리즘과 POW방식을 사용하는점에서 비트코인과 동일합니다. 그러나 비트코인 트랜잭션문제를 해결하기 위해 꼭 필요했던 비트코인 블럭 용량이 다릅니다.<br/>
                              비트코인이 블럭 용량이 1MB인 반면에 비트코인캐시는 최대 8MB까지 용량을 가변적으로 확장시킬 수 있습니다.<br/>또한 거래속도가 빠르고 수수료가 비트코인에 비해 저렴하다는 장점까지 있습니다.<br/>
                              <br/>
                              1.몇 초안에 거래의 처리 몇 분안에 거래가 확인되는 신속성<br/>
                              2.네트워크의 혼잡 또는 다운 없는 운영의 신뢰성<br/>
                              3.거래수수료의 저렴함<br/>
                              4.사용하기 쉽고 번거러움이 없는 간편성<br/>
                              5.검증된 지불시스템의 안정성<br/>
                              6.가장 강력한 블록체인 기술 구현<br/>
                            </p>
                          </div>

                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                              나카모토 사토시(가명)
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
                                <img src="img/bitcoincash_big.png" alt="비트코인캐시아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>비트코인캐시</strong>
                                  <b class="coin_word">BCH/KRW</b>
                              </li>
                              <li>
                                <span class="price">481,400<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.23</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">1,100</span>
                              </li>
                            </ul>
                          </div>
                          <div class="coin_money_detail">
                              <div id="detail_all">
                                <!-- left_thick_table -->
                                <table class='left_thick_table coinInfo_table bitcoincash_table'>
                                    <tbody>
                                        <tr>
                                            <th>최초발행</th>
                                            <td>2017년 8월</td>
                                        </tr>
                                        <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>순위</th>
                                            <td>4위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>8.6조원(18.10.01 기준)</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>10분</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>17,057,825</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>21,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴보상량</th>
                                            <td>6 BTC</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>미국</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://www.bitcoincash.org/ko/" target="_blank">https://www.bitcoincash.org/ko/</a></td>
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
                              <a href="https://twitter.com/bitsettle?ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/kFozWa8scF">https://t.co/kFozWa8scF</a>
                              <a href="https://twitter.com/hashtag/BCH?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/search?q=%24BCH&amp;src=ctag&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/BTC?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/FB39pMOSU0"></a>
                              </p>
                              <a href="https://twitter.com/bitsettle/status/1071056252460040192?ref_src=twsrc%5Etfw"></a>
                              </blockquote>
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
