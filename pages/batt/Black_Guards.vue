<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>黑衛隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>黑衛隊</b>是<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
            >版本，<nuxt-link to="/batt/El_Cida">熙德戰役</nuxt-link
            >中的第四個場景。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                275<nuxt-link to="/resource/Food">食物</nuxt-link
                >／200<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ffd700;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/units/hero/King_Alfonso">阿方索國王</nuxt-link
                >的軍隊
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家3
              </td>
              <td class="tc6">
                黑衛隊軍隊（藍綠色）<nuxt-link to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >
              </td>
              <td class="tc6">
                <div class="p3"></div>
                玩家4
              </td>
              <td class="tc6">約索夫（綠色）薩拉森</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6">黑衛隊海軍（黃色）薩拉森</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/hero/El_Cid">熙德</nuxt-link>（<nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >）、<nuxt-link to="/units/Knight">騎士</nuxt-link>x6、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >x6、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >x4、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >x4、<nuxt-link to="/units/Monk">僧侶</nuxt-link>x2、<nuxt-link
                to="/units/Scorpion"
                >弩砲</nuxt-link
              >x2。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>阿方索國王。</dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>熙德必須活著。</li>
              <li>阿方索國王必須存活。</li>
              <li>跟著這個騎士，以解救阿方索國王。</li>
              <li>破壞6個黑衛隊的港口。</li>
              <li>護送阿方索國王到他在西邊的陣地。</li>
            </ol>
          </div>
          <h3>次要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>把熙德帶給清真寺的黑衛隊。</li>
              <li>
                把清真寺的黑衛隊<nuxt-link to="/elements/Conversion"
                  >招降</nuxt-link
                >過來，以協助打敗約索夫和黑衛隊。
              </li>
              <li>
                派出僧侶到先前屬於黑衛隊的清真寺，去觀摩和學習。（<nuxt-link
                  to="/building/Monastery"
                  >修道院</nuxt-link
                >科技定時免費研發完成）
              </li>
              <li>
                破壞黑衛隊海軍的<nuxt-link to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >，以阻止他們的支援到達。
              </li>
            </ul>
            <h3>任務提示</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>盡快解救阿方索國王。</li>
                <li>
                  大海可以是一個重要的戰場，也可以是一個很理想的食物來源。只要在你的戰略當中包括了海軍的話，就會事半功倍。
                </li>
              </ul>
            </div>
            <h3>斥候</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>熙德的軍隊（紅色）會跟阿方索國王的軍隊（藍色）結盟。</li>
                <li>
                  這裡有三個敵人，黑衛陸軍、黑衛海軍、和約瑟夫精銳衛隊。兩個陸軍都由<nuxt-link
                    to="/units/Camel_Rider"
                    >駱駝</nuxt-link
                  >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
                  >組成、海軍主要是<nuxt-link to="/units/War_Galley"
                    >槳帆戰船</nuxt-link
                  >和<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>。
                </li>
                <li>
                  三個敵人都有<nuxt-link to="/building/Stone_Wall"
                    >城牆</nuxt-link
                  >和防禦建築，用巨型<nuxt-link to="/units/Mangonel"
                    >投石車</nuxt-link
                  >或者<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
                  >對付他們，最後，你也需要建立一支海軍。你可以在已經被征服的土地上，或城市之間的無人地帶，建造你的港口。
                </li>
              </ul>
            </div>
            <h3>攻略</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                由於對方有許多<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >、<nuxt-link to="/building/Castle">城堡</nuxt-link
                >等防禦建築，所以需要好好經營自己的經濟，需要<nuxt-link
                  to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >科技。
              </li>
              <li>
                當經濟科技有一定基礎後，建議可以先打右下約瑟夫（綠色），他們防禦建築相對比較少，可以用衝撞車搭配巨型投石機攻擊。
              </li>
              <li>
                當佔領約瑟夫右下領地後，可以直接在那建造<nuxt-link
                  to="/building/Dock"
                  >碼頭</nuxt-link
                >來建立自己的海軍。
              </li>
              <li>
                之後陸地部隊可以開始轉向防守自己碼頭，在組建海軍時用來掩護陸地敵方的騷擾。
              </li>
              <li>海軍組建完成後，可以開始針對 敵方6個碼頭進行攻擊。</li>
              <li>
                海軍攻擊時，要特別注意敵方的城堡、箭塔，建議可以用<nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >遠程攻擊。
              </li>
            </ul>
            <h3>遊戲內細節</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                一開始救走阿方索國王後，可以直奔地圖左上10點鐘方向，躲進去城堡裡面。
              </li>
              <li>
                之後開始發展經濟同時，開始組建攻城器具，以<nuxt-link
                  to="/units/Archer_Units"
                  >遠程</nuxt-link
                >巨型投石機、衝撞車為主即可。
              </li>
              <li>
                針對約瑟夫右下的營區進行攻城，主要是打掉城堡剩下就好處理了。
              </li>
              <li>占領後開始建造碼頭組建海軍，陸軍轉為防守即可。</li>
              <li>
                海軍可以以火砲戰船搭配少量戰艦、或者如果知道敵方碼頭位子可以用大量<nuxt-link
                  to="/units/Demolition_Ship"
                  >爆破船</nuxt-link
                >直接撞碼頭。
              </li>
              <li>
                另外影片打法是可行的但招降運輸船那可能會比較困難一點，如果萬一失敗漂走就用一般打法過關。
              </li>
            </ul>
            <h3>快速破關</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                <a
                  href="https://www.youtube.com/watch?v=jOltoEC0kAw&t=8s"
                  target="_blank"
                  >此影片是快速通關打法，可以根據個人遊戲體驗斟酌使用。</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                黑衛隊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/EIC 4.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/El_Cida">熙德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Exile_of_the_Cid"
                >熙德的流亡歲月</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/King_of_Valencia">瓦倫西亞之主</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由Wun、裕暉協助編輯。</div>
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
