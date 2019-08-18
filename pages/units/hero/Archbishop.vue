<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大主教</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>大主教</b>是一個在《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位。你只有透過地圖編輯器才能找到他。他以普通（或更高職位）的基督教主教為藍本。在遊戲中大主教以<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >的外表出現，但是他的能力值更高。作為一個英雄單位，大主教無法被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且可以自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >（在<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>資料片之後）。
          </p>
          <p>
            所有跟<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >相關的升級和加成對大主教通通有效。如果大主教撿起了<nuxt-link
              to="/elements/Relic"
              >遺跡</nuxt-link
            >，會出現bug使他變成一般的<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                大主教
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/MonkIcon.jpg" width="80" alt="" />
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
              <nuxt-link to="/units/Monk">僧侶</nuxt-link><br />英雄
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
            <td class="unit4">70</td>
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
            <td class="unit4">0</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
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

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的主教
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a href="https://tinyurl.com/y9ekga5t" target="_blank"
                    >主教</a
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
