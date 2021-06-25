<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世界奇觀</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>世界奇觀</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/The_Hautevilles"
              >歐特維爾家族</nuxt-link
            >的第五關，也是最後一關。
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
                500<nuxt-link to="/resource/Wood">木材</nuxt-link>/500<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >/250<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >/250<nuxt-link to="/resource/Stone">石料</nuxt-link>［註］
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          註：標準難度下，起始資源各加500<br />
          <br />

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
                <nuxt-link to="/civs/Sicilians">西西里人</nuxt-link>（藍色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家5
              </td>
              <td class="tc6">
                約翰二世‧科穆寧皇帝（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">
                蘇丹王哈桑（橙色）<nuxt-link to="/civs/Berbers"
                  >柏柏人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">
                洛塞三世皇帝→驕傲的亨利［註］（黃色）<nuxt-link
                  to="/civs/Teutons"
                  >條頓人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家3
              </td>
              <td class="tc6">
                拉努爾夫‧德倫戈（青色）諾曼人［西西里人］
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家4
              </td>
              <td class="tc6">
                <nuxt-link to="/civs/Italians">義大利</nuxt-link
                >城市（紅色）<nuxt-link to="/civs/Italians"
                  >義大利人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家7
              </td>
              <td class="tc6">
                <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
                >海盜（綠色）<nuxt-link to="/civs/Saracens"
                  >薩拉森人</nuxt-link
                >
              </td>
            </tr>
          </table>

          註：攻入基地時或遊戲時間40分後會更改。<br />
          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              兩座基地、一批軍隊和<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>選擇通往勝利的道路：</li>
              <ol>
                <li>
                  建造一座<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
                  >並保護其安全，取得文化勝力。
                </li>
                <li>打敗或與所有勢力結盟。</li>
              </ol>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>
                打敗敵方勢力以學習其<nuxt-link to="/techs/untech"
                  >特殊科技</nuxt-link
                >。
              </li>
              <li>為伊德里西探索80%的地圖。</li>
              <li>
                向<nuxt-link to="/civs/Byzantines">拜占庭人</nuxt-link
                >進貢500黃金以賄賂他們。<br />
                →向拜占庭人進貢1000黃金以賄賂他們。<br />
                →向拜占庭人進貢1500黃金以賄賂他們。
              </li>
              <li>請從以下任務中選擇一項：</li>
              <ol>
                <li>
                  摧毀<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
                  ><nuxt-link to="/building/Dock">碼頭</nuxt-link>。
                </li>
                <li>
                  向薩拉森海盜進貢1000(2000)黃金以賄賂他們。（依難度而定）
                </li>
              </ol>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                您的人口上限為200人。因為<nuxt-link to="/civs/Sicilians"
                  >西西里</nuxt-link
                >是許多阿拉伯人和<nuxt-link to="/civs/Berbers">柏柏人</nuxt-link
                >的家鄉，您可訓練<nuxt-link to="/units/Camel_Rider"
                  >駱駝騎兵</nuxt-link
                >和<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>。
              </li>
              <li>
                打敗敵人後即可學童其特殊科技。查看其他<nuxt-link to="/civs"
                  >文明</nuxt-link
                >的<nuxt-link to="/tree/vie">科技樹</nuxt-link
                >，看看您可取得哪些特殊科技。
              </li>
              <li>
                請謹慎選擇首要打敗的敵人。其特殊科技可能會讓您在之後的戰鬥中佔上風。
              </li>
              <li>
                西西里的資源很快就會耗盡。您必須擴張、交易和尋找<nuxt-link
                  to="/Relic"
                  >聖物</nuxt-link
                >。
              </li>
              <li>
                薩拉森海盜受到蘇丹王哈桑的保護。若其海盜基地遭受攻擊，他將會前去支援。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                新登基的羅傑二世（1，藍色）在建立王國時面臨了很多威脅。前任君主多靠軍力來吸引<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >，但羅傑二世卻是靠寬容和治國之道來廣納各國賢才。他受到英格蘭大臣塞爾比的羅伯套和阿拉伯學者穆罕默德‧伊德里西的輔佐。
              </li>

              <li>
                神聖羅馬帝國皇帝洛塞三世（2，黃色）從北部的基第入侵義大利。其軍隊是由<nuxt-link
                  to="/units/Teutonic_Knight"
                  >條頓武士</nuxt-link
                >、<nuxt-link to="/units/Paladin">遊俠</nuxt-link>、<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
                >所組成。
              </li>

              <li>
                德倫戈家族利用羅傑按兵不動的弱點，在拉努爾夫‧德倫戈（3，青色）的領導下反叛。這位諾曼領主以<nuxt-link
                  to="/units/Serjeant"
                  >薩金特衛兵</nuxt-link
                >、<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
                >東南部。
              </li>

              <li>
                比薩和熱那亞這兩座義大利城市（4，紅色）在薩丁尼亞島和西義大利建立了基地。這兩個<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >部隊與神聖羅馬帝國皇帝結盟，派出戰艦、步兵和<nuxt-link
                  to="/units/Archer"
                  >弓兵</nuxt-link
                >。
              </li>

              <li>
                約翰二世‧科穆寧皇帝（5，紫色）繼承了父親<nuxt-link
                  to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >皇帝阿歷克塞‧科穆寧的王位。雖然他很想對抗諾曼人替死去的父親報仇，但賄賂他可以說服他留在東部王國。
              </li>

              <li>
                在羅傑‧博索征服西西里讓齊里王朝失去影響力後，柏柏人蘇丹王哈桑（6，橙色）開始依靠海盜行為。他庇護並保護著薩拉森海盜（7，綠色）。不過這些海盜也是可以收買的。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關有兩種勝利方式：蓋<nuxt-link to="/building/Wonder"
                >世界奇觀</nuxt-link
              >完成倒數，和其他勢力同盟或征服他們。如果征服該勢力，就會得到所屬文明的<nuxt-link
                to="/techs/untech"
                >特殊科技</nuxt-link
              >（銀冠金冠都有，青色諾曼人除外）。初期有兩個與我方同盟的陣營。此外這關可以訓練<nuxt-link
                to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >和標槍騎兵。
            </li>

            <li>
              一開始就是農經濟、準備升帝王，高難度要圍一下義大利本島基地的北方，因為過五分鐘後馬上有一匹青色的軍隊會過來騷擾。接著就是要想辦法打出去了，即使打算用世界奇觀的也是一樣，因為要往外擴張尋找資源。此時學者要我們探索地圖，只要達成80%探索率，全體<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >的收集就會加快15%，黃金也多15%可挖（<nuxt-link to="/civs/Indians"
                >印度</nuxt-link
              >的金冠蘇丹王以及<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >的文明特性資源延長效果）。
            </li>

            <li>
              次要任務方面，我們必須付500黃金給紫色拜占庭，然後按時間還要再付1000、1500，不然他們會跟我們敵對。在探查海盜附近的海域時，會有摧毀綠色碼頭或付錢給他們的選項（標準難度付1000金，其他難度付2000金）選擇付錢可以和海盜同盟，摧毀<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >則會讓義大利和我們結盟，但橘色會改敵對。青色則是打掉第一個<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >會和我們講和，讓我們有考慮的時間，在外交選單手動改同盟就行，但過一段時間又會改敵對，因此直接抄了比較省事（除非是最後敵對的勢力）。黃色在攻入基地時或遊戲時間過40分後會改領導者名字「驕傲的亨利」，不過不影響。他沒有和談的選項，也是直接滅掉。
            </li>

            <li>打敗各勢力可以取得的特殊科技如下：</li>

            <ol>
              <li>
                黃色條頓人：<nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link
                >、<nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link>
              </li>
              <li>
                紅色義大利城市：<nuxt-link to="/techs/Pavise">巨盾</nuxt-link
                >、<nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link>
              </li>
              <li>
                紫色拜占庭人：<nuxt-link to="/techs/Greek_Fire"
                  >希臘之火</nuxt-link
                >、<nuxt-link to="/techs/Logistica">後勤學</nuxt-link
                >（由<nuxt-link to="NOLINKS">重騎兵</nuxt-link>系獲得效果）
              </li>
              <li>
                橘色柏柏人：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
                >、<nuxt-link to="/techs/Maghrabi_Camels"
                  >馬格拉比駱駝</nuxt-link
                >
              </li>
              <li>
                綠色薩拉森海盜：<nuxt-link to="/techs/Madrasah"
                  >穆斯林學墊</nuxt-link
                >、<nuxt-link to="/techs/Zealotry">狂熱</nuxt-link>
              </li>
            </ol>

            <li>最簡單的流程如下：</li>

            <ol>
              <li>
                一開始全力挖金和石頭，義大利本島的北方用牆封住後就在牆內擺些<nuxt-link
                  to="/units/Archer_Units"
                  >弓兵</nuxt-link
                >防守，步兵石頭一夠就死命在沿岸蓋<nuxt-link
                  to="/building/Donjon"
                  >城樓</nuxt-link
                >就不用太擔心敵人在海岸邊的騷擾，西西里島那側有海盜登陸就敲鐘後將他們引到<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >射殺，有義大利的海軍來犯就利用船將他們引到<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>

              <li>
                <nuxt-link to="/techs">科技</nuxt-link>優先研發<nuxt-link
                  to="/techs/Ballistics"
                  >彈道學</nuxt-link
                >、火箭、弓箭射程類和進貢類（標準難度進貢類已研發），主要強化城樓對船的<nuxt-link
                  to="/elements/Attack"
                  >攻擊力</nuxt-link
                >，而且待會需要進貢的黃金很多。儘早湊到給海盜的金額可以免去海盜的騷擾還可以幫忙對付敵人，然後選擇蓋世界奇觀或是征服敵對勢力。由於要隨時付錢給拜占庭因此黃金也要保持進貢值以上。
              </li>

              <li>
                如果要選擇征服勢力，一開始中央的青色城堡可以先略過並派些弓兵看管其動靜，主力放在應對<nuxt-link
                  to="/civs/Teutons"
                  >條頓</nuxt-link
                >和義大利。對付義大利可以直接用<nuxt-link to="/units/Arbalest"
                  >強弩兵</nuxt-link
                >配合巨投和<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link
                >即可（可搭配少量的<nuxt-link to="/units/Elite_Skirmisher"
                  >戰矛兵</nuxt-link
                >和駱駝騎兵），他西邊還有一座在小島的陣地要運兵過去，擊敗後取得的大盾可以彌補沒有<nuxt-link
                  to="/techs/Ring_Archer_Armor"
                  >弓兵鏈甲</nuxt-link
                >的缺點。要打<nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >時，還要搭配使用駱駝騎兵或<nuxt-link to="/units/Halberdier"
                  >戟兵</nuxt-link
                >對付<nuxt-link to="/units/Paladin">遊俠</nuxt-link
                >，同時要特別注意敵方的<nuxt-link to="/units/Siege_Onager"
                  >重型投石車</nuxt-link
                >可以滅掉弓兵陣因此要準備一些重騎兵來對付。拿下<nuxt-link
                  to="/civs/Teutons"
                  >條頓</nuxt-link
                >後，把青色的城堡打掉一座後與之同盟，就算達成通關條件。（但青色不強，直接打掉中央的陣地等滅<nuxt-link
                  to="/civs/Teutons"
                  >條頓</nuxt-link
                >後再把他抄了也行）
              </li>
            </ol>

            <li>
              當然不只這種玩法，本關有多種遊玩方式，像是可以不付錢給拜占庭、選擇直接摧毀海盜<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >後和橘色交戰等等，那就可以不用研發進貢科技，但就要多花費心力在制海權上以及登陸戰上。不管選擇方式為何，本關結束後這個戰役就宣告破關。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                本關是整個戰役中唯一一關玩家的文明名字是西西里人。其他關玩家的文明名字皆以諾曼人表示（雖然一樣使用西西里的科技樹）。
              </li>
              <li>
                本關亦是少數有改領導者名字的一關。第二關依照玩家的決定未必會改領導者名字，但這關黃色一定會有所更改。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">世界奇觀</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
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
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batts/The_Hautevilles">歐特維爾家族</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
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
              歐特維爾家族第五章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bohemond_in_the_East"
                >東方的博希蒙德</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>
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
