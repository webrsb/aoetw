<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火藥單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>火藥單位</b>是一種<nuxt-link to="/units/Archer_Units"
              >遠程</nuxt-link
            ><nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
            >，使用火藥和<nuxt-link to="/techs/Chemistry">化學</nuxt-link
            >物質來發射炮彈，而不是使用傳統的弓箭武器。在後期遊戲中，它們的表現都十分突出。這樣強大的單位，大多在後<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >中可以訓練。
          </p>
          <br />
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            火藥單位(非<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >)在帝王時代的<nuxt-link to="/building/University">學院</nuxt-link
            >研發化學後可以訓練。<nuxt-link to="/units/Janissary"
              >土耳其火槍兵</nuxt-link
            >、<nuxt-link to="/units/Conquistador">征服者</nuxt-link
            >、<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>、<nuxt-link
              to="/units/Turtle_Ship"
              >龜甲船</nuxt-link
            >這些屬於<nuxt-link to="/civs">文明</nuxt-link
            >的特殊火藥單位則可以在不用研發化學的前提下在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >訓練。
          </p>
          <p>
            在"失落的帝國"資料片前，所有中東文明都可以使用普通的火藥單位，這意味著中世紀該地區的科學進步顯著。<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克人</nuxt-link
            >，<nuxt-link to="/civs/Huns">匈奴人</nuxt-link>，<nuxt-link
              to="/civs/Incas"
              >印加人</nuxt-link
            >和<nuxt-link to="/civs/Mayans">馬雅人</nuxt-link>必須靠<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >才能擁有火藥單位。
          </p>
        </div>
        <h3>火藥文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：火藥單位<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >+25%、研發火藥相關<nuxt-link to="/techs">科技</nuxt-link
              >便宜50%、免費擁有化學、火藥單位訓練效率+20%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：火藥單位便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：<nuxt-link
                to="/techs/untech"
                >特殊科技</nuxt-link
              ><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link
              >，讓火藥單位均受益於<nuxt-link to="/techs/Ballistics"
                >彈道學</nuxt-link
              >，使火藥單位針對移動中的單位也有較好的命中率，單位<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >成本便宜15％。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：彈道學對<nuxt-link to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >有效(遠距離武器更快、更精準)、火藥單位<nuxt-link
                to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >+ 15%。
            </li>
          </ul>
        </div>
        <h3>火藥單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">火藥單位</td>
              <td width="9%">
                <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
              </td>
              <td width="9%">攻擊</td>
              <td width="9%">防禦</td>
              <td width="9%">射程</td>
              <td width="9%">
                <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
              </td>
              <td width="9%">
                <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
              </td>
              <td width="9%">速度</td>
              <td width="9%">訓練時間</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HandCannoneerIcon.png" /><nuxt-link
                  to="/units/Hand_Cannoneer"
                  >火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">34</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/BombardCannonIcon.png" /><nuxt-link
                  to="/units/Bombard_Cannon"
                  >火砲</nuxt-link
                >
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">40</td>
              <!--攻擊!-->
              <td class="tta3">2/5</td>
              <!--防禦!-->
              <td class="tta3">12</td>
              <!--射程!-->
              <td class="tta3">6.5</td>
              <!--射速!-->
              <td class="tta3">14</td>
              <!--視野!-->
              <td class="tta3">0.7</td>
              <!--速度!-->
              <td class="tta3">56</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CannonGalleonIcon.png" /><nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">35</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">13</td>
              <!--射程!-->
              <td class="tta3">10</td>
              <!--射速!-->
              <td class="tta3">15</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
              <td class="tta3">46</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CannonGalleonIcon.png" /><nuxt-link
                  to="/units/Elite_Cannon_Galleon"
                  >精銳火砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">45</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">15</td>
              <!--射程!-->
              <td class="tta3">10</td>
              <!--射速!-->
              <td class="tta3">17</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
              <td class="tta3">46</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TurtleShipIcon.png" /><nuxt-link
                  to="/units/Turtle_Ship"
                  >龜甲船</nuxt-link
                >
              </td>
              <td class="tta3">200</td>
              <!--生命值!-->
              <td class="tta3">50</td>
              <!--攻擊!-->
              <td class="tta3">6/5</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">6.04</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
              <td class="tta3">50</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TurtleShipIcon.png" /><nuxt-link
                  to="/units/Turtle_Ship"
                  >精銳龜甲船</nuxt-link
                >
              </td>
              <td class="tta3">300</td>
              <!--生命值!-->
              <td class="tta3">50</td>
              <!--攻擊!-->
              <td class="tta3">8/6</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">6.04</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
              <td class="tta3">50</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/JanissaryIcon.png" /><nuxt-link
                  to="/units/Janissary"
                  >土耳其火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">21</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/JanissaryIcon.png" /><nuxt-link
                  to="/units/Janissary"
                  >精銳土耳其火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">22</td>
              <!--攻擊!-->
              <td class="tta3">2/0</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">21</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ConquistadorIcon.png" /><nuxt-link
                  to="/units/Conquistador"
                  >征服者</nuxt-link
                >
              </td>
              <td class="tta3">55</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">24</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ConquistadorIcon.png" /><nuxt-link
                  to="/units/Conquistador"
                  >精銳征服者</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">18</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">24</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/OrganGunIcon.png" /><nuxt-link
                  to="/units/Organ_Gun"
                  >風琴砲</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">2/4</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
              <td class="tta3">21</td>
              <!--訓練時間!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/OrganGunIcon.png" /><nuxt-link
                  to="/units/Organ_Gun"
                  >精銳風琴砲</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">20</td>
              <!--攻擊!-->
              <td class="tta3">2/6</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
              <td class="tta3">21</td>
              <!--訓練時間!-->
            </tr>
          </table>

          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="180"
                  src="~assets/Gunpowder.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p>
                  <em
                    >所有火藥單位(<nuxt-link to="/games/ak">非洲王國</nuxt-link
                    >資料片)。</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit2',
  components: {}
}
</script>
<style></style>
