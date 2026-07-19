<?php

/*
 * Copyright CWSPS154. All rights reserved.
 * @auth CWSPS154
 * @link  https://github.com/CWSPS154
 */

return [
    'system' => 'System',
    'user' => [
        'manager' => 'Menadżer Użytkowników',
        'resource' => [
            'user' => 'Użytkownik',
            'form' => [
                'name' => 'Imię',
                'email' => 'Email',
                'mobile' => 'Telefon',
                'role' => 'Rola',
                'password' => 'Hasło',
                'confirm-password' => 'Potwierdź Hasło',
                'active' => 'Aktywny',
                'profile-image' => 'Zdjęcie Profilowe',
            ],
            'table' => [
                'image' => 'Obraz',
                'online' => 'Online',
                'verified' => 'Zweryfikowany',
                'created-at' => 'Utworzony o',
                'updated-at' => 'Zaktualizowany o',
                'deleted-at' => 'Usunięty o',
                'created-by' => 'Utworzony Przez',
                'updated-by' => 'Zaktualizowany Przez',
                'deleted-by' => 'Usunięty Przez',
                'actions' => [
                    'edit-profile' => 'Edytuj Profil',
                ],
            ],
        ],
        'validation' => [
            'have-access-page' => 'Nie masz uprawnień do dostępu do tej strony.',
            'is-active' => 'Twoje konto nie jest obecnie aktywne.',
        ],
    ],
    'role' => [
        'resource' => [
            'role' => 'Rola',
            'form' => [
                'name' => 'Rola',
                'identifier' => 'Identyfikator',
                'all-permission' => 'Wszystkie Uprawnienia',
                'is-active' => 'Jest Aktywny',
                'permissions' => 'Uprawnienia',
            ],
            'table' => [
                'created-at' => 'Utworzony o',
                'updated-at' => 'Zaktualizowany o',
            ],
        ],
    ],
    'permission' => [
        'resource' => [
            'permission' => 'Uprawnienia',
            'form' => [
                'name' => 'Nazwa',
                'identifier' => 'Identyfikator',
                'panel-ids' => 'Panel',
                'children' => 'Podkategire',
                'route' => 'Ścieżka',
                'status' => 'Status',
            ],
            'table' => [
                'created-at' => 'Utworzony o',
                'updated-at' => 'Zaktualizowany o',
            ],
        ],
        'validation' => [
            'unique-route' => 'Nie ma :attribute z tym :value',
            'no-panel-id' => 'Nie znaleziono panelu o id: :panel_id',
        ],
        'console' => [
            'sync-permissions-config-not-found' => 'Nie znaleziono plików konfiguracyjnych :config.',
            'sync-permissions-config-loading' => 'Ładowanie uprawnień z: :path',
            'sync-permissions-empty' => 'Nie znaleziono uprawnień w plikach konfiguracyjnych.',
            'sync-permissions-completed' => 'Uprawnienia zsynchronizowane pomyślnie.',
            'sync-permissions' => 'Synchronizowanie uprawnienia: :identifier',
            'sync-permission-deleted-permissions' => 'Usunięte uprawnienia: :identifiers',
            'sync-permission-invalid-data-format' => 'Nieprawidłowy format uprawnienia. Uprawnienie: :permission',
        ],
        'import' => [
            'completed' => 'Import uprawnień zakończony i :successful_rows :row zaimportowano.',
            'failed' => ' :failedRowsCount :row nie udało się zaimportować.',
            'helper-text' => [
                'identifier' => 'Będzie używany do identyfikacji uprawnienia w bazie danych. Musi być unikalny.',
                'panel-ids' => 'Powinien być przynajmniej jeden identyfikator panelu pasujący do tej wartości, wiele wartości powinno być oddzielone przecinkami',
                'route' => 'Powinien być przynajmniej jeden nazwa ścieżki pasująca do tej wartości lub wartość null',
                'parent' => 'Identyfikator uprawnienia nadrzędnego',
            ],
        ],
        'export' => [
            'completed' => 'Eksport uprawnień zakończony i :successful_rows :row wyeksportowano.',
            'failed' => ' :failedRowsCount :row nie udało się wyeksportować.',
        ],
    ],
];