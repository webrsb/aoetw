<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火繩槍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            火繩槍是<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techsage/Imperial_Age"
              >帝王時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >對移動目標的命中率上升。火繩槍也會增加投射物的速度(+0.2)。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              火繩槍是葡萄牙玩家使用<nuxt-link
                to="/units/Hand_Cannoneer"
              ></nuxt-link
              >火槍兵和<nuxt-link to="/units/Organ_Gun"></nuxt-link
              >風琴炮作為部隊主力時最需要的科技。火繩槍可增加這些單位在遠程範圍的準確性，更有效的消滅來犯的近戰單位。火繩槍也可讓
              <nuxt-link to="/building/Bombard_Tower">火炮塔</nuxt-link
              >、<nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link
              >在防衛目標上能更有效的瞄準移動的單位。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速火繩槍的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>
              火繩槍給予<nuxt-link to="/building/Bombard_Tower"
                >火炮塔</nuxt-link
              >和<nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link
              >的投射物速度+0.5。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>火繩槍給火藥單位的投射物速度減低到75%。</li>
            <li>
              5.2改版後給予<nuxt-link to="/building/Bombard_Tower"
                >火炮塔</nuxt-link
              >和<nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link
              >的投射物速度被移除。
            </li>
            <li>
              5.7改版後給予<nuxt-link to="/building/Bombard_Tower"
                >火炮塔</nuxt-link
              >和<nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link
              >的投射物速度改為+0.2。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">火繩槍</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Unique-tech.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">700</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              火藥單位對移動目標的命中率上升。火炮戰船和火砲塔的投射物速度+0.2
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
