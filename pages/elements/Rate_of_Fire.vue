<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>射速</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>射速</b>，即<nuxt-link to="/units">單位</nuxt-link>或<nuxt-link
              to="/building"
              >建築</nuxt-link
            >的<b>攻擊速度</b>，就是兩次攻擊之間的時間，例如射速為3的單位，每3秒會攻擊一次。因此射速率越低，攻擊就越快，所以越低的射速率越好。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在遊戲中，最常見的射速是2.03。有一些單位的攻擊速度非常快，最引人注意的是火船的射速高達0.25，是全遊戲最快的。而有幾個單位射速較慢，通常是<nuxt-link
              to="/elements/Attack"
              >攻擊力</nuxt-link
            >強的單位，例如<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >和<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
            >，而大多數的<nuxt-link to="/units/Trash_Unit">垃圾兵單位</nuxt-link
            >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵類</nuxt-link
            >的射速也比較低。
          </p>
        </div>
        <h3>列表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的列出不是2.03射速的單位
          <div class="n1">
            <table class="table-bordered" width="100%">
              <tr class="tta">
                <td width="80%">單位</td>
                <td width="20%">射速</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
                </td>
                <td class="tta3">0.25</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link>
                </td>
                <td class="tta3">1.73</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Knight">騎士</nuxt-link
                  >、（精銳）<nuxt-link to="/units/Magyar_Huszar"
                    >馬扎爾驃騎兵</nuxt-link
                  >
                </td>
                <td class="tta3">1.83</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                  >、（精銳）<nuxt-link to="/units/Samurai">日本武士</nuxt-link
                  >、（精銳）<nuxt-link to="/units/Plumed_Archer"
                    >羽毛箭射手</nuxt-link
                  >、（貴族）鐵騎、<nuxt-link to="/units/Condottiero"
                    >傭兵</nuxt-link
                  >、<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
                </td>
                <td class="tta3">1.93</td>
              </tr>
              <tr>
                <td class="tta1">
                  （精銳）<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                  >、（精銳）<nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>
                </td>
                <td class="tta3">2.13</td>
              </tr>
              <tr>
                <td class="tta1">
                  （精銳）<nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
                  >、（精銳）象弓手、（精銳）<nuxt-link
                    to="/units/Ballista_Elephant"
                    >弩砲象</nuxt-link
                  >
                </td>
                <td class="tta3">2.5</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link>
                </td>
                <td class="tta3">2.93</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>、<nuxt-link
                    to="/units/Skirmisher"
                    >矛兵</nuxt-link
                  >、<nuxt-link to="/units/Genoese_Crossbowman"
                    >熱那亞弩手</nuxt-link
                  >、（精銳）驃槍騎兵、<nuxt-link to="/units/Naval_Vessels"
                    >戰船</nuxt-link
                  >、<nuxt-link to="/building/Harbor">海港</nuxt-link
                  >、<nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>
                </td>
                <td class="tta3">3.05</td>
              </tr>
              <tr>
                <td class="tta1">
                  （精銳）<nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>
                </td>
                <td class="tta3">3.34</td>
              </tr>
              <tr>
                <td class="tta1">
                  （精銳）<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>
                </td>
                <td class="tta3">3.45</td>
              </tr>
              <tr>
                <td class="tta1">
                  （精銳）<nuxt-link to="/units/Janissary"
                    >土耳其火槍兵</nuxt-link
                  >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                </td>
                <td class="tta3">3.49</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
                </td>
                <td class="tta3">3.6</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>
                </td>
                <td class="tta3">3.65</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link>
                </td>
                <td class="tta3">3.84</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link>
                </td>
                <td class="tta3">5</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Mangonel">投石車</nuxt-link>、<nuxt-link
                    to="/units/Turtle_Ship"
                    >龜甲船</nuxt-link
                  >、<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>
                </td>
                <td class="tta3">6</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                </td>
                <td class="tta3">6.5</td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/units/Trebuchet">投石機</nuxt-link
                  >、（精銳）<nuxt-link to="/units/Cannon_Galleon"
                    >火砲戰船</nuxt-link
                  >
                </td>
                <td class="tta3">10</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allen',
  components: {}
}
</script>
<style></style>
