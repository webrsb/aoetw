<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>聖戰！</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>聖戰！</b>為<nuxt-link to="/batt/Saladina">薩拉丁戰役</nuxt-link
            >的第五關劇情關卡，此關為<nuxt-link to="/units/hero/Saladin"
              >薩拉丁</nuxt-link
            >收復三座十字軍城市的<nuxt-link to="/batt">戰役</nuxt-link>。
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
                400<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／400<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
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
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6" width="38%">
                希伯崙（藍綠色）<nuxt-link to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家2
              </td>
              <td class="tc6">
                阿斯加隆（橘色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
              <td class="tc6">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6">
                泰爾（黃色）<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">
                提比里亞（藍色）<nuxt-link to="/civs/Persians">波斯</nuxt-link>
              </td>
              <td class="tc6">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">
                的黎波里衛隊（紫色）<nuxt-link to="/civs/Franks"
                  >法蘭克</nuxt-link
                >
              </td>
            </tr>
          </table>

          <h3>開場：</h3>
          <p>
            3位<nuxt-link to="/units/Villager">村民</nuxt-link>、4艘<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >。
          </p>
          <p>大地之母單位：無。</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>擊敗其中兩座十字軍的城市：</li>
              <ul>
                <li>泰爾、阿斯加隆、提比里亞</li>
              </ul>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              切記：你只需要攻下兩座敵軍城市即可。只要希伯崙還在，你就可以和那裡的村民進行貿易。
            </li>
          </ul>
        </div>
        <h2>攻略</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              經濟發展一下後，石料夠就在北方蓋城堡幫忙抵擋泰爾海軍，並盡快造出一支騎兵先把的黎波里衛隊消滅掉免得他去煩我們的貿易車隊。
            </li>
            <li>
              過一段時間，阿斯加隆會開始建造世界奇觀，提比里亞也會提議停戰，否則他會去攻打希伯崙。他會分別向玩家要兩次的1000黃金（一定要分別給）。如果同盟的話，陸軍先處理阿斯加隆的軍隊，至少第一波攻擊一定要先把<nuxt-link
                to="/building/Wonder"
                >世界奇觀</nuxt-link
              >打掉，之後再把剩下的泰爾解決掉即過關。
            </li>
          </ul>
        </div>
        <h2>決定版變更點</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              人口上限由75改100，泰爾在決定版不會建造<nuxt-link
                to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >（之前的版本會）。與提比里亞的外交問題已修復完畢。還有個遺跡藏在東方的懸崖內，部隊無法抵達因此也不能用遺跡獲勝。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                聖戰
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/Saladin/Jihad_map.png" alt="" /></div>
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
            <td class="unit3">戰役</td>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第三章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Siege_of_Jerusalem">兵臨聖城</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁由裕暉、竺叡、亞諭協助編輯</div>
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
