# Exam
В header.php добавил тег <meta property= "specialdate" content="">, использовал метод класса APPLICATION ShowProperty.
На сайте, в административной панели, задал новый тип свойства. В разделе "Файлы и папки" присвоил свойству special значение 100.
Добавил файл .parameters.php в шаблон default компонента news, в котором описан новый параметр SPECIALDATE.
В файл news.php добавил в массив для передачи в news.list новый параметр.
В ...\furniture_blue\components\bitrix\news\.default\bitrix\news.list\.default\ создал файлы component_epilog.php и result_modifier.php 
Для выполнения условия работы с кешем, в файле result_modifier.php реализовал передачу значения первой новости, а в component_epilog.php заменил имеющиеся значение в шаблоне на переданное через кеш.
