<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_mergeusers', language 'ru', version '4.0'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Выбрать пользователей для слияния';
$string['clear_selection'] = 'Отменить данный выбор пользователей';
$string['cligathering:description'] = 'Задайте пары ID пользователей для переноса данных первого пользователя во второго. Первый пользователь с ID (fromid) «потеряет» все свои данные и будет перемещен во второго (toid). Пользователь «toid» будет содержать данные обоих пользователей.';
$string['cligathering:fromid'] = 'ID пользователя-источника (fromid):';
$string['cligathering:stopping'] = 'Чтобы остановить слияние, нажмите Ctrl+C или наберите -1 в поле fromid или toid.';
$string['cligathering:toid'] = 'ID пользователя-преемника (toid):';
$string['dbko_no_transactions'] = '<strong>Слияние не удалось!</strong> <br/>Ваша система управления базами данных не поддерживает транзакции. Поэтому, ваша база данных <strong>была изменена</strong>. Состояние вашей базы данных может быть некорректным. <br/>Однако, просмотрите протокол слияния и, пожалуйста, сообщите об ошибке разработчикам плагина. Вы получите решение в кратчайшее время. После обновления плагина до его последней версии, которое будет содержать решение этой проблемы, повторите операцию слияния для ее успешного завершения.';
$string['dbko_transactions'] = '<strong>Слияние не удалось!</strong> <br/>Ваша система управления базами данных поддерживает транзакции. Поэтому, вся текущая транзакция была отменена и <strong>изменения в вашу базу данных не были внесены</strong>.';
$string['dbok'] = 'Слияние успешно!';
$string['deleted'] = 'Пользователь с ID {$a} был удален';
$string['error_return'] = 'Вернуться к форме поиска';
$string['errorsameuser'] = 'Попытка слияния пользователя самого с собой';
$string['errortransactionsonly'] = 'Ошибка: неоходимы транзакции, однако ваш тип базы данных {$a} их не поддерживает. Если необходимо, вы можете разрешить слияние пользователей без транзакций. Пожалуйста, просмотрите  настройки плагина, чтобы задать их правильно.';
$string['eventusermergedfailure'] = 'Слияние не удалось';
$string['eventusermergedsuccess'] = 'Слияние выполнено успешно';
$string['excluded_exceptions'] = 'Убрать из исключений';
$string['excluded_exceptions_desc'] = 'Исходя из опыта, все эти таблицы базы данных должны быть исключены из процесса слияния. Подробности описаны в файле README. <br> Поэтому, чтобы плагин себя вел по умолчанию, вам необходимо выбрать «{$a}» для исключения всех этих таблиц из процесса слияния (рекомендуется).<br>Если хотите, вы можете исключить любые из этих таблиц и включить их в процесс слияния (не рекомендуется).';
$string['exportlogs'] = 'Экспортировать протоколы в CSV';
$string['finishtime'] = 'Слияние завершено в {$a}';
$string['form_description'] = '<p>Вы можете искать здесь пользователей, если не знаете логин пользователя или его ID. В противном случае вы можете развернуть форму и ввести информацию напрямую. Пожалуйста, посмотрите помощь о полях для получения более подробной информации</p>';
$string['form_header'] = 'Найти пользователей для слияния';
$string['header'] = 'Слияние двух пользователей в одну учётную запись';
$string['header_help'] = '<p>Заданы удаляемый и сохраняемый пользователи, данная операция перенесет данные, связанные с первым пользователем, во второго пользователя. Обратите внимание, что оба пользователя уже должны существовать и ни одна из учетных записей фактически не будет удалена. Удаление должен будет вручную сделать администратор.</p>
 <p><strong>Делайте это только в том случае, если вы точно знаете, что именно вы делаете, так как отменить это действие невозможно!</strong></p>';
