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
                                  <dt><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
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
                              이더리움(Ethereum)은 단순한 암호화폐의 기능을 넘어 스마트계약(Smart Contract) 기능을 추가하고 블록체인 기반의 분산애플리케이션 ‘댑스'(DApps)를 구축하는 목적으로 만들어진 개방형 블록체인 플랫폼입니다.<br/>
                              <br/>
                              비트코인은 복잡한 논리를 표현하는데 제한이 있지만, 이더리움은 복잡한 연산과정도 구현가능한 튜링완전성 (Turing Completeness : 어떤 프로그래밍 언어나 추상기계가 튜링기계와 동일한 계산능력을 갖는다는 의미) 언어를 제공 합니다.<br/>
                              비트코인과 같이 누구도 이더리움을 조정하거나 소유하지 않고 전세계의 많은 사람들이 함께 참여하여 만든 오픈소스 프로젝트로서 이더리움 플랫폼에서는 새로운 애플리케이션을 쉽게 생성할 수 있으며, 홈스티드 출시 (Homestead release)를 통해 누구든지 이러한 애플리케이션을 안전하게 사용할 수 있습니다.<br/>
                              <br/>
                              플랫폼은 3자가 제공하는 중간거래 인터넷을 대체하여 피어투피어(Peer to Peer)로 분산된 데이터를 저장하고 저당권을 옮기고 복잡한 금융수단을 추적하는 시스템으로서 글로벌 네트워크를 통해 사용자들간에 직접적인 거래도 가능하도록 합니다.<br/>
                              <br/>
                              이더리움은 소프트웨어 개발자가 게임, 금융 응용프로그램, 도박용 응용프로그램, 유틸리티, 물류 소프트웨어, 소셜 네트워크, 등 우리가 이미 사용하고 있는 거의 모든 것을 구축할 수 있는 매우 광범위한 프로그래밍을 올릴수 있는 플랫폼입니다.
                              많은 사람들이 이더리움을 “웹 3″에 대한 다음 단계의 웹으로 불리며 오늘날의 인터넷 환경과 다른 점은 다양한 회사, 정부, 개인을 포함한 인터넷의 다양한 구성요소와 실행중인 기계와 저장된 데이터를 소유하고 있습니다.<br/>
                              반대로 이더리움은 분권화된 블록체인 시스템으로서 응용프로그램을 만드는데 사용되는 모든 정보를 보유한 중앙에 집중된 권한이 없음을 의미합니다.<br/>
                              전세계에 컴퓨터 네트워크에 연결된 개별 컴퓨터는 서로의 작업을 확인하고 누구나 프로그램을 실행할 수 있으며 사용자는 사용하는 것에 대한 지불을 할 수 있습니다. 이것이 이더리움 플랫폼이 작동되는 방식입니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://www.ethereum.org/" target="_blank" title="공식 웹사이트">공식 웹사이트</a>
                              <a href="https://github.com/ethereum/wiki/wiki/White-Paper" target="_blank" title="백서" id="bakseo">백서</a>
                              <a href="https://www.ethereum.org/cli" target="_blank" title="지갑 다운">지갑 다운</a>
                              <a href="https://www.etherchain.org/" target="_blank" title="블록체인 조희">블록체인 조회</a>
                              <a href="https://github.com/ethereum/" target="_blank" title="소스코드 다운">소스코드 다운</a>
                              <a href="https://forum.ethereum.org/" target="_blank" title="이더리움 포럼">이더리움 포럼</a>
                              <a href="https://www.ethereum.org/" target="_blank" title="이더리움 채굴" class='ethereum_mining'>이더리움 채굴</a>
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                              이더리움은 C++,자바,파이썬등 주로 사용하는 프로그래밍 언어를 지원하여 모든 형태의 거래를 프로그래밍이 가능하게끔 설계되어있습니다다. 이더리움의 목적은 분산 어플리케이션 제작을 위한 대체 프로토콜을 만드는 것입니다.</br>
                              대규모 분산 어플리케이션에 유용할 것이라 생각되는 다른 종류의 제작기법을 제공하며, 빠른 개발 시간, 작고 드물게 사용되는 어플리케이션을 위한 보안, 다른 어플리케이션과의 효율적인 상호작용이 중요한 상황에 특히 주안점을 두고 있습니다.</br>
                              <br/>
                              이더리움의 큰 장점은 비트코인과 같이 빠르고 안전한 거래가 된다는 것이며 이와 같은 장점은 다른 가상화폐에서도 통용되고 있습니다. 또한 이더리움은 매우 큰 단순함을 가지고 있어 약간의 프로그래밍에 대한 이해와 지식이 있다면 얼마든지 활용할 수 있다는 점입니다.</br>
                              위에 서술했듯이 이더리움은  C++,자바,파이썬등 주로 사용하는 프로그래밍 언어를 지원한다는 것입니다. 프로그래머라면 익숙한 언어를 사용하여 어떤 프로토콜이라도 생성이 가능하다는 점이 있습니다.

                            </p>
                          </div>

                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                              비탈리크 부테린(Vitalik Buterin)
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
                                <img src="img/eth_big.png" alt="이더리움아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>이더리움</strong>
                                  <b class="coin_word">ETH/KRW</b>
                              </li>
                              <li>
                                <span class="price">224,500<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.22</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">500</span>
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
                                            <td>2015년 7월</td>
                                        </tr>
                                        <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>순위</th>
                                            <td>2위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>21.7조원(18.10.01 기준)</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>약12초</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>90,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>제한없음</td>
                                        </tr>
                                        <tr>
                                            <th>채굴보상량</th>
                                            <td>5 ETH</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>스위스</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://www.ethereum.org/" target="_blank">https://www.ethereum.org/</a></td>
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
                              <a href="https://twitter.com/hashtag/ethereum?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/grants?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/Xw39mmIX93">https://t.co/Xw39mmIX93</a>
                              <a href="https://t.co/gu0csjFlNk"></a>
                              </p>
                              <a href="https://twitter.com/ethereum/status/1051886425753436166?ref_src=twsrc%5Etfw"></a>
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
