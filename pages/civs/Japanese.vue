<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>日本</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>日本</b
            >在世紀帝國中是個相對"年輕"的民族，日本的封建制度開始於11世紀左右，相對其他遊戲種族來說更晚。
          </p>
          <p>
            自古以來，<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >(不論是輕裝的<nuxt-link to="/units/Spearman">槍兵</nuxt-link
            >或是重裝的武士)佔有日本軍隊的比例相較其他<nuxt-link to="/civs"
              >文明</nuxt-link
            >來說高了許多，自然而然，遊戲中他也被分類為<nuxt-link
              to="/units/Infantry_Units"
              >步兵文明</nuxt-link
            >。
          </p>
          <p>
            日本自上古時代開始就不停地吸收他國文化並轉化為自己的優勢，這或許能解釋他在遊戲中相對平衡的<nuxt-link
              to="/tree/vie"
              >科技樹</nuxt-link
            >。
          </p>
          <p>
            縱然日本歷史一直是很迷人且被大多數遊戲引用，但是不得不承認，日本在中世紀與近現代是相對落後西方國家的。
          </p>
        </div>
        <h3>文明概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>日本是東亞的步兵文明，為世紀帝國最初種族之一。</li>
            <li>
              日本的步兵很是強大，但是作為代價<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >很弱。
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >的強大火力讓日本有很不錯的防禦性。
            </li>
            <li>
              日本在前期有強大的經濟與海上優勢，代價是後期的經濟落後與虛弱騎兵。
            </li>
            <li>
              <nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              ><nuxt-link to="/units/Samurai">日本武士</nuxt-link
              >歸類為步兵，對所有文明的特殊單位傷害有加成。
            </li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              ><nuxt-link to="/techs/untech">特殊科技</nuxt-link
              ><nuxt-link to="/techs/Yasama">射箭孔</nuxt-link>，搭配<nuxt-link
                to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >使用，讓日本箭塔堪稱最強火力。<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >的特殊科技為<nuxt-link to="/techs/Kataparuto">彈射器</nuxt-link
              >，這個<nuxt-link to="/techs">科技</nuxt-link>則減少了<nuxt-link
                to="/units/Trebuchet"
                >投石機</nuxt-link
              >的拆裝時間，讓投石機更具機動性。
            </li>
          </ul>
          <h3>特殊單位</h3>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/SMURI.jpg"
                alt=""
              />日本武士:<nuxt-link to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >極快的步兵，對於所有文明的特殊單位傷害+10、12(精銳)
            </li>
          </ul>
          <h3>特殊科技</h3>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                alt=""
              /><nuxt-link to="/techs/Yasama">射箭孔</nuxt-link
              >：塔可以多射兩支箭
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                alt=""
              />帝王時代：彈射器：投石機拆裝速度四倍，且攻擊速率快33%
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
              ><nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >+100%，<nuxt-link to="/armor">遠程護甲</nuxt-link
              >+2，工作速度於<nuxt-link to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >+5%，<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >+10%，城堡時代+15%，帝王時代+20%(互不疊加)
            </li>
            <li>
              <nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
              >，<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
              >，<nuxt-link to="/building/Mill">磨坊</nuxt-link
              >的建築成本減少50%
            </li>
            <li>
              步兵攻擊速度在封建時代提升10%，城堡時代提升15%，帝王時代則是25%
            </li>
            <li>
              <strong
                ><nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
                >:</strong
              ><nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link>系<nuxt-link
                to="/los.php"
                >視野</nuxt-link
              >+50%
            </li>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/jap">日本科技樹</nuxt-link></em>
        </div>
        <br />
        <h3>戰術概論</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <strong>優勢</strong>
            <li>日本從封建時代開始擁有非常強大的步兵。</li>
            <li>
              日本的<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              >與<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >科技齊全，所以<nuxt-link to="/units/Archer_Units">遠程</nuxt-link
              >的火力也有保證。
            </li>
            <li>由於團隊加分，日本與隊友可以在前期取得極大的海上發展優勢。</li>
            <li>
              日本的<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >科技只缺<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
              >，這代表僧侶的戰術是可行的。
            </li>
            <li>
              日本的文明加成讓他可以在遊戲初期省下不少<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >，搭配上漁船的加成，可以說是有十分好的前期經濟。
            </li>
          </ul>
          <ul>
            <strong>劣勢</strong>
            <li>
              強大步兵的代價就是虛弱的騎兵，沒有<nuxt-link to="/units/Paladin"
                >遊俠</nuxt-link
              >、<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >與<nuxt-link to="/units/Camel">駱駝</nuxt-link
              >，所以日本面對長距離的<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >會很吃力(比方<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >或弩砲)。
            </li>
            <li>
              沒有<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >，這讓日本更加害怕投石車。
            </li>
            <li>
              沒有駱駝，所以難以追擊敵人的騎兵，縱然在白刃戰中靠著強大的長<nuxt-link
                to="/armor/Armor_Class_Spearman"
                >槍兵類</nuxt-link
              >拔得頭籌，但是面對騎兵游擊戰術會顯得非常吃虧。
            </li>
            <li>
              日本主要部隊都是步兵，所以<nuxt-link to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >對於日本來說是極大的威脅。
            </li>
            <li>
              前期的經濟是好的，但是後期的日本由於大量使用步兵，加上缺少<nuxt-link
                to="/techs/Crop_Rotation"
                >輪耕</nuxt-link
              >科技，可能會有<nuxt-link to="/resource/Food">食物</nuxt-link
              >不夠用的窘況。
            </li>
            <li>日本的攻城武器是相當平庸的，需要謹慎考慮投資。</li>
            <li>
              日本是沒有<nuxt-link to="/building/Bombard_Tower"
                >火砲塔</nuxt-link
              >的，所以遭到大量如<nuxt-link to="/units/Elite_Eagle_Warrior"
                >精銳鷹勇士</nuxt-link
              >或<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >這樣的高遠程護甲單位突襲基地，可能會有嚴重後果。
            </li>
          </ul>
          <ul>
            <strong>主要策略</strong>
            <li>
              害怕火藥單位的日本有個地方可以反制，那就是火藥單位是屬於遊戲中後期才會出現的單位，而日本有能力在前期就殲滅大部分火藥單位強的民族。
            </li>
            <li>
              日本在封建時代異常強大，漁船加成加上步兵攻擊速度加成，使的日本在封建時代的陸上戰鬥近乎無敵。
            </li>
            <li>
              日本的漁船優勢可以讓日本在前期領先不少對手，所以想要玩日本最好選擇有水的地圖。
            </li>
            <li>
              日本的漁船捕魚速度極快，能迅速捕撈完魚群，所以在漁船開始變得沒有效率時，他們可以當成誘餌去吸引對方戰艦的火力。
            </li>
            <li>
              日本的前期經濟強盛，但後期相比其他種族更差，所以盡量在遊戲前期取得勝利。
            </li>
            <li>
              日本的箭塔從城堡時代開始變得相當強大，可以讓基地得到莫大保護，但是要使用塔攻則比較沒有優勢，因為通常塔攻發生在封建時代，而城堡時代之前的日本並沒有可以作為塔攻優勢的加成。
            </li>
            <li>
              研發了特殊科技的投石機是日本的一大戰力，若進入帝王時代了則善用他們，無論在進攻與防禦都能取得成功，他們甚至可以在敵軍的投石機攻擊到他們前組裝完成進行閃躲。
            </li>
            <li>
              除非對手非常依賴特殊單位，否則日本武士的實用度不如<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >。
            </li>
            <li>
              強弩手與<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >是非常好的配合，但是要斟酌是否該投資每一種兵種。
            </li>
            <li>
              日本對付<nuxt-link to="/civs/Goths">哥德</nuxt-link
              >這樣的後期文明會有很好的效果，或是用來對付<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >這樣的步兵民族將有優勢(日本的步兵素質太好了)；但是對於火藥單位強盛的文明則很乏力，比方<nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >，也很害怕塞爾特這樣擁有強大投石車的文明。
            </li>
          </ul>
          <ul>
            <strong>盟友選擇</strong>
            <li>
              日本是<nuxt-link to="/civs/Vikings">維京</nuxt-link>與<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >這樣的<nuxt-link to="/units/Naval_Vessels">海軍文明</nuxt-link
              >的好隊友，更高的戰船視野可以讓海戰更加輕鬆。
            </li>
            <li>
              哥德，<nuxt-link to="/civs/Italians">義大利</nuxt-link
              >這樣能夠增強<nuxt-link to="/building/Barracks">軍營</nuxt-link
              >的文明是日本的好朋友，不過要注意這些文明通常沒有好的騎兵。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >可以說是日本的最佳盟友之一，因為能直接提供敵方<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >的位置，讓日本有機會在前期封殺對手，而越南的<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >則可以補足日本騎兵的缺陷，最重要的是越南擁有火砲，可以很好的打擊對手的投石車來保護日本步兵。
            </li>
            <li>
              總的來說，日本的隊友最好在對付攻城武器必須有好的表現，反而海戰或是軍營加成是次要的。
            </li>
          </ul>
          <strong>對抗要點</strong>
          <ul>
            <li>
              日本是個前期種族，在封建時代是特別強大的，把基地圍好並且生產<nuxt-link
                to="/units/Archer_Units"
                >遠程兵種</nuxt-link
              >來反制。
            </li>
            <li>
              城堡時代的日本比較不那麼強勢，但是這個階段的日本擁有不錯的騎兵，最好能夠鞏固防守直到後期。
            </li>
            <li>
              由於日本主打步兵，<nuxt-link to="/building/Stone_Wall"
                >石牆</nuxt-link
              >加上投石車是很有效的。
            </li>
            <li>
              善用投石車與<nuxt-link to="/units/Gunpowder_Unit">火藥</nuxt-link
              >部隊來抗擊日本的精良步兵。
            </li>
            <li>由於日本沒有騎兵，在面對騷擾型的戰術會很吃力。</li>
            <li>面對日本時，火砲塔是個好的防禦手段。</li>
            <li>面對日本的時候要善用遠程兵種，並且善用攻城武器，譬如弩砲。</li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td><nuxt-link to="/batt">戰役</nuxt-link>名稱</td>
              <td>可否使用</td>
              <td>稱號與顏色</td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Battles_of_the_Conquerors"
                  >征服者的戰役</nuxt-link
                >-<nuxt-link to="/batt/Noryang_Point_1598"
                  >洛陽點（1598）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                日本<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link>(敵對)
                <div class="p4"></div>
                <br />
                日本侵略者(敵對)
                <div class="p6"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                征服者的戰役-<nuxt-link to="/batt/Kyoto_1582"
                  >京都（1582）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                玩家
                <div class="p5"></div>
                <br />
                大阪(敵對)
                <div class="p2"></div>
                <br />
                京都(敵對)
                <div class="p3"></div>
                <br /><nuxt-link to="/units/hero/Nobunaga">織田信長</nuxt-link
                >(友軍)
                <div class="p4"></div>
                <br />
                靜岡(敵對)
                <div class="p1"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                征服者的戰役-<nuxt-link to="/batt/Kurikara_1183"
                  >礪波山（1183）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                <div class="p1">玩家</div>
                <br />
                木曾義仲(友軍)
                <div class="p6"></div>
                <br />
                北条式(友軍)
                <div class="p4"></div>
                <br />
                平式軍閥(敵對)
                <div class="p2"></div>
                <br />
                京都(敵對)
                <div class="p5"></div>
                <br />
                平家軍(敵對)
                <div class="p8"></div>
                <br />
                平式守衛(敵對)
                <div class="p3"></div>
                <br />
                當地人(友軍)
                <div class="p7"></div>
              </td>
            </tr>
          </table>

          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
            </h3>
            <ul>
              <li>步兵從封建時代攻擊速度快25%。</li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>
                現在有了<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>。
              </li>
              <li>
                能夠研發<nuxt-link to="/techs/Gold_Shaft_Mining"
                  >礦井採金</nuxt-link
                >。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/techs/Yasama">射箭孔</nuxt-link
                >成本從400w/300f降低為300w/300f。
              </li>
              <li>
                現在有了<nuxt-link to="/techs/Treadmill_Crane"
                  >滑輪起重機</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                火砲在日本稱之為大銃，在戰國時代曾被多次使用，然而遊戲裡面日本沒有火砲。
              </li>
              <li>
                日本的語音似乎比其他的種族多一點(僧侶與<nuxt-link
                  to="/units/King"
                  >國王</nuxt-link
                >)。
              </li>
              <li>
                日本的<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
                >是東大寺，至今仍在日本奈良。
              </li>
              <li>很神奇的，日本知名度最高的織田信長竟然沒有獨立的戰役。</li>
              <li>
                武士是中世紀日本作戰時的關鍵力量，而他們的訓練異常精良，可以說比西方的<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >是有過之而無不及，而訓練精良這點在遊戲中以提高步兵攻擊速度來體現。
              </li>
              <li>
                綜觀日本歷史，騎兵真正主宰戰場的例子少之又少，這或許是為甚麼遊戲中的日本騎兵相對貧弱。
              </li>
              <li>
                日本是個新生島嶼，鐵礦產量不如歐洲各國，這讓日本在中世紀時期大量地使用弓箭來進行防禦，這就是特殊科技<nuxt-link
                  to="/techs/Yasama"
                  >射箭孔</nuxt-link
                >的由來，也能解釋為甚麼日本有完美的射箭場。
              </li>
              <li>
                日本有許多火山，使日本的土地以島嶼來說是非常肥沃的，遊戲中日本有便宜的經濟建築，就是為了體現這一點。
              </li>
              <li>
                作為一個島嶼民族，<nuxt-link to="/civs/Japanese"
                  >日本人</nuxt-link
                >酷愛吃魚，遊戲中的漁船加成由此而來。
              </li>
            </ul>
          </div>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Wonderjapanese.jpg" alt=""
              /></gallery>
              <p><em>日本的世界奇觀，東大寺。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">日本</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Himeji_Castle_repainted_3.jpg"
                  width="300"
                  alt=""
                />
                <p><em>最具日本象徵意義的姬路城</em></p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築風格</td>
            <td class="unit4">東亞</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊單位</td>
            <td class="unit4">
              <img class="gg" src="~assets/SMURI.jpg" /><nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">封建快攻，海戰</td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/CastleAgeUnique.png" /><nuxt-link
                to="/techs/Yasama"
                >射箭孔</nuxt-link
              ><br />
              <img class="gg" src="~assets/Unique-tech.jpg" /><nuxt-link
                to="/techs/Kataparuto"
                >彈射器</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allciv',
  components: {}
}
</script>
<style></style>
