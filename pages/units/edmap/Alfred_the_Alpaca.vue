<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>武裝羊駝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>武裝羊駝</b>的外觀與<nuxt-link to="/units/animal/Llama"
              >羊駝</nuxt-link
            >相似，但體型較小，沒有馬鞍，戴著金色的皇冠，而且有說話的能力。它的移動速度中等（與大多數<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >相當）並使用頭槌攻擊。因為它具有非常高的護甲和<nuxt-link
              to="/elements/Area_of_Effect"
              >踐踏傷害</nuxt-link
            >，武裝 羊駝在與任何<nuxt-link to="/units">單位</nuxt-link
            >的近戰中幾乎立於不敗之地。然而，武裝羊駝很怕打帶跑戰術與對付移動快速的<nuxt-link
              to="/units/Archer_Units"
              >遠程</nuxt-link
            >
            單位，因為它缺乏速度和遠程攻擊。武裝羊駝也很怕<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >和<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
            >的攻擊。
          </p>
        </div>
        <h3>遊戲內對話</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>被玩家選中時</b>
          </p>
          <ul>
            <li>Hey! Buy me a drink first, sailor!</li>
            <li>I like it when you touch me that way.</li>
            <li>Whazzap? (What's up?)</li>
            <li>Did you wash before you touch me?</li>
            <li>Good god your hands are cold!</li>
          </ul>

          <p>
            <b>被命令移動時</b>
          </p>
          <ul>
            <li>You move! I don't move you move.</li>
            <li>Hey! Who do you think you are making ME move?</li>
            <li>Woow!</li>
            <li>Wowowowowow wow!</li>
          </ul>

          <p>
            <b>被命令停止/攻擊/轉換狀態時</b>
          </p>
          <ul>
            <li>Woow!</li>
            <li>Wooooow!</li>
            <li>I am going to attack you!</li>
            <li>Enemy!</li>
          </ul>

          <p>
            <b>死亡時</b>
          </p>
          <ul>
            <li>Good god I'm dead!</li>
            <li>Eh.</li>
            <li>You killed me! You! Son of a f*cked up.</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Alfred_the_alpaca.png"
                  alt=""
              /></gallery>
              <p><em>一群武裝羊駝。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Llama_alfred.jpg"
                  alt=""
              /></gallery>
              <p><em>一般羊駝(上)與武裝羊駝(下)。</em></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">武裝羊駝</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Alfred_icon.jpg" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                <nuxt-link to="">單位介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">首次出現</td>
            <td class="unit4">
              <nuxt-link to="/techs/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/town_center.png" alt="" /><nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">作弊密碼</td>
            <td class="unit4">alpaca simulator</td>
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
            <td class="unit4">120</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">120(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +100對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築物</nuxt-link
              ><br />
              +100對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">濺涉傷害範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit3">防禦</td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alledmap',
  components: {}
}
</script>
<style></style>
