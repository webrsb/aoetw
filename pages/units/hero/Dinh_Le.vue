<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>丁禮</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>丁禮</strong>是《<nuxt-link to="/games/aor"
              >世紀帝國II：王者崛起</nuxt-link
            >》中的一名<nuxt-link to="/units/Cavalry_Units">騎兵英雄</nuxt-link
            >。他只能在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中使用，並擁有<nuxt-link to="/units/Paladin">遊俠</nuxt-link
            >的外觀。由於他屬於<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link> 。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            他的原型來自於<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
            >歷史上的知名人物丁禮，他也是梨利的姪子。他既勇猛、狡詐又武功高強。他在年輕時曾擔任梨利的<nuxt-link
              to="/techs/Squires"
              >護衛</nuxt-link
            >。他和梨來在梨利發起藍山起義後不久就率先加入，他同時也是梨利最信賴的人之一。1427年，<nuxt-link
              to="/units/hero/Wang_Tong"
              >王通</nuxt-link
            >出擊藍山軍的將領黎阮，丁禮率兵五百人前去救援。因兵少，在途中遭到王通夾擊，丁禮被俘，後被斬首。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                丁禮
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dinhleicon.png" width="80" alt="" />
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
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">25(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
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
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;"></div>
          <div style="margin-left: 60px;">
            維基百科上的丁禮
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E4%B8%81%E7%A6%AE"
                    target="_blank"
                    >丁禮</a
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
