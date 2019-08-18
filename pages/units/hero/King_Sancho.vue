<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>桑喬國王</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>桑喬國王</strong>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》中的一名<nuxt-link to="/units/hero">英雄</nuxt-link
            >，也出現在<nuxt-link to="/batt">戰役</nuxt-link
            >"兄弟鬩牆"與他的兄弟阿方索對決，他同樣能在戰役編輯器中使用。桑喬國王不能攻擊，但移動速度快而且有很大的<nuxt-link
              to="/elements/Line_of_Sight"
              >視野</nuxt-link
            >範圍。由於他屬於英雄單位，因此不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
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
                桑喬國王
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Kingsanchoicon.png" width="80" alt="" />
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
              <nuxt-link to="/units/edmap/King">國王</nuxt-link><br /><nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
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
            <td class="unit4">75</td>
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
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.32</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div>
          <div></div>
        </div>
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
