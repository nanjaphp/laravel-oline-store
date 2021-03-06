<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ["region_id" => 1, "name" => "Київ"],
            ["region_id" => 2, "name" => "Харків"],
            ["region_id" => 2, "name" => "Лозова"],
            ["region_id" => 2, "name" => "Ізюм"],
            ["region_id" => 2, "name" => "Чугуїв"],
            ["region_id" => 2, "name" => "Первомайський"],
            ["region_id" => 2, "name" => "Куп'янськ"],
            ["region_id" => 2, "name" => "Балаклія"],
            ["region_id" => 2, "name" => "Мерефа"],
            ["region_id" => 2, "name" => "Люботин"],
            ["region_id" => 2, "name" => "Красноград"],
            ["region_id" => 2, "name" => "Вовчанськ"],
            ["region_id" => 2, "name" => "Дергачі"],
            ["region_id" => 2, "name" => "Богодухів"],
            ["region_id" => 2, "name" => "Зміїв"],
            ["region_id" => 2, "name" => "Валки"],
            ["region_id" => 2, "name" => "Барвінкове"],
            ["region_id" => 2, "name" => "Південне"],
            ["region_id" => 3, "name" => "Одеса"],
            ["region_id" => 3, "name" => "Ізмаїл"],
            ["region_id" => 3, "name" => "Чорноморськ"],
            ["region_id" => 3, "name" => "Білгород-Дністровський"],
            ["region_id" => 3, "name" => "Подільськ"],
            ["region_id" => 3, "name" => "Южне"],
            ["region_id" => 3, "name" => "Кілія"],
            ["region_id" => 3, "name" => "Рені"],
            ["region_id" => 3, "name" => "Балта"],
            ["region_id" => 3, "name" => "Роздільна"],
            ["region_id" => 3, "name" => "Болград"],
            ["region_id" => 3, "name" => "Арциз"],
            ["region_id" => 3, "name" => "Біляївка"],
            ["region_id" => 3, "name" => "Татарбунари"],
            ["region_id" => 3, "name" => "Теплодар"],
            ["region_id" => 3, "name" => "Березівка"],
            ["region_id" => 3, "name" => "Кодима"],
            ["region_id" => 3, "name" => "Ананьїв"],
            ["region_id" => 3, "name" => "Вилкове"],
            ["region_id" => 4, "name" => "Дніпро"],
            ["region_id" => 4, "name" => "Кривий Ріг"],
            ["region_id" => 4, "name" => "Кам'янське"],
            ["region_id" => 4, "name" => "Нікополь"],
            ["region_id" => 4, "name" => "Павлоград"],
            ["region_id" => 4, "name" => "Новомосковськ"],
            ["region_id" => 4, "name" => "Марганець"],
            ["region_id" => 4, "name" => "Жовті Води"],
            ["region_id" => 4, "name" => "Покров"],
            ["region_id" => 4, "name" => "Синельникове"],
            ["region_id" => 4, "name" => "Першотравенськ"],
            ["region_id" => 4, "name" => "Тернівка"],
            ["region_id" => 4, "name" => "Вільногірськ"],
            ["region_id" => 4, "name" => "Підгородне"],
            ["region_id" => 4, "name" => "П'ятихатки"],
            ["region_id" => 4, "name" => "Верхньодніпровськ"],
            ["region_id" => 4, "name" => "Апостолове"],
            ["region_id" => 4, "name" => "Зеленодольськ"],
            ["region_id" => 4, "name" => "Верхівцеве"],
            ["region_id" => 4, "name" => "Перещепине"],
            ["region_id" => 5, "name" => "Донецьк"],
            ["region_id" => 5, "name" => "Маріуполь"],
            ["region_id" => 5, "name" => "Макіївка"],
            ["region_id" => 5, "name" => "Горлівка"],
            ["region_id" => 5, "name" => "Краматорськ"],
            ["region_id" => 5, "name" => "Слов'янськ"],
            ["region_id" => 5, "name" => "Єнакієве"],
            ["region_id" => 5, "name" => "Бахмут"],
            ["region_id" => 5, "name" => "Костянтинівка"],
            ["region_id" => 5, "name" => "Покровськ"],
            ["region_id" => 5, "name" => "Харцизьк"],
            ["region_id" => 5, "name" => "Дружківка"],
            ["region_id" => 5, "name" => "Чистякове"],
            ["region_id" => 5, "name" => "Шахтарськ"],
            ["region_id" => 5, "name" => "Мирноград"],
            ["region_id" => 5, "name" => "Сніжне"],
            ["region_id" => 5, "name" => "Ясинувата"],
            ["region_id" => 5, "name" => "Авдіївка"],
            ["region_id" => 5, "name" => "Торецьк"],
            ["region_id" => 5, "name" => "Добропілля"],
            ["region_id" => 5, "name" => "Хрестівка"],
            ["region_id" => 5, "name" => "Дебальцеве"],
            ["region_id" => 5, "name" => "Докучаєвськ"],
            ["region_id" => 5, "name" => "Селидове"],
            ["region_id" => 5, "name" => "Волноваха"],
            ["region_id" => 5, "name" => "Лиман"],
            ["region_id" => 5, "name" => "Курахове"],
            ["region_id" => 5, "name" => "Амвросіївка"],
            ["region_id" => 5, "name" => "Зугрес"],
            ["region_id" => 5, "name" => "Іловайськ"],
            ["region_id" => 5, "name" => "Білозерське"],
            ["region_id" => 5, "name" => "Красногорівка"],
            ["region_id" => 5, "name" => "Вугледар"],
            ["region_id" => 5, "name" => "Миколаївка"],
            ["region_id" => 5, "name" => "Новогродівка"],
            ["region_id" => 5, "name" => "Бунге"],
            ["region_id" => 5, "name" => "Часів Яр"],
            ["region_id" => 5, "name" => "Жданівка"],
            ["region_id" => 5, "name" => "Кальміуське"],
            ["region_id" => 5, "name" => "Світлодарськ"],
            ["region_id" => 5, "name" => "Сіверськ"],
            ["region_id" => 5, "name" => "Новоазовськ"],
            ["region_id" => 5, "name" => "Українськ"],
            ["region_id" => 5, "name" => "Соледар"],
            ["region_id" => 5, "name" => "Гірник"],
            ["region_id" => 5, "name" => "Моспине"],
            ["region_id" => 5, "name" => "Родинське"],
            ["region_id" => 5, "name" => "Мар'їнка"],
            ["region_id" => 5, "name" => "Білицьке"],
            ["region_id" => 5, "name" => "Вуглегірськ"],
            ["region_id" => 5, "name" => "Залізне"],
            ["region_id" => 5, "name" => "Святогірськ"],
            ["region_id" => 6, "name" => "Запоріжжя"],
            ["region_id" => 6, "name" => "Мелітополь"],
            ["region_id" => 6, "name" => "Бердянськ"],
            ["region_id" => 6, "name" => "Енергодар"],
            ["region_id" => 6, "name" => "Токмак"],
            ["region_id" => 6, "name" => "Пологи"],
            ["region_id" => 6, "name" => "Дніпрорудне"],
            ["region_id" => 6, "name" => "Вільнянськ"],
            ["region_id" => 6, "name" => "Оріхів"],
            ["region_id" => 6, "name" => "Гуляйполе"],
            ["region_id" => 6, "name" => "Василівка"],
            ["region_id" => 6, "name" => "Кам'янка-Дніпровська"],
            ["region_id" => 6, "name" => "Приморськ"],
            ["region_id" => 6, "name" => "Молочанськ"],
            ["region_id" => 7, "name" => "Львів"],
            ["region_id" => 7, "name" => "Дрогобич"],
            ["region_id" => 7, "name" => "Червоноград"],
            ["region_id" => 7, "name" => "Стрий"],
            ["region_id" => 7, "name" => "Самбір"],
            ["region_id" => 7, "name" => "Борислав"],
            ["region_id" => 7, "name" => "Новояворівськ"],
            ["region_id" => 7, "name" => "Трускавець"],
            ["region_id" => 7, "name" => "Новий Розділ"],
            ["region_id" => 7, "name" => "Золочів"],
            ["region_id" => 7, "name" => "Броди"],
            ["region_id" => 7, "name" => "Сокаль"],
            ["region_id" => 7, "name" => "Стебник"],
            ["region_id" => 7, "name" => "Винники"],
            ["region_id" => 7, "name" => "Городок"],
            ["region_id" => 7, "name" => "Миколаїв"],
            ["region_id" => 7, "name" => "Жовква"],
            ["region_id" => 7, "name" => "Яворів"],
            ["region_id" => 7, "name" => "Соснівка"],
            ["region_id" => 7, "name" => "Жидачів"],
            ["region_id" => 7, "name" => "Кам`янка-Бузька"],
            ["region_id" => 7, "name" => "Дубляни"],
            ["region_id" => 7, "name" => "Радехів"],
            ["region_id" => 7, "name" => "Пустомити"],
            ["region_id" => 7, "name" => "Мостиська"],
            ["region_id" => 7, "name" => "Ходорів"],
            ["region_id" => 7, "name" => "Буськ"],
            ["region_id" => 7, "name" => "Рава-Руська"],
            ["region_id" => 7, "name" => "Турка"],
            ["region_id" => 7, "name" => "Перемишляни"],
            ["region_id" => 7, "name" => "Старий Самбір"],
            ["region_id" => 7, "name" => "Судова Вишня"],
            ["region_id" => 7, "name" => "Великі Мости"],
            ["region_id" => 7, "name" => "Сколе"],
            ["region_id" => 7, "name" => "Моршин"],
            ["region_id" => 7, "name" => "Рудки"],
            ["region_id" => 7, "name" => "Новий Калинів"],
            ["region_id" => 7, "name" => "Добромиль"],
            ["region_id" => 7, "name" => "Хирів"],
            ["region_id" => 7, "name" => "Бібрка"],
            ["region_id" => 7, "name" => "Комарно"],
            ["region_id" => 7, "name" => "Глиняни"],
            ["region_id" => 7, "name" => "Белз"],
            ["region_id" => 7, "name" => "Угнів"],
            ["region_id" => 8, "name" => "Миколаїв"],
            ["region_id" => 8, "name" => "Первомайськ"],
            ["region_id" => 8, "name" => "Южноукраїнськ"],
            ["region_id" => 8, "name" => "Вознесенськ"],
            ["region_id" => 8, "name" => "Новий Буг"],
            ["region_id" => 8, "name" => "Очаків"],
            ["region_id" => 8, "name" => "Баштанка"],
            ["region_id" => 8, "name" => "Снігурівка"],
            ["region_id" => 8, "name" => "Нова Одеса"],
            ["region_id" => 9, "name" => "Севастополь"],
            ["region_id" => 10, "name" => "Луганськ"],
            ["region_id" => 10, "name" => "Алчевськ"],
            ["region_id" => 10, "name" => "Сєвєродонецьк"],
            ["region_id" => 10, "name" => "Лисичанськ"],
            ["region_id" => 10, "name" => "Хрустальний"],
            ["region_id" => 10, "name" => "Кадіївка"],
            ["region_id" => 10, "name" => "Довжанськ"],
            ["region_id" => 10, "name" => "Рубіжне"],
            ["region_id" => 10, "name" => "Антрацит"],
            ["region_id" => 10, "name" => "Ровеньки"],
            ["region_id" => 10, "name" => "Брянка"],
            ["region_id" => 10, "name" => "Сорокине"],
            ["region_id" => 10, "name" => "Первомайськ"],
            ["region_id" => 10, "name" => "Голубівка"],
            ["region_id" => 10, "name" => "Перевальськ"],
            ["region_id" => 10, "name" => "Молодогвардійськ"],
            ["region_id" => 10, "name" => "Суходільськ"],
            ["region_id" => 10, "name" => "Попасна"],
            ["region_id" => 10, "name" => "Кремінна"],
            ["region_id" => 10, "name" => "Лутугине"],
            ["region_id" => 10, "name" => "Сватове"],
            ["region_id" => 10, "name" => "Старобільськ"],
            ["region_id" => 10, "name" => "Вознесенівка"],
            ["region_id" => 10, "name" => "Золоте"],
            ["region_id" => 10, "name" => "Петрово-Красносілля"],
            ["region_id" => 10, "name" => "Щастя"],
            ["region_id" => 10, "name" => "Боково-Хрустальне"],
            ["region_id" => 10, "name" => "Зимогір`я"],
            ["region_id" => 10, "name" => "Гірське"],
            ["region_id" => 10, "name" => "Ірміно"],
            ["region_id" => 10, "name" => "Кипуче"],
            ["region_id" => 10, "name" => "Зоринськ"],
            ["region_id" => 10, "name" => "Новодружеськ"],
            ["region_id" => 10, "name" => "Привілля"],
            ["region_id" => 10, "name" => "Олександрівськ"],
            ["region_id" => 10, "name" => "Міусинськ"],
            ["region_id" => 10, "name" => "Алмазна"],
            ["region_id" => 11, "name" => "Вінниця"],
            ["region_id" => 11, "name" => "Жмеринка"],
            ["region_id" => 11, "name" => "Могилів-Подільський"],
            ["region_id" => 11, "name" => "Хмільник"],
            ["region_id" => 11, "name" => "Гайсин"],
            ["region_id" => 11, "name" => "Козятин"],
            ["region_id" => 11, "name" => "Ладижин"],
            ["region_id" => 11, "name" => "Калинівка"],
            ["region_id" => 11, "name" => "Бар"],
            ["region_id" => 11, "name" => "Тульчин"],
            ["region_id" => 11, "name" => "Гнівань"],
            ["region_id" => 11, "name" => "Бершадь"],
            ["region_id" => 11, "name" => "Немирів"],
            ["region_id" => 11, "name" => "Іллінці"],
            ["region_id" => 11, "name" => "Ямпіль"],
            ["region_id" => 11, "name" => "Погребище"],
            ["region_id" => 11, "name" => "Липовець"],
            ["region_id" => 11, "name" => "Шаргород"],
            ["region_id" => 12, "name" => "Сімферополь"],
            ["region_id" => 12, "name" => "Керч"],
            ["region_id" => 12, "name" => "Євпаторія"],
            ["region_id" => 12, "name" => "Ялта"],
            ["region_id" => 12, "name" => "Феодосія"],
            ["region_id" => 12, "name" => "Джанкой"],
            ["region_id" => 12, "name" => "Алушта"],
            ["region_id" => 12, "name" => "Бахчисарай"],
            ["region_id" => 12, "name" => "Красноперекопськ"],
            ["region_id" => 12, "name" => "Саки"],
            ["region_id" => 12, "name" => "Армянськ"],
            ["region_id" => 12, "name" => "Судак"],
            ["region_id" => 12, "name" => "Білогірськ"],
            ["region_id" => 12, "name" => "Щолкіне"],
            ["region_id" => 12, "name" => "Старий Крим"],
            ["region_id" => 12, "name" => "Алупка"],
            ["region_id" => 13, "name" => "Херсон"],
            ["region_id" => 13, "name" => "Нова Каховка"],
            ["region_id" => 13, "name" => "Каховка"],
            ["region_id" => 13, "name" => "Олешки"],
            ["region_id" => 13, "name" => "Генічеськ"],
            ["region_id" => 13, "name" => "Скадовськ"],
            ["region_id" => 13, "name" => "Гола Пристань"],
            ["region_id" => 13, "name" => "Берислав"],
            ["region_id" => 13, "name" => "Таврійськ"],
            ["region_id" => 14, "name" => "Чернігів"],
            ["region_id" => 14, "name" => "Ніжин"],
            ["region_id" => 14, "name" => "Прилуки"],
            ["region_id" => 14, "name" => "Бахмач"],
            ["region_id" => 14, "name" => "Носівка"],
            ["region_id" => 14, "name" => "Новгород-Сіверський"],
            ["region_id" => 14, "name" => "Корюківка"],
            ["region_id" => 14, "name" => "Городня"],
            ["region_id" => 14, "name" => "Мена"],
            ["region_id" => 14, "name" => "Сновськ"],
            ["region_id" => 14, "name" => "Бобровиця"],
            ["region_id" => 14, "name" => "Ічня"],
            ["region_id" => 14, "name" => "Борзна"],
            ["region_id" => 14, "name" => "Семенівка"],
            ["region_id" => 14, "name" => "Остер"],
            ["region_id" => 14, "name" => "Батурин"],
            ["region_id" => 15, "name" => "Полтава"],
            ["region_id" => 15, "name" => "Кременчук"],
            ["region_id" => 15, "name" => "Горішні Плавні"],
            ["region_id" => 15, "name" => "Лубни"],
            ["region_id" => 15, "name" => "Миргород"],
            ["region_id" => 15, "name" => "Гадяч"],
            ["region_id" => 15, "name" => "Пирятин"],
            ["region_id" => 15, "name" => "Карлівка"],
            ["region_id" => 15, "name" => "Хорол"],
            ["region_id" => 15, "name" => "Лохвиця"],
            ["region_id" => 15, "name" => "Гребінка"],
            ["region_id" => 15, "name" => "Кобеляки"],
            ["region_id" => 15, "name" => "Зіньків"],
            ["region_id" => 15, "name" => "Глобине"],
            ["region_id" => 15, "name" => "Решетилівка"],
            ["region_id" => 15, "name" => "Заводське"],
            ["region_id" => 16, "name" => "Черкаси"],
            ["region_id" => 16, "name" => "Умань"],
            ["region_id" => 16, "name" => "Сміла"],
            ["region_id" => 16, "name" => "Золотоноша"],
            ["region_id" => 16, "name" => "Канів"],
            ["region_id" => 16, "name" => "Корсунь-Шевченківський"],
            ["region_id" => 16, "name" => "Звенигородка"],
            ["region_id" => 16, "name" => "Шпола"],
            ["region_id" => 16, "name" => "Ватутіне"],
            ["region_id" => 16, "name" => "Жашків"],
            ["region_id" => 16, "name" => "Городище"],
            ["region_id" => 16, "name" => "Тальне"],
            ["region_id" => 16, "name" => "Кам'янка"],
            ["region_id" => 16, "name" => "Христинівка"],
            ["region_id" => 16, "name" => "Чигирин"],
            ["region_id" => 16, "name" => "Монастирище"],
            ["region_id" => 17, "name" => "Хмельницький"],
            ["region_id" => 17, "name" => "Кам'янець-Подільський"],
            ["region_id" => 17, "name" => "Шепетівка"],
            ["region_id" => 17, "name" => "Нетішин"],
            ["region_id" => 17, "name" => "Славута"],
            ["region_id" => 17, "name" => "Старокостянтинів"],
            ["region_id" => 17, "name" => "Полонне"],
            ["region_id" => 17, "name" => "Красилів"],
            ["region_id" => 17, "name" => "Волочиськ"],
            ["region_id" => 17, "name" => "Ізяслав"],
            ["region_id" => 17, "name" => "Городок"],
            ["region_id" => 17, "name" => "Дунаївці"],
            ["region_id" => 17, "name" => "Деражня"],
            ["region_id" => 18, "name" => "Чернівці"],
            ["region_id" => 18, "name" => "Сторожинець"],
            ["region_id" => 18, "name" => "Новодністровськ"],
            ["region_id" => 18, "name" => "Хотин"],
            ["region_id" => 18, "name" => "Сокиряни"],
            ["region_id" => 18, "name" => "Заставна"],
            ["region_id" => 18, "name" => "Новоселиця"],
            ["region_id" => 18, "name" => "Кіцмань"],
            ["region_id" => 18, "name" => "Вашківці"],
            ["region_id" => 18, "name" => "Вижниця"],
            ["region_id" => 18, "name" => "Герца"],
            ["region_id" => 19, "name" => "Житомир"],
            ["region_id" => 19, "name" => "Бердичів"],
            ["region_id" => 19, "name" => "Коростень"],
            ["region_id" => 19, "name" => "Новоград-Волинський"],
            ["region_id" => 19, "name" => "Малин"],
            ["region_id" => 19, "name" => "Коростишів"],
            ["region_id" => 19, "name" => "Овруч"],
            ["region_id" => 19, "name" => "Радомишль"],
            ["region_id" => 19, "name" => "Баранівка"],
            ["region_id" => 19, "name" => "Олевськ"],
            ["region_id" => 19, "name" => "Андрушівка"],
            ["region_id" => 19, "name" => "Чуднів"],
            ["region_id" => 20, "name" => "Суми"],
            ["region_id" => 20, "name" => "Конотоп"],
            ["region_id" => 20, "name" => "Шостка"],
            ["region_id" => 20, "name" => "Охтирка"],
            ["region_id" => 20, "name" => "Ромни"],
            ["region_id" => 20, "name" => "Глухів"],
            ["region_id" => 20, "name" => "Лебедин"],
            ["region_id" => 20, "name" => "Кролевець"],
            ["region_id" => 20, "name" => "Тростянець"],
            ["region_id" => 20, "name" => "Білопілля"],
            ["region_id" => 20, "name" => "Путивль"],
            ["region_id" => 20, "name" => "Буринь"],
            ["region_id" => 20, "name" => "Середина-Буда"],
            ["region_id" => 20, "name" => "Ворожба"],
            ["region_id" => 20, "name" => "Дружба"],
            ["region_id" => 21, "name" => "Рівне"],
            ["region_id" => 21, "name" => "Вараш"],
            ["region_id" => 21, "name" => "Дубно"],
            ["region_id" => 21, "name" => "Костопіль"],
            ["region_id" => 21, "name" => "Сарни"],
            ["region_id" => 21, "name" => "Здолбунів"],
            ["region_id" => 21, "name" => "Острог"],
            ["region_id" => 21, "name" => "Березне"],
            ["region_id" => 21, "name" => "Радивилів"],
            ["region_id" => 21, "name" => "Дубровиця"],
            ["region_id" => 21, "name" => "Корець"],
            ["region_id" => 22, "name" => "Івано-Франківськ"],
            ["region_id" => 22, "name" => "Калуш"],
            ["region_id" => 22, "name" => "Коломия"],
            ["region_id" => 22, "name" => "Надвірна"],
            ["region_id" => 22, "name" => "Долина"],
            ["region_id" => 22, "name" => "Бурштин"],
            ["region_id" => 22, "name" => "Болехів"],
            ["region_id" => 22, "name" => "Снятин"],
            ["region_id" => 22, "name" => "Тисмениця"],
            ["region_id" => 22, "name" => "Городенка"],
            ["region_id" => 22, "name" => "Тлумач"],
            ["region_id" => 22, "name" => "Косів"],
            ["region_id" => 22, "name" => "Яремче"],
            ["region_id" => 22, "name" => "Рогатин"],
            ["region_id" => 22, "name" => "Галич"],
            ["region_id" => 23, "name" => "Кропивницький"],
            ["region_id" => 23, "name" => "Олександрія"],
            ["region_id" => 23, "name" => "Світловодськ"],
            ["region_id" => 23, "name" => "Знам'янка"],
            ["region_id" => 23, "name" => "Долинська"],
            ["region_id" => 23, "name" => "Новоукраїнка"],
            ["region_id" => 23, "name" => "Гайворон"],
            ["region_id" => 23, "name" => "Новомиргород"],
            ["region_id" => 23, "name" => "Бобринець"],
            ["region_id" => 23, "name" => "Мала Виска"],
            ["region_id" => 23, "name" => "Помічна"],
            ["region_id" => 23, "name" => "Благовіщенське"],
            ["region_id" => 24, "name" => "Тернопіль"],
            ["region_id" => 24, "name" => "Чортків"],
            ["region_id" => 24, "name" => "Кременець"],
            ["region_id" => 24, "name" => "Бережани"],
            ["region_id" => 24, "name" => "Збараж"],
            ["region_id" => 24, "name" => "Теребовля"],
            ["region_id" => 24, "name" => "Бучач"],
            ["region_id" => 24, "name" => "Борщів"],
            ["region_id" => 24, "name" => "Заліщики"],
            ["region_id" => 24, "name" => "Ланівці"],
            ["region_id" => 24, "name" => "Почаїв"],
            ["region_id" => 24, "name" => "Хоростків"],
            ["region_id" => 24, "name" => "Зборів"],
            ["region_id" => 24, "name" => "Копичинці"],
            ["region_id" => 24, "name" => "Монастириська"],
            ["region_id" => 24, "name" => "Шумськ"],
            ["region_id" => 24, "name" => "Скалат"],
            ["region_id" => 24, "name" => "Підгайці"],
            ["region_id" => 25, "name" => "Луцьк"],
            ["region_id" => 25, "name" => "Ковель"],
            ["region_id" => 25, "name" => "Нововолинськ"],
            ["region_id" => 25, "name" => "Володимир"],
            ["region_id" => 25, "name" => "Ківерці"],
            ["region_id" => 25, "name" => "Рожище"],
            ["region_id" => 25, "name" => "Камінь-Каширський"],
            ["region_id" => 25, "name" => "Любомль"],
            ["region_id" => 25, "name" => "Горохів"],
            ["region_id" => 25, "name" => "Устилуг"],
            ["region_id" => 25, "name" => "Берестечко"],
            ["region_id" => 26, "name" => "Біла Церква"],
            ["region_id" => 26, "name" => "Бровари"],
            ["region_id" => 26, "name" => "Бориспіль"],
            ["region_id" => 26, "name" => "Ірпінь"],
            ["region_id" => 26, "name" => "Фастів"],
            ["region_id" => 26, "name" => "Вишневе"],
            ["region_id" => 26, "name" => "Васильків"],
            ["region_id" => 26, "name" => "Буча"],
            ["region_id" => 26, "name" => "Боярка"],
            ["region_id" => 26, "name" => "Обухів"],
            ["region_id" => 26, "name" => "Вишгород"],
            ["region_id" => 26, "name" => "Переяслав"],
            ["region_id" => 26, "name" => "Славутич"],
            ["region_id" => 26, "name" => "Яготин"],
            ["region_id" => 26, "name" => "Березань"],
            ["region_id" => 26, "name" => "Українка"],
            ["region_id" => 26, "name" => "Богуслав"],
            ["region_id" => 26, "name" => "Сквира"],
            ["region_id" => 26, "name" => "Кагарлик"],
            ["region_id" => 26, "name" => "Тетіїв"],
            ["region_id" => 26, "name" => "Узин"],
            ["region_id" => 26, "name" => "Миронівка"],
            ["region_id" => 26, "name" => "Тараща"],
            ["region_id" => 26, "name" => "Ржищів"],
            ["region_id" => 27, "name" => "Ужгород"],
            ["region_id" => 27, "name" => "Мукачево"],
            ["region_id" => 27, "name" => "Хуст"],
            ["region_id" => 27, "name" => "Виноградів"],
            ["region_id" => 27, "name" => "Берегове"],
            ["region_id" => 27, "name" => "Свалява"],
            ["region_id" => 27, "name" => "Рахів"],
            ["region_id" => 27, "name" => "Іршава"],
            ["region_id" => 27, "name" => "Тячів"],
            ["region_id" => 27, "name" => "Чоп"],
            ["region_id" => 27, "name" => "Перечин"],
            ["region_id" => 28, "name" => "Інкерман"],
        ];

        DB::table('cities')->insert($cities);
    }
}
