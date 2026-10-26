<?php

$vacanciesRequestStore = get_vacancies_request_store();

$vacanciesRequestData = json_decode(file_get_contents('php://input'), true);

$vacanciesRequestStore->insert($vacanciesRequestData);

echo json_encode([
  'status' => 'ok',
  'message' => 'Ваша заявка успешно принята!',
  'vacanciesRequestData' => $vacanciesRequestData,
]);