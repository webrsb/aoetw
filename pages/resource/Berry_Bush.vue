<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>漿果叢</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <p><b>漿果叢</b>是玩家遊戲早期可以採集的野外食物來源之一。</p>
        <table class="table-bordered" border="1">
          <tr>
            <td
              style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
              height="40"
              colspan="7"
              align="center"
              valign="middle"
              class="unit"
            >
              <center>
                <div id="B"><strong>漿果叢</strong></div>
              </center>
            </td>
          </tr>
          <tr>
            <td
              style="border: 1px solid #495057; min-width: 200px"
              bgcolor="#E0E0E0"
            >
              <img class="img-fluid" src="~assets/Berry_Bush.png" alt="" />
            </td>
            <td
              valign="middle"
              bgcolor="#E0E0E0"
              style="border: 1px solid #495057; min-width: 180px;"
            >
              <strong>漿果灌木叢（Berry Bush）</strong><br />
              最大收穫量：125食物
            </td>
            <td
              style="border: 1px solid #495057;"
              colspan="4"
              bgcolor="#E0E0E0"
            >
              <p class="unititle">
                一般在玩家的<nuxt-link to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >附近可以找到。在大多數地圖中，地圖也會有數個漿果灌木叢。採集漿果的速度比種田快，但因採集上速度仍較打獵慢，剛開始仍建議先狩獵動物獲取食物。
              </p>
            </td>
          </tr>
          <tr>
            <td style="border: 1px solid #495057;">
              <img class="img-fluid" src="~assets/Fruit_Bushes.png" alt="" />
            </td>
            <td valign="middle" style="border: 1px solid #495057;">
              <strong>水果灌木叢（Fruit Bushes）<br /></strong
              >最大收穫量：125食物
            </td>
            <td style="border: 1px solid #495057;" colspan="4">
              <span class="unititle"></span>在<nuxt-link to="/games/ak"
                >非洲王國</nuxt-link
              >版本中，新增了水果灌木叢。
            </td>
          </tr>
          <tr>
            <td
              style="border: 1px solid #495057;"
              height="66"
              colspan="6"
              bgcolor="#E0E0E0"
            >
              <ul>
                文明加成：
                <li>
                  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                  >：採集者可攜帶+5食物
                </li>
                <li>
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                  >：採集者的工作速度提高了25%（<nuxt-link to="/games/aof"
                    >失落的帝國</nuxt-link
                  >版本中）
                </li>
                <li>
                  <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
                  >：自然資源存量+15%（<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >版本中+20%）
                </li>
              </ul>
            </td>
          </tr>
        </table>

        <table class="table-bordered">
          <tr>
            <td style="border: 1px solid #FFFFFF;">
              <p align="left">
                部分圖片及遊戲資訊來源：<a
                  href="
                    https://ageofempires.fandom.com/wiki/Berry_Bush"
                  >Aoe英文wiki</a
                >
              </p>
            </td>
            <td style="border: 1px solid #FFFFFF;">
              <p align="right">（此頁面由賜齡協助編輯）</p>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allre',
  components: {}
}
</script>
<style></style>
