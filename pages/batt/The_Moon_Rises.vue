<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>撥雲見月</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>撥雲見月</b>是《世紀帝國II:失落的帝國》中德古拉戰役的第四關戰役。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">帝王時代  </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>3000，
                <nuxt-link to="/resource/Food">食物</nuxt-link>6000，<br>
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>3000，
                <nuxt-link to="/resource/Stone">石頭</nuxt-link>300。
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">145</td>
            </tr>
          </table>
          
          <h3>AI</h3>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家1：
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>（紅色）
            </td>
          </tr>

          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6" width="15%">
              <div class="p7"></div>
              玩家2：
            </td>
            <td class="tc6" width="35%">瓦拉幾亞（灰色）條頓</td>
            <td class="tc6" width="15%">
              <div class="p7"></div>
              玩家3：
            </td>
            <td class="tc6" width="35%">瓦拉幾亞（灰色）馬札爾</td>
          </tr>
          <tr>
            <td class="tc6" width="15%">
              <div class="p7"></div>
              玩家4：
            </td>
            <td class="tc6" width="35%">瓦拉幾亞（灰色）斯拉夫</td>
            <td class="tc6" width="15%">
              <div class="p6"></div>
              玩家6：
            </td>
            <td class="tc6" width="35%">奧斯曼軍營（紫色）土耳其</td>
          </tr>
          
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p4"></div>
              玩家8：
            </td>
            <td class="tc6">鄉村（黃色）斯拉夫</td>
          </tr>
          
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p6"></div>
              玩家5：
            </td>
            <td class="tc6">奧斯曼先鋒部隊（紫色）土耳其</td>
            <td class="tc6">
              <div class="p6"></div>
              玩家7：
            </td>
            <td class="tc6">奧斯曼軍隊（紫色）土耳其 </td>
          </tr>
          
        </table>


<h3>開場</h3>
<li>伊斯特萬城堡陣營:伊斯特萬，1位村民，5位弩兵，5位勁弩兵，5位火槍兵</li> 
<li>雅各布城堡陣營:雅各布，1位村民，5位弩兵，5位勁弩兵，5位火槍兵，一台中型投石車</li>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>德古拉必須活下去。
              <li>伊斯特萬必須活下去。</li>
              <li>雅各布必須活下來。</li>
              <li>1. 取五百土耳其人首級，震懾敵軍！</li>
              <li>2. 突襲村莊，掠奪燒毀一切！並且，剿滅你見到的所有奧斯曼軍隊。</li>
              <li>3. 拖住敵人進攻15分鐘。</li>
              <li>伯恩納里城堡不能被攻陷。</li>
              <li>4. 走山路去東南方與瓦拉幾亞軍隊會面。</li>
              <li>5. 整裝待發將土耳其軍營夷為平地！</li>
              <li>6. 德古拉必須逃往匈牙利！伯恩納里城堡的下水道通向一個山川，德古拉在那裡有只早就就緒的小船。讓德古拉躲進城堡從下水道逃跑！</li>
            </ul>
          </div>
           
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>注意：在某些特定的場景下地圖的一部分或者全部可能無法進入。目標只限於當前可以進入的區域。</li>
              <li>場景的第一部分是一個描述德古拉對第一次奧斯曼入侵的回應的片段。你只需要坐著欣賞就行</li>
              <li>每個堡壘有一些強勢和弱勢以及生產不同的軍隊，所以使用相應的防禦策略並提防敵人的攻城武器！</li>
              <li>德古拉的燒焦土地戰役要求整個鄉村都被夷為平地（摧毀除房屋以外的所有建築或者按指示操作）以及打敗奧斯曼先鋒部隊。</li>
              <li>對奧斯曼軍營的夜襲是極具勇氣的但也註定要失敗的。一旦你損失了大部分軍隊你會接到新的目標。</li>
              <li>弗列德‧德古拉和他的瓦拉幾亞王國可以晉級到帝王時代。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
       <li>德古拉在首都塔格韋斯特開始了征途，他打算率領兩萬兩千大軍（灰色）到多瑙河埋伏附近的奧斯曼軍隊。</li>
       <li>奧斯曼（紫色）是最危險的敵人。他們進入瓦拉幾亞的先鋒部隊包括蘇丹禁衛隊，弓箭手，重騎兵，攻城武器和重裝長槍兵，並且他們還會在前線建立軍營。</li>
       <li>德古拉的瓦拉幾亞王國（灰色）控制著地圖上大多數的小城鎮和堡壘，不惜一切代價也要保護它們。</li>
       <li>奧斯曼先鋒軍（紫色）是一個主要的威脅，並且有一些分佈在地圖上的單位遲早要對付。</li>
       <li>鄉村（黃色）幾乎沒有威脅，因為只有一小撮人保護他們的建築。但如果被土耳其人佔領了，他們可以給大奧斯曼軍隊提供供給。</li>
       <li>在地圖的遠北處是伯恩納里城堡，那是德古拉的城堡（注：現為羅馬尼亞著名景點，懸崖上的吸血鬼城堡）。這是背水一戰的最佳地點。</li>
            </ul>
          </div>
          
          <h3>攻略</h3>
          <div class="hrn1"></div>
          
          <ul>
             <li>
             待補
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
            </li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li></li>
          </ul>
        </div>  
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">撥雲見月</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/DU4.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Draculaa"
                >德古拉戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/The_Breath_of_the_Dragon"
                >龍之喘息</nuxt-link
              >
              </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Night_Falls"
                >暗夜降臨</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、賜齡協助編輯。</div>

          
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
