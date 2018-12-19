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
                                  <dt><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH</span></dd>
                                  <dd><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC</span></dd>
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
                              이더리움클래식은 이더리움의 하드포크로 인해 생성된 다른 블록체인에 기초한 가상화폐입니다. 하드포크란 인위적으로 블록체인을 분절하는 작업을 의미하는데, 이더리움클래식의 하드포크는 2016년 7월 20일에 단행되었습니다.<br/>
                              <br/>
                              이는 2016년 6월 어떤 사람 혹은 사람들이 이더리움 플랫폼에 기반을 둔 주요 프로젝트 중 하나인 다오(DAO) 시스템상의 코드 오류를 이용해 부당이득을 취한 사건에서 시작합니다. 이더리움 개발팀은 잘못된 거래기록을 무효화시켜 투자자들에게 돈을 다시 돌려주기 위해 체인을 오류 이전 상태로 되돌려 새로운 체인을 만들어 나가기로 했습니다.<br/>
                              <br/>
                              그러면 기존에 해킹당한 체인은 소멸해야 하는데, 하드포크에 반대하던 약 10%의 사람들이 업데이트하지 않고 잔류하며 블록을 생성했고 이것이 이더리움 클래식의 블록체인이 된 것입니다. 즉, 도난된 이더리움이 포함된 원래의 블록체인이 이더리움 클래식이라는 다른 블록체인이자 코인으로 정착한 것입니다.
                            </p>
                          </div>
                          <div>
                            <h4>[ 상용링크 ]</h4>
                            <p>
                              <a href="https://ethereumclassic.github.io/" target="_blank" title="공식 웹사이트">공식 웹사이트</a>
                              <a href="https://ethereumclassic.github.io/" target="_blank" title="지갑 다운">지갑 다운</a>
                              <a href="http://gastracker.io/" target="_blank" title="블록체인 조희">블록체인 조회</a>
                              <a href="https://github.com/ethereumclassic" target="_blank" title="소스코드 다운">소스코드 다운</a>
                              <a href="https://www.reddit.com/r/EthereumClassic" target="_blank" title="이더리움클래식 포럼" id="ethuriumclassic_a_link" class='ethuriumclassic_a_link'>이더리움클래식 포럼</a>
                              <a href="https://ethereumclassic.github.io/" target="_blank" title="이더리움클래식 채굴" id="ethuriumclassic_a_link" class='ethuriumclassic_a_link'>이더리움클래식 채굴</a>
                            </p>
                          </div>
                          <div>
                            <h4>[ 코인 특징 ]</h4>
                            <p>
                              1. "코드는 법이다(Code is law)"라는 신념 하에 블록체인의 중심가치인 "불변성"을 최우선으로 중시합니다. 불변성이란 유효한 거래라면 지워지거나 잊히면 안 된다는 것을 의미하고, 이들이 이더리움 DAO 사태 이후 하드포크 하지 않고 기존 체인에 잔류한 이유 중 가장 큰 부분을 차지합니다.<br/>
                              </br>
                              2. 이더리움 클래식은 이더리움의 기존 인플레이션 정책(무제한 발행)에서 비트코인과 같은 고정 공급방식으로 통화발행정책을 변경했습니다. 그래서 최대 발행량이 2.3억 개로 제한되어있고, 총 공급은 약 2.1억 개가 될 것으로 예상합니다. 채굴 보상은 500만 블록마다 20%씩 감소합니다.<br/>




                            </p>
                          </div>
                          <div>
                            <h4>[ 핵심 가치 ]</h4>
                            <p>
                              이더리움 클래식은 포크되지 않은 기존의 블록체인을 유지한 것이기 때문에 사용하는 프로토콜이나 기술들은 이더리움과 동일합니다. 따라서 이더리움 플랫폼의 핵심인 스마트 컨트랙트와 플랫폼 위에 탈중앙화 앱(DAPP)을 개발할 수 있는 기술은 이더리움 클래식 플랫폼에서도 똑같이 적용됩니다.<br/>
                              현재 이더리움 클래식 플랫폼 위에서 운영되는 코인은 Corion platform(COR), ETCWin(ETC), GeoFunders(GUNS) 등이 있습니다.<br/>
                          </div>
                          <div>
                            <h4>[ 개발자 정보 ]</h4>
                            <p>
                              찰스 호스킨스(Charles Hoskins), 이고 알타모노프(lgor Artam onov), 게빈 우드(Gavin Woo)
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
                                <img src="img/etc_big.png" alt="이더리움클래식아이콘" class="bitcoin_icon">
                            </div>
                            <ul class='ethriumclassic_ul'>
                              <li>
                                  <strong>이더리움클래식</strong>
                                  <b class="coin_word">ETC/KRW</b>
                              </li>
                              <li>
                                <span class="price">10,190<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>-0.20</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_down_blue.png" class="ud">20.00</span>
                              </li>
                            </ul>
                          </div>
                          <div class="coin_money_detail">
                              <div id="detail_all">
                                <!-- left_thick_table -->
                                <table class='left_thick_table coinInfo_table ethriumclassic_table'>
                                    <tbody>
                                        <tr>
                                            <th>최초발행</th>
                                            <td>2016년 7월</td>
                                        </tr>
                                        <tr>
                                            <th>코인/토큰</th>
                                            <td>코인</td>
                                        </tr>
                                        <tr>
                                            <th>순위</th>
                                            <td>15위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>1.3조원(18.10.01 기준)</td>
                                        </tr>
                                        <tr>
                                            <th>블록생성기</th>
                                            <td>15초</td>
                                        </tr>
                                        <tr>
                                            <th>유통량</th>
                                            <td>101,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>총발행한도</th>
                                            <td>21,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴보상량</th>
                                            <td>현재 약 5 ETC</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>스위스</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://ethereumclassic.github.io/" target="_blank">https://ethereumclassic.github.io/</a></td>
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
                              <a href="https://twitter.com/search?q=%24ETC&amp;src=ctag&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/decentralization?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/EthereumClassic?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://twitter.com/hashtag/ClassicIsComing?src=hash&amp;ref_src=twsrc%5Etfw"></a>
                              <a href="https://t.co/I4C6gXdcXw">https://t.co/I4C6gXdcXw</a></p>
                              <a href="https://twitter.com/eth_classic/status/1074664259257335809?ref_src=twsrc%5Etfw"></a>
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
