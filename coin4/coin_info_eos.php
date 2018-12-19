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
                                  <dt><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
                                  <dd onclick="location.href='coin_info_ethuriumclassic.php'"><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dd>
                                  <dd><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS</span></dd>
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
                              이오스(EOS) 암호화폐는 탈 중앙화 컴퓨터, 모바일, 어플 통신 개발 운영체제이며, 수백만개에 달하는 거래를 빠르게 처리할 수 있고 운영체제 속에서 빠르게 확장하고 유연하고 매우 안전하게 개발할 수 있는 화폐입니다.<br/>
                              <br/>
                              Bitshare와 Steem을 개발한 댄라리머(Dan Larimer)가 2017년 6월 개발한 DApp플랫폼으로, 기술적 측면은 이더리움과 비슷하나, 기존 플랫폼의 비싼 수수료와 연산 능력의 한계로 블록체인의 광범위한 사용이 어렵기 때문에 개발자 및 사용자가 무료로 이용할 수 있는 플랫폼을 만들었습니다.<br/>


                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://eos.io/" title="공식 웹사이트" target="_blank">공식 웹사이트</a>
                              <a href="https://eospark.com/" title="블록체인 조희" target="_blank">블록체인 조회</a>
                              <a href="https://github.com/EOSIO/Documentation/blob/master/ko-KR/TechnicalWhitePaper.md" title="백서" target="_blank">백서</a>
                              <a href="https://twitter.com/EOS_io" title="공식 트위터" target="_blank">공식 트위터</a>
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                              1. 블록 타임 DPOS의 합의 방식을 채택한 이오스는 0.5초마다 블록이 생성됩니다. 비트쉐어와 스팀에 사용된 그래픽 압의 엔진보다 6배나 개선된 것이며 이를 위해 기술적으로 현실의 벽과 타협하긴 했지만
                              이런 타협을 통해서 이오스는 Dapp의 사용자에게 여태껏 플랫폼 블록체인이 제공하지 못한 빠른 속도의 서비스를 제공할 수 있게 되었습니다.<br/>
                              댄 라리머는 웹에서 프로그램을 빠르게 구동가능한 웹 어셈블리에 Smart Contract를 제공할 것이라고 밝혔으며 여태껏 누구도 성공못한 CPU 코어 당 parallel scaling을 실현할 것이라고 이야기했습니다.<br/>
                              CPU 코어 당 parallel scaling이 가능해지면 EOS는 수십~수백만 TPS를 처리할 수 있게 됩니다. 블록체인의 실용성이 현실로 한 걸음 더 다가오는데 일조할 수 있게 되는겁니다.<br/>
                              <br/>
                              2. 빠른 반응성으로 인해 현실적인 사용감을 제공하면서도 사용자에게 수수료도 부과하지 않는 것이 EOS의 강점입니다.<br/>
                              수수료는 트랜잭션 공격에 대한 방지책으로 있어왔지만 (ex 이더리움) 일반 사용자에게는 부담을 주게 되었습니다.
                              <br/>
                              3. EOS는 블록체인이 철학적으로 추구하는 이상 (완벽한 탈중앙화)를 고집하지 않고 어느정도 현실성 있는 탈중앙화 기반의 서비스, 단체, 집단 등을 창출해내고 있습니다.<br/>
                              이 부분을 높게 살 수 밖에 없는 이유는 EOS의 빠른 실행력입니다. EOS는 블록체인이 추구하는 탈중앙화 시스템의 철학을 지키면서도 지금 시대에 그 가치를 가장 현실성있게 구현시키고 있는 가상화폐입니다.<br/>
                          </div>

                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                              댄 라이머(Daniel Larimer)
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
                                <img src="img/eos_big.png" alt="이오스아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>이오스</strong>
                                  <b class="coin_word">EOS/KRW</b>
                              </li>
                              <li>
                                <span class="price">5,965<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.68</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">40.00</span>
                              </li>
                            </ul>
                          </div>
                          <div class="coin_money_detail">
                              <div id="detail_all">
                                <!-- left_thick_table -->
                                <table class='left_thick_table coinInfo_table'>
                                    <tbody>
                                        <tr>
                                            <th>최초발행</th>
                                            <td>2017년 6월</td>
                                        </tr>
                                        <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>순위</th>
                                            <td>5위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>5.8조원(18.10.01 기준)</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>10초</td>
                                        </tr>
                                        <tr>
                                            <th>합의 프로토콜</th>
                                            <td>DPoS</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>1,000,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴보상량</th>
                                            <td>12.5 EOS</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>미국/중국</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://eos.io/" target="_blank">https://eos.io/</a></td>
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
                              <a href="https://t.co/5eOQfBSwhJ">https://t.co/5eOQfBSwhJ</a>
                              </p>
                              <a href="https://twitter.com/block_one_/status/1075285054232776704?ref_src=twsrc%5Etfw"></a>
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
