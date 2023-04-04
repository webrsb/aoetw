<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>文明強弱分析</h1>
        <div class="hrn1"></div>
      </div>
      <div class="spw">
        <em
          ><img
            src="~assets/tola.jpg"
            width="50px;"
            alt=""
            style="margin-right:20px;"
          />怎麼說呢：此頁面含有大量個人觀點。</em
        >
      </div>
      <div class="col-md-12">
        <p>
          遊戲內任何<nuxt-link to="/civs">文明</nuxt-link
          >都有可取的地方，嚴格說起來並沒有哪個文明最強，通常一個玩家打不贏對手而上網求助：xx文明怎麼打，通常都不是文明的問題，而是其他如經濟、升級、控兵等問題較大，文明影響其實不大。但如果雙方實力都差不多，那麼勝負的關鍵就很有可能落到文明差距上了。
        </p>
        <p>
          每個文明強盛的時間點都不同，例如<nuxt-link to="/civs/Vikings"
            >維京</nuxt-link
          >強盛點在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
          >到帝王初期，到了帝王後期缺乏強而有力的兵種，而顯得較為疲乏，而<nuxt-link
            to="/civs/Mongols"
            >蒙古</nuxt-link
          >強盛的點在於帝王後期的<nuxt-link to="/units/Mangudai"
            >蒙古突騎</nuxt-link
          >成形後，城堡反而沒什麼優勢。所以玩家就必須避免在自己文明虛弱時與對方一較長短，而在自己強盛時盡早與對方決戰。
        </p>
        <p>
          地圖不同也會影響文明的強弱，例如<nuxt-link to="/civs/Turks"
            >土耳其</nuxt-link
          >在<nuxt-link to="/maps/Arabia">阿拉伯</nuxt-link
          >是非常弱的文明，但來到了<nuxt-link to="/maps/Arena">圍城</nuxt-link
          >就變得非常強勢，因為<nuxt-link to="/building/Stone_Wall"
            >城牆</nuxt-link
          >的保護可以讓土耳其安心度過他最弱的封建時期，甚至過渡到他強盛的帝王，反觀<nuxt-link
            to="/civs/Magyars"
            >馬扎爾</nuxt-link
          >在阿拉伯算是頂尖文明，來到了圍城他的文明加成卻變一無是處，<nuxt-link
            to="/units/Monk"
            >僧侶</nuxt-link
          >在阿拉伯地形較少成為主力部隊，但來到了圍城變成了神擋招神，鬼擋招鬼的強力兵種。
        </p>
        <p>
          總而言之，遊戲內並沒有哪個文明比較厲害，只能有條件的說，在哪個地形哪種打法下，一些文明特別優秀。
        </p>
        <p>
          以下分別說明阿拉伯、<nuxt-link to="/maps/Black_Forest"
            >黑森林</nuxt-link
          >、<nuxt-link to="/maps/Islands">島嶼</nuxt-link>與圍城的強勢文明。
        </p>
      </div>
      <div class="col-md-12">
        <div
          class="col-md-3"
          style="border: solid 1px #ccc; padding: 10px; margin-top: 20px;"
        >
          <div style="text-align: center;"><strong>目錄</strong></div>
          <ul>
            <li><nuxt-link to="#a1">阿拉伯</nuxt-link></li>
            <li><nuxt-link to="#a2">圍城</nuxt-link></li>
            <li><nuxt-link to="#a3">黑森林</nuxt-link></li>
            <li><nuxt-link to="#a4">島嶼</nuxt-link></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12">
        <h3 class="ttt" id="a1"><strong>阿拉伯</strong></h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            阿拉伯是一張開闊的地圖，其特點是易攻難守，沒有水，所以有經濟優勢與初期強力兵種的文明，特別吃香。
          </p>
          <p>
            根據2017年末舉辦的最高水準沙漠之王阿拉伯單挑賽（Kotd）來看，以下文明為最熱門的文明
          </p>
          <div class="col-md-12">
            <h4>
              <span
                style="margin:10px 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級A
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong
                ><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                  to="/civs/Aztecs"
                  >阿茲特克</nuxt-link
                >、<nuxt-link to="/civs/Incas">印加</nuxt-link></strong
              >
            </h3>
            <p>
              南美三雄，軍事上有優勢兵種<nuxt-link to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >，封建即可生產<nuxt-link to="/units/Eagle_Scout"
                >鷹斥侯</nuxt-link
              >，<nuxt-link to="/armor/Armor_Class_Archer">射手類</nuxt-link
              >也齊全，過渡到城堡後，鷹勇士配合僧侶幾乎無解，且各有不錯的經濟優勢。
            </p>
            除了鷹勇士外，三個文明個有自己的獨特打法，如下
            <ul>
              <li>
                <strong>馬雅</strong
                >：傳統上的強國，初期的經濟非常好，<nuxt-link
                  to="/units/Archer_Units"
                  >弓兵</nuxt-link
                >便宜可與鷹勇士組成堅強的陣容，上城堡有<nuxt-link
                  to="/units/Plumed_Archer"
                  >羽毛箭射手</nuxt-link
                >可用。
              </li>
              <li>
                <strong>阿茲特克</strong>：傳統上的強國，初期的五<nuxt-link
                  to="/units/Militia"
                  >民兵</nuxt-link
                >上城堡打法非常強勢，<nuxt-link to="/building/Barracks"
                  >軍營</nuxt-link
                >效率高，<nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
                >轉鷹勇士相當可怕。經濟非常好，可快速上帝王出<nuxt-link
                  to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >。
              </li>
              <li>
                <strong>印加</strong>：與前面兩位前輩不同的是，有<nuxt-link
                  to="/units/Slinger"
                  >投石手</nuxt-link
                >可以利用，如果對方配出步兵陣容，可以很輕易的化解，後期更有<nuxt-link
                  to="/units/Kamayuk"
                  >槍隊長</nuxt-link
                >配合鷹勇士與投石手的陣容，可有效擊殺步、騎、弓的組合。
              </li>
            </ul>
            <h3>
              <strong><nuxt-link to="/civs/Burmese">緬甸</nuxt-link></strong>
            </h3>
            <p>
              除了南美三雄外的A級文明，有不錯的經濟優勢，配合攻擊+1的裝甲步兵，初期就可以站穩阿拉伯強勢文明之林，此外令人聞風喪膽的是其<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >，<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>。<nuxt-link
                to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >快、遠距離且機動力高又高攻擊，重點訓練還不需要肉，配合<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >幾乎無解，讓緬甸在阿拉伯具有十足的威脅性。
            </p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin:10px 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級B
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong><nuxt-link to="/civs/Berbers">柏柏</nuxt-link></strong>
            </h3>
            <p>
              特殊單位<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
              >過於強勢，城堡之後有便宜的<nuxt-link to="/units/Knight"
                >騎士</nuxt-link
              >與<nuxt-link to="/units/Camel_Rider">駱駝</nuxt-link>可用。
            </p>
            <h3>
              <strong><nuxt-link to="/civs/Huns">匈人</nuxt-link></strong>
            </h3>
            <p>
              傳統超級強國，初期經濟優勢極大，上城堡有便宜<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >可用。
            </p>
            <h3><strong>塞爾特</strong></h3>
            <p>
              伐木優勢相當明顯，步兵走速相當快，他的出線可以說是衝著南美老鷹文明而來。
            </p>
            <h3>
              <strong><nuxt-link to="/civs/Malians">馬利</nuxt-link></strong>
            </h3>
            <p>
              經濟優勢強大，又有步兵的防禦優勢，即使遇到老鷹國家，也有城堡兵<nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >可壓制。
            </p>
            <h3>
              <strong><nuxt-link to="/civs/Indians">印度</nuxt-link></strong>
            </h3>
            <p>
              經濟文明，光靠著經濟優勢變可爆出比別人更多的兵種，唯獨比較怕老鷹國。
            </p>
            <h3>
              <strong><nuxt-link to="/civs/Britons">不列顛</nuxt-link></strong>
            </h3>
            <p>
              純粹靠著上<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >後的<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >+1射程的優勢，而擠身強國之林。
            </p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin-right: 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級C
            </h4>
            <div class="hrn1"></div>
            <h3><strong>馬扎爾</strong></h3>
            <p>
              強大的軍事文明，近戰直接+1的攻擊，不管打<nuxt-link
                to="/ar/armstower"
                >裝甲塔</nuxt-link
              >或<nuxt-link to="/ar/scrush">肉馬開局</nuxt-link>都相當兇狠。
            </p>
            <h3>
              <strong
                ><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link></strong
              >
            </h3>
            <p>經濟與軍事兼備，射速快15％的弩兵相當可怕，城堡兵亦好用。</p>
            <h3>
              <strong><nuxt-link to="/civs/Malay">馬來</nuxt-link></strong>
            </h3>
            <p>經濟文明，快速升級的優勢顯得相當好用，可爆經濟、可強軍事。</p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin-right: 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級D
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong><nuxt-link to="/civs/Franks">法蘭克</nuxt-link></strong>
            </h3>
            <p>
              初期有<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >稍多的斥候，城堡兵可打老鷹。
            </p>
            <h3><strong>蒙古</strong></h3>
            <p>除了快速升級外，沒有特別明顯的優勢。</p>
            <h3>
              <strong
                ><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link></strong
              >
            </h3>
            <p>
              無經濟優勢，但槍矛相當威猛，控制力好的玩家可用的非常強，如：Lierrey。
            </p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin-right: 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級E
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong><nuxt-link to="/civs/Spanish">西班牙</nuxt-link></strong>
            </h3>
            <p>塔攻相當厲害，但毫無經濟優勢，在頂尖局並不好用。</p>
            <h3><strong>維京</strong></h3>
            <p>經濟文明，靠著經濟拉大差距。</p>
            <h3>
              <strong><nuxt-link to="/civs/Chinese">中國</nuxt-link></strong>
            </h3>
            <p>經濟文明，算是舊文明中好用的。</p>
            <h3>
              <strong><nuxt-link to="/civs/Goths">哥德</nuxt-link></strong>
            </h3>
            <p>毫無經濟優勢，能過渡到城堡中後期便大有可為。</p>
            <h3>
              <strong><nuxt-link to="/civs/Japanese">日本</nuxt-link></strong>
            </h3>
            <p>不錯的經濟，裝甲塔非常厲害。</p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin-right: 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級F
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong><nuxt-link to="/civs/Italians">義大利</nuxt-link></strong>
            </h3>
            <p>具有升級優勢外，比較少人用。</p>
            <h3>
              <strong><nuxt-link to="/civs/Vietnamese">越南</nuxt-link></strong>
            </h3>
            <p>毫無經濟優勢</p>
            <h3><strong>土耳其</strong></h3>
            <p>毫無經濟優勢外還沒有二級槍矛。</p>
            <h3>
              <strong><nuxt-link to="/civs/Koreans">朝鮮</nuxt-link></strong>
            </h3>
            <p>塔攻文明，除了塔攻便是一無是處。</p>
            <h3>
              <strong><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link></strong>
            </h3>
            <p>經濟優勢不明顯，沒特別搶眼的兵種。</p>
          </div>
          <div class="col-md-12">
            <h4>
              <span
                style="margin-right: 5px;"
                class="glyphicon glyphicon-tags"
                aria-hidden="true"
              ></span
              >等級G
            </h4>
            <div class="hrn1"></div>
            <h3>
              <strong
                ><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link></strong
              >
            </h3>
            <p>毫無經濟優勢又沒顯眼的兵種</p>
            <h3>
              <strong><nuxt-link to="/civs/Persians">波斯</nuxt-link></strong>
            </h3>
            <p>經濟和軍事加成都不錯，只是沒有高手選</p>
            <h3>
              <strong><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link></strong>
            </h3>
            <p>毫無經濟優勢，也無強勢兵種。</p>
            <h3>
              <strong><nuxt-link to="/civs/Khmer">高棉</nuxt-link></strong>
            </h3>
            <p>升級快速在阿拉伯單挑顯得很雞肋。</p>
            <h3>
              <strong><nuxt-link to="/civs/Teutons">條頓</nuxt-link></strong>
            </h3>
            <p>經濟優勢不明顯。</p>
          </div>
          <div class="col-md-12">
            <h3 class="ttt" id="a2"><strong>圍城</strong></h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                圍城其特點為地圖小，城堡前擁有相當程度的防禦，僧侶文明與中後期強勢的文明相當吃香。
              </p>
              <p>
                以下以單挑來說，如果以團戰來說，那麼義大利、越南與柏柏將會相當受歡迎。
              </p>
              <div class="col-md-12">
                <h4>
                  <span
                    style="margin-right: 5px;"
                    class="glyphicon glyphicon-tags"
                    aria-hidden="true"
                  ></span
                  >強勢文明
                </h4>
                <div class="hrn1"></div>
                <h3><strong>阿茲特克</strong></h3>
                <p>
                  僧侶血量多、<nuxt-link to="/techs">科技</nuxt-link
                  >又全滿，輔以鷹勇士相當強悍，此外經濟也很強。
                </p>
                <h3><strong>緬甸</strong></h3>
                <p>僧侶科技便宜，凶殘的飛鏢騎兵如入無人之境。</p>
                <h3><strong>西班牙</strong></h3>
                <p>
                  僧侶全滿，<nuxt-link to="/units/Conquistador"
                    >西班牙征服者</nuxt-link
                  >相當有優勢。
                </p>
                <h3><strong>馬雅</strong></h3>
                <p>
                  <nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                  >機動高
                </p>
                <h3><strong>塞爾特</strong></h3>
                <p>
                  在地圖小的圍城，優秀的<nuxt-link to="/units/Siege_Weapons"
                    >攻城武器</nuxt-link
                  >顯得非常吃香。
                </p>
                <h3><strong>土耳其</strong></h3>
                <p>
                  適合火槍與快速上帝王的打法，但懼怕<nuxt-link
                    to="/units/Archer_Units"
                    >弓兵文明</nuxt-link
                  >。
                </p>
              </div>
            </div>
            <div class="col-md-12">
              <h3 class="ttt" id="a3"><strong>黑森林</strong></h3>
              <div class="hrn1"></div>
              <div class="n1">
                <p>
                  黑森林與圍城相似為封閉地圖，但黑森林通常地圖會設定已探索，開打時間可以比圍城早，也可以比圍城慢，端看雙方圍牆的程度。因為很常打到大後期，有<nuxt-link
                    to="/resource/Gold"
                    >黃金</nuxt-link
                  >組合兵種與<nuxt-link to="/units/Siege_Onager"
                    >重型投石車</nuxt-link
                  >的文明就變得很吃香。
                </p>
              </div>
              <div class="col-md-12">
                <h4>
                  <span
                    style="margin-right: 5px;"
                    class="glyphicon glyphicon-tags"
                    aria-hidden="true"
                  ></span
                  >強勢文明
                </h4>
                <div class="hrn1"></div>
                <h3><strong>塞爾特</strong></h3>
                <p>
                  伐木快，配出<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
                  >配重型投石車、<nuxt-link to="/units/Siege_Ram"
                    >重型衝撞車</nuxt-link
                  >很難打。
                </p>
                <h3><strong>朝鮮</strong></h3>
                <p>相對以前沒有這麼強勢，不過射程+1的投石車仍不好打。</p>
                <h3><strong>土耳其</strong></h3>
                <p>
                  後期的<nuxt-link to="/units/Gunpowder_Unit">火藥</nuxt-link
                  >陣容，<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
                  >、<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
                  >配合<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
                  >與<nuxt-link to="/units/Scout_Cavalry">肉馬</nuxt-link
                  >，在黑森林黃金無虞下威力極大。
                </p>
                <h3><strong>緬甸</strong></h3>
                <p>
                  飛鏢騎兵與僧侶的組合在<nuxt-link to="/techs/age/Castle_Age"
                    >城堡時代</nuxt-link
                  >就足以造成破壞。
                </p>
                <h3><strong>蒙古</strong></h3>
                <p>老牌強國，後期重型衝撞車、重型投石車與蒙古突騎銳不可擋。</p>
                <h3><strong>薩拉森</strong></h3>
                <p>
                  後期科技幾乎全滿，配合<nuxt-link to="/units/Mameluke"
                    >阿拉伯奴隸兵</nuxt-link
                  >幾乎沒弱點。
                </p>
              </div>
            </div>
            <div class="col-md-12">
              <h3 class="ttt" id="a4"><strong>島嶼</strong></h3>
              <div class="hrn1"></div>
              <div class="n1">
                <p>
                  島嶼就是純海圖，這張地圖幾乎不會打陸戰，打陸戰的概率不高，所以<nuxt-link
                    to="/units/Naval_Vessels"
                    >海軍</nuxt-link
                  >強勢或是初期有強力經濟加分的文明佔優勢。
                </p>
              </div>
              <div class="col-md-12">
                <h4>
                  <span
                    style="margin-right: 5px;"
                    class="glyphicon glyphicon-tags"
                    aria-hidden="true"
                  ></span
                  >強勢文明
                </h4>
                <div class="hrn1"></div>
                <h3><strong>義大利</strong></h3>
                <p>
                  海圖絕對強國，升級快，<nuxt-link to="/units/Fishing_Ship"
                    >漁船</nuxt-link
                  >便宜，科技花費減半。
                </p>
                <h3><strong>馬來</strong></h3>
                <p>
                  與義大利為海圖雙雄，升級快，<nuxt-link to="/building/Dock"
                    >碼頭</nuxt-link
                  >科技完整。
                </p>
                <h3><strong>維京</strong></h3>
                <p>
                  在沒有火濛衝下，封建顯得相當弱勢，但一到城堡<nuxt-link
                    to="/units/Longboat"
                    >維京大戰船</nuxt-link
                  >登場，將扭轉戰局。
                </p>
                <h3><strong>日本</strong></h3>
                <p>團戰文明，捕魚快。</p>
                <h3><strong>薩拉森</strong></h3>
                <p>
                  團戰文明，<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
                  >射速快。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allciv' })

export default {
  components: {}
}
</script>
<style></style>
