<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻擊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            一個單位的<b>攻擊力</b>是對對手單位造成的傷害。裝備可以根據各個遊戲不同的裝甲分類系統對其他單位類型造成額外傷害。這個攻擊獎勵不取決於目標單位的護甲，但是護甲仍然會從目標單位接受的傷害量中減去。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <p>
                幾乎所有的軍事單位的攻擊都可以透過<nuxt-link
                  to="/building/Blacksmith"
                  >兵工廠</nuxt-link
                >或<nuxt-link to="/building/University">學院</nuxt-link
                >研究某些技術來增強，如果某一個單位或<nuxt-link to="/building"
                  >建築</nuxt-link
                >透過技術而提高能力，那麼附加的攻擊就會顯示在單位的訊息欄裡面，例如<nuxt-link
                  to="/units/Archer_Units"
                  >弓兵</nuxt-link
                >在研發<nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link
                >後，攻擊將變成4+1
              </p>
              <p>
                遊戲中攻擊會針對某些<nuxt-link to="/armor">防禦類型</nuxt-link
                >而加成，大多數的時候對一個單位加成，但有時候會對多個單位，在這種情況下攻擊加成會累加，例如<nuxt-link
                  to="/units/Elite_Skirmisher"
                  >戰矛兵</nuxt-link
                >對<nuxt-link to="/armor/Armor_Class_Archer">射手類</nuxt-link
                >有+4額外攻擊對<nuxt-link to="/units/Cavalry_Archer"
                  >馬弓騎兵類</nuxt-link
                >有+2額外攻擊，而擁有<nuxt-link to="/armor">遠程護甲</nuxt-link
                >與馬弓<nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵防禦</nuxt-link
                >的<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                >，被戰矛兵的加成就是4+2，共6點的加成，配上自己本身的攻擊3，就是一次9點的攻擊。然後遊戲裡面的<nuxt-link
                  to="/tree/vie"
                  >科技樹</nuxt-link
                >並不會寫的這麼明確。
              </p>
            </div>
          </div>
        </div>
        以下列表：近戰與<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>傷害
        <div class="row">
          <div class="col-md-6">
            <strong>近戰傷害</strong>
            <ul>
              <li><nuxt-link to="/units/Villager">村民</nuxt-link></li>
              <li>
                所有<nuxt-link to="/building/Barracks">軍營</nuxt-link
                >和<nuxt-link to="/building/Stable">馬廄</nuxt-link>單位
              </li>
              <li>
                所有<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
                >的<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
                >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                >，包含<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
                >、<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
                >和<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>。
              </li>
              <li><nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link></li>
              <li><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link></li>
              <li><nuxt-link to="/units/hero/Saboteur">破壞者</nuxt-link></li>
              <li><nuxt-link to="/units/Demolition_Ship">爆破船</nuxt-link></li>
              <li>
                <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
              </li>
              <li><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-6">
            <strong>遠程傷害</strong>
            <ul>
              <li>
                所有<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                >單位
              </li>
              <li>
                所有特殊單位的<nuxt-link to="/units/Archer_Units"
                  >射手</nuxt-link
                >
              </li>
              <li><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link></li>
              <li>
                <nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link>
              </li>
              <li><nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link></li>
              <li>
                <nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>
              </li>
              <li>弩砲</li>
              <li><nuxt-link to="/units/Trebuchet">投石機</nuxt-link></li>
              <li><nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link></li>
              <li><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link></li>
              <li><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link></li>
              <li><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link></li>
              <li>
                所有攻擊性建築，包含<nuxt-link to="/building/Bombard_Tower"
                  >火砲塔</nuxt-link
                >
              </li>
            </ul>
          </div>
        </div>
        <h3>瑣事</h3>
        <div class="hrn1"></div>
        <div class="col-md-12">
          <div class="n1">
            <ul>
              <li>最高攻擊的是投石機（200）</li>
              <li>
                非0的最低攻擊是<nuxt-link to="/units/Fire_Galley"
                  >火艨艟</nuxt-link
                >（1）
              </li>
              <li>
                最高的<nuxt-link to="/building">建築物</nuxt-link
                >攻擊是火砲塔（120）
              </li>
              <li>
                非0的最低攻擊是<nuxt-link to="/building/Watch_Tower"
                  >暸望台</nuxt-link
                >與<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
                >（5）
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allen' })

export default {
  components: {}
}
</script>
<style></style>
