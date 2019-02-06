<template>
  <div class="container">
    <div class="row" style="margin-top:30px;">
      <div class="col-md-12">
        <h1>駐軍（Garrison）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            駐軍部隊可以安全地免受敵方部隊騷擾，在世紀帝國II中，駐軍部隊會慢慢恢復HP。但如果建築物受到一定程度的破壞，就無法在其內部駐紮單位，且所有駐守的單位都會自動從該建築物中撤出。
          </p>
          <h4>如何駐軍：</h4>
          <p>
            選取想要駐守的單位後，按住<strong>Alt鍵+右鍵單擊</strong>建築物，即可將單位駐紮在建築物中。或是選取單位後，按下<strong>熱鍵G+左鍵單擊</strong>建築物（右鍵單擊也可）。
          </p>
          <h4>如何撤軍：</h4>
          <p>選取已駐軍該建築物後，點選<strong>熱鍵Z</strong>即可。</p>
        </div>
        <div class="hrn1"></div>
        <div class="n1">
          <h4>玩家可以駐守的建築物：</h4>
          <ul>
            <li>
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >：最多15位村民或徒步弓步兵（唯獨<nuxt-link to="/civs/Teutons"
                >條頓</nuxt-link
              >文明該駐紮單位+10）
            </li>
            <li>
              <nuxt-link to="/building/Barracks">軍營</nuxt-link
              >：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Dock">碼頭</nuxt-link
              >：10艘該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              >：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Monastery">修道院</nuxt-link
              >：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Stable">馬廄</nuxt-link
              >：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Siege_Workshop">攻城武器製造所</nuxt-link
              >：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >：最多5位村民或徒步弓步兵
            </li>
            <li>
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >：最多5位村民或徒步弓步兵
            </li>
            <li>
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >：最多5位村民或徒步弓步兵
            </li>
            <li>
              <nuxt-link to="/building/Castle">城堡</nuxt-link
              >：最多20位單位（<nuxt-link to="/units/Trebuchet"
                >投石機</nuxt-link
              >及<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >城堡特殊單位<nuxt-link to="/civs/Organ_Gun">風琴砲</nuxt-link
              >撤離後無法再進駐）
            </li>
            <li>
              <nuxt-link to="/building/House">房屋</nuxt-link
              >：最多5位村民（僅限<nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >文明）
            </li>
          </ul>
          <h4>玩家可以駐守的軍事單位：</h4>
          <ul>
            <li>
              <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >：初始最多運輸5個單位（<nuxt-link to="/civs/Saracens"
                >薩拉森</nuxt-link
              >文明可運輸單位+5）
            </li>
            <li>
              <nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >：最多4位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）
            </li>
            <li>
              <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >：最多5位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）
            </li>
            <li>
              <nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
              >：最多6位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）
            </li>
            <li>
              <nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
              >：最多10位村民或徒步弓步兵（軍事建築物聚集點設在攻城塔→可自動進駐）
            </li>
          </ul>
          <h4>可提升箭量之駐守建築物及軍事單位：</h4>
          <ul>
            <li>
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >：村民、徒步弓兵、火槍兵
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >：村民、徒步弓兵、火槍兵（村民進駐4~5位可+4箭量）
            </li>
            <li>
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >：村民、徒步弓兵、火槍兵（村民進駐提升箭量約比瞭望箭塔少1~2）
            </li>
            <li>
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >：村民、徒步弓兵、火槍兵（村民進駐提升箭量約比瞭望箭塔少2）
            </li>
            <li>
              <nuxt-link to="/building/Castle">城堡</nuxt-link
              >：村民、徒步弓兵、騎馬弓手、陸地<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >（<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>除外）
            </li>
            <p>
              『駐軍<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >、<nuxt-link to="/units/Chu_Ko_Nu">中國連弩兵</nuxt-link
              >也會提升箭量，但增加不多。』<br />
              『<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>、<nuxt-link
                to="/units/Arbalest"
                >強弩兵</nuxt-link
              >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >（或<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >）駐軍任一箭塔提升箭量不會改變（固定+4）。』<br />
              『軍事單位升級、或是研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >……等，<nuxt-link to="/building/Castle">城堡</nuxt-link
              >駐軍增加箭數會稍微多些。』
            </p>
          </ul>
          <p>
            駐軍時單位不會受到敵方攻擊而損血，但如果建築物被破壞或嚴重損壞（剩餘HP≤20%），它們會自動從建築物中撤離。此外，受損單位進駐建築物內部後會慢慢恢復HP，箭塔每秒治療0.1的生命值，而<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >治療速度則是每秒治療0.2的生命值，研發<nuxt-link
              to="/techs/Herbal_Medicine"
              >草藥學</nuxt-link
            >技術後可更進一步提高回血率。
          </p>
          <p>
            駐軍村民、徒步弓兵、騎馬弓手、陸地火藥單位……等，可增加塔、城鎮中心、城堡等射箭量輸出（<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >及箭塔無法駐軍騎馬弓手或騎馬<nuxt-link to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >），不同文明會有些許差異，單位升級或研發<nuxt-link
              to="/techs/Chemistry"
              >化學</nuxt-link
            >也會有所影響。有駐守的建築物頂部會有旗幟標誌，其他像是有放置遺跡的修道院也會有旗幟標示。
          </p>
        </div>
      </div>
      <div class="n1">
        <div class="row">
          <div
            style="border: 1px solid #495057;background: #009999;color: #FFFFFF;"
            height="40"
            colspan="7"
            align="center"
            class="unit col-sm-12 text-center"
          >
            <strong>遊戲內駐軍畫面</strong>
          </div>
          <div
            style="border: 1px solid #495057;"
            class="col-sm-3"
            bgcolor="#FFFFFF"
          >
            <div class="unititle">
              <img src="~assets/Garrison_test01.png" width="100%" />
            </div>
            <div class="col-sm-12 text-center">駐軍 - 熱鍵G</div>
          </div>
          <div
            style="border: 1px solid #495057;"
            class="col-sm-3"
            bgcolor="#FFFFFF"
          >
            <div class="unititle">
              <img src="~assets/Garrison_test02.png" width="100%" />
            </div>
            <div class="col-sm-12 text-center">設置聚集點在該建築物</div>
          </div>
          <div
            style="border: 1px solid #495057;"
            class="col-sm-3"
            bgcolor="#FFFFFF"
          >
            <div class="unititle">
              <img src="~assets/Garrison_test03.png" width="100%" />
            </div>
            <div class="col-sm-12 text-center">已駐軍建築物</div>
          </div>
          <div
            style="border: 1px solid #495057;"
            class="col-sm-3"
            bgcolor="#FFFFFF"
          >
            <div class="unititle">
              <img src="~assets/Garrison_test04.png" width="100%" />
            </div>
            <div class="col-sm-12 text-center">撤軍 - 熱鍵Z</div>
          </div>
        </div>
        <div class="n1">
          <div class="col-md-12"><div class="col-md-4"></div></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" style="margin-top:20px">
        <div class="col-md-12"></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
