<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>供養軍隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>供養軍隊</b>是<nuxt-link to="/batt/William_Wallacea"
              >華勒斯教學戰役</nuxt-link
            >的第二個劇情關卡，主要為採集資源並生產軍隊。
          </p>
          <p>
            專為那些從未玩過“世紀帝國II”遊戲的玩家設計，教導玩家如何使用<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >採集資源。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">無</td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>

          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">塞爾特人（藍色）</td>
            </tr>
          </table>

          <p>開場：1位村民</p>

          <p>大地之母單位：4位村民。</p>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                收集50單位<nuxt-link to="/resource/Food">食物</nuxt-link
                >、50單位<nuxt-link to="/resource/Wood">木材</nuxt-link
                >、50單位<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
              </li>
            </ol>
          </div>
        </div>
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              村民可以採集你在建造、研發<nuxt-link to="/techs">科技</nuxt-link
              >，與生產士兵時必須用到的食物、木材、黃金與<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >。
            </li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ol>
            <li>
              此關地圖中共有895單位的食物。（但由於鹿會腐爛，玩家無法收集所有單位食物）
            </li>
            <li>
              玩家可以試著升級到<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >，建造一個<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >。200年後也會勝利。
            </li>
            <li>
              然而，與這場關卡中的其他劇情任務一樣，取得勝利的替代路線也要慢得多。
            </li>
            <li>
              為了升級到帝王時代，玩家必須十分小心，不要超過50單位的標準勝利條件所必需的資源，可以在<nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >時建造市場，在遊戲過程中將所有的多餘資源全部交易出去。
            </li>
            <li>在整個遊戲中，速度不能改變。</li>
            <li>此關卡城鎮鈴鐺並沒有效果。</li>
          </ol>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                供養軍隊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/William_Wallace/Feeding_the_Army_map.png" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/William_Wallacea">威廉華勒斯</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
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
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第一章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Marching_and_Fighting">行軍與戰鬥</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Training_the_Troops">訓練軍隊</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、亞諭協助編輯。</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
