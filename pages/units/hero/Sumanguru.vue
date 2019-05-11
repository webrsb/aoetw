<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蘇曼古魯</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>蘇曼古魯</b>是個<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，在"非洲王國"資料片中的地圖編輯器中出現。他是以被描繪成民族史詩中的邪惡巫師之王的西非統治者SoumaoroKanté為模板。
          </p>
          <p>
            在遊戲中蘇曼古魯的外型是<nuxt-link to="/units/Cataphract"
              >聖騎兵</nuxt-link
            >。會受到所有<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >加成的影響。他不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
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
                蘇曼古魯
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sumanguruicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
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
            <td class="unit4">340</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">15(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>+3
            </td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.2</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的蘇曼古魯
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://en.wikipedia.org/wiki/Soumaoro_Kanté"
                    target="_blank"
                    >Soumaoro Kanté</a
                  ></b
                ></i
              >
            </div>
          </div>
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
