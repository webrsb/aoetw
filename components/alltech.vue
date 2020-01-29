<template>
  <div class="container">
    <div class="row" style=" margin-top:20px">
      <div class="col-md-12">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#274a7d;">
              <div class="unititle" style="color: #fff;">
                <nuxt-link to="/techs">世紀帝國II的科技</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Barracks">兵營</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>•
              <nuxt-link to="/techs/Squires">護衛技術</nuxt-link>•
              <nuxt-link to="/techs/Supplies">供給</nuxt-link>•
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>•
              <nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Stable">馬廄</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Bloodlines">品種</nuxt-link>•
              <nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Loom">織布技術</nuxt-link>•
              <nuxt-link to="/techs/Wheelbarrow">輪軸技術</nuxt-link>•
              <nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link>•
              <nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>•
              <nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Monastery">修道院</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Redemption">神聖思想</nuxt-link>•
              <nuxt-link to="/techs/Atonement">救贖思想</nuxt-link>•
              <nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link><br />
              <nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>•
              <nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link>•
              <nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link><br />
              <nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>•
              <nuxt-link to="/techs/Illumination">啟示思想</nuxt-link>•
              <nuxt-link to="/techs/Block_Printing">印刷技術</nuxt-link>•
              <nuxt-link to="/techs/Theocracy">神權統治</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Cartography">製圖學</nuxt-link>•
              <nuxt-link to="/techs/Caravan">商隊</nuxt-link>•
              <nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link>•
              <nuxt-link to="/techs/Banking">銀行制度</nuxt-link>•
              <nuxt-link to="/techs/Guilds">公會制度</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Spies">間諜/叛徒</nuxt-link>•
              <nuxt-link to="/techs/Hoardings">圍牆</nuxt-link>•
              <nuxt-link to="/techs/Sappers">兵工學</nuxt-link>•
              <nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Dock">碼頭</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Careening">航海技術</nuxt-link>•
              <nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>•
              <nuxt-link to="/techs/Shipwright">造船員</nuxt-link>•
              <nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/University">學院</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>•
              <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>•
              <nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>•
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>•
              <nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link>•
              <nuxt-link to="/techs/Murder_Holes">近射孔</nuxt-link><br />
              <nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link>•
              <nuxt-link to="/techs/Architecture">建築學</nuxt-link>•
              <nuxt-link to="/techs/Chemistry">化學</nuxt-link>•
              <nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>•
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link>•
              <nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link>•
              <nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link>•
              <nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>•
              <nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link>
              <br />
              <nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>•
              <nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>•
              <nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>
              <br />
              <nuxt-link to="/techs/Forging">鍛造技術</nuxt-link>•
              <nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link>•
              <nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link><br />
              <nuxt-link to="/techs/Scale_Barding_Armor">鱗鎧甲</nuxt-link>•
              <nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link>•
              <nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link>
              <br />
              <nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>•
              <nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link>•
              <nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link>•
              <nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link><br />
              <nuxt-link to="/techs/Gold_Shaft_Mining">採金裝置</nuxt-link>•
              <nuxt-link to="/techs/Stone_Shaft_Mining">採石裝置</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link>•
              <nuxt-link to="/techs/Bow_Saw">弓形鋸</nuxt-link>•
              <nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/building/Mill">磨坊</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>•
              <nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link>•
              <nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/techs/untech">特殊科技</nuxt-link>
              <br />(城堡/帝王)
            </td>
            <td class="unit3">
              <div class="row">
                <div class="col-md-4">
                  <nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link>/
                  <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link>
                  (<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>)<br />
                  <nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>/
                  <nuxt-link to="/techs/Maghrabi_Camels"
                    >馬格拉比駱駝</nuxt-link
                  >
                  (<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>)<br />
                  <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>/
                  <nuxt-link to="/techs/Warwolf">戰狼號</nuxt-link>
                  (<nuxt-link to="/civs/Britons">不列顛</nuxt-link>)<br />
                  <nuxt-link to="/techs/Howdah">象轎</nuxt-link>/
                  <nuxt-link to="/techs/Manipur_Cavalry"
                    >曼尼普爾騎兵</nuxt-link
                  >
                  (<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>)<br />
                  <nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>/
                  <nuxt-link to="/techs/Logistica">後勤</nuxt-link>
                  (<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>)<br />
                  <nuxt-link to="/techs/Stronghold">堡壘</nuxt-link>/
                  <nuxt-link to="/techs/Furor_Celtica">塞爾特狂熱</nuxt-link>
                  (<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>)<br />
                  <nuxt-link to="/techs/Great_Wall">長城</nuxt-link>/
                  <nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link>
                  (<nuxt-link to="/civs/Chinese">中國</nuxt-link>)<br />
                  <nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link>/
                  <nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link>
                  (<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>)<br />
                  <nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link>/
                  <nuxt-link to="/techs/Bearded_Axe">倒鉤斧</nuxt-link>
                  (<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>)<br />
                  <nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link>/
                  <nuxt-link to="/techs/Perfusion">井噴</nuxt-link>
                  (<nuxt-link to="/civs/Goths">哥德</nuxt-link>)<br />
                  <nuxt-link to="/techs/Marauders">掠奪者</nuxt-link>/
                  <nuxt-link to="/techs/Atheism">無神論</nuxt-link>
                  (<nuxt-link to="/civs/Huns">匈人</nuxt-link>)
                  <br />
                </div>
                <div class="col-md-4">
                  <nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link>/
                  <nuxt-link to="/techs/Couriers">信使</nuxt-link>
                  (<nuxt-link to="/civs/Incas">印加</nuxt-link>)<br />
                  <nuxt-link to="/techs/Sultans">蘇丹</nuxt-link>/
                  <nuxt-link to="/techs/Shatagni">印度火銃</nuxt-link>
                  (<nuxt-link to="/civs/Indians">印度</nuxt-link>)<br />
                  <nuxt-link to="/techs/Pavise">巨盾</nuxt-link>/
                  <nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link>
                  (<nuxt-link to="/civs/Italians">義大利</nuxt-link>)<br />
                  <nuxt-link to="/techs/Yasama">射箭孔</nuxt-link>/
                  <nuxt-link to="/techs/Kataparuto">彈射器</nuxt-link>
                  (<nuxt-link to="/civs/Japanese">日本</nuxt-link>)<br />
                  <nuxt-link to="/techs/Tusk_Swords">象牙劍</nuxt-link>/
                  <nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>
                  (<nuxt-link to="/civs/Khmer">高棉</nuxt-link>)<br />
                  <nuxt-link to="/techs/Panokseon">板屋船</nuxt-link>/
                  <nuxt-link to="/techs/Shinkichon">投擲器</nuxt-link>
                  (<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>)<br />
                  <nuxt-link to="/techs/Mercenaries">科維尼安軍隊</nuxt-link>/
                  <nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>
                  (<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>)<br />
                  <nuxt-link to="/techs/Thalassocracy">海上霸主</nuxt-link>/
                  <nuxt-link to="/techs/Forced_Levy">強制徵兵</nuxt-link>
                  (<nuxt-link to="/civs/Malay">馬來</nuxt-link>)<br />
                  <nuxt-link to="/techs/Tigui">部落領袖</nuxt-link>/
                  <nuxt-link to="/techs/Farimba">驃悍精神</nuxt-link>
                  (<nuxt-link to="/civs/Malians">馬利</nuxt-link>)<br />
                  <nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link>/
                  <nuxt-link to="/batt/El_Doradoa">黃金國</nuxt-link>
                  (<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>)
                </div>
                <div class="col-md-4">
                  <nuxt-link to="/techs/Nomads">游牧</nuxt-link>/
                  <nuxt-link to="/techs/Drill">鑿岩機</nuxt-link>
                  (<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>)<br />
                  <nuxt-link to="/techs/Kamandaran">波斯弓兵</nuxt-link>/
                  <nuxt-link to="/techs/Mahouts">象伕</nuxt-link>
                  (<nuxt-link to="/civs/Persians">波斯</nuxt-link>)<br />
                  <nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link>/
                  <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>
                  (<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>)<br />
                  <nuxt-link to="/techs/Madrasah">穆斯林學墊</nuxt-link>/
                  <nuxt-link to="/techs/Zealotry">狂熱</nuxt-link>
                  (<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>)<br />
                  <nuxt-link to="/techs/Orthodoxy">東正教</nuxt-link>/
                  <nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link>
                  (<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>)<br />
                  <nuxt-link to="/techs/Inquisition">異端審判</nuxt-link>/
                  <nuxt-link to="/techs/Supremacy">霸權</nuxt-link>
                  (<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>)<br />
                  <nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>/
                  <nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link>
                  (<nuxt-link to="/civs/Teutons">條頓</nuxt-link>)<br />
                  <nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>/
                  <nuxt-link to="/techs/Artillery">砲兵</nuxt-link>
                  (<nuxt-link to="/civs/Turks">土耳其</nuxt-link>)<br />
                  <nuxt-link to="/techs/Chatras">恰特拉傘</nuxt-link>/
                  <nuxt-link to="/techs/Paper_Money">紙幣</nuxt-link>
                  (<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>)<br />
                  <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>/
                  <nuxt-link to="/techs/Berserkergang">狂戰士幫</nuxt-link>
                  (<nuxt-link to="/civs/Vikings">維京</nuxt-link>)
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
