<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>神父</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>神父</b>是個變種僧侶單位，首次出現是在世紀帝國I，後來在<nuxt-link to="/games/af">世紀帝國II:非洲王朝</nuxt-link
            >》與羅馬士兵和重劍士一起回歸。神父出現在法蘭西斯科．阿爾梅達的"葡屬印度"等一些戰役中，也能在地圖編輯器找到。神父不能在一般遊戲
            中被玩家訓練。
          </p>
        </div>
        <h3>趣聞</h3>
        <div class="hrn1"></div>
        <ul>
            <li>當神父拿起遺跡後會變成玩家所屬文明的僧侶模樣。這同樣會發生在美洲僧侶或僧侶英雄上，例如英雄伊滿</li>
            <li>神父頭像依然使用原本僧侶的頭像。</li>
            <li>遊戲中僧侶招降聲音的運作方式是根據遊戲中首先播放的聲音來選擇全局的招降聲音。 例如，如果神父是第一個
              吟唱的人，那麼所有的僧侶單位，包括一般常見的僧侶，將在之後的遊戲部分使用“Wololo”作為招降聲音。 但是，如果
            一個普通的僧侶（或僧侶類型的任何其他單位）首先使用正常的招降聲音，那麼神父將使用常規的聲音進行招降。</li>
        </ul>

        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Priest.png"
                  alt=""
              /></gallery>
              <p><em>一群神父。</em></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">神父</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/MonkIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">
                <nuxt-link to="">單位介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">首次出現</td>
            <td class="unit4">
              <nuxt-link to="/techs/games/af">非洲王朝</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">信仰回復速度</nuxt-link>
            </td>
            <td class="unit4">62</td>
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
            <td class="unit3">防禦</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Monk">僧侶</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">11</td>
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
