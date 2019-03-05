<?php
/*
 * Template Name: Contact Template
 */
?>
<section id="contact">
    <div class="contact__container container">
        <h2 class="headline--big">КОНТАКТ</h2>
        <hr class="underline">
        <form class="contact__form">
            <div class="pInputs">
                <div>
                    <label for="pname">Имя родителя<br><input class="contact__form--fieldBorder" type="text"
                                                              id="pname" name="pname"></label>
                </div>
                <div>
                    <label for="psurname">Фамилия родителя <br><input class="contact__form--fieldBorder" type="text"
                                                                      id="psurname" name="psurname"></label>
                </div>
                <div>
                    <label for="tel">Телефон <br><input class="contact__form--fieldBorder" type="tel" id="tel"
                                                        name="tel"></label>
                </div>
                <div>
                    <label for="email">Электронный адрес <br> <input class="contact__form--fieldBorder" type="email" id="email" name="email"></label>
                </div>
            </div>
            <div class="chInputs">
                <div>
                    <label for="chname">Имя ребёнка<br><input class="contact__form--fieldBorder" type="text"
                                                              id="chname" name="chname"></label>
                </div>
                <div>
                    <label for="chsurname">Фамилия ребёнка<br><input class="contact__form--fieldBorder" type="text"
                                                                     id="chsurname" name="chsurname"></label>
                </div>
                <div>
                    <label for="bday">Дата рождения ребёнка<br><input class="contact__form--fieldBorder" type="date"
                                                                      id="bday" name="bday"></label>
                </div>
            </div>
            <div class="selectGroup">
                <div>
                    <label for="visit">В настоящий момент ребёнок посещает</label>
                    <br>
                    <select class="contact__form--fieldBorder" name="visit" id="visit">
                        <option selected value="nursery">детский сад</option>
                        <option value="school">школу</option>
                        <option value="nothing">ничего не посещает</option>
                    </select>
                </div>
                <div>
                    <label for="ruLangSkill">Уровень владения ребёнка русским языком</label>
                    <br>
                    <select class="contact__form--fieldBorder" name="ruLangSkill" id="ruLangSkill">
                        <option selected value="understand">понимает</option>
                        <option value="speak-understand">говорит - понимает</option>
                        <option value="0-0">не говорит - не понимает</option>
                        <option value="0">не говорит</option>
                    </select>
                </div>
                <div>
                    <label for="information">Информация о семье</label>
                    <br>
                    <select class="contact__form--fieldBorder" name="information" id="information">
                        <option selected value="mono">одноязычная семья</option>
                        <option value="poly">Многоязычная семья</option>
                    </select>
                </div>
            </div>
            <div class="annotation">
                <label for="annotationField">Примечание / пожелание родителей:</label>
                <br>
                <textarea class="contact__form--fieldBorder" name="annotationField" id="annotationField"></textarea>
            </div>
            <div class="contactButton">
                <button>Отправить</button>
            </div>
        </form>
    </div>
</section>
