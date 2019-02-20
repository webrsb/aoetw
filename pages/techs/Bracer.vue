<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>護腕</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            護腕可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>研發，可讓
            <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link>、
            <nuxt-link to="/units/Galley">戰船</nuxt-link>和<nuxt-link
              to="/units/Longboat"
              >維京大戰船</nuxt-link
            >+1攻擊和+1射程；<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >只+1攻擊。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-check" style="color: green;"></i
                  ><span style="margin-left: 2px;">可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  ><span style="margin-left: 2px;">不可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：該科技在帝王時代花費便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：研發該科技不需要黃金。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              大多數缺乏護腕的文明都可以使用遊俠。<nuxt-link to="/civs/Slavs"
                >斯拉夫人</nuxt-link
              >和<nuxt-link to="/civs/Malians">馬利</nuxt-link
              >都缺乏遊俠和護腕，不過他們分別有
              <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>和<nuxt-link
                to="/techs/Farimba"
                >驃悍精神</nuxt-link
              >做為交換。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >“護腕是一個佩戴在弓箭手前手上的硬皮護具，這樣不僅可以支撐手腕在多次的拉弓下不會覺得非常疲累，並保護手臂內側免受箭羽的磨擦。如果沒有護腕保護，手臂可能在多次拉弓下會肌肉斷裂，削弱弓箭手的戰鬥力以致最後脫離戰鬥狀態，對於弓箭手而言，護腕是一個重要的改進。“</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">護腕</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Bracer.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/Bodkinarrow.jpg" alt="" /><nuxt-link
                to="/techs/Bodkin_Arrow"
                >錐狀箭頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              讓弓兵、城堡、箭塔、戰船和維京大戰船+1攻擊和+1射程；城鎮中心只+1攻擊。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
