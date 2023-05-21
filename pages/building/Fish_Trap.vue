<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>漁網</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>漁網</b>是<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的經濟<nuxt-link to="/building">建築</nuxt-link
            >之一，在建成<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >後就可以使用。漁網提供715<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >，只有<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >能夠建築和採集它。
          </p>
          <h3>戰術技巧</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              漁網同時只能被一艄<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >採集。漁網非常脆弱而且並不會阻擋友方或敵方的單位；即使是敵方的<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >，簡單的對漁網點右鍵也可以採集。
            </p>
            <p>
              與<nuxt-link to="/building/Farm">農田</nuxt-link
              >不同，你不能在<nuxt-link to="/building/Dock">港口</nuxt-link
              >累積備用漁網。
            </p>
            <p>
              漁網應該盡可能地擺在<nuxt-link to="/building/Dock">港口</nuxt-link
              >旁邊，這樣就能縮短<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >的移動距離，進而最大化生產力。<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >會自己移動到漁網的左側來工作，因此把漁網建在<nuxt-link
                to="/building/Dock"
                >港口</nuxt-link
              >的右側會更進一步的縮短<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >的移動時間。
            </p>
            <p>
              漁網和<nuxt-link to="/building/Farm">農田</nuxt-link
              >的生產力大致相當，但是漁網的成本較為低廉。儘管如此，漁網是最不常被使用的建築之一。在少數情況下，例如在島上的玩家已經沒有多餘的空間，周圍也沒有魚，但仍然需要在後帝王時代收集食物時，漁網才可能被考慮。除此之外，相比<nuxt-link
                to="/units/Villager"
                >農夫</nuxt-link
              >，玩家更難以保護<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >。<nuxt-link to="/units/Villager">農夫</nuxt-link
              >可以躲進<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >或是用牆來保護，但是<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >會輕易地被擊沉。
            </p>
            <p>
              然而，有兩個<nuxt-link to="/civs">文明</nuxt-link
              >的漁網還是很有用的：
            </p>
            <ul>
              <li>
                <nuxt-link to="/civs/Japanese">日本</nuxt-link
                >：更高的<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                >工作速度，使得<nuxt-link to="/civs/Japanese">日本</nuxt-link
                >的漁網遠比<nuxt-link to="/building/Farm">農田</nuxt-link
                >更有效率。
              </li>
              <li>
                <nuxt-link to="/civs/Malay">馬來</nuxt-link
                >：漁網只消耗67<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >(只比<nuxt-link to="/building/Farm">農田</nuxt-link>多7)
                而且提供無限的食物。這使得理論上的漁網效率(食物/木頭比)是無限，因此在後期遊戲中是非常不錯的選擇。
              </li>
            </ul>
          </div>
        </div>
        <h3>農田產量表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Villager">農夫</nuxt-link
            >種植的速度比<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >從魚網捕魚的速度稍微快一些，但是一直到<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >後期，農夫都還是比較不划算的，(漁船自己消耗的木頭也算在內)。但他們倆實際收集資源的速度也要看<nuxt-link
              to="/building/Farm"
              >農田</nuxt-link
            >與<nuxt-link to="/building/Mill">磨坊</nuxt-link>和漁網與<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >之間距離不同而定。
          </p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td><nuxt-link to="/building">建築物</nuxt-link></td>
            <td>整體食物提供</td>
            <td>
              每個<nuxt-link to="/resource/Wood">木材</nuxt-link>生產的食物
            </td>
          </tr>
          <tr>
            <td class="tta1">農田</td>
            <td class="tta2">175</td>
            <td class="tta3">2.92</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                class="gg"
                src="~assets/horse_collar.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>+75)
            </td>
            <td class="tta2">250</td>
            <td class="tta3">4.17</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                class="gg"
                src="~assets/heavy_plow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link>+125)
            </td>
            <td class="tta2">375</td>
            <td class="tta3">6.25</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                class="gg"
                src="~assets/crop_rotation.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>+175)
            </td>
            <td class="tta2">550</td>
            <td class="tta3">9.17</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/FishingShipIcon.png"
                width="30"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
            </td>
            <td class="tta2">715</td>
            <td class="tta3">7.15</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/FishingShipIcon.png"
                width="30"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>+
              <img
                class="gg"
                src="~assets/fish_trap.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link>
            </td>
            <td class="tta2">715</td>
            <td class="tta3">4.09</td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代，漁網擁有+20%/30%/40%的<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >加成。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：研究<nuxt-link
                to="/techs/Gillnets"
                >流刺網</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代減少15%/20%的成本。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link
                to="/techs/Gillnets"
                >流刺網</nuxt-link
              >減少50%的成本。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代，<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
              >的建造和採集漁網的速度加快5%/10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >：不需要港口就可以建造漁網。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link
              >：漁網減少33%成本而且提供無限食物。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研究<nuxt-link
                to="/techs/Gillnets"
                >流刺網</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代減少15%/20%的成本。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>漁網建造時間需要15秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>漁網建造時間需要53秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>漁網現在建造時間需要40秒。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            風乾的魚和鹹魚是中世紀非常有價值的商品，因為它們是可以長期保存和攜帶的蛋白質來源。冰島和挪威的鱈魚是一個特別寶貴的資源。捕魚技術的改進包括用魚網捕撈沿岸<nuxt-link
              to="/units/animal/fish"
              >魚類</nuxt-link
            >和洄遊型魚類。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                漁網
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/fish_trap.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">經濟</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">需要建設</td>
            <td class="unit4">
              <nuxt-link to="/building/Dock">港口</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">1x1</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">1</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由企鵝和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Fishtraps.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>漁網應該盡可能地蓋靠近碼頭。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_fish_trap.png"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>漁網的各種樣子(建造中/損壞/閒置動畫)。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbuilding' })

export default {
  components: {}
}
</script>
<style></style>
