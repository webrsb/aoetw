<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>雅爾</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>雅爾</strong>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》中的一名<nuxt-link to="/units/Cavalry_Units">騎兵英雄</nuxt-link
            >，他是以<nuxt-link to="/civs/Vikings">挪威</nuxt-link
            >或丹麥指揮官作為模板。他擁有<nuxt-link to="/units/Tarkan"
              >答剌罕騎兵</nuxt-link
            >的外觀，雖然手裡拿火把但攻擊方式卻類似<nuxt-link
              to="/units/Throwing_Axeman"
              >擲斧兵</nuxt-link
            >是丟斧頭，雅爾受所有<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >的加成影響。由於他屬於<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
          <p>
            雅爾著名場景是在<nuxt-link to="/batt">戰役</nuxt-link
            >"約克（865）"中，作為登陸隊伍的一部分，玩家必須在異教徒軍隊抵達之前在不列顛群島上建立一個基地。雅爾應該用來打<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >，因為他不能被招降，而且他的高攻擊可以快速殺死他們。
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
                雅爾
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Jarlicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
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
            <td class="unit4">140</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">18(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+5
              <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+6 <br />對<nuxt-link to="/armor/Armor_Class_Castle"
                >城堡</nuxt-link
              >+5 <br />對<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
              ><nuxt-link to="/building/Gate">城門</nuxt-link>+5
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.13</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">7</td>
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
