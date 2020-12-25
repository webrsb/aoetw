<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>聖戰</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>聖戰</b>為<nuxt-link to="/batt/Saladina">薩拉丁戰役</nuxt-link
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
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6" width="38%">
                希邦（藍綠色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
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
                底比利亞斯（藍色）<nuxt-link to="/civs/Persians"
                  >波斯</nuxt-link
                >
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
                <li>泰爾、阿斯加隆、底比利亞斯</li>
              </ul>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              切記：你只需要攻下兩座敵軍城市即可。只要希邦還在，你就可以和那裡的村民進行貿易。
            </li>
          </ul>
          <h2>細節</h2>
          <ul>
            <li>
              除了主要目標之外，建立一座<nuxt-link to="/building/Wonder"
                >世界奇觀</nuxt-link
              >，或者奪取所有<nuxt-link to="/elements/Relic">遺跡</nuxt-link
              >，也能贏得這個關卡。
            </li>
            <li>
              如果玩家進貢1,000單位黃金，底比利亞斯會要求締結同盟，但只有在玩家再度進貢1,000單位黃金後，底比利亞斯才會成為同盟。收到第一筆進貢後，底比利亞斯會再要求一筆1,000單位的黃金，但此時劇情對話的第二條訊息並不會出現（官方BUG），所以多數玩家會選擇直接把底比利亞斯滅掉，而不是進貢。
            </li>
            <li>
              如果你打算維持這段盟友關係，不要一開始就進貢2,000單位黃金，因為這並不會當作兩次進貢，反而會浪費額外的1,000黃金。而且，你必須在確認這段盟友關係後，手動更改您與底比利亞斯的外交關係。
            </li>
            <li>
              最後，即使玩家與希邦是同盟關係，底比利亞斯有時候還是會襲擊並摧毀希邦，顯然底比利亞斯與希邦仍是敵人，即使在你改變外交立場後，也依然如此。
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
              <div class="unititle"><img src="~assets/Jihad.png" alt="" /></div>
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
              <nuxt-link to="/batt/The_Siege_of_Jerusalem"
                >耶路撒冷攻城戰</nuxt-link
              >
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
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
