<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>強弩兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            可生產於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >，為<nuxt-link to="/armor/Armor_Class_Archer">射手類</nuxt-link
            >最高等級。
          </p>
          <strong
            ><span
              style="margin-right: 5px;"
              class="glyphicon glyphicon-ok okc"
              aria-hidden="true"
            ></span
            >可生產<nuxt-link to="/civs">文明</nuxt-link>：</strong
          >
          <p>
            <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
            <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
            <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
            <nuxt-link to="/civs/Incas">印加</nuxt-link>、
            <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
            <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
            <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
            <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
            <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
            <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
            <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
            <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
            <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
            <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
            <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
            <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
          </p>
          <strong
            ><span
              style="margin-right: 5px;"
              class="glyphicon glyphicon-remove noc"
              aria-hidden="true"
            ></span
            >不可生產文明：</strong
          >
          <p>
            <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
            <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
            <nuxt-link to="/civs/Indians">印度</nuxt-link>、
            <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
            <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
            <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
            <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
            <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
            <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
            <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
            <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
            <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>是<nuxt-link
              to="/units/Archer_Units"
              >遠程單位</nuxt-link
            >，所以聚集起來就可以造成大量傷害，可對<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >造成嚴重的傷害，但比較怕重騎兵的攻擊。
          </p>
          <p>
            而<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
            >可以掩護強弩兵怕<nuxt-link to="/units/Cavalier">騎兵</nuxt-link
            >這個弱點，所以兩種兵種搭配起來效果超群。
          </p>
          <p>
            如果自己是防禦一方，強弩兵可以隔著牆射殺敵方單位，也可以免受於近戰類的攻擊，但對於<nuxt-link
              to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >則是沒什麼傷害性。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >快生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：弩兵自<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代有額外+1/+2的射程。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：弩兵<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >：弩兵<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link
              >快18%。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：弩兵在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各便宜20%/30%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：弩兵花費<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >成本少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：
              <nuxt-link to="/techs/Chemistry">化學</nuxt-link>免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：弩兵在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代的<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >增加15%/20%。免費<nuxt-link to="/techs/Conscription"
                >徵兵</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：弩兵快生產快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：弩兵<nuxt-link
                to="/los.php"
                >視野</nuxt-link
              >+2。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：弩兵對<nuxt-link to="/building">建築</nuxt-link>攻擊+1。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練時間為27秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練增加到35秒。</li>
            <li>
              對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link
              >的攻擊+3。
            </li>
            <li><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>引進。</li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛人</nuxt-link>引進<nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>移到了<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/techs/Obsidian_Arrows"></nuxt-link
              ><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>新增科技<nuxt-link
                to="/techs/Obsidian_Arrows"
                >黑曜石之箭</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Italians">義大利人</nuxt-link
              >可研發<nuxt-link to="/techs/Pavise">巨盾</nuxt-link>。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link
              >:5.5版後強弩兵從<nuxt-link to="/civs/Indians">印度</nuxt-link
              >的<nuxt-link to="/tree/vie">科技樹</nuxt-link>移除。
            </li>
            <li>
              <nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >有了強弩兵。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              就<nuxt-link to="/resource/Wood">木頭</nuxt-link>而言，<nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >是全遊戲最便宜的<nuxt-link to="/units/Archer_Units"
                >遠距離單位</nuxt-link
              >。
            </li>
            <li>
              30hp，全遊戲生命最低的單位，與<nuxt-link to="/units/Skirmisher"
                >矛兵</nuxt-link
              >、<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
              >、<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>並列。
            </li>
            <li>弓兵是唯一沒有任何防禦的遠距離單位。</li>
            <li>
              在最初的世紀帝國裡面，弓兵和弩兵原本是兩種不同的兵種，弓箭手是便宜、射速快但不準確的垃圾單位，而弩兵則是花費木與金的黃金單位，準確度高、<nuxt-link
                to="/elements/Attack"
                >攻擊力</nuxt-link
              >強，但比較慢。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">強弩兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ArbalestIcon.jpg" width="45" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/units/Archer_Units">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">帝王時代</td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">27秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">40</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +3對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">7</td>
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
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
