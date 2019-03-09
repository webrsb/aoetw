<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：失落的帝國</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>世紀帝國II：失落的帝國</b>是1999年即時戰略遊戲<nuxt-link
              to="/games/aok"
              >《世紀帝國II：帝王世紀》</nuxt-link
            >的第二個擴充資料片，距第一個擴充資料片<nuxt-link to="/games/aoc"
              >征服者入侵</nuxt-link
            >已超過十年。此資料片由非官方模組《Forgotten
            Empires》發展而來。現由「Forgotten
            Empires」團隊持續開發，溫哥華的Skybox
            Labs提供支援。《失落的帝國》中引入五個新<nuxt-link to="/civs"
              >文明</nuxt-link
            >，分別為：<nuxt-link to="/civs/Italians">義大利人</nuxt-link
            >、<nuxt-link to="/civs/Indians">印度人</nuxt-link>、<nuxt-link
              to="/civs/Slavs"
              >斯拉夫人</nuxt-link
            >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>人、<nuxt-link
              to="/civs/Incas"
              >印加人</nuxt-link
            >、七場新<nuxt-link to="/batt">戰役</nuxt-link
            >、新單位、新<nuxt-link to="/techs">科技</nuxt-link
            >、新遊戲模式及新地圖，並改善了人工智慧和遊戲細節。開發團隊並於2015年秋季推出第三個官方擴充資料片─<nuxt-link
              to="/games/ak"
              >《非洲王國》</nuxt-link
            >，於2016年年底推出第四個官方擴充資料片─<nuxt-link to="/games/aor"
              >《王者崛起》</nuxt-link
            >
          </p>
        </div>
        <h2>新增元素</h2>
        <div class="hrn1"></div>
        <h3>文明</h3>
        <div class="n1">
          <ul>
            <li>
              馬扎爾：馬扎爾是現在匈牙利的主體民族，因此常被稱之匈牙利人。他最早被認為是源自於突厥人，在九世紀中有支突厥人貴族進入了中歐。<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >是<nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link
              >：印度是印度的<nuxt-link to="/units/Camel">駱駝</nuxt-link
              >和<nuxt-link to="/units/Gunpowder_Unit">火藥文明</nuxt-link
              >，特殊單位是<nuxt-link to="/units/Elephant_Archer"
                >象弓騎兵</nuxt-link
              >與<nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：印加是一個南美文明，在中世紀建立起一個龐大的帝國，特殊單位為<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >與<nuxt-link to="/units/Slinger">投石手</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：義大利為<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
              >與<nuxt-link to="/units/Archer_Units">射手</nuxt-link
              >文明，特殊單位為<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >，他和他的同盟都可以在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >生產顧<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：斯拉夫人是一個東歐文明，後來成為現今的俄羅斯、烏克蘭...等東歐國家。斯拉夫人是<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >文明，他們的獨特單位是<nuxt-link to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>單位</h3>
        <div class="n1">
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/EagleScoutIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CondottieroNewIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/Slingericon.png" alt="" /><nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt="" /><nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
                width="22"
              /><nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Magyar_Huszar_icon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/New_Boyar.png" alt="" /><nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>科技</h3>
        <div class="n1">
          <ul>
            <li>
              每個文明皆新增<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >能研發的<nuxt-link to="/techs/untech">特殊科技</nuxt-link>。
            </li>
          </ul>
          <p>
            <em
              >主要文章: <nuxt-link to="/techs/untech">特殊科技</nuxt-link></em
            >
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#ad7b35">
              <div class="unititle2">世紀帝國II：失落的帝國</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/AOFE_logo.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#ad7b35">
              <div class="unititle2" style="color: #fff;">遊戲介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">開發商</td>
            <td class="unit4">Skybox Labs <br />Forgotten <br />Empires LLC</td>
          </tr>
          <tr>
            <td class="unit3">發行</td>
            <td class="unit4">微軟</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#ad7b35;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">steam版本</td>
            <td class="unit4">2013年11月7日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#ad7b35;">
              <div class="unititle2" style="color: #fff;">前作與擴充</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">擴充</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link><br />
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link><br />
              <nuxt-link to="/games/ak">非洲王國</nuxt-link><br />
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em>主要文章: <nuxt-link to="/batt">戰役</nuxt-link></em>
          </p>
          <p>包含七個主戰役</p>
          <ul>
            <li><nuxt-link to="/batt/Alarica">阿拉里克</nuxt-link></li>
            <li><nuxt-link to="/batt/Draculaa">德古拉</nuxt-link></li>
            <li><nuxt-link to="/batt/Baria">巴里</nuxt-link></li>
            <li><nuxt-link to="/batt/Sforzaa">斯福爾札</nuxt-link></li>
            <li><nuxt-link to="/batt/El_Doradoa">黃金國</nuxt-link></li>
            <li><nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link></li>
            <li>
              <nuxt-link to="/batt/Battles_of_the_Forgotten"
                >失落帝國的戰役</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>平衡更動</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p><strong>種族平衡</strong></p>
          <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
          <ul>
            <li>
              沒有免費<nuxt-link to="/techs/Loom">織布技術</nuxt-link
              >了，但初始多50金。
            </li>
            <li>
              <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
              >+1<nuxt-link to="/armor">遠防</nuxt-link>。
            </li>
          </ul>
          <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
          <ul>
            <li>
              有了<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >與<nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >縮短訓練時間到17秒。
            </li>
          </ul>
          塞爾特人
          <ul>
            <li>塞爾特狂熱給予40%的HP，而不是50%。</li>
          </ul>
          <nuxt-link to="/civs/Chinese">中國</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >+5<nuxt-link to="/los.php">視野</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link
              >訓練從19秒加快到16秒。
            </li>
          </ul>
          <nuxt-link to="/civs/Franks$">法蘭克</nuxt-link>
          <ul>
            <li>果樹採集快25%。</li>
            <li>
              能夠研發<nuxt-link to="/techs/Squires">護衛技術</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
              >開火延遲-2，原本是12。
            </li>
            <li>
              <nuxt-link to="/units/Throwing_Axeman">精銳擲斧兵</nuxt-link
              >研發成本-100金。
            </li>
          </ul>
          <nuxt-link to="/civs/Goths">哥德</nuxt-link>
          <ul>
            <li>步兵便宜35%，而不是25%。</li>
            <li>
              <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >被刪除。
            </li>
          </ul>
          <nuxt-link to="/civs/Huns">匈奴</nuxt-link>
          <ul>
            <li>沒有了火戰戰船</li>
            <li>
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >成本原本是-15%/25%在<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >與帝王時代`現在變成-25%/30%。
            </li>
            <li>滑輪起重機被刪除。</li>
            <li>
              <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>攻擊+1，+10HP。
            </li>
          </ul>
          <nuxt-link to="/civs/Japanese">日本</nuxt-link>
          <ul>
            <li>
              現在有了<nuxt-link to="/techs/Bloodlines">血統</nuxt-link
              >和<nuxt-link to="/techs/Gold_Shaft_Mining">礦井採金</nuxt-link>。
            </li>
          </ul>
          <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>成本-10%。
            </li>
            <li>
              <nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
              >訓練時間從25秒降低到21秒。
            </li>
            <li>馬戰車成本-10木。</li>
            <li>
              <nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
              >從+1射程的<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >，變成最小攻擊範圍縮小。
            </li>
          </ul>
          <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >成本從46木46金增加到50木50金。
            </li>
            <li>
              <nuxt-link to="/units/Plumed_Archer">精銳羽毛箭射手</nuxt-link
              >升級費用700<nuxt-link to="/resource/Food">食物</nuxt-link
              >1000<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >，原本是500食物，1000木頭。
            </li>
          </ul>
          <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >被刪除。
            </li>
            <li>
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
              >對攻城武器加成僅限於<nuxt-link to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >。
            </li>
            <li>
              蒙古突騎<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link
              >-50%，原本是10。
            </li>
          </ul>
          <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
          <ul>
            <li><nuxt-link to="/building/Market">市集</nuxt-link>成本-75。</li>
            <li><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>攻擊+1。</li>
          </ul>
          <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Missionary">傳教士</nuxt-link>受到血統影響。
            </li>
          </ul>
          <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
          <ul>
            <li>城鎮中心不再+5視野。</li>
            <li>
              城鎮中心<nuxt-link to="/Garrison">駐軍</nuxt-link
              >+10，最大放箭+5。
            </li>
            <li>城鎮中心+2攻擊被移除。</li>
            <li>
              <nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>+10HP。
            </li>
          </ul>
          <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
          <ul>
            <li>
              現在<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >受到團隊加分影響。
            </li>
          </ul>
          <nuxt-link to="/civs/Vikings">維京</nuxt-link>
          <ul>
            <li>
              團隊加分<nuxt-link to="/building/Dock">碼頭</nuxt-link
              >便宜15%而不是25%。
            </li>
            <li>
              戰船成本:-10%/15%/20%在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link>。
            </li>
            <li>有滑輪起重機。</li>
            <li><nuxt-link to="/units/Berserk">狂戰士</nuxt-link>+4HP。</li>
            <li>
              <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>的<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >成本與<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>相同。
            </li>
            <li>
              研發<nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link
              >成本變成850肉400金，原本是850肉、500金。
            </li>
            <li>
              狂戰士與精銳狂戰士HP變成54/62，原本是48/60，訓練時間縮短到14秒。
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
