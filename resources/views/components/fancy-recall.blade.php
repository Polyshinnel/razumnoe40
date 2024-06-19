<div class="recall-box hidden" id="recall-box">
    <form class="recall-box__input">
        <div class="recall-box__input-title">
            <h2 class="text-2xl font-semibold text-center">Форма обратной связи</h2>
            <p class="text-sm mt-2 text-center">Заполните форму и мы свяжемся с Вами в ближайшее время</p>
        </div>
        <div class="recall-box__input-unit flex flex-col mt-5">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" placeholder="Ваше имя">
            <p class="err-text hidden">Имя должно быть не менее 2х символов</p>
        </div>
        <div class="recall-box__input-unit flex flex-col mt-2">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone" placeholder="Ваш телефон">
            <p class="err-text hidden">Введите корректный телефон</p>
        </div>
        <div class="recall-box__input-unit flex flex-col mt-2">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <input type="submit" class="form-btn send-btn" value="Отправить">
    </form>

    <div class="recall-box__success">
        <div class="recall-box__input-title">
            <h2 class="text-2xl font-semibold text-center">Успех</h2>
            <p class="text-sm mt-2 text-center">Сообщение успешно отправлено! С Вами свяжутся в ближайшее время</p>
        </div>
        <img src="assets/img/icons/success.svg" class="mt-10 mb-7" alt="">
        <button class="form-btn">Закрыть</button>
    </div>
</div>
