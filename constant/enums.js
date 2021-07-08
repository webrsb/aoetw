export const Type = {
  Building: 'buildings',
  Tech: 'techs',
  Unit: 'units'
}

export const Resource = {
  Gold: '黃金',
  Wood: '木材',
  Food: '食物',
  Stone: '石料'
}

export const ArmourClass = {
  0: { name: 'Unused', page: '', zh: '' },
  1: { name: 'Infantry', page: '/armor/Armor_Class_Infantry', zh: '步兵' },
  2: {
    name: 'Turtle Ships',
    page: '/armor/Armor_Class_Turtle_Ship',
    zh: '龜甲船'
  },
  3: { name: 'Base Pierce', page: '', zh: '遠程' },
  4: { name: 'Base Melee', page: '', zh: '近戰' },
  5: {
    name: 'War Elephants',
    page: '/armor/Armor_Class_Gunpowder_Unit',
    zh: '戰象'
  },
  6: { name: 'Unused', page: '', zh: '' },
  7: { name: 'Unused', page: '', zh: '' },
  8: { name: 'Cavalry', page: '/armor/Armor_Class_Cavalry', zh: '騎兵' },
  9: { name: 'Unused', page: '', zh: '' },
  10: { name: 'Unused', page: '', zh: '' },
  11: { name: 'All Buildings', page: '', zh: '所有建築' },
  12: { name: 'Unused', page: '', zh: '' },
  13: {
    name: 'Stone Defense',
    page: '/armor/Armor_Class_stone_defense',
    zh: '石頭建築'
  },
  14: { name: 'FE Predator Animals', page: '', zh: '' },
  15: { name: 'Archers', page: '/armor/Armor_Class_Archer', zh: '射手' },
  16: {
    name: 'Ships & Camels & Saboteurs',
    page: '/armor/Armor_Class_Ship',
    zh: '船'
  },
  17: { name: 'Rams', page: '/armor/Armor_Class_Ram', zh: '衝撞車' },
  18: { name: 'Trees', page: '', zh: '樹' },
  19: {
    name: 'Unique Units',
    page: '/armor/Armor_Class_Unique_Unit',
    zh: '特殊單位'
  },
  20: {
    name: 'Siege Weapons',
    page: '/armor/Armor_Class_Siege_Weapon',
    zh: '攻城武器'
  },
  21: {
    name: 'Standard Buildings',
    page: '/armor/Armor_Class_Standard_Building',
    zh: '標準建築'
  },
  22: {
    name: 'Walls & Gates',
    page: '/armor/Armor_Class_wall_and_gate',
    zh: '牆與門'
  },
  23: { name: 'FE Gunpowder Units', page: '', zh: '' },
  24: { name: 'Boars', page: '', zh: '豬' },
  25: { name: 'Monks', page: '/armor/Armor_Class_Monk', zh: '僧侶' },
  26: { name: 'Castle', page: '/armor/Armor_Class_Castle', zh: '城堡' },
  27: { name: 'Spearmen', page: '/armor/Armor_Class_Spearman', zh: '槍兵' },
  28: {
    name: 'Cavalry Archers',
    page: '/armor/Armor_Class_Cavalry_Archer',
    zh: '馬弓騎兵'
  },
  29: {
    name: 'Eagle Warriors',
    page: '/armor/Armor_Class_Eagle_Warrior',
    zh: '鷹勇士'
  },
  30: { name: 'HD Camels', page: '/armor/Armor_Class_Camel', zh: '駱駝' },
  31: { name: 'Anti-Leitis', page: '', zh: '' },
  32: {
    name: 'Condottieros',
    page: '/armor/Armor_Class_Condottiero',
    zh: '傭兵'
  },
  33: { name: 'Organ Gun Damage', page: '', zh: '' },
  34: {
    name: 'Fishing Ships',
    page: '/armor/Armor_Class_Fishing_Ship',
    zh: '漁船'
  },
  35: { name: 'Mamelukes', page: '/armor/Armor_Class_Mameluke', zh: '奴隸兵' },
  36: { name: 'Heroes and Kings', page: '', zh: '英雄與國王' }
}

export const Age = {
  DarkAge: {
    ID: '104',
    zh: '黑暗時代',
    page: '/techs/age/Dark_Age',
    img: require('@/assets/dark_age.png')
  },
  FeudalAge: {
    ID: '101',
    zh: '封建時代',
    page: '/techs/age/Feudal_Age',
    img: require('@/assets/feudal_age.png')
  },
  CastleAge: {
    ID: '102',
    zh: '城堡時代',
    page: '/techs/age/Castle_Age',
    img: require('@/assets/castle_age.png')
  },
  ImperialAge: {
    ID: '103',
    zh: '帝王時代',
    page: '/techs/age/Imperial_Age',
    img: require('@/assets/imperial_age.png')
  }
}

const Gunpowder = {
  name: 'Gunpowder',
  zh: '火藥',
  page: '/units/Gunpowder_Unit'
}

const Cavalry = {
  name: 'Cavalry',
  zh: '騎兵',
  page: '/units/Cavalry_Units'
}

const Archer = {
  name: 'Archer',
  zh: '遠距離',
  page: '/units/Archer_Units'
}

export const UnitClass = {
  0: [Archer],
  6: [
    {
      name: 'Infantry',
      zh: '步兵',
      page: '/units/Infantry_Units'
    }
  ],
  12: [Cavalry],
  13: [
    {
      name: 'Siege',
      zh: '攻城器',
      page: '/units/Siege_Weapons'
    }
  ],
  22: [
    {
      name: 'Ship',
      zh: '海軍',
      page: '/units/Naval_Vessels'
    }
  ],
  44: [Gunpowder],
  23: [Cavalry], // Gunpowder Archer
  36: [Cavalry, Archer],
  59: [
    {
      name: 'King',
      zh: '國王',
      page: ''
    }
  ]
}

export const UnitType = {
  Gunpowder: {
    zh: '火藥',
    page: ''
  },
  Unique: {
    zh: '特殊',
    page: ''
  }
}

