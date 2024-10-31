Налаштування вебхука Telegram

Встановіть URL для вебхука через API запит до Telegram (замінивши your_telegram_bot_token та https://yourdomain.com/api/telegram/webhook на ваші дані):

curl -X POST "https://api.telegram.org/botyour_telegram_bot_token/setWebhook?url=https://yourdomain.com/api/telegram/webhook"

Тепер бот має бути готовим обробляти запити /start, зберігати користувачів у базі даних та надсилати вітальне повідомлення з іменем користувача.
