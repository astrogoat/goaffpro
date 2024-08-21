<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('goaffpro.enabled', false);
        $this->migrator->add('goaffpro.key', '');
    }

    public function down()
    {
        $this->migrator->delete('goaffpro.enabled');
        $this->migrator->delete('goaffpro.key');
    }
};
