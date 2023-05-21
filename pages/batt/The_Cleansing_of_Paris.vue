<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>掃蕩巴黎</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>掃蕩巴黎</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batt/The_Grand_Dukes_of_the_West"
              >大公爵</nuxt-link
            >的第三關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="28%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="10%">不適用</td>
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
                <nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>（紫色)
              </td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background: #27ae60;">
                同盟
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家2
              </td>
              <td class="tc6">
                巴黎（灰色）<nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家5
              </td>
              <td class="tc6">工匠（綠色）法蘭克人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家6
              </td>
              <td colspan="3" class="tc6">學者（黃色）法蘭克人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              中立
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家7
              </td>
              <td class="tc6">
                <nuxt-link to="/units/hero/Henry_V">亨利五世</nuxt-link
                >（紅色）<nuxt-link to="/civs/Britons">不列顛人</nuxt-link>
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家3
              </td>
              <td class="tc6">阿馬尼亞克（青色）法蘭克人</td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">阿馬尼亞克的伯納德（藍色）法蘭克人</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              無畏的約翰、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x2、<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
              >x8、<nuxt-link to="/units/Coustillier">馬上輕裝兵</nuxt-link
              >x12、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >x20、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >x16、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>x21
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>殺死阿馬尼亞克的伯納德，征服巴黎。</li>
              <li>
                您必須在<nuxt-link to="/units/hero/Henry_V">亨利五世</nuxt-link
                >和他的軍隊到來前征服城市。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>
                城市中有三個願意與<nuxt-link to="/civs/Burgundians"
                  >勃根地人</nuxt-link
                >合作的公會領袖。找到他們並嘗試獲得他們的支持。
              </li>
              <li>
                殺死占據城外<nuxt-link to="/building/Lumber_Camp"
                  >伐木場</nuxt-link
                >的阿馬尼亞克士兵。
              </li>
              <li>摧毀塞那河的阿馬尼克封鎖線。</li>
              <li>釋放被關押在城外的屠夫。</li>
              <li>
                找到兩件被盜的古物（聖物推車）並帶給大學裡的學者以獲得額外的<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                無畏的約翰必須依靠他軍隊的力量。他既不能建立自己的經濟體系，也不能訓練更多的軍隊。然而，對阿馬尼亞克的統治感到不滿且具有影響力的巴黎市民可能會接受說服，加入<nuxt-link
                  to="/civs/Burgundians"
                  >勃根地</nuxt-link
                >這一方。
              </li>
              <li>
                阿馬尼亞克控制了巴黎所有的<nuxt-link to="/building/Gate"
                  >城門</nuxt-link
                >。趕走或消滅守衛各門的士兵，打開城門。
              </li>
              <li>
                爭奪巴黎的鬥爭已全面展開，您會在城中或附近各處發現叛亂份子，可以將他們納入自己的軍隊。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                無畏的約翰和他的部隊（1，紫色）已經在巴黎西邊的聖馬丁<nuxt-link
                  to="/building/Monastery"
                  >修道院</nuxt-link
                >附近集結完畢。這裡有一條路通往布西門。在叛離者的幫助下，勃根地人攻佔城門進入巴黎（2，灰色）的難度應該不會太高。
              </li>

              <li>
                阿馬尼亞克（3，青色）控制著城市，但有很多居民對他們感到不滿。據間諜報告，阿馬尼亞克的士兵和城鎮居民已經在巴黎各處街道爆發衝突。
              </li>
              <li>
                阿馬尼亞克的伯納德（4，藍色）由一隊貼身護衛保護，已經撤退至城市北部。
              </li>
              <li>
                巴黎的公會（5，綠色）沒有忘記無畏的約翰曾經給予他們的大量恩惠。大學學者（6，黃色）也可能願意幫助勃根地人趕走阿馬尼亞克人。
              </li>
              <li>
                斥侯報告說，有一支龐大的英格蘭軍隊（7，紅色）正在向巴黎進軍。無畏的約翰必須在英格蘭人到來前征服巴黎。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關只有45分的時限。首先在一開始<nuxt-link to="/building/Gate"
                >城門</nuxt-link
              >就有一場會戰，隨後在城內有兵會幫助我們。與此同時，調動左邊的大軍進城，會路過一座<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >且有一支守軍，順勢擊敗後派一支部隊到城堡西北方會有一小支軍隊加入我們，城門的正南方也有一支<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >。此時城內的軍隊很快會找到第一個公會領袖。第一個公會領袖會要我們解放伐木場，解放後可以拿一些<nuxt-link to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >。記得把<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >設為不還擊免得誤傷我軍，且將隊伍用隊伍分類以便隨時使用適當的軍隊迎擊。
            </li>

            <li>
              之後可以選擇由城外或城內延著東南方走。城外沿著道路可以找到一些和零散的軍隊（大地之母），但大多和敵軍交戰中因此要投入軍隊去協助他們，而將城門附近的軍隊都清除掉後可以解放城門讓我方進出；往城內走則道路較擁擠需要小心控制部隊，但如果軍隊有受傷，就可以就地進駐在城內的城堡、<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >、<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >內治療即可，不必特地回到一開始的<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >。
            </li>

            <li>
              不管如何在靠近東南方的城門附近，會陸續找到第二個公會領袖和學者。學者要我們回收兩個聖物推車，公會領袖會要我們清除被封鎖的河道。回收完聖物推車可以獲得科技強力<nuxt-link
                to="/techs/Bracer"
                >護腕</nuxt-link
              >、<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
              >、<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >，解放河道後壞掉的橋會修理好，接著就可以過橋。如果是標準難度，期間應該可以在城內找到第一個聖物推車（但高難度沒有）。在城外從東南方沿著河走可在淺灘處看到另一個守軍守著聖物推車。
            </li>

            <li>
              過橋後會有兩位<nuxt-link to="/units/Missionary">傳教士</nuxt-link
              >從起始地點增援，接著就會找到第三個公會會長，他要我們幫忙解放城外的屠夫。取得東方城門的控制權後（城外的敵兵用攻城器攻擊）就可以出去救人，解放完屠夫後會加入我們，屠夫的正北方還有一支包含<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >的軍隊加入，再往北方走又可以再找到一個由敵軍守著的推車<nuxt-link
                to="/Relic"
                >聖物</nuxt-link
              >。任務做完後不要回城，從城外延著西北方的路走，敵方兵力較少且不會在城內作戰以致過於擁擠，就在藍色右方有個城門，解決守軍後攻進去，最後把伯納德擊殺即過關。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                這場戰役城鎮的格局分布大致與貞德戰役第五關「圍攻巴黎」類似，不同的是「圍攻巴黎」一役中，整個巴黎城市的所有權是屬於敵方的英格蘭人，故其箭塔和城堡會攻擊我軍；在這關則是將城鎮和敵軍分開，由於城鎮的外交立場是和我方同盟，因此不會被城堡和箭塔攻擊，也可以將軍隊就地駐紮以獲得治療。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">掃蕩巴黎</div>
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
              <nuxt-link to="/batt/The_Grand_Dukes_of_the_West">大公爵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>
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
              勃根地第三章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Wolf_and_the_Lion">狼與獅</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Unholy_Marriage">罪惡的婚姻</nuxt-link>
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
