<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>聚居堡壘</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>聚居堡壘</b>是<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後跟<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
            >同盟的<nuxt-link to="/civs">文明</nuxt-link>的<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >工作速率快25%。(<nuxt-link to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >)
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              聚居堡壘是柏柏玩家在上<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >後最需要研發的<nuxt-link to="/techs">科技</nuxt-link
              >，因為它可以受益整個柏柏玩家同盟，加速城堡<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >生產速度。即使柏柏玩家或同盟不生產特殊單位，能更快速生產
              <nuxt-link to="/units/Petard">爆炸桶</nuxt-link>和<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >也是一大利多。尤其適合那些喜歡在敵對基地旁壓城堡的玩家，讓他們能更快更有效的攻擊對方。
            </li>
            <li>
              另外一個有趣的點是如果同盟中有兩個以上的柏柏玩家研發聚居堡壘效果是會疊加的。這讓生產大量的<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >、<nuxt-link to="/units/Petard">爆炸桶</nuxt-link
              >和特殊單位變得相當有效率。甚至可讓研發
              <nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link
              >的<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
              >生產速度再疊加。同樣地聚居堡壘也能搭配<nuxt-link to="/civs/Turks"
                >土耳其</nuxt-link
              >的團隊加分(<nuxt-link to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >訓練速度加快20%)，讓能生產城堡火藥單位的文明生產速度加快(如
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >)
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
              >能夠加速聚居堡壘的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          Kasbah是阿拉伯語中堡壘的意思，通常分布在北非馬格里布地區，也就是<nuxt-link
            to="/civs/Berbers"
            >柏柏人</nuxt-link
          >的區域。
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">聚居堡壘</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">城堡工作速率快25%。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的聚居堡壘
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://en.wikipedia.org/wiki/Kasbah"
                    target="_blank"
                    >Kasbah</a
                  ></b
                ></i
              >
            </div>
          </div>
        </div>
      </div>
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
