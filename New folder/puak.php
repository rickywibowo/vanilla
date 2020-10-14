{
  "Name": "coba",
  "CreationDate": "2020-10-9",
  "Commands": [
    {
      "Command": "store",
      "Target": "4",
      "Value": "KALAH"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "STATUSTERAKHIR"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "ACTION"
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return new Array (1,3,7,8,2,2,5)",
      "Value": "arrPengkali"
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return new Array (1,1,1,2,4,5,5)",
      "Value": "arrKoin"
    },
    {
      "Command": "store",
      "Target": "${arrPengkali[${kalah}]}",
      "Value": "arrValue"
    },
    {
      "Command": "label",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "storeText",
      "Target": "id=divTime",
      "Value": "WAKTU"
    },
    {
      "Command": "if_v2",
      "Target": "${WAKTU} == \"CLOSED\"",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "ACTION"
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${ACTION} == \"DONE\"",
      "Value": ""
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult1",
      "Value": "angka1"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult2",
      "Value": "angka2"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult3",
      "Value": "angka3"
    },
    {
      "Command": "comment",
      "Target": "=== BS 1 ===",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${angka1} < 7",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "KECIL",
      "Value": "BK1"
    },
    {
      "Command": "if_v2",
      "Target": "${HASILRUMUS} == ${BK1}",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "0",
      "Value": "KALAH"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "store",
      "Target": "MENANG-KECIL",
      "Value": "STATUSTERAKHIR"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "else",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "BESAR",
      "Value": "BK1"
    },
    {
      "Command": "if_v2",
      "Target": "${HASILRUMUS} == ${BK1}",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "0",
      "Value": "KALAH"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "store",
      "Target": "MENANG-BESAR",
      "Value": "STATUSTERAKHIR"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "=== BS 2 ===",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${angka2} < 7",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "KECIL",
      "Value": "BK2"
    },
    {
      "Command": "else",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "BESAR",
      "Value": "BK2"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "storeText",
      "Target": "id=divTime",
      "Value": "WAKTU"
    },
    {
      "Command": "comment",
      "Target": "=== BS 3 ===",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${angka3} < 7",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "KECIL",
      "Value": "BK3"
    },
    {
      "Command": "else",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "BESAR",
      "Value": "BK3"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "end === BS 3 ===",
      "Value": ""
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return Number (${angka1} % 2)",
      "Value": "GG1"
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return Number (${angka2} % 2)",
      "Value": "GG2"
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return Number (${angka3} % 2)",
      "Value": "GG3"
    },
    {
      "Command": "if_v2",
      "Target": "${GG1} == 0",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "GENAP",
      "Value": "GG1TEXT"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${GG1} == 1",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "GANJIL",
      "Value": "GG1TEXT"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${HASILRUMUS} == ${GG1TEXT}",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "store",
      "Target": "0",
      "Value": "KALAH"
    },
    {
      "Command": "store",
      "Target": "MENANG-GANJIL-GENAP",
      "Value": "STATUSTERAKHIR"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "if_v2",
      "Target": "${HASILRUMUS} !=\"\"",
      "Value": ""
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return Number(${KALAH}) + 1;",
      "Value": "KALAH"
    },
    {
      "Command": "store",
      "Target": "KALAH",
      "Value": "STATUSTERAKHIR"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": "CEK KALAH MENANG"
    },
    {
      "Command": "comment",
      "Target": "== start rumus BK1 ==",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"chip${arrKoin[${kalah}]}\"]/img",
      "Value": "SET KOIN",
      "Targets": [
        "xpath=//*[@id=\"chip1\"]/img",
        "xpath=//a[2]/img",
        "css=#chip1 > img"
      ]
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "rumusbk1"
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "if_v2",
      "Target": "${BK3} == \"BESAR\" && ${BK2} == \"BESAR\" && ${BK1} == \"KECIL\"",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "true",
      "Value": "rumusbk1"
    },
    {
      "Command": "store",
      "Target": "KECIL",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "times",
      "Target": "${arrPengkali[${kalah}]}",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"bet1-17\"]/div[2]",
      "Value": "HASILRUMUS",
      "Targets": [
        "xpath=//*[@id=\"bet1-17\"]/div[2]",
        "xpath=//div[30]/div[2]",
        "css=#bet1-17 > div.betarea"
      ]
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "click // xpath=//*[@id=\"form1\"]/div[3]/div[5]/div[2]/a",
      "Value": "PASANG"
    },
    {
      "Command": "store",
      "Target": "DONE",
      "Value": "ACTION"
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "end === rumus BK1",
      "Value": ""
    },
    {
      "Command": "storeText",
      "Target": "id=divTime",
      "Value": "WAKTU"
    },
    {
      "Command": "comment",
      "Target": "== start rumus BK2 ==",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "rumusbk2"
    },
    {
      "Command": "if_v2",
      "Target": "${BK3} == \"KECIL\" && ${BK2} == \"KECIL\" && ${BK1} == \"BESAR\"",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "true",
      "Value": "rumusbk2"
    },
    {
      "Command": "store",
      "Target": "BESAR",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "times",
      "Target": "${arrPengkali[${kalah}]}",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"bet1-20\"]/div[2]",
      "Value": "HASILRUMUS",
      "Targets": [
        "xpath=//*[@id=\"bet1-20\"]/div[2]",
        "xpath=//div[33]/div[2]",
        "css=#bet1-20 > div.betarea"
      ]
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "click // xpath=//*[@id=\"form1\"]/div[3]/div[5]/div[2]/a",
      "Value": "PASANG"
    },
    {
      "Command": "store",
      "Target": "DONE",
      "Value": "ACTION"
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "== start rumus GG1 GENAP GENAP GANJIL ==",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "rumusgg1"
    },
    {
      "Command": "if_v2",
      "Target": "${GG3} == 0 && ${GG2} == 0 && ${GG1} == 1",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "true",
      "Value": "rumusgg1"
    },
    {
      "Command": "store",
      "Target": "GANJIL",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "times",
      "Target": "${arrPengkali[${kalah}]}",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"bet1-19\"]/div[2]",
      "Value": "HASILRUMUS",
      "Targets": [
        "xpath=//*[@id=\"bet1-19\"]/div[2]",
        "xpath=//div[32]/div[2]",
        "css=#bet1-19 > div.betarea"
      ]
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "click // xpath=//*[@id=\"form1\"]/div[3]/div[5]/div[2]/a",
      "Value": "PASANG"
    },
    {
      "Command": "store",
      "Target": "DONE",
      "Value": "ACTION"
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "== start rumus GG2 GANJIL GANJIL GENAP==",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "",
      "Value": "rumusgg2"
    },
    {
      "Command": "if_v2",
      "Target": "${GG3} == 1 && ${GG2} == 1 && ${GG1} == 0",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "true",
      "Value": "rumusgg2"
    },
    {
      "Command": "store",
      "Target": "GENAP",
      "Value": "HASILRUMUS"
    },
    {
      "Command": "times",
      "Target": "${arrPengkali[${kalah}]}",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"bet1-18\"]/div[2]",
      "Value": "",
      "Targets": [
        "xpath=//*[@id=\"bet1-18\"]/div[2]",
        "xpath=//div[31]/div[2]",
        "css=#bet1-18 > div.betarea"
      ]
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "click",
      "Target": "xpath=//*[@id=\"form1\"]/div[3]/div[5]/div[2]/a",
      "Value": "HASILRUMUS",
      "Targets": [
        "xpath=//*[@id=\"form1\"]/div[3]/div[5]/div[2]/a",
        "xpath=//a[@onclick='ConfirmBet()']",
        "xpath=//div[5]/div[2]/a",
        "css=#form1 > div:nth-child(3) > div:nth-child(5) > div:nth-child(2) > a.button-bet"
      ]
    },
    {
      "Command": "store",
      "Target": "DONE",
      "Value": "ACTION"
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    },
    {
      "Command": "end",
      "Target": "",
      "Value": ""
    },
    {
      "Command": "gotoLabel",
      "Target": "mulai",
      "Value": ""
    }
  ]
}