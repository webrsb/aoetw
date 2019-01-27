<template>
  <div class="container padtop">
    <!-- Example row of columns -->
    <h1>特殊單位</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>大多數的國家只有一種特殊單位</p>
      </div>
    </div>
    <h3>概要</h3>
    <div class="hrn1"></div>
    <div class="n1">
      <ul>
        <li>
          遊戲中每個文明最少有一個特殊單位，只能在城堡時代於城堡訓練，但有八個文明有第二種特殊單位，並且可以在城堡以外的地方訓練。
        </li>
        <li>
          特殊單位大概三為三種，城堡的與非城堡的還有文明共享的，詳細可以看下方表格。
        </li>
        <li>
          特殊單位提供了遊戲中更多元的打法，可以與同盟互相配合，或是搭配地圖地形選擇不同的文明兵種搭配，為遊戲增加更多的樂趣。
        </li>
        <li>
          但值得注意的是，雖然日本武士對於所以的特殊單位(包含他自己)有加成，但對帝王駱駝騎兵與帝王戰茅兵是沒有加成的。
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3><nuxt-link to="">城堡</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/LongbowmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
            <td class="tunitc6">遠距離弓兵，攻擊高。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
            </td>
            <td class="tunitc6">反步兵的騎兵，但訓練與研發昂貴。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/WBRSK.jpg" alt="" /><nuxt-link
                to="/units/Woad_Raider"
                >菘藍武士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>
            </td>
            <td class="tunitc6">移動相當快速的步兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt="" /><nuxt-link
                to="/units/Chu_Ko_Nu"
                >連弩兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>
            </td>
            <td class="tunitc6">攻擊高的弓兵，但射速慢。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/TAXEM.jpg" alt="" /><nuxt-link
                to="/units/Throwing_Axeman"
                >擲斧兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
            <td class="tunitc6">擁有遠距離攻擊的近戰步兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>
            </td>
            <td class="tunitc6">廉價、移動快速的反弓兵的步兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>
            </td>
            <td class="tunitc6">攻擊速度高，對特殊單位有額外的加成。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/MangudaiIcon.jpg" alt="" /><nuxt-link
                to="/units/Mangudai"
                >蒙古突騎</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
            </td>
            <td class="tunitc6">射速、移動速度快的馬弓騎兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/WarElephantIcon.jpg"
                alt=""
              /><nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>
            </td>
            <td class="tunitc6">破壞力十足但移動緩慢的騎兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
            <td class="tunitc6">
              造價昂貴，但反騎兵且具有遠程攻擊的近戰駱駝騎兵單位。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Crusade_avatar.png"
                alt=""
              /><nuxt-link to="/Teutonic_units/Knight">條頓武士</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
            </td>
            <td class="tunitc6">攻擊、防禦與血量優異但行動非常緩慢的步兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/JanissaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
            </td>
            <td class="tunitc6">高攻擊，射程極遠的徒步火槍單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                to="/units/Berserk"
                >狂戰士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
            </td>
            <td class="tunitc6">
              可自行回復生命值，且研發特殊科技後可以反馬。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/LongboatIcon.jpg" alt="" /><nuxt-link
                to="/units/Caravel"
                >維京大戰船</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
            </td>
            <td class="tunitc6">
              城堡時代於碼頭生產，可一次發出多支箭的戰船。
            </td>
          </tr>
          <li>
            <nuxt-link to="/civs/Goths">哥德</nuxt-link>、研發<nuxt-link
              to="/techs/Anarchy"
              >無政府狀態</nuxt-link
            >後可在<nuxt-link to="/building/Barracks">兵營</nuxt-link>訓練
            <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>
          </li>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/JaguarWarriorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
            <td class="tunitc6">對於其他步兵有額外的加成的步兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                to="/units/Tarkan"
                >韃靼騎兵</nuxt-link
              >
            </td>
            <td class="tunitc4"><nuxt-link to="/civs/Huns">匈奴</nuxt-link></td>
            <td class="tunitc6">遠防與血量高，對於建築物有額外加成的騎兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/WarWagonIcon.jpg" alt="" /><nuxt-link
                to="/units/War_Wagon"
                >馬戰車</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
            </td>
            <td class="tunitc6">高遠防與血量的馬弓騎兵類。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
            </td>
            <td class="tunitc6">碼頭中訓練，攻擊非常高。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/PlumedArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Plumed_units/Archer">羽毛箭射手</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
            </td>
            <td class="tunitc6">便宜、血量高，移動速度快的弓兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">征服者</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
            </td>
            <td class="tunitc6">移動速度快，高攻擊，裝甲高的火槍騎兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Missionary">傳教士</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
            </td>
            <td class="tunitc6">
              修道院中生產，無法拿遺跡，且治療與招降能力皆不足僧侶，但移動速度快。
            </td>
          </tr>
          <li>
            <nuxt-link to="/civs/Huns">匈奴</nuxt-link>研發<nuxt-link
              to="/techs/Marauders"
              >掠奪者</nuxt-link
            >後可在<nuxt-link to="/building/Stable">馬廄</nuxt-link>訓練
            <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>
          </li>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt="" /><nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Incas">印加</nuxt-link>
            </td>
            <td class="tunitc6">具有一格遠程距離的反騎兵的步兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Slingericon.png" alt="" /><nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Incas">印加</nuxt-link>
            </td>
            <td class="tunitc6">
              於射箭場訓練，城堡時代即可訓練的反步兵單位。本質上是弩兵。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Elephant_units/Archer">象弓騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
            </td>
            <td class="tunitc6">高血量高裝甲的遠程大象。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.jpg"
                alt=""
              /><nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
            </td>
            <td class="tunitc6">
              帝王時代於馬廄中生產，重裝駱駝騎兵的升級，反馬單位。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
              /><nuxt-link to="/Genoese_units/Crossbowman"
                >熱那亞弩手</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
            <td class="tunitc6">
              反騎兵的重裝弩兵，移動速度緩慢，生精銳之前射速慢。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/CondottieroNewIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
            <td class="tunitc6">
              只要是義大利或其同盟於帝王時代在兵營中可生產，移動速度快的反火槍單位。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Magyar_Huszar_icon.jpg"
                alt=""
              /><nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
            </td>
            <td class="tunitc6">便宜速度快的輕騎兵單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/New_Boyar.png" alt="" /><nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
            <td class="tunitc6">重裝甲重型騎兵。</td>
          </tr>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Camel_units/Archer">駱駝弓騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
            </td>
            <td class="tunitc6">反馬弓騎兵的遠程駱駝。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/GenitourIcon.jpg" alt="" /><nuxt-link
                to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
            </td>
            <td class="tunitc6">
              柏柏及其同盟於城堡時代可於射箭場訓練，反弓兵的騎馬矛兵。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
            </td>
            <td class="tunitc6">
              血量防禦低，但移動快速高攻擊的步兵，且不便宜。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>
            </td>
            <td class="tunitc6">移動快速的遠程步兵單位，攻擊高但射速慢。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >手風琴砲</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
            <td class="tunitc6">高攻擊的火藥單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" /><nuxt-link
                to="/units/Caravel"
                >卡拉維爾戰船</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
            <td class="tunitc6">碼頭生產，攻擊具有貫穿功能的戰船。</td>
          </tr>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >飛鏢騎兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
            </td>
            <td class="tunitc6">移動速度與發射速度快，且攻擊高的遠程騎兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                >弩砲象</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>
            </td>
            <td class="tunitc6">
              象板弩砲，高防禦高血量，且可用弩砲銷毀樹木。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>
            </td>
            <td class="tunitc6">廉價，移動快速的步兵，且只佔0.5人口。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Rattanarchericon.png"
                alt=""
              /><nuxt-link to="/Rattan_units/Archer">藤甲弓兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
            </td>
            <td class="tunitc6">移動快速高防禦的反射手的弓兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰茅兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
            </td>
            <td class="tunitc6">
              越南及其同盟於帝王時代可於射箭場訓練，為精銳戰茅兵的再升級。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡和眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <nuxt-link to="/img/Uniqueaok.png"
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Uniqueaok.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有《世紀帝國 II HD: 帝王世紀》的特殊單位。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Uniqueaoc.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Uniqueaoc.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有《世紀帝國 II HD: 征服者入侵》的特殊單位。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Uniqueaof.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Uniqueaof.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有《世紀帝國 II HD: 失落的帝國》的特殊單位。</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <nuxt-link to="/img/Uniqueaoa.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Uniqueaoa.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有《世紀帝國 II HD: 非洲王朝》的特殊單位。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Uniqueaor.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Uniqueaor.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有《世紀帝國 II HD: 王者崛起》的特殊單位。</em></p>
            </div>
          </div>
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
