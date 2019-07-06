<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>哈斯汀斯（1066）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            1066年9月29日，諾曼地公爵威廉在11世紀時跨越海峽，開始對英倫的入侵，與當時的撒克遜人哈羅德交戰爭奪英格蘭的統治權。
          </p>
          <p>
            撒克遜的哈羅德先在北部與挪威的哈羅德哈左德交戰取得勝利，但也給了威廉足夠的時間與機會在南方登陸鞏固。
          </p>
          <p>
            雙方與黑斯汀斯交戰，最後哈羅德戰死，以諾曼人全勝告終。威廉隨即在西敏寺加冕為英格蘭國王。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>300，<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >400，<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >300，<nuxt-link to="/resource/Stone">石頭</nuxt-link>250
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ffd700;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="10%"><div class="p5">玩家2</div></td>
              <td class="tc6" width="40%">
                哈拉爾.哈德拉達（水藍色）<nuxt-link to="/civs/Vikings"
                  >維京</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家3</div></td>
              <td class="tc6">
                撒克遜<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
                >（紅色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
              <td class="tc6"><div class="p8">玩家4</div></td>
              <td class="tc6">撒克遜人哈樂德（橘色）哥德</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家5</div></td>
              <td class="tc6">哈樂德的偷襲部隊（黃色）哥德</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x1、<nuxt-link to="/units/Knight">騎士</nuxt-link>x2、<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >x5、<nuxt-link to="/units/hero/William_the_Conqueror"
                >征服者威廉</nuxt-link
              >。
            </dd>
            <dt>出場<nuxt-link to="/units/hero">英雄</nuxt-link>：</dt>
            <dd>
              征服者威廉、<nuxt-link to="/units/hero/Harold_Haardraade"
                >哈拉爾.哈德拉達</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無。</dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>征服者威廉必須生還。</li>
              <li>
                摧毀薩克遜的哈樂得<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >（橙色）來征服英格蘭。
              </li>
            </ol>
          </div>
          <h3>次要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                把<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
                >派到北方，去搭載哈拉爾.哈德拉達的<nuxt-link to="/units/Berserk"
                  >狂戰士</nuxt-link
                >。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>當你想入侵英格蘭的時候，警惕來自諾曼地的薩克遜人的進攻。</li>
              <li>維特島，緊挨著英格蘭的南海岸，是一個安全的登陸地點。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                諾曼人（藍色）有一個大城市建議在法蘭克，它們領土可以讓敵人自由進入，哈樂德的偷襲部隊（黃色）可能隨時進攻。
              </li>
              <li>
                薩克遜海軍（紅色）企圖擊退挪威的運輸船，或使用<nuxt-link
                  to="/units/War_Galley"
                  >槳帆戰船</nuxt-link
                >威嚇哈樂德的陸軍，在攻打倫敦附近的薩克遜德哈羅的城堡之前，妳可以先試著打敗北到南的薩克遜海軍碼頭。
              </li>
              <li>
                哈樂德哈左德手下的維京人（水藍色）是可變因素，他們會與薩克遜德哈樂德作戰。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              基本上你有一座小城鎮可以發展，在資源上和部隊的整合編制都可以很安全的發育完整。
            </li>
            <li>
              城鎮附近有許多，小規模的突襲軍須小心處理，但威脅不高不用過度擔心。
            </li>
            <li>
              敵方會派哥德部隊用運輸船方式運送，過來進行小規模騷擾，我們城鎮附近是樹木常會有一些漏洞，建議留一支小部隊在家防守。
            </li>
            <li>
              當你擊敗黃色後，青色維京人會轉變它的立場加入你，你會擁有一支狂戰士和英雄。
            </li>
            <li>你需要用運輸船載送它們到達我方陣地並且他將會給你一些黃金。</li>
            <li>
              由於對方海軍會從中攔截我方運輸船需要一些海軍幫忙護送我方軍隊，建議可以從南邊登岸，那裡除了有黃金、石頭還有<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >，可以做為小基地往上方進攻。
            </li>
            <li>
              由於他們防衛並沒有很難突破，只需要狂戰士加上<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >即可進攻，保護好投石機不被哥德部隊攻擊，即可順利過關。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              黃色部隊很分散，如果你需要外出採及資源最好有一隻小部隊先去探路。
            </li>
            <li>
              當你進攻完黃色後可直接在那建造<nuxt-link to="/building/Dock"
                >碼頭</nuxt-link
              >生產運輸船，幫忙運送狂戰士以及我方軍隊，從南方登岸進攻。
            </li>
            <li>
              由於南方的防禦相較於比較薄弱，大軍壓境紅色基本上無法防守，這時候可以派巨型投石機往橘色敵營的門口進行攻擊。
            </li>
            <li>
              小心哥德這時候會趁機偷襲我方城鎮，最好有一隻小部隊騎兵在家防守，以防被斷了經濟。
            </li>
            <li>
              這次有兩隻英雄登場，都可以派他們到前線作戰，但須小心他們<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >，我方建議以騎兵為主，步兵會有狂戰士所以不用生產太多沒關係。
            </li>
            <li>
              <nuxt-link to="/batt">戰役</nuxt-link
              >前篇哈拉爾·哈德拉達率領維京軍團由北面發動攻勢，為史實的斯坦福橋戰役
            </li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li>赫斯廷斯戰役－哈斯汀斯為舊版的中文翻譯。</li>
          </ul>
          <h3>征服者威廉（1028-1087）</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              隨著諾曼地公國在威廉的治理下勢力漸強，法王的猜疑也漸深。這導致了威廉開始尋求新的發展區域。所以他決定侵入英格蘭。由於當時盎格魯英格蘭的君王無後，所以具有繼承權的是諾曼地的威廉以及威塞克斯的哈羅德，威廉則聲稱哈羅德早已放棄，故在哈羅德即位後率大軍渡過海峽。而威廉在黑斯汀斯取得決定性勝利，成為英格蘭國王，是為諾曼王朝。英格蘭重新與歐洲大陸開始接觸，受到中世紀的文化洗禮。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                哈斯汀斯（1066）
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Hasting.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者的戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第四章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Vindlandsaga_1000"
                >芬特蘭撒格（1000）</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Manzikert_1071">曼奇克托（1071）</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由Wun、裕暉協助編輯。</div>

        <div class="row">
          <div class="col-md-12">
            <div class="wiki" style="margin-top: 5px;">
              <div style="float: left;">
                <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
              </div>
              <div style="margin-left: 60px;">
                維基百科上的此關戰役與人物資訊
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E9%BB%91%E6%96%AF%E5%BB%B7%E6%96%AF%E6%88%98%E5%BD%B9"
                        >哈斯汀斯戰役</a
                      ></b
                    ></i
                  >
                </div>
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E6%96%AF%E5%9D%A6%E7%A6%8F%E6%A1%A5%E6%88%98%E5%BD%B9"
                        >斯坦福橋戰役</a
                      ></b
                    ></i
                  >
                </div>
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E5%A8%81%E5%BB%89%E4%B8%80%E4%B8%96_(%E8%8B%B1%E6%A0%BC%E5%85%B0)"
                        >威廉一世</a
                      ></b
                    ></i
                  >
                </div>
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E5%93%88%E7%BD%97%E5%BE%B7%C2%B7%E6%88%88%E5%BE%B7%E6%B8%A9%E6%A3%AE"
                        >哈羅德·戈德溫森</a
                      ></b
                    ></i
                  >
                </div>
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E6%97%A0%E6%83%85%E8%80%85%E5%93%88%E6%8B%89%E5%B0%94"
                        >哈拉爾·哈德拉達</a
                      ></b
                    ></i
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
