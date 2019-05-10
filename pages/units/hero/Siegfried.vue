<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>齊格非</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>齊格非</b>是世紀帝國II的地圖編輯器中的步兵英雄。 他以北歐神話中的傳奇英雄西格德為基礎，
            融合幾個斯堪地納維亞傳奇的中心人物，以及使用瓦格納的同名歌劇做為設計。</p><br>
            <p>在遊戲中齊格非的外表是劍兵勇士。 與其他步兵一樣，齊格非受到影響步兵的所有升級以及文明加成影響。
            作為英雄，他無法被招降並能自動回寫(自征服者入侵版本)。
          </p>
          
        </div>
        <div></div>
        <div></div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                齊格非
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ChampionIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link><br />
              <nuxt-link to="/units/hero">英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">240</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">13(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
             +2對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
