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
                                  <dt><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dt>
                                  <dd><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
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
                                비트코인(bitcoin)은 블록체인 기술을 기반으로 만들어진 최초의 암호화폐입니다. 2008년 10월 사토시 나카모토라는 가명을 쓰는 프로그래머가 개발하여, 2009년 1월 프로그램 소스를 배포했습니다. 중앙은행 없이 전 세계적 범위에서 P2P 방식으로 개인들 간의 자유로운 금융거래를 할 수 있도록 설계되었습니다.
                                거래장부는 블록체인 기술을 바탕으로 전 세계적인 범위에서 여러 사용자들의 서버에 분산하여 저장하기 때문에 해킹이 사실상 불가능합니다.<br><br>
                                비트코인은 가상화폐 시장에서 가장 가치가 큰 화폐이며, 거래량 또한 안정적인 장점을 지니고 있습니다. 비트코인을 사용하는 개인과 사업자 수는 꾸준히 증가하고 있고 현재 아파트, 식당, 온라인 서비스 등 다양한 곳에서 쓰이고 있습니다. 가상화폐는 경제학적인 의미에서 새로운 현상이라고 여겨지지만 그 중 비트코인은
                                아주 빠르게 성장하고 있으며 가상화폐들 사이에서 가장 견고하다고 평가받고 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://bitcoin.org/ko/" target="_blank" title="공식 웹사이트">공식 웹사이트</a>
                              <a href="https://bitcoin.org/bitcoin.pdf" target="_blank" title="백서">백서</a>
                              <a href="https://bitcoin.org/en/download" target="_blank" title="지갑 다운">지갑 다운</a>
                              <a href="https://www.blockchain.com/explorer" target="_blank" title="블록체인 조희">블록체인 조회</a>
                              <a href="https://github.com/bitcoin/bitcoin" target="_blank" title="소스코드 다운">소스코드 다운</a>
                              <a href="https://bitcointalk.org/" target="_blank" title="비트코인 포럼">비트코인 포럼</a>
                              <a href="https://en.bitcoin.it/wiki/Comparison_of_mining_pools" target="_blank" title="비트코인 채굴" class='bitcoin_mining'>비트코인 채굴</a>
                              <a href="https://twitter.com/bitcoin" target="_blank" title="공식 트위터" class='bitcoin_twitter' >공식 트위터</a>
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                                1. 비트코인은 이중지불의 문제를 해결하기 위해서 다양한 분산 시스템이 제안되었습니다. 그 중, 2009년 사토시 나카모토에 의해 제안되었고 비트코인에 적용된 블록체인과 작업증명이라는 개념이 최초로 이중 지불 문제를 해결했습니다.<br><br>
                                2. 임의 길이의 데이터를 고정된 길이의 데이터로 압축하는 해시함수를 사용했습니다. 입력값이 조금만 달라져도 출력값이 완전히 달라지며, 주어진 출력값에 대해 그 값을 생성하는 입력값을 찾는 것이 계산상 매우 어렵습니다.<br><br>
                                3. 비트코인은 블록체인 기술로 만들어진 최초의 화폐입니다. 블록체인이란, 각각의 블록이 사슬처럼 연결되어 있는 형태이며 블록헤더와 거래기록을 각각의 블록들이 포함하고 있습니다. 블록헤더에 이전 블록 해시값이 등록되어 있기 때문에 위조나 변조가 불가능합니다.

                            </p>
                          </div>
                          <div>
                            <h4>[ 핵심 가치 ]</h4>
                            <p>
                            1. 다양한 가상화폐들이 등장하는 현상황에서 비트코인은 최초 가상화폐라는 높은 가치를 지니고 있습니다. 이는 안정적이며 보편적이라는 의미를 지니고 있고 실제로 실생활에서 이를 활용할 수 있는 가맹점이 여타 가상화폐들보다 압도적으로 많습니다.<br/><br/>
                            2. 여러 나라에서 비트코인을 정식 결제 수단으로 인정하면서, 실물화폐와 가상화폐를 거래할 때 더이상 부가가치세가 청구되지 않게 된다고 합니다. 이러한 이유로 실제 일본과 호주에서는 이미 비트코인을 합법적 결제 수단으로 인정하고 있고, 미국에서는 비트코인 ETF 승인 노력도 진행되고 있습니다.
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
                                <img src="img/bitcoin_big.png" alt="비트코인아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>비트코인</strong>
                                  <b class="coin_word">BTC/KRW</b>
                              </li>
                              <li>
                                <span class="price">7,400,000<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.31</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">23,000</span>
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
                                            <th>블록생성기</th>
                                            <td>10분</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>16,956,512</td>
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
                                            <th>국가</th>
                                            <td>미국</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://bitcoin.org/ko/" target="_blank">https://bitcoin.org/ko/</a></td>
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
                              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">
                               <a href="https://t.co/rQv0qIiBfn"></a></p>
                               <a href="https://twitter.com/Bitcoin/status/1001306047926095873?ref_src=twsrc%5Etfw"></a></blockquote>
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
