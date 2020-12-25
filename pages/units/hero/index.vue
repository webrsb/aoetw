<template>
  <div class="container padtop">
    <h1>英雄單位</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          <strong>英雄</strong
          >是世紀帝國II的特殊單位。在常規遊戲中不可用，英雄通常指的是歷史人物。因此，他們經常在<nuxt-link
            to="/batt"
            >戰役</nuxt-link
          >場景中出現。在那裡，他們往往是必須生存的單位，即他們的死亡意味著失敗。西班牙征服者料片之後所有英雄都不能被<nuxt-link
            to="/elements/Conversion"
            >招降</nuxt-link
          >，並獲得<nuxt-link to="/elements/Regeneration">回血</nuxt-link
          >的能力。英雄往往有獨特的外貌，有時甚至有獨特的單位設定，他們通常有很好的戰鬥屬性，這使他們在遊戲中非常有價值。
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>帝王世紀</h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 20%;">名稱</td>
            <td class="tunitcc" style="width: 15%;">類型</td>
            <td class="tunitcc" style="width: 15%;">外貌</td>
            <td class="tunitcc" style="width: 55%;">登場戰役</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Aethelfirthicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Aethelfirth">埃特爾</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Legionaries_on_the_Horizon"
                >羅馬軍團隨時殺到</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/MonkIcon.png" alt="" /><nuxt-link
                to="/units/hero/Archbishop"
                >大主教</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>
            </td>
            <td class="tunitc6">僧侶</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Archersoftheeyesicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Archers_of_the_Eyes"
                >神弓手</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Siege_of_Jerusalem"
                >耶路撒冷攻城戰</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Emperor_Sleeping"
                >沉睡的皇帝</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Badneighboricon.png"
                alt=""
              /><nuxt-link to="/units/hero/Bad_Neighbor">壞鄰居</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Belisariusicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Belisarius">貝利沙魯實</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Legionaries_on_the_Horizon"
                >羅馬軍團隨時殺到</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Charlemagneicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Charlemagne">查理曼大帝</nuxt-link>
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Final_Fortress">撒克遜起義</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Charlesmartelicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Charles_Martel">鐵鎚查理</nuxt-link>
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">擲斧兵</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Tours_732">都爾（732）</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Constablerichemonticon.png"
                alt=""
              /><nuxt-link to="/units/hero/Constable_Richemont"
                >康斯塔伯理察蒙</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/A_Perfect_Martyr">遺芳餘烈</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Dukedalencon.png" alt="" /><nuxt-link
                to="/units/hero/Duke_D_Alencon"
                >阿朗松公爵</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Maid_of_Orleans">奧爾良少女</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Elcidicon.png" alt="" /><nuxt-link
                to="/units/hero/El_Cid"
                >熙德</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Brother_against_Brother">兄弟鬩牆</nuxt-link
              ><br /><nuxt-link to="/batt/The_Exile_of_the_Cid"
                >熙德的流亡歲月</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Emperorinabarrelicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Emperor_in_a_Barrel"
                >裝在桶裡的皇帝</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Villager">村民</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Emperor_Sleeping">沉睡的皇帝</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Elcidicon.png" alt="" /><nuxt-link
                to="/units/hero/Erik_the_Red"
                >紅衣艾立克</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Vindlandsaga_1000"
                >芬特蘭撒格(1000)</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Constablerichemonticon.png"
                alt=""
              /><nuxt-link to="/units/hero/Frankish_Paladin"
                >法蘭克聖騎士</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Burmese_Tigers">餓虎撲食</nuxt-link
              ><br /><nuxt-link to="/batt/The_Final_Fortress"
                >撒克遜起義</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/MonkIcon.png" alt="" /><nuxt-link
                to="/units/hero/Friar_Tuck"
                >塔克修士</nuxt-link
              >
            </td>
            <td class="tunitc4">僧侶</td>
            <td class="tunitc6">僧侶</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Constablerichemonticon.png"
                alt=""
              /><nuxt-link to="/units/hero/Gawain">高文爵士</nuxt-link>
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">騎兵</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Genghiskhanicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Genghis_Khan">成吉思汗</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Crucible">統一各部</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Badneighboricon.png"
                alt=""
              /><nuxt-link to="/units/hero/God_s_Own_Sling">神之弓</nuxt-link>
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link>
            </td>
            <td class="tunitc6">巨型投石機</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Guyjosselyneicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Guy_Josselyne">蓋佐斯爾立</nuxt-link>
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/A_Perfect_Martyr">遺芳餘烈</nuxt-link
              ><br /><nuxt-link to="/batt/The_Final_Fortress"
                >撒克遜起義</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/MonkIcon.png" alt="" /><nuxt-link
                to="/units/hero/Harold_Haardraade"
                >哈拉爾·哈德拉達</nuxt-link
              >
            </td>
            <td class="tunitc4">僧侶</td>
            <td class="tunitc6">僧侶</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                to="/units/hero/Hrolf_the_Ganger"
                >首領荷夫</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">狂戰士</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Wolf-icon-aoe2.png"
                alt=""
              /><nuxt-link to="/units/hero/Hunting_Wolf">獵狼</nuxt-link>
            </td>
            <td class="tunitc4">動物</td>
            <td class="tunitc6">狼</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Horde_Rides_West"
                >遊牧民族的西遷</nuxt-link
              >
              <br /><nuxt-link to="/batt/Pax_Mongolia"></nuxt-link>
              <nuxt-link to="/batt/The_Horde_Rides_West">策馬西征</nuxt-link>
              <br /><nuxt-link to="/batt/Pax_Mongolia">蒙古太平</nuxt-link>
              <br /><nuxt-link to="/batt/The_Great_Ride">偉大的騎士</nuxt-link
              ><br /><nuxt-link to="/batt/Honfoglalas_895"
                >征服家園（895）</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Jeanbureauicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Jean_Bureau">約翰布荷</nuxt-link>
            </td>
            <td class="tunitc4">攻城單位</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/A_Perfect_Martyr">遺芳餘烈</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Jeandelorrain.png"
                alt=""
              /><nuxt-link to="/units/hero/Jean_de_Lorrain"
                >洛林的約翰</nuxt-link
              >
            </td>
            <td class="tunitc4">攻城單位</td>
            <td class="tunitc6">火砲</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Siege_of_Paris">圍攻巴黎</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Joanofarcicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Joan_of_Arc_Champion"
                >聖女貞德</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/Knight">騎士</nuxt-link>
            </td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Maid_of_Orleans">奧爾良少女</nuxt-link
              ><br /><nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                >掃蕩羅亞爾</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Rising">龍飛鳳起</nuxt-link
              ><br /><nuxt-link to="/batt/The_Siege_of_Paris"
                >圍攻巴黎</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Joanthemaidicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Joan_the_Maid">農家女貞德</nuxt-link>
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/An_Unlikely_Messiah"
                >橫空出世</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ChampionIcon.png" alt="" /><nuxt-link
                to="/units/hero/King_Arthur"
                >亞瑟王</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">劍兵勇士</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                to="/units/hero/Kitabatake"
                >北畠將軍</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Samurai">日本武士</nuxt-link>
            </td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Kushlukicon.png" alt="" /><nuxt-link
                to="/units/hero/Kushluk"
                >屈出律</nuxt-link
              >
            </td>
            <td class="tunitc4">騎士</td>
            <td class="tunitc6">騎兵</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/A_Life_of_Revenge">復仇人生</nuxt-link
              ><br /><nuxt-link to="/batt/Emperor_of_the_West"
                >西域之君</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Sack_of_Rome">洗劫羅馬</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Lahire.png" alt="" /><nuxt-link
                to="/units/hero/La_Hire"
                >拉海爾</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">劍兵勇士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                >掃蕩羅亞爾</nuxt-link
              >
              <br /><nuxt-link to="/batt/A_Perfect_Martyr"
                >遺芳餘烈</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/PaladinIcon.png" alt="" /><nuxt-link
                to="/units/hero/Lancelot"
                >藍斯洛特</nuxt-link
              >
            </td>
            <td class="tunitc4">騎士</td>
            <td class="tunitc6">遊俠</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Lorddegravilleicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Lord_de_Graville"
                >格拉維爾領主</nuxt-link
              >
            </td>
            <td class="tunitc4">弓兵</td>
            <td class="tunitc6">強弩兵</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Siege_of_Paris">圍攻巴黎</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Masterofthetemplaricon.png"
                alt=""
              /><nuxt-link to="/units/hero/Master_of_the_Templar"
                >聖殿騎士團首領</nuxt-link
              >
            </td>
            <td class="tunitc4">騎士</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Siege_of_Jerusalem"
                >耶路撒冷攻城戰</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Minamotoicon.png" alt="" /><nuxt-link
                to="/units/hero/Minamoto"
                >源氏</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">日本武士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Kurikara_1183">礪波山（1183）</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/PaladinIcon.png" alt="" /><nuxt-link
                to="/units/hero/Mordred"
                >莫德雷德</nuxt-link
              >
            </td>
            <td class="tunitc4">騎士</td>
            <td class="tunitc6">遊俠</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Wolf_hero1.png" alt="" /><nuxt-link
                to="/units/hero/Ornlu_the_Wolf"
                >灰狼歐魯</nuxt-link
              >
            </td>
            <td class="tunitc4">動物</td>
            <td class="tunitc6">狼</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Crucible">統一各部</nuxt-link
              ><br /><nuxt-link to="/batt/La_Noche_Triste">悲痛之夜</nuxt-link
              ><br /><nuxt-link to="/batt/Vindlandsaga_1000"
                >芬特蘭撒格(1000)</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Burmese_Tigers"
                >餓虎撲食</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Triple_Alliance"
                >三城同盟</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Reynalddechatillonicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Reynald_de_Chatillon"
                >沙底隆的雷諾</nuxt-link
              >
            </td>
            <td class="tunitc4">騎士</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Lord_of_Arabia">阿拉伯君主</nuxt-link
              ><br /><nuxt-link to="/batt/The_Horns_of_Hattin"
                >哈丁角</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Richardthelionhearticon.png"
                alt=""
              /><nuxt-link to="/units/hero/Richard_the_Lionheart"
                >獅心王查理</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">遊俠</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >
              <br /><nuxt-link to="/batt/The_Emperor_Sleeping"
                >沉睡的皇帝</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/LongbowmanIcon.png"
                alt=""
              /><nuxt-link to="/units/hero/Robin_Hood">羅賓漢</nuxt-link>
            </td>
            <td class="tunitc4">弓兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>
            </td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
                to="/units/hero/Roland"
                >羅蘭</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">騎士</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/PetardIcon.png" alt="" /><nuxt-link
                to="/units/hero/Saboteur"
                >破壞者</nuxt-link
              >
            </td>
            <td class="tunitc4">攻城武器</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/Pax_Mongolia">蒙古太平</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Shahicon.png" alt="" /><nuxt-link
                to="/units/hero/Shah"
                >沙赫</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/units/edmap/King">國王</nuxt-link>
            </td>
            <td class="tunitc6">國王</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Horde_Rides_West">策馬西征</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Sheriffofnottinghamicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Sheriff_of_Nottingham"
                >諾丁漢治安官</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
            </td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ChampionIcon.png" alt="" /><nuxt-link
                to="/units/hero/Siegfried"
                >齊格非</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">劍兵勇士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Final_Fortress">撒克遜起義</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Sieurbertrand.png"
                alt=""
              /><nuxt-link to="/units/hero/Sieur_Bertrand"
                >貝查德爵士</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">騎士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/An_Unlikely_Messiah"
                >橫空出世</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Sieurdemetz.png" alt="" /><nuxt-link
                to="/units/hero/Sieur_de_Metz"
                >梅茲爵士</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">騎士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/An_Unlikely_Messiah"
                >橫空出世</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Sirjohnfastolf.png"
                alt=""
              /><nuxt-link to="/units/hero/Sir_John_Fastolf"
                >約翰霍士道夫爵士</nuxt-link
              >
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">特殊</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                >掃蕩羅亞爾</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Subotaiicon.png" alt="" /><nuxt-link
                to="/units/hero/Subotai"
                >速不台</nuxt-link
              >
            </td>
            <td class="tunitc4">馬弓騎兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Horde_Rides_West">策馬西征</nuxt-link>
              <br /><nuxt-link to="/batt/The_Promise">臨終夙願</nuxt-link
              ><br /><nuxt-link to="/batt/Pax_Mongolia">蒙古太平</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Tamerlaneicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link>
            </td>
            <td class="tunitc4">馬弓騎兵</td>
            <td class="tunitc6">蒙古突騎</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Constablerichemonticon.png"
                alt=""
              /><nuxt-link to="/units/hero/The_Black_Prince">黑親王</nuxt-link>
            </td>
            <td class="tunitc4">騎兵</td>
            <td class="tunitc6">騎兵。</td>
            <td class="tunitc6">無</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Theodericthegothicon.png"
                alt=""
              /><nuxt-link to="/units/hero/Theodoric_the_Goth"
                >哥德人狄奧多利克</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>
            </td>
            <td class="tunitc6">
              <nuxt-link to="/batt/All_Roads_Lead_to_a_Besieged_City"
                >條條大路通圍城</nuxt-link
              >
              <br /><nuxt-link to="/batt/Legionaries_on_the_Horizon"
                >羅馬軍團隨時殺到</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Willi.png" alt="" /><nuxt-link
                to="/units/hero/William_Wallace"
                >威廉華勒斯</nuxt-link
              >
            </td>
            <td class="tunitc4">步兵</td>
            <td class="tunitc6">劍兵勇士</td>
            <td class="tunitc6">
              <nuxt-link to="/batt/The_Battle_of_Falkirk">福爾克之役</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="row">
          <div class="col-md-12">
            <h3>征服者入侵</h3>
            <div class="hrn1"></div>
            <table class="table-bordered" width="100%">
              <tr>
                <td class="tunitcc" style="width: 20%;">名稱</td>
                <td class="tunitcc" style="width: 15%;">類型</td>
                <td class="tunitcc" style="width: 15%;">外貌</td>
                <td class="tunitcc" style="width: 55%;">登場戰役</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Admiral_Yi_Sun_Shin.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Admiral_Yi_Sun_Shin"
                    >李舜臣將軍</nuxt-link
                  >
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link>
                </td>
                <td class="tunitc6">
                  <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
                </td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Noryang_Point_1598"
                    >洛陽點（1598）</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Hero_2_Icon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Alexander_Nevski"
                    >亞歷山大·涅夫斯基</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">騎兵</td>
                <td class="tunitc6">無</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Attila_the_Hun.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Attila_the_Hun"
                    >匈奴王阿提拉</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">拜占庭聖騎兵</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link
                  ><br /><nuxt-link to="/batt/Fall_of_Rome"
                    >羅馬的衰落</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/BledaIcon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Bleda_the_Hun"
                    >匈奴王貝里達</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">蒙古突騎</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Elcidicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/El_Cid"
                    >羅德里高·迪亞茲·熙德</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">蒙古突騎</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Tabinshwehtiicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Tabinshwehti"
                    >德彬瑞蒂</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">特殊</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Brother_against_Brother"
                    >兄弟鬩牆</nuxt-link
                  >
                  <br /><nuxt-link to="/batt/The_Enemy_of_my_Enemy"
                    >我敵人的敵人</nuxt-link
                  >
                  <br /><nuxt-link to="/batt/Black_Guards">黑衛隊</nuxt-link
                  ><br /><nuxt-link to="/batt/King_of_Valencia"
                    >瓦倫西亞之主</nuxt-link
                  >
                  <br /><nuxt-link to="/batt/Reconquista">勘查</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Elcidicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Harald_Hardraade"
                    >哈囉德哈左德</nuxt-link
                  >
                </td>
                <td class="tunitc4">步兵</td>
                <td class="tunitc6">狂戰士</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Hastings_1066"
                    >哈斯汀斯（1066）</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/HenryvIcon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Henry_V">亨利五世</nuxt-link>
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">遊俠</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Agincourt_1415"
                    >亞琴哥特（1415）</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img class="gg" src="~assets/ImamIcon.png" alt="" /><nuxt-link
                    to="/units/hero/Imam"
                    >伊滿</nuxt-link
                  >
                </td>
                <td class="tunitc4">僧侶</td>
                <td class="tunitc6">特殊</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/The_Enemy_of_my_Enemy"
                    >我敵人的敵人</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Kingalfonsoicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/King_Alfonso"
                    >阿方索國王</nuxt-link
                  >
                </td>
                <td class="tunitc4">國王</td>
                <td class="tunitc6">國王</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Brother_against_Brother"
                    >兄弟鬩牆</nuxt-link
                  >
                  <br /><nuxt-link to="/batt/Black_Guards">黑衛隊</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Kingsanchoicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/King_Sancho">桑喬國王</nuxt-link>
                </td>
                <td class="tunitc4">國王</td>
                <td class="tunitc6">國王</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Brother_against_Brother"
                    >兄弟鬩牆</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Minamotoicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Nobunaga">織田信長</nuxt-link>
                </td>
                <td class="tunitc4">步兵</td>
                <td class="tunitc6">日本武士</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Kyoto_1582">京都（1582）</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/PopeleoIcon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Pope_Leo_I"
                    >教宗利奧一世</nuxt-link
                  >
                </td>
                <td class="tunitc4">僧侶</td>
                <td class="tunitc6">僧侶</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Fall_of_Rome">羅馬的衰落</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/LightCavalryIcon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Scythian_Scout"
                    >斯基泰斥候</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">
                  <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
                </td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Bukhara_557">布哈拉（557）</nuxt-link
                  ><br /><nuxt-link to="/batt/Djeriba_Gold"
                    >傑爾巴島的黃金</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Scythianwildwomanicon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/Scythian_Wild_Woman"
                    >斯基泰的野女人</nuxt-link
                  >
                </td>
                <td class="tunitc4">步兵</td>
                <td class="tunitc6">特殊</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/The_Great_Ride">偉大的騎士</nuxt-link
                  ><br /><nuxt-link to="/batt/The_White_Elephant"
                    >白象化身</nuxt-link
                  >
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    class="gg"
                    src="~assets/Williamtheconqueroricon.png"
                    alt=""
                  /><nuxt-link to="/units/hero/William_the_Conqueror"
                    >征服者威廉</nuxt-link
                  >
                </td>
                <td class="tunitc4">騎兵</td>
                <td class="tunitc6">特殊</td>
                <td class="tunitc6">
                  <nuxt-link to="/batt/Hastings_1066"
                    >哈斯汀斯（1066）</nuxt-link
                  >
                </td>
              </tr>
            </table>

            <div class="row">
              <div class="col-md-12">
                <h3>失落的帝國</h3>
                <div class="hrn1"></div>
                <table class="table-bordered" width="100%">
                  <tr>
                    <td class="tunitcc" style="width: 20%;">名稱</td>
                    <td class="tunitcc" style="width: 15%;">類型</td>
                    <td class="tunitcc" style="width: 15%;">外貌</td>
                    <td class="tunitcc" style="width: 55%;">登場戰役</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Chandbhaiicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Chand_Bhai"
                        >金德·伯勒達伊</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">僧侶</td>
                    <td class="tunitc6">特殊</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/A_Promising_Warrior"
                        >英雄出少年</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Cuauhtemocicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Cuauhtemoc"
                        >庫奧赫特莫克</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">步兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Elite_Eagle_Warrior"
                        >精銳鷹勇士</nuxt-link
                      >
                    </td>
                    <td class="tunitc6">無</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Francescosforzaicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Francesco_Sforza"
                        >法蘭切斯科·斯福爾札</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">步兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/An_End_and_a_Beginning"
                        >始兮終兮</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/O_Fortuna">命運女神</nuxt-link
                      ><br /><nuxt-link to="/batt/The_Hand_of_a_Daughter"
                        >于歸之喜</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Ambrosian_Republic"
                        >安布羅共和國</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/A_New_Duk_of_Milan"
                        >米蘭新公爵</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Franciscodeorellanaicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Francisco_de_Orellana"
                        >法蘭切斯科·德·奧雷亞納</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">
                      <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
                      >、騎兵
                    </td>
                    <td class="tunitc6">西班牙征服者</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/Tales_of_La_Canela"
                        >黃金國的傳說</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Split">分離告別</nuxt-link
                      ><br /><nuxt-link to="/batt/The_Amazones"
                        >亞馬遜族</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Cannibals"
                        >食人族</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Frederickbarbarossaicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Fredrick_Barbarossa"
                        >腓特烈一世</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">步兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Teutonic_Knight"
                        >條頓武士</nuxt-link
                      >
                    </td>
                    <td class="tunitc6">無</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Gonzalopizarroicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Gonzalo_Pizarro"
                        >岡薩洛·皮薩羅</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">火藥單位、騎兵</td>
                    <td class="tunitc6">西班牙征服者</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/The_Split">分離告別</nuxt-link>
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Jarlicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Jarl">雅爾</nuxt-link>
                    </td>
                    <td class="tunitc4">騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/York_865">約克（865）</nuxt-link
                      ><br /><nuxt-link to="/batt/Honfoglalas_895"
                        >征服家園（895）</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Khosrauicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Khosrau">霍斯勞</nuxt-link>
                    </td>
                    <td class="tunitc4">馬弓騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Elephant_Archer"
                        >象弓騎兵</nuxt-link
                      >
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/Bapheus_1302"
                        >巴菲烏斯(1302)</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Osmanicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Osman">奧斯曼</nuxt-link>
                    </td>
                    <td class="tunitc4">馬弓騎兵</td>
                    <td class="tunitc6">重裝馬弓騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/Bapheus_1302"
                        >巴菲烏斯(1302)</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Prithviicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Prithvi">布里斯比</nuxt-link>
                    </td>
                    <td class="tunitc4">弓兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/A_Promising_Warrior"
                        >英雄出少年</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Prithviicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Prithviraj"
                        >布里斯比羅吉</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">馬弓騎兵</td>
                    <td class="tunitc6">重裝馬弓騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/A_Promising_Warrior"
                        >英雄出少年</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Digvijaya"
                        >逐鹿迪格維傑之地</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/Battles_of_Tarain"
                        >塔蘭村之戰</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Queenicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Queen">皇后</nuxt-link>
                    </td>
                    <td class="tunitc4">村民</td>
                    <td class="tunitc6">特殊</td>
                    <td class="tunitc6">無</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Saladinicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Saladin">薩拉丁</nuxt-link>
                    </td>
                    <td class="tunitc4">騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>
                    </td>
                    <td class="tunitc6">無</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Sanyogitaicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Sanyogita"
                        >姍優姬妲</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">村民</td>
                    <td class="tunitc6">特殊</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/The_Elopement">私奔</nuxt-link>
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Savaranicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Savaran">貴族首領</nuxt-link>
                    </td>
                    <td class="tunitc4">騎兵</td>
                    <td class="tunitc6">拜占庭聖騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/Bukhara_557"
                        >布哈拉（557）</nuxt-link
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img
                        class="gg"
                        src="~assets/Vladdraculaicon.png"
                        alt=""
                      /><nuxt-link to="/units/hero/Vlad_Dracula"
                        >佛列德-德古拉</nuxt-link
                      >
                    </td>
                    <td class="tunitc4">騎兵</td>
                    <td class="tunitc6">
                      <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>
                    </td>
                    <td class="tunitc6">
                      <nuxt-link to="/batt/The_Dragon_Spreads_His_Wings"
                        >火龍展翅</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Return_of_the_Dragon"
                        >龍之歸來</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Breath_of_the_Dragon"
                        >龍之喘息</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Moon_Rises"
                        >撥雲見月</nuxt-link
                      >
                      <br /><nuxt-link to="/batt/The_Night_Falls"
                        >暗夜降臨</nuxt-link
                      >
                    </td>
                  </tr>
                </table>

                <div class="row">
                  <div class="col-md-12">
                    <h3>非洲王國</h3>
                    <div class="hrn1"></div>
                    <table class="table-bordered" width="100%">
                      <tr>
                        <td class="tunitcc" style="width: 20%;">名稱</td>
                        <td class="tunitcc" style="width: 15%;">類型</td>
                        <td class="tunitcc" style="width: 15%;">外貌</td>
                        <td class="tunitcc" style="width: 55%;">登場戰役</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/WarElephantIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Abraha_Elephant"
                            >阿伯哈拉戰象</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/War_Elephant">戰象</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/ImperialCamelIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Babur">巴卑爾</nuxt-link>
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Imperial_Camel"
                            >帝王駱駝騎兵</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Dagnajanicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Dagnajan"
                            >達納罕</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">馬弓騎兵</td>
                        <td class="tunitc6">特殊</td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/A_Fallen_Crown"
                            >摔落的皇冠</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Envoyicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Envoy">使者</nuxt-link>
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">輕騎兵</td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Gidajanicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Gidajan"
                            >極大汗</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">特殊</td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/Welcome_Home"
                            >重回故里</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/New_Genoese_Crossbowman.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Guglielmo_Embriaco"
                            >吉列爾莫·安布裡科</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Genoese_Crossbowman"
                            >熱那亞弩手</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/2HandedswordsmanIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Henry_II"
                            >亨利二世</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Two-Handed_Swordsman"
                            >雙手劍兵</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Slingericon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Huayan_Capac"
                            >華伊納·卡派克</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">弓兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Slinger">投石手</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/JaguarWarriorIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Itzcoatl"
                            >伊茲柯阿特爾</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Jaguar_Warrior"
                            >豹勇士</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/SpearmanIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Little_John"
                            >小約翰</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Magyar_Huszar_icon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Miklos_Toldi"
                            >米克羅斯·陶笛</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">馬扎爾驃騎兵</td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Musaibnnusayricon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Musa_ibn_Nusayr"
                            >穆薩·伊本·奴薩爾</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">馬弓騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Camel_Archer"
                            >駱駝弓騎兵</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/Consolidation_and_Subjugation"
                            >攻城拔寨</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/JanissaryIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Mustafa_Pasha"
                            >穆斯塔法帕夏</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">火藥單位</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Janissary"
                            >土耳其火槍兵</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/PlumedArcherIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Pacal_II"
                            >巴加爾二世</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">弓兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Plumed_Archer"
                            >羽毛箭射手</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Kamayuk_Icon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Pachacuti"
                            >帕查庫特克</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Yoditicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Princess_Yodit"
                            >優娣忒公主</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">村民</td>
                        <td class="tunitc6">特殊</td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/Path_of_Exile"
                            >流亡之路</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Richarddeclareicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Richard_de_Clare"
                            >克雷爾的理查伯爵</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">輕騎兵</td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/ChuKoNuIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Su_Dingfang"
                            >蘇定方</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">弓兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Sumanguruicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Sumanguru"
                            >蘇曼古魯</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">拜占庭聖騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/The_Lions_Den"
                            >深入虎穴</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Sundjataicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Sundjata"
                            >松迪亞塔</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">輕騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/Hunted">擒獲</nuxt-link>
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Tariqibnziyadicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Tariq_ibn_Ziyad"
                            >塔里克·伊本·齊亞德</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">馬弓騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
                        </td>
                        <td class="tunitc6">
                          <nuxt-link to="/batt/The_Battle_of_Guadalete"
                            >瓜達萊特之戰</nuxt-link
                          >
                          <br /><nuxt-link
                            to="/batt/Consolidation_and_Subjugation"
                            >攻城拔寨</nuxt-link
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Magyar_Huszar_icon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Tristan"
                            >崔斯坦</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">馬扎爾驃騎兵</td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Yekunoamlakicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Yekuno_Amlak"
                            >亞庫諾-阿姆拉克</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Shotel_Warrior"
                            >彎刀勇士</nuxt-link
                          >
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/Yoditicon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Yodit">優娣忒</nuxt-link>
                        </td>
                        <td class="tunitc4">步兵</td>
                        <td class="tunitc6">飛鏢女獵手</td>
                        <td class="tunitc6">無</td>
                      </tr>
                      <tr>
                        <td class="tunitc6">
                          <img
                            class="gg"
                            src="~assets/HussarIcon.png"
                            alt=""
                          /><nuxt-link to="/units/hero/Zawisza_the_Black"
                            >茲瓦斯艾黑騎士</nuxt-link
                          >
                        </td>
                        <td class="tunitc4">騎兵</td>
                        <td class="tunitc6">
                          <nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
                        </td>
                        <td class="tunitc6">無</td>
                      </tr>
                    </table>

                    <div class="row">
                      <div class="col-md-12">
                        <h3>王者崛起</h3>
                        <div class="hrn1"></div>
                        <table class="table-bordered" width="100%">
                          <tr>
                            <td class="tunitcc" style="width: 20%;">名稱</td>
                            <td class="tunitcc" style="width: 15%;">類型</td>
                            <td class="tunitcc" style="width: 15%;">外貌</td>
                            <td class="tunitcc" style="width: 55%;">
                              登場戰役
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Bayinnaungicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Bayinnaung"
                                >勃印曩</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">騎兵</td>
                            <td class="tunitc6">
                              <nuxt-link to="/units/Elite_Battle_Elephant"
                                >精銳矛象伕</nuxt-link
                              >
                            </td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/The_Burmese_Tigers"
                                >餓虎撲食</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Mandalay_Cobra"
                                >猛蛇出洞</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Royal_Peacock"
                                >百鳥朝鳳</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_White_Elephant"
                                >白象化身</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Old_Tiger"
                                >鳳凰涅槃</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Buibiicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Bui_Bi"
                                >裴備</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">僧侶</td>
                            <td class="tunitc6">特殊</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Dinhleicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Dinh_Le"
                                >丁禮</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">騎兵</td>
                            <td class="tunitc6">遊俠</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Gajahmadaicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Gajah_Mada"
                                >加查·馬達</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">特殊</td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/Unconditional_Loyalty"
                                >班師勤王</nuxt-link
                              >
                              <br /><nuxt-link
                                to="/batt/The_Pasunda_Bubat_Tragedy"
                                >風雲變色</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/KingC.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Jayanegara"
                                >賈亞納加拉</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">國王</td>
                            <td class="tunitc6">國王</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Jayaviravarmanicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Jayaviravarman"
                                >闍耶羅跋摩</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">
                              <nuxt-link to="/units/Karambit_Warrior"
                                >爪刀勇士</nuxt-link
                              >
                            </td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Lelaiicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Le_Lai"
                                >黎來</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">雙手劍兵</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Lelaiicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Le_Lai"
                                >黎來</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">劍兵勇士</td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/The_Mountain_Siege"
                                >至靈山魂</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Leloiicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Le_Loi"
                                >黎利</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">劍兵勇士</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Letrienicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Le_Trien"
                                >李篆</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">劍兵勇士</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Luunhanchuicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Luu_Nhan_Chu"
                                >劉仁澍</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">弓兵</td>
                            <td class="tunitc6">強弩兵。</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Radenwijayaicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Raden_Wijaya"
                                >羅登·韋查耶</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">馬弓騎兵</td>
                            <td class="tunitc6">象弓騎兵</td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/The_Story_of_our_Founders"
                                >開疆闢土</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Sundaroyalfightericon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Sunda_Royal_Fighter"
                                >巽他皇家侍衛</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">步兵</td>
                            <td class="tunitc6">特殊</td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/The_Pasunda_Bubat_Tragedy"
                                >風雲變色</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Burmese_Tigers"
                                >餓虎撲食</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Mandalay_Cobra"
                                >猛蛇出洞</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_White_Elephant"
                                >白象化身</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Suryavarmaniicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Suryavarman_I"
                                >蘇利耶跋摩一世</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">騎兵</td>
                            <td class="tunitc6">精銳矛象伕</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Tabinshwehtiicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Tabinshwehti"
                                >德彬瑞蒂</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">馬弓騎兵</td>
                            <td class="tunitc6">象弓騎兵。</td>
                            <td class="tunitc6">
                              <nuxt-link to="/batt/The_Burmese_Tigers"
                                >餓虎撲食</nuxt-link
                              >
                              <br /><nuxt-link to="/batt/The_Mandalay_Cobra"
                                >猛蛇出洞</nuxt-link
                              >
                            </td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Udayadityavarmaniicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Udayadityavarman_I"
                                >優陀耶迭多跋摩一世</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">國王</td>
                            <td class="tunitc6">國王</td>
                            <td class="tunitc6">無</td>
                          </tr>
                          <tr>
                            <td class="tunitc6">
                              <img
                                class="gg"
                                src="~assets/Wangtongicon.png"
                                alt=""
                              /><nuxt-link to="/units/hero/Wang_Tong"
                                >王通</nuxt-link
                              >
                            </td>
                            <td class="tunitc4">騎兵</td>
                            <td class="tunitc6">拜占庭聖騎兵</td>
                            <td class="tunitc6">無</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <hr />
                  </div>
                </div>
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
  head() {
    return {
      title: '英雄 - Aoetw'
    }
  },
  layout: 'foot',
  components: {}
}
</script>
<style></style>
