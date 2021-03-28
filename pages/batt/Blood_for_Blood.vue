<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>血債血償</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>血債血償</b>是<nuxt-link to="/batt/Kotyan_Khan">可泰安汗戰役</nuxt-link>的第四關。可泰安汗在一次匈牙利的宴會中被暗殺，<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>部族的首領們發誓要這些匈牙利人血債血償。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                100<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／100<nuxt-link to="/resource/Food">食物</nuxt-link
                >／100<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／0<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
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
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Cumans">庫曼人</nuxt-link>（綠色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">奧地利人（紅色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link></td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">匈牙利人（藍色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link></td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">庫曼人（青色）庫曼</td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">匈牙利貴族（橙色）馬扎爾</td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">韃靼人（黃色）<nuxt-link to="/civs/Tatars">韃靼</nuxt-link></td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x2、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>x4、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>x2、<nuxt-link to="/units/Kipchak">欽察</nuxt-link>x2
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>第一階段</p>
            <ul>
              <li>前往庫曼營地報到。</li>
              <li>探索鄉間，尋找幫助匈牙利人的機會。</li>
              <li>
                次要任務：保護匈牙利村莊不受韃靼掠奪者襲擊。只要當地的<nuxt-link to="/units/Villager">村民</nuxt-link>還活著，就會向您輸送資源。
              </li>
              <li>
                次要任務：護送商人和他的<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>，直到他們抵達下一個村莊。
              </li>
              <li>次要任務：殺死匈牙利營地附近沼澤中所有的韃靼士兵。</li>
              <li>次要任務：將牛推車送到庫曼營地，獲取更多資源和<nuxt-link to="/units/Kipchak">欽察</nuxt-link>戰士。</li>
            </ul>
            <p>第二階段</p>
            <ul>
              <li>闖入韃靼人的營地，搶走至少一架<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>。</li>
              <li>闖入匈牙利城市，奪取當地的<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>。</li>
              <li>找到安全的登陸點，前往多瑙河南側的庫曼營地。</li>
            </ul>
            <p>第三階段</p>
            <ul>
              <li>
                摧毀多瑙河南側的9個匈牙利村莊(3，藍色)中的6個，懲罰匈牙利人，並獲取更多資源。
              </li>
              <li>
                摧毀匈牙利貴族(6，橙色)控制的2座<nuxt-link to="/building/Castle">城堡</nuxt-link>，報復他們殺死可泰安的罪行。
              </li>
              <li>
                奧地利人和匈牙利人打算合力打敗您，趕緊逃跑吧！至少帶10名士兵，抵達西北方標記區域。
              </li>
              <li>次要任務：將牛推車送到庫曼營地，獲取更多資源和欽察戰士。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>庫曼人無法建造任何新<nuxt-link to="/building">建築</nuxt-link>。</li>
              <li>
                匈牙利人需要擊退韃靼的掠奪者。別忘了四處查訪，找到所有需要幫助的人。
              </li>
              <li>
                牛推車中的戰利品很珍貴，因此要仔細防守。帶您到庫曼營地的每輛車都將為您提供資源和一個免費的欽察<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                貝拉國王已下令召集他的貴族和庫曼盟友，準備迎戰<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>的入侵。一隊庫曼戰士(1，綠色)已從北方抵達，與本地的庫曼首領(5，青色)在附近的營地會合報到。多瑙河南側還有一個這樣的營地。
              </li>
              <li>
                匈牙利人(3，藍色)需要您的幫助。他們的村莊分散在這個區域中，不斷受到韃靼掠奪者(4，黃色)的威脅。這些劫掠這的營地在東邊。
              </li>
              <li>
                本區域內的匈牙利貴族(6，橙色)響應國王的戰鬥號召時並不積極，仿佛還有些憎恨他們的國王。據說腓特烈公爵(2，紅色)和他的奧地利<nuxt-link to="/units/Knight">騎士</nuxt-link>也已前來協助抵禦蒙古人，但據傳他們在匈牙利貴族之間引發了更多的不滿。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <p>第一階段</p>
          <ul>
            <li>
              本關沒有<nuxt-link to="/units/Villager">村民</nuxt-link>，分三階段，第一階段要幫匈牙利人抵抗韃靼人的掠奪。先去庫曼人的營地，途中匈牙利村莊會遭到攻擊，經過一座<nuxt-link to="/building/Monastery">修道院</nuxt-link>時也會遭到攻擊，快速迎戰，尤其<nuxt-link to="/building/Monastery">修道院</nuxt-link>那邊絕對不能讓<nuxt-link to="/units/Monk">僧侶</nuxt-link>被殺死，因為第一階段只有他能治療我方的軍隊。將之都處理掉後去庫曼的營地，可以讓您使用那邊的設施訓練士兵和升級武器。將牛推車帶去那邊可以換得些許資源和一名<nuxt-link to="/units/Kipchak">欽察</nuxt-link>。
            </li>
            <li>
              之後就是在這片區域逛逛，看匈牙利人有沒有什麼需求就幫助他們，解完後就會獲得一輛牛推車，或是地圖上也能找到零星的幾輛。當所有能幫的都幫完以後，信使會告知可泰安汗被暗殺的消息，對匈牙利和貴族的關係會轉敵對，此時那支修道院的僧侶會是個威脅，在任務解完之前可以先在他旁邊佈署一兩隻<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>等轉敵對就直接砍了他。
            </li>
          </ul>
          <p>第二階段</p>
          <ul>
            <li>
              隨後要破壞敵人的防禦工事渡河到對岸，在那之前要先去韃靼人的營地取得<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>，將營地的兵消滅後就可以利用巨型投石機破壞中央的防禦工事，奪取運輸船了。由於往上方有數位不少的<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>和<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>守著，因此從下方登陸到對岸。
            </li>
            <li>
              如果選高難度，要注意下方在巨投那營地附近的岸邊也有幾艘<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>船，要先用弓<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>隊將之破壞掉。
            </li>
          </ul>
          <p>第三階段</p>
          <ul>
            <li>
              任務目標要抵達庫曼村莊、並摧毀至少六座解決匈牙利村莊來報復匈牙利，到達營地後任務再增加摧毀兩座匈牙利貴族的<nuxt-link to="/building/Castle">城堡</nuxt-link>。困難難度下營地沒有僧侶能治療部隊因此要注意控兵。摧毀匈牙利村莊的置物所可掠奪一些資源，破壞<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>、<nuxt-link to="/building/Dock">碼頭</nuxt-link>、<nuxt-link to="/building/Market">市集</nuxt-link>、貿易工坊等可以獲得牛推車，推到新的營地依然可獲得一些資源與一名欽察。推掉一座匈牙利貴族的城堡時會自動升級至<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>以及得到數為不少的資源，利用這些資源繼續訓練軍隊以及升級護甲。
            </li>
            <li>
              一旦推掉六座匈牙利村莊和兩座匈牙利貴族的城堡時，紅色奧地利會馬上轉敵對，新的任務目標是要有至少十位士兵到達指定地點。不要管路上的敵軍，直接衝到指定地點即可。
            </li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關沒有房子（第一階段任務途中有蒙古包，但是渡河後會轉回給青色），但人口上限固定100。類似<nuxt-link to="/games/de">決定版</nuxt-link>征服家園中馬扎爾的<nuxt-link to="/techs/Nomads">游牧</nuxt-link>機制。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">血債血償</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
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
              決定版
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Kotyan_Khan">可泰安汗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              庫曼
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
              可泰安汗第四章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/Saving_the_Huts">拯救棚屋</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4"><nuxt-link to="/batt/A_New_Home">新的家園</nuxt-link></td>
          </tr>
        </table>
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
