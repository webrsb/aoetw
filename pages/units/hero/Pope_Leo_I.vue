<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>教宗利奧一世</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>教宗利奧一世</strong>的原型是同名的<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >教皇，也被稱為<strong>大教宗聖良一世</strong>。他在《<nuxt-link
              to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》中<nuxt-link to="/units/hero/Attila_the_Hun"
              >匈奴王阿提拉</nuxt-link
            >的<nuxt-link to="/batt">戰役</nuxt-link>登場，在<nuxt-link
              to="/batt/Fall_of_Rome"
              >羅馬的衰落</nuxt-link
            >這關的最後出現並與<nuxt-link to="/units/hero/Attila_the_Hun"
              >阿提拉</nuxt-link
            >密談，勸說他放棄侵略<nuxt-link to="/civs/Italians"
              >義大利</nuxt-link
            >。他也可以在地圖編輯器中使用。
          </p>
          <p>
            他在遊戲中的外觀是一名<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >，和其他<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >單位一樣，教宗利奧一世會受到所有影響僧侶的升級及加成影響。由於他是<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >，因此無法被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >並會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >。如果他拿起了<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >，會因遊戲錯誤導致他變回一般的僧侶。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                教宗利奧一世
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/PopeleoIcon.png" width="80" alt="" />
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
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">11</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的教宗利奧一世
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E6%95%99%E5%AE%97%E8%89%AF%E4%B8%80%E4%B8%96"
                    target="_blank"
                    >教宗良一世</a
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
