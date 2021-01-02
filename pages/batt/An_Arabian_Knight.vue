<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿拉伯騎士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>阿拉伯騎士</b>為<nuxt-link to="/batt/Saladina"
              >薩拉丁戰役</nuxt-link
            >的第一關劇情關卡，此關描述<nuxt-link to="/units/hero/Saladin"
              >薩拉丁</nuxt-link
            >率領軍隊逐出在埃及的法國十字軍。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                1,000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1,000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／1,000<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
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
              <td class="tc6">
                <div class="p3"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Saracens">薩拉森人</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6" colspan="3">
                埃及人（紅色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                西<nuxt-link to="/civs/Franks">法蘭克人</nuxt-link
                >（藍色）法蘭克
              </td>
              <td class="tc6" width="12%">
                <div class="p5"></div>
                玩家4
              </td>
              <td class="tc6" width="38%">東法蘭克人（藍綠色）法蘭克</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              16位<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、12位<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >、2位<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >、12位<nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >、2台<nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              2位駱駝騎兵、6位<nuxt-link to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >，1艘<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
              >，1台<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>讓你的士兵到開羅的清真寺。</li>
              <li>打敗在開羅的西法蘭克人。</li>
              <li>
                要打敗開羅的西法蘭克人，可先破壞他們的<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >。
              </li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>利用你輕騎兵的視野以避免不必要的衝突。</li>
          </ul>
        </div>
                <h2>攻略</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>首先一邊往埃及前進的同時一邊迎擊西法蘭克人的軍隊。之後埃及人會轉敵對，我方會拿到一台<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>，用它把埃及人的<nuxt-link to="/building/Gate">城門</nuxt-link>毀壞。</li>
            <li>接著快速地用<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>隊移動到清真寺，到達後埃及改回同盟並有一批援軍。再來對附東法蘭克人，先把投石車打掉，再把剩餘軍隊掃蕩後摧毀<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>即可。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                阿拉伯騎士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/An_arabian_knight.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Saladina">薩拉丁</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Saracens">薩拉森人</nuxt-link>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第三章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Lord_of_Arabia">阿拉伯君主</nuxt-link>
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
