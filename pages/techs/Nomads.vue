<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>游牧</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>游牧</b>是<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/House">居住房舍</nuxt-link
            >(或是<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
            >包)被摧毀後人口上限數不會下降。<nuxt-link to="/building/Castle"
              >城堡</nuxt-link
            >和<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >則不受影響，被摧毀後還是會減少總人口數。游牧也許是所有特殊科技中最便宜的了，只需300<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              游牧的研發通常是玩家在大部分的軍隊攻擊敵方基地而敵方部隊不預期的出現在城鎮裡面，研發後即使<nuxt-link
                to="/building/House"
                >房屋</nuxt-link
              >被摧毀人口上限也不會減少，可以省下大量用來重建的木材花費。
            </li>
            <li>
              研發游牧後也可以自行摧毀房屋來增加<nuxt-link
                to="/units/Trade_Cart"
                >貿易車隊</nuxt-link
              >的效率，減少路程。但要注意是有沒有敵軍在房屋後面乘虛而入。
            </li>
            <li>
              從版本5.5開始即使只蓋一半的房屋也適用游牧的加成，這個小漏洞讓玩家可以最小的木材花費快速增加人口空間。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速游牧的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>游牧研發成本為300木材。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>游牧研發成本變為300木材150黃金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              自毀未建造的居住房舍基地不會受游牧效果影響而增加可容納的人口。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">游牧</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/building/House">居住房舍</nuxt-link
              >被摧毀後人口上限不會下降。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
