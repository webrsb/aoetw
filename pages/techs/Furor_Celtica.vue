<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>賽爾特狂暴</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            賽爾特狂暴是<nuxt-link to="/civs/Celts">賽爾特</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            >的單位+40% HP。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              賽爾特狂暴讓賽爾特人的<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >更難被摧毀。搭配他們的文明加成(攻城武器開火速度快20%)和團隊加成(攻城器製造所工作速率快15%)，讓賽爾特攻城武器是遊戲中最為人所懼怕的
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速賽爾特狂暴的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>賽爾特狂暴讓所有攻城器製造所的單位+50% HP。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>+50% HP改為+40% HP。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            “凱爾特人的勇士有著非常情緒化的戰士的名聲，他們的士氣會大幅波動，賽爾特狂暴或者凱爾特怒火是一種高度激進的攻擊行為，會讓所有敵方軍隊看到後都試圖逃跑，如果憤怒被抑制住，它可能會突然消失並變成恐懼，如果凱爾特領導人能夠管理和指揮他們的士兵的怒氣，那麼這是一個令人望而生畏的力量倍增器。“
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle">
                <nuxt-link to="">賽爾特狂暴</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Unique-tech.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">科技介紹</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">750</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">攻城單位+40% HP。</td>
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
