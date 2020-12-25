<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>馬(已訓化)</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>馬(已訓化)</b>在其他<nuxt-link to="/units">單位</nuxt-link
            >靠近的時候會自動轉換陣營顏色，如同大地之母單位一樣。馬不能提供任何<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >。 在《<nuxt-link to="/games/aoc">世紀帝國II：征服者入侵</nuxt-link
            >》中有三個重要的出場<nuxt-link to="/batt">戰役</nuxt-link
            >，分別是<nuxt-link to="/batt/Montezumaa">蒙提祖馬</nuxt-link
            >的<nuxt-link to="/batt/Quetzalcoatl">蛇鳥之神</nuxt-link
            >和<nuxt-link to="/batt/The_Boiling_Lake">沸騰的湖</nuxt-link
            >，以及<nuxt-link to="/units/hero/Attila_the_Hun">阿提拉</nuxt-link
            >的<nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link>。
          </p>
          <p>
            在<nuxt-link to="/batt/Quetzalcoatl">蛇鳥之神</nuxt-link
            >玩家可以選擇從<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
            >科爾特斯的馬圈收集20匹馬並關到玩家的馬圈來獲得勝利；在沸騰的湖玩家同樣可以在地圖上蒐集馬匹並帶到<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >前的祭壇，系統會自動將他們轉換成<nuxt-link to="/units/Tarkan"
              >精銳答剌罕騎兵</nuxt-link
            >。<br />上帝之鞭戰役中西徐亞人為了感謝<nuxt-link
              to="/batt/Attila_the_Huna"
              >阿提拉</nuxt-link
            >從西羅馬帝國的囚禁下救了他們的公主，蒐集10匹馬並帶到指定地點會給玩家10隻<nuxt-link
              to="/units/Mangudai"
              >蒙古突騎</nuxt-link
            >。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                馬(已訓化)
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Horse-icon-aoe2.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">首次出現</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>量
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
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
              <nuxt-link to="/elements/Hit_points">跑速</nuxt-link>
            </td>
            <td class="unit4">1.2</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">2</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alledmap',
  components: {}
}
</script>
<style></style>
