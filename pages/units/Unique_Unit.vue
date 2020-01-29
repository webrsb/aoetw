<template>
  <div class="container padtop">
    <h1>特殊單位</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>大多數的國家只有一種<b>特殊單位</b></p>
      </div>
    </div>
    <h3>概要</h3>
    <div class="hrn1"></div>
    <div class="n1">
      <ul>
        <li>
          遊戲中每個<nuxt-link to="/civs">文明</nuxt-link
          >最少有一個特殊單位，只能在<nuxt-link to="/techs/age/Castle_Age"
            >城堡時代</nuxt-link
          >於<nuxt-link to="/building/Castle">城堡</nuxt-link
          >訓練，但有八個文明有第二種特殊單位，並且可以在城堡以外的地方訓練。
        </li>
        <li>
          特殊單位大概為三種，城堡的與非城堡的還有文明共享的，詳細可以看下方表格。
        </li>
        <li>
          特殊單位提供了遊戲中更多元的打法，可以與同盟互相配合，或是搭配地圖地形選擇不同的文明兵種搭配，為遊戲增加更多的樂趣。
        </li>
        <li>
          但值得注意的是，雖然<nuxt-link to="/units/Samurai">日本武士</nuxt-link
          >對於所有的特殊單位(包含他自己)有加成，但對<nuxt-link
            to="/units/Imperial_Camel"
            >帝王駱駝騎兵</nuxt-link
          >與<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
          >是沒有加成的。
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>城堡</h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <tr>
            <td colspan="3">
              <h3>
                <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
              </h3>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/LongbowmanIcon.png"
                alt=""
              /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
            <td class="tunitc6">
              遠距離<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >，攻擊高。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/CataphractIcon.png"
                alt=""
              /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
            </td>
            <td class="tunitc6">
              反<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >的<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >，但訓練與研發昂貴。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                to="/units/Woad_Raider"
                >菘藍武士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>
            </td>
            <td class="tunitc6">移動相當快速的步兵。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ChuKoNuIcon.png" alt="" /><nuxt-link
                to="/units/Chu_Ko_Nu"
                >連弩兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>
            </td>
            <td class="tunitc6">
              攻擊高的弓兵，但<nuxt-link to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >慢。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                to="/units/Throwing_Axeman"
                >擲斧兵</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
            <td class="tunitc6">
              擁有遠距離攻擊的近戰<nuxt-link to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/HuskarlIcon.png" alt="" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>
            </td>
            <td class="tunitc6">
              廉價、移動快速的反弓兵的步兵單位。研發<nuxt-link
                to="/techs/Anarchy"
                >無政府狀態</nuxt-link
              >後可在<nuxt-link to="/building/Barracks">軍營</nuxt-link>訓練
            </td>
          </tr>

          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
              >高，對<nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >有額外的加成。但對<nuxt-link to="/units/Imperial_Camel"
                >帝王駱駝騎兵</nuxt-link
              >與<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >是沒有加成的。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/MangudaiIcon.png" alt="" /><nuxt-link
                to="/units/Mangudai"
                >蒙古突騎</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
            </td>
            <td class="tunitc6">
              射速、移動速度快的<nuxt-link to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/WarElephantIcon.png"
                alt=""
              /><nuxt-link to="/units/War_Elephant">戰象</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>
            </td>
            <td class="tunitc6">
              破壞力十足但移動緩慢的<nuxt-link to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
            <td class="tunitc6">
              造價昂貴，但可以反制<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >單位且具有遠程攻擊的近戰<nuxt-link to="/units/Camel"
                >駱駝</nuxt-link
              >騎兵單位。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Crusade_avatar.png"
                alt=""
              /><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
            </td>
            <td class="tunitc6">
              攻擊、防禦與<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >優異但行動非常緩慢的步兵。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/JanissaryIcon.png"
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
              <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                to="/units/Berserk"
                >狂戰士</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
            </td>
            <td class="tunitc6">
              可自行回復<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >，且研發<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >後可以反制騎兵單位。
            </td>
          </tr>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <tr>
            <td colspan="3">
              <h3>
                <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
              </h3>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/JaguarWarriorIcon.png"
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
              <img class="gg" src="~assets/TarkanIcon.png" alt="" /><nuxt-link
                to="/units/Tarkan"
                >答剌罕騎兵</nuxt-link
              >
            </td>
            <td class="tunitc4"><nuxt-link to="/civs/Huns">匈人</nuxt-link></td>
            <td class="tunitc6">
              <nuxt-link to="/armor">遠防</nuxt-link>與血量高，對於<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >有額外加成的騎兵。研發<nuxt-link to="/techs/Marauders"
                >掠奪者</nuxt-link
              >後可在<nuxt-link to="/building/Stable">馬廄</nuxt-link>訓練。
            </td>
          </tr>

          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/WarWagonIcon.png" alt="" /><nuxt-link
                to="/units/War_Wagon"
                >馬戰車</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>
            </td>
            <td class="tunitc6">
              高遠防與血量的<nuxt-link to="/units/Cavalry_Archer"
                >馬弓騎兵類</nuxt-link
              >。
            </td>
          </tr>

          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/PlumedArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
            </td>
            <td class="tunitc6">
              便宜、血量高，移動速度快的<nuxt-link to="/units/Archer_Units"
                >弓兵單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ConquistadorIcon.png"
                alt=""
              /><nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
            </td>
            <td class="tunitc6">移動速度快，高攻擊，裝甲高的火槍騎兵單位。</td>
          </tr>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <tr>
            <td colspan="3">
              <h3>
                <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
              </h3>
            </td>
          </tr>
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
            <td class="tunitc6">
              具有一格<nuxt-link to="/units/Archer_Units">遠程</nuxt-link
              >距離的<nuxt-link to="/armor/Armor_Class_Cavalry"
                >反騎兵</nuxt-link
              >步兵單位。
            </td>
          </tr>

          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>
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
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
              /><nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Cavalry">反騎兵</nuxt-link
              >的重裝弩兵，移動速度緩慢，升級精銳之前射速慢。
            </td>
          </tr>

          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Magyar_Huszar_icon.png"
                alt=""
              /><nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link>
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
          <tr>
            <td colspan="3">
              <h3>
                <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
              </h3>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >反馬弓騎兵</nuxt-link
              >的遠程駱駝騎兵。
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
              血量及防禦低，造價不斐但移動快高攻擊的步兵。
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
              <img class="gg" src="~assets/OrganGunIcon.png" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴砲</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
            <td class="tunitc6">
              高攻擊的<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >。
            </td>
          </tr>
        </table>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">兵種</td>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 70%;">概要</td>
          </tr>
          <tr>
            <td colspan="3">
              <h3>
                <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
              </h3>
            </td>
          </tr>
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
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>
            </td>
            <td class="tunitc6">
              象版弩砲，高防禦高血量，且可用弩砲銷毀樹木。
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
                src="~assets/RattanarcherIcon2.png"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
            </td>
            <td class="tunitc6">
              移動快速高防禦的<nuxt-link to="/armor/Armor_Class_Archer"
                >反射手</nuxt-link
              >的弓兵。
            </td>
          </tr>
        </table>

        <div class="row">
          <div class="col-md-12">
            <h3>非城堡</h3>
            <div class="hrn1"></div>
            <table class="table-bordered" width="100%">
              <tr>
                <td class="tunitcc" style="width: 15%;">兵種</td>
                <td class="tunitcc" style="width: 15%;">文明</td>
                <td class="tunitcc" style="width: 70%;">概要</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/LongboatIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Vikings">維京</nuxt-link>
                </td>
                <td class="tunitc6">
                  城堡時代於<nuxt-link to="/building/Dock">碼頭</nuxt-link
                  >生產，可一次發出多支箭的<nuxt-link to="/units/Naval_Vessels"
                    >戰船</nuxt-link
                  >。
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/TurtleShipIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>
                </td>
                <td class="tunitc6">訓練於碼頭，攻擊非常高。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/MissionaryIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Missionary">傳教士</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
                </td>
                <td class="tunitc6">
                  <nuxt-link to="/building/Monastery">修道院</nuxt-link
                  >中生產，無法拿<nuxt-link to="/elements/Relic">遺跡</nuxt-link
                  >，且治療與<nuxt-link to="/elements/Conversion"
                    >招降</nuxt-link
                  >能力皆遜於<nuxt-link to="/units/Monk">僧侶</nuxt-link
                  >，但移動速度快。
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Slingericon.png"
                    alt=""
                  /><nuxt-link to="/units/Slinger">投石手</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Incas">印加</nuxt-link>
                </td>
                <td class="tunitc6">
                  於<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                  >訓練，城堡時代即可訓練的反<nuxt-link
                    to="/armor/Armor_Class_Infantry"
                    >步兵單位</nuxt-link
                  >。本質上是<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
                  >。
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/ImperialCamelIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Imperial_Camel"
                    >帝王駱駝騎兵</nuxt-link
                  >
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Indians">印度</nuxt-link>
                </td>
                <td class="tunitc6">
                  <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                  >於<nuxt-link to="/building/Stable">馬廄</nuxt-link
                  >中生產，<nuxt-link to="/units/Heavy_Camel"
                    >重裝駱駝騎兵</nuxt-link
                  >的升級，反騎兵單位。
                </td>
              </tr>

              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/CaravelIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
                </td>
                <td class="tunitc6">碼頭生產，攻擊具有貫穿功能的戰船。</td>
              </tr>
            </table>

            <div class="row">
              <div class="col-md-12">
                <h3>文明共享</h3>
                <div class="hrn1"></div>
                <table class="table-bordered" width="100%">
                  <tr>
                    <td class="tunitcc" style="width: 15%;">兵種</td>
                    <td class="tunitcc" style="width: 15%;">文明</td>
                    <td class="tunitcc" style="width: 70%;">概要</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/CondottieroIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
                    </td>
                    <td class="tunitc4">
                      <nuxt-link to="/civs/Italians">義大利</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/civs/Italians">義大利</nuxt-link
                      >及其同盟於帝王時代在<nuxt-link to="/building/Barracks"
                        >軍營</nuxt-link
                      >中可生產，移動速度快的反火槍單位。
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/GenitourIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
                    </td>
                    <td class="tunitc4">
                      <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
                      >及其同盟於城堡時代可於射箭場訓練，反弓兵的騎馬<nuxt-link
                        to="/units/Skirmisher"
                        >矛兵</nuxt-link
                      >。
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Imperialskirmishericon.png"
                        alt=""
                      /><nuxt-link to="/units/Imperial_Skirmisher"
                        >帝王戰矛兵</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">
                      <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                      >及其同盟於帝王時代可於射箭場訓練，為戰矛兵的再升級。
                    </td>
                  </tr>
                </table>

                <h3>圖庫</h3>
                <div class="hrn1"></div>
                <div class="row">
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        width="180"
                        src="~assets/Uniqueaok.jpg"
                        alt=""
                    /></gallery>
                    <div class="lightbox-caption" style="width:220px">
                      <p>
                        <em
                          >所有《<nuxt-link to="/games/aok"
                            >世紀帝國II：帝王世紀</nuxt-link
                          >》的特殊單位。</em
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        width="200"
                        src="~assets/Uniqueaoc.jpg"
                        alt=""
                    /></gallery>
                    <div class="lightbox-caption" style="width:220px">
                      <p>
                        <em
                          >所有《<nuxt-link to="/games/aoc"
                            >世紀帝國II：征服者入侵</nuxt-link
                          >》的特殊單位。</em
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        width="200"
                        src="~assets/Uniqueaof.png"
                        alt=""
                    /></gallery>
                    <div class="lightbox-caption" style="width:185px">
                      <p>
                        <em
                          >所有《<nuxt-link to="/games/aof"
                            >世紀帝國II：失落的帝國</nuxt-link
                          >》的特殊單位。</em
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        width="200"
                        src="~assets/Uniqueaoa.jpg"
                        alt=""
                    /></gallery>
                    <div class="lightbox-caption" style="width:220px">
                      <p>
                        <em
                          >所有《<nuxt-link to="/games/ak"
                            >世紀帝國II：非洲王國</nuxt-link
                          >》的特殊單位。</em
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        width="200"
                        src="~assets/Uniqueaor.png"
                        alt=""
                    /></gallery>
                    <div class="lightbox-caption" style="width:185px">
                      <p>
                        <em
                          >所有《<nuxt-link to="/games/aor"
                            >世紀帝國II：王者崛起</nuxt-link
                          >》的特殊單位。</em
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="thanks">感謝! 此頁面由賜齡和眠協助編輯</div>
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
  layout: 'allunit2',
  components: {}
}
</script>
<style></style>