export const Unit = {
  BARRACKS: {
    ID: 12,
    img: require('@/assets/barracks.png'),
    page: '/buildings/Barracks'
  },
  DOCK: {
    ID: 45,
    img: require('@/assets/dock.png'),
    page: '/buildings/Dock'
  },
  SIEGE_WORKSHOP: {
    ID: 49,
    img: require('@/assets/siege_workshop.png'),
    page: '/buildings/Siege_Workshop'
  },
  FARM: {
    ID: 50,
    img: require('@/assets/farm.png'),
    page: '/buildings/Farm'
  },
  MILL: {
    ID: 68,
    img: require('@/assets/mill.png'),
    page: '/buildings/Mill'
  },
  HOUSE: {
    ID: 70,
    img: require('@/assets/house.png'),
    page: '/buildings/House'
  },
  PALISADE_WALL: {
    ID: 72,
    img: require('@/assets/palisade.png'),
    page: '/buildings/Palisade_Wall'
  },
  GATE: {
    ID: 78,
    img: require('@/assets/gate.png'),
    page: '/buildings/Gate'
  },
  WATCH_TOWER: {
    ID: 79,
    img: require('@/assets/tower.png'),
    page: '/buildings/Watch_Tower'
  },
  CASTLE: {
    ID: 82,
    img: require('@/assets/castle.png'),
    page: '/buildings/Castle'
  },
  MARKET: {
    ID: 84,
    img: require('@/assets/market.png'),
    page: '/buildings/Market'
  },
  ARCHERY_RANGE: {
    ID: 87,
    img: require('@/assets/Acheryrangeicon.png'),
    page: '/buildings/Archery_Range'
  },
  STABLE: {
    ID: 101,
    img: require('@/assets/stable.png'),
    page: '/buildings/Stable'
  },
  BLACKSMITH: {
    ID: 103,
    img: require('@/assets/blacksmith.png'),
    page: '/buildings/Blacksmith'
  },
  MONASTERY: {
    ID: 104,
    img: require('@/assets/monastery.png'),
    page: '/buildings/Monastery'
  },
  TOWN_CENTER: {
    ID: 109,
    img: require('@/assets/town_center.png'),
    page: '/buildings/Town_Center'
  },
  STONE_WALL: {
    ID: 117,
    img: require('@/assets/stone_wall.png'),
    page: '/buildings/Stone_Wall'
  },
  FORTIFIED_WALL: {
    ID: 155,
    img: require('@/assets/fortified_wall.png'),
    page: '/buildings/Fortified_Wall'
  },
  FISH_TRAP: {
    ID: 199,
    img: require('@/assets/fish_trap.png'),
    page: '/buildings/Fish_Trap'
  },
  UNIVERSITY: {
    ID: 209,
    img: require('@/assets/university.png'),
    page: '/buildings/University'
  },
  GUARD_TOWER: {
    ID: 234,
    img: require('@/assets/guard_tower.png'),
    page: '/buildings/Guard_Tower'
  },
  KEEP: {
    ID: 235,
    img: require('@/assets/keep.png'),
    page: '/buildings/Keep'
  },
  BOMBARD_TOWER: {
    ID: 236,
    img: require('@/assets/bombard_tower.png'),
    page: '/buildings/Bombard_Tower'
  },
  WONDER: {
    ID: 276,
    img: require('@/assets/wonder.png'),
    page: '/buildings/Wonder'
  },
  LUMBER_CAMP: {
    ID: 562,
    img: require('@/assets/lumber_camp.png'),
    page: '/buildings/Lumber_Camp'
  },
  MINING_CAMP: {
    ID: 584,
    img: require('@/assets/mining_camp.png'),
    page: '/buildings/Mining_Camp'
  },
  OUTPOST: {
    ID: 598,
    img: require('@/assets/outpost.png'),
    page: '/buildings/Outpost'
  },
  PALISADE_GATE: {
    ID: 790,
    img: require('@/assets/palisade_gate.png'),
    page: '/buildings/Palisade_Gate'
  },
  FEITORIA: {
    ID: 1021,
    img: require('@/assets/feitoria.png'),
    page: '/buildings/Feitoria'
  },
  KREPOST: {
    ID: 1251,
    img: require('@/assets/Kreposticon.png'),
    page: '/buildings/Krepost'
  },
  ARCHER: {
    ID: 4,
    img: require('@/assets/ArcherIcon.png'),
    page: '/units/Archer'
  },
  HAND_CANNONEER: {
    ID: 5,
    img: require('@/assets/HandCannoneerIcon.png'),
    page: '/units/Hand_Cannoneer'
  },
  ELITE_SKIRMISHER: {
    ID: 6,
    img: require('@/assets/EliteSkirmisherIcon.png'),
    page: '/units/Elite_Skirmisher'
  },
  SKIRMISHER: {
    ID: 7,
    img: require('@/assets/SkirmisherIcon.png'),
    page: '/units/Skirmisher'
  },
  LONGBOWMAN: {
    ID: 8,
    img: require('@/assets/LongbowmanIcon.png'),
    page: '/units/Longbowman'
  },
  MANGUDAI: {
    ID: 11,
    img: require('@/assets/MangudaiIcon.png'),
    page: '/units/Mangudai'
  },
  FISHING_SHIP: {
    ID: 13,
    img: require('@/assets/FishingShipIcon.png'),
    page: '/units/Fishing_Ship'
  },
  TRADE_COG: {
    ID: 17,
    img: require('@/assets/TradeCogIcon.png'),
    page: '/units/Trade_Cog'
  },
  WAR_GALLEY: {
    ID: 21,
    img: require('@/assets/WarGalley.png'),
    page: '/units/War_Galley'
  },
  CROSSBOWMAN: {
    ID: 24,
    img: require('@/assets/CrossbowmanIcon.png'),
    page: '/units/Crossbowman'
  },
  TEUTONIC_KNIGHT: {
    ID: 25,
    img: require('@/assets/Crusade_avatar.png'),
    page: '/units/Teutonic_Knight'
  },
  BATTERING_RAM: {
    ID: 35,
    img: require('@/assets/BatteringRamIcon.png'),
    page: '/units/Battering_Ram'
  },
  BOMBARD_CANNON: {
    ID: 36,
    img: require('@/assets/BombardCannonIcon.png'),
    page: '/units/Bombard_Cannon'
  },
  KNIGHT: {
    ID: 38,
    img: require('@/assets/KnightIcon.png'),
    page: '/units/Knight'
  },
  CAVALRY_ARCHER: {
    ID: 39,
    img: require('@/assets/CamelArcherIcon.png'),
    page: '/units/Cavalry_Archer'
  },
  CATAPHRACT: {
    ID: 40,
    img: require('@/assets/CataphractIcon.png'),
    page: '/units/Cataphract'
  },
  HUSKARL: {
    ID: 41,
    img: require('@/assets/HuskarlIcon.png'),
    page: '/units/Huskarl'
  },
  TREBUCHET: {
    ID: 42,
    img: require('@/assets/TrebuchetPackedIcon.png'),
    page: '/units/Trebuchet'
  },
  JANISSARY: {
    ID: 46,
    img: require('@/assets/JanissaryIcon.png'),
    page: '/units/Janissary'
  },
  CHU_KO_NU: {
    ID: 73,
    img: require('@/assets/ChuKoNuIcon.png'),
    page: '/units/Chu_Ko_Nu'
  },
  MILITIA: {
    ID: 74,
    img: require('@/assets/MilitiaIcon.png'),
    page: '/units/Militia'
  },
  MAN_AT_ARMS: {
    ID: 75,
    img: require('@/assets/ManAtArmsIcon.png'),
    page: '/units/Man_At_Arms'
  },
  LONG_SWORDSMAN: {
    ID: 77,
    img: require('@/assets/LongswordsManIcon.png'),
    page: '/units/Long_Swordsman'
  },
  VILLAGER: { // 有男女
    ID: 83,
    img: require('@/assets/VillagerMaleIcon.png'),
    page: '/units/Villager'
  },
  SPEARMAN: {
    ID: 93,
    img: require('@/assets/SpearmanIcon.png'),
    page: '/units/Spearman'
  },
  MONK: { // 有美洲版
    ID: 125,
    img: require('@/assets/MonkIcon.png'),
    page: '/units/Monk'
  },
  TRADE_CART: {
    ID: 128,
    img: require('@/assets/TradeCartIcon.png'),
    page: '/units/Trade_Cart'
  },
  SLINGER: {
    ID: 185,
    img: require('@/assets/Slingericon.png'),
    page: '/units/Slinger'
  },
  IMPERIAL_CAMEL_RIDER: {
    ID: 207,
    img: require('@/assets/ImperialCamelIcon.png'),
    page: '/units/Imperial_Camel_Rider'
  },
  WOAD_RAIDER: {
    ID: 232,
    img: require('@/assets/WBRSK.png'),
    page: '/units/Woad_Raider'
  },
  WAR_ELEPHANT: {
    ID: 239,
    img: require('@/assets/WarElephantIcon.png'),
    page: '/units/War_Elephant'
  },
  LONGBOAT: {
    ID: 250,
    img: require('@/assets/LongboatIcon.png'),
    page: '/units/Longboat'
  },
  SCORPION: {
    ID: 279,
    img: require('@/assets/ScorpionIcon.png'),
    page: '/units/Scorpion'
  },
  MANGONEL: {
    ID: 280,
    img: require('@/assets/MangonelIcon.png'),
    page: '/units/Mangonel'
  },
  THROWING_AXEMAN: {
    ID: 281,
    img: require('@/assets/TAXEM.png'),
    page: '/units/Throwing_Axeman'
  },
  MAMELUKE: {
    ID: 282,
    img: require('@/assets/Saracenmamluk_icon.png'),
    page: '/units/Mameluke'
  },
  CAVALIER: {
    ID: 283,
    img: require('@/assets/CavalierIcon.png'),
    page: '/units/Cavalier'
  },
  SAMURAI: {
    ID: 291,
    img: require('@/assets/SMURI.png'),
    page: '/units/Samurai'
  },
  CAMEL_RIDER: {
    ID: 329,
    img: require('@/assets/CamelIcon.png'),
    page: '/units/Camel_Rider'
  },
  HEAVY_CAMEL_RIDER: {
    ID: 330,
    img: require('@/assets/HeavyCamelIcon.png'),
    page: '/units/Heavy_Camel_Rider'
  },
  PIKEMAN: {
    ID: 358,
    img: require('@/assets/PikemanIcon.png'),
    page: '/units/Pikeman'
  },
  HALBERDIER: {
    ID: 359,
    img: require('@/assets/HalberdierIcon.png'),
    page: '/units/Halberdier'
  },
  CANNON_GALLEON: {
    ID: 420,
    img: require('@/assets/CannonGalleonIcon.png'),
    page: '/units/Cannon_Galleon'
  },
  CAPPED_RAM: {
    ID: 422,
    img: require('@/assets/CappedRamIcon.png'),
    page: '/units/Capped_Ram'
  },
  PETARD: {
    ID: 440,
    img: require('@/assets/PetardIcon.png'),
    page: '/units/Petard'
  },
  HUSSAR: {
    ID: 441,
    img: require('@/assets/HussarIcon.png'),
    page: '/units/Hussar'
  },
  GALLEON: {
    ID: 442,
    img: require('@/assets/GalleonAoE2.png'),
    page: '/units/Galleon'
  },
  SCOUT_CAVALRY: {
    ID: 448,
    img: require('@/assets/ScoutCavalryIcon.png'),
    page: '/units/Scout_Cavalry'
  },
  TWO_HANDED_SWORDSMAN: {
    ID: 473,
    img: require('@/assets/2HandedswordsmanIcon.png'),
    page: '/units/Two_Handed_Swordsman'
  },
  HEAVY_CAV_ARCHER: {
    ID: 474,
    img: require('@/assets/HeavyCavArcherIcon.png'),
    page: '/units/Heavy_Cav_Archer'
  },
  ARBALESTER: { // 有改名
    ID: 492,
    img: require('@/assets/ArbalestIcon.png'),
    page: '/units/Arbalester'
  },
  DEMOLITION_SHIP: {
    ID: 527,
    img: require('@/assets/DemoShipIcon.png'),
    page: '/units/Demolition_Ship'
  },
  HEAVY_DEMO_SHIP: {
    ID: 528,
    img: require('@/assets/HeavyDemoShipIcon.png'),
    page: '/units/Heavy_Demo_Ship'
  },
  FIRE_SHIP: {
    ID: 529,
    img: require('@/assets/FireShipIcon.png'),
    page: '/units/Fire_Ship'
  },
  ELITE_LONGBOWMAN: {
    ID: 530,
    img: null,
    page: '/units/Elite_Longbowman'
  },
  ELITE_THROWING_AXEMAN: {
    ID: 531,
    img: null,
    page: '/units/Elite_Throwing_Axeman'
  },
  FAST_FIRE_SHIP: {
    ID: 532,
    img: require('@/assets/FastFireShipIcon.png'),
    page: '/units/Fast_Fire_Ship'
  },
  ELITE_LONGBOAT: { // 同頁面
    ID: 533,
    img: null,
    page: '/units/Elite_Longboat'
  },
  ELITE_WOAD_RAIDER: { // 同頁面
    ID: 534,
    img: null,
    page: '/units/Elite_Woad_Raider'
  },
  GALLEY: {
    ID: 539,
    img: require('@/assets/Galley.png'),
    page: '/units/Galley'
  },
  HEAVY_SCORPION: {
    ID: 542,
    img: require('@/assets/HeavyScorpionIcon.png'),
    page: '/units/Heavy_Scorpion'
  },
  TRANSPORT_SHIP: {
    ID: 545,
    img: require('@/assets/TransportShipIcon.png'),
    page: '/units/Transport_Ship'
  },
  LIGHT_CAVALRY: {
    ID: 546,
    img: require('@/assets/LightCavalryIcon.png'),
    page: '/units/Light_Cavalry'
  },
  SIEGE_RAM: {
    ID: 548,
    img: require('@/assets/SiegeRamIcon.png'),
    page: '/units/Siege_Ram'
  },
  ONAGER: {
    ID: 550,
    img: require('@/assets/OnagerIcon.png'),
    page: '/units/Onager'
  },
  ELITE_CATAPHRACT: { // 同頁面
    ID: 553,
    img: null,
    page: '/units/Elite_Cataphract'
  },
  ELITE_TEUTONIC_KNIGHT: { // 同頁面
    ID: 554,
    img: null,
    page: '/units/Elite_Teutonic_Knight'
  },
  ELITE_HUSKARL: { // 同頁面
    ID: 555,
    img: null,
    page: '/units/Elite_Huskarl'
  },
  ELITE_MAMELUKE: { // 同頁面
    ID: 556,
    img: null,
    page: '/units/Elite_Mameluke'
  },
  ELITE_JANISSARY: { // 同頁面
    ID: 557,
    img: null,
    page: '/units/Elite_Janissary'
  },
  ELITE_WAR_ELEPHANT: { // 同頁面
    ID: 558,
    img: null,
    page: '/units/Elite_War_Elephant'
  },
  ELITE_CHU_KO_NU: { // 同頁面
    ID: 559,
    img: null,
    page: '/units/Elite_Chu_Ko_Nu'
  },
  ELITE_SAMURAI: { // 同頁面
    ID: 560,
    img: null,
    page: '/units/Elite_Samurai'
  },
  ELITE_MANGUDAI: { // 同頁面
    ID: 561,
    img: null,
    page: '/units/Elite_Mangudai'
  },
  CHAMPION: {
    ID: 567,
    img: require('@/assets/ChampionIcon.png'),
    page: '/units/Champion'
  },
  PALADIN: {
    ID: 569,
    img: require('@/assets/PaladinIcon.png'),
    page: '/units/Paladin'
  },
  SIEGE_ONAGER: {
    ID: 588,
    img: require('@/assets/SiegeOnagerIcon.png'),
    page: '/units/Siege_Onager'
  },
  ELITE_CANNON_GALLEON: {
    ID: 691,
    img: require('@/assets/Elite_cannon_galleonicon.png'),
    page: '/units/Elite_Cannon_Galleon'
  },
  BERSERK: {
    ID: 692,
    img: require('@/assets/VBRSK.png'),
    page: '/units/Berserk'
  },
  ELITE_BERSERK: {
    ID: 694,
    img: null,
    page: '/units/Elite_Berserk'
  },
  JAGUAR_WARRIOR: {
    ID: 725,
    img: require('@/assets/JaguarWarriorIcon.png'),
    page: '/units/Jaguar_Warrior'
  },
  ELITE_JAGUAR_WARRIOR: { // 同頁面
    ID: 726,
    img: null,
    page: '/units/Elite_Jaguar_Warrior'
  },
  EAGLE_SCOUT: {
    ID: 751,
    img: require('@/assets/EagleScoutIcon.png'),
    page: '/units/Eagle_Scout'
  },
  ELITE_EAGLE_WARRIOR: {
    ID: 752,
    img: require('@/assets/EliteEagleWarriorIcon.png'),
    page: '/units/Elite_Eagle_Warrior'
  },
  EAGLE_WARRIOR: {
    ID: 753,
    img: require('@/assets/EagleWarriorIcon.png'),
    page: '/units/Eagle_Warrior'
  },
  TARKAN: {
    ID: 755,
    img: require('@/assets/TarkanIcon.png'),
    page: '/units/Tarkan'
  },
  ELITE_TARKAN: { // 同頁面
    ID: 757,
    img: null,
    page: '/units/Elite_Tarkan'
  },
  PLUMED_ARCHER: {
    ID: 763,
    img: require('@/assets/PlumedArcherIcon.png'),
    page: '/units/Plumed_Archer'
  },
  ELITE_PLUMED_ARCHER: { // 同頁面
    ID: 765,
    img: null,
    page: '/units/Elite_Plumed_Archer'
  },
  CONQUISTADOR: {
    ID: 771,
    img: require('@/assets/ConquistadorIcon.png'),
    page: '/units/Conquistador'
  },
  ELITE_CONQUISTADOR: { // 同頁面
    ID: 773,
    img: null,
    page: '/units/Elite_Conquistador'
  },
  MISSIONARY: {
    ID: 775,
    img: require('@/assets/MissionaryIcon.png'),
    page: '/units/Missionary'
  },
  WAR_WAGON: {
    ID: 827,
    img: require('@/assets/WarWagonIcon.png'),
    page: '/units/War_Wagon'
  },
  ELITE_WAR_WAGON: { // 同頁面
    ID: 829,
    img: null,
    page: '/units/Elite_War_Wagon'
  },
  TURTLE_SHIP: {
    ID: 831,
    img: require('@/assets/TurtleShipIcon.png'),
    page: '/units/Turtle_Ship'
  },
  ELITE_TURTLE_SHIP: { // 同頁面
    ID: 832,
    img: null,
    page: '/units/Elite_Turtle_Ship'
  },
  GENOESE_CROSSBOWMAN: {
    ID: 866,
    img: require('@/assets/New_Genoese_Crossbowman.png'),
    page: '/units/Genoese_Crossbowman'
  },
  ELITE_GENOESE_CROSSBOWMAN: { // 同頁面
    ID: 868,
    img: null,
    page: '/units/Elite_Genoese_Crossbowman'
  },
  MAGYAR_HUSZAR: {
    ID: 869,
    img: require('@/assets/Magyar_Huszar_icon.png'),
    page: '/units/Magyar_Huszar'
  },
  ELITE_MAGYAR_HUSZAR: { // 同頁面
    ID: 871,
    img: null,
    page: '/units/Elite_Magyar_Huszar'
  },
  ELEPHANT_ARCHER: {
    ID: 873,
    img: require('@/assets/ElephantArcherIcon.png'),
    page: '/units/Elephant_Archer'
  },
  ELITE_ELEPHANT_ARCHER: { // 同頁面
    ID: 875,
    img: null,
    page: '/units/Elite_Elephant_Archer'
  },
  BOYAR: {
    ID: 876,
    img: require('@/assets/New_Boyar.png'),
    page: '/units/Boyar'
  },
  ELITE_BOYAR: { // 同頁面
    ID: 878,
    img: null,
    page: '/units/Elite_Boyar'
  },
  KAMAYUK: {
    ID: 879,
    img: require('@/assets/Kamayukicon.png'),
    page: '/units/Kamayuk'
  },
  ELITE_KAMAYUK: { // 同頁面
    ID: 881,
    img: null,
    page: '/units/Elite_Kamayuk'
  },
  CONDOTTIERO: {
    ID: 882,
    img: require('@/assets/CondottieroIcon.png'),
    page: '/units/Condottiero'
  },
  ORGAN_GUN: {
    ID: 1001,
    img: require('@/assets/OrganGunIcon.png'),
    page: '/units/Organ_Gun'
  },
  ELITE_ORGAN_GUN: { // 同頁面
    ID: 1003,
    img: null,
    page: '/units/Elite_Organ_Gun'
  },
  CARAVEL: {
    ID: 1004,
    img: require('@/assets/CaravelIcon.png'),
    page: '/units/Caravel'
  },
  ELITE_CARAVEL: { // 同頁面
    ID: 1006,
    img: null,
    page: '/units/Elite_Caravel'
  },
  CAMEL_ARCHER: {
    ID: 1007,
    img: require('@/assets/CamelArcherIcon.png'),
    page: '/units/Camel_Archer'
  },
  ELITE_CAMEL_ARCHER: { // 同頁面
    ID: 1009,
    img: null,
    page: '/units/Elite_Camel_Archer'
  },
  GENITOUR: { // 同頁面
    ID: 1010,
    img: require('@/assets/GenitourIcon.png'),
    page: '/units/Genitour'
  },
  ELITE_GENITOUR: { // 同頁面
    ID: 1012,
    img: null,
    page: '/units/Elite_Genitour'
  },
  GBETO: {
    ID: 1013,
    img: require('@/assets/GbetoIcon.png'),
    page: '/units/Gbeto'
  },
  ELITE_GBETO: { // 同頁面
    ID: 1015,
    img: null,
    page: '/units/Elite_Gbeto'
  },
  SHOTEL_WARRIOR: { // 同頁面
    ID: 1016,
    img: require('@/assets/ShotelIcon.png'),
    page: '/units/Shotel_Warrior'
  },
  ELITE_SHOTEL_WARRIOR: {
    ID: 1018,
    img: null,
    page: '/units/Elite_Shotel_Warrior'
  },
  FIRE_GALLEY: {
    ID: 1103,
    img: require('@/assets/FireGalleyIcon.png'),
    page: '/units/Fire_Galley'
  },
  DEMOLITION_RAFT: {
    ID: 1104,
    img: require('@/assets/DemoRaftIcon.png'),
    page: '/units/Demolition_Raft'
  },
  SIEGE_TOWER: {
    ID: 1105,
    img: require('@/assets/Siegetowericon.png'),
    page: '/units/Siege_Tower'
  },
  BALLISTA_ELEPHANT: {
    ID: 1120,
    img: require('@/assets/Ballistaelephanticon.png'),
    page: '/units/Ballista_Elephant'
  },
  ELITE_BALLISTA_ELEPHANT: { // 同頁面
    ID: 1122,
    img: null,
    page: '/units/Elite_Ballista_Elephant'
  },
  KARAMBIT_WARRIOR: {
    ID: 1123,
    img: require('@/assets/Karambitwarrioricon.png'),
    page: '/units/Karambit_Warrior'
  },
  ELITE_KARAMBIT_WARRIOR: { // 同頁面
    ID: 1125,
    img: null,
    page: '/units/Elite_Karambit_Warrior'
  },
  ARAMBAI: {
    ID: 1126,
    img: require('@/assets/Arambaiicon.png'),
    page: '/units/Arambai'
  },
  ELITE_ARAMBAI: { // 同頁面
    ID: 1128,
    img: null,
    page: '/units/Elite_Arambai'
  },
  RATTAN_ARCHER: {
    ID: 1129,
    img: require('@/assets/RattanarcherIcon2.png'),
    page: '/units/Rattan_Archer'
  },
  ELITE_RATTAN_ARCHER: { // 同頁面
    ID: 1131,
    img: null,
    page: '/units/Elite_Rattan_Archer'
  },
  BATTLE_ELEPHANT: {
    ID: 1132,
    img: require('@/assets/Battleelephanticon.png'),
    page: '/units/Battle_Elephant'
  },
  ELITE_BATTLE_ELEPHANT: {
    ID: 1134,
    img: require('@/assets/EliteBattleElephantIcon.png'),
    page: '/units/Elite_Battle_Elephant'
  },
  IMPERIAL_SKIRMISHER: {
    ID: 1155,
    img: require('@/assets/Imperialskirmishericon.png'),
    page: '/units/Imperial_Skirmisher'
  },
  KESHIK: {
    ID: 1228,
    img: require('@/assets/Keshikicon.png'),
    page: '/units/Keshik'
  },
  ELITE_KESHIK: { // 同頁面
    ID: 1230,
    img: null,
    page: '/units/Elite_Keshik'
  },
  KIPCHAK: {
    ID: 1231,
    img: require('@/assets/Kipchakicon.png'),
    page: '/units/Kipchak'
  },
  ELITE_KIPCHAK: { // 同頁面
    ID: 1233,
    img: null,
    page: '/units/Elite_Kipchak'
  },
  LEITIS: {
    ID: 1234,
    img: require('@/assets/Leitisicon.png'),
    page: '/units/Leitis'
  },
  ELITE_LEITIS: { // 同頁面
    ID: 1236,
    img: null,
    page: '/units/Elite_Leitis'
  },
  DISMOUNTED_KONNIK: { // 同頁面
    ID: 1252,
    img: require('@/assets/Konnikdismountedicon.png'),
    page: '/units/Dismounted_Konnik'
  },
  DISMOUNTED_ELITE_KONNIK: {
    ID: 1253,
    img: null,
    page: '/units/Dismounted_Elite_Konnik'
  },
  KONNIK: {
    ID: 1254,
    img: require('@/assets/Konnikicon.png'),
    page: '/units/Konnik'
  },
  ELITE_KONNIK: { // 同頁面
    ID: 1255,
    img: null,
    page: '/units/Elite_Konnik'
  },
  FLAMING_CAMEL: {
    ID: 1263,
    img: require('@/assets/Flaming_camel_icon.png'),
    page: '/units/Flaming_Camel'
  },
  STEPPE_LANCER: {
    ID: 1370,
    img: require('@/assets/Steppelancericon.png'),
    page: '/units/Steppe_Lancer'
  },
  ELITE_STEPPE_LANCER: {
    ID: 1372,
    img: require('@/assets/Elitesteppelancericon.png'),
    page: '/units/Elite_Steppe_Lancer'
  },
  XOLOTL_WARRIOR: {
    ID: 1570,
    img: require('@/assets/Xolotlicon.png'),
    page: '/units/Xolotl_Warrior'
  }
}

