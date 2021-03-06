<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:run';

    protected $description = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $regions["Київ"][] = "Київ";
        $regions["Харківська область"][] = "Харків";
        $regions["Одеська область"][] = "Одеса";
        $regions["Дніпропетровська область"][] = "Дніпро";
        $regions["Донецька область"][] = "Донецьк";
        $regions["Запорізька область"][] = "Запоріжжя";
        $regions["Львівська область"][] = "Львів";
        $regions["Дніпропетровська область"][] = "Кривий Ріг";
        $regions["Миколаївська область"][] = "Миколаїв";
        $regions["Донецька область"][] = "Маріуполь";
        $regions["Севастополь"][] = "Севастополь";
        $regions["Луганська область"][] = "Луганськ";
        $regions["Вінницька область"][] = "Вінниця";
        $regions["АР Крим"][] = "Сімферополь";
        $regions["Донецька область"][] = "Макіївка";
        $regions["Херсонська область"][] = "Херсон";
        $regions["Чернігівська область"][] = "Чернігів";
        $regions["Полтавська область"][] = "Полтава";
        $regions["Черкаська область"][] = "Черкаси";
        $regions["Хмельницька область"][] = "Хмельницький";
        $regions["Чернівецька область"][] = "Чернівці";
        $regions["Житомирська область"][] = "Житомир";
        $regions["Сумська область"][] = "Суми";
        $regions["Рівненська область"][] = "Рівне";
        $regions["Донецька область"][] = "Горлівка";
        $regions["Івано-Франківська область"][] = "Івано-Франківськ";
        $regions["Дніпропетровська область"][] = "Кам'янське";
        $regions["Кіровоградська область"][] = "Кропивницький";
        $regions["Тернопільська область"][] = "Тернопіль";
        $regions["Полтавська область"][] = "Кременчук";
        $regions["Волинська область"][] = "Луцьк";
        $regions["Київська область"][] = "Біла Церква";
        $regions["Донецька область"][] = "Краматорськ";
        $regions["Запорізька область"][] = "Мелітополь";
        $regions["АР Крим"][] = "Керч";
        $regions["Закарпатська область"][] = "Ужгород";
        $regions["Запорізька область"][] = "Бердянськ";
        $regions["Дніпропетровська область"][] = "Нікополь";
        $regions["Донецька область"][] = "Слов'янськ";
        $regions["Київська область"][] = "Бровари";
        $regions["АР Крим"][] = "Євпаторія";
        $regions["Луганська область"][] = "Алчевськ";
        $regions["Дніпропетровська область"][] = "Павлоград";
        $regions["Луганська область"][] = "Сєвєродонецьк";
        $regions["Хмельницька область"][] = "Кам'янець-Подільський";
        $regions["Луганська область"][] = "Лисичанськ";
        $regions["Закарпатська область"][] = "Мукачево";
        $regions["Сумська область"][] = "Конотоп";
        $regions["Черкаська область"][] = "Умань";
        $regions["Луганська область"][] = "Хрустальний";
        $regions["АР Крим"][] = "Ялта";
        $regions["Кіровоградська область"][] = "Олександрія";
        $regions["Донецька область"][] = "Єнакієве";
        $regions["Львівська область"][] = "Дрогобич";
        $regions["Житомирська область"][] = "Бердичів";
        $regions["Сумська область"][] = "Шостка";
        $regions["Луганська область"][] = "Кадіївка";
        $regions["Донецька область"][] = "Бахмут";
        $regions["Одеська область"][] = "Ізмаїл";
        $regions["Дніпропетровська область"][] = "Новомосковськ";
        $regions["Донецька область"][] = "Костянтинівка";
        $regions["Волинська область"][] = "Ковель";
        $regions["Чернігівська область"][] = "Ніжин";
        $regions["АР Крим"][] = "Феодосія";
        $regions["Черкаська область"][] = "Сміла";
        $regions["Івано-Франківська область"][] = "Калуш";
        $regions["Львівська область"][] = "Червоноград";
        $regions["Миколаївська область"][] = "Первомайськ";
        $regions["Луганська область"][] = "Довжанськ";
        $regions["Київська область"][] = "Бориспіль";
        $regions["Житомирська область"][] = "Коростень";
        $regions["Донецька область"][] = "Покровськ";
        $regions["Івано-Франківська область"][] = "Коломия";
        $regions["Київська область"][] = "Ірпінь";
        $regions["Львівська область"][] = "Стрий";
        $regions["Одеська область"][] = "Чорноморськ";
        $regions["Луганська область"][] = "Рубіжне";
        $regions["Донецька область"][] = "Харцизьк";
        $regions["Донецька область"][] = "Дружківка";
        $regions["Житомирська область"][] = "Новоград-Волинський";
        $regions["Харківська область"][] = "Лозова";
        $regions["Донецька область"][] = "Чистякове";
        $regions["Чернігівська область"][] = "Прилуки";
        $regions["Запорізька область"][] = "Енергодар";
        $regions["Луганська область"][] = "Антрацит";
        $regions["Волинська область"][] = "Нововолинськ";
        $regions["Полтавська область"][] = "Горішні Плавні";
        $regions["Одеська область"][] = "Білгород-Дністровський";
        $regions["Донецька область"][] = "Шахтарськ";
        $regions["Сумська область"][] = "Охтирка";
        $regions["Донецька область"][] = "Мирноград";
        $regions["Харківська область"][] = "Ізюм";
        $regions["Дніпропетровська область"][] = "Марганець";
        $regions["Донецька область"][] = "Сніжне";
        $regions["Луганська область"][] = "Ровеньки";
        $regions["Херсонська область"][] = "Нова Каховка";
        $regions["Київська область"][] = "Фастів";
        $regions["Луганська область"][] = "Брянка";
        $regions["Полтавська область"][] = "Лубни";
        $regions["Кіровоградська область"][] = "Світловодськ";
        $regions["Дніпропетровська область"][] = "Жовті Води";
        $regions["Луганська область"][] = "Сорокине";
        $regions["Рівненська область"][] = "Вараш";
        $regions["Київська область"][] = "Вишневе";
        $regions["Хмельницька область"][] = "Шепетівка";
        $regions["Одеська область"][] = "Подільськ";
        $regions["Миколаївська область"][] = "Южноукраїнськ";
        $regions["Полтавська область"][] = "Миргород";
        $regions["Сумська область"][] = "Ромни";
        $regions["Дніпропетровська область"][] = "Покров";
        $regions["Волинська область"][] = "Володимир";
        $regions["АР Крим"][] = "Джанкой";
        $regions["Київська область"][] = "Васильків";
        $regions["Рівненська область"][] = "Дубно";
        $regions["Хмельницька область"][] = "Нетішин";
        $regions["Луганська область"][] = "Первомайськ";
        $regions["Київська область"][] = "Буча";
        $regions["Херсонська область"][] = "Каховка";
        $regions["Київська область"][] = "Боярка";
        $regions["Хмельницька область"][] = "Славута";
        $regions["Львівська область"][] = "Самбір";
        $regions["Хмельницька область"][] = "Старокостянтинів";
        $regions["Миколаївська область"][] = "Вознесенськ";
        $regions["Донецька область"][] = "Ясинувата";
        $regions["Вінницька область"][] = "Жмеринка";
        $regions["Київська область"][] = "Обухів";
        $regions["Львівська область"][] = "Борислав";
        $regions["Одеська область"][] = "Южне";
        $regions["Сумська область"][] = "Глухів";
        $regions["Донецька область"][] = "Авдіївка";
        $regions["Донецька область"][] = "Торецьк";
        $regions["Харківська область"][] = "Чугуїв";
        $regions["Львівська область"][] = "Новояворівськ";
        $regions["Рівненська область"][] = "Костопіль";
        $regions["Київська область"][] = "Вишгород";
        $regions["Запорізька область"][] = "Токмак";
        $regions["Вінницька область"][] = "Могилів-Подільський";
        $regions["Дніпропетровська область"][] = "Синельникове";
        $regions["АР Крим"][] = "Алушта";
        $regions["Харківська область"][] = "Первомайський";
        $regions["Донецька область"][] = "Добропілля";
        $regions["Рівненська область"][] = "Сарни";
        $regions["Тернопільська область"][] = "Чортків";
        $regions["Львівська область"][] = "Трускавець";
        $regions["Закарпатська область"][] = "Хуст";
        $regions["Львівська область"][] = "Новий Розділ";
        $regions["Дніпропетровська область"][] = "Першотравенськ";
        $regions["Черкаська область"][] = "Золотоноша";
        $regions["Дніпропетровська область"][] = "Тернівка";
        $regions["Харківська область"][] = "Куп'янськ";
        $regions["Донецька область"][] = "Хрестівка";
        $regions["Вінницька область"][] = "Хмільник";
        $regions["Харківська область"][] = "Балаклія";
        $regions["Луганська область"][] = "Голубівка";
        $regions["Київська область"][] = "Переяслав";
        $regions["АР Крим"][] = "Бахчисарай";
        $regions["Житомирська область"][] = "Малин";
        $regions["Вінницька область"][] = "Гайсин";
        $regions["Закарпатська область"][] = "Виноградів";
        $regions["Луганська область"][] = "Перевальськ";
        $regions["АР Крим"][] = "Красноперекопськ";
        $regions["Житомирська область"][] = "Коростишів";
        $regions["Рівненська область"][] = "Здолбунів";
        $regions["Київська область"][] = "Славутич";
        $regions["АР Крим"][] = "Саки";
        $regions["Сумська область"][] = "Лебедин";
        $regions["Херсонська область"][] = "Олешки";
        $regions["Донецька область"][] = "Дебальцеве";
        $regions["Львівська область"][] = "Золочів";
        $regions["Черкаська область"][] = "Канів";
        $regions["Закарпатська область"][] = "Берегове";
        $regions["Львівська область"][] = "Броди";
        $regions["Полтавська область"][] = "Гадяч";
        $regions["Донецька область"][] = "Докучаєвськ";
        $regions["Вінницька область"][] = "Козятин";
        $regions["Дніпропетровська область"][] = "Вільногірськ";
        $regions["Сумська область"][] = "Кролевець";
        $regions["Вінницька область"][] = "Ладижин";
        $regions["Луганська область"][] = "Молодогвардійськ";
        $regions["Івано-Франківська область"][] = "Надвірна";
        $regions["Донецька область"][] = "Селидове";
        $regions["Кіровоградська область"][] = "Знам'янка";
        $regions["Донецька область"][] = "Волноваха";
        $regions["Харківська область"][] = "Мерефа";
        $regions["АР Крим"][] = "Армянськ";
        $regions["Львівська область"][] = "Сокаль";
        $regions["Тернопільська область"][] = "Кременець";
        $regions["Донецька область"][] = "Лиман";
        $regions["Івано-Франківська область"][] = "Долина";
        $regions["Харківська область"][] = "Люботин";
        $regions["Хмельницька область"][] = "Полонне";
        $regions["Луганська область"][] = "Суходільськ";
        $regions["Львівська область"][] = "Стебник";
        $regions["Харківська область"][] = "Красноград";
        $regions["Сумська область"][] = "Тростянець";
        $regions["Луганська область"][] = "Попасна";
        $regions["Дніпропетровська область"][] = "Підгородне";
        $regions["Херсонська область"][] = "Генічеськ";
        $regions["Київська область"][] = "Яготин";
        $regions["Одеська область"][] = "Кілія";
        $regions["Вінницька область"][] = "Калинівка";
        $regions["Донецька область"][] = "Курахове";
        $regions["Хмельницька область"][] = "Красилів";
        $regions["Запорізька область"][] = "Пологи";
        $regions["Кіровоградська область"][] = "Долинська";
        $regions["Дніпропетровська область"][] = "П'ятихатки";
        $regions["Луганська область"][] = "Кремінна";
        $regions["Хмельницька область"][] = "Волочиськ";
        $regions["Одеська область"][] = "Рені";
        $regions["Одеська область"][] = "Балта";
        $regions["Запорізька область"][] = "Дніпрорудне";
        $regions["Львівська область"][] = "Винники";
        $regions["Донецька область"][] = "Амвросіївка";
        $regions["Донецька область"][] = "Зугрес";
        $regions["Харківська область"][] = "Вовчанськ";
        $regions["Одеська область"][] = "Роздільна";
        $regions["Харківська область"][] = "Дергачі";
        $regions["Херсонська область"][] = "Скадовськ";
        $regions["Черкаська область"][] = "Корсунь-Шевченківський";
        $regions["Тернопільська область"][] = "Бережани";
        $regions["Чернігівська область"][] = "Бахмач";
        $regions["Луганська область"][] = "Лутугине";
        $regions["Закарпатська область"][] = "Свалява";
        $regions["Луганська область"][] = "Сватове";
        $regions["Луганська область"][] = "Старобільськ";
        $regions["Черкаська область"][] = "Звенигородка";
        $regions["Черкаська область"][] = "Шпола";
        $regions["Кіровоградська область"][] = "Новоукраїнка";
        $regions["АР Крим"][] = "Судак";
        $regions["АР Крим"][] = "Білогірськ";
        $regions["Київська область"][] = "Березань";
        $regions["Хмельницька область"][] = "Ізяслав";
        $regions["Київська область"][] = "Українка";
        $regions["Черкаська область"][] = "Ватутіне";
        $regions["Київська область"][] = "Богуслав";
        $regions["Хмельницька область"][] = "Городок";
        $regions["Сумська область"][] = "Білопілля";
        $regions["Львівська область"][] = "Городок";
        $regions["Дніпропетровська область"][] = "Верхньодніпровськ";
        $regions["Хмельницька область"][] = "Дунаївці";
        $regions["Вінницька область"][] = "Бар";
        $regions["Київська область"][] = "Сквира";
        $regions["Закарпатська область"][] = "Рахів";
        $regions["Житомирська область"][] = "Овруч";
        $regions["Донецька область"][] = "Іловайськ";
        $regions["Рівненська область"][] = "Острог";
        $regions["Луганська область"][] = "Вознесенівка";
        $regions["Сумська область"][] = "Путивль";
        $regions["Полтавська область"][] = "Пирятин";
        $regions["Миколаївська область"][] = "Новий Буг";
        $regions["Донецька область"][] = "Білозерське";
        $regions["Одеська область"][] = "Болград";
        $regions["Донецька область"][] = "Красногорівка";
        $regions["Харківська область"][] = "Богодухів";
        $regions["Івано-Франківська область"][] = "Бурштин";
        $regions["Вінницька область"][] = "Тульчин";
        $regions["Запорізька область"][] = "Вільнянськ";
        $regions["Львівська область"][] = "Миколаїв";
        $regions["Одеська область"][] = "Арциз";
        $regions["Донецька область"][] = "Вугледар";
        $regions["Донецька область"][] = "Миколаївка";
        $regions["Донецька область"][] = "Новогродівка";
        $regions["Кіровоградська область"][] = "Гайворон";
        $regions["Полтавська область"][] = "Карлівка";
        $regions["Запорізька область"][] = "Оріхів";
        $regions["Харківська область"][] = "Зміїв";
        $regions["Чернівецька область"][] = "Сторожинець";
        $regions["Житомирська область"][] = "Радомишль";
        $regions["Миколаївська область"][] = "Очаків";
        $regions["Волинська область"][] = "Ківерці";
        $regions["Херсонська область"][] = "Гола Пристань";
        $regions["Львівська область"][] = "Жовква";
        $regions["Тернопільська область"][] = "Збараж";
        $regions["Донецька область"][] = "Бунге";
        $regions["Київська область"][] = "Кагарлик";
        $regions["Дніпропетровська область"][] = "Апостолове";
        $regions["Черкаська область"][] = "Жашків";
        $regions["Черкаська область"][] = "Городище";
        $regions["Луганська область"][] = "Золоте";
        $regions["Тернопільська область"][] = "Теребовля";
        $regions["Чернігівська область"][] = "Носівка";
        $regions["Рівненська область"][] = "Березне";
        $regions["Запорізька область"][] = "Гуляйполе";
        $regions["Черкаська область"][] = "Тальне";
        $regions["Дніпропетровська область"][] = "Зеленодольськ";
        $regions["Запорізька область"][] = "Василівка";
        $regions["Львівська область"][] = "Яворів";
        $regions["Чернігівська область"][] = "Новгород-Сіверський";
        $regions["Київська область"][] = "Тетіїв";
        $regions["Полтавська область"][] = "Хорол";
        $regions["Донецька область"][] = "Часів Яр";
        $regions["Луганська область"][] = "Петрово-Красносілля";
        $regions["Волинська область"][] = "Рожище";
        $regions["Чернігівська область"][] = "Корюківка";
        $regions["Одеська область"][] = "Біляївка";
        $regions["Волинська область"][] = "Камінь-Каширський";
        $regions["Запорізька область"][] = "Кам'янка-Дніпровська";
        $regions["Миколаївська область"][] = "Баштанка";
        $regions["Миколаївська область"][] = "Снігурівка";
        $regions["Тернопільська область"][] = "Бучач";
        $regions["Вінницька область"][] = "Гнівань";
        $regions["Херсонська область"][] = "Берислав";
        $regions["Вінницька область"][] = "Бершадь";
        $regions["Київська область"][] = "Узин";
        $regions["Донецька область"][] = "Жданівка";
        $regions["Чернігівська область"][] = "Городня";
        $regions["Луганська область"][] = "Щастя";
        $regions["Миколаївська область"][] = "Нова Одеса";
        $regions["Вінницька область"][] = "Немирів";
        $regions["Запорізька область"][] = "Приморськ";
        $regions["Житомирська область"][] = "Баранівка";
        $regions["Луганська область"][] = "Боково-Хрустальне";
        $regions["Донецька область"][] = "Кальміуське";
        $regions["Донецька область"][] = "Світлодарськ";
        $regions["Київська область"][] = "Миронівка";
        $regions["Черкаська область"][] = "Кам'янка";
        $regions["Полтавська область"][] = "Лохвиця";
        $regions["Чернігівська область"][] = "Мена";
        $regions["Донецька область"][] = "Сіверськ";
        $regions["Вінницька область"][] = "Іллінці";
        $regions["Донецька область"][] = "Новоазовськ";
        $regions["Донецька область"][] = "Українськ";
        $regions["Кіровоградська область"][] = "Новомиргород";
        $regions["Львівська область"][] = "Соснівка";
        $regions["Одеська область"][] = "Татарбунари";
        $regions["Чернігівська область"][] = "Сновськ";
        $regions["Чернігівська область"][] = "Бобровиця";
        $regions["Вінницька область"][] = "Ямпіль";
        $regions["Донецька область"][] = "Соледар";
        $regions["Тернопільська область"][] = "Борщів";
        $regions["Донецька область"][] = "Гірник";
        $regions["Чернігівська область"][] = "Ічня";
        $regions["Полтавська область"][] = "Гребінка";
        $regions["Львівська область"][] = "Жидачів";
        $regions["Кіровоградська область"][] = "Бобринець";
        $regions["Львівська область"][] = "Кам`янка-Бузька";
        $regions["Чернівецька область"][] = "Новодністровськ";
        $regions["Донецька область"][] = "Моспине";
        $regions["Рівненська область"][] = "Радивилів";
        $regions["Волинська область"][] = "Любомль";
        $regions["Івано-Франківська область"][] = "Болехів";
        $regions["Херсонська область"][] = "Таврійськ";
        $regions["Житомирська область"][] = "Олевськ";
        $regions["Кіровоградська область"][] = "Мала Виска";
        $regions["Черкаська область"][] = "Христинівка";
        $regions["АР Крим"][] = "Щолкіне";
        $regions["Дніпропетровська область"][] = "Верхівцеве";
        $regions["Одеська область"][] = "Теплодар";
        $regions["Донецька область"][] = "Родинське";
        $regions["м. Севастополь"][] = "Інкерман";
        $regions["Київська область"][] = "Тараща";
        $regions["Хмельницька область"][] = "Деражня";
        $regions["Івано-Франківська область"][] = "Снятин";
        $regions["Львівська область"][] = "Дубляни";
        $regions["Дніпропетровська область"][] = "Перещепине";
        $regions["Чернігівська область"][] = "Борзна";
        $regions["Львівська область"][] = "Радехів";
        $regions["Полтавська область"][] = "Кобеляки";
        $regions["Луганська область"][] = "Зимогір`я";
        $regions["Одеська область"][] = "Березівка";
        $regions["Вінницька область"][] = "Погребище";
        $regions["АР Крим"][] = "Старий Крим";
        $regions["Луганська область"][] = "Гірське";
        $regions["Львівська область"][] = "Пустомити";
        $regions["Львівська область"][] = "Мостиська";
        $regions["Рівненська область"][] = "Дубровиця";
        $regions["Луганська область"][] = "Ірміно";
        $regions["Полтавська область"][] = "Зіньків";
        $regions["Донецька область"][] = "Мар'їнка";
        $regions["Закарпатська область"][] = "Іршава";
        $regions["Львівська область"][] = "Ходорів";
        $regions["Полтавська область"][] = "Глобине";
        $regions["Полтавська область"][] = "Решетилівка";
        $regions["Івано-Франківська область"][] = "Тисмениця";
        $regions["Чернівецька область"][] = "Хотин";
        $regions["Тернопільська область"][] = "Заліщики";
        $regions["Івано-Франківська область"][] = "Городенка";
        $regions["Волинська область"][] = "Горохів";
        $regions["Закарпатська область"][] = "Тячів";
        $regions["Кіровоградська область"][] = "Помічна";
        $regions["Закарпатська область"][] = "Чоп";
        $regions["Івано-Франківська область"][] = "Тлумач";
        $regions["Харківська область"][] = "Валки";
        $regions["Чернівецька область"][] = "Сокиряни";
        $regions["Львівська область"][] = "Буськ";
        $regions["Черкаська область"][] = "Чигирин";
        $regions["Львівська область"][] = "Рава-Руська";
        $regions["Одеська область"][] = "Кодима";
        $regions["Житомирська область"][] = "Андрушівка";
        $regions["Черкаська область"][] = "Монастирище";
        $regions["Івано-Франківська область"][] = "Косів";
        $regions["Сумська область"][] = "Буринь";
        $regions["Тернопільська область"][] = "Ланівці";
        $regions["Харківська область"][] = "Барвінкове";
        $regions["Вінницька область"][] = "Липовець";
        $regions["АР Крим"][] = "Алупка";
        $regions["Чернігівська область"][] = "Семенівка";
        $regions["Донецька область"][] = "Білицьке";
        $regions["Івано-Франківська область"][] = "Яремче";
        $regions["Одеська область"][] = "Ананьїв";
        $regions["Полтавська область"][] = "Заводське";
        $regions["Одеська область"][] = "Вилкове";
        $regions["Чернівецька область"][] = "Заставна";
        $regions["Тернопільська область"][] = "Почаїв";
        $regions["Івано-Франківська область"][] = "Рогатин";
        $regions["Чернівецька область"][] = "Новоселиця";
        $regions["Харківська область"][] = "Південне";
        $regions["Донецька область"][] = "Вуглегірськ";
        $regions["Київська область"][] = "Ржищів";
        $regions["Луганська область"][] = "Кипуче";
        $regions["Луганська область"][] = "Зоринськ";
        $regions["Вінницька область"][] = "Шаргород";
        $regions["Сумська область"][] = "Середина-Буда";
        $regions["Львівська область"][] = "Турка";
        $regions["Рівненська область"][] = "Корець";
        $regions["Луганська область"][] = "Новодружеськ";
        $regions["Сумська область"][] = "Ворожба";
        $regions["Луганська область"][] = "Привілля";
        $regions["Тернопільська область"][] = "Хоростків";
        $regions["Тернопільська область"][] = "Зборів";
        $regions["Закарпатська область"][] = "Перечин";
        $regions["Тернопільська область"][] = "Копичинці";
        $regions["Львівська область"][] = "Перемишляни";
        $regions["Львівська область"][] = "Старий Самбір";
        $regions["Львівська область"][] = "Судова Вишня";
        $regions["Луганська область"][] = "Олександрівськ";
        $regions["Запорізька область"][] = "Молочанськ";
        $regions["Львівська область"][] = "Великі Мости";
        $regions["Івано-Франківська область"][] = "Галич";
        $regions["Чернівецька область"][] = "Кіцмань";
        $regions["Львівська область"][] = "Сколе";
        $regions["Кіровоградська область"][] = "Благовіщенське";
        $regions["Львівська область"][] = "Моршин";
        $regions["Чернігівська область"][] = "Остер";
        $regions["Тернопільська область"][] = "Монастириська";
        $regions["Житомирська область"][] = "Чуднів";
        $regions["Тернопільська область"][] = "Шумськ";
        $regions["Чернівецька область"][] = "Вашківці";
        $regions["Львівська область"][] = "Рудки";
        $regions["Донецька область"][] = "Залізне";
        $regions["Сумська область"][] = "Дружба";
        $regions["Луганська область"][] = "Міусинськ";
        $regions["Донецька область"][] = "Святогірськ";
        $regions["Львівська область"][] = "Новий Калинів";
        $regions["Львівська область"][] = "Добромиль";
        $regions["Львівська область"][] = "Хирів";
        $regions["Луганська область"][] = "Алмазна";
        $regions["Чернівецька область"][] = "Вижниця";
        $regions["Львівська область"][] = "Бібрка";
        $regions["Тернопільська область"][] = "Скалат";
        $regions["Львівська область"][] = "Комарно";
        $regions["Львівська область"][] = "Глиняни";
        $regions["Тернопільська область"][] = "Підгайці";
        $regions["Чернігівська область"][] = "Батурин";
        $regions["Львівська область"][] = "Белз";
        $regions["Чернівецька область"][] = "Герца";
        $regions["Волинська область"][] = "Устилуг";
        $regions["Волинська область"][] = "Берестечко";
        $regions["Львівська область"][] = "Угнів";
    }
}

