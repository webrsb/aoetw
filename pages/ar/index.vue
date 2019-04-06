<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戰術技巧</h1>
        <div class="spw">
          <em
            ><img
              src="~assets/tola.jpg"
              width="50px;"
              alt=""
              style="margin-right:20px;"
            />未完成頁面:這篇文章的作者還在偷懶，所以頁面還不是很完整。</em
          >
        </div>
        <p>
          此頁面為<strong>戰術技巧</strong>研習營，教授入門升級，及基本戰術打法與控兵，不外乎多練習多熟悉。
        </p>
        <div
          class="col-md-3"
          style="border: solid 1px #ccc; padding: 10px; margin: 20px 0px;"
        >
          <div style="text-align: center;"><strong>目錄</strong></div>
          <ul>
            <li><nuxt-link to="#a1">基礎升級</nuxt-link></li>
            <li><nuxt-link to="#a2">主流打法</nuxt-link></li>
            <li><nuxt-link to="#a3">控兵技巧</nuxt-link></li>
          </ul>
        </div>
      </div>
      <div class="hrn1"></div>
    </div>
    <div class="col-md-12">
      <h3 id="a1"><strong>基礎升級</strong></h3>
      <div class="n1">
        <p>
          升級為世紀帝國II最的基礎入門，練好戰術及控兵前，最好把升級熟練到標準內。
        </p>
      </div>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>標準升封建</li>
              <li>標準升城堡</li>
            </ul>
            <div class="col-md-6">
              <p>封快升級教學</p>
              <iframe
                width="100%"
                src="https://www.youtube.com/embed/k16JowVJqUw"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
              ></iframe>
            </div>
            <div class="col-md-6">
              <p>城快升級教學</p>
              <iframe
                width="100%"
                src="https://www.youtube.com/embed/rcDW8haFfkg"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
              ></iframe>
            </div>
            <h3 id="a2"><strong>主流打法</strong></h3>
            <div class="n1">
              <p>
                世紀帝國II發展到今日，已有近20年歷史，從最早曾政承得到世界第一的雙靶場矛衝戰術到後來臺灣香港流行的城快打法，有所謂的<nuxt-link
                  to="/maps/Continental"
                  >大陸</nuxt-link
                ><nuxt-link to="/civs/Huns">匈奴</nuxt-link
                >馬爆、槍弩，<nuxt-link to="/maps/Arabia">阿拉伯</nuxt-link
                >地形的<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                  to="/civs/Turks"
                  >土耳其</nuxt-link
                >和<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >的城堡兵、馬爆、馬弓，和今天阿拉伯單挑的<nuxt-link
                  to="/units/Scout_Cavalry"
                  >斥候</nuxt-link
                >開局、<nuxt-link to="/ar/archerstar">小弓開局</nuxt-link
                >、<nuxt-link to="/ar/armstower">裝甲塔</nuxt-link
                >等等多元的打法。
              </p>
              <p>而這裡所講的是阿拉伯主流打法</p>
            </div>
            <h3>主流打法列表</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="row">
                <div class="col-md-6">
                  阿拉伯：
                  <ul>
                    <li><nuxt-link to="/ar/armstower">裝甲塔</nuxt-link></li>
                    <li><nuxt-link to="/ar/scrush">肉馬開局</nuxt-link></li>
                    <li><nuxt-link to="/ar/archerstar">小弓開局</nuxt-link></li>
                    <li><nuxt-link to="/ar/armstar">裝甲開局</nuxt-link></li>
                    <li><nuxt-link to="/ar/brushtof">黑快轉封</nuxt-link></li>
                    <li><nuxt-link to="/ar/brushfc">黑快搶城</nuxt-link></li>
                    <li><nuxt-link to="/ar/towerrush">純塔攻</nuxt-link></li>
                    <li><nuxt-link to="/ar/eglerush">老鷹開局</nuxt-link></li>
                    <li><nuxt-link to="/ar/fontrush">前置槍矛</nuxt-link></li>
                    <li><nuxt-link to="/ar/bbrush">黑暗爆民兵</nuxt-link></li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <h3 id="a3"><strong>控兵技巧</strong></h3>
                  <div class="n1">
                    <p>
                      控兵為進階技巧之一，在一些比較高端的玩家可以利用巧妙的控兵，把兵力用到最大化，減少損傷並且打擊更多的敵人。
                    </p>
                  </div>
                  <div class="hrn1"></div>
                  <div class="n1">
                    <div class="row">
                      <div class="col-md-12">
                        <ul>
                          <li><strong>拉兵</strong></li>
                          <div class="hrn1"></div>
                          <p>
                            遊戲內最基礎的控兵技巧，近戰單位必用，尤其是封建<nuxt-link
                              to="/units/Scout_Cavalry"
                              >肉馬</nuxt-link
                            >或<nuxt-link to="/units/Militia">民兵</nuxt-link
                            >砍<nuxt-link to="/units/Villager">村民</nuxt-link
                            >時。拉兵意思為對方單位在圍毆你的兵時，把血少的兵拉走，讓敵人追著你其中一隻兵跑，而你其他兵種上前包圍，造成敵人追著你其中一隻跑卻打不到，而你的兵卻可以有效打擊對方。簡單說就是，當<nuxt-link
                              to="/units/Knight"
                              >騎士</nuxt-link
                            >5v5時，有一隻騎士被3隻打的往後拉，造成4打2局面。
                          </p>
                          <p>
                            <nuxt-link to="/units/Archer_Units">遠程</nuxt-link
                            >部隊同樣也可以利用拉兵技巧，當雙方兩隊遠程部隊互射時，可以把自己其中一隻或一小群被攻擊的兵拉走，或是設為巡邏不還擊狀態，讓他在敵人面前左右搖擺，讓敵人射不到，而利用此間隔打擊對方，不過當對方研發<nuxt-link
                              to="/techs/Ballistics"
                              >彈道學</nuxt-link
                            >後，效果將減到最低。
                          </p>
                          <li><strong>包圍</strong></li>
                          <div class="hrn1"></div>
                          <p>
                            為<nuxt-link to="/units/Cavalry_Units"
                              >騎兵</nuxt-link
                            >在打擊遠程部隊時的技巧，由於遠程部隊會靠著走位來點射騎兵或<nuxt-link
                              to="/units/Infantry_Units"
                              >步兵</nuxt-link
                            >等近戰單位，而我方單位只能傻傻的在後面追趕，而一隻隻的被點掉。所以當騎兵遇到整群<nuxt-link
                              to="/units/Crossbowman"
                              >弩兵</nuxt-link
                            >時，必須分散隊形，預判對方行進，衝到敵方前面，阻止對方走位並且破壞他們的集中隊形，這樣不但無法走位也無法點射。而散開衝進去前，事先用不還擊狀態並用巡邏，等就定位時再用自動攻擊。
                          </p>
                          <li><strong>點射</strong></li>
                          <p>
                            點射為最基礎的控弩兵或<nuxt-link
                              to="/units/Cavalry_Archer"
                              >馬弓</nuxt-link
                            >等遠程兵專用，意思為靠著集火讓火力最大化，達到最有效率的殺傷敵人。
                          </p>
                          <li><strong>合兵</strong></li>
                          <p>
                            顧名思義為讓兵合在一起，為遠程兵專用，讓表面受到攻擊的面積最小，增加單位存活率。合兵可以找天然的屏障，如樹木間，或是水岸邊，要不然就是人工的，兩棟<nuxt-link
                              to="/building"
                              >建築物</nuxt-link
                            >之間。如果沒有也可以原地合兵，技巧為按堅守位置並且巡邏再按停止，讓兵重疊在一起。只是遇到敵方的<nuxt-link
                              to="/units/Mangonel"
                              >投石車</nuxt-link
                            >會很頭痛。
                          </p>
                          <li><strong>分散</strong></li>
                          <p>
                            分散主要為閃躲對方攻擊時使用，請善用分散與集中的快捷鍵，讓兵往兩側散開再收合，這在初期一群斥候躲避敵人的箭矢時，相當好用。而遠程部隊閃躲投石車時更是必備。
                          </p>
                          <li><strong>閃躲</strong></li>
                          <p>
                            在還沒有彈道學時，敵方的箭矢很容易閃躲，請與對方單位水平移動，即可把傷害減到最低，在初期斥候探圖被敵人城鎮放箭時必用。
                          </p>
                          <li><strong>分兵</strong></li>
                          <p>
                            與分散與拉兵有異曲同工之妙，當敵人在追著我方單位跑時，把被敵人鎖定的單位拉走，而其他單位向前攻擊，造成他追著你的兵，而被你其他兵砍死的局面，這在初期肉馬殺村被<nuxt-link
                              to="/units/Spearman"
                              >長槍兵</nuxt-link
                            >追趕時，經常使用的一個技巧。
                          </p>
                          <li><strong>卡位</strong></li>
                          <p>
                            與包圍有點相關，但卡位可用在很多地方，例如我方斥候發現對方村民在獵豬時，可以利用斥候堵住村民行進方向，讓村民被豬咬死。或是三民兵在追趕村民時，因為民兵速度只比村民快一點，通常追不太到，無法在敵方村民返回城鎮前，將其打倒，這次可以利用斥候卡位，讓我方民兵上前打死村民。
                          </p>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
      title: '戰術技巧 - Aoetw'
    }
  },
  layout: '',
  components: {}
}
</script>
<style></style>