$string['into'] = 'в';
$string['invalid_option'] = 'Неправильный параметр формы';
$string['invaliduser'] = 'Неправильный пользователь';
$string['logid'] = 'Для последующей работы, эти результаты записаны в протокол с ID {$a}.';
$string['logko'] = 'Произошла ошибка:';
$string['loglist'] = 'Все эти записи — выполненные действия по слиянию, показана успешность их выполнения:';
$string['logok'] = 'Запросы, которые были отправлены в базу данных:';
$string['mergedbyuseridonlog'] = 'Исполнитель слияния';
$string['mergeusers'] = 'Выполнить слияние учётных записей';
$string['mergeusers:mergeusers'] = 'Выполнять слияние учётных записей';
$string['mergeusers:view'] = 'Слияние учётных записей';
$string['mergeusers_confirm'] = 'После подтверждения начнется процес слияния.<br /><strong>Его нельзя будет отменить!</strong>Вы уверены, что хотите продолжить?';
$string['mergeusersadvanced'] = '<strong>Прямой ввод пользователей</strong>';
$string['mergeusersadvanced_help'] = 'Вы можете ниже ввести данные в поля, если точно знаете, слияние каких пользователей хотите выполнить.<br /><br />Щелкните на кнопке «Найти», чтобы проверить/подтвердить, что введены данные фактических пользователей.';
$string['merging'] = 'Слияние выполнено';
$string['newuser'] = 'Сохраняемый пользователь';
$string['newuserid'] = 'ID сохраняемого пользователя';
$string['newuseridonlog'] = 'Пользователь сохранен';
$string['no_saveselection'] = 'Вы не выбрали старого или нового пользователя.';
$string['nologs'] = 'Протоколов слияния пока нет. Хорошо вам!';
$string['nomergedby'] = 'Не записано';
$string['olduser'] = 'Удаляемый пользователь';
$string['olduserid'] = 'ID удаляемого пользователя';
$string['olduseridonlog'] = 'Пользователь удален';
$string['pluginname'] = 'Слияние учётных записей';
$string['privacy:metadata'] = 'Плагин «Слияние учётных записей» не хранит никаких персональных данных.';
$string['qa_action_delete_fromid'] = 'Сохранять попытки нового пользователя';
$string['qa_action_delete_toid'] = 'Сохранять попытки старого пользователя';
$string['qa_action_remain'] = 'Ничего не делать: не выполнять слияние и не удалять';
$string['qa_action_remain_log'] = 'Данные пользователя из таблицы <strong>{$a}</strong> не были обновлены.';
$string['qa_action_renumber'] = 'Выполнять слияние попыток обоих пользователей и перенумеровывать';
$string['qa_chosen_action'] = 'Выбранный вариант для попыток в тестах: {$a}.';
$string['qa_grades'] = 'Оценки пересчитаны  для тестов: {$a}.';
$string['quizattemptsaction'] = 'Как поступать с попытками в тестах';
$string['quizattemptsaction_desc'] = 'При слиянии попыток в тестах возможны три случая:
    <ol>
    <li>Попытки в тестах есть только у старого пользователя. Все попытки будут перенесены, как если бы они были сделаны новым пользователем.</li>
    <li>Попытки в тестах есть только у нового пользователя. Все корректно и ничего не делается.</li>
    <li>У обоих пользователей есть попытки в одном и том же тесте. <strong>Вы должны выбрать, что делать в случае такого конфликта.
    </strong>. Вам необходимо выбрать одно из следующих действий:
        <ul>
        <li><strong>{$a->renumber}</strong>. Попытки старого пользователя будут объединены с попытками нового пользователя и перенумерованы, исходя из времени начала каждой попытки.</li>
        <li><strong>{$a->delete_fromid}</strong>. Попытки старого пользователя будут удалены. Попытки нового пользователя сохранятся, поскольку эта настройка считает их наиболее важными.</li>
        <li><strong>{$a->delete_toid}</strong>. Попытки нового пользователя будут удалены. Попытки старого  пользователя сохранятся, поскольку эта настройка считает их наиболее важными.</li>
        <li><strong>{$a->remain}</strong> (по умолчанию). Попытки не будут ни объединены, ни удалены, оставшись закрепленными за тем пользователем, который их выполнил. Это наиболее безопасное действие, но слияние пользователей из A в Б или из Б в А может дать разные оценки за тесты.</li>
        </ul>
    </li>
    </ol>';
$string['results'] = 'Результаты слияния и протокол';
$string['review_users'] = 'Подтвердить пользователей для слияния';
$string['saveselection_submit'] = 'Сохранить выделение';
$string['searchuser'] = 'Поиск пользователя';
$string['searchuser_help'] = 'Введите логин, имя/фамилию пользователя, адрес электронной почты или ID для поиска потенциальных пользователей. Вы можете также указать, что хотите искать только по конкретному полю.';
$string['starttime'] = 'Слияние начато в {$a}';
$string['suspenduser_setting'] = 'Заблокировать старого пользователя';
$string['suspenduser_setting_desc'] = 'При включенном параметре старый пользователь будет автоматически заблокирован после успешного завершения процесса слияния и он не сможет войти в Moodle (рекомендуется). Если параметр отключен, то старый пользователь останется активным. В обоих случаях данные, связанные со старым пользователем, в нем не сохранятся.';
$string['tableko'] = 'Таблица {$a} : обновление НЕ УДАЛОСЬ!';
$string['tableok'] = 'Таблица {$a} : обновлена УСПЕШНО';
$string['tableskipped'] = 'В целях безопасности и протоколирования мы пропускаем <strong>{$a}</strong>.
 <br />Чтобы удалить эти записи, удалите старого пользователя после успешного завершения работы этого скрипта.';
$string['timetaken'] = 'Слияние заняло {$a} секунд';
$string['transactions_not_supported'] = 'К сведению, ваша база данных
    <strong>не поддерживает транзакции</strong>.';
$string['transactions_setting'] = 'Разрешены только транзакции';
$string['transactions_setting_desc'] = 'При включенном параметре слияние пользователей не будет работать на базах данных, которые НЕ поддерживают транзакции (рекомендуется). Включение необходимо, чтобы быть уверенным, что ваша база данных останется целостной в случае возникновения ошибки при слиянии. <br />Если параметр отключен, то Вы всегда сможете запустить действия по слиянию. В случае ошибок, протокол слияния покажет, в чем была проблема. Отправка протокола разработчикам плагина в кратчайшее время даст вам решение проблемы. <br />Кроме того, таблицы ядра Moodle и некоторые плагины сторонних разработчиков уже учитываются этим плагином. Если в вашей установке Moodle нет плагинов сторонних разработчиков, Вы можете спокойно запускать этот плагин независимо от значения этого параметра.';
$string['transactions_supported'] = 'К сведению, ваша база данных
    <strong>поддерживает транзакции</strong>.';
$string['uniquekeynewidtomaintain'] = 'Сохранять данные нового пользователя';
$string['uniquekeynewidtomaintain_desc'] = 'В случае конфликта, например, когда столбец, связанный с user.id, является уникальным ключом, этот плагин сохранит данные нового пользователя (по умолчанию). Это также означает, что данные старого пользователя будут удалены, чтобы сохранить целостность. В противном случае, если вы отключите этот параметр, данные старого пользователя будут сохранены.';
$string['usermergingheader'] = '«{$a->username}» (ID пользователя = {$a->id})';
$string['userreviewtable_legend'] = '<b>Проверка пользователей для слияния</b>';
$string['userselecttable_legend'] = '<b>Выбор пользователей для слияния</b>';
$string['viewlog'] = 'Посмотреть протоколы слияния';
$string['wronglogid'] = 'Запрашиваемый протокол не существует.';
