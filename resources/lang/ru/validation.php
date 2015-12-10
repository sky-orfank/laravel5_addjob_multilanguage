<?php
return [
  'custom' => [
    'title' => [
      'required' => 'Вы не указали название вакансии',
      'max' => 'Слишком длинное название вакансии',
    ],
    'description' => [
      'required' => 'Вы не ввели описание вакансии',
      'max' => 'Описание вакансии слишком длинное',
    ],
    'salary' => [
      'required' => 'Вы не ввели сумму заработной платы',
      'numeric' => 'Сумма заработной платы должна быть цифрой',
    ],
  ],
];
