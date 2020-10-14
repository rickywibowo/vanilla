{
  "Name": "PUAKFLEX1",
  "CreationDate": "2020-10-13",
  "Commands": [
    {
      "Command": "label",
      "Target": "SETUP",
      "Value": ""
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "return [[[1,1],[1,3],[1,7],[2,8],[4,2],[5,2],[5,5],[6,3]],\n        0];\n\n\n\n",
      "Value": "KOIN"
    },
    {
      "Command": "comment",
      "Target": "KOIN[0] = 500;",
      "Value": ""
    },
    {
      "Command": "store",
      "Target": "${KOIN[0][2][1]}",
      "Value": "nilai"
    },
    {
      "Command": "store",
      "Target": "3",
      "Value": "MIN_BET_ANGKA"
    },
    {
      "Command": "label",
      "Target": "START",
      "Value": ""
    },
    {
      "Command": "comment",
      "Target": "COLLECT DATA",
      "Value": ""
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult1",
      "Value": "ANGKA1"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult2",
      "Value": "ANGKA2"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult3",
      "Value": "ANGKA3"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult4",
      "Value": "ANGKA4"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult5",
      "Value": "ANGKA5"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult6",
      "Value": "ANGKA6"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult7",
      "Value": "ANGKA7"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult8",
      "Value": "ANGKA8"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult9",
      "Value": "ANGKA9"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult10",
      "Value": "ANGKA10"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult11",
      "Value": "ANGKA11"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryResult12",
      "Value": "ANGKA12"
    },
    {
      "Command": "storeText",
      "Target": "id=HistoryPeriod1",
      "Value": "PERIODE"
    },
    {
      "Command": "executeScript_Sandbox",
      "Target": "var ArrayAngka = [${ANGKA1},${ANGKA2},${ANGKA3},${ANGKA4},${ANGKA5},\n                  ${ANGKA6},${ANGKA7},${ANGKA8},${ANGKA9},${ANGKA10},${ANGKA11},${ANGKA12}];\nvar arrayBK = []; var arrayGG = []; var arrResult = []; var y=0; var z=0; var totalangka = 12;\nvar minbetangka = Number (${MIN_BET_ANGKA});\nfor (x=0;x<12;x++){\n if(ArrayAngka[x]<7){\n   arrayBK[x] = \"KECIL\";\n   y++;\n }\n  else{\n   arrayBK[x] = \"BESAR\";  \n}\n  arrayGG[x] = Number (ArrayAngka[x] % 2);\n if(arrayGG[x] == 0){\n   z++;\n }\n\n\n};\n\nif (y<(minbetangka) || y>(totalangka - minbetangka)){\n  arrResult[4] = \"true\";\n}\n    else{\n    arrResult[4] = \"false\";\n    };\n\nif (z<(minbetangka) || z>(totalangka - minbetangka)){\n  arrResult[10] = \"true\";\n}\n    else{\n    arrResult[10] = \"false\";\n    };\narrResult[0] = arrayBK;\narrResult[1] = arrayGG;\narrResult[2] = y;\narrResult[9] = z;\narrResult[3] = totalangka - y;\n\nif(arrayBK[0]==\"KECIL\" && arrayBK[1]==\"BESAR\" && arrayBK[2]==\"BESAR\" && arrResult[4] ==\"false\"){\n  arrResult[5] = \"true\";\n}\nelse{\n  arrResult[5] = \"false\"; \n}\nif(arrayBK[0]==\"BESAR\" && arrayBK[1]==\"KECIL\" && arrayBK[2]==\"KECIL\" && arrResult[4] ==\"false\"){\n  arrResult[6] = \"true\";  \n}\nelse{\n  arrResult[6] = \"false\"; \n}\n\nif(arrayGG[0]==0 && arrayGG[1]==1 && arrayGG[2]==1 && arrResult[10] ==\"false\"){\n  arrResult[7] = \"true\";  \n}\nelse{\n  arrResult[7] = \"false\"; \n}\n\nif(arrayGG[0]==1 && arrayGG[1]==0 && arrayGG[2]==0 && arrResult[10] ==\"false\"){\n  arrResult[8] = \"true\";  \n}\nelse{\n  arrResult[8] = \"false\"; \n}\n\n\nreturn arrResult;\n\n",
      "Value": "arrayResult"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[4]}",
      "Value": "XSTATUS_GAWAT_BK"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[10]}",
      "Value": "XSTATUS_GAWAT_BK"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[2]}",
      "Value": "XSTATUS_GAWAT_KECIL"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[9]}",
      "Value": "XSTATUS_GAWAT_GENAP"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[10]}",
      "Value": "XSTATUS_GAWAT_GG"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[5]}",
      "Value": "XRUMUS_KECIL"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[6]}",
      "Value": "XRUMUS_BESAR"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[7]}",
      "Value": "XRUMUS_GENAP"
    },
    {
      "Command": "store",
      "Target": "${ARRAYRESULT[8]}",
      "Value": "XRUMUS_GANJIL"
    },
    {
      "Command": "if_v2",
      "Target": "${XSTATUS_GAWAT_KECIL} ==\"false\"",
      "Value": "CEK GAWAT KECIL"
    },
    {
      "Command": "if_v2",
      "Target": "${XRUMUS_KECIL}==\"true\" && ${BETBK}==\"on\"",
      "Value": "CEK RUMUS KECIL & BETBK"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": "END CEK RUMUS KECIL"
    },
    {
      "Command": "if_v2",
      "Target": "${XRUMUS_BESAR}==\"true\" && ${BETBK}==\"on\"",
      "Value": "CEK RUMUS KECIL & BETBK"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": "END CEK RUMUS BESAR"
    },
    {
      "Command": "if_v2",
      "Target": "${XSTATUS_GAWAT_GG} ==\"false\"",
      "Value": "CEK GAWAT GG"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": "END CEK GG"
    },
    {
      "Command": "end",
      "Target": "",
      "Value": "END CEK GAWAT"
    },
    {
      "Command": "",
      "Target": "",
      "Value": ""
    }
  ]
}