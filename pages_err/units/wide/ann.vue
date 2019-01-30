<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>野生動物</h1>
          <div class="hrn1"></div>
        </div>
        <div class="spw"><em><img src="~assets/Cuauhtemocicon.png" width="50px;" alt="" style="margin-right:20px;">動物保護協會長-蘇打泡表示：此頁面沒有包含座騎單位，座騎單位請看：<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>。</em>
        </div>
        <div class="col-md-8">野生動物是遊戲中出現的野外動物，牠們有的可以提供食物，是遊戲初期獲取食物的一大來源。而有些是對人類不友善的動物，牠們會主動攻擊我方單位（除了僧侶、斥侯、鷹勇士、國王與攻城武器）。</div>
        <div
        class="col-md-4">
          <img src="~assets/okd.jpg" width="300" alt="">
          <p>在非洲王國出現的野生動物。</p>
      </div>
      <div class="col-md-12">
         <h3>野生動物列表</h3>
        <div class="hrn1"></div>
        <div class="col-md-12">
          <div class="col-md-3"><strong>不可馴化可食用</strong>
            <ul>
              <li><nuxt-link to="/unitsanimal/Deer">鹿</nuxt-link>
              </li>
              <li><nuxt-link to="/unitsanimal/Iron_Boar">鐵野豬</nuxt-link>
              </li>
              <li><nuxt-link to="/Wild_Boar.php">野豬</nuxt-link>
              </li>
              <li><nuxt-link to="/unitsanimal/Zebra">斑馬</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Elephant">象</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Ostrich">鴕鳥</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Rhinoceros">犀牛</nuxt-link> 
              </li>
              <li><nuxt-link to="/Alfred_the_Alpaca.php">魚類</nuxt-link> 
              </li>
            </ul>
          </div>
          <div class="col-md-3"><strong>可馴化可食用</strong>
            <ul>
              <li><nuxt-link to="/unitsanimal/Sheep">羊</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Turkey"><nuxt-link to="">火雞</nuxt-link> 
              </li>
              <li>駱駝</li>
              <li><nuxt-link to="/unitsanimal/Cow"><nuxt-link to="">牛</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Goat"><nuxt-link to="">山羊</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Water_Buffalo"><nuxt-link to="">水牛</nuxt-link>
              </li>
            </ul>
          </div>
          <div class="col-md-3"><strong>不可食用</strong>
            <ul>
              <li><nuxt-link to="/unitsanimal/Wolf"><nuxt-link to="">狼</nuxt-link> 
              </li>
              <li><nuxt-link to="/Jaguar.php"><nuxt-link to="">豹</nuxt-link> 
              </li>
              <li><nuxt-link to="/units/wide/Wild_Horse"><nuxt-link to="">馬</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Bear"><nuxt-link to="">熊</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Llama"><nuxt-link to="">駱駝</nuxt-link> 
              </li>
              <li><nuxt-link to="/units/wide/Donkey">驢</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Tiger">虎</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Lion">獅子</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Crocodile">鱷魚</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Komodo_Dragon">科莫多巨蜥</nuxt-link> 
              </li>
            </ul>
          </div>
          <div class="col-md-3"><strong>裝飾動物</strong>
            <ul>
              <li><nuxt-link to="/unitsanimal/Hawk">鷹</nuxt-link> 
              </li>
              <li><nuxt-link to="/unitsanimal/Macaw">金剛鸚鵡</nuxt-link>
              </li>
              <li>禿鷹</li>
            </ul>
          </div>
        </div>
      </div>
      
</template>
<script>
export default {
  layout: 'allwide',
  components: {
  }
}
</script>
<style>
</style>