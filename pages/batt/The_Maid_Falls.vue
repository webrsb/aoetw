<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>聖女隕落</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>聖女隕落</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link>DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link to="/batt/Tamerlane">大公爵</nuxt-link>的第六關，也是最後一關。與之對應的關卡為<nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link>的第五關「<nuxt-link to="/batt/The_Siege_of_Paris">圍攻巴黎</nuxt-link>」。
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
                <nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>（紫色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家4
              </td>
              <td colspan="3" class="tc6">馬爾尼（橙色）勃根地人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              中立
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家5
              </td>
              <td class="tc6">蘇瓦松（灰色）<nuxt-link to="/civs/Franks">法蘭克人</nuxt-link></td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家2
              </td>
              <td class="tc6">舒瓦西（綠色）法蘭克人</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">康比涅（青色）法蘭克人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家6
              </td>
              <td class="tc6">
                法蘭西軍隊（黃色）法蘭克人
              </td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家7
              </td>
              <td class="tc6">
                聖女貞德（藍色）法蘭克人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              好人菲利普、<nuxt-link to="/units/Knight">騎士</nuxt-link>x8、<nuxt-link to="/units/Coustillier">馬上輕裝兵 </nuxt-link>x6、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>x16、長建兵x6、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>x10、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>x4
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>使<nuxt-link to="/units/hero/Joan_of_Arc_Champion">聖女貞德</nuxt-link>落馬（擊殺），以俘虜她。</li>
              <li>
                使舒瓦西的<nuxt-link to="/building/Castle">城堡</nuxt-link>起火（使<nuxt-link to="/building/Castle">城堡</nuxt-link><nuxt-link to="/elements/Hit_points">生命值</nuxt-link>降至1000以下），以接管城鎮。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>不要讓法蘭西人擊潰<nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>在馬爾尼的<nuxt-link to="/building/Outpost">哨站</nuxt-link>。</li>
              <li>在蘇瓦松建造一個<nuxt-link to="/building/Market">市集</nuxt-link>，獲得城鎮居民的支持。</li>
              <li>
                向蘇瓦松（5，灰色）進貢1000<nuxt-link to="/resource/Gold">黃金</nuxt-link>，讓他們的間諜為勃根地人效力。
              </li>
              <li>派遣5個<nuxt-link to="/units/Petard">炸藥桶</nuxt-link>去炸毀康比涅南方的橋樑。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>軍隊的人口上限為200人。</li>
              <li>
                沒有必要完全摧毀法蘭西軍隊。聖女貞德才是擋在您面前的敵人，擊敗她就是好人菲利普的目標。
              </li>
              <li>
                勃根地人必須獲得一個基地來展開行動，才可以開始圍攻康比涅。在入侵其他法蘭西的領土前，要專注於這個目標。
              </li>
              <li>
                馬爾尼小鎮已經由勃根地人掌控，但需要您的援助來瓦解法蘭西人奪回它的企圖。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                好人菲利普（1，紫色）已經揮兵南下，旨在征服康比涅和擊敗聖女貞德領導的法蘭西大軍。在戰爭正式開始之前，菲利普必須征服舒瓦西來建立一個基地。
              </li>
              <li>
                舒瓦西（2，綠色）的駐軍相對較為薄弱。如果勃根地人能夠堅定地發動攻擊，他們應該能夠輕鬆占領這座城鎮。
              </li>

              <li>
                馬爾尼城鎮（4，橙色）坐落於康比涅附近，已經被勃根地士兵征服。好人菲莉普必須支援駐守馬爾尼的勃根地部隊，以防止法蘭西人再次奪回城鎮。
              </li>
              <li>
                勃根地的斥侯得知，東邊的城鎮蘇瓦松（5，灰色）已經厭倦了戰爭。也許可能跟當地的居民達成一份協議，不用兵戎相見。
              </li>
              <li>
                聖女貞德和她忠誠的追隨者們（7，藍色）躲在康比涅。這座固若金湯的城市（3，青色）由一支強大的軍隊守衛，其中包含<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、重裝<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>、火槍兵和火砲。康比涅並不會坐以待斃，讓好人菲利普獲得主導權，他們很快就會發起反擊。
              </li>
              <li>
                南部有一些法蘭西軍隊的營地（6，黃色），部隊的主要構成為重裝<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始利用<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>先把綠色的<nuxt-link to="/building/Castle">城堡</nuxt-link>打到起火就能接管綠色，攻擊的時候注意不要讓敵軍攻擊到<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。隨後一邊爆經濟一邊生產一些<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>。接管後，將<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>區，高難度下有一支騎兵隊，將之解決後往東方走，可以找到一個灰色半毀的城鎮，他會要求我們幫他蓋一座<nuxt-link to="/building/Market">市集</nuxt-link>。
            </li>

            <li>
              爆經濟的同時，馬上把注意力轉移到支援左側的橘色盟友馬爾尼，但中間有一座青色的陣地阻擋我和盟友間的道路，將之清除掉才能對橘色的馬爾尼支援，打的同時注意敵方的火砲和<nuxt-link to="/units/Mangonel">投石車</nuxt-link>。（如果怕時間來不及打下陣地去支援，可以在接管城鎮時生一艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>從水路運<nuxt-link to="/units/Villager">村民</nuxt-link>和軍隊過去幫忙防衛，但為了避免後顧之憂該陣地還是要打掉）之後把大部份的軍隊都派到橘色那邊支援，標準難度是不用太特別保護，但高難度之下青色和黃色會夾攻讓橘色撐不住，最好在時限15分左右的時候就要過去支援，並派<nuxt-link to="/units/Villager">村民</nuxt-link>幫忙蓋一座城堡和幾座<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>作為防禦陣地，並以<nuxt-link to="/units/Coustillier">馬上輕裝兵 </nuxt-link>和火槍兵協同防守。（<nuxt-link to="/units/Villager">村民</nuxt-link>把必要<nuxt-link to="/building">建築</nuxt-link>蓋好後就直接在那邊挖礦）同時自家也要下方蓋一座城堡並派些<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>和騎兵防守，黃色的法蘭西軍隊會定時派兵往兩個方向進攻。
            </li>

            <li>
              過了20分後，如果我們達成幫灰色建市集的要求，他會要求我們付1000金，付了就會有間諜幫助我們（實質上我方自動研發間諜<nuxt-link to="/techs">科技</nuxt-link>）。有了這個，敵人的行動基本一目了然。而當我們派軍隊探到康比涅正下方的橋時，會有派5隻<nuxt-link to="/units/Petard">炸藥桶</nuxt-link>毀掉橋的子任務，派過去後黃色的法蘭西軍隊只剩右側這條路能進攻，可以在此路口構築防禦工事兼進攻的前線基地。
            </li>

            <li>
              準備好大批的馬上輕裝兵 、火槍兵和火砲就可以進攻，建議從東南側（炸斷橋的那邊）進攻，防守比較薄弱且只要炸破牆就能直取我們目標。只要擊殺貞德，整個戰役就宣告破關。而如果在擊殺貞德前打敗法蘭西軍隊，可以獲得成就「閉嘴，<nuxt-link to="/units/hero/La_Hire">拉海爾</nuxt-link>！」。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                這個戰役雖然大致可以看成貞德戰役第五關「圍攻巴黎」勃根地側的行動，但兩個戰役在史實上都只有部份類似。史實上貞德的志願軍到康比涅後曾經嘗試到蘇瓦松襲擊勃根地派，但蘇瓦松的居民拒絕她入城並在隔日與勃根地同盟，貞德因此改變計劃去襲擊馬爾尼的勃根地派，但勃根地的援軍遠遠超乎預期，故只好下領撤退並親自殿後，然而康比涅的<nuxt-link to="/building/Gate">城門</nuxt-link>在法軍完全撤退前就關閉，貞德和剩餘的<nuxt-link to="/civs/Franks">法國</nuxt-link>軍隊無法進城因此被勃根地俘虜。
              </li>
              <li>
                在「圍攻巴黎」中，在進攻巴黎失敗後省略了攻擊蘇瓦松和馬爾尼的部份，故事最後敘述直接在城外因為無法進城被捕；在這戰則是我們需要進軍康比涅，要破城才能俘虜躲在城內的貞德。
              </li>
              <li>
                為了表示俘虜貞德，將貞德擊落馬下後，當場有一個屬於我方的「<nuxt-link to="/units/hero/Joan_the_Maid">農家女貞德</nuxt-link>」並有高達1000的生命值以防止被敵軍擊殺。
              </li>
              <li>
                因為視角的不同，相對於法蘭西來說是個貞德是個拯救法國的<nuxt-link to="/units/hero">英雄</nuxt-link>烈士，但在故事最後以好人菲利普的視角來看，貞德就只是一個昧於政治現實的傻瓜。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">聖女隕落</div>
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
              <nuxt-link to="/batt/Tamerlane">大公爵</nuxt-link>
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
              勃根地第六章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/The_Hook_and_Cod_Wars">鉤子和鱈魚之戰</nuxt-link></td>
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
