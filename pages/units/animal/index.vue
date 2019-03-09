<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>野生動物</h1>
        <div class="hrn1"></div>
      </div>
      <div class="spw">
        <em
          ><img
            src="~assets/Cuauhtemocicon.png"
            width="50px;"
            alt=""
            style="margin-right:20px;"
          />動物保護協會長-蘇打泡表示：此頁面沒有包含座騎單位，座騎單位請看：<nuxt-link
            to="/units/Cavalry_Units"
            >騎兵</nuxt-link
          >。</em
        >
      </div>
      <div class="col-md-8">
        <b>野生動物</b>是遊戲中出現的野外動物，牠們有的可以提供<nuxt-link
          to="/resource/Food"
          >食物</nuxt-link
        >，是遊戲初期獲取食物的一大來源。而有些是對人類不友善的動物，牠們會主動攻擊我方單位（除了<nuxt-link
          to="/units/Monk"
          >僧侶</nuxt-link
        >、<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>、<nuxt-link
          to="/units/Eagle_Warrior"
          >鷹勇士</nuxt-link
        >、<nuxt-link to="/units/King">國王</nuxt-link>與<nuxt-link
          to="/units/Siege_Weapons"
          >攻城武器</nuxt-link
        >）。
      </div>
      <div class="col-md-4">
        <img src="~assets/okd.jpg" width="300" alt="" />
        <p>在<nuxt-link to="/games/ak">非洲王國</nuxt-link>出現的野生動物。</p>
      </div>
      <div class="col-md-12">
        <h3>野生動物列表</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <strong>不可馴化可食用</strong>
            <ul>
              <li><nuxt-link to="/units/animal/Deer">鹿</nuxt-link></li>
              <li>
                <nuxt-link to="/units/animal/Iron_Boar">鐵野豬</nuxt-link>
              </li>
              <li><nuxt-link to="/units/animal/Wild_Boar">野豬</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Zebra">斑馬</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Elephant">象</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Ostrich">鴕鳥</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Rhinoceros">犀牛</nuxt-link></li>
              <li><nuxt-link to="/units/animal/fish">魚類</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-3">
            <strong>可馴化可食用</strong>
            <ul>
              <li><nuxt-link to="/units/animal/Sheep">羊</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Turkey">火雞</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Camel">駱駝</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Cow">牛</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Goat">山羊</nuxt-link></li>
              <li>
                <nuxt-link to="/units/animal/Water_Buffalo">水牛</nuxt-link>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <strong>不可食用</strong>
            <ul>
              <li><nuxt-link to="/units/animal/Wolf">狼</nuxt-link></li>
              <li><nuxt-link to="/Jaguar.php">豹</nuxt-link></li>
              <li>
                <nuxt-link to="/units/animal/Wild_Horse">馬</nuxt-link>
              </li>
              <li><nuxt-link to="/units/animal/Bear">熊</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Llama">駱駝</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Donkey">驢</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Tiger">虎</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Lion">獅子</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Crocodile">鱷魚</nuxt-link></li>
              <li>
                <nuxt-link to="/units/animal/Komodo_Dragon"
                  >科莫多巨蜥</nuxt-link
                >
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <strong>裝飾動物</strong>
            <ul>
              <li><nuxt-link to="/units/animal/Hawk">鷹</nuxt-link></li>
              <li><nuxt-link to="/units/animal/Macaw">金剛鸚鵡</nuxt-link></li>
              <li>禿鷹</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: '動物 - Aoetw'
    }
  },
  layout: '',
  components: {}
}
</script>
<style></style>
