<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>新的家園</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>新的家園</b>是<nuxt-link to="/batt/Kotyan_Khan"
              >可泰安汗戰役</nuxt-link
            >的第五關也是最終關。該關有兩個分歧，玩家必須選擇留在匈牙利替可泰安汗報仇或是前往<nuxt-link
              to="/civs/Bulgarians"
              >保加利亞</nuxt-link
            >展開新的生活。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                100<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／100<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／50<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
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
                <nuxt-link to="/civs/Cumans">庫曼人</nuxt-link>（綠色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家2
              </td>
              <td class="tc6">
                庫曼人（青色）<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">
                匈牙利人（藍色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家6
              </td>
              <td class="tc6">
                <nuxt-link to="/civs/Bulgarians">保加利亞人</nuxt-link
                >###（灰色）保加利亞
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家8
              </td>
              <td class="tc6">
                拜占庭人（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家4
              </td>
              <td class="tc6">
                奧地利人（紅色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">匈牙利貴族（橘色）馬扎爾</td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家7
              </td>
              <td class="tc6">
                拉丁帝國（黃色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              庫曼汗x1
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                跟隨庫曼汗首領前往多瑙河。
              </li>
              <li>
                登上前往保加利亞的<nuxt-link to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >或前往匈牙利村莊來留在匈牙利。
              </li>
            </ul>
            <p>匈牙利</p>
            <ul>
              <li>不要讓匈牙利人(3，藍色)被打敗。</li>
              <li>打敗匈牙利貴族(5，橙色)。</li>
              <li>打敗奧地利人(4，紅色)。</li>
              <li>
                次要任務：找到被毀的匈牙利<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >(<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>)。
              </li>
              <li>
                次要任務：若要占領匈牙利村裝，您必須摧毀村內的敵方<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >。這些村莊會向其控制者輸送資源。
              </li>
              <li>
                次要任務：將牛推車和牛戰車送到城堡廢墟(世界奇觀)前的標記區域後，您將獲得更多資源與<nuxt-link
                  to="/units/Villager"
                  >村民</nuxt-link
                >。
              </li>
            </ul>
            <p>保加利亞</p>
            <ul>
              <li>跟隨保加利亞人返回他們的營地。</li>
              <li>解放保加利亞村民。</li>
              <li>打敗拉丁帝國(7，黃色)並為保加利亞人奪回塞伯爾城。</li>
              <li>打敗拜占庭人(8，紫色)或保衛正在建造世界奇觀的保加利亞人。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                庫曼人的人口上限為150人且不能建造<nuxt-link to="/building/Dock"
                  >碼頭</nuxt-link
                >。
              </li>
            </ul>
            <p>匈牙利</p>
            <ul>
              <li>
                貝拉國王統治下的匈牙利人將陸續參戰。因此保護他們對您最有利。
              </li>
              <li>
                眾多匈牙利村莊會向所有提供保護之人提供資源。村中被摧毀的<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >愈多，資源產量愈低。您可以幫助貝拉國王征服村莊，或是將其燒為平地，讓您的敵人也得不到更多資源。
              </li>
              <li>匈牙利境內仍有庫曼人。如果您能找到，他們就會加入您。</li>
            </ul>
            <p>保加利亞</p>
            <ul>
              <li>
                保加利亞人最近遭到叛亂，再加上統治者比較柔弱，因此實力不比以往，不要期望他們能提供很多幫助。不過他們偶爾會提供<nuxt-link
                  to="/units/Konnik"
                  >保加利亞騎兵</nuxt-link
                >。
              </li>
              <li>
                內塞伯爾城的補給來自海上，因此無法將其守軍困死。只有透過正面進攻，才能打破堅固的防禦。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                大隊庫曼<nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                >。
              </li>
              <li>
                匈牙利位於西邊。貝拉國王(3，藍色)已對奧地利的非腓特烈公爵(4，紅色)和反叛的匈牙利貴族(5，橙色)發動進攻。奧地利軍包括<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                >、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
                >和<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
                >，匈牙利叛軍則會訓練<nuxt-link to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                >、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
                >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。
              </li>
              <li>
                保加利亞位於東南方、多瑙河對岸。保加利亞人(6，灰色)最近剛被拉丁帝國(7，黃色)的十字軍奪走了內塞伯爾城，需要您幫助他們奪回來。拉丁帝國的軍隊中有騎士、<nuxt-link
                  to="/units/Skirmisher"
                  >矛兵</nuxt-link
                >、<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
                >和重裝長槍兵。
              </li>
              <li>
                據傳另一位庫曼汗正在巴爾幹半島活動，或許他也願意加入您。
              </li>
              <li>
                拜占庭人(8，紫色)的君士坦丁堡城也被拉丁帝國奪走了，一直沒人奪回來。但是他們仍設法重新集結，現在正嘗試收復失地。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這關一開始會面臨兩個選擇：留在匈牙利或是去保加利亞。如果要去匈牙利就往西南走，如果要去保加利亞就搭乘<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >，不管選哪個都會得到一支追隨玩家的軍隊。由於不能建<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >生產運輸船，因此不能干涉另一個地區。可以當作兩關來看，一個選擇一關，雖然最終結局是一樣的。
            </li>
          </ul>
          <p>匈牙利</p>
          <ul>
            <li>
              首先先抵達<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >前可以獲得基地和<nuxt-link to="/units/Villager">村民</nuxt-link
              >，隨後將牛車推到城堡前可以獲得資源或村民。搜尋一下地圖會有一些。稍微發展一下後，將兵力集中在中央的匈牙利基地，奧地利會不斷派兵進攻那邊。
            </li>
            <li>
              地圖上有五座匈牙利貴族控制的村莊。將這些村莊的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >摧毀後控制權會轉讓給藍色的匈牙利，我方則是會獲得少許資源。我方基地東南方的村莊可以放著讓盟友打。
            </li>
            <li>
              任務會要您打敗西班牙貴族和奧地利，如果在45分內打敗奧地利有成就「一去不返。」兵種使用<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >和大量的<nuxt-link to="/units/Kipchak">精銳欽察</nuxt-link
              >搭配<nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >，如果打<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >應付不來還可用<nuxt-link to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >當肉盾，用<nuxt-link to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >配合<nuxt-link to="/units/Kipchak">欽察</nuxt-link
              >掃敵。奧地利有兩座基地，攻擊時優先用巨投把軍事建築拆掉，奧地利的攻勢就會中斷一大半。大約在遊戲時間40分時北邊會有一匹由<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >、馬弓和兩台<nuxt-link to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >及<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >所組成的援軍，配合這支援軍繼續推進。
            </li>
            <li>
              最後用遊俠和欽察把所有匈牙利的村莊一一收復後，先把匈牙利貴族的外交關係改敵對（初始我方對他的關係設定是中立，若沒改掉我方的軍隊不會自動打建築），再把剩下的匈牙利貴族基地打掉後即可過關。
            </li>
          </ul>
          <p>保加利亞</p>
          <ul>
            <li>
              首先先去保加利亞的營地後，會要玩家救保加利亞村民，救完後那些村民的控制權會歸屬我方，利用他們建立一個基地，並將軍隊佈署在拉丁帝國<nuxt-link
                to="/building/Gate"
                >城門</nuxt-link
              >前警戒。保加利亞在拉丁帝國被攻破前每隔一段時間會不斷提供一支<nuxt-link
                to="/units/Konnik"
                >精銳保加利亞騎兵</nuxt-link
              >給我方，但往後有多餘的資源時還是得盡快升級我方的<nuxt-link
                to="NOLINKS"
                >重騎兵</nuxt-link
              ><nuxt-link to="/techs">科技</nuxt-link>。
            </li>
            <li>
              過了一段時間，拉丁帝國會建造世界奇觀，我方則是在南方會有一匹由村民、精銳欽察、和兩台巨型投石機組成的援軍，並且會得到一筆資源。一旦準備好了就向拉丁帝國進攻。進攻到一半時<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >會宣戰，因此家裡還是要留一些軍隊守備。
            </li>
            <li>
              打敗拉丁帝國後，保加利亞會重建該城池，重建地差不多後會蓋世界奇觀。注意在這之後就不會提供保加利亞騎兵給我方了，因此要自行訓練遊俠來補充損失的保加利亞騎兵。而在蓋世界奇觀的同時，拜占庭軍隊的運輸船會一波又一波的朝保加利亞的世界奇觀襲來，因此必須派軍隊去援防，以及在登陸點附近建造城堡、派一支欽察防禦海上的登陸等等。
            </li>
            <li>
              如果有餘裕的話就直接朝拜占庭軍隊進攻。一旦將拜占庭打敗或是保加利亞的世界奇觀完成倒數即宣告勝利。
            </li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關是庫曼戰役中唯一可以自由發展的關卡，其他關卡不是沒有村民就是有時間限制。
            </li>
            <li>
              這關奧地利的指揮腓特烈二世有「好鬥的腓特烈」稱號，常常對臨國發動戰爭，是最後一位奧地利公爵。後來在與匈牙利國王貝拉四世因為邊界衝突在萊塔河之役戰死。在位時擊退蒙古的小規模部隊靠近維也納騷擾，加上當時窩闊台去世後全面撤軍，因此遊戲內曾說他擊退過蒙古人。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">新的家園</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Kotyan_Khan/A_New_Home_map.png" alt="" />
              </div>
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
              <nuxt-link to="/games/de">決定版</nuxt-link>
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
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
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
              可泰安汗第五章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Blood_for_Blood">血債血償</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
