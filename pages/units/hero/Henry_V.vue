<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>亨利五世</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>亨利五世</strong>是一名可在《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》的地圖編輯器中使用的<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link
            >。他的原型是同名的英格蘭的國王亨利五世，最著名的事蹟是在<nuxt-link
              to="/batt/Agincourt_1415"
              >亞琴哥特（1415）</nuxt-link
            >之戰的勝利，使他幾乎成功征服<nuxt-link to="/civs/Franks"
              >法國</nuxt-link
            >。他在遊戲中以<nuxt-link to="/units/Paladin">遊俠</nuxt-link
            >的外表登場。作為一個<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，他無法被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
          <p>
            和其他<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >一樣，亨利五世會受到所有影響騎兵的升級及加成影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                亨利五世
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/HenryvIcon.png" width="80" alt="" />
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
            <td class="unit4">240</td>
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
            <td class="unit4">5</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的亨利五世
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E4%BA%A8%E5%88%A9%E4%BA%94%E4%B8%96_(%E8%8B%B1%E6%A0%BC%E5%85%B0)"
                    target="_blank"
                    >亨利五世</a
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
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
