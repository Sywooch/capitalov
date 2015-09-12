<?php

use yii\db\Schema;
use yii\db\Migration;

class m150911_175037_stocks extends Migration
{
    public function up()
    {
        $data = [
            [
                'id'    => "6",
                'value' => '+МосЭнерго',
            ],
            [
                'id'    => "399716",
                'value' => 'AGRO-гдр',
            ],
            [
                'id'    => "152876",
                'value' => 'GTL ао',
            ],
            [
                'id'    => "407494",
                'value' => 'PGIL-ао',
            ],
            [
                'id'    => "175924",
                'value' => 'Polymetal',
            ],
            [
                'id'    => "414279",
                'value' => 'RUSAL plc',
            ],
            [
                'id'    => "388383",
                'value' => 'Yandex clA',
            ],
            [
                'id'    => "181610",
                'value' => 'iQIWI',
            ],
            [
                'id'    => "181867",
                'value' => 'iАЭССЕЛЬао',
            ],
            [
                'id'    => "22843",
                'value' => 'iАвиастКао',
            ],
            [
                'id'    => "82886",
                'value' => 'iВТОРРЕСао',
            ],
            [
                'id'    => "74744",
                'value' => 'iДонскЗР',
            ],
            [
                'id'    => "74745",
                'value' => 'iДонскЗР п',
            ],
            [
                'id'    => "35363",
                'value' => 'iЗаводДИОД',
            ],
            [
                'id'    => "17137",
                'value' => 'iИСКЧ ао',
            ],
            [
                'id'    => "152517",
                'value' => 'iЛевенгук',
            ],
            [
                'id'    => "152676",
                'value' => 'iМультиСис',
            ],
            [
                'id'    => "81992",
                'value' => 'iНПОНаука',
            ],
            [
                'id'    => "81929",
                'value' => 'iНаукаСвяз',
            ],
            [
                'id'    => "66644",
                'value' => 'iРНТ',
            ],
            [
                'id'    => "152677",
                'value' => 'iРоллман',
            ],
            [
                'id'    => "388313",
                'value' => 'iРоллман-п',
            ],
            [
                'id'    => "74584",
                'value' => 'iФармсинтз',
            ],
            [
                'id'    => "83121",
                'value' => 'iЧЗПСН ао',
            ],
            [
                'id'    => "81040",
                'value' => 'iЮтинет.Ру',
            ],
            [
                'id'    => "181310",
                'value' => 'iэнергомаш',
            ],
            [
                'id'    => "39",
                'value' => 'АВТОВАЗ ао',
            ],
            [
                'id'    => "40",
                'value' => 'АВТОВАЗ ап',
            ],
            [
                'id'    => "81820",
                'value' => 'АЛРОСА ао',
            ],
            [
                'id'    => "81882",
                'value' => 'АЛРОСА-Нюр',
            ],
            [
                'id'    => "82460",
                'value' => 'АбрауДюрсо',
            ],
            [
                'id'    => "82843",
                'value' => 'Авангрд-ао',
            ],
            [
                'id'    => "17564",
                'value' => 'Акрон',
            ],
            [
                'id'    => "13855",
                'value' => 'Аптеки36и6',
            ],
            [
                'id'    => "19676",
                'value' => 'Армада',
            ],
            [
                'id'    => "19915",
                'value' => 'Арсагера',
            ],
            [
                'id'    => "16452",
                'value' => 'АстрЭнСб',
            ],
            [
                'id'    => "20702",
                'value' => 'АшинскийМЗ',
            ],
            [
                'id'    => "29",
                'value' => 'Аэрофлот',
            ],
            [
                'id'    => "20066",
                'value' => 'БСП ао',
            ],
            [
                'id'    => "15914",
                'value' => 'БанкМосквы',
            ],
            [
                'id'    => "35242",
                'value' => 'БашИнСв ао',
            ],
            [
                'id'    => "35243",
                'value' => 'БашИнСв ап',
            ],
            [
                'id'    => "81757",
                'value' => 'Башнефт ао',
            ],
            [
                'id'    => "81758",
                'value' => 'Башнефт ап',
            ],
            [
                'id'    => "21078",
                'value' => 'Белон ао',
            ],
            [
                'id'    => "82616",
                'value' => 'БестЭфБ ао',
            ],
            [
                'id'    => "81901",
                'value' => 'БурЗолото',
            ],
            [
                'id'    => "15965",
                'value' => 'ВСМПО-АВСМ',
            ],
            [
                'id'    => "19043",
                'value' => 'ВТБ ао',
            ],
            [
                'id'    => "17257",
                'value' => 'ВХЗ-ао',
            ],
            [
                'id'    => "16352",
                'value' => 'ВЭК 01 ао',
            ],
            [
                'id'    => "81954",
                'value' => 'Варьеган',
            ],
            [
                'id'    => "81955",
                'value' => 'Варьеган-п',
            ],
            [
                'id'    => "17068",
                'value' => 'Возрожд-ао',
            ],
            [
                'id'    => "17067",
                'value' => 'Возрожд-п',
            ],
            [
                'id'    => "16456",
                'value' => 'ВолгЭнСб',
            ],
            [
                'id'    => "16457",
                'value' => 'ВолгЭнСб-п',
            ],
            [
                'id'    => "20958",
                'value' => 'ВостРАО ао',
            ],
            [
                'id'    => "20959",
                'value' => 'ВостРАО ап',
            ],
            [
                'id'    => "83251",
                'value' => 'ВыбСудЗ ао',
            ],
            [
                'id'    => "83252",
                'value' => 'ВыбСудЗ ап',
            ],
            [
                'id'    => "81997",
                'value' => 'ГАЗ ао',
            ],
            [
                'id'    => "81998",
                'value' => 'ГАЗ ап',
            ],
            [
                'id'    => "82115",
                'value' => 'ГАЗ-Тек ао',
            ],
            [
                'id'    => "81399",
                'value' => 'ГАЗ-сервис',
            ],
            [
                'id'    => "81398",
                'value' => 'ГАЗКОН-ао',
            ],
            [
                'id'    => "16842",
                'value' => 'ГАЗПРОМ ао',
            ],
            [
                'id'    => "795",
                'value' => 'ГМКНорНик',
            ],
            [
                'id'    => "509",
                'value' => 'ГУМ',
            ],
            [
                'id'    => "152397",
                'value' => 'ГазпРнД ао',
            ],
            [
                'id'    => "2",
                'value' => 'Газпрнефть',
            ],
            [
                'id'    => "17698",
                'value' => 'Галс-Девел',
            ],
            [
                'id'    => "175842",
                'value' => 'ГлТоргПрод',
            ],
            [
                'id'    => "20708",
                'value' => 'ДВМП ао',
            ],
            [
                'id'    => "18564",
                'value' => 'ДИКСИ ао',
            ],
            [
                'id'    => "19724",
                'value' => 'ДЭК ао',
            ],
            [
                'id'    => "16825",
                'value' => 'ДагСб ао',
            ],
            [
                'id'    => "175840",
                'value' => 'Деликатесы',
            ],
            [
                'id'    => "17919",
                'value' => 'Дорогбж ао',
            ],
            [
                'id'    => "17920",
                'value' => 'Дорогбж ап',
            ],
            [
                'id'    => "419504",
                'value' => 'ЕТС ао',
            ],
            [
                'id'    => "181674",
                'value' => 'Живой Оф',
            ],
            [
                'id'    => "82001",
                'value' => 'ЗВЕЗДА ао',
            ],
            [
                'id'    => "81918",
                'value' => 'ЗИЛ ао',
            ],
            [
                'id'    => "556",
                'value' => 'ЗМЗ-ао',
            ],
            [
                'id'    => "603",
                'value' => 'ЗМЗ-ап',
            ],
            [
                'id'    => "388276",
                'value' => 'ИДЖАТ',
            ],
            [
                'id'    => "81786",
                'value' => 'ИКРУСС-ИНВ',
            ],
            [
                'id'    => "15547",
                'value' => 'ИРКУТ-3',
            ],
            [
                'id'    => "81887",
                'value' => 'Ижсталь ап',
            ],
            [
                'id'    => "81885",
                'value' => 'Ижсталь2ао',
            ],
            [
                'id'    => "81886",
                'value' => 'Ижсталь3ао',
            ],
            [
                'id'    => "409486",
                'value' => 'Инв-Девел',
            ],
            [
                'id'    => "20516",
                'value' => 'ИнтерРАОао',
            ],
            [
                'id'    => "9",
                'value' => 'ИркЭнерго',
            ],
            [
                'id'    => "15544",
                'value' => 'КАМАЗ',
            ],
            [
                'id'    => "17359",
                'value' => 'КЗМС ао',
            ],
            [
                'id'    => "22525",
                'value' => 'КМЗ',
            ],
            [
                'id'    => "16284",
                'value' => 'КСБ ао',
            ],
            [
                'id'    => "16285",
                'value' => 'КСБ ап',
            ],
            [
                'id'    => "81943",
                'value' => 'КУЗОЦМ ао',
            ],
            [
                'id'    => "16329",
                'value' => 'КалужскСК',
            ],
            [
                'id'    => "20030",
                'value' => 'КамчатЭ ао',
            ],
            [
                'id'    => "20498",
                'value' => 'КамчатЭ ап',
            ],
            [
                'id'    => "18310",
                'value' => 'Квадра',
            ],
            [
                'id'    => "18391",
                'value' => 'Квадра-п',
            ],
            [
                'id'    => "75094",
                'value' => 'Кокс ао',
            ],
            [
                'id'    => "20710",
                'value' => 'КоршГОК ао',
            ],
            [
                'id'    => "81903",
                'value' => 'КосогМЗ ао',
            ],
            [
                'id'    => "511",
                'value' => 'КрасОкт-1п',
            ],
            [
                'id'    => "510",
                'value' => 'КрасОкт-ао',
            ],
            [
                'id'    => "15518",
                'value' => 'КраснГЭС',
            ],
            [
                'id'    => "20912",
                'value' => 'Красэсб ао',
            ],
            [
                'id'    => "20913",
                'value' => 'Красэсб ап',
            ],
            [
                'id'    => "66692",
                'value' => 'КубанСт ап',
            ],
            [
                'id'    => "19916",
                'value' => 'КубаньЭнСб',
            ],
            [
                'id'    => "522",
                'value' => 'Кубанэнр',
            ],
            [
                'id'    => "35285",
                'value' => 'КузбТК ао',
            ],
            [
                'id'    => "20204",
                'value' => 'Кузбасэнрг',
            ],
            [
                'id'    => "83165",
                'value' => 'КузнецкийБ',
            ],
            [
                'id'    => "81941",
                'value' => 'Куйбазот',
            ],
            [
                'id'    => "81942",
                'value' => 'Куйбазот-п',
            ],
            [
                'id'    => "83261",
                'value' => 'КурганГКао',
            ],
            [
                'id'    => "152350",
                'value' => 'КурганГКап',
            ],
            [
                'id'    => "19736",
                'value' => 'ЛСР ао',
            ],
            [
                'id'    => "8",
                'value' => 'ЛУКОЙЛ',
            ],
            [
                'id'    => "16276",
                'value' => 'ЛЭСК ао',
            ],
            [
                'id'    => "22094",
                'value' => 'Лензол. ап',
            ],
            [
                'id'    => "21004",
                'value' => 'Лензолото',
            ],
            [
                'id'    => "385792",
                'value' => 'Лента др',
            ],
            [
                'id'    => "542",
                'value' => 'Ленэнерг-п',
            ],
            [
                'id'    => "31",
                'value' => 'Ленэнерго',
            ],
            [
                'id'    => "19737",
                'value' => 'М.видео',
            ],
            [
                'id'    => "12983",
                'value' => 'МГТС-4ап',
            ],
            [
                'id'    => "12984",
                'value' => 'МГТС-5ао',
            ],
            [
                'id'    => "20947",
                'value' => 'МЕРИДИАН',
            ],
            [
                'id'    => "420694",
                'value' => 'МКБ ао',
            ],
            [
                'id'    => "16782",
                'value' => 'ММК',
            ],
            [
                'id'    => "80390",
                'value' => 'МН-фонд ао',
            ],
            [
                'id'    => "16917",
                'value' => 'МОЭСК',
            ],
            [
                'id'    => "20309",
                'value' => 'МРСК СЗ',
            ],
            [
                'id'    => "20412",
                'value' => 'МРСК СК',
            ],
            [
                'id'    => "20402",
                'value' => 'МРСК Ур',
            ],
            [
                'id'    => "20107",
                'value' => 'МРСК ЦП',
            ],
            [
                'id'    => "20235",
                'value' => 'МРСК Центр',
            ],
            [
                'id'    => "20286",
                'value' => 'МРСКВол',
            ],
            [
                'id'    => "20346",
                'value' => 'МРСКСиб',
            ],
            [
                'id'    => "20681",
                'value' => 'МРСКЮга ао',
            ],
            [
                'id'    => "15523",
                'value' => 'МТС-ао',
            ],
            [
                'id'    => "74562",
                'value' => 'МагадЭн ао',
            ],
            [
                'id'    => "74563",
                'value' => 'МагадЭн ап',
            ],
            [
                'id'    => "17086",
                'value' => 'Магнит ао',
            ],
            [
                'id'    => "16331",
                'value' => 'МариЭнСб-п',
            ],
            [
                'id'    => "81907",
                'value' => 'МашЗавод',
            ],
            [
                'id'    => "152516",
                'value' => 'МегаФон ао',
            ],
            [
                'id'    => "30",
                'value' => 'Мегион-ао',
            ],
            [
                'id'    => "51",
                'value' => 'Мегион-ап',
            ],
            [
                'id'    => "81829",
                'value' => 'МедиаВиМ',
            ],
            [
                'id'    => "20737",
                'value' => 'Медиахолд',
            ],
            [
                'id'    => "21018",
                'value' => 'Мечел ао',
            ],
            [
                'id'    => "80745",
                'value' => 'Мечел ап',
            ],
            [
                'id'    => "16359",
                'value' => 'МордЭнСб',
            ],
            [
                'id'    => "81944",
                'value' => 'Морион ао',
            ],
            [
                'id'    => "152798",
                'value' => 'МосБиржа',
            ],
            [
                'id'    => "82890",
                'value' => 'МосОблБанк',
            ],
            [
                'id'    => "16933",
                'value' => 'МосЭС ао',
            ],
            [
                'id'    => "74549",
                'value' => 'Мостотрест',
            ],
            [
                'id'    => "21116",
                'value' => 'Мотовил ао',
            ],
            [
                'id'    => "81945",
                'value' => 'МурмТЭЦ-ао',
            ],
            [
                'id'    => "81946",
                'value' => 'МурмТЭЦ-п',
            ],
            [
                'id'    => "20100",
                'value' => 'НКНХ ао',
            ],
            [
                'id'    => "20101",
                'value' => 'НКНХ ап',
            ],
            [
                'id'    => "17046",
                'value' => 'НЛМК ао',
            ],
            [
                'id'    => "19629",
                'value' => 'НМТП ао',
            ],
            [
                'id'    => "81287",
                'value' => 'Нефтекамск',
            ],
            [
                'id'    => "81947",
                'value' => 'Нижкамшина',
            ],
            [
                'id'    => "17370",
                'value' => 'Новатэк ао',
            ],
            [
                'id'    => "66694",
                'value' => 'Новопл ап',
            ],
            [
                'id'    => "20893",
                'value' => 'Новсибэн',
            ],
            [
                'id'    => "81948",
                'value' => 'Новсибэн-п',
            ],
            [
                'id'    => "414560",
                'value' => 'ОВК ао',
            ],
            [
                'id'    => "18684",
                'value' => 'ОГК-2 ао',
            ],
            [
                'id'    => "175781",
                'value' => 'ОКС ао',
            ],
            [
                'id'    => "15844",
                'value' => 'ОМЗ-ап',
            ],
            [
                'id'    => "21006",
                'value' => 'ОМПК ао',
            ],
            [
                'id'    => "20711",
                'value' => 'ОПИН ао',
            ],
            [
                'id'    => "22891",
                'value' => 'Омскшина',
            ],
            [
                'id'    => "81856",
                'value' => 'ОргСинт ао',
            ],
            [
                'id'    => "81857",
                'value' => 'ОргСинт ап',
            ],
            [
                'id'    => "407627",
                'value' => 'Отисифарм',
            ],
            [
                'id'    => "80728",
                'value' => 'ОткрФКБ ао',
            ],
            [
                'id'    => "18654",
                'value' => 'ПИК ао',
            ],
            [
                'id'    => "17850",
                'value' => 'ПМП ао',
            ],
            [
                'id'    => "35247",
                'value' => 'ПРОТЕК ао',
            ],
            [
                'id'    => "81896",
                'value' => 'ПавлАвт ао',
            ],
            [
                'id'    => "16909",
                'value' => 'ПермьЭнС-п',
            ],
            [
                'id'    => "16908",
                'value' => 'ПермьЭнСб',
            ],
            [
                'id'    => "81241",
                'value' => 'Плазмек',
            ],
            [
                'id'    => "17123",
                'value' => 'ПолюсЗолот',
            ],
            [
                'id'    => "80818",
                'value' => 'Приморье',
            ],
            [
                'id'    => "22806",
                'value' => 'ПроектИ ао',
            ],
            [
                'id'    => "152320",
                'value' => 'Промсвб ао',
            ],
            [
                'id'    => "74779",
                'value' => 'РБК ао',
            ],
            [
                'id'    => "181934",
                'value' => 'РГС ао',
            ],
            [
                'id'    => "181755",
                'value' => 'РДБанк ао',
            ],
            [
                'id'    => "20637",
                'value' => 'РОСИНТЕРао',
            ],
            [
                'id'    => "16610",
                'value' => 'Разгуляй',
            ],
            [
                'id'    => "17713",
                'value' => 'Распадская',
            ],
            [
                'id'    => "35248",
                'value' => 'РегБР ао',
            ],
            [
                'id'    => "66693",
                'value' => 'Родина ап',
            ],
            [
                'id'    => "16866",
                'value' => 'Росбанк ао',
            ],
            [
                'id'    => "17273",
                'value' => 'Роснефть',
            ],
            [
                'id'    => "20971",
                'value' => 'Россети ао',
            ],
            [
                'id'    => "20972",
                'value' => 'Россети ап',
            ],
            [
                'id'    => "7",
                'value' => 'Ростел -ао',
            ],
            [
                'id'    => "15",
                'value' => 'Ростел -ап',
            ],
            [
                'id'    => "35238",
                'value' => 'РусАква ао',
            ],
            [
                'id'    => "20266",
                'value' => 'РусГидро',
            ],
            [
                'id'    => "74718",
                'value' => 'Русал рдр',
            ],
            [
                'id'    => "66893",
                'value' => 'Русгрэйн',
            ],
            [
                'id'    => "181316",
                'value' => 'Русолово',
            ],
            [
                'id'    => "20712",
                'value' => 'Русполимет',
            ],
            [
                'id'    => "16455",
                'value' => 'РязЭнСб',
            ],
            [
                'id'    => "22401",
                'value' => 'СЗПароход',
            ],
            [
                'id'    => "20892",
                'value' => 'СМЗ-ао',
            ],
            [
                'id'    => "16080",
                'value' => 'СОЛЛЕРС',
            ],
            [
                'id'    => "445",
                'value' => 'СамарЭн-ао',
            ],
            [
                'id'    => "70",
                'value' => 'СамарЭн-ап',
            ],
            [
                'id'    => "81891",
                'value' => 'СаратНПЗ',
            ],
            [
                'id'    => "81892",
                'value' => 'СаратНПЗ-п',
            ],
            [
                'id'    => "11",
                'value' => 'СаратЭн-ао',
            ],
            [
                'id'    => "24",
                'value' => 'СаратЭн-ап',
            ],
            [
                'id'    => "3",
                'value' => 'Сбербанк',
            ],
            [
                'id'    => "23",
                'value' => 'Сбербанк-п',
            ],
            [
                'id'    => "16136",
                'value' => 'СевСт-ао',
            ],
            [
                'id'    => "21166",
                'value' => 'Селестра',
            ],
            [
                'id'    => "81360",
                'value' => 'Селигдар',
            ],
            [
                'id'    => "82610",
                'value' => 'Селигдар-п',
            ],
            [
                'id'    => "436091",
                'value' => 'СибГост ао',
            ],
            [
                'id'    => "19651",
                'value' => 'Синерг. ао',
            ],
            [
                'id'    => "19715",
                'value' => 'Система ао',
            ],
            [
                'id'    => "83122",
                'value' => 'СкайКо-ао',
            ],
            [
                'id'    => "15723",
                'value' => 'Слав-ЯНОСп',
            ],
            [
                'id'    => "15722",
                'value' => 'Славн-ЯНОС',
            ],
            [
                'id'    => "20087",
                'value' => 'СтаврЭнСб',
            ],
            [
                'id'    => "20088",
                'value' => 'СтаврЭнСбп',
            ],
            [
                'id'    => "4",
                'value' => 'Сургнфгз',
            ],
            [
                'id'    => "13",
                'value' => 'Сургнфгз-п',
            ],
            [
                'id'    => "81914",
                'value' => 'ТАНТАЛ ао',
            ],
            [
                'id'    => "81915",
                'value' => 'ТАНТАЛ ап',
            ],
            [
                'id'    => "18382",
                'value' => 'ТГК-1',
            ],
            [
                'id'    => "18176",
                'value' => 'ТГК-14',
            ],
            [
                'id'    => "17597",
                'value' => 'ТГК-2',
            ],
            [
                'id'    => "18189",
                'value' => 'ТГК-2 ап',
            ],
            [
                'id'    => "20716",
                'value' => 'ТЗА ао',
            ],
            [
                'id'    => "81899",
                'value' => 'ТКЗ ао',
            ],
            [
                'id'    => "81905",
                'value' => 'ТКЗКК ао',
            ],
            [
                'id'    => "81906",
                'value' => 'ТКЗКК ап',
            ],
            [
                'id'    => "74746",
                'value' => 'ТКСМ ао',
            ],
            [
                'id'    => "18441",
                'value' => 'ТМК ао',
            ],
            [
                'id'    => "16547",
                'value' => 'ТНСэнВор-п',
            ],
            [
                'id'    => "16546",
                'value' => 'ТНСэнВорон',
            ],
            [
                'id'    => "16330",
                'value' => 'ТНСэнМарЭл',
            ],
            [
                'id'    => "16615",
                'value' => 'ТНСэнНН ао',
            ],
            [
                'id'    => "16616",
                'value' => 'ТНСэнНН ап',
            ],
            [
                'id'    => "16783",
                'value' => 'ТНСэнРст',
            ],
            [
                'id'    => "16784",
                'value' => 'ТНСэнРст-п',
            ],
            [
                'id'    => "16342",
                'value' => 'ТНСэнЯр',
            ],
            [
                'id'    => "16343",
                'value' => 'ТНСэнЯр-п',
            ],
            [
                'id'    => "420644",
                'value' => 'ТНСэнрг ао',
            ],
            [
                'id'    => "19632",
                'value' => 'ТПлюс ао',
            ],
            [
                'id'    => "80593",
                'value' => 'ТРАНСАЭРао',
            ],
            [
                'id'    => "388314",
                'value' => 'ТФК-Финанс',
            ],
            [
                'id'    => "16265",
                'value' => 'ТамбЭнСб',
            ],
            [
                'id'    => "16266",
                'value' => 'ТамбЭнСб-п',
            ],
            [
                'id'    => "825",
                'value' => 'Татнфт 3ао',
            ],
            [
                'id'    => "826",
                'value' => 'Татнфт 3ап',
            ],
            [
                'id'    => "18371",
                'value' => 'Таттел. ао',
            ],
            [
                'id'    => "21002",
                'value' => 'Телеграф',
            ],
            [
                'id'    => "81575",
                'value' => 'Телеграф-п',
            ],
            [
                'id'    => "16797",
                'value' => 'ТомскРП ао',
            ],
            [
                'id'    => "16798",
                'value' => 'ТомскРП ап',
            ],
            [
                'id'    => "74561",
                'value' => 'ТрансК ао',
            ],
            [
                'id'    => "1012",
                'value' => 'Транснф ап',
            ],
            [
                'id'    => "82165",
                'value' => 'Труд ап',
            ],
            [
                'id'    => "75124",
                'value' => 'УКОРФ ао',
            ],
            [
                'id'    => "82611",
                'value' => 'УрКузница',
            ],
            [
                'id'    => "81953",
                'value' => 'УралСиб ао',
            ],
            [
                'id'    => "19623",
                'value' => 'Уркалий-ао',
            ],
            [
                'id'    => "20509",
                'value' => 'ФСК ЕЭС ао',
            ],
            [
                'id'    => "19717",
                'value' => 'Фармстанд',
            ],
            [
                'id'    => "81858",
                'value' => 'Физика ао',
            ],
            [
                'id'    => "82164",
                'value' => 'Форт ап',
            ],
            [
                'id'    => "81114",
                'value' => 'ФосАгро ао',
            ],
            [
                'id'    => "414302",
                'value' => 'ХМБОткр ао',
            ],
            [
                'id'    => "81939",
                'value' => 'Химпром ао',
            ],
            [
                'id'    => "81940",
                'value' => 'Химпром ап',
            ],
            [
                'id'    => "19095",
                'value' => 'ЦМТ ао',
            ],
            [
                'id'    => "19096",
                'value' => 'ЦМТ ап',
            ],
            [
                'id'    => "21000",
                'value' => 'ЧКПЗ ао',
            ],
            [
                'id'    => "21001",
                'value' => 'ЧМК ао',
            ],
            [
                'id'    => "20999",
                'value' => 'ЧТПЗ ао',
            ],
            [
                'id'    => "19960",
                'value' => 'ЧЦЗ ао',
            ],
            [
                'id'    => "16712",
                'value' => 'ЧелябЭС ао',
            ],
            [
                'id'    => "16713",
                'value' => 'ЧелябЭС ап',
            ],
            [
                'id'    => "20125",
                'value' => 'ЧеркизГ-ао',
            ],
            [
                'id'    => "81933",
                'value' => 'ЧерногНефт',
            ],
            [
                'id'    => "18584",
                'value' => 'Э.ОНРоссия',
            ],
            [
                'id'    => "81935",
                'value' => 'ЭРКО ао',
            ],
            [
                'id'    => "81934",
                'value' => 'Электрцинк',
            ],
            [
                'id'    => "16440",
                'value' => 'ЭнелРос ао',
            ],
            [
                'id'    => "20321",
                'value' => 'ЭнергияРКК',
            ],
            [
                'id'    => "15522",
                'value' => 'ЮТэйр ао',
            ],
            [
                'id'    => "82493",
                'value' => 'ЮУНК ао',
            ],
            [
                'id'    => "20717",
                'value' => 'ЮжКузб. ао',
            ],
            [
                'id'    => "15736",
                'value' => 'ЯРОСЛАВИЧ',
            ],
            [
                'id'    => "81917",
                'value' => 'ЯТЭК ао',
            ],
            [
                'id'    => "81769",
                'value' => 'Якутскэн-п',
            ],
            [
                'id'    => "81766",
                'value' => 'Якутскэнрг',
            ],
            [
                'id'    => "80316",
                'value' => 'ЯрШинЗ ао',
            ],
        ];
        $finam_em_array = \app\models\Stock::query()->select(['finam_em'])->column();
        $new = [];
        foreach($data as $item) {
            if (!in_array($item['id'], $finam_em_array)) {
                $new[] = [
                    1,
                    $item['id'],
                    $item['value']
                ];
            }
        }
        $this->batchInsert(\app\models\Stock::TABLE, [
            'finam_market',
            'finam_em',
            'name',
        ], $new);
    }

    public function down()
    {
        echo "m150911_175037_stocks cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
