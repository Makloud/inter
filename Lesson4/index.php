1. Как получить в виде результата все поля из таблицы my_table?
SELECT * FROM my_table

2. Как получить в виде результата только поля name_first, name_last, salary из таблицы employee?
SELECT 'name_first', 'name_last', 'salary' FROM employee

3. Задать таблице my_table псевдоним t и вывести всех, у кого salary выше 3800.
SELECT * FROM `my_table` AS t WHERE salary > 3800

4. Так выбрать страны, из которых поставляют продукцию производители, чтобы страны не повторялись по 2 и более раз.
SELECT DISTINCT 'country' FROM shop

5. Вывести все автобусы в порядке уменьшения количества мест.
SELECT * FROM 'buses' ORDER_BY sits DESC

6. Перечислить известные агрегирующие функции в MySQL.
COUNT()	возвращает количество строк в результирующем запросе
SUM()	сумма всех значений по данному столбцу
AVG()	среднее значение по данному столбцу
MAX()	максимальное значение в столбце
MIN()	минимальное значение в столбце

7. Есть таблица с полями name и id. Нужно вывести имя с наибольшим id, не используя при этом команду MAX. Как это можно сделать?
SELECT `name` FROM `users` ORDER BY `id` DESC LIMIT 1

8. Обязательно ли писать команды прописными буквами? Сработает ли запрос, если его написать строчными буквами?
Не обязательно, все сработает без проблем. Норма принята для удобочитаемости.

9. Что такое SQL-инъекции и как их избегать?
SQL-инъекции - вставка вредоносного кода в базу данных.
Чтоб избежать:
- проверять вводимые данные;
- использование подготовленных выражений;
