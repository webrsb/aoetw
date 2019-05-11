<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>團隊加分</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <img
            style="margin-right:5px;"
            src="~assets/Reynalddechatillonicon.png"
            alt=""
          /><em>沙底隆的雷諾：沒什麼好說的</em>
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>團隊加分</b>是指一個<nuxt-link to="/civs">文明</nuxt-link
            >的特殊加成可以與同盟玩家共享，兩個文明相同的加成並不會重複加成，但不同文明的可以重複。如果同盟被擊敗，他的同盟加成依然有效。
          </p>
        </div>
        <h3>所有文明團隊加分列表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>文明</th>
                  <th>團隊加分</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link></td>
                  <td>
                    <nuxt-link to="/elements/Relic">遺跡</nuxt-link
                    >生產的<nuxt-link to="/resource/Gold">黃金</nuxt-link
                    >快33％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                    >的<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                    >可以訓練<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
                  </td>
                  <td>
                    射箭場效率快20％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
                  </td>
                  <td>
                    一開始顯示遺跡在地圖上。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Monk">僧侶</nuxt-link>治療速度快50％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units//building/Siege_Workshop"
                      >攻城器製造所</nuxt-link
                    >效率快20％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Chinese">中國</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Farm">農田</nuxt-link
                    >多45<nuxt-link to="/resource/Food">食物</nuxt-link>。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Outpost">哨站</nuxt-link
                    >與<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                    ><nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link
                    >+3。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Knight">騎士</nuxt-link>擁有+2視野。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Goths">哥德</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Barracks">軍營</nuxt-link
                    >效率快20％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Huns">匈奴</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Stable">馬廄</nuxt-link
                    >效率快20％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Indians">印度</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
                    >對<nuxt-link to="/armor/Armor_Class_Building"
                      >建築物</nuxt-link
                    >有+5攻擊。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Incas">印加</nuxt-link>
                  </td>
                  <td>
                    建造農田快50％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Italians">義大利</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                    >可以於軍營生產<nuxt-link to="/units/Condottiero"
                      >傭兵</nuxt-link
                    >
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Japanese">日本</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
                    >多50％的視野。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Khmer">高棉</nuxt-link>
                  </td>
                  <td>
                    弩砲有+1射程。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Mangonel">投石車</nuxt-link
                    >最小範圍減少。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
                    >+2視野。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Malay">馬來</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Dock">碼頭</nuxt-link
                    >擁有100％的視野。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Malians">馬利</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/University">學院</nuxt-link
                    >研究速度快80％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
                    >便宜50％。<nuxt-link to="/building/Stone_Wall"
                      >石牆</nuxt-link
                    >-2石頭<nuxt-link to="/building/Palisade_Wall"
                      >木牆</nuxt-link
                    >-1木材。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                    >+2視野。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Persians">波斯</nuxt-link>
                  </td>
                  <td>
                    騎士對弓箭手+2攻擊。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
                    >即可免費製圖。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
                  </td>
                  <td>
                    弓箭手對<nuxt-link to="/armor/Armor_Class_Building"
                      >建築物</nuxt-link
                    >+1攻擊。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
                  </td>
                  <td>
                    軍事<nuxt-link to="/building">建築</nuxt-link>提供+5人口。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
                  </td>
                  <td>
                    貿易快25％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
                  </td>
                  <td>
                    所有單位提高抗<nuxt-link to="/elements/Conversion"
                      >招降</nuxt-link
                    >能力。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
                  </td>
                  <td>
                    <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
                    >訓練快20％。
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
                  </td>
                  <td>
                    帝王時代射箭場可以升級<nuxt-link
                      to="/units/Elite_Skirmisher"
                      >戰矛兵</nuxt-link
                    >到<nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >
                  </td>
                </tr>
                <tr>
                  <td>
                    <nuxt-link to="/civs/Vikings">維京</nuxt-link>
                  </td>
                  <td>
                    碼頭便宜15％。
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allen',
  components: {}
}
</script>
<style></style>
