<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿朗松公爵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>阿朗松公爵</strong>是《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一名<nuxt-link to="/units/Cavalry_Units">騎兵英雄</nuxt-link
            >，可以在<nuxt-link to="/batt">戰役</nuxt-link
            >"奧爾良的少女"和戰役編輯器中找到。現實中他是阿朗鬆的約翰二世:在百年戰爭後期的一位<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >公爵和將軍。他是<nuxt-link to="/units/hero/Joan_of_Arc_Champion"
              >聖女貞德</nuxt-link
            >的親密朋友和支持者。阿朗松公爵有<nuxt-link to="/units/Knight"
              >騎士</nuxt-link
            >的外貌但有更好的戰鬥力，他會受<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >和其他加成的影響。由於他屬於<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
        <div></div>
        <div></div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Constablerichemont.png"
                  alt=""
              /></gallery>
              <p><em>戰役編輯器中的阿朗松公爵。</em></p>
            </div>
            <div class="col-md-5">
              <gallery
                ><img
                  class="imgn hg"
                  width="220"
                  src="~assets/Dukeandjoan.png"
                  alt=""
              /></gallery>
              <p>
                <em
                  >阿朗松公爵(左上)一開始在戰役"奧爾良的少女"和貞德的軍隊匯合。</em
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
                阿朗松公爵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dukedalencon.png" width="80" alt="" />
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">16(近戰)</td>
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
            <td class="unit4">1.45</td>
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
          <div style="float: left;"></div>
          <div style="margin-left: 60px;">
            維基百科上的阿朗松公爵
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E7%B4%84%E7%BF%B0%E4%BA%8C%E4%B8%96_(%E9%98%BF%E6%9C%97%E6%9D%BE%E5%85%AC%E7%88%B5)"
                    target="_blank"
                    >阿朗松公爵</a
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
