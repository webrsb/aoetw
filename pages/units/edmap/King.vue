<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>國王</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>國王</b>是世紀帝國II的<nuxt-link to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >。本身是無用的單位，無法攻擊任何事物，或對經濟做出貢獻，但在遊戲早期可以用於偵察地圖。國王只出現在<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >和弒君模式中，也可於地圖編輯器中使用 。是不可訓練之單位。
          </p>
          <p>訊息中圖像上方縮寫的翻譯</p>
          <p>EU：歐洲</p>
          <p>NA：美國</p>
          <p>ME：中東</p>
          <p>EA：東亞</p>
          <p>AF：非洲</p>
          <p>SA：東南亞</p>
        </div>
        <h3>概覽</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            國王隊擁有中等<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >（75），但沒有攻擊或盔甲。在弒君遊戲中，失去國王的玩家立刻被擊敗。因此，自己的國王必須不惜一切代價得到保護和保持<nuxt-link
              to="/elements/Hit_points"
              >血量</nuxt-link
            >，敵國的位置應始終是自己侵略的中心。國王的行動非常迅速，從一開始就有很高的視線，並且不會被野生動物襲擊。這使得他們非常適合在早期比賽中偵察城鎮的外圍，由於<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >和<nuxt-link to="/building/Castle">城堡</nuxt-link
            >會射箭，在敵人的領土內偵察得太深是危險的。每個玩家在進行一場弒君遊戲時都會先從一座城堡開始，一旦周圍環境偵察完畢，建議<nuxt-link
              to="/elements/Garrison"
              >駐軍</nuxt-link
            >國王在裡面。在比賽后期，他應該永遠留在牆壁後面，並進入一個安全的城堡。像<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >一樣，國王不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >，但他們不像英雄，不會重生生命值。
          </p>
          <p>
            國王在他們的<nuxt-link to="/civs">文明</nuxt-link
            >語言中有自己獨特的聲音片段。
          </p>
          <p>
            自《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
            >》以來，國王現在有不同的模組，使其可以識別他們的起源。
          </p>
        </div>
        <h3>英雄</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>有幾個國王英雄。</p>
          <ul>
            <li>
              <nuxt-link to="/units/hero/Jayanegara">賈亞納加拉</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/units/hero/King_Alfonso">阿方索國王</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/units/hero/King_Sancho">桑喬國王</nuxt-link>。
            </li>
            <li><nuxt-link to="/units/hero/Shah">沙赫</nuxt-link>。</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery>
                <img src="~assets/AllKing.png" class="imgn hg" alt="" />
              </gallery>
              <em>國王們</em>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">國王</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <b-tabs no-fade>
                  <b-tab title="EU">
                    <img src="~assets/KingA.png" alt="" />
                  </b-tab>
                  <b-tab title="NA">
                    <img src="~assets/KingB.png" alt="" />
                  </b-tab>
                  <b-tab title="ME">
                    <img src="~assets/KingC.png" alt="" />
                  </b-tab>
                  <b-tab title="EA">
                    <img src="~assets/KingD.png" alt="" />
                  </b-tab>
                  <b-tab title="AF">
                    <img src="~assets/KingE.png" alt="" />
                  </b-tab>
                </b-tabs>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">平民</td>
          </tr>
          <tr>
            <td class="unit3">資料片</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.32</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks"></div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alledmap' })

export default {
  components: {}
}
</script>
<style></style>
