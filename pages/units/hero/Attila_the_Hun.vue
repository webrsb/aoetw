<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>匈奴王阿提拉</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>匈奴王阿提拉</strong>是
            <nuxt-link to="/civs/Huns">匈奴人</nuxt-link
            >自434年至453年間的統治者。在《世紀帝國II：<nuxt-link
              to="/games/aoc"
              >征服者入侵</nuxt-link
            >》的<nuxt-link to="/batt/Attila_the_Huna">阿提拉戰役</nuxt-link
            >中正是描寫從他崛起到死亡之間的故事。
          </p>
          單位特性
          <hr />
          阿提拉是一名<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
          ><nuxt-link to="/units/hero">英雄</nuxt-link>，他以
          <nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
          >的外型出現在<nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link
          >和<nuxt-link to="/batt/Fall_of_Rome">羅馬的衰落</nuxt-link
          >這兩關<nuxt-link to="/batt">戰役</nuxt-link
          >中，也可在地圖編輯器中使用。他在這兩關中都是必須存活的角色，在後者這關中還必須在羅馬城外與
          <nuxt-link to="/units/hero/Pope_Leo_I">教宗利奧一世</nuxt-link
          >會面才能獲勝。作為<nuxt-link to="/units/hero">英雄</nuxt-link
          >，他無法被<nuxt-link to="/elements/Conversion">招降</nuxt-link
          >而且會自動<nuxt-link to="/Regeneration">回血</nuxt-link>。
          <p></p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                匈奴王阿提拉
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Attila_the_Hun.png" width="80" alt="" />
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
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
              <br /><nuxt-link to="/units/hero">英雄</nuxt-link>
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
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">13(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/units/animal/Wild_Boar">野豬</nuxt-link> +40
              <br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              +3
            </td>
          </tr>
          <tr></tr>
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
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的匈奴王阿提拉
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E9%98%BF%E6%8F%90%E6%8B%89"
                    >匈奴王阿提拉</a
                  ></strong
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
