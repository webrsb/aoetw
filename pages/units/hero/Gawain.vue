<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>高文爵士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>高文爵士</b>，<nuxt-link to="/units/hero/King_Arthur"
              >亞瑟王</nuxt-link
            >傳說裡面的人物，亞瑟王的姪子(可以說是<nuxt-link
              to="/units/hero/Mordred"
              >莫德雷德</nuxt-link
            >的哥哥)。高文爵士的傳聞有很多，最有名氣的大概就是他與綠<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >的互動。因為據說無人能在白天將他擊敗，所以被稱為太陽騎士。
          </p>
        </div>
        <h3>介紹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            高文爵士是一名<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，遊戲中以<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
            >的形象出現。雖然是個幾乎完美的騎士，但沒有出現在任何<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >裡面，只能在遊戲編輯器裡面找到他。
          </p>
          <ul>
            <li>
              作為<nuxt-link to="/units/hero">英雄</nuxt-link
              >單位，高文爵士不能被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >，且會自己回復<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
            </li>
            <li>
              高文爵士被歸類為騎兵，所有騎兵的加成對他都有效果，比方<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >的對<nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link
              >加成。
            </li>
            <li>
              雖然是英雄，但是作為<nuxt-link to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >，高文爵士也害怕<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
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
        這裡只討論<nuxt-link to="/civs/Britons">不列顛</nuxt-link
        >(高文爵士出身於此)
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
                高文爵士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Constablerichemonticon.png"
                  width="80"
                  alt=""
                />
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
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">180</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12(近戰)</td>
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
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
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
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的高文爵士
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/高文_(亞瑟王傳說)"
                    target="_blank"
                    >高文爵士</a
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
              遊戲中高文爵士是騎兵，但是蘭斯洛特與莫德雷德卻是<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >。
            </li>
            <li>
              高文爵士可以說是升級版的騎兵，考慮到不列顛沒有遊俠，他可以說是不列顛後期的騎兵團長。
            </li>
            <li>他擁有自己的頭像，所有圓桌騎士包括亞瑟王都沒有這個特權。</li>
            <li>號稱太陽騎士，在永遠是白天的世紀帝國II世界卻會被殺死。</li>
            <li>高文爵士在遊戲內的數值是圓桌騎士內最弱的。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            高文爵士是亞瑟王的外甥，其母莫歌絲是亞瑟的同母異父的姐姐。莫歌絲共有五子：高文爵士、阿格規文、加赫雷斯、加雷斯與莫德雷德(全都是騎士，真能生)。
          </p>
          <p>
            曾經有跟亞瑟王一起屠龍的事蹟，也是"白馬王子"一詞的由來。雖然是圓桌的一員，但是對於聖杯並沒有興趣。
          </p>
          <p>
            在"高文爵士與綠騎士"中，高文遭到摩根勒菲欺騙，變成了綠騎士的一員，但本作也讓大家清楚知道高文爵士的高貴之處：忠於朋友，信守諾言，並且也展示了高文的武勇。
          </p>
          <p>
            許多傳說裡面都描述到高文與太陽的關係，據說高文的力量會隨著太陽而變強，因此在白天發生的戰鬥都是高文的勝利，就連跟蘭斯洛特的決鬥也是如此。有些傳說則特別指出高文之所以受到太陽眷顧，是因為其身為完美騎士的身分，並不是其武藝。
          </p>
          <p>
            蘭斯洛特叛逃時殺了高文的三個弟弟與兩個兒子，他們因此決裂。高文在盛怒下要求亞瑟王討伐蘭斯洛特，並在決鬥中被蘭斯洛特砍傷。
          </p>
          <p>
            關於高文之死有幾種說法，但是這些說法皆跟蘭斯洛特砍下的舊傷有關，可以說高文是舊傷復發而死。
          </p>
          <p>高文與蘭斯洛特最後有沒有和好，傳說有好幾種說法且皆無統一。</p>
          <p>
            總的來說，高文不管在哪個版本的傳說裡面，都是以完美騎士的形象出現：包容、忠誠、勇猛與禮貌，可以說是亞瑟王傳說裡面最符合真正騎士形象的人。
          </p>
        </div>
        <h3>其他作品內的高文爵士形象</h3>
        <div class="hrn1"></div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a href="https://zh.moegirl.org/高文(Fate)" target="_blank"
                  >Fate系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/Gawain.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            在Fate/EXTRA裡面初次登場，技能也跟白日有關，陽光燦爛的鄰家大哥哥形象。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/Code_Geass機動兵器列表"
                  target="_blank"
                  >反叛的魯路修</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/Gawain.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            魯路修的座機，副駕駛為C.C.，第二季之後被解體，強子炮被拿去當斑鳩號的大砲。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/高文爵士與綠騎士"
                  target="_blank"
                  >高文與綠騎士</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/GGK_93.jpg" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            14世紀的<nuxt-link to="/civs/Franks">法國</nuxt-link
            >文學作品，描述高文與綠騎士的故事，敘事詩中表達到高文因為高潔的品格反而受害成為綠騎士的一員。
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
