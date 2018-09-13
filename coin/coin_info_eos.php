<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>CCE</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/coin_info.css">
    <link rel="stylesheet" href="css/sub_menu.css">
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
                    <div class="content coninInfo_content con_1250">
                        <div class="box coin_select">
                          <!-- 코인선택 영역 -->
                          <div class="coinSelect_area">
                              <dl class="coinSelect">
                                  <dt><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS/KRW</span></dt>
                                  <dd onclick="location.href='coin_info_bitcoin.php'"><a href="#" title="비트코인"><img src="img/bitcoin.png" alt="비트코인"/></a><span>비트코인 BTC/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_bitcoincash.php'"><a href="#" title="비트코인캐시"><img src="img/bitcoincash.png" alt="비트코인캐시"/></a><span>비트코인캐시 BCH/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_ethurium.php'"><a href="#" title="이더리움"><img src="img/eth.png" alt="이더리움"/></a><span>이더리움 ETH/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_ethuriumclassic.php'"><a href="#" title="이더리움클래식"><img src="img/etc.png" alt="이더리움클래식"/></a><span>이더리움클래식 ETC/KRW</span></dd>
                                  <dd><a href="#" title="이오스"><img src="img/eos.png" alt="이오스"/></a><span>이오스 EOS/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_ripple.php'"><a href="#" title="리플"><img src="img/reaple.png" alt="리플"/></a><span>리플 XRP/KRW</span></dd>
                                  <dd onclick="location.href='coin_info_ada.php'"><a href="#" title="에이다"><img src="img/ada.png" alt="에이다"/></a><span>에이다 ADA/KRW</span></dd>
                              </dl>
                          </div>
                        </div>
                      <div class="box coinInfo_area">
                        <h3 class="title">코인정보</h3>
                        <div class="text_area">
                          <div>
                            <h4>코인소개</h4>
                            <p>
                              이오스는 최초로 구현된 가상화폐입니다. 발행 및 유통을 관리하는 중앙권력이나 중간상인 없이, P2P 네트워크 기술을 이용하여 네트워크에 참여하는 사용자들이 주체적으로 화폐를 발행하고 이체내용을 공동으로 관리합니다. 이를 가능하게 한 블록체인 기술을 처음으로 코인에 도입한 것이 바로 비트코인입니다.<br/><br/>
                              비트코인을 사용하는 개인과 사업자의 수는 꾸준히 증가하고 있으며, 여기에는 식당, 아파트, 법률사무소, 온라인 서비스를 비롯한 소매상들이 포함됩니다. 비트코인은 새로운 사회 현상이지만 아주 빠르게 성장하고 있습니다. 이를 바탕으로 가치 증대는 물론, 매일 수백만 달러의 비트코인이 교환되고 있습니다<br/><br/>
                              비트코인은 가상화폐 시장에서 현재 유통시가총액과 코인의 가치가 가장 크고, 거래량 또한 안정적입니다. 이더리움이 빠르게 추격하고 있지만 아직은 가장 견고한 가상화폐라고 볼 수 있습니다.
                            </p>
                          </div>
                          <div>
                            <h4>상용링크</h4>
                            <p>
                              <a href="https://eos.io/" title="공식 웹사이트">공식 웹사이트</a>
                              <a href="" title="지갑 다운">지갑 다운</a>
                              <a href="" title="블록체인 조희">블록체인 조희</a>
                              <a href="" title="소스코드 다운">소스코드 다운</a>
                              <a href="" title="이오스 포럼">이오스 포럼</a>
                              <a href="" title="이오스 채굴">이오스 채굴</a>
                            </p>
                          </div>
                          <div>
                            <h4>코인 특징</h4>
                            <p>
                              1. 중앙주체 없이 사용자들에 의해 거래내용이 관리될 수 있는 비트코인의 운영 시스템은 블록체인 기술에서 기인합니다. 블록체인은 쉽게 말해 다 같이 장부를 공유하고, 항상 서로의 컴퓨터에 있는 장부 파일을 비교함으로써 같은 내용만 인정하는 방식으로 운영됩니다. 따라서 전통적인 금융기관에서 장부에 대한 접근을 튼튼하게 방어하던 것과는 정반대의 작업을 통해 보안을 달성합니다. 장부를 해킹하려면 51%의 장부를 동시에 조작해야 하는데, 이는 사실상 불가능합니다. 왜냐하면, 이를 실행하기 위해서는 컴퓨팅 파워가 어마어마하게 소요되고, 이것이 가능한 슈퍼컴퓨터는 세상에 존재하지 않기 때문입니다. 또한, 장부의 자료들은 줄글로 기록되는 것이 아니라 암호화 해시 함수형태로 블록에 저장되고, 이 블록들은 서로 연결되어 있어서 더 강력한 보안을 제공합니다.<br/><br/>
                              2. 비트코인은 블록발행보상을 채굴자에게 지급하는 방식으로 신규 코인을 발행합니다. 블록발행보상은 매 21만 블록(약 4년)을 기준으로 발행량이 절반으로 줄어듭니다. 처음에는 50비트코인씩 발행이 되었고, 4년마다 계속 반으로 감소하고 있습니다. 코인의 총량이 2,100만 개에 도달하면 신규 발행은 종료되고, 이후에는 거래 수수료만을 통해 시스템이 지탱될 것입니다.
                            </p>
                          </div>
                          <div>
                            <h4>핵심 가치</h4>
                            <p>
                            (키워드: 통화로 사용될 수 있는 보편성 및 편의성)<br/><br/>
                            1. 다양한 알트코인들의 등장에 앞서 비트코인은 가상화폐 시장에서 독보적이었기 때문에, 현재 가장 보편적인 결제수단으로 사용됩니다. 실생활에서 이를 활용할 수 있는 가맹점이 알트코인들보다 압도적으로 많을 뿐만 아니라, 이 또한 증가하고 있습니다. 일례로 일본 업체들이 비트코인 결제 시스템을 도입하면서 곧 비트코인을 오프라인 점포 26만 곳에서 이용할 수 있게 될 것입니다.<br/><br/>
                            2. 여러 나라에서 비트코인을 정식 결제 수단으로 인정하면서, 실물화폐와 가상화폐를 거래할 때 더는 부가가치세가 부과되지 않게 된다고 합니다. 실제로 일본과 호주에서는 이미 비트코인을 합법적 결제 수단으로 인정하면서 제도권 안으로 들여오고 있고, 미국에서는 비트코인 ETF 승인 노력도 진행되고 있습니다. 각국에 비트코인을 기반으로 한 ATM 기계도 설치되었다고 합니다.
                            </p>
                          </div>
                          <div>
                            <h4>개발자 정보</h4>
                            <p>
                              나카모토 사토시(가명)
                            </p>
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
                                <span class="price">7,400,000<b class="won">KRW</b>
                                </span>
                              </li>
                              <li class="coin_prepare">
                                <strong>전일대비</strong>
                                <span class="prepare"><b>+0.31</b>%</span>
                                <span class="updownarrow"><img src="img/arrow_up_red.png" class="ud">23,000</span>
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
                                            <th>시총순위</th>
                                            <td>1위</td>
                                        </tr>
                                        <tr>
                                            <th>시가총액</th>
                                            <td>48.8조원(18.08.27 기준)</td>
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
                                            <td>21,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>채굴봉상량</th>
                                            <td>각 코인 정보 기재</td>
                                        </tr>
                                        <tr>
                                            <th>국가</th>
                                            <td>각 코인 정보 기재</td>
                                        </tr>
                                        <tr>
                                            <th>공식홈페이지</th>
                                            <td><a href="https://eos.io/">https://eos.io/</a></td>
                                        </tr>
                                    </tbody>
                                </table><!-- left_thick_table End-->
                                <p>(정보기준일:2018.08.28)</p>
                              </div>
                         </div><!--coin_money_detail End-->
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
