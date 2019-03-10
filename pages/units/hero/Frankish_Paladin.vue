<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>法蘭克聖騎士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>法蘭克聖騎士</strong>是《世紀帝國 II HD:
            <nuxt-link to="/games/aok">帝王世紀</nuxt-link>》中的一名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，只能在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到。法蘭克聖騎士有類似<nuxt-link to="/units/Knight"
              >騎士</nuxt-link
            >的外貌也會受到<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >的加成影響。由於他屬於<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link>資料片後)
            。
          </p>
          <p></p>
        </div>
        <div></div>
        <div></div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              法蘭克聖騎士最初被設置為<nuxt-link to="/civs/Franks"
                >法蘭克人</nuxt-link
              >的獨特單位，然後被<nuxt-link to="/units/Throwing_Axeman"
                >擲斧兵</nuxt-link
              >所取代。然後將法蘭克聖騎士被列為英雄。
            </li>
            <li>
              法蘭克聖騎士很可能是以<nuxt-link to="/units/hero/Charlemagne"
                >查理曼大帝</nuxt-link
              >的“聖騎士”作為模板設計的。 法蘭克聖騎士以<nuxt-link
                to="/civs/Franks"
                >法國</nuxt-link
              >歷史上的傳奇人物而聞名。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-5">
              <gallery
                ><img
                  class="hg"
                  width="250"
                  src="~assets/Constablerichemont.png"
                  alt=""
              /></gallery>
              <p><em>戰役編輯器中的法蘭克聖騎士。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                法蘭克聖騎士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Constablerichemonticon.png"
                  width="80"
                  alt=""
                />
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
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              ><br /><nuxt-link to="/units/hero">英雄</nuxt-link>
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
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">175</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">15(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.32</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
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
