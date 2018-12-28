<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer_index.css">
    <link rel="stylesheet" href="css/index.css">
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
    <script src="js/stock.js"></script>
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

                  <!-- banner_slide-->
                  <div class="slide">
                    <ul class="panel">
                      <li class="banner1 on"><a href="#" class="a_link">디올스 국제거래소 기술적 보안 백 보러 가기</a></li>
                      <li class="banner2"><a href="prime.php" class="a_link2">디올스 국제거래소 기술적 보안 백 보러 가기</a></li></li>
                      <li class="banner3"></li>
                      <li class="banner4"></li>
                      <li class="banner5"></li>
                      <li class="banner6"></li>
                      <li class="banner7"></li>

                    </ul>
                    <ul class="dot">
                      <li class="on"></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>

                    </ul>
                    <div class="arrow_area">
                      <div class="prev1"><img src="img/arrow_efefef_next.png" alt="이전화살표" /></div>
                      <div class="next1"><img src="img/arrow_efefef_prev.png" alt="다음화살표"/></div>
                    </div>
                  </div><!--banner_slide End-->

                  <!-- bitcoin_card_wrap  -->
                  <div class="bitcoin_card_wrap">
                      <!-- bitcoin_card -->
                      <div class="bitcoin_card">
                          <ul class="bitcoin_card_inner">
                            <!--bitcoin Card-->
                              <li class="card_li">
                                  <p><img src="img/bitcoin.png" alt="비트코인아이콘"></p>
                                  <p>비트코인(BTC)</p>

                                  <ul id="card_01" class="card">
                                    <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />7.5</span>%</p></li>
                                    <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />4.0</span>%</p></li>
                                    <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />5.5</span>%</p></li>
                                  </ul>

                                  <p><span class='up_down_data'>450,000</span>원</p>
                                  <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                  <div class="buy_sell_button">
                                      <a href='exchange_BITCOIN.php' class="buy_button">매수</a><a href='exchange_BITCOIN.php' class="sell_button">매도</a>
                                  </div>

                              </li>
                            <!--bitcoin Card End-->

                            <!--bitcoincash Card-->
                              <li class="card_li">
                                    <p><img src="img/bitcoincash.png" alt="비트코인캐시아이콘"></p>
                                    <p>비트코인캐시(BCH)</p>

                                    <ul id="card_02" class="card">
                                      <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 9.4</span>%</p></li>
                                      <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.7</span>%</p></li>
                                      <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />1.5</span>%</p></li>
                                    </ul>

                                    <p><span class='up_down_data'>70,000</span>원</p>
                                    <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                    <div class="buy_sell_button">
                                        <a href='exchange_BITCOINCASH.php' class="buy_button">매수</a><a href='exchange_BITCOINCASH.php' class="sell_button">매도</a>
                                    </div>
                              </li>
                            <!--bitcoincash Card End-->

                            <!--eth Card-->
                              <li class="card_li">
                                    <p><img src="img/eth.png" alt="이더리움아이콘"></p>
                                    <p>이더리움(ETH)</p>

                                    <ul id="card_03" class="card">
                                      <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 11.5</span>%</p></li>
                                      <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.8</span>%</p></li>
                                      <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />7.5</span>%</p></li>
                                    </ul>

                                    <p><span class='up_down_data'>70,000</span>원</p>
                                    <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                    <div class="buy_sell_button">
                                        <a href='exchange_ETHEREUM.php' class="buy_button">매수</a><a href='exchange_ETHEREUM.php' class="sell_button">매도</a>
                                    </div>
                              </li>
                              <!--eth Card End-->

                              <!--etc Card-->
                                <li class="card_li">
                                      <p><img src="img/etc.png" alt="이더리움클래식아이콘"></p>
                                      <p>이더리움클래식(ETC)</p>

                                      <ul id="card_04" class="card">
                                        <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 5.5</span>%</p></li>
                                        <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />2.2</span>%</p></li>
                                        <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.5</span>%</p></li>
                                      </ul>

                                      <p><span class='up_down_data'>70,000</span>원</p>
                                      <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                      <div class="buy_sell_button">
                                          <a href='exchange_ETHEREUMCLASSIC.php' class="buy_button">매수</a><a href='exchange_ETHEREUMCLASSIC.php' class="sell_button">매도</a>
                                      </div>
                                </li>
                                <!--etc Card End-->

                                <!--EOS Card-->
                                  <li class="card_li">
                                        <p><img src="img/eos.png" alt="이오스아이콘"></p>
                                        <p>이오스(EOS)</p>

                                        <ul id="card_05" class="card">
                                          <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 7.3</span>%</p></li>
                                          <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />3.8</span>%</p></li>
                                          <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 8.3</span>%</p></li>
                                        </ul>

                                        <p><span class='up_down_data'>70,000</span>원</p>
                                        <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                        <div class="buy_sell_button">
                                            <a href='exchange_EOS.php' class="buy_button">매수</a><a href='exchange_EOS.php' class="sell_button">매도</a>
                                        </div>
                                  </li>
                                  <!--EOS Card End-->

                                  <!--리플(XRP) Card-->
                                    <li class="card_li">
                                          <p><img src="img/reaple.png" alt="리플아이콘"/></p>
                                          <p>리플(XRP)</p>

                                          <ul id="card_06" class="card">
                                            <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 9.3</span>%</p></li>
                                            <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 9.9</span>%</p></li>
                                            <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.4</span>%</p></li>
                                          </ul>

                                          <p><span class='up_down_data'>70,000</span>원</p>
                                          <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                          <div class="buy_sell_button">
                                              <a href='exchange_RIPPLE.php' class="buy_button">매수</a><a href='exchange_RIPPLE.php' class="sell_button">매도</a>
                                          </div>
                                    </li>
                                    <!--리플(XRP) Card End-->

                                    <!--에이다(ADA) Card-->
                                      <li class="card_li">
                                            <p><img src="img/ada.png" alt="에이다아이콘" class='coin_ADA'></p>
                                            <p>에이다(ADA)</p>

                                            <ul id="card_07" class="card">
                                              <li><p class='percent_up'><span class='up_down_data'><img src="img/arrow_up_red.png" />7.7</span>%</p></li>
                                              <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.8</span>%</p></li>
                                              <li><p class='percent_down'><span class='up_down_data'><span style=font-size:12px;>▼</span> 10.2</span>%</p></li>
                                            </ul>

                                            <p><span class='up_down_data'>70,000</span>원</p>
                                            <p>거래량 <span class='up_down_data'>260,000원</span></p>
                                            <div class="buy_sell_button">
                                                <a href='exchange_ADA.php' class="buy_button">매수</a><a href='exchange_ADA.php' class="sell_button">매도</a>
                                            </div>
                                      </li>
                                      <!--에이다(ADA) Card End-->
                            </ul>
                        </div>
                        <!-- bitcoin_card End-->

                        <!-- bitcoin_card_btn -->
                        <div class="bitcoin_card_btn">
                            <a href="#" class='prev'><img src="img/arrow_navy_point.png" alt="이전버튼"/></a>
                            <a href="#" class='next'><img src="img/arrow_navy_next_point.png" alt="다음버튼"></a>
                        </div>
                        <!-- bitcoin_card_btn End -->
                    </div>
                    <!-- bitcoin_card_wrap  End-->

                    <!--Notice&use_guide wrap-->
                    <div class="notice_wrap">
                      <div class="notice">
                        <h4>공지사항<a href="notice.php"><img src="img/right-chevron.png" alt="공지사항 화살표"></a></h4>
                        <div class="notice_inner">
                          <ul class="fristline">
                            <li><a href=""><b>[공지] 이더리움 입출금 지연 안내</b><span>2018.07.18</span></a></li>
                            <li><a href=""><b>[공지] The Alls 홈페이지 리뉴얼기념 이벤트</b><span>2018.07.31</span></a></li>
                            <li><a href=""><b>[정보] 2018 하반기 비트코인캐시 상승세 정보뉴스</b><span>2018.08.22</span></a></li>
                          </ul>

                          <ul class="secondline">
                            <li><a href=""><b>[공지] 이오스 입출금 지연 안내</b><span>2018.08.23</span></a></li>
                            <li><a href=""><b>[공지] 휴먼앤에이아이 The Alls와 함께 걷다.</b><span>2018.08.25</span></a></li>
                            <li><a href=""><b>[정보] 비트코인캐시 시장현황</b><span>2018.08.26</span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="use_guide">
                        <ul>
                          <li>
                            <a href="certification.php">
                              <img src="img/security_center.png" alt="인증센터">
                              <p>인증센터</p>
                            </a>
                          </li>
                          <li>
                            <a href="coin_info_bitcoin.php">
                              <img src="img/coin-inform.png" alt="코인정보">
                              <p>코인정보</p>
                            </a>
                          </li>
                          <li>
                            <a href="customer_faq.php">
                                <img src='img/telephone-symbol-button.png' alt='고객지원'>
                                <p>고객지원</p>
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

                    <div class="prime_img">
                      <p onclick="location.href='prime.php'"><img src="img/prime.png" alt="프라임버튼" class="prime_bt"></p>
                    </div>

                </div><!-- main_content End-->
            </div><!-- content_wrap End-->


            <!-- footer_wrap -->
            <?php include "footer.php";?>
            <!-- footer_wrap End-->

            <!--sub_menu-->
            <?php include "sub_menu.php";?>
            <!--sub_menu End-->

        </div><!-- container End -->
    </div><!-- wrap End -->
    <div id="full">
            <!-- full_content -->
            <div id="full_content" class='box'>
                <div class="full_inner">
                    <!-- <h2>암호화폐 거래 안내</h2> -->
                    <h2>알림</h2>
                    <!-- <p>
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
                    <p>암호화폐의 특성을 충분히 숙지하시고 신중하게 거래에 임해주시기 바랍니다.</p> -->
                    <p class='sorry_m sorry_m_01'>빠른 시일 안에 마무리하여 품격있는 서비스를 <br/>제공하겠습니다. 감사합니다.</p>
                    <img src="img/comingsoon.png" alt="comingSoon" class='coming_soon'>
                    <p class='sorry_m sorry_m_02'>디올스국제거래소 연구소일동드림</p>
                    <form class="" action="#" method="post">
                        <input type="checkbox" id='today_close' name='today_close'>
                        <label for='today_close'>오늘 하루 이 창 열지않기</label>
                    </form>
                    <a href="#" class='close_btn'>닫기</a>
                </div>
            </div><!-- full_content End-->

            <div class="con_top box" id="greetings_content">

              <div class="greetings_area">

                  <div class="greetings_inner full_inner">

                    <div class="greetings_story">
                      <h2>인사말</h2>
                      <p><img src="img/greeting_title.png" alt="인사말이미지" class="greetings_img"></p>
                      <p class="gr_title"><img src="img/dodol1.png" alt="따옴표"><span>디올스 국제 거래소</span>를 찾아주신<br/> 여러분들께 진심으로 감사드립니다.<img src="img/dodol2.png" alt="따옴표"></p>
                      <br/>
                      <br/>
                      <div class="greetings_text">
                        <div class="textL">
                          <p class="greeting_S_title">*자체 개발된 디올스 THEALLS기반으로 한 디올스 국제거래소입니다.</p>
                          <br/>
                          <p>4차 산업이라고 하는 블록체인화에 우린 기대성을 많이 하고 있습니다.</p>
                          <br/>
                          <p>하지만 그 기대가치에 비하면 현실은 무척이나 연약한 기반들입니다.</p>
                          <br/>
                          <p>그래서 인류의 기축통화를 만들어 내기 위해 탄생된 디올스 국제거래소입니다.</p>
                          <br/>
                          <p>디올스 국제거래소를 통해 인류가 찾고 있는 차세대 금융을 만들어 낼 것입니다.</p>
                          <br/>
                          <p>타 어느 거래소도 못하는 코인 지갑을 저희는 각 개인의 지갑을 직접 생성해 드리고 지갑을 3가지로 나누어 지급합니다. 한 번의 회원 가입으로 모든 것이 처리 될 뿐만 아니라 코인 거래 시 정전이 되어도 아무런 문제가 없습니다. </p>
                          <br/>
                          <p>저희 거래소를 통해 코인가격이 실시간 가격으로 현금화 되어 직접 사용할 수 있는 거래소입니다. 특히 저희 거래소에 상장되는 모든 코인은 전자상거래(온라인게임,스포츠관람.영화관람.쇼핑몰.기계를 활용한 장치.드론.농수산물원산지표시.블록체인으로 인한 탄소배출권 각 현금결재 시 외 등)결재수단으로 가능합니다.</p>
                          <br/>
                          <p>블록체인으로 전자상거래를 할 수 있는 쇼핑몰과 QR코드를 활용하여 오프라인에서 사용할 수 있는(프랜차이점,면세점,공공기관,백화점외 등) 특별한 거래소입니다.</p>
                          <br/>
                          <p>또한 무분별한 코인들을 등급제도를 만들어 모두 같은 코인이 아니라 실제 사용이 얼마나 되는 것에 따라 디올스 국제거래소에서는 코인등급제도가 가능합니다.</p>
                          <br/>
                          <p>그러므로 인류가 원하면 코인등급제도를 실시할 예정입니다. 디올스 국제거래소에서 등급을 받지 않는 코인은 실생활에서 어려울 것으로 보입니다.<br/>
                          디올스 국제거래소에서는 POS(지분증명방식)과 POI(중요도증명방식)를 적용하여 운영됩니다. 또한 디올스 국제거래소는 개인간 거래 p2p가 가능한 거래소입니다.
                          </p><br/>

                          <br/>
                          <p>따라서 아래와 같이 장,단점을 정리하고 가겠습니다.</p>
                          <br/>
                          <p>그 이유는 여러 가지가 있지만 </p>
                          <br/>
                          <div class="disAdv">
                            <div class="disTxt">
                              <p>"첫 번째" 많은 인류가 허황된 꿈을 가지고 있다는 것입니다.</p>
                              <br/>
                              <p>"두 번째" 기술의 능력이 없음에도 마치 모든 것을 하는 것처럼 잘못된 인식 속에 있다는 사실.</p>
                              <br/>
                              <p>"세 번째" 블록체인이면 뭐든 다 해결 된다는 잘못된 인식이 또 자리잡고 있다는 사실.</p>
                              <br/>
                              <p>"네 번째" 미래의 꿈이 허황된 생각이 가득차 있어 정상적으로 시작 되지 못하고 있다는 사실</p>
                              <br/>
                              <p>"다 섯째" 보안에 너무나 약한 블록체인의 기술이라는 사실.</p>
                              <br/>
                              <p>"여 섯째" 블록체인은 변조가 어렵지 않게 해킹이 가능하다는 사실.</p>
                              <br/>
                            </div>
                            <div class="advTxt">
                              <p><b>그러나, 여기에는</b></p>
                              <br/>

                              <table>

                                  <tr>
                                    <th><img src="img/1.png" alt="첫번째" class="count"></th>
                                    <td><p class="import">현실의 꿈을 이루고 후대에 남겨야 할 우리의 자산이 여기에 있다는 사실.</p></td>
                                  </tr>

                                  <tr>
                                    <th><img src="img/2.png" alt="두번째" class="count"></th>
                                    <td><p class="import">블록체인의 수뇌가 모여 있는 것도 사실.</p></td>
                                  </tr>

                                  <tr>
                                    <th><img src="img/3.png" alt="세번째" class="count"></th>
                                    <td><p class="import import_text">보안이 완벽하여 해킹을 방지할 수 있는 곳도 사실이며, 특히 어느 공공기관 및 사업체의 보안이 필요한 곳은 언제든지 저희 기술력으로 가능합니다.</p></td>
                                  </tr>

                                  <tr>
                                    <th><img src="img/4.png" alt="네번째" class="count"></th>
                                    <td><p class="import">기축통화를 부르짓고 있는 모든 인류의 사람들이 모인 곳도 사실.</p></td>
                                  </tr>

                                  <tr>
                                    <th><img src="img/5.png" alt="다섯번째" class="count"></th>
                                    <td><p class="import import_text">잘못된 코인을 만들어 백서와 오픈소스가 맞지 않아 상장을 못하는 업체에 코인과 백서를 만들어 드립니다.</p></td>
                                  </tr>

                              </table>

                            </div>
                          </div>
                        </div>

                        <div class="textR">
                          <p>하고픈 말들이 너무도 많지만 이곳을 찾아주신 여러분을 생각하면 감회가 깊습니다. 저희 디올스 국제거래소는 세계적으로 기축통화 한 개를 만들어 내기 위해 탄생된 거래소입니다. 이곳에서 인정되는 코인이라면 세계적인 기축통화로 가는데 앞서 갈 것입니다.</p>
                          <br/>
                          <p>그러므로 저희 자료실 등에 비치해 놓은 곳을 잘 습득하시면 왜 디올스 국제거래소가 탄생되었는지 알 수가 있습니다. </p>
                          <br/>
                          <p>따라서 우리 가족회원님들과 함께 한다면 무엇이든 이루어 낼 수가 있을 것입니다.</p>
                          <br/>
                          <p>세계 인류 하 나의 기축통화 코인을 위해 디올스 국제거래소는 노력 할 것입니다. 모두가 행복하시길 기원합니다.</p>
                          <br/>
                          <p class="right">주) 디올스 회장 최 기 재외 임직원 일동</p>
                          <br/>
                          <a href="www.thealls.net" class="right" style="color:#333">www.thealls.net , 디올스.net</a>
                        </div>

                      <p class="right_sign"><img src="img/companysign.png" alt="회사사인" class="greetings_sign"></p>

                      </div>

                    </div>


                  </div>
              </div><!--coinInfo_area End-->

              <div class="close_box">
                <form class="" action="#" method="post">
                    <input type="checkbox" id='today_close2' name='today_close'>
                    <label for='today_close2'>오늘 하루 이 창 열지않기</label>
                </form>

                <a href="#" class='close_btn'>닫기</a>
              </div>

            </div><!-- coninInfo_content End-->
            <div id="index_shadow"></div>
    </div>  <!-- full End-->



 <!-- app -->

 <!-- app_wrap -->
 <div id="app_wrap">
     <!-- app_container -->
     <div id="app_container">


         <!-- content_wrap -->
         <div class="content_wrap">
             <!-- common_table_wrap -->
             <div class="content common_table_wrap con_640">

               <!-- app_page_content -->
               <div class="box app_main_content">

                   <div class="app_main_step1">
                     <div class="logo_area">
                       <p><img src="img/logo.png" alt="메인로고"></p>
                       <span>The best crytocurrency exchange</span>
                     </div>

                     <div class="phone_area">

                       <p class="phone_main"><img src="img/phone_main.png" alt="phone_main" ></p>
                       <p class="coin_img"><img src="img/coin_main.png" alt="코인이미지" ></p>
                       <input type="button" name="Android 앱 다운버튼" value="Android 앱 다운로드" class="android_down">
                       <input type="button" name="iOS 앱 다운버튼" value="iOS 앱 다운로드" class="ios_down">
                       <input type="button" name="app다운버튼" value="거래소 둘러보기" onclick="location.href='exchange_BITCOIN.php'" class="app_exchange_bt">

                     </div>
                   </div>

                   <div class="app_main_step2">

                     <!-- banner_slide-->
                     <div class="app_slide">
                       <ul class="app_panel">
                         <li class="app_banner1 on"></li>
                         <li class="app_banner2"><a href="prime.php" class="app_prime_bt"></a></li>
                         <li class="app_banner3"></li>
                         <li class="app_banner4"></li>
                         <li class="app_banner5"></li>
                         <li class="app_banner6"></li>

                       </ul>
                       <ul class="app_dot">
                         <li class="app_on on"></li>
                         <li></li>
                         <li></li>
                         <li></li>
                         <li></li>
                         <li></li>

                       </ul>
                       <div class="app_prev1"><img src="img/arrow_efefef_next.png" alt="이전화살표" /></div>
                       <div class="app_next1"><img src="img/arrow_efefef_prev.png" alt="다음화살표"/></div>
                     </div><!--banner_slide End-->

                   </div>

                   <div class="app_main_step3">
                     <div class="security_area">
                       <p><img src="img/m_security.png" alt="보안이미지"></p>
                     </div>
                   </div>


               </div><!-- app_page_content End-->

             </div><!-- common_table_wrap End-->
         </div><!-- content_wrap End-->

         <!-- footer_wrap -->
         <?php include "footer.php";?>
         <!-- footer_wrap End-->

         <!--sub_menu-->
         <?php include "sub_menu.php";?>
         <!--sub_menu End-->

     </div><!-- app_container End -->
 </div><!-- app_wrap End -->


</body>
</html>
