<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>暗夜降臨</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>暗夜降臨</b>是《世紀帝國II:失落的帝國》中德古拉戰役的最後一關戰役。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">城堡時代  </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>80000，
                <nuxt-link to="/resource/Food">食物</nuxt-link>80000，<br>
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>80000，
                <nuxt-link to="/resource/Stone">石頭</nuxt-link>0。
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
            <td class="tc6" colspan="3">馬札爾（紅色）
            </td>
          </tr>

          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6" width="15%">
              <div class="p3"></div>
              玩家2：
            </td>
            <td class="tc6" width="35%">匈牙利（綠色）條頓</td>
            <td class="tc6" width="15%">
              <div class="p6"></div>
              玩家3：
            </td>
            <td class="tc6" width="35%">土耳其人(賽巴克)（灰色）馬札爾</td>
          </tr>
          <tr>
            <td class="tc6" width="15%">
              <div class="p7"></div>
              玩家7：
            </td>
            <td class="tc6" width="35%">瓦拉幾亞（灰色）條頓</td>
            <td class="tc6" width="15%">
              <div class="p4"></div>
              玩家8：
            </td>
            <td class="tc6" width="35%">僱傭兵（黃色）義大利</td>
          </tr>
          
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p6"></div>
              玩家4：
            </td>
            <td class="tc6">土耳其突襲兵（紫色）土耳其</td>
            <td class="tc6">
              <div class="p6"></div>
              玩家5：
            </td>
            <td class="tc6">奧斯曼軍隊（紫色）土耳其 </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p5"></div>
              玩家6：
            </td>
            <td class="tc6">巴薩拉布三世（水藍色）斯拉夫</td>
          </tr>
          
        </table>


<h3>開場</h3>
<li>德古拉，1位僧侶，1位輕騎兵，5位騎士，5位馬札爾標騎，5位重裝馬弓騎兵，2台中型衝撞車</li> 
<li>11位劍兵勇士，7位斧槍兵，10位勁弩兵，10位火槍兵，2台重型弩砲。</li>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
           <li>打敗土耳其入侵者。</li> 
           <li>把德古拉帶到瓦拉幾亞城中心的大營 （在地圖上標出）。</li> 
           <li>打敗巴薩拉布三世。</li> 
           <li>打敗奧斯曼軍隊！</li> 
            </ul>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
         <ul>
          <li>-打敗賽巴克的駐軍，攻佔他們的堡壘，這樣匈牙利軍能有合適的基地發動進攻</li> 
          <li>-從今以後，你可以從雇傭軍營（黃色）招募僱傭兵或者熱那亞弩兵。
          點擊營房招募僱傭兵.點擊射箭場雇傭熱那亞弩兵。費用:義大利僱傭兵:60 黃金，熱那亞弩兵:50 黃金</li> 
          <li>-帶領德古拉去工匠的店鋪。</li> 
          <li>-接受工匠的提議，給他2000食物和2000金子，並點選貿易鋪。</li> 
         </ul>

