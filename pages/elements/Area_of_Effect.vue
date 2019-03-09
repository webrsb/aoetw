<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>擴散範圍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p><b>擴散範圍</b>是指攻擊時可以一次影響多個區域。</p>
        </div>
        <h3>概說</h3>
        <div class="hrn1"></div>
        <div class="n1">
          擴散範圍可以一次攻擊大範圍的面積，在區域內的單位都可能受到傷害，而影響面積也包含樹木。擴散範圍的攻擊也會攻擊到自己或是同盟的單位，這點是需要注意的。
          <p>以下單位擁有擴散範圍的攻擊，標有*的是攻擊不分敵我的</p>
          <ul>
            <li>
              <nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
              >*、<nuxt-link to="/units/Onager">中型投石車</nuxt-link
              >*、<nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>*
            </li>
            <li>
              <nuxt-link to="/units/Petard">爆炸桶</nuxt-link>(他不是<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >)
            </li>
            <li>
              <nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >、中型<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >、<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
            </li>
            <li><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>*</li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>的<nuxt-link
                to="/units/Trebuchet"
                >投石機</nuxt-link
              >(<nuxt-link to="/techs/Warwolf">戰狼</nuxt-link>)
            </li>
            <li><nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link></li>
          </ul>
        </div>
        <h3>踐踏傷害</h3>
        <div class="hrn1"></div>
        <div class="n1">
          特定的重騎兵單位可以只造成敵軍傷害的擴散攻擊，擁有此技能的單位非常好用，因為可以更有效率的攻擊敵人，能夠一次打擊多個單位。
          <p>以下單位擁有踐踏的傷害</p>
          <ul>
            <li>
              <nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >：研發後勤後，可對鄰近單位與<nuxt-link to="/building"
                >建築物</nuxt-link
              >造成5點的傷害（不受防禦影響）
            </li>
            <li>
              <nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >：戰象將造成相鄰敵人50％傷害。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              ><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >：在研發<nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link
              >後，步兵對鄰近0.5格的單位有5的<nuxt-link
                to="/elements/Area_of_Effect"
                >踐踏傷害</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >/重型衝撞車：可以對敵方建築物造成全面性的傷害，<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >研發<nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link
              >後，可加大傷害半徑。
            </li>
            <li>
              <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
              >（精銳）：將造成相鄰敵人50％傷害
            </li>
          </ul>
          <p>重型衝撞車可一次摧毀多個建築物，特別是牆</p>
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
