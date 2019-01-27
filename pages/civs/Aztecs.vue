<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿茲特克</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            阿茲特克是中南美洲的步兵文明，加入於征服者入侵。他的特殊單位是<nuxt-link
              to="/units/Jaguar_Warrior"
              >豹勇士</nuxt-link
            >，是阿茲特克最高級的戰士，手上拿著鑲滿銳利的黑曜石木棒，對付其他步兵特別有效。城堡時代特殊科技
            <nuxt-link to="/techs/Atlatl"></nuxt-link
            >擲矛器是獵人和勇士使用的工具，將讓<nuxt-link
              to="/units/Elite_Skirmisher"
            ></nuxt-link
            >矛兵將+1射程與+1攻擊，帝王時代的特殊科技
            <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
            >，讓步兵更為強大。
          </p>
          <p>
            阿茲特克的村民以努力工作著稱，他們有額外5的資源攜帶量。作為一個高度化軍事文明，所有軍事建築生產都更快，而殘忍的祭祀信仰讓他們的遺跡可以額外生產更多的黃金。身為南美洲文明，阿茲特克沒有馬匹或火藥。但有非常好用的
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>。
          </p>
          <p>
            阿茲特克是全遊戲中單挑最強的文明之一，詳見:<nuxt-link
              to="/civs/bestciv"
              >文明優劣分析</nuxt-link
            >
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            阿茲特克是南美洲文明，因此沒有騎馬單位。但有非常強大的步兵，雖然沒有戟兵，不過有遊戲中最強大的僧侶。也有不錯的弓箭手，只是缺乏致命的拇指環，阿茲特克的
            <nuxt-link to="/units/Monk">僧侶</nuxt-link
            >只要研發一項科技都能額外獲得5點的生命值，讓非常脆弱的僧侶變得相當耐操。他們的鷹勇士為南美三國攻擊最強的(雖然實用度來說，馬雅與印加的似乎更為好用)阿茲特克的經濟非常好，讓他們在初期就可以穩定發展強大經濟。而海軍是全遊戲中最弱的文明之一，是唯一不能升級到
            <nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
            >的文明。因此必須依靠
            <nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link
            >與<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>來打海戰。
          </p>
          <h3>特殊單位</h3>
          <p>
            <img class="gg" src="~assets/JaguarWarriorIcon.jpg" /><nuxt-link
              to="/units/Jaguar_Warrior"
              >豹勇士</nuxt-link
            >:反步兵的步兵
          </p>
          <h3>特殊科技</h3>
          <p>
            <img class="gg" src="~assets/CastleAgeUnique.png" /><nuxt-link
              to="/techs/Atlatl"
              >擲矛器</nuxt-link
            >:矛兵額外獲得+1攻擊，+1射程
          </p>
          <p>
            <img class="gg" src="~assets/Unique-tech.jpg" /><nuxt-link
              to="/techs/Garland_Wars"
              >榮冠戰爭</nuxt-link
            >:所有步兵額外獲得+4攻擊
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Villager">村民</nuxt-link>攜帶資源量+5
            </li>
            <li>所有軍事單位訓練快15%</li>
            <li>
              每研發一個
              <nuxt-link to="/building/Monastery">修道院</nuxt-link
              >科技，<nuxt-link to="/units/Monk">僧侶</nuxt-link>+5HP
            </li>
            <li>遊戲初始多50黃金</li>
            <li>
              <strong>團隊加分:</strong
              ><nuxt-link to="/Relic">遺跡</nuxt-link>生產黃金快33%
            </li>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/azt">阿茲特克科技樹</nuxt-link></em>
        </div>
        <br />
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>免費織布被移除，但多50黃金。</li>
            <li>豹勇士多+1遠防。</li>
            <li>
              特殊科技引入，<nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link
              >:矛兵額外獲得+1攻擊，+1射程
            </li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <nuxt-link to="/img/Wonderaztecs.png"
                ><img class="imgn hg" src="~assets/Wonderaztecs.png" alt=""
              /></nuxt-link>
              <p><em>大神殿</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#e6992c;">
              <div class="unititle"><nuxt-link to="#">阿茲特克</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/330px-Jal-ixco.jpg" width="300px" alt="" />
                <p><em>西班牙征服者跟在1522年征服哈利斯科</em></p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#e6992c;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築風格</td>
            <td class="unit4">美洲</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">步兵和僧侶</td>
          </tr>
          <tr>
            <td class="unit3">特殊單位</td>
            <td class="unit4">
              <img class="gg" src="~assets/JaguarWarriorIcon.jpg" /><nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">黑暗快攻跳城堡，僧侶配鷹勇士</td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/CastleAgeUnique.png" /><nuxt-link
                to="/techs/Atlatl"
                >擲矛器</nuxt-link
              >
              <br />
              <img class="gg" src="~assets/Unique-tech.jpg" /><nuxt-link
                to="/img/techs/Garland_Wars"
                >榮冠戰爭</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allciv',
  components: {}
}
</script>
<style></style>
