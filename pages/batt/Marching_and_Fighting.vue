<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>行軍與戰鬥</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <b>行軍與戰鬥</b
            >是華勒斯教學戰役的第一個劇情關卡，此關專門為那些以前從未玩過世紀帝國系列的玩家設計。
          </p>
          <p>此關將教導玩家控制單位和攻擊戰術的基本。</p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">黑暗時代</td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">無</td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <p></p>
          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">塞爾特人（藍色）</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家2</div></td>
              <td class="tc6">英格蘭（紅色）不列顛</td>
            </tr>
          </table>

          <p></p>
          <p>開場：1位民兵。</p>
          <p>大地之母單位：2位民兵、1位騎士。</p>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>沿著指引到達蘇格蘭村莊。</li>
            </ol>
          </div>
        </div>
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>你可以藉由將滑鼠移動到畫面的旁邊以四處檢視地圖。</li>
            <li>例如，你可以將滑鼠移到畫面的最底部以將地圖下拉。</li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ol>
            <li>
              雖然玩家在黑暗時代，大地之母村莊是封建時代。但玩家不能從市鎮中心生產村民（儘管秘技仍然有效）。
            </li>
            <li>
              在地圖的東邊，在無法到達的樹林外方，“ES”這個詞寫在草地上，這可能是對Ensemble
              Studios的一種敬意。
            </li>
            <li>
              玩家的民兵以近防＋1／遠防＋2護甲作為開始，這是塞爾特人無法達到的黑暗時代步兵裝甲。
            </li>
            <li>在整個遊戲中，速度不能改變。</li>
            <li>
              在這個村莊的西北部，和這個戰役中的大多數其他任務關卡一樣，在樹林裡有一個英格蘭民兵，但是由於玩家不能生產村民砍筏森林，所以不能到達。這是為了防止英格蘭軍隊被過早打敗。
            </li>
          </ol>
          <p></p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                行軍與戰鬥
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Wallacelc1map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">帝王世紀</td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/William_Wallacea">威廉華勒斯</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Celts">塞爾特人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">帝王世紀第一章之一</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Feeding_the_Army">供養軍隊</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、亞諭協助編輯。</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
