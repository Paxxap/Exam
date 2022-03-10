Создал тип нового инфоблока и элемент Canonical в административной панели, добавил свойство Новость с привязкой к инфоблоку Новость
В компоненте news создал файл .parameters.php в котором передал новый параметр "ID_CANONICAL"
Добавил свойство canonical
Вывел свойство в header.php при помощи $APPLICATION->ShowProperty();
Передал свойство в массив $arParams в news:detail
Создал файлы result_modifier.php и component_epilog.php в шаблоне furniture_dark-blue/components/bitrix/news/.default/bitrix/news.detail/.default/ в которых реализовал при помощи 
метода GetList передать значение имени элемента в arResult и последующую передачу через кеш
