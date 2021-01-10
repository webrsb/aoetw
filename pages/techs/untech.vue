<template>
  <div class="container padtop">
    <h1>特殊科技</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          下面將列出遊戲中所有<nuxt-link to="/civs">文明</nuxt-link
          >的<b>特殊科技</b>。F=<nuxt-link to="/resource/Food">食物</nuxt-link
          >W=<nuxt-link to="/resource/Wood">木材</nuxt-link> G=<nuxt-link
            to="/resource/Gold"
            >金</nuxt-link
          >
          S=<nuxt-link to="/resource/Stone">石頭</nuxt-link>
        </p>
        <p>如要觀看一般科技請見:<nuxt-link to="/techs">科技總覽</nuxt-link></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>城堡時代</h3>
        <div class="hrn1"></div>
        <table class="table-bordered table-striped" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 10%;">特殊科技</td>
            <td class="tunitcc" style="width: 15%;">花費</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Aztecs"
                >阿茲特克</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link>
            </td>
            <td class="tunitc5">450F 350G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Skirmisher">矛兵系列</nuxt-link>和<nuxt-link
                to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >的攻擊和攻擊範圍+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>
            </td>
            <td class="tunitc5">250F 250G</td>
            <td class="tunitc6">
              團隊的<nuxt-link to="/building/Castle">城堡</nuxt-link
              >工作效率快25%
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>
            </td>
            <td class="tunitc5">750W 450G</td>
            <td class="tunitc6">
              徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >射程+1，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >攻擊+2。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Howdah">象轎</nuxt-link>
            </td>
            <td class="tunitc5">300W 400F</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
              >護甲+1/+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>
            </td>
            <td class="tunitc5">250F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>+1攻擊範圍。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Celts"
                >塞爾特</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Stronghold">堡壘</nuxt-link>
            </td>
            <td class="tunitc5">250F 200G</td>
            <td class="tunitc6">城堡和箭塔開火速率快25%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Great_Wall">長城</nuxt-link>
            </td>
            <td class="tunitc5">400W 200S</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Stone_Wall">城牆</nuxt-link>和箭塔+30%
              HP。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link>
            </td>
            <td class="tunitc5">300F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
              >訓練速度加倍(8秒變4秒)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Franks"
                >法蘭克</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link>
            </td>
            <td class="tunitc5">400W 400W</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Stable">馬廄</nuxt-link>工作速率快40%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link>
            </td>
            <td class="tunitc5">450F 250G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Barracks">軍營</nuxt-link
              >可以訓練<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Huns"
                >匈人</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Marauders">掠奪者</nuxt-link>
            </td>
            <td class="tunitc5">300W 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>可在馬廄訓練。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link>
            </td>
            <td class="tunitc5">200F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>和<nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >取消最小射程。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Sultans">蘇丹</nuxt-link>
            </td>
            <td class="tunitc5">400F 400W</td>
            <td class="tunitc6">
              挖金速度+10%；貿易<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >+10%；<nuxt-link to="/elements/Relic">遺跡</nuxt-link>產金快10%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Pavise">巨盾</nuxt-link>
            </td>
            <td class="tunitc5">300F 150G</td>
            <td class="tunitc6">
              徒步<nuxt-link to="/armor">遠程護甲</nuxt-link>+1/+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Yasama">射箭孔</nuxt-link>
            </td>
            <td class="tunitc5">300W 300F</td>
            <td class="tunitc6">箭塔可發射額外兩支箭。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Tusk_Swords">象牙劍</nuxt-link>
            </td>
            <td class="tunitc5">200W 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>攻擊+3。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Koreans"
                >朝鮮</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Eupseong">邑城</nuxt-link>
            </td>
            <td class="tunitc5">300W 300F</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Watch_Tower">箭塔系</nuxt-link>射程+2
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Corvinian_Army">科維尼安軍隊</nuxt-link>
            </td>
            <td class="tunitc5">200F 300G</td>
            <td class="tunitc6">
              訓練<nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link
              >不需消耗黃金。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Thalassocracy">海上霸主</nuxt-link>
            </td>
            <td class="tunitc5">300F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Dock">碼頭</nuxt-link>升級成<nuxt-link
                to="/building/Harbor"
                >海港</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Malians"
                >馬利</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Tigui">部落領袖</nuxt-link>
            </td>
            <td class="tunitc5">300W 200F</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >不需駐守可自動放箭。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link>
            </td>
            <td class="tunitc5">300F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              ><nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >攻擊+6。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Nomads">游牧</nuxt-link>
            </td>
            <td class="tunitc5">300W 150G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/House">居住房舍</nuxt-link
              >被摧毀人口上限不會下降(城鎮中心城堡不適用)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Kamandaran">波斯弓兵</nuxt-link>
            </td>
            <td class="tunitc5">200F 200G</td>
            <td class="tunitc6">
              訓練徒步<nuxt-link to="/units/Archer_Units">弓兵系</nuxt-link
              >消耗額外木材，而不消耗黃金。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link>
            </td>
            <td class="tunitc5">200W 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Ship">船隻護甲</nuxt-link
              >+1/+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Madrasah">穆斯林學墊</nuxt-link>
            </td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>死亡時返還33黃金。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Orthodoxy">東正教</nuxt-link>
            </td>
            <td class="tunitc5">200F 300G</td>
            <td class="tunitc6">僧侶護甲+3/+3。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Inquisition">異端審判</nuxt-link>
            </td>
            <td class="tunitc5">100F 300G</td>
            <td class="tunitc6">
              僧侶<nuxt-link to="/elements/Conversion">招降</nuxt-link
              >速度變快(對單位時間-1，對建築物時間-7)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>
            </td>
            <td class="tunitc5">400W 350G。</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >近戰護甲+4。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>
            </td>
            <td class="tunitc5">350F 150G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>+20 HP。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Chatras">恰特拉傘</nuxt-link>
            </td>
            <td class="tunitc5">250F 250G</td>
            <td class="tunitc6">矛象伕+50 HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>
            </td>
            <td class="tunitc5">400F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>對<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >攻擊+5，對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >攻擊+4。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Bulgarians"
                >保加利亞</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Stirrups">馬鐙</nuxt-link>
            </td>
            <td class="tunitc5">400F 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Konnik">保加利亞騎兵</nuxt-link
              >攻速+25%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Cumans"
                >庫曼</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Steppe_Husbandry">大草原耕種技術</nuxt-link>
            </td>
            <td class="tunitc5">200F 300W</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >訓練速度+50%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Lithuanians"
                >立陶宛</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Hill_Forts">山城堡</nuxt-link>
            </td>
            <td class="tunitc5">250F 250G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>射程+3。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/civs/Tatars"
                >韃靼</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Silk_Armor">絲護甲</nuxt-link>
            </td>
            <td class="tunitc5">400W 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              ><nuxt-link to="/armor">遠程護甲</nuxt-link>及近戰護甲+1。
            </td>
          </tr>
        </table>

        <h3>帝王時代</h3>
        <div class="hrn1"></div>
        <table class="table-bordered table-striped" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">文明</td>
            <td class="tunitcc" style="width: 10%;">特殊科技</td>
            <td class="tunitcc" style="width: 15%;">花費</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link>
            </td>
            <td class="tunitc5">450F 750G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>攻擊+4。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Maghrabi_Camels">馬格拉比駱駝</nuxt-link>
            </td>
            <td class="tunitc5">700F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >部隊獲得<nuxt-link to="/elements/Regeneration">回血</nuxt-link
              >能力(每分鐘回15 HP)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Warwolf">戰狼號</nuxt-link>
            </td>
            <td class="tunitc5">800W 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >有範圍傷害，對靜止單位有100%命中率。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Manipur_Cavalry">曼尼普爾騎兵</nuxt-link>
            </td>
            <td class="tunitc5">650F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >和<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+3。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Logistica">後勤</nuxt-link>
            </td>
            <td class="tunitc5">1000F 600G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >有<nuxt-link to="/elements/Area_of_Effect">踐踏傷害</nuxt-link
              >，對<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >攻擊+6。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Celts">塞爾特</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Furor_Celtica">塞爾特狂熱</nuxt-link>
            </td>
            <td class="tunitc5">750F 450G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link
              >的單位+40% HP。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Chinese">中國</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link>
            </td>
            <td class="tunitc5">750W 750G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link
              >攻擊+2，<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>攻擊+4。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link>
            </td>
            <td class="tunitc5">1000F 600G</td>
            <td class="tunitc6">
              <nuxt-link to="/units//building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >的單位傷害範圍增加(<nuxt-link to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >和<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>除外)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Bearded_Axe">倒鉤斧</nuxt-link>
            </td>
            <td class="tunitc5">400F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link>射程+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Goths">哥德</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Perfusion">井噴</nuxt-link>
            </td>
            <td class="tunitc5">400W 600G</td>
            <td class="tunitc6">軍營工作速度加倍。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Huns">匈人</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Atheism">無神論</nuxt-link>
            </td>
            <td class="tunitc5">500F 500G</td>
            <td class="tunitc6">
              遺跡和<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >的勝利時間延長100年，<nuxt-link to="/techs/Spies">間諜</nuxt-link
              >/<nuxt-link to="/techs/Spies">叛徒</nuxt-link>花費-50%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Incas">印加</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Fabric_Shields">織物盾</nuxt-link>
            </td>
            <td class="tunitc5">400F 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
              >、投石手和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >的護甲+1/+2。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Indians">印度</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Shatagni">印度火銃</nuxt-link>
            </td>
            <td class="tunitc5">500F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>射程+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link>
            </td>
            <td class="tunitc5">500F 250G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>和<nuxt-link
                to="/units/Trade_Cog"
                >貿易商旅</nuxt-link
              >造價減半。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Japanese">日本</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Kataparuto">彈射器</nuxt-link>
            </td>
            <td class="tunitc5">750F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >組裝/拆裝速度加快。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Khmer">高棉</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>
            </td>
            <td class="tunitc5">700F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
              >和弩砲發射兩個投射物。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Shinkichon">投擲器</nuxt-link>
            </td>
            <td class="tunitc5">800W 500G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link>射程+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>
            </td>
            <td class="tunitc5">600W 400G</td>
            <td class="tunitc6">馬弓騎兵攻擊和射程都+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Malay">馬來</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Forced_Levy">強制徵兵</nuxt-link>
            </td>
            <td class="tunitc5">1000F 600G</td>
            <td class="tunitc6">
              軍營<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >訓練不需花費黃金。(<nuxt-link to="/units/Condottiero"
                >傭兵</nuxt-link
              >仍需要)
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Malians">馬利</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Farimba">驃悍精神</nuxt-link>
            </td>
            <td class="tunitc5">650F 400G</td>
            <td class="tunitc6">馬廄單位攻擊+5。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/El_Dorado">黃金國</nuxt-link>
            </td>
            <td class="tunitc5">750F 450G</td>
            <td class="tunitc6">鷹勇士+40 HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Drill">鑿岩機</nuxt-link>
            </td>
            <td class="tunitc5">500F 450G</td>
            <td class="tunitc6">攻城器製造所的單位移動速度+50%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Persians">波斯</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Mahouts">象伕</nuxt-link>
            </td>
            <td class="tunitc5">300F 300G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/War_Elephant">戰象</nuxt-link>移動速度+30%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>
            </td>
            <td class="tunitc5">700F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >對移動目標的命中率提升。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Zealotry">狂熱</nuxt-link>
            </td>
            <td class="tunitc5">750F 700G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >和<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>+30
              HP。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link>
            </td>
            <td class="tunitc5">1200F 500G</td>
            <td class="tunitc6">步兵單位有踐踏傷害。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Supremacy">霸權</nuxt-link>
            </td>
            <td class="tunitc5">400F 250G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Villager">村民</nuxt-link
              >攻擊+6，護甲+2/+2，HP+40。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Teutons">條頓</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link>
            </td>
            <td class="tunitc5">600F 400S</td>
            <td class="tunitc6">城堡射程+3；駐紮步兵可放箭。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Turks">土耳其</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Artillery">砲兵</nuxt-link>
            </td>
            <td class="tunitc5">500G 450S</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >、<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
              >和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>射程+2。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Paper_Money">紙幣</nuxt-link>
            </td>
            <td class="tunitc5">800F 200G</td>
            <td class="tunitc6">玩家和同盟立即獲得500黃金。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Vikings">維京</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Berserkergang">狂戰士幫</nuxt-link>
            </td>
            <td class="tunitc5">450F 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >回血速度提升(每分鐘回20 HP變每分鐘回40 HP)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Bagains">協議</nuxt-link>
            </td>
            <td class="tunitc5">900F 450G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Militia">民兵系</nuxt-link
              ><nuxt-link to="/armor/Armor_Class_Infantry">近程護甲</nuxt-link
              >+5。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Cuman_Mercenaries">庫曼傭兵</nuxt-link>
            </td>
            <td class="tunitc5">650F 400G</td>
            <td class="tunitc6">
              隊伍成員能在城堡免費生產10名精銳<nuxt-link to="/units/Kipchaks"
                >欽察</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Tower_Shields">塔盾</nuxt-link>
            </td>
            <td class="tunitc5">800F 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>系和<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              ><nuxt-link to="/armor">遠程護甲</nuxt-link>+2。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/Timurid_Siegecraft">帖木兒攻城術</nuxt-link>
            </td>
            <td class="tunitc5">500W 400G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trebuchet">投石機</nuxt-link>+2射程、可啟用
              <nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
