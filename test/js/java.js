const inputField = document.getElementById('inputField');
        const output = document.getElementById('output');
        const toggleButton = document.getElementById('toggleButton');

        // Флаг для отслеживания состояния видимости
        let isVisible = false;

        // Функция для обновления отображаемого текста
        function updateOutput() {
            if (isVisible) {
                // Показываем реальный текст
                output.textContent = inputField.value;
            } else {
                // Заменяем все символы на *
                const maskedText = '*'.repeat(inputField.value.length);
                output.textContent = maskedText;
            }
        }

        // Слушаем событие ввода
        inputField.addEventListener('input', updateOutput);

        // Слушаем клик по кнопке
        toggleButton.addEventListener('click', function() {
            // Меняем состояние видимости
            isVisible = !isVisible;

            // Обновляем текст кнопки
            toggleButton.textContent = isVisible ? 'Скрыть' : 'Показать';

            // Обновляем отображаемый текст
            updateOutput();

            // Меняем тип поля ввода
            inputField.type = isVisible ? 'text' : 'password';
        });