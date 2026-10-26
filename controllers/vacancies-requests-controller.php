<?php

if (isset($_GET['delete-vacancy-request'])) {
    get_vacancies_request_store()->deleteById($_GET['delete-vacancy-request']);
    header('Location: ?page=vacancies-requests');
    exit;
}

$vacanciesRequests = get_vacancies_request_store()->findAll();

echo view('pages.vacancies-requests', [
  'vacanciesRequests' => $vacanciesRequests

]);