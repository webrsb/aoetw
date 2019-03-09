<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>訓練軍隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>訓練軍隊</b>是<nuxt-link to="/batt/William_Wallacea"
              >華勒斯教學戰役</nuxt-link
            >的第三個劇情關卡，專為那些從未玩過“世紀帝國”遊戲的玩家設計，教導玩家如何生產單位和建造<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >。
          </p>
        </div>
        <p></p>
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
              <td class="tc2">
                600<nuxt-link to="/resource/Wood">木材</nuxt-link
                >，600<nuxt-link to="/resource/Food">食物</nuxt-link
                >，600<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，600<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
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
          </table>

          <p></p>
          <p>開場：4位<nuxt-link to="/units/Villager">村民</nuxt-link></p>
          <p></p>
          <p>大地之母單位：無</p>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>訓練4位<nuxt-link to="/units/Militia">民兵</nuxt-link>。</li>
            </ol>
          </div>
        </div>
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>別忘記隨時探索地圖。</li>
            <li>你必須找到額外的資源，並探知你敵對陣營的情況。</li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ol>
            <li>
              此關也可以建造一個<nuxt-link to="/building/Wonder"
                >世界奇觀</nuxt-link
              >來贏得勝利。當然，這要比實際目標花費更多的時間。
            </li>
            <li>
              訓練軍隊是所有132個官方戰役中花費時間最短的，平均玩家能夠在125秒內獲勝。
            </li>
            <li>在整個遊戲中，速度不能改變。</li>
            <li>此關城鎮鈴鐺沒有效果。</li>
          </ol>
          <p></p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                訓練軍隊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Wallacelc3map.png" alt="" />
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第一章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Feeding_the_Army">供養軍隊</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Research_and_Technology"
                >研發與科技</nuxt-link
              >
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
