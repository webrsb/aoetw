<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>塔克修士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>塔克修士</strong>是一名可在《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》的地圖編輯器中使用的<nuxt-link to="/units/hero">英雄</nuxt-link
            >。他的原型是<nuxt-link to="/civs/Britons">英國</nuxt-link
            >民間故事中<nuxt-link to="/units/hero/Robin_Hood">羅賓漢</nuxt-link
            >的一名夥伴，遊戲內他以<nuxt-link to="/units/Monk">僧侶</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link
            >的樣貌登場，無法被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >並會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >。如果他拿起了<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >，會因遊戲錯誤導致他變回一般的<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >。
          </p>
          <p>
            和其他僧侶單位一樣，塔克修士會受到所有影響僧侶的升級及加成影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                塔克修士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/MonkIcon.png" width="80" alt="" />
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
            <td class="unit4"><nuxt-link to="/units/Monk">僧侶</nuxt-link></td>
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">62</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">9</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的塔克修士
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://en.wikipedia.org/wiki/Friar_Tuck"
                    target="_blank"
                    >塔克修士</a
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
