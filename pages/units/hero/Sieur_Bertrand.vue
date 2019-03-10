<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>貝查德爵士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>貝查德爵士</strong>是《世紀帝國 II HD:
            <nuxt-link to="/games/aok">帝王世紀</nuxt-link>》中的一名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，可以在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到。現實中他是百年戰爭中的老兵並和他的同伴<nuxt-link
              to="/units/hero/Sieur_de_Metz"
              >梅茲爵士</nuxt-link
            >在1429年護送<nuxt-link to="/units/hero/Joan_of_Arc_Champion"
              >聖女貞德</nuxt-link
            >從沃庫勒爾到支農。這史實也忠實反映梅茲爵士出現在<nuxt-link
              to="/batt/Joan_of_Arc"
              >聖女貞德戰役</nuxt-link
            >“<nuxt-link to="/batt/An_Unlikely_Messiah"
              >一個不大可能的彌賽亞</nuxt-link
            >”的場景中。貝查德爵士有<nuxt-link to="/units/Knight"
              >騎士</nuxt-link
            >的外貌但有更好的戰鬥力。由於他屬於<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link>資料片後) 。
          </p>
          <p></p>
        </div>
        <div></div>
        <div></div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-5">
              <gallery
                ><img class="hg" width="250" src="~assets/Joan1start.png" alt=""
              /></gallery>
              <p><em>護送聖女貞德到支農的貝查德爵士。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                貝查德爵士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sieurbertrand.png" width="80" alt="" />
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
            <td class="unit4">120</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12(近戰)</td>
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
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.45</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;"></div>
          <div style="margin-left: 60px;">
            維基百科上的貝查德爵士
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://en.wikipedia.org/wiki/Bertrand_de_Poulengy"
                    target="_blank"
                    >貝查德爵士</a
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
