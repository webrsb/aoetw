<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>伊滿</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>伊滿</strong>是一名在《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》的<nuxt-link to="/units/hero/El_Cid">熙德</nuxt-link
            ><nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batt/The_Enemy_of_my_Enemy"
              >我敵人的敵人</nuxt-link
            >這一關中登場的<nuxt-link to="/units/hero">英雄</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link>。在<nuxt-link
              to="/batt/Sundjataa"
              >松迪亞塔</nuxt-link
            >戰役的<nuxt-link to="/batt/Djeriba_Gold">傑爾巴島的黃金</nuxt-link
            >這關中也有一名伊滿登場。
          </p>
          <p>
            伊滿所代表的是伊斯蘭教的教長，是在清真寺中帶領穆斯林做禮拜的人。
          </p>
          <p>
            伊滿是數值更優秀的<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >。在征服者入侵中他使用的是一般<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >的模型，不過到了失落的帝國以後他就有了獨立的模型。伊滿也可以在地圖編輯器中使用。
          </p>
          <p>
            作為一個英雄單位，他無法被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >。和其他僧侶單位一樣，伊滿會受到所有影響僧侶的升級及加成影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                伊滿
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ImamIcon.png" width="80" alt="" />
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
              <nuxt-link to="/units/Monk">僧侶</nuxt-link> <br /><nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >
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
            <td class="unit4">45</td>
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
          <tr></tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr></tr>
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
            維基百科上的伊滿
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E4%BC%8A%E7%8E%9B%E7%9B%AE"
                    target="_blank"
                    >伊滿</a
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
