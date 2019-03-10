<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>神弓手</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>神弓手</strong>是《世紀帝國 II HD:
            <nuxt-link to="/games/aok">帝王世紀</nuxt-link
            >》中的一名徒步<nuxt-link to="/units/Archer_Units"
              >弓兵英雄</nuxt-link
            >，可以在許多<nuxt-link to="/batt">戰役</nuxt-link
            >和戰役編輯器中找到。現實中的神弓手是講努比亞弓箭手，他們以專業的槍法而聞名，據說可以弓箭精準射中敵人眼睛因此得名。神弓手的外觀是<nuxt-link
              to="/units/Arbalest"
              >強弩兵</nuxt-link
            >，會受<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >和其他加成的影響，由於它屬於<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link>資料片後)
            。
          </p>
          <p></p>
        </div>
        <h3>出現場景</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/batt/Saladina">沙拉丁</nuxt-link
              >的第四個戰役"耶路撒冷攻城戰"，玩家一開始會有幾名神弓手作防守用。
            </li>
            <li>
              在沙拉丁最後戰役"獅子與惡魔"中玩家也會有一些神弓手做防守工作。
            </li>
            <li>
              在<nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link
              >最後戰役"沉睡的皇帝"中，沙拉丁變成玩家敵人並有幾名神弓手在他的軍隊中。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                神弓手
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Archersoftheeyesicon.png" width="80" alt="" />
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
              <nuxt-link to="">弓兵<br />英雄</nuxt-link>
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
            <td class="unit4">55</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              7(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>+2
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1</td>
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
