<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蘭斯洛特</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>蘭斯洛特</b>，<nuxt-link to="/units/hero/King_Arthur"
              >亞瑟王</nuxt-link
            >傳說中的角色。圓桌<nuxt-link to="/units/Knight">騎士</nuxt-link
            >武藝最強者，曾用一枝樹枝打敗費洛特。傳說是在湖中被養大的，所以又名湖上騎士。蘭斯洛特為亞瑟王的勝利提供了莫大的幫助，但是最後亞瑟王的敗亡也是起因於他。作為背叛者的事蹟非常有名，最後並沒有得到亞瑟王的制裁，而是成為一名修道士。
          </p>
        </div>
        <h3>介紹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            蘭斯洛特是一名<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，遊戲中以<nuxt-link to="/units/Paladin">遊俠</nuxt-link
            >的形象出現。作為最強圓桌騎士的他，沒有出現在任何<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >裡面，只能在遊戲編輯器裡面找到。
          </p>
          <ul>
            <li>
              作為<nuxt-link to="/units/hero">英雄</nuxt-link
              >單位，蘭斯洛特不能被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >，且會自己回復<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
            </li>
            <li>
              蘭斯洛特被歸類為<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >，所有騎兵的加成對他都有效果，比方<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >的<nuxt-link to="/elements/Hit_points">血量</nuxt-link>加成。
            </li>
            <li>
              雖然是英雄，但是作為<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >，蘭斯洛特也害怕<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1"><p>無</p></div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        這裡只討論法蘭克(蘭斯洛特出身於此)
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/building">建築物</nuxt-link>，<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              >，大部分近戰單位，<nuxt-link to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Spearman">槍兵</nuxt-link>系，<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >，<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >，<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >，<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >
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
                <img src="~assets/forging.png" width="30" alt="" /><nuxt-link
                  to="/techs/Forging"
                  >鍛造技術</nuxt-link
                >(+1)
              </p>
              <p>
                <img
                  src="~assets/iron_casting.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link>(+1)
              </p>
              <p>
                <img
                  src="~assets/blast_furnace.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <p>
                <img
                  src="~assets/scale_barding_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Scale_Barding_Armor">鱗鎧甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/chain_barding_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/plate_barding_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
                >(+1/+2)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <p>
                <img src="~assets/husbandry.png" width="30" alt="" /><nuxt-link
                  to="/techs/Husbandry"
                  >耕種技術</nuxt-link
                >(+10%)
              </p>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                蘭斯洛特
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/PaladinIcon.png" width="80" alt="" />
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
            <td class="unit4">騎兵<br />英雄</td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">240</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">14(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>(+3)
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的蘭斯洛特
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/兰斯洛特"
                    target="_blank"
                    >蘭斯洛特</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              蘭斯洛特是<nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >的圓桌騎士，但其實他是出身於法蘭克。
            </li>
            <li>蘭斯洛特可說是升級版的遊俠，有更高的雙防與生命值。</li>
            <li>號稱湖上騎士，卻不能走上水面。</li>
            <li>跟亞瑟王一樣，他沒有特殊的頭像。</li>
            <li>
              號稱是最強的圓桌騎士，但是遊戲內甚至無法打贏身為背叛者的<nuxt-link
                to="/units/hero/Mordred"
                >莫德雷德</nuxt-link
              >。
            </li>
            <li>歷史上的蘭斯洛特有非常多的傳說，但是遊戲內沒有任何特色。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            蘭斯洛特出身於<nuxt-link to="/civs/Franks">法國</nuxt-link
            >，傳說中在其父死後，就被梅林的情人薇薇安(也就是給予亞瑟王聖劍的湖中聖女)偷去，並且在水下撫養成高貴的騎士。
          </p>
          <p>
            出身於法蘭西的他常常被人拿來與亞瑟王比較，出於不服氣跟好奇，蘭斯洛特踏上了不列顛的土地。
          </p>
          <p>
            蘭斯洛特自小與桂妮薇爾感情很好，他通過了女巫的誘惑，並靠著實力當上了圓桌騎士，且成為桂妮薇爾的守護騎士。
          </p>
          <p>
            成為圓桌騎士後，蘭斯洛特與桂妮薇爾再也無法隱藏對彼此的感情，便私下有了戀情。為了不讓戀情曝光，蘭斯洛特甚至在決鬥中殺死了同為圓桌的梅里亞岡特爵士。
          </p>
          <p>
            莫德雷德對於蘭斯洛特殺害同伴感到不滿，且懷疑皇后與他的關係，於是帶人潛入皇宮，結果抓姦在床，蘭斯洛特逃走，桂妮薇爾被捕。
          </p>
          <p>
            王后被亞瑟王判處火刑，蘭斯洛特回來救了皇后，逃離不列顛的路上又擊殺了數名圓桌騎士，最終逃到法蘭西。
          </p>
          <p>
            亞瑟王最後追趕至法國，並捉拿蘭斯洛特成功，但由於莫德雷德的叛亂，亞瑟王選擇原諒了蘭斯洛特。被<nuxt-link
              to="/techs/Chivalry"
              >騎士精神</nuxt-link
            >促使，蘭斯洛特要求幫忙平亂，卻遭到<nuxt-link
              to="/units/hero/Gawain"
              >高文爵士</nuxt-link
            >拒絕。
          </p>
          <p>
            雖然得到原諒，但是罪惡感跟騎士精神的互相衝擊使他最終出家，不再重返戰場，桂妮薇爾最終也出家。
          </p>
        </div>
        <h3>其他作品內的蘭斯洛特形象</h3>
        <div class="hrn1"></div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/兰斯洛特(Fate)" target="_blank"
                  >Fate系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/27078218_p0.jpeg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            在Fate/Zero裡面正式登場，戰鬥的理由只有一個：希望亞瑟王親手制裁他，由此靈魂才得安息。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/Code_Geass反叛的魯路修"
                  target="_blank"
                  >Code Geass</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img
              height="124px;"
              src="~assets/Lancelot_-_Factsphere.jpg"
              alt=""
            />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            朱雀的座機，堪稱全劇性能最詭異的一台機器，甚麼奇奇怪怪的武裝都有，性能甚至高到能抵抗第一騎士的Geass。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://en.wikipedia.org/wiki/First_Knight"
                  target="_blank"
                  >第一武士</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/GereFK.gif" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            Jerry Zucker執導的一部電影，1995年上映，由Richard Gere飾蘭斯洛特。
          </p>
          <br />
          <br />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