export const Tech = {
  YEOMEN: {
    ID: 3,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Yeomen'
  },
  EL_DORADO: {
    ID: 4,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/El_Dorado'
  },
  FUROR_CELTICA: {
    ID: 5,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Furor_Celtica'
  },
  DRILL: {
    ID: 6,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Drill'
  },
  MAHOUTS: {
    ID: 7,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Mahouts'
  },
  TOWN_WATCH: {
    ID: 8,
    img: require('@/assets/tower_watch.png'),
    page: '/techs/Town_Watch'
  },
  ZEALOTRY: {
    ID: 9,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Zealotry'
  },
  ARTILLERY: {
    ID: 10,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Artillery'
  },
  CRENELLATIONS: {
    ID: 11,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Crenellations'
  },
  CROP_ROTATION: {
    ID: 12,
    img: require('@/assets/crop_rotation.png'),
    page: '/techs/Crop_Rotation'
  },
  HEAVY_PLOW: {
    ID: 13,
    img: require('@/assets/heavy_plow.png'),
    page: '/techs/Heavy_Plow'
  },
  HORSE_COLLAR: {
    ID: 14,
    img: require('@/assets/horse_collar.png'),
    page: '/techs/Horse_Collar'
  },
  GUILDS: {
    ID: 15,
    img: require('@/assets/guilds.png'),
    page: '/techs/Guilds'
  },
  ANARCHY: {
    ID: 16,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Anarchy'
  },
  BANKING: {
    ID: 17,
    img: require('@/assets/banking.png'),
    page: '/techs/Banking'
  },
  ATHEISM: {
    ID: 21,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Atheism'
  },
  LOOM: {
    ID: 22,
    img: require('@/assets/loom.png'),
    page: '/techs/Loom'
  },
  COINAGE: {
    ID: 23,
    img: require('@/assets/coinage.png'),
    page: '/techs/Coinage'
  },
  GARLAND_WARS: {
    ID: 24,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Garland_Wars'
  },
  HUSBANDRY: {
    ID: 39,
    img: require('@/assets/husbandry.png'),
    page: '/techs/Husbandry'
  },
  FAITH: {
    ID: 45,
    img: require('@/assets/faith.png'),
    page: '/techs/Faith'
  },
  CHEMISTRY: {
    ID: 47,
    img: require('@/assets/chemistry.png'),
    page: '/techs/Chemistry'
  },
  CARAVAN: {
    ID: 48,
    img: require('@/assets/caravan.png'),
    page: '/techs/Caravan'
  },
  BERSERKERGANG: {
    ID: 49,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Berserkergang'
  },
  MASONRY: {
    ID: 50,
    img: require('@/assets/masonry.png'),
    page: '/techs/Masonry'
  },
  ARCHITECTURE: {
    ID: 51,
    img: require('@/assets/architecture.png'),
    page: '/techs/Architecture'
  },
  ROCKETRY: {
    ID: 52,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Rocketry'
  },
  TREADMILL_CRANE: {
    ID: 54,
    img: require('@/assets/treadmill_crane.png'),
    page: '/techs/Treadmill_Crane'
  },
  GOLD_MINING: {
    ID: 55,
    img: require('@/assets/gold_mining.png'),
    page: '/techs/Gold_Mining'
  },
  KATAPARUTO: {
    ID: 59,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Kataparuto'
  },
  LOGISTICA: {
    ID: 61,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Logistica'
  },
  KEEP_TECH: {
    ID: 63,
    img: require('@/assets/keep.png'),
    page: '/techs/Keep_Tech'
  },
  BOMBARD_TOWER_TECH: {
    ID: 64,
    img: require('@/assets/bombard_tower_tech.png'),
    page: '/techs/Bombard_Tower_Tech'
  },
  GILLNETS: {
    ID: 65,
    img: require('@/assets/gillnets.png'),
    page: '/techs/Gillnets'
  },
  FORGING: {
    ID: 67,
    img: require('@/assets/forging.png'),
    page: '/techs/Forging'
  },
  IRON_CASTING: {
    ID: 68,
    img: require('@/assets/iron_casting.png'),
    page: '/techs/Iron_Casting'
  },
  SCALE_MAIL_ARMOR: {
    ID: 74,
    img: require('@/assets/scale_mail_armor.png'),
    page: '/techs/Scale_Mail_Armor'
  },
  BLAST_FURNACE: {
    ID: 75,
    img: require('@/assets/blast_furnace.png'),
    page: '/techs/Blast_Furnace'
  },
  CHAIN_MAIL_ARMOR: {
    ID: 76,
    img: require('@/assets/chain_mail_armor.png'),
    page: '/techs/Chain_Mail_Armor'
  },
  PLATE_MAIL_ARMOR: {
    ID: 77,
    img: require('@/assets/plate_mail_armor.png'),
    page: '/techs/Plate_Mail_Armor'
  },
  PLATE_BARDING_ARMOR: {
    ID: 80,
    img: require('@/assets/scale_barding_armor.png'),
    page: '/techs/Plate_Barding_Armor'
  },
  SCALE_BARDING_ARMOR: {
    ID: 81,
    img: require('@/assets/scale_barding_armor.png'),
    page: '/techs/Scale_Barding_Armor'
  },
  CHAIN_BARDING_ARMOR: {
    ID: 82,
    img: require('@/assets/chain_barding_armor.png'),
    page: '/techs/Chain_Barding_Armor'
  },
  BEARDED_AXE: {
    ID: 83,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Bearded_Axe'
  },
  BALLISTICS: {
    ID: 93,
    img: require('@/assets/ballistics.png'),
    page: '/techs/Ballistics'
  },
  FEUDAL_AGE: {
    ID: 101,
    img: require('@/assets/feudal_age.png'),
    page: '/techs/Feudal_Age'
  },
  CASTLE_AGE: {
    ID: 102,
    img: require('@/assets/castle_age.png'),
    page: '/techs/Castle_Age'
  },
  IMPERIAL_AGE: {
    ID: 103,
    img: require('@/assets/imperial_age.png'),
    page: '/techs/Imperial_Age'
  },
  GUARD_TOWER_TECH: {
    ID: 140,
    img: require('@/assets/tower.png'),
    page: '/techs/Guard_Tower_Tech'
  },
  GOLD_SHAFT_MINING: {
    ID: 182,
    img: require('@/assets/gold_shaft_mining.png'),
    page: '/techs/Gold_Shaft_Mining'
  },
  FORTIFIED_WALL_TECH: {
    ID: 194,
    img: require('@/assets/stone_wall.png'),
    page: '/techs/Fortified_Wall_Tech'
  },
  FLETCHING: {
    ID: 199,
    img: require('@/assets/fletching.png'),
    page: '/techs/Fletching'
  },
  BODKIN_ARROW: {
    ID: 200,
    img: require('@/assets/bodkin_arrow.png'),
    page: '/techs/Bodkin_Arrow'
  },
  BRACER: {
    ID: 201,
    img: require('@/assets/Bracer.png'),
    page: '/techs/Bracer'
  },
  DOUBLE_BIT_AXE: {
    ID: 202,
    img: require('@/assets/double-bit_axe.png'),
    page: '/techs/Double_Bit_Axe'
  },
  BOW_SAW: {
    ID: 203,
    img: require('@/assets/bow_saw.png'),
    page: '/techs/Bow_Saw'
  },
  PADDED_ARCHER_ARMOR: {
    ID: 211,
    img: require('@/assets/padded_archer_armor.png'),
    page: '/techs/Padded_Archer_Armor'
  },
  LEATHER_ARCHER_ARMOR: {
    ID: 212,
    img: null,
    page: '/techs/Leather_Archer_Armor'
  },
  WHEELBARROW: {
    ID: 213,
    img: require('@/assets/leather_archer_armor.png'),
    page: '/techs/Wheelbarrow'
  },
  SQUIRES: {
    ID: 215,
    img: require('@/assets/squires.png'),
    page: '/techs/Squires'
  },
  RING_ARCHER_ARMOR: {
    ID: 219,
    img: require('@/assets/ring_archer_armor.png'),
    page: '/techs/Ring_Archer_Armor'
  },
  TWO_MAN_SAW: {
    ID: 221,
    img: require('@/assets/two-man_saw.png'),
    page: '/techs/Two_Man_Saw'
  },
  BLOCK_PRINTING: {
    ID: 230,
    img: require('@/assets/block_printing.png'),
    page: '/techs/Block_Printing'
  },
  SANCTITY: {
    ID: 231,
    img: require('@/assets/sanctity.png'),
    page: '/techs/Sanctity'
  },
  ILLUMINATION: {
    ID: 233,
    img: require('@/assets/illumination.png'),
    page: '/techs/Illumination'
  },
  HAND_CART: {
    ID: 249,
    img: require('@/assets/hand_cart.png'),
    page: '/techs/Hand_Cart'
  },
  FERVOR: {
    ID: 252,
    img: require('@/assets/fervor.png'),
    page: '/techs/Fervor'
  },
  STONE_MINING: {
    ID: 278,
    img: require('@/assets/stone_mining.png'),
    page: '/techs/Stone_Mining'
  },
  STONE_SHAFT_MINING: {
    ID: 279,
    img: require('@/assets/stone_shaft_mining.png'),
    page: '/techs/Stone_Shaft_Mining'
  },
  TOWN_PATROL: {
    ID: 280,
    img: require('@/assets/town_patrol.png'),
    page: '/techs/Town_Patrol'
  },
  CONSCRIPTION: {
    ID: 315,
    img: require('@/assets/conscription.png'),
    page: '/techs/Conscription'
  },
  REDEMPTION: {
    ID: 316,
    img: require('@/assets/redemption.png'),
    page: '/techs/Redemption'
  },
  ATONEMENT: {
    ID: 319,
    img: require('@/assets/atonement.png'),
    page: '/techs/Atonement'
  },
  SAPPERS: {
    ID: 321,
    img: require('@/assets/sappers.png'),
    page: '/techs/Sappers'
  },
  MURDER_HOLES: {
    ID: 322,
    img: require('@/assets/murder_holes.png'),
    page: '/techs/Murder_Holes'
  },
  SHIPWRIGHT: {
    ID: 373,
    img: require('@/assets/shipwright.png'),
    page: '/techs/Shipwright'
  },
  CAREENING: {
    ID: 374,
    img: require('@/assets/careening.png'),
    page: '/techs/Careening'
  },
  DRY_DOCK: {
    ID: 375,
    img: require('@/assets/dry_dock.png'),
    page: '/techs/Dry_Dock'
  },
  SIEGE_ENGINEERS: {
    ID: 377,
    img: require('@/assets/siege_engineers.png'),
    page: '/techs/Siege_Engineers'
  },
  HOARDINGS: {
    ID: 379,
    img: require('@/assets/hoardings.png'),
    page: '/techs/Hoardings'
  },
  HEATED_SHOT: {
    ID: 380,
    img: require('@/assets/hoardings.png'),
    page: '/techs/Heated_Shot'
  },
  SPIES_TREASON: {
    ID: 408,
    img: require('@/assets/spies_treason.png'),
    page: '/techs/Spies_Treason'
  },
  BLOODLINES: {
    ID: 435,
    img: require('@/assets/Bloodlines.png'),
    page: '/techs/Bloodlines'
  },
  PARTHIAN_TACTICS: {
    ID: 436,
    img: require('@/assets/parthian_tactics.png'),
    page: '/techs/Parthian_Tactics'
  },
  THUMB_RING: {
    ID: 437,
    img: require('@/assets/Thumb_Ring.png'),
    page: '/techs/Thumb_Ring'
  },
  THEOCRACY: {
    ID: 438,
    img: require('@/assets/Theocracy.png'),
    page: '/techs/Theocracy'
  },
  HERESY: {
    ID: 439,
    img: require('@/assets/Heresy.png'),
    page: '/techs/Heresy'
  },
  SUPREMACY: {
    ID: 440,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Supremacy'
  },
  HERBAL_MEDICINE: {
    ID: 441,
    img: require('@/assets/Herbalmedicine.png'),
    page: '/techs/Herbal_Medicine'
  },
  SHINKICHON: {
    ID: 445,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Shinkichon'
  },
  PERFUSION: {
    ID: 457,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Perfusion'
  },
  ATLATL: {
    ID: 460,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Atlatl'
  },
  WARWOLF: {
    ID: 461,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Warwolf'
  },
  GREAT_WALL: {
    ID: 462,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Great_Wall'
  },
  CHIEFTAINS: {
    ID: 463,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Chieftains'
  },
  GREEK_FIRE: {
    ID: 464,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Greek_Fire'
  },
  STRONGHOLD: {
    ID: 482,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Stronghold'
  },
  MARAUDERS: {
    ID: 483,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Marauders'
  },
  YASAMA: {
    ID: 484,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Yasama'
  },
  OBSIDIAN_ARROWS: {
    ID: 485,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Obsidian_Arrows'
  },
  PANOKSEON: {
    ID: 486,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Panokseon'
  },
  NOMADS: {
    ID: 487,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Nomads'
  },
  KAMANDARAN: {
    ID: 488,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Kamandaran'
  },
  IRONCLAD: {
    ID: 489,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Ironclad'
  },
  MADRASAH: {
    ID: 490,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Madrasah'
  },
  SIPAHI: {
    ID: 491,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Sipahi'
  },
  INQUISITION: {
    ID: 492,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Inquisition'
  },
  CHIVALRY: {
    ID: 493,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Chivalry'
  },
  PAVISE: {
    ID: 494,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Pavise'
  },
  SILK_ROAD: {
    ID: 499,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Silk_Road'
  },
  SULTANS: {
    ID: 506,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Sultans'
  },
  SHATAGNI: {
    ID: 507,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Shatagni'
  },
  ORTHODOXY: {
    ID: 512,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Orthodoxy'
  },
  DRUZHINA: {
    ID: 513,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Druzhina'
  },
  CORVINIAN_ARMY: {
    ID: 514,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Corvinian_Army'
  },
  RECURVE_BOW: {
    ID: 515,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Recurve_Bow'
  },
  ANDEAN_SLING: {
    ID: 516,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Andean_Sling'
  },
  FABRIC_SHIELDS: {
    ID: 517,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Fabric_Shields'
  },
  CARRACK: {
    ID: 572,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Carrack'
  },
  ARQUEBUS: {
    ID: 573,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Arquebus'
  },
  ROYAL_HEIRS: {
    ID: 574,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Royal_Heirs'
  },
  TORSION_ENGINES: {
    ID: 575,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Torsion_Engines'
  },
  TIGUI: {
    ID: 576,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Tigui'
  },
  FARIMBA: {
    ID: 577,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Farimba'
  },
  KASBAH: {
    ID: 578,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Kasbah'
  },
  MAGHRABI_CAMELS: {
    ID: 579,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Maghrabi_Camels'
  },
  ARSON: {
    ID: 602,
    img: require('@/assets/Arson.png'),
    page: '/techs/Arson'
  },
  ARROWSLITS: {
    ID: 608,
    img: require('@/assets/arrowslits.png'),
    page: '/techs/Arrowslits'
  },
  TUSK_SWORDS: {
    ID: 622,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Tusk_Swords'
  },
  DOUBLE_CROSSBOW: {
    ID: 623,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Double_Crossbow'
  },
  THALASSOCRACY: {
    ID: 624,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Thalassocracy'
  },
  FORCED_LEVY: {
    ID: 625,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Forced_Levy'
  },
  HOWDAH: {
    ID: 626,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Howdah'
  },
  MANIPUR_CAVALRY: {
    ID: 627,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Manipur_Cavalry'
  },
  CHATRAS: {
    ID: 628,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Chatras'
  },
  PAPER_MONEY: {
    ID: 629,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Paper_Money'
  },
  STIRRUPS: {
    ID: 685,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Stirrups'
  },
  BAGAINS: {
    ID: 686,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Bagains'
  },
  SILK_ARMOR: {
    ID: 687,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Silk_Armor'
  },
  TIMURID_SIEGECRAFT: {
    ID: 688,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Timurid_Siegecraft'
  },
  STEPPE_HUSBANDRY: {
    ID: 689,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Steppe_Husbandry'
  },
  CUMAN_MERCENARIES: {
    ID: 690,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Cuman_Mercenaries'
  },
  HILL_FORTS: {
    ID: 691,
    img: require('@/assets/unique_tech.png'),
    page: '/techs/Hill_Forts'
  },
  TOWER_SHIELDS: {
    ID: 692,
    img: require('@/assets/unique_tech_imperial.png'),
    page: '/techs/Tower_Shields'
  },
  SUPPLIES: {
    ID: 716,
    img: require('@/assets/Suplliesicon.png'),
    page: '/techs/Supplies'
  },

  HUSSAR: {
    ID: 428,
    img: require('@/assets/hussar.png')
  }
}
/*
Object.keys(Tech).forEach(value => {
  const p = value.toLowerCase()
  const sp = p.split('_').map(m2 => {
    return m2.charAt(0).toUpperCase() + m2.slice(1)
  })

  Tech[value].page = '/techs/' + sp.join('_')
})

console.log(Tech)
*/