</div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
         <li>德古拉在多瑙河畔的匈牙利軍營開始作戰，他要防禦奧斯曼早期的進攻.</li>
         <li>奧斯曼入侵者（紫色）在多瑙河南邊的幾個軍營發起攻擊，構成威脅，他們會生產弓箭手，騎士，重裝長槍兵以及攻城武器來全力攻打你。</li> 
         <li>匈牙利（綠色）是你最強的盟友，如果你能拖住土耳其並能在瓦拉幾亞建立據點的話匈牙利會用一支由重型騎兵和攻城武器組成的核心力量來幫助你。</li>
         <li>土耳其賽巴克堡壘（紫色）位於多瑙河畔並只有一小撮力量守衛，匈牙利對此垂涎已久。</li>
         <li>瓦拉幾亞（灰色）厭倦了土耳其十年的壓迫並迫切希望幫助德古拉重奪王座。</li>
         <li>篡權者和土耳其傀儡巴薩拉布三世（青綠色）控制著位於塔格韋斯特西北邊的主要的瓦拉幾亞城市和堡壘，
         但他們不受民眾的支持，因此只能支配很弱的一支軍隊.軍隊的核心是支持他的貴族鐵騎。</li>
         <li>目前最大的威脅是奧斯曼軍隊（紫色），他們死守著塔格韋斯特.他們的軍隊能調動一切力量準備背水一戰，
         除最基本的徵用步兵和弓箭手之外還包括蘇丹禁衛隊，突厥重裝騎射，攻城武器以及穆斯林教士. </li>
         <li>僱傭兵（黃色）據傳在瓦拉幾亞建立了一個軍營，或許他們會幫助你…</li>
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
              玩家從匈牙利的西部大本營開始。當前的目標是沿著地圖的西南走廊掃除土耳其突襲者（紫色）。
              他們沿河有四個小基地，最後一個是海邊港口。幸運的是，玩家一開始有巨量的資源，所以他們應該不停地訓練騎士，
              弩兵或馬弓騎兵，長劍兵或長槍兵。玩家有一名僧侶可以用來治療受傷的部隊，特別是開局給的帝王時代部隊，他們是不容易被替換的。
            </li>
            <li>
              然而，在擊敗突襲者之前，玩家應該使用他們分配的資源來研究兵工廠，軍營，射箭場中的裝甲和武器升級。
              突襲者一旦被擊敗，玩家剩餘的資源就會被帶走，只留下他們訓練過的部隊，所以玩家也應該確保最大限度地擴大到他們的人口限制。
            </li>
            <li>
              德古拉現在被告知搬到灰色的市中心，玩家將獲得永久基地。然而，在將他移到那里之前，建議在沿著路徑途中的剩餘紫色城鎮外面放置一支大軍
              - 一條可以在河對岸看到那些尚未被允許移動的部隊。一旦德古拉和一些護送人員到達新的（灰色）基地並將其移交給玩家，
              現在可以攻擊前面提到的紫色基地 - 擊敗紫色駐軍並將整個城鎮讓給匈牙利（綠色），這將使綠色成為未來戰鬥中加強大的盟友。
              在困難的難度中，快速拿下這個城鎮給綠色是必須的。幸運的是，如果玩家立即進行攻擊，軍隊有足夠的時間來保護這個城市，
              然後在敵人開始認真攻擊之前移動到玩家的新基地。
            </li>
            <li>
              比起過橋攻擊青色和紫色，相反地玩家應該建立他們的基地和收集資源，以及強化附近的綠色基地。用幾個城門圍住城鎮，
              特別是在城鎮南邊的河流穿越處，這樣敵人的軍隊就不能在玩家這邊四處遊蕩，也不能到達匈牙利的盟友基地。雖然基地空間狹小，
              但是有幾個地方可以通過刪除一些最初的木牆或東南邊的農田來建造城堡，或者砍掉山上的一些落葉樹 - 進而讓敵人通過城堡防守的窄口，在玩家建立經濟的同時防禦敵人。
            </li>
            <li>
              玩家有可選擇的目標，他們非常有必要採取這些目標：附近的工匠（灰色的條頓騎士）為玩家提供了很多優惠（帝國時代升級為2,000種食物和黃金，使城堡年齡限製成為一個有爭議的點） 和意大利僱傭兵（黃色，到球員的東北部）提供熱那亞弩兵和步兵金（分別點擊射箭場和軍營）。 建議在購買意大利僱傭兵之前建立最高人口限制（200），以便擁有更大的突擊力量。
            </li>
            <li>
            
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
              <div class="unititle2">暗夜降臨</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/D5.jpg" alt="" /></div>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第二章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/The_Moon_Rises"
                >撥雲見月</nuxt-link
              >
              </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4"> N/A
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
