<?php

Route::set('/', function () {
    Homepage::CreateView('Homepage', Homepage::index());
});

Route::set('/account', function () {
    Account::CreateView('Account', Account::index());
});

Route::set('/account/wallet', function () {
    Account::CreateView('Wallet', Account::wallet());
});

Route::set('/api/currencies', function () {
    Currencies::CreateView('Currencies', Currencies::get());
});

Route::notFound();