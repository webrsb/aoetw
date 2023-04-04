<template>
  <div>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Aoetw</h1>
        <p>世紀帝國II疑難雜症專區</p>
      </div>
    </div>
    <div class="container">
      <div class="spw">
        <em
          ><img
            src="~assets/Prithviicon.png"
            width="50px;"
            alt=""
            style="margin-right:20px;"
          />什麼？這邊沒有你要問的問題？ 請到<nuxt-link to="/talk"
            >討論區</nuxt-link
          >發問！</em
        >
      </div>
      <p>
        <span class="small">
          由於2019 《世紀帝國II：決定版》發布，2013 發行的《世紀帝國II：HD》在
          Steam 商店的遊戲名稱由
          <span class="badge badge-secondary text-wrap" style="width: 6rem;"
            >Age of Empires II: HD</span
          >
          改為
          <span class="badge badge-secondary text-wrap" style="width: 7rem;"
            >Age of Empires II (2013)</span
          >
          以下統稱為《世紀帝國II (2013)》
        </span>
      </p>
      <h3>1.系統相關-購買前</h3>
      <div class="row">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-1 class="m-1" variant="primary"
            >1-1.世紀帝國II目前到底有幾個資料片？</b-btn
          >
          <b-collapse id="a-1">
            <div class="well">
              <table class="table-bordered table">
                <tbody>
                  <tr>
                    <th>資料片名稱</th>
                    <th>發布日期</th>
                    <th>新增文明</th>
                  </tr>
                </tbody>
                <tbody class="table-info">
                  <tr>
                    <td>
                      《<nuxt-link
                        to="/games/aoc"
                        title="世紀帝國II：征服者入侵"
                        >世紀帝國II：征服者入侵</nuxt-link
                      >》
                    </td>
                    <td>2000年8月24日</td>
                    <td>
                      <nuxt-link to="/civs/Spanish" title="西班牙帝國"
                        >西班牙</nuxt-link
                      >，<nuxt-link
                        to="/civs/Aztecs"
                        class="mw-redirect"
                        title="阿茲特克"
                        >阿茲特克</nuxt-link
                      >，<nuxt-link
                        to="/civs/Mayans"
                        class="mw-redirect"
                        title="馬雅文明"
                        >馬雅</nuxt-link
                      >，<nuxt-link to="/civs/Huns" title="匈人">匈人</nuxt-link
                      >，<nuxt-link to="/civs/Koreans" title="李氏朝鮮"
                        >朝鮮</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      《<nuxt-link
                        to="/games/aof"
                        title="世紀帝國II：失落的帝國"
                        >世紀帝國II：失落的帝國</nuxt-link
                      >》
                    </td>
                    <td>2013年11月7日</td>
                    <td>
                      <nuxt-link
                        to="/civs/Indians"
                        class="mw-redirect"
                        title="印度歷史"
                        >印度</nuxt-link
                      >，<nuxt-link to="/civs/Italians" title="義大利歷史"
                        >義大利</nuxt-link
                      >，<nuxt-link
                        to="/civs/Incas"
                        class="mw-redirect"
                        title="印加"
                        >印加</nuxt-link
                      >，<nuxt-link to="/civs/Magyars" title="匈牙利歷史"
                        >馬扎爾</nuxt-link
                      >，<nuxt-link
                        to="/civs/Slavs"
                        class="mw-redirect"
                        title="斯拉夫"
                        >斯拉夫</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      《<nuxt-link to="/games/ak" title="世紀世紀II：非洲王國"
                        >世紀帝國II：非洲王國</nuxt-link
                      >》
                    </td>
                    <td>2015年11月5日</td>
                    <td>
                      <nuxt-link
                        to="/civs/Berbers"
                        class="mw-redirect"
                        title="柏柏"
                        >柏柏</nuxt-link
                      >，<nuxt-link
                        to="/civs/Malians"
                        class="mw-redirect"
                        title="馬利"
                        >馬利</nuxt-link
                      >，<nuxt-link
                        to="/civs/Ethiopians"
                        class="mw-redirect"
                        title="衣索比亞"
                        >衣索比亞</nuxt-link
                      >，<nuxt-link to="/civs/Portuguese" title="葡萄牙帝國"
                        >葡萄牙</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      《<nuxt-link to="/games/aor"
                        >世紀帝國II：王者崛起</nuxt-link
                      >》
                    </td>
                    <td>2016年12月20日</td>
                    <td>
                      <nuxt-link
                        to="/civs/Burmese"
                        class="mw-redirect"
                        title="緬甸"
                        >緬甸</nuxt-link
                      >，<nuxt-link to="/civs/Vietnamese" title="越南"
                        >越南</nuxt-link
                      >，<nuxt-link
                        to="/civs/Khmer"
                        class="mw-disambig"
                        title="高棉"
                        >高棉</nuxt-link
                      >，<nuxt-link
                        to="/civs/Malay"
                        class="mw-disambig"
                        title="馬來"
                        >馬來</nuxt-link
                      >
                    </td>
                  </tr>
                </tbody>
                <tbody class="table-danger">
                  <tr>
                    <td>
                      《<nuxt-link to="/games/de">
                        世紀帝國II：決定版 </nuxt-link
                      >》
                    </td>
                    <td>2019年11月15日</td>
                    <td>
                      <nuxt-link
                        to="/civs/Bulgarians"
                        class="mw-redirect"
                        title="保加利亞"
                        >保加利亞</nuxt-link
                      >，<nuxt-link to="/civs/Lithuanians" title="立陶宛"
                        >立陶宛</nuxt-link
                      >，<nuxt-link
                        to="/civs/Cumans"
                        class="mw-disambig"
                        title="庫曼"
                        >庫曼</nuxt-link
                      >，<nuxt-link
                        to="/civs/Tatars"
                        class="mw-disambig"
                        title="韃靼"
                        >韃靼</nuxt-link
                      >
                    </td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td colspan="4">
                      注意：《世紀帝國II：決定版》為獨立資料片，包含《世紀帝國II
                      (2013)》所有的文明，且不能互相進行連線
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-2 class="m-1" variant="primary"
            >1-2.世紀帝國II要如何購買？</b-btn
          >
          <b-collapse id="a-2">
            <div class="well">
              <p>
                目前有《世紀帝國II：決定版》和《世紀帝國II (2013)》兩種，都是在
                Steam 以信用卡購買：
              </p>

              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>
              <p>
                Q1:
                是否已擁有《世紀帝國一代：決定版》或想一起購買《世紀帝國一代：決定版》?<br />

                <span class="badge badge-success">是</span>:
                <a
                  href=" https://store.steampowered.com/bundle/11831/"
                  target="_blank"
                  >(內含《世紀帝國一代：決定版》& 《世紀帝國II：決定版》,
                  若已擁有其中一項會自動扣除)</a
                ><br />

                <span class="badge badge-warning">否</span>:接Q2
              </p>
              <p>
                Q2: 是否已擁有《世紀帝國II (2013)》或想一起購買《世紀帝國II
                (2013)》?<br />

                <span class="badge badge-success">是</span>:
                <a
                  href="https://store.steampowered.com/bundle/11830/"
                  target="_blank"
                  >內含《世紀帝國II (2013)》 &
                  《世紀帝國II：決定版》(若已擁有其中一項會自動扣除)</a
                >
                <br />
                <span class="badge badge-warning">否</span>:接Q3
              </p>
              <p>
                Q3: 我只想購買決定版就好<br />
                <span class="badge badge-success">是</span>:
                <a
                  href="https://store.steampowered.com/app/813780"
                  target="_blank"
                  >直接到Steam商店購買決定版</a
                >。
              </p>

              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>
              <p>
                <a
                  href="http://store.steampowered.com/app/221380/"
                  target="_blank"
                  >HD主程式 (舊版帝王+征服者) 原價468</a
                >
              </p>
              <p>
                <a
                  href="http://store.steampowered.com/bundle/2149/"
                  target="_blank"
                  >世紀帝國IIHD全集HD+3個資料片 組合包價格1040</a
                >
              </p>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-3 class="m-1" variant="primary"
            >1-3.沒有信用卡怎麼購買？怎麼用超商付款</b-btn
          >
          <b-collapse id="a-3">
            <div class="well">
              可以使用Steam點數卡購買，使用超商繳費，連結如下
              <p><a href="https://cdkey.com.tw" target="_blank">閃電發卡</a></p>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-4 class="m-1" variant="primary"
            >1-4.要買哪個版本？要把所有資料片一起買下，版本才不會有問題?</b-btn
          >
          <b-collapse id="a-4">
            <div class="well">
              新玩家建議直接購買 《世紀帝國II：決定版》，包含了《世紀帝國II
              (2013)》所有的資料片，因此不需另外購買DLC會比較便宜。
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>
              包含2013版所有文明，幾乎重製了整個遊戲，畫面更加精緻及更多新特性。詳見：
              《<nuxt-link to="/games/de"> 世紀帝國II：決定版 </nuxt-link>》
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>
              除非你的電腦不是windows10，不然建議直接購買決定版就好。若一定要買2013版，可以只買主程式，且2013版主程式與資料片全部都可互連。但如果只買主程式，則沒辦法用新文明，沒差多少錢，建議全買
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-5 class="m-1" variant="primary"
            >1-5.現在要到哪裡連線對戰？</b-btn
          >
          <b-collapse id="a-5">
            <div class="well">
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>

              決定版提供專用伺服器可以大幅減少連線延遲，也是目前唯一的連線方案。並注意，決定版與2013版不能互連。
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>
              現在玩家大多使用Steam平台對戰，也就是購買上述所說的2013版本，即有內建連線平台。另外也有人數較少，使用稍微比較不方便，但水平較高、品質更好的Voobly平台，教學<a
                target="_blank"
                href="https://www.ptt.cc/bbs/AOE/M.1511542311.A.669.html"
                >請點此</a
              >。
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.a-6 class="m-1" variant="primary"
            >1-6.電腦配備要求很高嗎?</b-btn
          >
          <b-collapse id="a-6">
            <div class="well">
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>
              <p>
                最低配備: 需要 64 位元的處理器<br />
                作業系統: <b class="text-danger">Windows 10 64bit</b><br />
                ∟<em
                  >若要在 Windows 7 遊玩，<a
                    target="_blank"
                    href="https://forum.gamer.com.tw/C.php?bsn=1122&snA=14941"
                    >請參考</a
                  ></em
                ><br />
                處理器: Intel Core 2 Duo or AMD Athlon 64x2 5600+<br />
                記憶體: 4 GB 記憶體<br />
                顯示卡: NVIDIA® GeForce® GT 420 or ATI™ Radeon™ HD 6850<br />
                DirectX: 版本：11<br />
                網路: 寬頻網際網路連線<br />
                儲存空間: 30 GB 可用空間<br />
              </p>
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>
              <p>
                最低配備：作業系統 Windows Vista, 7, 8 Pro+<br />
                處理器：1.2GHZ CPU<br />
                記憶體：1 GB RAM<br />
                顯示卡：相容 Direct X 9.0c 的顯示晶片DirectX® 版本：9.0c<br />
                硬碟空間：2 GB 可用硬碟空間
              </p>
            </div>
          </b-collapse>
        </div>
      </div>
      <h3>2.系統相關-購買後</h3>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.b-1 class="m-1" variant="primary"
            >2-1.遊戲有沒有中文？如何繁中化?</b-btn
          >
          <b-collapse id="b-1">
            <div class="well">
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>

              決定版提供內建繁體中文，但戰役配音重新配過，可能會比較不習慣，後續可能會有志願者推出舊版音檔作為替換。
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>

              <p>
                1.請將遊戲語言轉換至簡體中文（收藏庫>AOE II>右鍵>內容>語言）
              </p>
              <p>
                2.<a
                  href="http://steamcommunity.com/sharedfiles/filedetails/?id=466768643"
                  target="_blank"
                  >請訂閱插件</a
                >
              </p>
              <p>3.進入遊戲，原則上就是繁體中文。</p>
              <hr />
              <p>
                若不是，請在遊戲中的「選項」中選擇「繁體中文」。詳細內容<a
                  href="https://forum.gamer.com.tw/C.php?bsn=01122&snA=12498&tnum=125"
                  target="_blank"
                  >請參考</a
                >
              </p>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.b-2 class="m-1" variant="primary"
            >2-2.怎麼更改遊戲解析度?(2013版)</b-btn
          >
          <b-collapse id="b-2">
            <div class="well">
              桌面解析度=遊戲解析度，你是筆電的話只能說gg
              <p>
                <a
                  href="https://www.ptt.cc/bbs/AOE/M.1511792119.A.275.html"
                  target="_blank"
                  >相關討論</a
                >
              </p>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.b-3 class="m-1" variant="primary"
            >2-3.連線出現握手狀態圖示，無法開始遊戲(2013版)</b-btn
          >
          <b-collapse id="b-3">
            <div class="well">
              重進房應該會改善，若經常性發生，可能是虛擬IP問題 設定port
              forwarding或是DMZ可能改善
              <p>
                <a
                  href="http://kaedeknowledge.blogspot.tw/2017/06/Age-of-Empires-II-HD-Edition-fix-handshaking.html?m=1"
                  target="blank"
                  >請參考:握手排除</a
                >
              </p>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.b-4 class="m-1" variant="primary"
            >2-4.我的版本不會自動更新</b-btn
          >
          <b-collapse id="b-4">
            <div class="well">
              參考下圖設定，若下方選項選這個，開著steam且遊戲不開就會自動更新了
              <img src="https://i.imgur.com/KbnO3Tll.jpg" alt="" />
            </div>
          </b-collapse>
        </div>
      </div>
      <h3>3.遊戲相關</h3>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.c-1 class="m-1" variant="success"
            >3-1.遊戲的村民閒置驚嘆號、小樹、格子、巨羊怎麼用？</b-btn
          >
          <b-collapse id="c-1">
            <div class="well">
              <div class="rounded d-block bg-info text-white">
                《世紀帝國II：決定版》
              </div>
              格線已經有內建提供此功能，其它模組上市後有, 到時候會開放在<a
                href="https://www.ageofempires.com/mods"
                target="_blank"
                >工作坊</a
              >。

              <div class="rounded d-block bg-info text-white">
                《世紀帝國II (2013)》
              </div>

              <p>這是steam工作坊的套件，目的是更方便使用者</p>
              <p>使用方式:登入訂閱，遊戲重開一次即可</p>
              <h4>常用套件</h4>
              <ul>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=176096493"
                    target="_blank"
                    >格線+去雪地</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=549369672"
                    target="_blank"
                    >小樹</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=680790000"
                    target="_blank"
                    >矮牆</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=843687812"
                    target="_blank"
                    >閒置村民 驚嘆號</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=143764670"
                    target="_blank"
                    >Player 7 灰色改黑色 (只有改小地圖的)</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=552934442"
                    target="_blank"
                    >original hotkey</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=808105965"
                    target="_blank"
                    >Tech Tree UI</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=824164427"
                    target="_blank"
                    >sort civ(依照資料片排序文明)</a
                  >
                </li>
                <li>
                  <a
                    href="https://steamcommunity.com/sharedfiles/filedetails/?id=1682487346&searchtext=big+sheep"
                    target="_blank"
                    >巨羊模組</a
                  >
                </li>
              </ul>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.c-2 class="m-1" variant="success"
            >3-2.有推薦的強AI嗎?(2013版)</b-btn
          >
          <b-collapse id="c-2">
            <div class="well">
              <p>難度依序由簡單至難:</p>
              <ul>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=926355182"
                    target="_blank"
                    >No Action AI</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=808013226"
                    target="_blank"
                    >Gandalf AI</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=473358292"
                    target="_blank"
                    >New Custom AI&nbsp;-&nbsp;ResonanceBot 5-1c:</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=647049302"
                    target="_blank"
                    >Custom AI&nbsp;-&nbsp;ResonanceBot 5-1c 2v6 EX</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=463466878"
                    target="_blank"
                    >BruteForce Custom AI 2.15:</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=926358453"
                    target="_blank"
                    >WC 9487</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=926377949"
                    target="_blank"
                    >WC 9527-Siege & cavalry</a
                  >
                </li>
                <li>
                  <a
                    href="http://steamcommunity.com/sharedfiles/filedetails/?id=804364078"
                    target="_blank"
                    >Balance scai (1V7)</a
                  >
                </li>
              </ul>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.c-3 class="m-1" variant="success"
            >3-3.語音指令沒聲音(2013版)</b-btn
          >
          <b-collapse id="c-3">
            <div class="well">
              <p>Patch 5.7 語音指令預設關閉 請自行啟動</p>
              <img src="~assets/blfNLeZl.jpg" alt="" />
            </div>
          </b-collapse>
        </div>
      </div>
      <h3>4.遊戲戰術相關</h3>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.d-1 class="m-1" variant="warning"
            >4-1.為什麼看你們打都不撿遺跡?</b-btn
          >
          <b-collapse id="d-1">
            <div class="well">
              <p>
                今天要跟大家講一個生香油錢的故事，說到世紀帝國II的遺跡，就一個長得很像獎杯，遊戲開始時散落在地圖各地，只有僧侶可以搬運，而當他被放置到修道院時，他就會以每2秒1黃金的速度生產黃金所以說呢，你遺跡越多黃金就越多啦，那到底為什麼實戰中大家都不撿遺跡呢？
              </p>
              <h4>成本上來說</h4>
              <p>
                首先來算算撿遺跡的成本，修道院175木材，僧侶100黃金，在城堡初期的大戰中，一兵一卒都是非常珍貴的，這175木材和100黃金，我大可拿來做其他事情，例如起城鎮中心爆經濟，或是拿去生軍事單位，對戰局的影響都遠超過撿遺跡。
              </p>
              <h4>控制力來說</h4>
              <p>
                其次是控制力，城堡初期是相當耗費控制力的，你真的以每個玩家都是怪力，有四隻手在控兵嗎？我要控馬還要控經濟，如果我打弩兵那耗費的控制力將會更多。你要蓋修道院，還要生僧侶，生完僧侶他不是ai阿，你還要手控去搬遺跡，而遺跡也不是你家隔壁鄰居老王這麼近阿，有的十萬八千里遠最後你還要把般著遺跡的僧侶拉回來，這中間耗費多少控制力，一樣道理，我把那些控制力去控馬多殺敵人幾隻村民，去爆經濟對於初期的戰局，我能獲得更大的回報。
              </p>
              <h4>功能面來說</h4>
              <p>
                撇除前面的原因，老子就是有錢蓋了修道院和出了僧侶，那為什麼你還是不撿遺跡，僧侶這麼好用，當然出來直接上戰場阿，僧侶可招降可補血，非常好用，對於一隻軍隊的幫助非常大，舉個例子好了，五隻駱駝配五隻西班牙征服者，明顯的是西班牙征服者可以虐殺駱駝，但配五隻駱駝一隻僧侶打六隻西班牙征服者那情況就相當不一樣，僧侶號稱最強防守兵種，我吃飽閒閒沒事去外面撿遺跡，那就是空閒，僧侶走的又慢，一來一往都把戰局給賣了，所以回歸到最原始的功能面，僧侶就該做他該做的事情，招降和補血，行有餘力等戰局穩定時再來做他額外的事情吧
              </p>
              <iframe
                width="100%"
                height="315"
                src="https://www.youtube.com/embed/iRz0k759qlQ"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.d-2 class="m-1" variant="warning"
            >4-2.被偷豬影響有多大?</b-btn
          >
          <b-collapse id="d-2">
            <div class="well">
              表面上被偷豬不計耗損，損失340食物，而對方賺340食物，但實際上靠趕鹿早點種田等方式，其實損失沒有帳面上如此大，高手即使被偷豬升級也不會被影響。但偷豬還有隱形的損失，且隱形的損失遠大於帳面上，譬如說偷豬的那一方多吃一隻豬，等於斥候趕了2隻半的鹿，代表他不用提早種田，有多餘的木頭可以做更多的事情，被偷豬的那一方斥候得在家趕鹿，所以沒有辦法探情報，對方如果打裝甲塔還是前置等兇猛的打法，沒辦法提早做準備，這是最虧的。
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.d-3 class="m-1" variant="warning"
            >4-3.為什麼斥候探路都不用Shift自動探路?</b-btn
          >
          <b-collapse id="d-3">
            <div class="well">
              因為用shift設路徑自動探路，大腦沒辦法記憶地圖，會變成你只是為了開地圖，而其實探路真正的目的是知道地圖長什麼樣子，哪邊有狼、有缺口、有資源等等，如果不是手動探，你最後還是要花時間去看，多此一舉。且自動探路很危險，遇到敵人的馬會被捕第一刀，你回過神後大概被砍兩刀了，這對初期戰局很不利，最重要的是手動探圖，斥候都有可能誤入敵人城鎮而被射死，不要說自動探圖了。自動探圖頂多用在綿羊探家裡附近。
            </div>
          </b-collapse>
        </div>
      </div>
      <div class="row zo">
        <div class="col-md-12">
          <b-btn v-b-toggle.d-4 class="m-1" variant="warning"
            >4-4.為什麼都不用磨坊的排隊田?</b-btn
          >
          <b-collapse id="d-4">
            <div class="well">
              因為初期的資源都很緊，都控制在各項資源1~200內，60木材放到磨坊內排隊就等於浪費60木材，沒辦法利用。等於你在最需要錢的時候，把錢存在銀行，而且還沒有利息。
            </div>
          </b-collapse>
        </div>
      </div>
      <hr />
      <blockquote>
        <p>
          此頁面感謝qaws68（伊森）整理<a
            href="https://www.ptt.cc/bbs/AOE/M.1495194620.A.384.html"
            target="_blank"
            >AOE常見問題</a
          >完成
        </p>
      </blockquote>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'foot' })

export default {
  components: {}
}
</script>
<style></style>
