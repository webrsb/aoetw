<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>穆斯塔法帕夏</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>穆斯塔法帕夏</b>是個<nuxt-link to="/units/Gunpowder_Unit"
              >火藥單位英雄</nuxt-link
            >，在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
            >》資料片之後版本的地圖編輯器出現，穆斯塔法帕夏的名字是以同名的<nuxt-link
              to="/civs/Turks"
              >土耳其</nuxt-link
            >軍事領導人所命名，該名領導者是鄂圖曼帝國最後試圖擴張到中歐和東歐的中心人物。
          </p>
          <p>
            在遊戲中穆斯塔法帕夏的外型是<nuxt-link to="/units/Janissary"
              >土耳其火槍兵</nuxt-link
            >，他會受到所有<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >和<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >加成的影響。他不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
        <div></div>
        <div></div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                穆斯塔法帕夏
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/JanissaryIcon.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="">火藥單位<br />英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">180</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              25(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>+3
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">3.49</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">70%</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">10</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
