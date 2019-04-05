<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>希臘之火</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>希臘之火</b>是<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
            >射程+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              希臘之火可讓<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >的<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >擁有+40%更遠的開火距離(一般為2.49)。這不僅讓<nuxt-link
                to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >能更有效地摧毀<nuxt-link to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >，同時也能夷平那些<nuxt-link to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >不能應付的沿岸基礎設施。希臘之火也讓火戰船在淺灘上對陸地單位的攻擊更加致命。
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
              >能夠加速希臘之火的研究時間(快25%)。
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
            <li>希臘之火成本為：250F/450G。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>4.8改版後希臘之火成本改為：250F/300G。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-6">
              <p>
                希臘之火是東羅馬帝國所利用的一種可以在水上燃燒的液態燃燒劑，為早期熱兵器，主要應用於海戰中，「希臘之火」或「羅馬火」只是阿拉伯人對這種恐怖武器的稱呼，東羅馬自己則稱之為「海洋之火」、「流動之火」、「液體火焰」、「人造之火」和「防備之火」等等。
              </p>
            </div>
            <div class="col-md-6">
              <img
                src="~assets/Greekfire-madridskylitzes1.jpg"
                width="300"
                alt=""
              />
            </div>
            <div class="col-md-12">
              <p>
                根據文獻記載，希臘之火多次為東羅馬帝國的軍事勝利作出頗大的貢獻，一些學者和歷史學家認為它是東羅馬帝國能持續千年之久的原因之一，希臘之火的配方現已失傳，成份至今仍是一個謎團，而據當時受希臘之火所傷的十字軍所記述：「每當敵人用希臘之火攻擊我們，所做的事只有屈膝下跪，祈求上天的拯救。」那段引文足以說明希臘之火的威力
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">希臘之火</div>
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
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
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">火戰船射程+1。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的希臘之火
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a href="http://tinyurl.com/yaawj4q2" target="_blank"
                    >希臘火</a
                  ></strong
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
