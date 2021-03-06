<?php
/**
 * Конфигурация кэш=хранилищ
 * Хранилище определяется совпадением ключа хранилища с левой частью ключа кэш-значения
 * Указывается класс хранидища и параметры подключения. Ключ хранинилища - это ключ массива конфигурации
 */
$stores = array(
    // Модуль кэширования по умолчанию для всех
    '' => array(
        'class' => '\Boolive\cache\stores\FileCache',
        'connect' => array(
            'dir' => DIR_SERVER.'../cache/'
        )
    )
);