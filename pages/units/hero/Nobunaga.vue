<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>織田信長</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>織田信長</b>，<nuxt-link to="/civs/Japanese">日本</nuxt-link
            >戰國末期大名，戰國三英傑之一，開創了日本的安土桃山時代。1534年6月23日出生於尾張國勝幡城，26歲領導織田家擊敗今川家，並率部上洛(前往京都)，奠定了織田在戰國的霸主地位。然而在1582年，眼看即將統一日本之時，因明智光秀的背叛在本能寺之變後下落不明。享年48歲，行事作風非常超脫時代，堪稱日本戰國史上的未來人。信長的出現催化了日本的統一，也為將來幕府的長期統治打下基礎。
          </p>
        </div>
        <h3>介紹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            織田信長是一位<nuxt-link to="/units/Infantry_Units"
              >步兵英雄</nuxt-link
            >，在<nuxt-link to="/batt/Kyoto_1582">京都（1582）</nuxt-link
            >中登場，形象為一名<nuxt-link to="/units/Samurai"
              >日本武士</nuxt-link
            >，他最大的特色是他超快的攻速，一秒鐘可以攻擊兩次，做為比對，正常士兵基本上是兩秒一刀。
          </p>
          <ul>
            <li>
              在京都（1582）<nuxt-link to="/batt">戰役</nuxt-link
              >中，他必須死亡，否則遊戲無法進行。
            </li>
            <li>
              作為<nuxt-link to="/units/hero">英雄</nuxt-link
              >單位，信長不能被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >，且會自己回復<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >，當然，在地圖編輯器裡面可以找到他。
            </li>
            <li>
              織田信長被歸類為<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >，所有步兵的加成對他都有效果，包括日本的步兵<nuxt-link
                to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >加成。
            </li>
            <li>
              雖然是英雄，但是作為<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >，信長也害怕<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >與弩砲。
            </li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>戰役名稱</td>
              <td>可否使用</td>
              <td>所屬陣營與顏色</td>
            </tr>
            <tr>
              <td class="tta1">京都（1582）</td>
              <td class="tta2">
                <span
                  style="color: red;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                <div class="p4" style="height: 23px"></div>
                織田信長
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                織田信長
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Minamotoicon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link><br />英雄
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">190</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >+5<br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >+2
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">0.5</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的織田信長
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/織田信長"
                    target="_blank"
                    >織田信長</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">建築物，特殊單位，大部分近戰單位。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、火槍兵和<nuxt-link to="/units/Knight">騎士</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <p>
                <img src="~assets/Forging.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Forging"
                  >鍛造</nuxt-link
                >(+1)
              </p>
              <p>
                <img
                  src="~assets/Ironcasting.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
              </p>
              <p>
                <img
                  src="~assets/Blastfurnace.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              </p>
              <p>
                <img src="~assets/Arson.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Arson"
                  >縱火</nuxt-link
                >(步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_Building"
                  >建築</nuxt-link
                >)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <p>
                <img
                  src="~assets/Scalemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/Chainmailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/Platemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
                >(+1/+2)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <p>
                <img src="~assets/Squires.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Squires"
                  >護衛</nuxt-link
                >(+10%)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">視野</td>
            <td class="tta4">
              <p>
                <img src="~assets/Tracking.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Tracking"
                  >追蹤技術</nuxt-link
                >(+2)
              </p>
            </td>
          </tr>
        </table>

        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              信長的頭像跟<nuxt-link to="/units/hero/Minamoto">源氏</nuxt-link
              >重複了，而且跟<nuxt-link to="/batt/Kurikara_1183"
                >礪波山（1183）</nuxt-link
              >裡面的英雄武士都一樣。
            </li>
            <li>
              信長的攻擊速度為全英雄最快，只比<nuxt-link to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >(0.25)慢，
            </li>
            <li>
              遊戲內建的武士英雄非常稀少，僅有3名：<nuxt-link
                to="/units/hero/Kitabatake"
                >北畠將軍</nuxt-link
              >、源氏與織田信長。
            </li>
            <li>
              信長的攻擊方式與一般日本武士無異，但是傷害計算速度比正常來的快。也就是說，你看到他砍一刀，他可能已經砍了兩三刀(居合?)。
            </li>
            <li>信長死亡的樣子是伏在自己的刀上死的(切腹?)。</li>
            <li>
              高攻速不代表他很強，他的血量比起其他英雄要低，且攻擊與防禦甚至只有常規單位的程度。
            </li>
            <li>
              現代許多作品，信長的形象都是個綁著高馬尾的鬍鬚男，這或許跟光榮公司有關...
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            信長出生於1534年的日本尾張，家中嫡子，由於行為怪異特殊，不得眾人喜愛。不過雖然行為怪異，各式各樣的知識卻都非常豐富，說白了就是不得賞識的天才。17歲時喪父，並繼承家督，花了五年時間統整了織田家，派人暗殺了想要謀反的親弟弟，並且跟同為一方大名的岳父齋藤道三關係友好，道三有意讓國給信長，卻被家臣叛亂殺害。
          </p>
          <p>
            1560年，尾張統一後，東方的今川家(今川義元)率領大軍上洛，途中攻打尾張，卻在桶狹間遭到信長突襲成功。今川家當主義元戰死，原本隸屬今川家的松平家(德川家康)獨立，並且跟信長結盟(清洲同盟)。
          </p>
          <p>
            信長花了五年時間攻下美濃(原齋藤道三領土)，並且於隔年1568年公開表示支持將軍，進軍京都，並同時篡奪北畠家領土(遊戲中北畠將軍的後裔)。
          </p>
          <p>
            信長進入京城後開始限制足利將軍的權力，並出兵攻打朝倉家，這讓同時跟朝倉與織田同盟的淺井家立刻背叛信長，從後面斷了信長退路，差點讓信長喪命。且各地反織田勢力陸續蜂起，是為第一次信長包圍網。1570年，包圍網解除。
          </p>
          <p>
            1571年，足利將軍促成第二次信長包圍網成立，由武田(武田信玄)帶頭反對織田氏，而此時在織田與武田兩家中間的德川家康也遭了殃，被打得屁滾尿流(字面意思)，但是最終包圍網因為信玄病逝瓦解，足利將軍被迫退位。
          </p>
          <p>1574年，信長攻陷長島城，平息叛亂勢力，屠殺全城二萬人。</p>
          <p>
            1575年，信長在長篠之戰中擊敗武田，隔年，在琵琶湖岸興建安土城，標誌著安土桃山時代的開始。
          </p>
          <p>
            1576年，第三次信長包圍網成立，上杉家(上杉謙信)帶頭包圍織田，但是結果跟第二次一樣，以上杉謙信本人逝世告終，至此，再沒有人能阻止信長統一天下，就連昔日的戰國第一武田家也在1582年3月被徹底消滅。
          </p>
          <p>1582年5月，本能寺之變發生，明智光秀率眾叛變，織田信長從此失蹤。</p>
          <p>
            生前自稱佛敵，第六天魔王，且嗜殺，但同時對於民眾非常親近，毫不擺架子，各式各樣的政策皆為了領民富足著想。
          </p>
          <p>
            非常鄙視舊禮教與傳統，用人方面毫不在乎身分差距，唯才是用，對於南蠻(當時日本稱西方為南蠻)非常有興趣，對火槍有先見之明。
          </p>
          <p>
            170公分，精通各式各樣的運動，尤其喜歡相撲。對於信仰採取開放態度，一旦有叛亂，不論何種信仰皆會誅殺。
          </p>
        </div>
        <h3>其他作品內的信長形象</h3>
        <div class="hrn1"></div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/织田信长(Fate)" target="_blank"
                  >Fate系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/d7UsKjqF_400x400.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            在"Fate/KOHA-ACE帝都圣杯奇谭"裡首次登場，為了未來的日本著想而行動著，所以被稱為"救國的英靈"也沒有錯(跟沖田似乎關係很好)。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/漂流武士" target="_blank"
                  >漂流武士</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img
              height="124px;"
              src="~assets/tumblr_ohanfgiygh1v296kfo3_1280.jpg"
              alt=""
            />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            猥瑣的大叔形象，要說起來，比起英雄來說更像個海盜，而在作品中確實是個天才，善於使用火槍，經常被人背叛。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/织田信奈" target="_blank"
                  >織田信奈的野望</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/n6Exk.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            傲嬌，天下第一美少女，脾氣暴躁，非常小氣的老闆，缺乏能夠分享夢想的人，是個貨真價實不被賞識的天才，但是對戀愛缺乏經驗。
          </p>
          <br />
          <br />
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/戰國無雙" target="_blank"
                  >戰國無雙系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/1383790164409.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            經典的魔王形象，擁有多彩全能的攻擊方式，通常攻擊能夠對應相當的範圍、攻速亦不俗。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/信長之野望系列"
                  target="_blank"
                  >信長之野望系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/0001539476.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            各遊戲的信長形象鼻祖，有點像是金城武，本人永遠都有特殊的戰法，而遊戲也繞著他轉。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/戰國BASARA系列角色列表"
                  target="_blank"
                  >戰國BASARA系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img
              height="124px;"
              src="~assets/chara_img_illust_oda.jpg"
              alt=""
            />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>卡普空動作遊戲，擁有自己的動畫，信長在這裡完全就是個大魔王。</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
