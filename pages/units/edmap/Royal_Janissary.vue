<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>皇家衛兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >中，<b>皇家衛兵</b>是不可生產的<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >。 它僅在地圖編輯器中可用。除了命中率外，它的各種數據與<nuxt-link
              to="/civs/Turks"
              >土耳其</nuxt-link
            >特殊 單位(精英)完全相同。
          </p>
        </div>
        <h3>冷知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>土耳其火槍兵</b
            >最初是以皇家衛士的造型，那為何不使用呢?其原因是“因為
            測試人員和評論會討論說，皇家衛士看起來像是”KU Klux
            Klan“成員”(美國極端組織)。 儘管直到“<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >”前並沒有作為一個單位出現，皇家猶太人仍然在清真寺內駐守
            ，在“世紀帝國II”
            威廉華萊士運動的行軍和戰斗場景開始時播放的截圖之一。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery>
                <img src="~assets/Royal Janissary.png" alt="" />
              </gallery>
              <em
                ><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
                >與皇家衛兵</em
              >
            </div>
            <div class="col-md-4">
              <gallery>
                <img src="~assets/KKK_night.jpg" alt="" />
              </gallery>
              <em>KU Klux Klan(3K黨)</em>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                皇家衛兵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Royal Janissary.jpg" width="45" alt="" />
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
              <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">資料片</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link>
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
            <td class="unit4">55</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">22</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td>
              +3對 <nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.49</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              >、<nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >
              、<nuxt-link to="/units/Unique_Unit$">特殊單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">10</td>
          </tr>
        </table>

        <div class="thanks"></div>
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
