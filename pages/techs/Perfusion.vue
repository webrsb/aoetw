<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>井噴</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>井噴</b>(2013版稱<b>灌注士氣</b>)是<nuxt-link to="/civs/Goths"
              >哥德</nuxt-link
            >的<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            ><nuxt-link to="/techs/untech">特殊科技</nuxt-link>，可於<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發，這項<nuxt-link to="/techs">科技</nuxt-link>提高了<nuxt-link
              to="/building/Barracks"
              >軍營</nuxt-link
            >的工作速度100%(包括科技研發)。
          </p>
        </div>
        <h3><strong>戰術要點</strong></h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              帝王時代的哥德需要大量的單位來壓制對手，所以這幾乎是一個必須研發的科技。
            </li>
            <li>
              與另一個特殊科技<nuxt-link to="/techs/Anarchy"
                >無政府狀態</nuxt-link
              >配合，軍營可以在一分鐘裡面生產11個<nuxt-link to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >，這是非常具有破壞力的優勢。
            </li>
            <li>
              整個軍營的速度都加快了，那表示不僅僅是<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >可以快速生產，包括克制<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >的<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >，擁有<nuxt-link to="/civs/Italians">義大利</nuxt-link
              >同盟時的<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >也是。(<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >甚至只需要3.5秒的訓練時間)
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
              >可以增加井噴的研發速度(+25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            像哥特這樣經常遷徙的民族有一定能力迅速將軍隊投入戰場。他們的整個文明在某種意義上來說就是一支軍隊。哥德的年輕人在很小的時候就學會了戰士的技能。整體男性人口在需要時可在幾個小時內成為戰士。如果可能的話，對手要試著不讓哥德的部隊靠近我方部隊，如果他們確實慢慢接近，也不要對抗他們盡量拉打或撤退。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">井噴</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  alt=""
                />
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
            <td class="unit3">文明</td>
            <td class="unit4"><nuxt-link to="/civs/Goths">哥德</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">軍營的工作速度增加100%</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
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
