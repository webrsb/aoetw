<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>王通</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>王通</b>是個<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，在《<nuxt-link to="/games/aor">世紀帝國II：王者崛起</nuxt-link
            >》資料片中只能在地圖編輯器裡找的到。
          </p>
          <p>
            在遊戲中王通的外貌是<nuxt-link to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >，不能被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
          <p>
            王通為<nuxt-link to="/civs/Chinese">中國</nuxt-link
            >明朝的將領，曾跟隨明成祖北伐。明宣宗宣德二年，<nuxt-link
              to="/units/hero/Le_Loi"
              >黎利</nuxt-link
            >攻打清化。王通以銳兵五千人出其不意偷襲獲勝，斬殺萬餘人。<nuxt-link
              to="/units/hero/Le_Loi"
              >黎利</nuxt-link
            >恐懼欲撤軍，而明軍諸將請求乘勝追擊。王通猶豫三日不出擊，此時黎利恢復元氣，開始四處進攻，並分兵占領昌江、諒江。王通均不出兵進攻。此時，黎利求和，王通將其求和書呈獻給明宣宗。當時恰逢柳升中伏全軍覆沒，沐晟部隊在抵達水尾縣後無法前進。王通更加害怕，於是急忙將黎利的求和書和謝罪表一同上呈朝廷。同年十月，王通率領官吏軍民出城，與黎利立壇結盟，雙方約定撤兵。王通送給黎利錦羅綢緞，黎利也回贈貴重財寶為謝。
          </p>
          <p>
            次年，王通返回京師，當時群臣交相彈劾，論死下獄，被奪去鐵券，全家去籍。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                王通
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Wangtongicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
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
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">18(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>+3
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
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
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
      </div>
    </div>
    <div class="wiki" style="margin-top: 5px;">
      <div style="float: left;">
        <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
      </div>
      <div style="margin-left: 60px;">
        維基百科上的王通
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a href="http://tinyurl.com/yabbtvah" target="_blank"
                >王通</a
              ></strong
            ></i
          >
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
