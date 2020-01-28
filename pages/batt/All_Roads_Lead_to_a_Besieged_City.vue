<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>條條大路通圍城</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>條條大路通圍城</b>為<nuxt-link to="/batt/Alaric"
              >阿拉里克戰役</nuxt-link
            >的第一關劇情關卡，在這關故事中，哥德國王<nuxt-link
              to="/batt/Alaric"
              >阿拉里克</nuxt-link
            >開始了他對羅馬的攻擊。在整個過程中，他將有機會招募到哥德難民加入他的軍隊，獲得對河流與貿易路線的控制，並最終切斷羅馬的供應。
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
              <td class="tc2">無</td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">15</td>
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
              <td class="tc6" width="12%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                <nuxt-link to="/civs/Italians">義大利人</nuxt-link
                >（綠色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tc6" width="12%">
                <div class="p6"></div>
                玩家4
              </td>
              <td class="tc6" width="38%">哥德人（紫色）哥德</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p7"></div>
                玩家6
              </td>
              <td class="tc6" width="38%">哥德難民（灰色） 哥德</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">羅馬（紅色）義大利</td>
              <td class="tc6">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6">
                羅馬軍團（黃色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家5
              </td>
              <td class="tc6">西羅馬帝國（藍色）拜占庭</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              阿拉里克、1位西徐亞斥候、2位護衛長槍兵（HP75）、9位<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >、9位<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >、16位<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >、11位<nuxt-link to="/units/Archer">弓兵</nuxt-link
              >、11位<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              9位輕騎兵、2位<nuxt-link to="/units/Knight">騎士</nuxt-link
              >、4位<nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link
              >、14位長劍兵、3位<nuxt-link to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >、3位長槍兵、1位重裝長槍兵、2位護衛長槍兵（HP75）、13位哥德衛隊、8位弓兵、10位<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >。
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>阿拉里克必須存活。</li>
              <li>
                摧毀三座<nuxt-link to="/building/Guard_Tower"
                  >防禦箭塔</nuxt-link
                >，控制河道。
              </li>
              <li>讓阿拉里克到南邊的哥德營地去。</li>
              <li>攻佔北邊的市場，這樣就能切斷羅馬最後的貿易線了。</li>
              <li>迎擊羅馬軍團，不要讓他們破壞貿易站市場。</li>
            </ol>
          </div>
        </div>
        <h2>次要目標</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>到河東岸搜尋一下走失的難民，他們會很願意加入你的部隊。</li>
            <li>
              幫助難民解救他那些仍困在羅馬牢籠裡的戰友。（此目標完成阿拉里克<nuxt-link
                to="/elements/Hit_points"
                >生命值</nuxt-link
              >加成為650HP，ATK10+23，2+1／4+1）
            </li>
            <li>
              洗劫<nuxt-link to="/building/Monastery">修道院</nuxt-link
              >，把它變成廢墟。（修道院憎侶加入您）
            </li>
          </ul>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>別想獨闖羅馬，等待你的唯有死亡。</li>
            <li>
              有很多蠻族難民浪跡在羅馬城周圍的樹林裡，如果您仔細搜尋一下的話也許可以找到一兩個同伴。
            </li>
            <li>
              那些訓練有素的羅馬軍團驍勇善戰，得先把他們幹掉，但請不要讓他們靠近你的部隊。
            </li>
            <li>
              由於紀律嚴明組織嚴密，羅馬軍隊有強大的戰鬥力，但如果你能先除掉他們的<nuxt-link
                to="/units/edmap/Centurion"
                >百夫長</nuxt-link
              >，他們就會失去戰鬥士氣。
            </li>
            <li>由於這是個特定戰鬥力的場景，阿拉里克無法升級時代。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿拉里克（藍色）從東邊趕來，切斷了羅馬的軍須補給，他沒有一個營地。
            </li>
            <li>
              蠻族難民（灰色），散落在地圖的各處，他們是你的盟友，願意加入你。
            </li>
            <li>有些難民（紫色），在南邊搭建了一個臨時營地。</li>
            <li>
              你的敵人是西邊的羅馬人（紅色），但是他們的<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >太厚，很難攻破。
            </li>
            <li>你要提防黃色的軍團，它們已經派兵對抗阿拉里克的行動了。</li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                玩家扮演阿拉里克，營地在東邊。在這次<nuxt-link to="/batt"
                  >戰役</nuxt-link
                >中，玩家不應該嘗試進入羅馬，太危險了，只要在羅馬城外圍完成任務就好。第一個任務就是摧毀河岸南邊的三座羅馬<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >。
              </li>
              <li>
                玩家可以在河岸的東邊搜索到一些難民（大地之母單位）來為玩家奮戰，玩家偶爾會在地圖上遇見羅馬軍團，而北方有一支難民被羅馬軍團挾持。
              </li>
              <li>
                一座箭塔就在河岸東邊，但是另外兩個卻在西邊，玩家必須走北方來穿越河流（不走橋，走橋南端的一座小島）。路上，跟箭塔不同地方，玩家會遭遇到羅馬的修道院，摧毀它會得到<nuxt-link
                  to="/units/Monk"
                  >僧侶</nuxt-link
                >。玩家摧毀兩座箭塔前會遭到羅馬軍團的抵抗。在<nuxt-link
                  to="/games/aof"
                  >失落的帝國</nuxt-link
                >原版MOD裡面，摧毀三座箭塔之後，玩家必須把阿拉里克帶到河岸西邊的<nuxt-link
                  to="/building/Dock"
                  >碼頭</nuxt-link
                >。
              </li>
              <li>
                摧毀三座箭塔後，阿拉里克必須會見南方的哥德士兵，然後玩家就會獲得他們全部玩家必須打倒在哥德營地前的所有羅馬軍團。之後，玩家必須把阿拉里克帶到哥德營地西北方的<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >，然後市集就會被哥德控制。羅馬軍團會開始攻擊市集，打倒他們後，戰役即勝利。
              </li>
            </ul>
            <h2>趣事</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  戰役裡的阿拉里克一世其實是從地圖編輯器裡面的<nuxt-link
                    to="/units/hero/Theodoric_the_Goth"
                    >哥德人狄奧多利克</nuxt-link
                  >改名而來。
                </li>
                <li>
                  原版非官方的<nuxt-link to="/games/aof">失落的帝國</nuxt-link
                  >版本裡，玩家在地圖最北方會有一個<nuxt-link
                    to="/units/Arbalest"
                    >強弩兵</nuxt-link
                  >，用來防止玩家過早被擊敗。（就像<nuxt-link
                    to="/batt/Genghis_Khana"
                    >成吉思汗(戰役)</nuxt-link
                  >第一關<nuxt-link to="/batt/Crucible">統一各部</nuxt-link
                  >一樣）。
                </li>
                <li>戰役名稱來源於名言：條條大路通羅馬。</li>
                <li>這個戰役的歷史背景是遊戲中最早的。</li>
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
                條條大路通圍城
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Alaric_1.jpg" alt="" />
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第一章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Legionaries_on_the_Horizon"
                >羅馬軍團隨時殺到</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、Dennis協助編輯。</div>
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
