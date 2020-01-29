<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羅馬軍團隨時殺到</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>羅馬軍團隨時殺到</b>為<nuxt-link to="/batt/Alaric"
              >阿拉里克戰役</nuxt-link
            >的第二關劇情關卡，在這關故事中，這是關於<nuxt-link
              to="/batt/Alaric"
              >阿拉里克</nuxt-link
            >發現羅馬皇帝霍諾留·奧古斯都背叛他背後的援軍，因此決心反抗羅馬皇帝。
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
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                400<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／200<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／100<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          <h3>AI</h3>

          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Goths">哥德人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="10%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                阿陶爾夫的部隊（綠色）<nuxt-link to="/civs/Goths"
                  >哥德</nuxt-link
                >
              </td>
              <td class="tc6" width="10%">
                <div class="p7"></div>
                玩家5
              </td>
              <td class="tc6" width="42%">
                平民（灰色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="10%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">哥德人（紫色）哥德</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">羅馬軍團（紅色）義大利</td>
              <td class="tc6">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">馬吉斯將軍的營地（黃色）義大利</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              阿拉里克、阿陶爾夫、蘇勒上尉、1位護衛長槍兵（HP75）、1位<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >（HP20）、3位<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >、3位<nuxt-link to="/units/Archer">弓兵</nuxt-link
              >、2位<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、1台<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                第一章：徹查
                <ul>
                  <li>玩家起始部隊－1位輕騎兵（HP20）。</li>
                </ul>
                <ul>
                  <li>
                    1、詢問西北邊的<nuxt-link to="/units/Villager"
                      >村民</nuxt-link
                    >，2、詢問西南邊的村民，3、返回向阿拉里克上報軍情。
                  </li>
                </ul>
              </li>
              <li>第二章：霍諾留斯的軍團</li>
              <ul>
                <li>
                  1、摧毀駐紮營的主帳篷，破壞敵營，2、準備好截擊靠近的軍團，3、取羅馬將軍首級，挫敵軍士氣。
                </li>
                <li>可選任務：帶阿陶爾夫到他東邊的營地。</li>
              </ul>
              <li>摧毀羅馬的防禦工事。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
              >受了傷，要讓他活著就要盡量避開戰鬥。
            </li>
            <li>北邊的橋是咽喉要道，那裡一夫當關萬夫莫開。</li>
            <li>阿陶爾夫帶了很多驍勇善戰手下，好好指揮他們。</li>
            <li>
              阿拉里克無法升級至<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿拉里克已經在地圖中間搭建了營地，他只等著皇帝批准他們進入新領地。在阿拉里克營地的西邊有2個善良的村民（灰色）。他們手無寸鐵，但卻能給你一些很好的策略建議。
            </li>
            <li>
              作為阿拉里克的左膀右臂，阿陶爾夫(綠色)在東邊搭建他了營地，必要的時候可以協助你你的敵人是那些遍佈地圖的羅馬軍團（紅色和黃色）。
            </li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                玩家將首先看見哥德部隊被更強大的羅馬軍團擊敗，而在哥德村莊，阿拉里克會派遣一個斥候在兩個平民村莊進行調查。
              </li>
              <li>
                斥候必須存活，直到調查完兩個村莊並向阿拉里克回報為止。因為斥候的<nuxt-link
                  to="/elements/Hit_points"
                  >生命值</nuxt-link
                >很低，盡量避免戰鬥，有三個軍團弓箭手會在路上伏擊你。
              </li>
              <li>
                斥候必須首先在西北村莊進行調查，那裡有一個由一名長槍兵守衛的橋樑。警衛會阻止斥候並通知後面有一支軍隊。然後，斥候必須調查西部村莊，在第一村莊的南邊。市場邊上的一名線人（長槍兵）會通知他在村子南面的一個營地（馬吉斯將<nuxt-link
                  to="/building/Barracks"
                  >軍營</nuxt-link
                >-黃色）看到羅馬軍隊。
              </li>
              <li>
                阿拉里克生氣地得知羅馬皇帝奧諾里在後面偷襲他，在阿拉里克背後派出增援，因此決定打羅馬人，給霍諾留一個教訓。玩家應該開始準備部隊摧毀馬吉斯將軍營的主帳篷（大帳篷），玩家不需要殺死營地的士兵。
              </li>
              <li>
                突襲了馬吉斯將軍營之後，玩家必須準備好面對十分鐘後來襲的軍團大部隊。軍隊在西北的橋後，一旦他們跨過橋來，玩家就會被要求去殺死貝利薩留，一個<nuxt-link
                  to="/units/Cataphract"
                  >拜占庭聖騎兵</nuxt-link
                >模樣的<nuxt-link to="/units/hero">英雄</nuxt-link>。
              </li>
              <li>
                在此之後，玩家被賦予摧毀北方軍團要塞的任務，以贏得<nuxt-link
                  to="/batt"
                  >戰役</nuxt-link
                >。與此同時，玩家可以選擇派遣阿陶爾夫去東部跟他的部隊會面，玩家將接管他的全部部隊。
              </li>
            </ol>
            <h2>趣事</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  哥德人在HD版本裡面，會在東方的森林裡面有一隻馬作為佔位單位。最初版本是沒有的，所以在原版本裡，哥德人在把村莊交給玩家後就會被擊敗。
                </li>
                <li>2012年最初版本內，西北的橋跟HD版本不同。</li>
                <li>
                  戰役內玩家被要求殺死貝利薩留，這在歷史中沒有發生，他們兩個根本不可能碰面，阿拉里克死於410年，而貝利薩留生於505年左右。
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                羅馬軍團隨時殺到
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Alaric_2.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Goths">哥德人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第一章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/All_Roads_Lead_to_a_Besieged_City"
                >條條大路通圍城</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Emperor_of_the_West">西域之君</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、Dennis協助編輯。</div>
        <div class="row">
          <div class="wiki" style="margin-top: 5px;">
            <div style="float: left;">
              <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
            </div>
            <div style="margin-left: 60px;">
              維基百科上的弗拉維烏斯·奧古斯都·霍諾留
              <div style="margin-left: 10px;">
                <i
                  ><b
                    ><a
                      href="https://zh.wikipedia.org/wiki/%E5%BC%97%E6%8B%89%E7%B6%AD%E7%83%8F%E6%96%AF%C2%B7%E5%A5%A7%E5%8F%A4%E6%96%AF%E9%83%BD%C2%B7%E9%9C%8D%E8%AB%BE%E7%95%99"
                      target="_blank"
                      >弗拉維烏斯·奧古斯都·霍諾留</a
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
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
