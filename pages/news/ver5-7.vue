<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>HD Patch 5.7改版資訊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>5.7改版</b
            >於2018年1月25日正式上線，除了一些遊戲優化外，還大幅修正了一些遊戲平衡，過去一些太於強勢的兵種如<nuxt-link
              to="/units/Camel_Archer"
              >駱駝弓騎兵</nuxt-link
            >、<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>、<nuxt-link
              to="/units/Condottiero"
              >傭兵</nuxt-link
            >與<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >等都削弱了不少。
          </p>
          <p>
            <a
              href="https://forum.gamer.com.tw/C.php?bsn=1122&snA=14418&tnum=1"
              target="_blank"
              >資料來源</a
            >
          </p>
        </div>
        <h3>改版內容</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h4><strong>單位平衡</strong></h4>
          削弱
          <ul>
            <li>
              <img
                src="~assets/CondottieroIcon.png"
                class="gg"
                alt=""
              />傭兵將擁有獨特裝甲，將只會減少 火槍單位的反<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >傷害，不包含其他的反步兵傷害
            </li>
            <li>
              <img
                src="~assets/CondottieroIcon.png"
                class="gg"
                alt=""
              />傭兵減少1穿刺裝甲(原始 1)
            </li>
            <li>
              <img
                src="~assets/CondottieroIcon.png"
                class="gg"
                alt=""
              />傭兵減少1<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >(原始 10)
            </li>
            <li>
              <img
                src="~assets/EliteBattleElephantIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Elite_Battle_Elephant"
                >精銳矛象伕</nuxt-link
              >升級花費從 800F 500G 提升至 1200F 900G
            </li>
            <li>
              <img
                src="~assets/EliteBattleElephantIcon.png"
                class="gg"
                alt=""
              />精銳矛象伕升級時間從 80秒 提升至 100秒
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">精銳爪刀勇士</nuxt-link
              >減少 1攻擊力(原始 8)
            </li>
            <li>
              <img
                src="~assets/EliteBattleElephantIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
              >(包含精銳)攻擊波及範圍從 0.5 變成 0.4
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              />駱駝弓騎兵(包含精銳)<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >減少 5 (60/65>55/60)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              />駱駝弓騎兵(包含精銳) -2裝甲 vs.<nuxt-link to="/units/Camel"
                >駱駝</nuxt-link
              >
              (2 變成 0)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              />駱駝弓騎兵(包含精銳) -2裝甲 vs.<nuxt-link
                to="/armor/Armor_Class_Cavalry_Archer"
                >反馬弓騎兵</nuxt-link
              >傷害 (2 變成0)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              />駱駝弓騎兵(包含精銳) -2 攻擊 vs.<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >
              (2 變成0)
            </li>
            <li>
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Howdah"
                >象轎</nuxt-link
              >從200F 300W，提升至400F 300W
            </li>
            <li>
              <img src="~assets/unique_tech.png" class="gg" alt="" />象轎+1/+2
              裝甲變成 +1/+1
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Arambaiicon.png"
                alt=""
              />飛鏢騎兵(包含精銳)速度從 1.35 下降至 1.3
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Arambaiicon.png"
                alt=""
              />飛鏢騎兵(包含精銳)攻擊 -1
            </li>
            <li>
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >精銳飛鏢騎兵</nuxt-link
              >
              -2 裝甲 Vs. 反馬弓騎兵傷害 (2 降至 0)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.png"
                alt=""
              /><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link
              >訓練時間從 32秒提升至 35秒
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.png"
                alt=""
              />精銳鷹勇士移動速度從 1.2 下降至 1.15
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CamelIcon.png"
                alt=""
              />反駱駝傷害將增加給所有反<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >(除了駱駝)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/gold_shaft_mining.png"
                alt=""
              /><nuxt-link to="/civs/Malians">馬利</nuxt-link>失去<nuxt-link
                to="/techs/Gold_Shaft_Mining"
                >礦井採金</nuxt-link
              >
            </li>
          </ul>
          增強
          <ul>
            <li>
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Chatras"
                >恰特拉傘</nuxt-link
              >從 +30HP提升至 +50HP
            </li>
            <li>
              <img
                width="22px"
                src="~assets/farm.png"
                alt=""
                class="gg"
              /><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>的<nuxt-link
                to="/building/Farm"
                >農田</nuxt-link
              >優勢現在會正確的運作在<nuxt-link to="/techs/Hand_Cart"
                >手推車</nuxt-link
              >與輪軸技術研發後
            </li>
            <li>
              <img
                src="~assets/EliteBattleElephantIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Malay">馬來</nuxt-link>矛象伕從 25%
              便宜提升至 30%
            </li>
            <li>
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link
              >增加了<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >與<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >投<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>度 從 0
              增至 0.2
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.png" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴砲</nuxt-link
              >增加 +1 散射傷害(從1 增至 2)
            </li>
          </ul>
        </div>
        <div class="hrn1"></div>
        <div class="n1">
          <h4><strong>其他修正</strong></h4>
          <ul>
            <li>強化了重播章節使其不再不同步</li>
            <li>可見度設定不再導致不同步</li>
            <li>在大廳密碼輸入 ESC/Enter 會正確運作</li>
            <li>雙人合作(Coop)現在會正確顯示在遊戲以及遊戲畫面</li>
            <li>雙人合作現在會正確地在第一次運作</li>
            <li>還原遊戲與存檔列表現在會正確顯示 DLC 需求圖示</li>
            <li>語音檔案設定會正確的存入玩家檔案</li>
            <li>一些文本裁切問題解決</li>
            <li>玩家現在應該無法再加入假房間</li>
            <li>玩家現在加入錯誤房間會正確的顯示連線逾時</li>
            <li>玩家現在即使加入大廳選擇得太快也可以正確地取消加入</li>
            <li>
              大廳無法再因為玩家觀看<nuxt-link to="/tree/vie">科技樹</nuxt-link
              >並且剔除他導致閃退
            </li>
            <li>大廳現在會記得隊伍隨機選項</li>
            <li>大廳設定現在不會再關閉 DLC 後出錯</li>
            <li>大廳名字現在字體正確</li>
            <li>大廳按鈕音效現在會在改變名字正確發音</li>
            <li>大廳重新設定按鈕現在會在按下後發出聲音</li>
            <li>大廳資料集圖示在加載其他設定後保持正確圖示</li>
            <li>大廳瀏覽器自訂劇情設定現在加入至遊戲類型過濾器</li>
            <li>大廳瀏覽器地區設定現在在頂部有選項</li>
            <li>大廳瀏覽器地區設定現在不會再因為重新設定導致消失</li>
            <li>大廳瀏覽器的勝利標準過濾器現在正常運作</li>
            <li>使用 Mod 並開啟一場遊戲不會再導致罕見閃退</li>
            <li>遭受攻擊的文字通知將會擁有音效</li>
            <li>
              <nuxt-link to="/units/Villager">村民</nuxt-link
              >現在可更頻繁的引動物去<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >
            </li>
            <li>
              貿易車現在不再因為按下停止快捷鍵導致身上持有<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >遺失
            </li>
            <li>鎖定隊伍將會正確在單人遊戲關閉對敵人的進貢功能</li>
            <li>
              <nuxt-link to="/elements/Garrison">駐軍</nuxt-link
              >UI按鈕將會正確尺寸顯示
            </li>
            <li>建築不適當的地點將會有條約警告</li>
            <li>科技樹將會在F2開啟後正確關閉</li>
            <li><nuxt-link to="/batt">戰役</nuxt-link>的任務視窗不會太短</li>
            <li>戰役的開場音效並不會因為使用 ALT TAB 導致不協調</li>
            <li>戰役 征服家園 現在正確顯示任務</li>
            <li>
              戰役 雙柱城記 將不會在第一個任務失去<nuxt-link to="/building/Gate"
                >城門</nuxt-link
              >
            </li>
            <li>
              戰役<nuxt-link to="/batt/Draculaa">德古拉</nuxt-link
              >第四關與第五關擁有正確敵人顏色
            </li>
            <li>戰役 巴菲普斯 不會再殺死 Metin 首領而改變外交關係</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allwide',
  components: {}
}
</script>
<style></style>
