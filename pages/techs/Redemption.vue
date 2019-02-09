<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>信仰救贖</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            信仰救贖於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Monastery">修道院</nuxt-link> 研發後可讓
            <nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
              to="/units/Missionary"
              >傳教士</nuxt-link
            >招降攻城單位和大部分的敵方單位。
          </p>
          <p>
            所有建築物包含<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
            >和<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
            >都不能從遠處直接招降，僧侶和傳教士必須站在他們身邊才能進行招降，其他攻城武器(
            <nuxt-link to="/units/Scorpion">弩炮</nuxt-link>、<nuxt-link
              to="/units/Mangonel"
              >投石車</nuxt-link
            >和<nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link
            >)皆可從遠處直接招降 配上此科技後，僧侶搭配<nuxt-link
              to="/units/Crossbowman"
              >弩兵</nuxt-link
            >將顯得相當難纏，因為僧侶可以處理弩兵懼怕的投石車，唯獨需先研發
            <nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link
            >，以免被投石車一發打死。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >文明可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >文明不可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>受影響的建築</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >可招降</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/building/House">房屋</nuxt-link>
              <nuxt-link to="/building/Mill">磨坊</nuxt-link>、
              <nuxt-link to="/building/Market">市場</nuxt-link>、
              <nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>、
              <nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>、
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>、
              <nuxt-link to="/building/University">學院</nuxt-link>、
              <nuxt-link to="/building/Dock">碼頭</nuxt-link>、
              <nuxt-link to="/building/Barracks">軍營</nuxt-link>、
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>、
              <nuxt-link to="/building/Stable">馬廄</nuxt-link>、
              <nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link
              >、 <nuxt-link to="/building/Outpost">哨站</nuxt-link>、
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>、
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>、
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link>、
              <nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>。
              <nuxt-link to="/building/Feitoriaicon_Feitoria"
                >港灣大商站</nuxt-link
              >、 <nuxt-link to="/building/Harbor">海港</nuxt-link>、
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >不可招降</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>、
              <nuxt-link to="/building/Farm">農田</nuxt-link>、
              <nuxt-link to="/building/Fish_Trap">漁網</nuxt-link>、
              <nuxt-link to="/building/Monastery">修道院</nuxt-link>、
              <nuxt-link to="/building/Castle">城堡</nuxt-link>、
              <nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link>、
              <nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>、
              <nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>、
              <nuxt-link to="/building/Gate">城門</nuxt-link>、
              <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>、
              <nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：研發該科技給與僧侶+5HP。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：科技便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在城堡/帝王時代各便宜15%/20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            從信仰中墮落的人贖回自己的能力是宗教的寬容行為。原諒和允許贖罪的宗教比沒有贖罪的宗教在傳教上更有優勢。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">信仰救贖</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Redemption.jpg" width="45" alt="" />
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
            <td class="unit4">請看左方分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Monasteryicon.png"
                alt=""
              /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">475</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">僧侶和傳教士可招降敵方建築物和攻城單位</td>
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
