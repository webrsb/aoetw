<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>波斯的菊兒汗</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>波斯的菊兒汗</b>是<nuxt-link to="/batt/Tamerlane"
              >帖木兒戰役</nuxt-link
            >的第二關。<nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link
            >幫脫脫迷失統一了金帳汗國之後，將目光放在動蕩的<nuxt-link
              to="/civs/Persians"
              >波斯</nuxt-link
            >帝國上。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／2000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1500<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／500<nuxt-link to="/resource/Stone">石料</nuxt-link>
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
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>（紫色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">
                脫脫迷失（黃色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家3
              </td>
              <td class="tc6">
                薩卜澤瓦爾（灰色）<nuxt-link to="/civs/Persians"
                  >波斯人</nuxt-link
                >
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">赫拉特（藍色）韃靼人</td>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">蘇丹尼葉（紅色）韃靼人</td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家6
              </td>
              <td class="tc6">
                扎蘭季（綠色）波斯人
              </td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家7
              </td>
              <td class="tc6">
                桃里寺（橙色）蒙古人
              </td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家8
              </td>
              <td class="tc6">
                伊斯法罕（青色）波斯人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Villager">村民</nuxt-link>x8、<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >x14、<nuxt-link to="/units/Keshik">怯薛</nuxt-link
              >x10、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >x9、<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
              >x2、<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >x1、<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>x2
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                摧毀5座敵人城市(赫拉特、扎蘭季、伊斯法罕、蘇丹尼葉和桃里寺)中3座城市的<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
              <li>摧毀脫脫迷失(2，黃色)的兩座城堡，來打敗他。</li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>脫脫迷失(2，黃色)將暫時為您的軍隊提供援軍。</li>
              <li>
                只要薩卜澤瓦爾內(3，灰色)還有至少一座<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >，您就能收到他們的貢品。
              </li>
              <li>
                只要薩卜澤瓦爾(3，灰色)的<nuxt-link to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >沒有被摧毀，您就能接收他們的村民。
              </li>
              <li>
                在赫拉特(4，藍色)周圍標有旗子的每個地點建要一座<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >，完成圍城。
              </li>
              <li>
                摧毀扎蘭季(6，綠色)灌溉設施附近的箭塔和貿易工坊，切斷其水源。
              </li>
              <li>
                摧毀蘇丹尼葉(5，紅色)附近的<nuxt-link to="/building/Dock"
                  >碼頭</nuxt-link
                >，打擊其經濟。
              </li>
              <li>
                摧毀伊斯法罕(8，青色)附近的桃里寺<nuxt-link
                  to="/building/Monastery"
                  >修道院</nuxt-link
                >。挑起桃里寺和伊斯法罕的敵意。
              </li>
              <li>摧毀桃里寺(7，橙色)附近的盧里斯坦的強盜山區營地。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的勢力仍然只能發展到<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >，但人口上限為200。
              </li>
              <li>
                本劇本內，您不能建造城鎮中心或生產更多村民。您的盟友會暫時為您提供貢品、援軍和更多村民。前提是您能保護他們的安全。
              </li>
              <li>
                利用您的起始點周圍的豐富資源，快速增長。隨著您的擴張，或許可以開始尋求更多收入來源，如貿易或漁業。利用市集維持經濟的平衡
              </li>
              <li>注意尋找打擊敵人資源收入，甚至讓敵人自相殘殺的機會。</li>
              <li>
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>是對付<nuxt-link
                  to="/units/War_Elephant"
                  >戰象</nuxt-link
                >的絕佳兵種。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的軍隊(1，紫色)已抵達富饒的波斯，他們的盟友脫脫迷失(2，黃色)的營地位於北方。波斯分裂成幾股相互爭鬥不斷的勢力。
              </li>
              <li>
                薩卜澤瓦爾城(3，灰色)中的薩巴爾人願為帖木兒效力。他們的軍力不強，但能提供寶貴的經濟支持。
              </li>
              <li>
                東南方的扎蘭季城在米哈巴尼德手中。他們的軍隊主要由<nuxt-link
                  to="/units/Camel_Rider"
                  >駱駝騎兵</nuxt-link
                >和<nuxt-link to="/units/War_Elephant">戰象</nuxt-link>組成。
              </li>
              <li>
                莫扎法爾王朝的寶座安放在偉大的伊斯法罕城(8，青色)中。他們的軍隊由劍兵和<nuxt-link
                  to="/units/Skirmisher"
                  >矛兵</nuxt-link
                >組成，並有虔誠的神職人員激勵。
              </li>
              <li>
                丘拜尼王朝的蘇丹尼葉城(5，紅色)靠近裏海海岸。他們手下有一些<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >，還有圍在<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
                >精銳周圍的<nuxt-link to="/units/Keshik">怯薛</nuxt-link>衛隊。
              </li>
              <li>
                賈拉伊爾人的桃里寺城遠在西方，以騎射手、<nuxt-link
                  to="/units/Pikeman"
                  >重裝長槍兵</nuxt-link
                >和<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>著稱。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這關無法生產<nuxt-link to="/units/Villager">村民</nuxt-link
              >以及建造<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >，不過如果保護好灰色的城鎮中心和<nuxt-link to="/building/Market"
                >市集</nuxt-link
              >，他們將定期送玩家5位村民以及一些資源。在第二階段開始前，脫脫迷失也會不時送玩家一支由<nuxt-link
                to="/units/Mangudai"
                >蒙古突騎</nuxt-link
              >和<nuxt-link to="/units/Kipchak">欽察</nuxt-link
              >各6隻組成的援軍，因此如果損失不大，我方只需要補充近戰兵種即可。標準模式下<nuxt-link
                to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >會升級至<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >。
            </li>
            <li>
              本關有兩個階段，第一階段要從敵對的五個勢力中任選三個踏平其<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >，支線任務完成後就會斷絕敵人的兵站讓敵人任我方宰割。首先全軍先衝地圖中央橙色的<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >，將<nuxt-link to="/Relic">遺跡</nuxt-link
              >轉給青色後青色會和我方同盟並進攻橙色；然後馬上去搗毀綠色的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >和貿易工坊，完成目標後就先暫時回防。
            </li>
            <li>
              基地的防守方面，在灰色附近往藍色的方向以及靠近紅色的海邊各蓋一座城堡防守（可能的話塞滿馬弓），等蓋完圍繞藍色基地的六座塔後（如果要解這支線），進入第二階段之前，在北方往脫脫迷失的基地附近再蓋幾個，理由後述。
            </li>
            <li>
              其他要注意的就是如果要解紅色的支線任務，就要建造<nuxt-link
                to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >，碼頭的位置要靠近海邊的城堡以達成掩護效果，並<nuxt-link
                to="/elements/Garrison"
                >駐軍</nuxt-link
              >在碼頭內等累積一定量的<nuxt-link to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >再去迎擊來襲的敵艦，近而打掉紅色的碼頭，而橙色也有一座碼頭也順手解決，再將剩餘的戰艦摧毀後就能安心捕魚了；而在與青色結盟後如果橙色被攻破，青色就又會轉敵對。基本上放青色和橙色互咬即可，我們主要破壞紅色、藍色和綠色這三座城堡，將這三座城堡打掉後就會進入第二階段。
            </li>
            <li>
              進入第二階段後，脫脫迷失就會向我方宣戰，任務目標改成破壞黃色的兩座城堡，如有預先在脫脫迷失側那邊預先蓋城堡即可發揮防禦的功效，再來就將他家的兩座城堡推平即可。或者也可以用偷吃步的方式，在他背叛前派<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >用指定攻擊的方式丟光他家，或是用黃金買石頭在他家塞滿城堡後，再破壞第三座城堡。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">波斯的菊兒汗</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Tamerlane/Gurkhan_of_Persia_map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tamerlane">帖木兒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              帖木兒第二章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Amir_of_Transoxiana"
                >河中地區的埃米爾</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Harbinger_of_Destruction"
                >毀滅的先兆</nuxt-link
              >
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
