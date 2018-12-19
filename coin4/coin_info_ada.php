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
                                  <dt><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
                                  <dd onclick="location.href='coin_info_ethuriumclassic.php'"><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dd>
                                  <dd onclick="location.href='coin_info_eos.php'"><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS</span></dd>
                                  <dd onclick="location.href='coin_info_ripple.php'"><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP</span></dd>
                                  <dd><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA</span></dd>
                              </dl>
                          </div>
                        </div>
                      <div class="box coinInfo_area">
                        <h3 class="title">코인정보</h3>
                        <div class="text_area">
                          <div>
                            <h4>[ 코인소개 ]</h4>
                            <p>
                                에이다 코인은 기존 암호화폐들의 장점은 흡수하고 이더리움의 단점을 보완한 탈중앙화 스마트 컨트랙트 플랫폼 코인입니다. 해외에서는 에이다 코인을 흔히 이더리움 킬러라고도 많이 부릅니다. 그 이유는 이더리움을 처음으로 개발했던 개발자중 한명인 Charles Hoskinson이 에이다 코인을 만들었기 때문에 사람들은 그가 이더리움을 개발할때 얻은 지식과 경험들로 더 좋은 플랫폼을 만들 수 있다는 기대로 이더리움 킬러라고 부르고 있습니다.<br><br>
                                에이다는 POS채굴 방식으로 초당 거래량이 다른 코인들보다 더 많고 훨씬 더 안전한 거래를 할 수 있는 장점이 있습니다. 이외에도 에이다 코인은 많은 기능과 확실한 목표를 가지고 있기 때문에 전 세계적으로 뜨거운 관심을 받고 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://www.cardano.org/en/home/" title="공식 웹사이트" target="_blank">공식 웹사이트</a>
                              <!-- <a href="" title="지갑 다운">지갑 다운</a> -->
                              <a href="https://cardanoexplorer.com/" title="블록체인 조회" target="_blank">블록체인 조회</a>
                              <!-- <a href="" title="소스코드 다운">소스코드 다운</a> -->
                              <a href="https://www.cardano.org/en/academic-papers/" title="백서" target="_blank">백서</a>
                              <a href="https://twitter.com/CardanoStiftung" title="공식 트위터" target="_blank">공식 트위터</a>
                              <!-- <a href="" title="에이다 채굴">에이다 채굴</a> -->
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                                1. 에이다는 프로그래밍 언어 중 가장 난해하면서도 높은 안정성으로 평가받고있는 함수형 언어인 하스켈(Haskel)로 구축되었습니다. 하스켈로 구축된 프로그램은 앞으로 5년후 나올것이라는 양자컴퓨터의 등장에도 해킹에 안전할 수 있는 언어입니다.<br><br>
                                2. 에이다는 Cardano Settle Layer (CSL) 그리고 Cardano Computation Layer (CCL)이라는 두 개의 Layer를 가지고 있습니다. 이러한 구조는 에이다 자체적인 소프트웨어 업그레이드를 좀 더 쉽게 할 수 있는 장점을 가지고 있습니다.<br><br>
                                3. 1세대 블록체인인 비트코인은 화폐로서 기능에만 충실한 코인이며, 여기에 계약서 작성 등의 추가적인 기능을 더한 것이 2세대인 이더리움입니다. 에이다는 여기서 한 발 더 나아가 헌법을 정하여 해당 틀 안에서 변화를 인정하는 수단을 가능하게 했습니다.
                            </p>
                          </div>
                          <!-- <div>
                            <h4>핵심 가치</h4>
                            <p>
                            (키워드: 통화로 사용될 수 있는 보편성 및 편의성)<br/><br/>
                            1. 다양한 알트코인들의 등장에 앞서 비트코인은 가상화폐 시장에서 독보적이었기 때문에, 현재 가장 보편적인 결제수단으로 사용됩니다. 실생활에서 이를 활용할 수 있는 가맹점이 알트코인들보다 압도적으로 많을 뿐만 아니라, 이 또한 증가하고 있습니다. 일례로 일본 업체들이 비트코인 결제 시스템을 도입하면서 곧 비트코인을 오프라인 점포 26만 곳에서 이용할 수 있게 될 것입니다.<br/><br/>
                            2. 여러 나라에서 비트코인을 정식 결제 수단으로 인정하면서, 실물화폐와 가상화폐를 거래할 때 더는 부가가치세가 부과되지 않게 된다고 합니다. 실제로 일본과 호주에서는 이미 비트코인을 합법적 결제 수단으로 인정하면서 제도권 안으로 들여오고 있고, 미국에서는 비트코인 ETF 승인 노력도 진행되고 있습니다. 각국에 비트코인을 기반으로 한 ATM 기계도 설치되었다고 합니다.
                            </p>
                          </div> -->
                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                              찰스 호스킨슨(Charles Hoskinson)
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
                                <img src="img/ada_big.png" alt="에이다아이콘" class="bitcoin_icon">
                            </div>
                            <ul>
                              <li>
                                  <strong>에이다</strong>
                                  <b class="coin_word">ADA/KRW</b>
                              </li>
                              <li>
                                <span class="price">79.90<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.12</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">0.10</span>
                              </li>
                            </ul>
                          </div>
                          <div class="coin_money_detail">
                              <div id="detail_all">
                                <!-- left_thick_table -->
                                <table class='left_thick_table coinInfo_table ada_table'>
                                    <tbody>
                                        <tr>
                                            <th>최초발행</th>
                                            <td>2017년 10월</td>
                                        </tr>
                                         <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>시총순위</th>
                                            <td>10위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>2.5조원</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>10분</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>각 코인정보기재</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>45,000,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴봉상량</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>스위스</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://www.cardano.org/home/" target="_blank">https://www.cardano.org/home/</a></td>
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
                              <a href="https://twitter.com/hashtag/cryptocurrency?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/Cardano_?ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/ADAcoin_?ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/TryW9mAJBq">https://t.co/TryW9mAJBq</a>
                              <a href="https://twitter.com/hashtag/ADA?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/search?q=%24ADA&amp;src=ctag&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/Cardano?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/CryptoNews?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/BlockchainNews?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/blockchainLand?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/etfDFbbjR5"></a>
                              </p>
                              <a href="https://twitter.com/LandBlockchain/status/1073608945707696130?ref_src=twsrc%5Etfw"></a>
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
