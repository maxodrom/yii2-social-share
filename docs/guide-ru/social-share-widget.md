Social share виджет
===================

## Опции для настройки

| Опция | Описание | Тип данных | Стандартное значение |
|-------|----------|------------|----------------------|
|configuratorId|ID конфигуратора из конфигурации приложения|string|-|
|url|Абсолютная ссылка страницы|string|Результат работы `Url::to('', true)`|
|title|Заголовок страницы|string|-|
|description|Описание страницы|string|-|
|imageUrl|Абсолютная ссылка изображения для страницы|string|-|
|wrapperTag|Имя HTML тега для обёртки всех ссылок|string|ul|
|wrapperOptions|HTML аттрибуты для тега-обёртки|array|`['class' => 'social-share']`|
|linkWrapperTag|Имя HTML тега для обёртки одной ссылки|bool/string|li|
|linkWrapperOptions|HTML аттрибуты для тега-обёртки ссылки|array|-|