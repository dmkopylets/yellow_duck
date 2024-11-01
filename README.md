## Тестове завдання для програміста Копилець Д.А.

1. #### Реєстрація telegram бота

   **Завдання**   
   Зареєструвати telegram бота, щоб далі з ним працювати.

   **Результат**   
   Ви маєте зареєстрований telegram бот.



2. #### Налаштування сервера

   **Завдання**   
   Налаштувати веб\-сервер, який прийматиме через webhook запити від бота і зможе надсилати відповіді користувачу через бота. На веб\-сервері, має бути налаштована база даних, в яку бот зможе зберігати дані для користувачів.

   **Результат**   
   У вас є налаштований веб\-сервер, який готовий обробити команду /start від телеграм бота.

   **Додаткова інформація**   
   Якщо Ви не можете самостійно налаштувати веб\-сервер для виконання цього завдання, будь ласка, напишіть вашому PM, він надасть Вам веб\-сервер і домен, на якому Ви зможете налаштувати своє оточення. Коли Ви будете писати ПМу \- напишіть йому стек на якому Ви плануєте робити (чистий  PHP, Laravel і т.і.)



3. #### Створення групового чату в телеграмі.

   **Завдання**   
   Створити груповий чат в telegram, до якого потрібно додати PM

   **Результат**   
   Створено груповий чат, до якого додано PM



4. #### Ініціалізувати чат бота

   #### **Завдання**

1) PM має запустити команду Start.
2) Бот повинен записати PM до бази даних.
3) Бот повинен вітати PM на ім'я.

   **Результат**

1) PM додано до бази даних.
2) Робот привітав PM.

   **Додаткова інформація**   
   Якщо Вам потрібна допомога в побудові структури PM, що зберігаються в базі даних \- зверніться за допомогою до PM.



5. #### Створення дошки у Trello

   **Завдання**

1) Створити нову дошку у треллі.
2) Створити колонки "InProgress" та "Done" вручну.
3) Надати доступ до дошки PM з правами редагування дошки.

   **Результат**   
   Створено дошку в Trello, в якій є колонки “InProgress” та “Done”, та додано PM із правами редагування дошки.

   **додаткова інформація**

1) У випадку, якщо Вам не вдалося зареєструватися в Trello, зв'яжіться з PM, щоб надати доступ до дошки та API ключа цієї дошки.
2) Якщо колонки InProgress і Done будуть створені за допомогою API \- це буде вітатися.



6. #### Налаштування API



**Завдання**

1) Зробити API для отримання Webhook від Trello
2) Трелло повинен передавати через Webhook інформацію про переміщення картки з колонки In Progress до Done і навпаки на сервер.
3) Інформація повинна передаватися через telegram бота до групи в telegram.

   **Результат**  
   Створено API, яке передає Webhook переміщення карток між колонками від Trello на сервер. Сервер повинен передавати через telegram бота інформацію про переміщення карток до групи в telegram.


**додаткова інформація**

Якщо Ви не змогли розібратися, як налаштувати Webhook у Trello – зв'яжіться з PM для отримання додаткової інформації.



7. #### Звіт з учасників групи в telegram, який покаже кількість завдань у роботі\* \- опційне завдання за бажанням



**Завдання**

1) Забезпечити можливість користувачеві telegram об'єднати його обліковий запис з обліковим записом Trello
2) При натисканні на кнопку "Звіт" бот повинен показати звіт по учасникам групи telegram \- скільки завдань у роботі.

   **Результат**
1) PM може об'єднати свій обліковий запис Telegram з обліковим записом Trello
2) PM може отримати звіт про кількість завдань у роботі кожного учасника групи
3) PM може додати нового учасника в групу telegram і сформувати звіт, в якому по новому учаснику точно не буде поточних завдань, тому що у нього не підключено аккаунт Trello


