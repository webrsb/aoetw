<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>席德</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>席德</strong>是《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一名<nuxt-link to="/units/Infantry_Units">步兵英雄</nuxt-link
            >，可以在<nuxt-link to="/batt/El_Cida">席德戰役</nuxt-link
            >系列和<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到。現實中的席德曾是<nuxt-link to="/civs/Spanish"
              >西班牙</nuxt-link
            >貴族和軍事領袖。他在卡斯蒂利亞的<nuxt-link
              to="/units/hero/King_Sancho"
              >桑喬國王</nuxt-link
            >下的軍隊服役，之後被放逐到摩爾人的土地，以及他最終的死亡的故事，都在《<nuxt-link
              to="/games/aoc"
              >世紀帝國II:征服者入侵</nuxt-link
            >》的席德戰役有所描述。由於他屬於<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link
            >資料片後)。席德在戰役的後段會更名為羅德里高·迪亞茲·席德並騎者馬，當然他們在戰役中都一定要生存下來。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" width="200" src="~assets/Elcid.png" alt=""
              /></gallery>
              <p><em>戰役編輯器中的席德(左)和騎馬的席德。</em></p>
            </div>
            <div class="col-md-5">
              <gallery
                ><img
                  class="imgn hg"
                  width="280"
                  src="~assets/Elcidtournament.png"
                  alt=""
              /></gallery>
              <p>
                <em
                  >席德在戰役"手足相殘"要在競技場上證明實力以獲得國王的信任。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                席德
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Elcidicon.png" width="80" alt="" />
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
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
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
            <td class="unit4">330</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">13(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+3
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
