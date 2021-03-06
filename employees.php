<?php

return $employeeData = [
    // Сотрудники в штате с фиксированным окладом
    'Designer' => [
        'Кошкин Владислав' => [50000],
        'Алибабаев Василий' => [50000]
    ],

    // Сотрудники в штате с фиксированным окладом и процентной ставкой ["оклад" / "продано на"]
    'Seller' => [
        'Петухова Инесса' => [45000, 100000],
        'Попугаев Иннокентий' => [55000, 115000],
        'Кукушкина Алёна' => [45000, 90000]
    ],

    // Внештатные сотрудники с почасовой оплатой ["Ставка сотрудника"]
    'Supernumerary' => [
        'Безруков Андрей' => [1000]
    ]
];
