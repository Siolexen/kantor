<?php

Route::set('index.php', function () {
    Homepage::CreateView('Homepage');
});

Route::set('account', function () {
    Account::CreateView('Account');
});

Route::notFound();