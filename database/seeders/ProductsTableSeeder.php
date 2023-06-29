<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Haier HSU-07HTM04/R2',
                'code' => 'haier-hsu-07',
                'description' => 'Haier HSU-07HTM04 легко создаст в вашем доме или офисе комфортный микроклимат с оптимальной температурой. Стильный внутренний блок гармонично впишется в любой интерьер и не займёт много места.',
                'price' => '21999',
                'category_id' => 1,
                'image' => 'products/haier_hsu.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Haier HSU-09HFM203/R3(SDB)',
                'code' => 'haier-hsu-09',
                'description' => 'Haier HSU-09HFM103/R3(SDB)/HSU-09HFM203/R3(SDB) обеспечивает комфортный микроклимат в помещении площадью до 26 кв. м. Она работает в нескольких режимах, среди которых обычный и быстрый нагрев и охлаждение, а также осушение воздуха и энергосбережение. Устройство оснащено антибактериальным, антиаллергенным и фотокаталитическим фильтрами, отсеивающими пыль и другие загрязнения. Функция Avoid позволяет направить воздушный поток так, чтобы он огибал человека. Управлять прибором можно с помощью пульта ДУ, который входит в комплект, либо в мобильном приложении для смартфона — модель поддерживает Wi-Fi. Доступен таймер, определяющий время автоматического включения и выключения. Самоочистка теплообменника увеличивает срок службы.',
                'price' => '24999',
                'category_id' => 2,
                'image' => 'products/haier_hsu.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Haier HSU-12HRM103/R3',
                'code' => 'haier-hsu-12',
                'description' => 'Haier HSU-12HRM103/R3(DB) в корпусе белого цвета заправлена хладагентом R 32. Устройство работает на охлаждение и обогрев. Модель рекомендована для установки в помещениях площадью до 29 м². В комплект входит пульт дистанционного управления с дисплеем. Присутствует возможность регулировки температуры и силы воздушного потока.',
                'price' => '41999',
                'category_id' => 3,
                'image' => 'products/haier_hsu.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Electrolux EACS-07HAR_A/N3_21Y',
                'code' => 'electrolux-eacs-07',
                'description' => 'Electrolux EACS-07HAR_A/N3_21Y может применяться дома, на даче или в офисе, размещаясь на стене. Он предназначен для помещений площадью до 20 м2, интенсивно охлаждая, нагревая и осушая воздух. Распространение его потоков в четырех направлениях способствует созданию максимально комфортных условий. Внутренний блок кондиционера Electrolux EACS-07HAR_A/N3_21Y отличается низким уровнем шума, составляющим около 25 дБ. Предусмотренный режим сна минимизирует интенсивность работы компрессора, благодаря чему он не тревожит даже в ночное время суток. Удобство также обеспечивается возможностью запуска таймера как на включение, так и на выключение. Это позволит подготовить оптимальный микроклимат в комнате без непосредственного участия пользователя в данный момент.',
                'price' => '23999',
                'category_id' => 1,
                'image' => 'products/electrolux_eacs.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Electrolux EACS-09HAR_A/N3_21Y',
                'code' => 'electrolux-eacs-09',
                'description' => 'Electrolux EACS-09HAR_A/N3_21Y может применяться дома, на даче или в офисе, размещаясь на стене. Он предназначен для помещений площадью до 25 м2, интенсивно охлаждая, нагревая и осушая воздух. Распространение его потоков в четырех направлениях способствует созданию максимально комфортных условий. Внутренний блок кондиционера Electrolux EACS-09HAR_A/N3_21Y отличается низким уровнем шума, составляющим около 26 дБ. Предусмотренный режим сна минимизирует интенсивность работы компрессора, благодаря чему он не тревожит даже в ночное время суток. Удобство также обеспечивается возможностью запуска таймера как на включение, так и на выключение. Это позволит подготовить оптимальный микроклимат в комнате без непосредственного участия пользователя в данный момент.',
                'price' => '25999',
                'category_id' => 2,
                'image' => 'products/electrolux_eacs.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Electrolux EACS-12HAR_A/N8_21Y',
                'code' => 'electrolux-eacs-12',
                'description' => 'Electrolux EACS-12HAR_A/N8_21Y относится к высокому классу энергоэффективности А, способствуя экономии затрат на коммунальные платежи. Он рассчитан на установку в помещениях площадью до 35 м2, помогая делать климат в них комфортным, вне зависимости от погоды за окном. Кондиционер эффективно охлаждает, обогревает и осушает воздух. Дополнительно предусмотрена функция турбо, запускающая устройство на максимальной мощности, чтобы довести температуру до оптимальной в сжатые сроки. После внезапного перебоя с электричеством или падения напряжения в сети рестарт возобновляет его работу.',
                'price' => '29999',
                'category_id' => 3,
                'image' => 'products/electrolux_eacs.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'LG P07EP2.SSAR',
                'code' => 'lg-p07',
                'description' => 'LG P07EP2.SSAR работает очень тихо и обходится минимальным энергопотреблением благодаря двойному инверторному компрессору. Большой запас мощности позволяет ему быстро создавать требуемый микроклимат в большой комнате — охлаждать за 5 минут и нагревать за 15 минут. В нем также есть ночной режим, значительно уменьшающий уровень шума и создающий комфортные условия для отдыха. Кондиционер LG P07EP2.SSAR адаптируется к вашим потребностям. Просто укажите число людей в комнате с помощью кнопки Active Energy Control, чтобы он автоматически выбрал подходящую мощность, направление потока и температуру. Устройство поддерживает функцию мобильной диагностики — запустив приложение, вы можете проверить его техническое состояние и вызвать мастера при необходимости.',
                'price' => '39999',
                'category_id' => 1,
                'image' => 'products/lg_po.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'LG P09EP2.SSAR',
                'code' => 'lg-p09',
                'description' => 'LG P09EP2.SSAR работает очень тихо и обходится минимальным энергопотреблением благодаря двойному инверторному компрессору. Большой запас мощности позволяет ему быстро создавать требуемый микроклимат в большой комнате — охлаждать за 5 минут и нагревать за 15 минут. В нем также есть ночной режим, значительно уменьшающий уровень шума и создающий комфортные условия для отдыха. Кондиционер LG P07EP2.SSAR адаптируется к вашим потребностям. Просто укажите число людей в комнате с помощью кнопки Active Energy Control, чтобы он автоматически выбрал подходящую мощность, направление потока и температуру. Устройство поддерживает функцию мобильной диагностики — запустив приложение, вы можете проверить его техническое состояние и вызвать мастера при необходимости.',
                'price' => '41999',
                'category_id' => 2,
                'image' => 'products/lg_po.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'MITSUBISHI-ELECTRIC LN50 VG B Black/Onyx',
                'code' => 'mitsubishi-electric-ln50',
                'description' => 'Mitsubishi Electric LN50 VG B Black/Onyx оптимален для использования в помещениях с большой площадью. Производительный компрессор обеспечивает быстрый нагрев и охлаждение воздуха. Модель также поддерживает такие режимы работы, как «Осушение», «Сон» и «Бриз». Для создания благоприятной атмосферы в комнате есть функция ионизации. Устройство относится к инверторному типу, поэтому потребляет незначительное количество электрической энергии и характеризуется бесшумной работой, что создает комфортные условия для отдыха и сна. Кондиционер Mitsubishi Electric LN50 VG B Black/Onyx имеет встроенный модуль Wi-Fi, благодаря которому управлять устройством можно не только с помощью пульта, но и смартфона. Пользователь самостоятельно устанавливает необходимый режим и температуру, регулирует мощность и направленность воздушного потока. При необходимости устройство можно запрограммировать на включение в заданное время. Сплит-система оборудована воздушным, антибактериальным и антиаллергенным фильтрами, что обеспечивает максимальную очистку воздуха в комнате.',
                'price' => '178790',
                'category_id' => 3,
                'image' => 'products/mitsubishi-electric-ln50.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'MITSUBISHI-ELECTRIC MSZ-FH25VE/MUZ-FH25VE',
                'code' => 'mitsubishi-electric-msz-fh25ve',
                'description' => 'Mitsubishi Electric MSZ-FH25VE/MUZ-FH25VE оснащен высокопроизводительным инверторным компрессором, имеющим большой рабочий ресурс. В конструкции устройства также есть качественный фреон R-410А и вентилятор с особой конструкцией лопастей. Это позволяет установить кондиционер в жилом или общественном помещении и использовать в любое время года.',
                'price' => '48995',
                'category_id' => 1,
                'image' => 'products/mitsubishi-electric-msz-fh25ve.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Pioneer KFRI25LW/KORI25LW',
                'code' => 'pioneer-kfri25lw',
                'description' => 'Pioneer KFRI25LW/KORI25LW оборудована антибактериальным и воздушным фильтрами для эффективного уничтожения бактерий и вирусов и дезодорирования воздуха. Модель предназначена для поддержания необходимой температуры на площади до 26 м².',
                'price' => '43190',
                'category_id' => 2,
                'image' => 'products/pioneer-kfri25lw.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Samsung AR09TXHQASINUA',
                'code' => 'samsung-ar09',
                'description' => 'Samsung AR09TXHQASINUA поможет за небольшой промежуток времени нагреть или охладить воздух в помещении, площадь которого не превышает 25 м2. Устройство функционирует на основе инверторного компрессора, благодаря чему обеспечивается высокая точность поддержания установленной температуры. Модель оборудована HD-фильтром, который улавливает подвешенные частицы пыли и различные аллергены: пыльцу, шерсть домашних животных и споры. Это способствует эффективному очищению воздуха, что благотворно влияет на здоровье и самочувствие пользователя. При активации функции Good sleep кондиционер Samsung AR09TXHQASINUA начинает автоматически настраивать и поддерживать оптимальную температуру для полноценного отдыха и расслабления. Покрытие DuraFin+ эффективно защищает конденсатор от образования ржавчины, что существенно увеличивает продолжительность срока службы устройства. Регулировка режимов работы модели осуществляется посредством удобного дистанционного пульта с интуитивно понятным управлением. Для поддержания работоспособности кондиционера корпус рекомендуется периодически очищать от пыли с помощью влажной салфетки, а также промывать воздушный фильтр в воде.',
                'price' => '32999',
                'category_id' => 2,
                'image' => 'products/samsung-ar.jpg',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Samsung AR12TXHQASINUA',
                'code' => 'samsung-ar12',
                'description' => 'Сплит-система Samsung AR12TXHQASINUA/AR12TXHQASIXUA предназначена для помещений площадью до 35 кв. м. Она работает по инверторной технологии. Производительность по холоду — 3,8 кВт, по теплу — 3,5 кВт. Максимальный уровень шума внешнего блока — 50 дБ. В комплекте есть пульт дистанционного управления с цифровым дисплеем и индикацией температуры. Предусмотрены режимы «Охлаждение» — обычное и быстрое, «Нагревание», «Осушение» и «Комфортный сон». Есть функции «Авторестарт» и «Энергосбережение». В этой модели установлен воздушный фильтр.',
                'price' => '38999',
                'category_id' => 3,
                'image' => 'products/samsung-ar.jpg',
                'count' => rand(0, 10),
            ],
        ]);
    }
}
