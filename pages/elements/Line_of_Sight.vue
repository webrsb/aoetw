<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>視野</h1>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>視野(Line of Sight)</b
            >，簡寫為<b>LOS</b>，在策略遊戲中是非常重要的元素。視野是指一個<nuxt-link
              to="/units"
              >單位</nuxt-link
            >正在向其所有者（通常是盟友，很少是敵人）揭露在其周圍區域的戰爭迷霧下的面貌，並用一個數字來表示揭露的距離。
          </p>
          <p>
            隨著單位移動，被創造，<nuxt-link to="/building">建築物</nuxt-link
            >被建造，圍繞它們的戰爭迷霧將被清除，而一個單位的死亡會讓戰爭迷霧重新掩蓋該區域。由於單位和<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >的視野不同，有些比較適合偵察的目的，所以大多數遊戲都有特別著重於偵察技能的單位。
          </p>
        </div>
        <h3>演進</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              雖然傳統的棋盤遊戲為所有參與者提供了所有的訊息，但即時戰略遊戲(Real
              Time
              Strategy-RTS)使用戰爭迷霧和視野來保護一個玩家的動作和決定不被其他玩家知道，除非被偵查到。因此，每個玩家具有他自己的視野領域，其通常不同於其他玩家，而這些領域是允許彼此重疊的。因此衝突總是在重疊的視野內發生。
            </li>

            <li>
              像星海爭霸這樣的RTS遊戲只會在灰色地方隱藏對手的信息，同時向所有玩家展示地圖所有設置的訊息。世紀帝國系列則更往前了一步。地圖是隨機生成的，不僅可以隱藏自己的信息，還可以隱藏所有玩家的信息。因此，除了對地圖的觀察之外，還需要初始的探索來揭露整張地圖。
            </li>
            <li>
              消除<b>戰爭迷霧</b>是非常重要的，一旦玩家用盡起始資源，就必須找到後續的資源，同時了解地圖設置，以及在地圖上找到敵人甚至是盟友為未來做規劃，移除這些迷霧方能掌握敵方動向並控制某些區域。
            </li>
            <li>
              <nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link
              >的規則有點不同。雖然他們自己在世紀帝國系列中的視野通常與他們的射程相同甚至於超過他們的範圍，但是其他玩家在被這些遠程單位擊中時會發現它們，即使該遠程單位超出玩家的視野所及。因為在很短的時間內系統判定玩家的單位受到傷害而切換到受害者玩家的視野中，以顯示確切的攻擊來自何處。
            </li>
          </ul>
        </div>
        <h3>視野相關科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">世紀帝國II</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Cartography">製圖學</nuxt-link
              >可讓同盟分享彼此的視野。該<nuxt-link to="/techs">科技</nuxt-link
              ><nuxt-link to="/civs/Portuguese">葡萄牙人</nuxt-link
              >免費獲得，所以他們一開局就能跟同盟分享彼此的視野。
            </li>
            <li>
              <nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>給<nuxt-link
                to="/building"
                >建築</nuxt-link
              >單位+4視野範圍
            </li>
            <li>
              <nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >給<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >單位+4視野範圍
            </li>
            <li>
              <nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link>給<nuxt-link
                to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >+2視野範圍
            </li>
          </ul>
          <p>P.S:任何增加射程的科技也能增加視野。</p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-6">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Explorerlos.jpg"
                  alt=""
              /></gallery>
              <p><em>一個單位的視野範圍範例。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allen' })

export default {
  components: {}
}
</script>
<style></style>
